<?php
$db_host="localhost";
$db_user="root";
$db_pwd="8776";
$db_name="movielog";

$movie_id=$_POST['movie_id'];
$content=$_POST['content'];

$conn= new mysqli($db_host, $db_user, $db_pwd, $db_name);

if(!$conn){
    echo"db error";
    return;
}

// $sql= "insert * from movie_reviews where content='$content';";
$sql = "INSERT INTO movie_reviews (movie_id, content) VALUES ($movie_id, '$content');";
echo $sql;
$result = mysqli_query($conn,$sql);
?>