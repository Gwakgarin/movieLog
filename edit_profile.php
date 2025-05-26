<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('로그인이 필요합니다.'); location.href='login.php';</script>";
    exit;
}


$id = $_SESSION['id']; 
$name = $_SESSION['name'];
$email = $_SESSION['email']; 
$phone = $_SESSION['phone']; 
?>



<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>회원 정보 수정</title>
</head>
<body>

<h2>회원 정보 수정</h2>

<form action="request_edit_profile.php" method="post">
  <p>아이디(변경 불가) <br> <?php echo $_SESSION['id']; ?></p>
  <p>이름(변경 불가) <br> <?php echo $_SESSION['name']; ?></p>

  <label>이메일</label><br>
  <input type="email" name="email" value="<?php echo $email; ?>"><br><br>

  <label>전화번호</label><br>
  <input type="text" name="phone" value="<?php echo $phone; ?>"><br><br>

  <label>기존 비밀번호</label><br>
  <input type="password" name="password"><br><br>

  <label>비밀번호 변경</label><br>
  <input type="password" name="new_password"><br><br>

  <input type="submit" value="정보 수정">
</form>


</body>
</html>
