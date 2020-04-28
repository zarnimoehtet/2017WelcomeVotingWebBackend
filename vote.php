<?php 
include "Config.php";
$conn = new mysqli($server_name, $mysql_username, $mysql_password,$db_name);

if ($conn->connect_error) {
echo 'no connection';
} 

$user_name = $_GET["name"];
$isVoted = "yes";
$king_name = $_GET["king"];
$queen_name = $_GET["queen"];
$mysql_qry = "update user set isvoted = '$isVoted' , king = '$king_name' , queen = '$queen_name' where name = '$user_name'";

 $result = mysqli_query($conn ,$mysql_qry);
if (! $result) {
	echo "vote success";

}else {
      echo "vote unsuccess";
}
$conn->close();
 
?>