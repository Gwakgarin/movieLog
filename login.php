<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>로그인</title>
  <style>
    .button-wrapper {
      display: flex;
      gap: 10px;
      margin-top: 10px;
    }
  </style>
</head>
<body>

<h2>로그인</h2>

<form action="/request_login.php" method="post">
  아이디 <br>
  <input type="text" name="id"> <br>
  비밀번호 <br>
  <input type="password" name="pwd"> <br><br>

  <div class="button-wrapper">
    <input type="submit" value="로그인">
    <button type="button" onclick="location.href='/signup.php'">회원가입</button>
  </div>
</form>

</body>
</html>
