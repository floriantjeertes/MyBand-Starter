<?php
// require '../includes/functions.php';
//florian tjeertes md1b

$servername ="127.0.0.1";
$uid="c4194florian";
$pwd="chfoddsw";
$database="c4194gamedata";
$con = mysqli_connect($servername,$uid,$pwd,$database);
// $q = $_GET['q'];

if(!$con){
  die('kan niet verbinden: '.mysqli_error($con));
}
$Title = "'%".$_GET['zoek']."%'";
$GameInfo ="'%Mario%'";
$sql="SELECT * FROM GameInfo WHERE Title LIKE $Title";
$result = mysqli_query($con,$sql);

$number = 0;
while($row = mysqli_fetch_array($result)){





  $Id= $row['id'];
	$BoxArt = $row['Img'];

  $Title = $row['Title'];
	$GameInfo = $row['GameInfo'];
	$file = $row['file'];





//

echo '<div id=object1>';
echo '<div id="tietel">'. $Title . '</div>';
echo "<br><br>";
echo '<div id="Info">' .'<p div="Itext">'. $GameInfo.'</p>'. '</div>';
echo "<br><br>";
echo '<div id="boxart"><img id=boxartPlaatje src="./images/nes_covers/'  . $BoxArt . '"></div>';
echo '<div id="GameButton"><a id="gameButton" onclick="gameredirect('.$number.')"><img class="GameButton" src="./images/nes.png"></a></div>';
echo '<input type=hidden id='.$number.' value='.$file.'>';
echo '<input type=hidden id="ID" value='.$Id.'>';

echo '</div>';
$number = $number+1;
}

mysqli_close($con);

?>
<?php
$str = "A string here";
?>
<script type="text/javascript">
</script>
