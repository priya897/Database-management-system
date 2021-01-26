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
 


$Essn =  mysqli_real_escape_string($link, $_POST['Essn']);
$Dependent_name= mysqli_real_escape_string($link, $_POST['Dependent_name']);
$Gender	= mysqli_real_escape_string($link, $_POST['Gender']);
$Bdate	= mysqli_real_escape_string($link, $_POST['Bdate']);
$Relationship	= mysqli_real_escape_string($link, $_POST['Relationship']);
$mob_no= mysqli_real_escape_string($link, $_POST['mob_no']);

 
// Attempt insert query execution
$sql = "INSERT INTO DEPENDENT(Essn, Dependent_name, Gender, Bdate, Relationship, mob_no) VALUES ('$Essn', '$Dependent_name', '$Gender','$Bdate','$Relationship','$mob_no')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>