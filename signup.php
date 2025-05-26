<!DOCTYPE html>
<html lang="ko">
<head><title>회원가입</title></head>
<body>

<h1>회원가입 하기</h1>

<form action="/request_signup.php" method="post">
  아이디 <br>
  <input type="text" name="id" required> <br>

  비밀번호 <br>
  <input type="password" name="pwd" required> <br>

  비밀번호 확인 <br>
  <input type="password" name="pwd_confirm" required> <br>

  이름 <br>
  <input type="text" name="name" required> <br>

  이메일 <br>
  <input type="email" name="email"> <br>

  전화번호 <br>
  <input type="text" name="phone"> <br><br>

  <input type="submit" value="회원가입"> <br>
</form>

</body>
</html>
