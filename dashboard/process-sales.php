<?php

require('..\inc\dbcon.php');

$CName=$_POST['CName'];
$Phno=$_POST['Phno'];
$Vehno=$_POST['Vehno'];
$Date=$_POST['Date'];
$Name=$_POST['Name'];
$Size=$_POST['Size'];
$SerialNo=$_POST['SerialNo'];
$Qty=$_POST['Qty'];
$MRP=$_POST['MRP'];
$Price=$_POST['Price'];
$Total=0;

session_start();
$_SESSION['CName']=$CName;
$_SESSION['Phno']=$Phno;
$_SESSION['Vehno']=$Vehno;
$_SESSION['Date']=$Date;
$_SESSION['Name']=$Name;
$_SESSION['Size']=$Size;
$_SESSION['SerialNo']=$SerialNo;
$_SESSION['Qty']=$Qty;
$_SESSION['MRP']=$MRP;
$_SESSION['Price']=$Price;

foreach($Name as $a => $b){
  $Total=$Qty[$a]*$Price[$a];
  $sql="INSERT INTO `sails`(`NAME`, `PHNO`, `VEHICLENO`, `TNAME`, `SIZE`, `SERIALNO`, `DATE`,`QTY`, `PRICE`, `SELLING_PRICE`, `TOTAL`) VALUES ('$CName',$Phno,'$Vehno','$Name[$a]',$Size[$a],'$SerialNo[$a]','$Date',$Qty[$a],$MRP[$a],$Price[$a],$Total)";

  $result=mysqli_query($connection,$sql);
}
echo $sql;

 header("location:reciept.php");


?>
