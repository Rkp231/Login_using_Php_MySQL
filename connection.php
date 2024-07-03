<?php
$conn = new mysqli("localhost", "root", "", "testlogin");
if(!$conn)
{
	echo $conn->connect_error;
}
 ?>