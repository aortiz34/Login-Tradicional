<?php
 $conexion=mysqli_connect("localhost","root","root","loggin");
	
  if ($conexion->connect_error) {
    echo 'Errno: '.$conexion->connect_errno;
    echo '<br>';
    echo 'Error: '.$conexion->connect_error;
    exit();
  }

  echo 'Success: A proper connection to MySQL was made.';
  echo '<br>';
  echo 'Host information: '.$conexion->host_info;
  echo '<br>';
  echo 'Protocol version: '.$conexion->protocol_version;

  $conexion->close();
?>