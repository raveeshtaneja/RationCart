<?php
  session_start(); // must be before any output
  $shopid = $_SESSION['shopid']; // or whatever you called it
  $shopname=$_SESSION["shopname"];
  $shopadd=$_SESSION["shopadd"];
  // check that $username is valid here (safe to display)
?>
<?php require_once '../connection_order.php'; ?>
<?php require_once '../connection_shopkeeper.php'; ?>

<?php
global $collection_order;
global $collection_sk;
$message='';
$user=array(array());
/*$rice=array();
$urad=array();
$masoor=array();
$toor=array();
$flour=array();
$wheat=array();
$oil=array();
$salt=array();
$besan=array();
$maida=array();
$chana=array();
$sugar=array();*/
$temp= $collection_order->find(array('id'=>$shopid));
$message1='';
$message2='';
$message3='';
if(empty($temp)){
	$message='No orders placed !!';
}
else{
	$i=0;
	foreach ($temp as $x ) {
		//echo '<br><br>';
		
		$user[$i][0]= $x['uname'];

		if(array_key_exists('rice',$x))
		$user[$i][1]= $x['rice'];
		else
		$user[$i][1]= 0;	
		
		if(array_key_exists('urad',$x))
		$user[$i][2]= $x['urad'];
		else
		$user[$i][2]= 0;
		
		if(array_key_exists('masoor',$x))
		$user[$i][3]= $x['masoor'];
		else
		$user[$i][3]= 0;
		
		if(array_key_exists('toor',$x))
		$user[$i][4]= $x['toor'];
		else
		$user[$i][4]= 0;
		
		if(array_key_exists('flour',$x))
		$user[$i][5]= $x['flour'];
		else
		$user[$i][5]= 0;
		
		if(array_key_exists('wheat',$x))
		$user[$i][6]= $x['wheat'];
		else
		$user[$i][6]= 0;
		
		if(array_key_exists('oil',$x))
		$user[$i][7]= $x['oil'];
		else
		$user[$i][7]= 0;

		if(array_key_exists('salt',$x))
		$user[$i][8]= $x['salt'];
		else
		$user[$i][8]= 0;
		
		if(array_key_exists('besan',$x))
		$user[$i][9]= $x['besan'];
		else
		$user[$i][9]= 0;

		if(array_key_exists('maida',$x))
		$user[$i][10]= $x['maida'];
		else
		$user[$i][10]= 0;

		if(array_key_exists('chana',$x))
		$user[$i][11]= $x['chana'];
		else
		$user[$i][11]= 0;

		if(array_key_exists('sugar',$x))
		$user[$i][12]= $x['sugar'];
		else
		$user[$i][12]= 0;

		/*echo $user[$i][0];
		echo $user[$i][1];*/
		$i+=1;
		/*foreach ($x as $key=>$value) {
		
		}*/
	}

}


if(isset($_POST['save1']))
{
$temp1= $collection_sk->findOne(array('shopid'=>$shopid));
$uname1=$user[0][0];
$rice1=$temp1['rice']-$user[0][1];
$urad1=$temp1['urad']-$user[0][2];
$masoor1=$temp1['masoor']-$user[0][3];
$toor1=$temp1['toor']-$user[0][4];
$flour1=$temp1['flour']-$user[0][5];
$wheat1=$temp1['wheat']-$user[0][6];
$oil1=$temp1['oil']-$user[0][7];
$salt1=$temp1['salt']-$user[0][8];
$besan1=$temp1['besan']-$user[0][9];
$maida1=$temp1['maida']-$user[0][10];
$chana1=$temp1['chana']-$user[0][11];
$sugar1=$temp1['sugar']-$user[0][12];
$arrays1=array(
            'rice'=>$rice1,
            'urad'=>$urad1,
            'masoor'=>$masoor1,
            'toor'=>$toor1,
            'flour'=>$flour1,
            'wheat'=>$wheat1,
            'oil'=>$oil1,
            'salt'=>$salt1,
            'besan'=>$besan1,
            'maida'=>$maida1,
            'chana'=>$chana1,
            'sugar'=>$sugar1
            );
    $collection_sk->update(
        array('shopid' => $shopid),
        //array('$set' => array('user'=>array('rice' => $qty)))
        array('$set' => $arrays1)
        ); 
    //$collection_order->remove(array('uname' => $uname1,'id'=> $shopid));
    $message1='susseccfully updated';
}

