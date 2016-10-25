<?php
    require_once 'library1.php';
    if(chkLogin()){
        header("Location: home.php");
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

    <div class="form">
      
      <ul class="tab-group">
        <!-- <li class="tab active"><a href="#signup">Sign Up As Customer</a></li>
        <li class="tab"><a href="#login">Log In As Customer</a></li> -->
        <li class="tab active"><a href="#signupS">Sign Up As Shopkeeper</a></li>
        <li class="tab"><a href="#loginS">Log In As Shopkeeper</a></li> 
      </ul>
      
      <div class="tab-content">
        
        
        
        
          <div id="signupS">   
          <h1>Sign Up </h1>
          
          <form action="register_action2.php" method="post">
          
         
            <div class="field-wrap">
              <label>
                Shop ID<span class="req">*</span>
              </label>
              <input type="text" required name='shopid' autocomplete="off" />
            </div>
     
            <div class="field-wrap">
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
          </div>
          
         <!--  <button type="submit" class="button button-block" name='regshop'>Generate Shop Id</button> -->
         <button type="submit" class="button button-block" name='shopreg'>Sign up</button>
          
          </form> 

        </div> 
        
        
        
          <div id="loginS">   
          <h1>Welcome Back!</h1>
          
          <form action="login_action2.php" method="post">
          
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
