<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  echo "<script>alert('로그인이 필요합니다.'); location.href='login.php';</script>";
  exit;
}

$user_id = $_SESSION['user_id'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$new_password = $_POST['new_password'];

$db = new mysqli("localhost", "root", "8776", "movielog");
if ($db->connect_error) {
  die("DB 연결 실패: " . $db->connect_error);
}


$sql = "SELECT password FROM user WHERE user_id = ?";
$stmt = $db->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
  $current_password = $row['password'];
} else {
  echo "<script>alert('사용자 정보를 찾을 수 없습니다.'); history.back();</script>";
  exit;
}
$stmt->close();

if (!empty($new_password)) {
  
  if ($password !== $current_password) {
    echo "<script>alert('기존 비밀번호가 일치하지 않습니다.'); history.back();</script>";
    exit;
  }

  $sql = "UPDATE user SET email = ?, phone = ?, password = ? WHERE user_id = ?";
  $stmt = $db->prepare($sql);
  $stmt->bind_param("sssi", $email, $phone, $new_password, $user_id);
} else {
  
    // 비밀번호 변경 없음
  $sql = "UPDATE user SET email = ?, phone = ? WHERE user_id = ?";
  $stmt = $db->prepare($sql);
  $stmt->bind_param("ssi", $email, $phone, $user_id);
}

if ($stmt->execute()) {
  echo "<script>alert('정보가 성공적으로 수정되었습니다.'); location.href='mypage.php';</script>";
} else {
  echo "<script>alert('정보 수정 실패'); history.back();</script>";
}

$stmt->close();
$db->close();
?>
