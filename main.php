<?php
session_start(); // 로그인 상태 확인을 위해 세션 시작
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>메인페이지</title>
  <style>
    .top-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 10px 20px;
    }

    .top-bar-right {
      display: flex;
      gap: 10px;
    }

    .top-bar form {
      margin: 0;
    }

    div {
      display: flex;
      margin: 20px;
    }
  </style>
</head>
<body>


<div class="top-bar">
  <div><strong>MovieLog</strong></div>

  <div class="top-bar-right">
    <?php if (isset($_SESSION['user_id'])): ?>

      <!-- 로그인 상태일 때 -->
      <form action="mypage.php" method="get">
        <button type="submit">마이페이지</button>
      </form>

      <form action="logout.php" method="post">
        <button type="submit">로그아웃</button>
      </form>
    <?php else: ?>

      <!-- 비로그인 상태일 때 -->
      <form action="login.php" method="get">
        <button type="submit">로그인</button>
      </form>
    <?php endif; ?>
  </div>
</div>


<div>
  <?php include 'request_movie.php'; ?>
</div>

</body>
</html>
