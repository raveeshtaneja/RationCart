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
$message='';
if(isset($_POST['save']))
{
  $rice=$_POST['rice'];
  $urad=$_POST['urad'];
  $masoor=$_POST['masoor'];
  $toor=$_POST['toor'];
  $flour=$_POST['flour'];
  $wheat=$_POST['wheat'];
  $oil=$_POST['oil'];
  $salt=$_POST['salt'];
  $besan=$_POST['besan'];
  $maida=$_POST['maida'];
  $chana=$_POST['chana'];
  $sugar=$_POST['sugar'];
  

$temp= $collection_sk->findOne(array('shopid'=> $shopid));
if(empty($temp))
  {
    $arrays=array(
            'shopid'=>$shopid,       
            'shopname'=>$shopname,
            'rice'=>$rice,
            'urad'=>$urad,
            'masoor'=>$masoor,
            'toor'=>$toor,
            'flour'=>$flour,
            'wheat'=>$wheat,
            'oil'=>$oil,
            'salt'=>$salt,
            'besan'=>$besan,
            'maida'=>$maida,
            'chana'=>$chana,
            'sugar'=>$sugar
            );
    $collection_sk->insert($arrays);

  }
  else
  {

    $arrays=array(
            'rice'=>$rice,
            'urad'=>$urad,
            'masoor'=>$masoor,
            'toor'=>$toor,
            'flour'=>$flour,
            'wheat'=>$wheat,
            'oil'=>$oil,
            'salt'=>$salt,
            'besan'=>$besan,
            'maida'=>$maida,
            'chana'=>$chana,
            'sugar'=>$sugar
            );
    $collection_sk->update(
        array('shopid' => $shopid),
        //array('$set' => array('user'=>array('rice' => $qty)))
        array('$set' => $arrays)
        ); 
  }
  $message='Successfully Updated';
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
 <link href="css/bootstrap.css" rel="stylesheet">
 
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
 <style>
.button {
    background-color: #CD7F32; /* Green */
    border: none;
    color: white;
    padding: 12px 26px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button1 {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,255,255,0.4);
}
</style>
</head>
 
<body  background="image/body-bg1.jpg">
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
 <!-- <form class="navbar-form navbar-right" action="#" method="GET">
 <div class="input-group">
 <input type="text" class="form-control" placeholder="Search..." id="query" name="search" value="">
 <div class="input-group-btn">
 <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span></button>
 </div>
 </div>
 </form> -->
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
 <a href="Account.html"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Manage Account</a>
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
 <style type="text/css">

 </style>

 <div class="row">
 <div class="col-lg-12">
 <div class="container">
    <h1 style="color:#111111">Edit Item Quantity (Kg/lt)</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <!-- <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div> -->
        <!-- <h3 style="color:white">Personal info</h3> -->
        
        <form class="form-horizontal" role="form" action='' method="post">
          <div class="form-group">
            <label class="col-lg-3 control-label" style="color:white">Rice:</label>
            <div class="col-lg-4">
              <input class="form-control" value='0' type="number" min="0000000000" max="09999999999" name="rice">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label" style="color:white">Urad dal:</label>
            <div class="col-lg-4">
             <input class="form-control" value='0' type="number" min="0000000000" max="09999999999" name="urad">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label" style="color:white">Masoor dal:</label>
            <div class="col-lg-4">
              <input class="form-control" value='0' type="number" min="0000000000" max="09999999999" name="masoor">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label" style="color:white">Toor dal:</label>
            <div class="col-lg-4">
              <input class="form-control" value='0' type="number" min="0000000000" max="09999999999" name="toor">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label" style="color:white">Flour:</label>
            <div class="col-md-4">
              <input class="form-control" value='0' type="number" min="0000000000" max="09999999999" name="flour">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label" style="color:white">Wheat:</label>
            <div class="col-md-4">
              <input class="form-control" value='0' type="number" min="0000000000" max="09999999999" name="wheat">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label" style="color:white">Oil:</label>
            <div class="col-md-4">
              <input class="form-control" value='0' type="number" min="0000000000" max="09999999999" name="oil">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label" style="color:white">Salt:</label>
            <div class="col-md-4">
              <input class="form-control" value='0' type="number" min="0000000000" max="09999999999" name="salt">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label" style="color:white">Besan:</label>
            <div class="col-md-4">
              <input class="form-control" value='0' type="number" min="0000000000" max="09999999999" name="besan">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label" style="color:white">Maida:</label>
            <div class="col-md-4">
              <input class="form-control" value='0' type="number" min="0000000000" max="09999999999" name="maida">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label" style="color:white">Chana:</label>
            <div class="col-md-4">
              <input class="form-control" value='0' type="number" min="0000000000" max="09999999999" name="chana">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label" style="color:white">Sugar:</label>
            <div class="col-md-4">
              <input class="form-control" value='0' type="number" min="0000000000" max="09999999999" name="sugar">
            </div>
          </div>		           
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-4">
              <!-- <input type="button" name='save' class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel"> -->
              <button type="submit" name="save" class="button button2">Save changes</button>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<center><p><h3><?php echo $message?></h3></p></center>
<hr>
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