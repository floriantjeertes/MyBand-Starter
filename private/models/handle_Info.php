<?php
$servername ="localhost";
$uid="root";
$pwd="";
$database="gamedata";
$con = mysqli_connect($servername,$uid,$pwd,$database);
$gebruikersnaam = $_GET
if(!$con){
  die('kan niet verbinden: '.mysqli_error($con));
}
$result = mysqli_query($con,$sql);

$zoekterm = $_GET[""]

$sql="SELECT * FROM GameInfo WHERE Title= $Title AND GameInfo= $GameInfo";


  ?>
