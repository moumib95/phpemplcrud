<?php

include 'conn.php';

$Name = $_GET['Name'];
$q = 'DELETE FROM 'crudtable' WHERE Name = $Name';


mysqli_query($con,$q);
header('location:display.php');
?>