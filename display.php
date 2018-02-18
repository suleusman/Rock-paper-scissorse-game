<?php

include('connect.php');

$sqlget = "SELECT * FROM score";
$sqldata = mysqli_query($dbcon, $sqlget) or die('Error');
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div style="width: 70%; margin:auto; text-align:center;">
<h1>Saved Scores from the Game</h1>

<table width="70%" align="center">
<thead>
    <tr style="background-color:#ccc;">
    <th>S/No.</th>    
    <th>Player Name</th>    
    <th>Wins</th>    
    <th>Losses</th>    
    <th>Draws</th>    
    </tr>
</thead>
<tbody>
    <?php
        $count = 1;
while ($row = mysqli_fetch_array($sqldata)){
    echo "<tr>";
	echo "<td>".$count."</td>";
	echo "<td>".$row['Name']."</td>";
	echo "<td>".$row['Wins']."</td>";
	echo "<td>".$row['Losses']."</td>";
	echo "<td>".$row['Draws']."</td>";
    echo "</tr>";
	$count++;
}
?>
</tbody>
</table>
 </div>
</body>
</html>