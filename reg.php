<?php
if(isset($_REQUEST['submit']))
{
    
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['pass'];
$location=$_REQUEST['loc'];
$address=$_REQUEST['add'];
$contact=$_REQUEST['mn'];
$pan=$_REQUEST['pan'];
$aadhaar=$_REQUEST['aad'];


$con= mysqli_connect('localhost', 'root', '', 'emp','3306');
$sql = "INSERT INTO `reg`(`Name`, `Email`, `Password`, `Location`, `Address`, `Contact`, `PAN`, `Aadhaar`) VALUES ('$name','$email','$password','$location','$address','$contact','$pan','$aadhaar')";
$r= mysqli_query($con, $sql);
if($r)
{
    //$message="Congratulation,Registration Success"; 
    //echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location: index.php");
    exit;
    
}


 else
     {
echo 'unable to connect';
}
}
?>
