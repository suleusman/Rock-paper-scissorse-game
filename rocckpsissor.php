<?php
session_start();
include("connect.php")    
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Rock-Paper-Scissors</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/rockps.css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="css/responsive.css" charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/rockps.js" charset="utf-8"></script>
      
  </head>
  <body>
    <div class="container">
        <div style="width:100%; margin:auto; height:25px; text-align:right; padding-top:10px;"><button onclick="displayResult()">Highest score</button>
            &nbsp;<a href="display.php" target="_blank"><button>Confirm Score</button></a></div>
        
        <div id="result" style="display:none;">
        <?php
        $sql = "SELECT Name, Wins, Losses, Draws FROM score order by  Wins DESC LIMIT 1";
          $result = mysqli_query($dbcon, $sql);
         if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "The highest score is  " . $row["Wins"]."  and the player name is ". $row["Name"];
        }
         } else {
        echo "Sorry, You have not save any score yet";
         }
        ?>
        </div>
        
         <script>
        function displayResult(){ 
           var x = document.getElementById("result");
            if(x.style.display =="none")
            {x.style.display = "block";}
            else{x.style.display="none";}
        }
        
        </script>
      <h1 class="welcome">Welcome to the Rock-Paper-Scissors Game Designed by Sule Gimab</h1>

      <h3>Please enter the max time you wish to play:</h3>
      <form class="user_input" id="user_data" action="">
		<label id="name">Name: </label><input type = "text" id = "playerName">
		<br><br>
        <label>Minutes: </label><input type="number" id="mins">
        <label>Seconds: </label><input type="number" id="secs">
        <input type="button" value="Play" id="play_game" onclick="test()">
      </form>
<script type="text/javascript">
        function test(){
            var pname = document.getElementById("playerName").value;
            document.getElementById("player").innerHTML = "Player Name: "+pname;
        }
        
        </script>
      <div class="timer">
        <h3 class="time_holder"></h3>
        <h1 class="warning"></h1>
      </div>
     <div id="player" style="color:marron; font-size:20px; text-align:center;"></div>
      <div class="options"></div>

      <div class="robot_decision"></div>

      <h1 class="who_won"></h1>
      <div class="restart_game"></div>
      <div class="score"></div>
	  <div>&nbsp;<br><br><br></div>
    </div>
	
	
  </body>
</html>