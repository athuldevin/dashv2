<?php
require('..\inc\dbcon.php');
$password=$_GET['SerialNo'];
$sql="SELECT `MRP` FROM `stock` WHERE `SERIALNO`='$password'";
$result=mysqli_query($connection,$sql);
$mrp=0;
while ($row = $result->fetch_assoc()) {
  $mrp=$row['MRP'];
}
//build the JSON array for return
$json = array(array('field' => 'MRP',
                    'value' => $mrp)
            );
echo json_encode($json );
?>
