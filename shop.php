<?php
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        
    }
?>



<?php
  session_start(); 
  $uname = $_SESSION['uname']; 
  
?>


<?php require_once 'connection.php'; ?>
<?php require_once 'connection_order.php'; ?>

<?php
global $collection;
$temp=$collection->findone(array('id'=>$id));
$name=$temp['name'];
$add=$temp['add'];
?>

<?php
global $collection_order;
  
if(isset($_POST['rice'])){
       
        $qty = $_POST['riceqty'];    
        $temp= $collection_order->findOne(array('id'=> $id,'uname'=>$uname));
        
        if(empty($temp)){
 /*       $arrays=array(
            'id'=>$id,
            'user'=>array(
            'uname'=>$uname,
            'rice'=>$qty
            ));*/
            
          $arrays=array(
            'id'=>$id,       
            'uname'=>$uname,
            'rice'=>$qty
            );
        $collection_order->insert($arrays);
        }
        else{
           $arrays=array(
            'rice'=>$qty
            );
        //$criteria = array('id'=> $id,'uname'=>$uname);
        //$query = $collection_order->findOne($criteria);
        $collection_order->update(
        array('id' => $id,'uname'=>$uname),
        //array('$set' => array('user'=>array('rice' => $qty)))
        array('$set' => array('rice' => $qty))
        ); 
        }
      
}


if(isset($_POST['urad'])){
       
        $qty = $_POST['uradqty'];    
        $temp= $collection_order->findOne(array('id'=> $id,'uname'=>$uname));
        if(empty($temp)){
        $arrays=array(
            'id'=>$id,
            'uname'=>$uname,
            'urad'=>$qty
            );
        $collection_order->insert($arrays);
        }
        else{
           $arrays=array(
            'urad'=>$qty
            );
        //$criteria = array('id'=> $id,'uname'=>$uname);
        //$query = $collection_order->findOne($criteria);
        $collection_order->update(
        array('id' => $id,'uname'=>$uname),
        array('$set' => array('urad' => $qty))
        ); 
        }
      
}




if(isset($_POST['masoor'])){
       
        $qty = $_POST['masoorqty'];    
        $temp= $collection_order->findOne(array('id'=> $id,'uname'=>$uname));
        if(empty($temp)){
        $arrays=array(
            'id'=>$id,
            'uname'=>$uname,
            'masoor'=>$qty
            );
        $collection_order->insert($arrays);
        }
        else{
           $arrays=array(
            'masoor'=>$qty
            );
        //$criteria = array('id'=> $id,'uname'=>$uname);
        //$query = $collection_order->findOne($criteria);
        $collection_order->update(
        array('id' => $id,'uname'=>$uname),
        array('$set' => array('masoor' => $qty))
        ); 
        }
      
}




if(isset($_POST['toor'])){
       
        $qty = $_POST['toorqty'];    
        $temp= $collection_order->findOne(array('id'=> $id,'uname'=>$uname));
        if(empty($temp)){
        $arrays=array(
            'id'=>$id,
            'uname'=>$uname,
            'toor'=>$qty
            );
        $collection_order->insert($arrays);
        }
        else{
           $arrays=array(
            'toor'=>$qty
            );
        //$criteria = array('id'=> $id,'uname'=>$uname);
        //$query = $collection_order->findOne($criteria);
        $collection_order->update(
        array('id' => $id,'uname'=>$uname),
        array('$set' => array('toor' => $qty))
        ); 
        }
      
}




if(isset($_POST['flour'])){
       
        $qty = $_POST['flourqty'];    
        $temp= $collection_order->findOne(array('id'=> $id,'uname'=>$uname));
        if(empty($temp)){
        $arrays=array(
            'id'=>$id,
            'uname'=>$uname,
            'flour'=>$qty
            );
        $collection_order->insert($arrays);
        }
        else{
           $arrays=array(
            'flour'=>$qty
            );
       // $criteria = array('id'=> $id,'uname'=>$uname);
       // $query = $collection_order->findOne($criteria);
        $collection_order->update(
        array('id' => $id,'uname'=>$uname),
        array('$set' => array('flour' => $qty))
        ); 
        }
      
}




