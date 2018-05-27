<?php

require('..\inc\dbcon.php');

$Name=$_POST['Name'];
$Size=$_POST['Size'];
$SerialNo=$_POST['SerialNo'];
$Date=$_POST['Date'];
$Qty=$_POST['Qty'];
$Price=$_POST['Price'];
$MRP=$_POST['MRP'];
$Total=$Qty*$Price;



$sql="INSERT INTO `stock`( `NAME`, `SIZE`, `SERIALNO`, `DATE`, `QTY`, `PRICE`, `MRP`, `TOTAL`) VALUES ('$Name',$Size,'$SerialNo','$Date',$Qty,$Price,$MRP,$Total)";

$result=mysqli_query($connection,$sql);

  header("location:dashboard.php?m=Database updated Successfully !");


?>
