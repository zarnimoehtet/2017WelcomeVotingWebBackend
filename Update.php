<?php 
include "Config.php";
$conn = new mysqli($server_name, $mysql_username, $mysql_password,$db_name);

if ($conn->connect_error) {
echo 'no connection';
} 

$id = $_POST["id"];
$isVoted = $_POST["isvoted"];
$king_name = $_POST["king"];
$queen_name = $_POST["queen"];
$mysql_qry = "update User set isvoted = '$isVoted' , king = '$king_name' , queen = '$queen_name' where id = '$id'";

 $result = mysqli_query($conn ,$mysql_qry);
if ($result) {
	echo "update success";

}else {
      echo "update unsuccess";
}
$conn->close();
 
?>