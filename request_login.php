<?php
session_start(); 

$id = $_POST['id'];
$password = $_POST['pwd'];

$db_host = "localhost";
$db_user = "root";
$db_pwd = "8776";
$db_name = "movielog";


$conn = new mysqli($db_host, $db_user, $db_pwd, $db_name);


if ($conn->connect_error) {
    echo "<script>alert('DB 연결 실패'); history.back();</script>";
    exit;
}


$sql = "SELECT * FROM user WHERE id='$id' AND password='$password'";
$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
   
    $_SESSION['user_id'] = $row['user_id'];     
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['phone'] = $row['phone'];

    echo "<script>alert('로그인 성공'); location.href='main.php';</script>";
} else {
    // 로그인 실패
    echo "<script>alert('아이디 또는 비밀번호가 틀렸습니다.'); location.href='login.php';</script>";
}

$conn->close();
?>

