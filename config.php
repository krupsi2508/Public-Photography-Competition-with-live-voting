<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "photography");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$confpassword = mysqli_real_escape_string($link, $_REQUEST['confpassword']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);
function validate_registation($name,$password,$confpassword,$email,$mobile)
{
	global $db;
	$nameerr = $passworderr =$confpassworderr = $emailerr = $mobileerr='';
	$name =  trim($name);
	$password = trim($password);
	$confpassword = trim($confpassword);
	$email = trim($email);
	$mobile = trim($mobile);
	
	if(!preg_match('/^[A-Za-zéåäöÅÄÖ\s\ ]*$/',$name))
	{
		$nameerr = ' enter valid name ';
	}
	if(!preg_match ('/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/', $password))
	{
		$passworderr = 'enter password';
	}	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = 'enter valid email'; 
    }
	if(!preg__match ('/^[0-9]*$/',$mobile))
	{
        $mobile = ' enter valid number';
    }
    if(empty($name))
    {
       $nameerr=' please enter name';
    }
   if(empty($password))
   {
      $passworderr='please enter password';	   
   }
   if(empty($confpassword))
   {
	    $confpassworderr ='password do not match';
   }
  if(empty ($email))
  {
      $emailErr='please enter email';
  }
  if(empty ($mobile))
  {
     $mobileerr='please enter mobile number';
  }
 if($confpassword != $password && !empty($confpassword))
 {
    $confpassworderr='password do not match';
 }
}
// Attempt insert query execution
$sql = "INSERT INTO participants_mst (name, password,confpassword, email,mobile) VALUES ('$name', '$password','$confpassword', '$email','$mobile')";
if(mysqli_query($link, $sql)){
	header("location:login.php");
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
