<?php
    require_once 'library1.php';
    if(chkLogin()){
        header("Location: home.php");
    }
?>
<?php require_once 'connection.php'; ?>


<?php
$message='';
if(isset($_POST['shopreg'])){
    $id=$_POST['shopid'];
    $criteria = array("id"=> $id);
    $query = $collection->findOne($criteria);
    $pass=$query['pass'];
    
    $message='your password is ';
    $message+= $pass;
    /*header("Location:login2.php");
    footer("echo 'your password is $pass'");*/
}
?>


<?php
$message1='';
if(isset($_POST['shoplogin'])){
    $id=$_POST['shopid'];
    $pass=$_POST['shoppass'];
    $criteria = array("id"=> $id);
    $query = $collection->findOne($criteria);
    if(empty($query)){
        $message1= "Shop ID is not registered.";
        //echo "Either <a href='login2.php'>Register</a> with the new Email ID or <a href='login2.php'>Login</a> with an already registered ID";
    }
    else{
        
            $shoppass = $query["pass"];
            
            if($pass==$shoppass){
                $var = setsession1($id);
//                    echo"<pre>";   
//                 echo($_SESSION);                   
                header("Location: cart/profile.php");
            
            }
            else{
                
                $message1="You have entered a wrong password";
                //echo "<br>";
                //echo "Either <a href='login2.php'>Register</a> with the new Email ID or <a href='login2.php'>Login</a> with an already registered ID";
            }
            
        
    
    }
}
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">

    
    
    <!-- <script src="myscript.js" type="text/javascript"></script> -->
  </head>

  <body>
  <div data-role="header" data-position="fixed">
  
  <h2 align='right'><a href='index.php'>Back to Home</a></h2>
  
  </div>
  <center><p><?php echo $message; echo $message1;?></p></center>
    <div class="form">
      
      <ul class="tab-group">
        <!-- <li class="tab active"><a href="#signup">Sign Up As Customer</a></li>
        <li class="tab"><a href="#login">Log In As Customer</a></li> -->
        <li class="tab active"><a href="#signupS">Sign Up As Shopkeeper</a></li>
        <li class="tab"><a href="#loginS">Log In As Shopkeeper</a></li> 
      </ul>
      
      <div class="tab-content">
        
        
        
        
          <div id="signupS">   
          <h1>See password </h1>
          
          <form action="" method="post">
          
         
            <div class="field-wrap">
              <label>
                Shop ID<span class="req">*</span>
              </label>
              <input type="text" required name='shopid' autocomplete="off" />
            </div>
     
            <!-- <div class="field-wrap">
              <label>
                Shop Name<span class="req">*</span>
              </label>
              <input type="text" required name='shopname' autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Shop Address<span class="req">*</span>
              </label>
              <input type="text" required name='shopadd' autocomplete="off"/>
            </div>
          
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" required name='shoppass' autocomplete="off"/>
          </div> -->
          
         <!--  <button type="submit" class="button button-block" name='regshop'>Generate Shop Id</button> -->
         <button type="submit" class="button button-block" name='shopreg'>Generate Password</button>
          
          </form> 

        </div> 
        
        
        
          <div id="loginS">   
          <h1>Welcome Back!</h1>
          
          <form action="" method="post">
          
            <div class="field-wrap">
            <label>
              Shop Id<span class="req">*</span>
            </label>
            <input type="text" required name='shopid' autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required name='shoppass' autocomplete="off"/>
          </div>
          
          <!-- <p class="forgot"><a href="#">Forgot Password?</a></p> -->
          
          <button type="submit" name="shoplogin" class="button button-block">Log In</button>
          
          </form> 

        </div>
 
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