if(isset($_POST['save2']))
{
$uname1=$user[1][0];
$temp1= $collection_sk->findOne(array('shopid'=>$shopid));
$rice1=$temp1['rice']-$user[1][1];
$urad1=$temp1['urad']-$user[1][2];
$masoor1=$temp1['masoor']-$user[1][3];
$toor1=$temp1['toor']-$user[1][4];
$flour1=$temp1['flour']-$user[1][5];
$wheat1=$temp1['wheat']-$user[1][6];
$oil1=$temp1['oil']-$user[1][7];
$salt1=$temp1['salt']-$user[1][8];
$besan1=$temp1['besan']-$user[1][9];
$maida1=$temp1['maida']-$user[1][10];
$chana1=$temp1['chana']-$user[1][11];
$sugar1=$temp1['sugar']-$user[1][12];
$arrays1=array(
            'rice'=>$rice1,
            'urad'=>$urad1,
            'masoor'=>$masoor1,
            'toor'=>$toor1,
            'flour'=>$flour1,
            'wheat'=>$wheat1,
            'oil'=>$oil1,
            'salt'=>$salt1,
            'besan'=>$besan1,
            'maida'=>$maida1,
            'chana'=>$chana1,
            'sugar'=>$sugar1
            );
    $collection_sk->update(
        array('shopid' => $shopid),
        //array('$set' => array('user'=>array('rice' => $qty)))
        array('$set' => $arrays1)
        ); 
    //$collection_order->remove(array('uname' => $uname1,'id'=> $shopid), true);
    $message2='susseccfully updated';
}

