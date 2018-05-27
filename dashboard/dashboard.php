<?php
require('..\inc\dbcon.php');
session_start();
echo $_SESSION['password'];
if( !isset( $_SESSION['password'] ) )
     {
	 header("location: login.php");
  }
 ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Malanad Tyres</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>


</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a  class="simple-text">
                    Malanad Tyres
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="./stock.php">
                            <i class="material-icons">add_shopping_cart</i>
                            <p>Add Stock</p>
                        </a>
                    </li>
                    <li >
                        <a href="./sales.php">
                            <i class="material-icons">shopping_cart</i>
                            <p>Sales</p>
                        </a>
                    </li>

                    <li>
                        <a href="./support.html">
                            <i class="material-icons">help_outline</i>
                            <p>Support</p>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Table List </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="dashboard.php" >
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>

                            <li>
                                <a href="./login.php" >
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Log in</p>
                                </a>
                            </li>
                            <li>
                                <a href="./logout.php" >
                                    <i class="material-icons">lock</i>
                                    <p class="hidden-lg hidden-md">Log out</p>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Stock Table</h4>

                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>SlNo</th>
                                            <th>Name</th>
                                            <th>Size</th>
                                            <th>SerialNo</th>
                                            <th>Date</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>MRP</th>
                                            <th>Total</th>
                                        </thead>
                                        <tbody>
                                          <?php
                                          $sql="SELECT * FROM `stock`";$i=1;
                                          $result=mysqli_query($connection,$sql);
                                          while($row = mysqli_fetch_assoc($result)){
                                           ?>
                                            <tr>
                                                <td><?php echo $i;$i=$i+1;?></td>
                                                <td><?php echo $row['NAME']?></td>
                                                <td><?php echo $row['SIZE']?></td>
                                                <td><?php echo $row['SERIALNO']?></td>
                                                <td><?php echo $row['DATE']?></td>
                                                <td><?php echo $row['QTY']?></td>
                                                <td class="text-primary"><?php echo '₹ '.$row['PRICE']?></td>
                                                <td class="text-primary"><?php echo '₹ '.$row['MRP']?></td>
                                                <td class="text-primary"><?php echo '₹ '.$row['TOTAL']?></td>

                                            </tr>
                                          <?php };?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Sales Table</h4>

                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>SlNo</th>
                                            <th>Cust.Name</th>
                                            <th>PhoneNo</th>
                                            <th>VehicleNO</th>
                                            <th>Tyre Name</th>
                                            <th>Size</th>
                                            <th>SerialNo</th>
                                            <th>Date</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Selling Price</th>
                                            <th>Total</th>
                                        </thead>
                                        <tbody>
                                          <?php
                                          $sql="SELECT * FROM `sails`";
                                          $result=mysqli_query($connection,$sql);$i=1;
                                          while($row = mysqli_fetch_assoc($result)){
                                           ?>
                                            <tr>
                                                <td><?php echo $i;$i=$i+1;?></td>
                                                <td><?php echo $row['NAME']?></td>
                                                <td><?php echo $row['PHNO']?></td>
                                                <td><?php echo $row['VEHICLENO']?></td>
                                                <td><?php echo $row['TNAME']?></td>
                                                <td><?php echo $row['SIZE']?></td>
                                                <td><?php echo $row['SERIALNO']?></td>
                                                <td><?php echo $row['DATE']?></td>
                                                <td><?php echo $row['QTY']?></td>
                                                <td class="text-primary"><?php echo '₹ '.$row['PRICE']?></td>
                                                <td class="text-primary"><?php echo '₹ '.$row['SELLING_PRICE']?></td>
                                                <td class="text-primary"><?php echo '₹ '.$row['TOTAL']?></td>

                                            </tr>
                                          <?php };?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="dashboard.php">
                                    Home
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a >Malanad Tyres</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>

<script>
function noty(message) {
  type = ['', 'info', 'success', 'warning', 'danger'];
    color = Math.floor((Math.random() * 4) + 1);

    $.notify({
        icon: "notifications",
        message: message

    }, {
        type: 'success',
        timer: 1000,
        placement: {
            from: 'top',
            align: 'center'
        }
    });
}
</script>
<?php if (!empty($_GET['m'])){
  echo "<script>noty('".$_GET['m']."')</script>";
} ?>
</html>
