<?php
  session_start(); // must be before any output
  $shopid = $_SESSION['shopid']; // or whatever you called it
  $shopname=$_SESSION["shopname"];
  $shopadd=$_SESSION["shopadd"];
  // check that $username is valid here (safe to display)
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
 
<body>
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
 <div class="input-group">
 <input type="text" class="form-control" placeholder="Search..." id="query" name="search" value="">
 <div class="input-group-btn">
 <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span></button>
 </div>
 </div>
 </form>
 </div>
 </div>
 </nav>
 <style type="text/css">
  body
  {
  background: url(image/body2.jpg) repeat 0 0;
}
.well-small
{
	background: #ECEDF2;
	/*background: #DFD7D0;*/
	/*background: #D9DEDF;*/
}
  </style>
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
 <a href="Quantity left.html"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Quantity Left</a>
 </li>
 <li>   
 <a href="order.html"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Order</a>
 </li>
 <li>
 <a href="Sales.html"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Sales</a>
 </li>
 <li>
 <a href="Account.html"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Manage Account</a>
 </li>
 </ul>
 </div>
 <!-- /#sidebar-wrapper -->
 
 <!-- Page Content -->
 <div id="page-content-wrapper">
 <div class="container-fluid">

 <br>
 <br>

 <div class="well well-small">
			<div class="row-fluid">
					<img src="image/ration.png" width="350px" height="100%" align="right">
					<h1><U><B><?=$shopname ?></B></U></h1>
					<hr class="soft"/>
					  <div>
						<h2><?=$shopid ?></h2>
					  </div>
					  <div >
						<h3><?=$shopadd ?></h3>
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