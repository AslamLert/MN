<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<?php
require('connect.php');

$AccID   = $_REQUEST['AccID'];
$Acc_Date		  = $_REQUEST['Acc_Date'];
$Detail		  = $_REQUEST['Detail'];
$Income		  = $_REQUEST['Income'];
$Outcome	  = $_REQUEST['Outcome'];
$ListID	  = $_REQUEST['ListID'];

$sql = "
	INSERT INTO account
	VALUES ('$AccID','$Acc_Date','$Detail','$Income','$Outcome','$ListID');
	";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
	echo "New record Inserted successfully";
} else {
	echo "Error : Input";
}

mysqli_close($conn); // ปิดฐานข้อมูล
echo "<br><br>";
echo "--- END ---";
?>