if(isset($_POST['wheat'])){
       
        $qty = $_POST['wheatqty'];    
        $temp= $collection_order->findOne(array('id'=> $id,'uname'=>$uname));
        if(empty($temp)){
        $arrays=array(
            'id'=>$id,
            'uname'=>$uname,
            'wheat'=>$qty
            );
        $collection_order->insert($arrays);
        }
        else{
           $arrays=array(
            'wheat'=>$qty
            );
       // $criteria = array('id'=> $id,'uname'=>$uname);
       // $query = $collection_order->findOne($criteria);
        $collection_order->update(
        array('id' => $id,'uname'=>$uname),
        array('$set' => array('wheat' => $qty))
        ); 
        }
      
}




if(isset($_POST['oil'])){
       
        $qty = $_POST['oilqty'];    
        $temp= $collection_order->findOne(array('id'=> $id,'uname'=>$uname));
        if(empty($temp)){
        $arrays=array(
            'id'=>$id,
            'uname'=>$uname,
            'oil'=>$qty
            );
        $collection_order->insert($arrays);
        }
        else{
           $arrays=array(
            'oil'=>$qty
            );
       // $criteria = array('id'=> $id,'uname'=>$uname);
       // $query = $collection_order->findOne($criteria);
        $collection_order->update(
        array('id' => $id,'uname'=>$uname),
        array('$set' => array('oil' => $qty))
        ); 
        }
      
}




if(isset($_POST['salt'])){
       
        $qty = $_POST['saltqty'];    
        $temp= $collection_order->findOne(array('id'=> $id,'uname'=>$uname));
        if(empty($temp)){
        $arrays=array(
            'id'=>$id,
            'uname'=>$uname,
            'salt'=>$qty
            );
        $collection_order->insert($arrays);
        }
        else{
           $arrays=array(
            'salt'=>$qty
            );
       // $criteria = array('id'=> $id,'uname'=>$uname);
       // $query = $collection_order->findOne($criteria);
        $collection_order->update(
        array('id' => $id,'uname'=>$uname),
        array('$set' => array('salt' => $qty))
        ); 
        }
      
}




if(isset($_POST['besan'])){
       
        $qty = $_POST['besanqty'];    
        $temp= $collection_order->findOne(array('id'=> $id,'uname'=>$uname));
        if(empty($temp)){
        $arrays=array(
            'id'=>$id,
            'uname'=>$uname,
            'besan'=>$qty
            );
        $collection_order->insert($arrays);
        }
        else{
           $arrays=array(
            'besan'=>$qty
            );
       // $criteria = array('id'=> $id,'uname'=>$uname);
       // $query = $collection_order->findOne($criteria);
        $collection_order->update(
        array('id' => $id,'uname'=>$uname),
        array('$set' => array('besan' => $qty))
        ); 
        }
      
}




if(isset($_POST['maida'])){
       
        $qty = $_POST['maidaqty'];    
        $temp= $collection_order->findOne(array('id'=> $id,'uname'=>$uname));
        if(empty($temp)){
        $arrays=array(
            'id'=>$id,
            'uname'=>$uname,
            'maida'=>$qty
            );
        $collection_order->insert($arrays);
        }
        else{
           $arrays=array(
            'maida'=>$qty
            );
       // $criteria = array('id'=> $id,'uname'=>$uname);
       // $query = $collection_order->findOne($criteria);
        $collection_order->update(
        array('id' => $id,'uname'=>$uname),
        array('$set' => array('maida' => $qty))
        ); 
        }
      
}




