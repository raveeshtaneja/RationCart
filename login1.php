<?php
    require_once 'library.php';
    /*if(chkLogin()){
        header("Location: home.php");
    }*/
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
        <li class="tab active"><a href="#signup">Sign Up As Customer</a></li>
        <li class="tab"><a href="#login">Log In As Customer</a></li>
        <!-- <li class="tab"><a href="#signupS">Sign Up As Shopkeeper</a></li>
        <li class="tab"><a href="#loginS">Log In As Shopkeeper</a></li> -->
      </ul>
      
      <div class="tab-content">
        
        <div id="signup">   
          <h1>Sign Up </h1>
          
          <form action="register_action1.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required name='fname' autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" required name='lname' autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Aadhar Id<span class="req">*</span>
            </label>
            <input type="text" required name='aadhar' autocomplete="off"/>
          </div>
          
            <div class="field-wrap">
            <label>
              Email Id<span class="req">*</span>
            </label>
            <input type="email" required name='email' autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required id='pass' name='pass' autocomplete="off"/>
          </div>
          <!-- <div class="field-wrap">
            <label>
              Confirm Password<span class="req">*</span>
            </label>
            <input type="password" required id='cpass' name='cpass' autocomplete="off"/>
          </div> -->
          
          <button type="submit" class="button button-block" name="reg">Get Started</button>
          
          </form>

        </div>
        
        
        <!--  <div id="signupS">   
          <h1>Sign Up </h1>
          
          <form action="/" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Shop Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Shop Address<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Generate Shop Id</button>
          
          </form> 

        </div>-->
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form method="post" action="login_action1.php">
          
            <div class="field-wrap">
            <label>
              Email address<span class="req">*</span>
            </label>
            <input type="text" required  name='email' autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required name='pass' autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button type="submit" name="login" class="button button-block">Log In</button>
          
          </form>

        </div>
        
        <!-- <div id="loginS">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Shop Id<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
 -->
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
