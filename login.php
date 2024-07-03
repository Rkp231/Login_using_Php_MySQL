


<?php
	require_once "connection.php";	
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $email=$_POST['email'];
 $pass=$_POST['password'];
 
 $sql="select * from login where email ='".$email."' and password ='".$pass."'";
	$result=$conn->query($sql);
    if($result->num_rows > 0)
    {
        $row = $result->fetch_array();
     
        $_SESSION['email']=$row['email'];
        echo "success";
    }
 else
      {
  echo "fail";
      }
 exit();
}
?>

