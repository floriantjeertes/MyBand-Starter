$servername ="localhost";
$uid="root";
$pwd="";
$database="gamedata";
$con = mysqli_connect($servername,$uid,$pwd,$database);

if(!$con){
  die('kan niet verbinden: '.mysqli_error($con));
}
