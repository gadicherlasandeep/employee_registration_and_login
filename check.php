<?php

if(isset($_REQUEST['submit']))
{
    $e=$_REQUEST['email'];
    $p=$_REQUEST['password'];
echo $e;
echo $p;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emp";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn)
    die("Connection failed");
   else
       $sql ="SELECT *FROM `reg`";
;
        $retval =mysqli_query($conn,$sql);

    if (!$retval) 
        {
            die('could not get data');
        }
        while ($row= mysqli_fetch_array($retval,MYSQLI_ASSOC))
        {
            
         if(($e==$row['Email'])&&($p==$row['Password']))
         {
             header("Location: success.php");
                return true;
         }
        }
        header("Location: loginerror.php");

        
}
?>
       