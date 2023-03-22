
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';

$sql="INSERT INTO product (productID,Product_name, Price, Qty,Desc,Status,Flavour)
values ('$_POST[productID]','$_POST[Product_name]','$_POST[Price]','$_POST[Qty]','$_POST[Desc]','$_POST[Status]','$_POST[Flavour]')";
	if (!mysqli_query($conn,$sql)){
		
		die ('Error: ' .mysqli_error($conn));
	}


echo "<script
type='text/jscript'>alert('Product has been added!')</script>";
header('refresh:1 url=index.php');
?>