if(isset($_POST['chana'])){
       
        $qty = $_POST['chanaqty'];    
        $temp= $collection_order->findOne(array('id'=> $id,'uname'=>$uname));
        if(empty($temp)){
        $arrays=array(
            'id'=>$id,
            'uname'=>$uname,
            'chana'=>$qty
            );
        $collection_order->insert($arrays);
        }
        else{
           $arrays=array(
            'chana'=>$qty
            );
       // $criteria = array('id'=> $id,'uname'=>$uname);
        //$query = $collection_order->findOne($criteria);
        $collection_order->update(
        array('id' => $id,'uname'=>$uname),
        array('$set' => array('chana' => $qty))
        ); 
        }
      
}




if(isset($_POST['sugar'])){
       
        $qty = $_POST['sugarqty'];    
        $temp= $collection_order->findOne(array('id'=> $id,'uname'=>$uname));
        if(empty($temp)){
        $arrays=array(
            'id'=>$id,
            'uname'=>$uname,
            'sugar'=>$qty
            );
        $collection_order->insert($arrays);
        }
        else{
           $arrays=array(
            'sugar'=>$qty
            );
      //  $criteria = array('id'=> $id,'uname'=>$uname);
      //  $query = $collection_order->findOne($criteria);
        $collection_order->update(
        array('id' => $id,'uname'=>$uname),
        array('$set' => array('sugar' => $qty))
        ); 
        }
      
}




?>

<?php
require('fpdf/fpdf.php');
if(isset($_POST['bill']))
{    
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
/*$pdf->Cell(40,40,'Bill Reciept!');*/
$pdf->Cell(60,10,'Bill Receipt.',0,1,'C');
$pdf->Cell(40,40,'Shop id : '.$id.'    ');
$pdf->Cell(40,40,'Shop name : '.$name.' ');
$pdf->Cell(40,60,'Customer name : '.$uname.'');
$pdf->Cell(20,80,'Orders : ');
$pdf->Output();
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

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="css_shop/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css_shop/cart.css" rel="stylesheet">
<script src="vendor/jquery/jquery.js"></script>
    <script src="vendor/bootstrap/bootstrap.js"></script>
    <style>
.button {
    background-color: #4cafaf; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
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
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,255,255,0.4);
}

</style>
</head>

