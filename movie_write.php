<html>
<head><title>영화 리뷰 작성 페이지</title></head>
<body>
<h1>리뷰 작성하기</h1>
<form action="/request_movie_write.php" method="post">
리뷰 <br>
<input type="hidden" name="movie_id" value="1">
<input type="text" name="content"> <br><br>
<!-- <fieldset>
    <legend>태그를 선택해주세요.</legend>
    <div>
       <input type="checkbox" id="classic-">
       <label for="">고전 미술</label>
    </div>
    <div>
       <input type="checkbox" id="classic-masterpiece">
       <label for="">고전 명작</label>
    </div>
    <div>
       <input type="checkbox" id="">
       <label for="">로맨스 명작</label>
    </div>
</fieldset><br> -->
<input type="submit" value="작성하기">
</form>
</body>
</html>