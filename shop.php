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
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
            <div class="col-md-12">
                
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
                            <img src="assets/urad dal.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹8/KG</h4>
                                <h4>Urad dal</h4>
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
                            <img src="assets/masoor dal.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹10/KG</h4>
                                <h4>Masoor dal</h4>
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
                            <img src="assets/toor dal.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹9/KG</h4>
                                <h4>Toor dal</h4>
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
                    <br><br><br>
                    <div class="col-sm-3 col-lg-3 col-md-3">
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
                    </div>
                    <br>
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
                            <img src="assets/wheat.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹4/KG</h4>
                                <h4>WHEAT</h4>
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
                            <img src="assets/oil.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹17/L</h4>
                                <h4>OIL</h4>
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
                            <img src="assets/salt.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹4/KG</h4>
                                <h4>SALT</h4>
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
                    <br>
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
                            <img src="assets/maida.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹11/KG</h4>
                                <h4>MAIDA</h4>
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
                            <img src="assets/chana.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹7/KG</h4>
                                <h4>CHANA</h4>
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
                            <img src="assets/sugar.jpg">
                            <div class="caption">
                                <h4 class="pull-right">₹8/KG</h4>
                                <h4>SUGAR</h4>
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
                        <br>
                    </div>

            </div>
            
   
    
 </div>

<center><a href="cart.html"><button class='button button2'>Proceed to checkout</button></a></center>
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