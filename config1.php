<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "photography");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$cnfwpassword = mysqli_real_escape_string($link, $_REQUEST['cnfwpassword']);
$emailid = mysqli_real_escape_string($link, $_REQUEST['emailid']);
$mobileno = mysqli_real_escape_string($link, $_REQUEST['mobileno']);

 
// Attempt insert query execution
$sql = "INSERT INTO voters_mst (username, password,cnfwpassword,emailid,mobileno) VALUES ('$username', '$password','$cnfwpassword' ,'$emailid','$mobileno')";

if(mysqli_query($link, $sql)){
	header("location:vote.html");
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
