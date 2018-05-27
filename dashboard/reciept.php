<?php
session_start();
$CName=$_SESSION['CName'];
$Phno=$_SESSION['Phno'];
$Vehno=$_SESSION['Vehno'];
$Date=$_SESSION['Date'];
$Name=$_SESSION['Name'];
$Size=$_SESSION['Size'];
$SerialNo=$_SESSION['SerialNo'];
$Qty=$_SESSION['Qty'];
$Price=$_SESSION['Price'];
$Total=0;

?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
</style>
<meta charset="UTF-8">
<title>Invoice</title>
<link rel="stylesheet" href="../assets/css/style3.css">
<script  src="../assets/js/index3.js"></script>
</head>
<body>
  <header>
    <h1>Invoice</h1>
    <address contenteditable>
      <p><?php echo $CName;?></p>
      <p><?php echo $Phno;?><br><? echo $Vehno?></p>
    </address>
    <span><img alt="Malanad Tyres" src="../assets/img/logo.png"></span>
  </header>
  <article>
    <h1>Recipient</h1>
    <address >
      <p>Malanad Tyres<br>Kasaragod</p>
    </address>
    <table class="meta">
      <tr>
        <th><span contenteditable>Invoice #</span></th>
        <td><span >153211</span></td>
      </tr>
      <tr>
        <th><span >Date</span></th>
        <td><span ><?php echo $Date;?></span></td>
      </tr>
      <tr>

      </tr>
    </table>
    <table class="inventory">
      <thead>
        <tr>
          <th><span >Item</span></th>
          <th><span >Size</span></th>
          <th><span >SerialNO</span></th>
          <th><span >Quantity</span></th>
          <th><span >Price</span></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($Name as $a => $b){?>
        <tr>
          <td><span ><?php echo $Name[$a];?></span></td>
          <td><span ><?php echo $Size[$a];?></span></td>
          <td><span ><?php echo $SerialNo[$a];?></span></td>
          <td><span ><?php echo $Qty[$a];?></span></td>
          <td><span data-prefix>₹</span><span><?php echo $Price[$a];$Total=$Total+$Price[$a];?></span></td>
        </tr>
      <?php };?>
      </tbody>
    </table>
    <table class="balance">
      <tr>
        <th><span >Total</span></th>
        <td><span data-prefix>₹</span><span><?php echo $Total?></span></td>
      </tr>
      <tr>
        <th><span contenteditable>Amount Paid</span></th>
        <td><span data-prefix>₹</span><span contenteditable>0.00</span></td>
      </tr>
      <tr>
        <th><span contenteditable>Balance Due</span></th>
        <td><span data-prefix>₹</span><span contenteditable>0.00</span></td>
      </tr>
    </table>
  </article>
  <aside>
    <h1><span contenteditable>Additional Notes</span></h1>
    <div contenteditable>
      <p>A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>
    </div>
  </aside>
</body>
<body>
  <button onclick="window.print()">print</button>

</body>
</html>