<body>   
<style type="text/css">
    .quantity .qty {
    max-width: 3.631em;
    text-align: center;
}
</style>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            
            <div class="navbar-header">
               <font color='white'><h2>Shop name : <?php echo "$name " ?>&nbsp &nbsp &nbsp  <?php echo"  id: $id" ?> &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="index_customer.php">Home</a></h2></font>

                
            </div>
            
        </div>
        
    </nav>

    <!-- Page Content -->
    <div class="container">
            <div class="col-md-12">

                    <form action="" method='post'>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="style_prevu_kit">
                        <div class="thumbnail">
                            <img src="assets/rice.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹15/KG</h4>
                                <h4>RICE</h4>
                                <p class="pull-left" style="font-size:19px">Quantity(kg)</p>
                                <div class="quantity">
                                 <p class="pull-right">                                 
        <input type="number" step="1" min="0" max="5" name="riceqty" value="1" title="Qty" class="input-text qty text" size="2px" pattern="[0-9]*" inputmode="numeric">
                                </p>
                                </div>
                            <br><br>
                            <center><button id="addCart" class="btn btn-danger btn-sm" type='submit' name='rice'><i class="fa fa-shopping-cart"></i>Add to cart</button></center>
                            </div> 
                        </div>
                    </div>
                    </div>
                    </form>

                    <form action="" method='post'>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="style_prevu_kit">
                        <div class="thumbnail">
                            <img src="assets/urad dal.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹8/KG</h4>
                                <h4>Urad dal</h4>
                                 <p class="pull-left" style="font-size:19px">Quantity(kg)</p>
                                <div class="quantity">
                                 <p class="pull-right">                                 
        <input type="number" step="1" min="0" max="5" name="uradqty" value="1" title="Qty" class="input-text qty text" size="2px" pattern="[0-9]*" inputmode="numeric">
                                </p>
                                </div>
                            <br><br>
                            <center><button id="addCart" class="btn btn-danger btn-sm" name='urad'><i class="fa fa-shopping-cart"></i>Add to cart</button></center>
                            </div>
                            </div>
                        </div>
                    </div>
                    </form>

                    <form action="" method='post'>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="style_prevu_kit">
                        <div class="thumbnail">
                            <img src="assets/masoor dal.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹10/KG</h4>
                                <h4>Masoor dal</h4>
                               <p class="pull-left" style="font-size:19px">Quantity(kg)</p>
                                <div class="quantity">
                                 <p class="pull-right">                                 
        <input type="number" step="1" min="0" max="5" name="masoorqty" value="1" title="Qty" class="input-text qty text" size="2px" pattern="[0-9]*" inputmode="numeric">
                                </p>
                                </div>
                            <br><br>
                            <center><button id="addCart" class="btn btn-danger btn-sm" name='masoor'><i class="fa fa-shopping-cart"></i>Add to cart</button></center>
                            </div>
                            </div>
                        </div>
                    </div>
                    </form>

                    <form action="" method='post'>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="style_prevu_kit">
                        <div class="thumbnail">
                            <img src="assets/toor dal.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹9/KG</h4>
                                <h4>Toor dal</h4>
                                <p class="pull-left" style="font-size:19px">Quantity(kg)</p>
                                <div class="quantity">
                                 <p class="pull-right">                                 
        <input type="number" step="1" min="0" max="5" name="toorqty" value="1" title="Qty" class="input-text qty text" size="2px" pattern="[0-9]*" inputmode="numeric">
                                </p>
                                </div>
                            <br><br>
                            <center><button id="addCart" class="btn btn-danger btn-sm" name='toor'><i class="fa fa-shopping-cart"></i>Add to cart</button></center>
                            </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <!-- <br><br><br> -->
                    <!-- <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="style_prevu_kit">
                        <div class="thumbnail">
                            <img src="assets/rajma.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹13/KG</h4>
                                <h4>Rajma</h4>
                                <p class="pull-left" style="font-size:19px">Quantity(kg)</p>
                                <div class="quantity">
                                 <p class="pull-right">                                 
        <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="2px" pattern="[0-9]*" inputmode="numeric">
                                </p>
                                </div>
                            <br><br>
                            <center><button id="addCart" class="btn btn-danger btn-sm"><i class="fa fa-shopping-cart"></i>Add to cart</button></center>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="style_prevu_kit">
                        <div class="thumbnail">
                            <img src="assets/chole.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹12/KG</h4>
                                <h4>Chole</h4>
                                <p class="pull-left" style="font-size:19px">Quantity(kg)</p>
                                <div class="quantity">
                                 <p class="pull-right">                                 
        <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="2px" pattern="[0-9]*" inputmode="numeric">
                                </p>
                                </div>
                            <br><br>
                            <center><button id="addCart" class="btn btn-danger btn-sm"><i class="fa fa-shopping-cart"></i>Add to cart</button></center>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="style_prevu_kit">
                        <div class="thumbnail">
                            <img src="assets/mung dal.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹10/KG</h4>
                                <h4>Mung dal</h4>
                                <p class="pull-left" style="font-size:19px">Quantity(kg)</p>
                                <div class="quantity">
                                 <p class="pull-right">                                 
        <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="2px" pattern="[0-9]*" inputmode="numeric">
                                </p>
                                </div>
                            <br><br>
                            <center><button id="addCart" class="btn btn-danger btn-sm"><i class="fa fa-shopping-cart"></i>Add to cart</button></center>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="style_prevu_kit">
                        <div class="thumbnail">
                            <img src="assets/lobia dal.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹9.5/KG</h4>
                                <h4>Lobia Dal</h4>
                                <p class="pull-left" style="font-size:19px">Quantity(kg)</p>
                                <div class="quantity">
                                 <p class="pull-right">                                 
        <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="2px" pattern="[0-9]*" inputmode="numeric">
                                </p>
                                </div>
                            <br><br>
                            <center><button id="addCart" class="btn btn-danger btn-sm"><i class="fa fa-shopping-cart"></i>Add to cart</button></center>
                            </div>
                            </div>
                        </div>
                    </div> -->
                    <br>

                    <form action="" method='post'>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="style_prevu_kit">
                        <div class="thumbnail">
                            <img src="assets/flour.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹7/KG</h4>
                                <h4>FLOUR</h4>
                                <p class="pull-left" style="font-size:19px">Quantity(kg)</p>
                                <div class="quantity">
                                 <p class="pull-right">                                 
        <input type="number" step="1" min="0" max="5" name="flourqty" value="1" title="Qty" class="input-text qty text" size="2px" pattern="[0-9]*" inputmode="numeric">
                                </p>
                                </div>
                            <br><br>
                            <center><button id="addCart" class="btn btn-danger btn-sm" name='flour'><i class="fa fa-shopping-cart"></i>Add to cart</button></center>
                            </div>
                            </div>
                        </div>
                    </div>
                    </form>

                    <form action="" method='post'>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="style_prevu_kit">
                        <div class="thumbnail">
                            <img src="assets/wheat.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹4/KG</h4>
                                <h4>WHEAT</h4>
                                <p class="pull-left" style="font-size:19px">Quantity(kg)</p>
                                <div class="quantity">
                                 <p class="pull-right">                                 
        <input type="number" step="1" min="0" max="5" name="wheatqty" value="1" title="Qty" class="input-text qty text" size="2px" pattern="[0-9]*" inputmode="numeric">
                                </p>
                                </div>
                            <br><br>
                            <center><button id="addCart" class="btn btn-danger btn-sm" name='wheat'><i class="fa fa-shopping-cart"></i>Add to cart</button></center>                              
                            </div>
                            </div>
                        </div>
                    </div>
                    </form>

                    <form action="" method='post'>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="style_prevu_kit">
                        <div class="thumbnail">
                            <img src="assets/oil.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹17/L</h4>
                                <h4>OIL</h4>
                                <p class="pull-left" style="font-size:19px">Quantity(kg)</p>
                                <div class="quantity">
                                 <p class="pull-right">                                 
        <input type="number" step="1" min="0" max="5" name="oilqty" value="1" title="Qty" class="input-text qty text" size="2px" pattern="[0-9]*" inputmode="numeric">
                                </p>
                                </div>
                            <br><br>
                            <center><button id="addCart" class="btn btn-danger btn-sm" name='oil'><i class="fa fa-shopping-cart"></i>Add to cart</button></center>
                             </div>
                             </div>
                        </div>
                    </div>
                    </form>

                    <form action="" method='post'>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="style_prevu_kit">
                            <div class="thumbnail">
                                <img src="assets/salt.jpg">
                                <div class="caption">
                                    <h4 class="pull-right">₹4/KG</h4>
                                    <h4>SALT</h4>
                                    <p class="pull-left" style="font-size:19px">Quantity(kg)</p>
                                    <div class="quantity">
                                     <p class="pull-right">                                 
            <input type="number" step="1" min="0" max="5" name="saltqty" value="1" title="Qty" class="input-text qty text" size="2px" pattern="[0-9]*" inputmode="numeric">
                                    </p>
                                    </div>
                                <br><br>
                                <center><button id="addCart" class="btn btn-danger btn-sm" name='salt'><i class="fa fa-shopping-cart"></i>Add to cart</button></center>
                                 </div>
                            </div>
                            </div>
                        </div>
                        </form>
                    <br>

                    <form action="" method='post'>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="style_prevu_kit">
                        <div class="thumbnail">
                            <img src="assets/besan.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹12/KG</h4>
                                <h4>BESAN</h4>
                                <p class="pull-left" style="font-size:19px">Quantity(kg)</p>
                                <div class="quantity">
                                 <p class="pull-right">                                 
        <input type="number" step="1" min="0" max="5" name="besanqty" value="1" title="Qty" class="input-text qty text" size="2px" pattern="[0-9]*" inputmode="numeric">
                                </p>
                                </div>
                            <br><br>
                            <center><button id="addCart" class="btn btn-danger btn-sm" name='besan'><i class="fa fa-shopping-cart"></i>Add to cart</button></center>
                             </div>
                        </div>
                        </div>
                    </div>
                    </form>

                    <form action="" method='post'>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="style_prevu_kit">
                        <div class="thumbnail">
                            <img src="assets/maida.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹11/KG</h4>
                                <h4>MAIDA</h4>
                                <p class="pull-left" style="font-size:19px">Quantity(kg)</p>
                                <div class="quantity">
                                 <p class="pull-right">                                 
        <input type="number" step="1" min="0" max="5" name="maidaqty" value="1" title="Qty" class="input-text qty text" size="2px" pattern="[0-9]*" inputmode="numeric">
                                </p>
                                </div>
                            <br><br>
                            <center><button id="addCart" class="btn btn-danger btn-sm" name='maida'><i class="fa fa-shopping-cart"></i>Add to cart</button></center>
                             </div>
                        </div>
                        </div>
                    </div>
                    </form>

                    <form action="" method='post'>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="style_prevu_kit">
                        <div class="thumbnail">
                            <img src="assets/chana.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹7/KG</h4>
                                <h4>CHANA</h4>
                                <p class="pull-left" style="font-size:19px">Quantity(kg)</p>
                                <div class="quantity">
                                 <p class="pull-right">                                 
        <input type="number" step="1" min="0" max="5" name="chanaqty" value="1" title="Qty" class="input-text qty text" size="2px" pattern="[0-9]*" inputmode="numeric">
                                </p>
                                </div>
                            <br><br>
                            <center><button id="addCart" class="btn btn-danger btn-sm" name='chana'><i class="fa fa-shopping-cart"></i>Add to cart</button></center>
                             </div>
                        </div>
                        </div>
                    </div>
                    </form>

                    <form action="" method='post'>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="style_prevu_kit">
                        <div class="thumbnail">
                            <img src="assets/sugar.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹8/KG</h4>
                                <h4>SUGAR</h4>
                                <p class="pull-left" style="font-size:19px">Quantity(kg)</p>
                                <div class="quantity">
                                 <p class="pull-right">                                 
        <input type="number" step="1" min="0" max="5" name="sugarqty" value="1" title="Qty" class="input-text qty text" size="2px" pattern="[0-9]*" inputmode="numeric">
                                </p>
                                </div>
                            <br><br>
                            <center><button id="addCart" class="btn btn-danger btn-sm" name='sugar'><i class="fa fa-shopping-cart"></i>Add to cart</button></center>
                             </div>
                        </div>
                        </div>
                        <br>
                    </div>
                    </form>
            </div>
            
   
    
 </div>

<form action="" method="POST">
<center><a href="#"><button class='button button2' type="submit" name='bill'>Generate Bill</button></a></center>
</form>   
    <!-- jQuery -->
    <script language="JavaScript">
    function totalsum() {
        var a = document.getElementById("Rice").value;
        var b = document.getElementById("Pulses").value;
        var c = document.getElementById("Flour").value;
        var d = document.getElementById("Wheat").value;
        var e = document.getElementById("Oil").value;
                
        var t = (a*2) + (b*2) + (c*2) + (d*2) + (e*2);
            
        document.getElementById("total").value = t;
        
    }

        
</script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js_shop/bootstrap.min.js"></script>
</body>
</html>