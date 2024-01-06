<?php
  $servername = "localhost";
  $username = "root";
  $password  = "";
  $dbname = "project_databases";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    
}
else {
    echo "conne fai";
}
?>