if(isset($_POST['save3']))
{
$uname1=$user[2][0];	
$temp1= $collection_sk->findOne(array('shopid'=>$shopid));
$rice1=$temp1['rice']-$user[2][1];
$urad1=$temp1['urad']-$user[2][2];
$masoor1=$temp1['masoor']-$user[2][3];
$toor1=$temp1['toor']-$user[2][4];
$flour1=$temp1['flour']-$user[2][5];
$wheat1=$temp1['wheat']-$user[2][6];
$oil1=$temp1['oil']-$user[2][7];
$salt1=$temp1['salt']-$user[2][8];
$besan1=$temp1['besan']-$user[2][9];
$maida1=$temp1['maida']-$user[2][10];
$chana1=$temp1['chana']-$user[2][11];
$sugar1=$temp1['sugar']-$user[2][12];
$arrays1=array(
            'rice'=>$rice1,
            'urad'=>$urad1,
            'masoor'=>$masoor1,
            'toor'=>$toor1,
            'flour'=>$flour1,
            'wheat'=>$wheat1,
            'oil'=>$oil1,
            'salt'=>$salt1,
            'besan'=>$besan1,
            'maida'=>$maida1,
            'chana'=>$chana1,
            'sugar'=>$sugar1
            );
    $collection_sk->update(
        array('shopid' => $shopid),
        //array('$set' => array('user'=>array('rice' => $qty)))
        array('$set' => $arrays1)
        ); 
    //$collection_order->remove(array('uname' => $uname1,'id'=> $shopid), true);
    $message3='susseccfully updated';
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
 <style>
 td{
 	font-family: "Comic Sans MS";
 	font-size: 30px;
 }
 td p{
 	font-family: sans-serif;
 	font-size: 20px;	
 }
 </style>

<style>
.button {
    background-color: #008fb3; /* Green */
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
 <style type="text/css">

 </style>

 <div class="row">
 <div class="col-lg-12">
 <section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="profile.php">Home</a></li>
				  <li class="active">Orders</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Customer</td>
							<td class="description">Item</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<p><?php 
								$num=sizeof($user);
								if($num>=1)
									echo $user[0][0]; 
								else
									echo $message;
								 ?>
								</p>
								<p></p>
							</td>
							<td class="cart_description">
								<!-- <p>Wheat</p>
								<p>Rice</p>
								<p>Pulses</p> -->
								<?php 
								$num=sizeof($user);
								if($num>=1)
									{
									if($user[0][1]!=0)
									{
										echo '<p>Rice</p>';
									}
									if($user[0][2]!=0)
									{
										echo '<p>Urad</p>';
									}
									if($user[0][3]!=0)
									{
										echo '<p>Masoor</p>';
									}
									if($user[0][4]!=0)
									{
										echo '<p>Toor</p>';
									} 
									if($user[0][5]!=0)
									{
										echo '<p>Flour</p>';
									}
									if($user[0][6]!=0)
									{
										echo '<p>Wheat</p>';
									}
									if($user[0][7]!=0)
									{
										echo '<p>Oil</p>';
									}
									if($user[0][8]!=0)
									{
										echo '<p>Salt</p>';
									}
									if($user[0][9]!=0)
									{
										echo '<p>Besan</p>';
									}
									if($user[0][10]!=0)
									{
										echo '<p>Maida</p>';
									}
									if($user[0][11]!=0)
									{
										echo '<p>Chana</p>';
									}
									if($user[0][12]!=0)
									{
										echo '<p>Sugar</p>';
									}
								}
									?>
							</td>
							<td class="cart_price">
								<!-- <p>$59</p>
								<p>$59</p>
								<p>$59</p> -->
							</td>
							<td class="cart_quantity">
								<?php 
								$num=sizeof($user);
								if($num>=1)
									{
									if($user[0][1]!=0)
									{	$a=$user[0][1];
										echo "<p>$a</p>";
									}
									if($user[0][2]!=0)
									{
										$a=$user[0][2];
										echo "<p>$a</p>";
									}
									if($user[0][3]!=0)
									{
										$a=$user[0][3];
										echo "<p>$a</p>";
									}
									if($user[0][4]!=0)
									{
										$a=$user[0][4];
										echo "<p>$a</p>";
									} 
									if($user[0][5]!=0)
									{
										$a=$user[0][5];
										echo "<p>$a</p>";
									}
									if($user[0][6]!=0)
									{
										$a=$user[0][6];
										echo "<p>$a</p>";
									}
									if($user[0][7]!=0)
									{
										$a=$user[0][7];
										echo "<p>$a</p>";
									}
									if($user[0][8]!=0)
									{
										$a=$user[0][8];
										echo "<p>$a</p>";
									}
									if($user[0][9]!=0)
									{
										$a=$user[0][9];
										echo "<p>$a</p>";
									}
									if($user[0][10]!=0)
									{
										$a=$user[0][10];
										echo "<p>$a</p>";
									}
									if($user[0][11]!=0)
									{
										$a=$user[0][11];
										echo "<p>$a</p>";
									}
									if($user[0][12]!=0)
									{
										$a=$user[0][12];
										echo "<p>$a</p>";
									}
								}
									?>
								
							</td>
							<td class="cart_total">
								<p class="cart_total_price"></p>

							</td>
							<td class="cart_delete">
								<?php 
								$num=sizeof($user);
								if($num>=1)
								{
								echo '<form method="post" action="">
								<button type="submit" name="save1" class="button button2">Verify</button>
								</form>';
								echo "<p>$message1</p>";
								}
								?>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<p><?php 
								$num=sizeof($user);
								if($num>=2)
									echo $user[1][0];  ?></p>
								<p></p>
							</td>
							<td class="cart_description">
								<?php 
								$num=sizeof($user);
								if($num>=2)
								{
									if($user[1][1]!=0)
									{
										echo '<p>Rice</p>';
									}
									if($user[1][2]!=0)
									{
										echo '<p>Urad</p>';
									}
									if($user[1][3]!=0)
									{
										echo '<p>Masoor</p>';
									}
									if($user[1][4]!=0)
									{
										echo '<p>Toor</p>';
									} 
									if($user[1][5]!=0)
									{
										echo '<p>Flour</p>';
									}
									if($user[1][6]!=0)
									{
										echo '<p>Wheat</p>';
									}
									if($user[1][7]!=0)
									{
										echo '<p>Oil</p>';
									}
									if($user[1][8]!=0)
									{
										echo '<p>Salt</p>';
									}
									if($user[1][9]!=0)
									{
										echo '<p>Besan</p>';
									}
									if($user[1][10]!=0)
									{
										echo '<p>Maida</p>';
									}
									if($user[1][11]!=0)
									{
										echo '<p>Chana</p>';
									}
									if($user[1][12]!=0)
									{
										echo '<p>Sugar</p>';
									}
								}
								?>
							
							</td>
							<td class="cart_price">
								<!-- <p>$59</p>
								<p>$59</p>
								<p>$59</p> -->
							</td>
							<td class="cart_quantity">
								<?php 
								$num=sizeof($user);
								if($num>=2)
									{
									if($user[1][1]!=0)
									{	$a=$user[1][1];
										echo "<p>$a</p>";
									}
									if($user[1][2]!=0)
									{
										$a=$user[1][2];
										echo "<p>$a</p>";
									}
									if($user[1][3]!=0)
									{
										$a=$user[1][3];
										echo "<p>$a</p>";
									}
									if($user[1][4]!=0)
									{
										$a=$user[1][4];
										echo "<p>$a</p>";
									} 
									if($user[1][5]!=0)
									{
										$a=$user[1][5];
										echo "<p>$a</p>";
									}
									if($user[1][6]!=0)
									{
										$a=$user[1][6];
										echo "<p>$a</p>";
									}
									if($user[1][7]!=0)
									{
										$a=$user[1][7];
										echo "<p>$a</p>";
									}
									if($user[1][8]!=0)
									{
										$a=$user[1][8];
										echo "<p>$a</p>";
									}
									if($user[1][9]!=0)
									{
										$a=$user[1][9];
										echo "<p>$a</p>";
									}
									if($user[1][10]!=0)
									{
										$a=$user[1][10];
										echo "<p>$a</p>";
									}
									if($user[1][11]!=0)
									{
										$a=$user[1][11];
										echo "<p>$a</p>";
									}
									if($user[1][12]!=0)
									{
										$a=$user[1][12];
										echo "<p>$a</p>";
									}
								}
									?>
								
							</td>
							<td class="cart_total">
								<p class="cart_total_price"></p>

							</td>
							<td class="cart_delete">
								<?php 
								$num=sizeof($user);
								if($num>=2)
								{
								echo '<form method="post" action="">
								<button type="submit" name="save2" class="button button2">Verify</button>
								</form>';
								echo "<p>$message2</p>";
								}
								?>
							</td>
						</tr>
							<tr>
							<td class="cart_product">
								<p><?php 
								$num=sizeof($user);
								if($num>=3)
									echo $user[2][0];  ?></p>
								<p></p>
							</td>
							<td class="cart_description">
								<?php 
								$num=sizeof($user);
								if($num>=3)
								{
									if($user[2][1]!=0)
									{
										echo '<p>Rice</p>';
									}
									if($user[2][2]!=0)
									{
										echo '<p>Urad</p>';
									}
									if($user[2][3]!=0)
									{
										echo '<p>Masoor</p>';
									}
									if($user[2][4]!=0)
									{
										echo '<p>Toor</p>';
									} 
									if($user[2][5]!=0)
									{
										echo '<p>Flour</p>';
									}
									if($user[2][6]!=0)
									{
										echo '<p>Wheat</p>';
									}
									if($user[2][7]!=0)
									{
										echo '<p>Oil</p>';
									}
									if($user[2][8]!=0)
									{
										echo '<p>Salt</p>';
									}
									if($user[2][9]!=0)
									{
										echo '<p>Besan</p>';
									}
									if($user[2][10]!=0)
									{
										echo '<p>Maida</p>';
									}
									if($user[2][11]!=0)
									{
										echo '<p>Chana</p>';
									}
									if($user[2][12]!=0)
									{
										echo '<p>Sugar</p>';
									}
								}
								?>
							
							</td>
							<td class="cart_price">
								<!-- <p>$59</p>
								<p>$59</p>
								<p>$59</p> -->
							</td>
							<td class="cart_quantity">
								<?php 
								$num=sizeof($user);
								if($num>=3)
									{
									if($user[2][1]!=0)
									{	$a=$user[2][1];
										echo "<p>$a</p>";
									}
									if($user[2][2]!=0)
									{
										$a=$user[2][2];
										echo "<p>$a</p>";
									}
									if($user[2][3]!=0)
									{
										$a=$user[2][3];
										echo "<p>$a</p>";
									}
									if($user[2][4]!=0)
									{
										$a=$user[2][4];
										echo "<p>$a</p>";
									} 
									if($user[2][5]!=0)
									{
										$a=$user[2][5];
										echo "<p>$a</p>";
									}
									if($user[2][6]!=0)
									{
										$a=$user[2][6];
										echo "<p>$a</p>";
									}
									if($user[2][7]!=0)
									{
										$a=$user[2][7];
										echo "<p>$a</p>";
									}
									if($user[2][8]!=0)
									{
										$a=$user[2][8];
										echo "<p>$a</p>";
									}
									if($user[2][9]!=0)
									{
										$a=$user[2][9];
										echo "<p>$a</p>";
									}
									if($user[2][10]!=0)
									{
										$a=$user[2][10];
										echo "<p>$a</p>";
									}
									if($user[2][11]!=0)
									{
										$a=$user[2][11];
										echo "<p>$a</p>";
									}
									if($user[2][12]!=0)
									{
										$a=$user[2][12];
										echo "<p>$a</p>";
									}
								}
									?>
								
							</td>
							<td class="cart_total">
								<p class="cart_total_price"></p>

							</td>
							<td class="cart_delete">
								<?php 
								$num=sizeof($user);
								if($num>=3)
								{
								echo '<form method="post" action="">
								<button type="submit" name="save3" class="button button2">Verify</button>
								</form>';
								echo "<p>$message3</p>";
								}
								?>
							</td>
						</tr>
					</tbody>
				</table>
				</div>
			</div>
		
	</section>
 
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