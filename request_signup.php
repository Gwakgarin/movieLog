<?php


$db_host="localhost";
$db_user="root";
$db_pwd="8776";
$db_name="movielog";

$id=$_POST['id'];
$password=$_POST['pwd'];
$pwd_confirm = $_POST['pwd_confirm'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$conn= new mysqli($db_host, $db_user, $db_pwd, $db_name);

if(!$conn){
    echo"db error";
    return;
}


$sql = "INSERT INTO user (id, password, name, email, phone) VALUES ('$id','$password','$name','$email','$phone');";
$result = mysqli_query($conn,$sql);


if ($result) {
    echo "<script>alert('회원가입이 완료되었습니다.'); location.href='login.php';</script>";
} else {
    echo "<script>alert('회원가입 실패: 중복된 아이디 또는 서버 오류'); history.back();</script>";
}

$conn->close();


?>