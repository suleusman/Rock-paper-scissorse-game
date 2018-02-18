<?php


include("connect.php");

$Name = $_GET['Name'];
$Wins = $_GET['win'];
$Losses = $_GET['loss'];
$Draws = $_GET['draw'];

$sql="INSERT INTO score (Name, Wins, Losses, Draws) VALUES ('$Name','$Wins','$Losses','$Draws')";

if (mysqli_query($dbcon, $sql)) {
    echo "Your score was saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);
}

mysqli_close($dbcon);
?>




