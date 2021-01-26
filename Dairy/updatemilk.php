<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "dairy");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
{
	echo "connectd";
}
 


$milkman_id =  mysqli_real_escape_string($link, $_POST['milkman_id']);
$qty= mysqli_real_escape_string($link, $_POST['qty']);
$cost	= mysqli_real_escape_string($link, $_POST['cost']);
$cattletype	= mysqli_real_escape_string($link, $_POST['cattletype']);
$fatlevel	= mysqli_real_escape_string($link, $_POST['fatlevel']);
$Emilkman_id =  mysqli_real_escape_string($link, $_POST['Emilkman_id']);


 
// Attempt insert query execution
$sql = "UPDATE MILK SET milkman_id='$milkman_id', qty='$qty', cost='$cost', cattletype='$cattletype', fatlevel='$fatlevel' WHERE milkman_id='$Emilkman_id";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>