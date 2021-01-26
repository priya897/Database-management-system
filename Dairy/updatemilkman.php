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
 


$Fname =  mysqli_real_escape_string($link, $_POST['Fname']);
$Minit= mysqli_real_escape_string($link, $_POST['Minit']);
$Lname	= mysqli_real_escape_string($link, $_POST['Lname']);
$milkman_id	= mysqli_real_escape_string($link, $_POST['milkman_id']);
$Address	= mysqli_real_escape_string($link, $_POST['Address']);
$Dno	= mysqli_real_escape_string($link, $_POST['Dno']);
$mob_no= mysqli_real_escape_string($link, $_POST['mob_no']);
$Emilkman_id	= mysqli_real_escape_string($link, $_POST['Emilkman_id']);


 
// Attempt insert query execution
$sql = "UPDATE MILKMAN SET Lname='$Lname', Minit='$Minit', Lname='$Lname', milkman_id='$milkman_id', Address='$Address', Dno='$Dno',mob_no='$mob_no' WHERE Emilkman_id='$Emilkman_id')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>