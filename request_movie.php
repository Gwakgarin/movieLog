<?php
$db_host="localhost";
$db_user="root";
$db_pwd="8776";
$db_name="movielog";

$conn= new mysqli($db_host, $db_user, $db_pwd, $db_name);

if(!$conn){
    echo"db error";
    return;
}

$sql= "select * from movies;";
$result = mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($result)){
    echo "<a href='request_movie_detail.php?pkey=$row[movie_id]'>";
    echo "<div>";
    echo $row["title_kr"];
    echo "<br>";
    echo $row["title_en"];
    echo "</div>";
    echo "</a>";
}
?>