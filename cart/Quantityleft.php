<?php
  session_start(); // must be before any output
  $shopid = $_SESSION['shopid']; // or whatever you called it
  $shopname=$_SESSION["shopname"];
  $shopadd=$_SESSION["shopadd"];
  // check that $username is valid here (safe to display)
?>
<?php require_once '../connection_shopkeeper.php'; ?>
<?php
global $collection_sk;
$temp= $collection_sk->findOne(array('shopid'=> $shopid));
if(empty($temp))
{
  $rice=0;
  $urad=0;
  $masoor=0;
  $toor=0;
  $flour=0;
  $wheat=0;
  $oil=0;
  $salt=0;
  $besan=0;
  $maida=0;
  $chana=0;
  $sugar=0;
}
else
{
  $rice=$temp['rice'];
  $urad=$temp['urad'];
  $masoor=$temp['masoor'];
  $toor=$temp['toor'];
  $flour=$temp['flour'];
  $wheat=$temp['wheat'];
  $oil=$temp['oil'];
  $salt=$temp['salt'];
  $besan=$temp['besan'];
  $maida=$temp['maida'];
  $chana=$temp['chana'];
  $sugar=$temp['sugar'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="">
 <meta name="author" content="">
 <link rel="icon" href="../../favicon.ico">
 
 <title></title>
 
 <!-- Bootstrap core CSS -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
 
 <!-- Custom styles for this template -->
 <link href="css/simple-sidebar.css" rel="stylesheet">

 <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
 <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
 <script src="js/ie-emulation-modes-warning.js"></script>
 
 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
 <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
 
<body background="image/body-bg1.jpg">
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
 <div class="container-fluid">
 <div class="navbar-header">
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
 <span class="sr-only">Toggle navigation</span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>
 <a class="navbar-brand" href="#menu-toggle" id="menu-toggle"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
 </div>
 <div id="navbar" class="navbar-collapse collapse">
 <ul class="nav navbar-nav navbar-right">
 <li><a href="profile.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
 <li><a href="../index.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Log Out</a></li>
 </ul>
 <form class="navbar-form navbar-right" action="#" method="GET">

 </form>
 </div>
 </div>
 </nav>
 
 <div id="wrapper" class="toggled">
 <div class="container-fluid">
 <!-- Sidebar -->
 <div id="sidebar-wrapper">
 <ul class="sidebar-nav">
 <li class="sidebar-brand">
 <br>
 </li>
 <br>

 <li class="sidebar-brand">
 <a href="profile.php" class="navbar-brand">
 <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile</a><br><br>
 </li>

 <li>
 <a href="Quantityleft.php"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Quantity Left</a>
 </li>
 <li>   
 <a href="order.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Order</a>
 </li>
 
 <li>
 <a href="Account.php"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Manage Account</a>
 </li>
 </ul>
 </div>
 <!-- /#sidebar-wrapper -->
 
 <!-- Page Content -->
 <div id="page-content-wrapper">
 <div class="container-fluid">
 <div class="row">
 <div class="col-lg-12">
 <br><br>
 </div>
 </div>
 <style type="text/css">* {font-family: Helvetica Neue, Arial, sans-serif; }

/*body { background-image: linear-gradient(#aaa 25%, #000);}*/


h1, table { text-align: center; }

table {border-collapse: collapse;  width: 70%; margin: 0 auto 5rem;}

th, td { padding: 1.5rem; font-size: 1.3rem; }

tr {background: hsl(50, 50%, 80%); }

tr, td { transition: .4s ease-in; } 

tr:first-child {background: hsla(12, 100%, 40%, 0.5); }

tr:nth-child(even) { background: hsla(50, 50%, 80%, 0.7); }

td:empty {background: hsla(50, 25%, 60%, 0.7); }

tr:hover:not(#firstrow), tr:hover td:empty {background: #ff0; pointer-events: visible;}
tr:hover:not(#firstrow) { transform: scale(1.2); font-weight: 700; box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.5);}

</style>
 
 <div class="row">
 <div class="col-lg-12">
 <h1>STOCK</h1>
 <center><h3>(First update in manage account tab)</h3></center>

<table id="Stock">
<tr id="firstrow"><td>Serial No.</td><td>Item Name</td><td>Quantity Left(Kg/L)</td></tr>
<tr><td>1.</td><td>Rice</td><td><?php echo $rice ?></td></tr>.
<tr><td>2.</td><td>Urad Dal</td><td><?php echo $urad ?></td></tr>
<tr><td>3.</td><td>Masoor Dal</td><td><?php echo $masoor ?></td></tr>
<tr><td>4.</td><td>Toor Dal</td><td><?php echo $toor ?></td></tr>
<tr><td>5.</td><td>Flour</td><td><?php echo $flour ?></td></tr>
<tr><td>6.</td><td>Wheat</td><td><?php echo $wheat ?></td></tr>
<tr><td>7.</td><td>Oil</td><td><?php echo $oil ?></td></tr>
<tr><td>8.</td><td>Salt</td><td><?php echo $salt ?></td></tr>
<tr><td>9.</td><td>Besan</td><td><?php echo $besan ?></td></tr>
<tr><td>10.</td><td>Maida</td><td><?php echo $maida ?></td></tr>
<tr><td>11.</td><td>Chana</td><td><?php echo $chana ?></td></tr>
<tr><td>12.</td><td>Sugar</td><td><?php echo $sugar ?></td></tr>
</table>
  </div>
 </div>
 </div>
 </div>
 </div>
 <!-- /#page-content-wrapper -->
 </div>
 </div>
 <!-- /#wrapper -->
<!-- jQuery -->
<script src="js/jquery.js"></script>
 
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Menu Toggle Script -->
<script>
 $("#menu-toggle").click(function(e) {
 e.preventDefault();
 $("#wrapper").toggleClass("toggled");
 });
</script>
</body>
</html>