<?php
$servername ="localhost";
$uid="root";
$pwd="";
$database="gamedata";
$con = mysqli_connect($servername,$uid,$pwd,$database);

if(!$con){
  die('kan niet verbinden: '.mysqli_error($con));
}

$gebruikersnaam = $_GET





$sql="INSERT INTO gerbuikers(id,wachtwoord,gebruikersnaam,score) VALUES ()";
?>
