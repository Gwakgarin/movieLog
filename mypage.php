<?php
session_start();

// 로그인 상태 확인
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('로그인이 필요합니다.'); location.href='login.php';</script>";
    exit;
}

// 세션에서 정보 가져오기
$id = $_SESSION['id']; // 로그인 시 저장한 'id'
$name = $_SESSION['name'];   // 로그인 시 저장한 'name'
?>



<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>마이페이지</title>
</head>
<body>

<h2>마이페이지</h2>
<p><strong>아이디:</strong> <?php echo $id; ?></p>
<p><strong>이름:</strong> <?php echo $name; ?></p>

<form action="edit_profile.php" method="post">
  <button type="submit">프로필 편집</button>
</form>



</body>
</html>

