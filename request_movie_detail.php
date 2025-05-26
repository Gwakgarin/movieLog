<?php
$db_host="localhost";
$db_user="root";
$db_pwd="8776";
$db_name="movielog";

$movie_id=$_GET["pkey"];
echo "MOVIEID".$movie_id."<br>";

$conn= new mysqli($db_host, $db_user, $db_pwd, $db_name);

if(!$conn){
    echo"db error";
    return;
}

$sql= "select * from movies;";
$result = mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($result)){
    echo "<div>";
    echo $row["title_kr"];
    echo "<br>";
    echo $row["title_en"];
    echo "<br>";
    echo $row["release_date"];
    echo "<br>";
    echo $row["director"];
    echo "<br>";
    echo $row["actors"];
    echo "<br>";
    echo $row["summary"];
    echo "</div>";
}

?>