<?php
    require_once 'library.php';
    if(chkLogin()){
        header("Location: home.php");
    }
?>
<?php require_once 'connection.php'; ?>



<?php
    $message='';
    if(isset($_POST['login'])){
//        print_r($_POST);
      
        
        $email = $_POST['email'];
        $upass = $_POST['pass'];
        $criteria = array("Email Address"=> $email);
        $query = $collection->findOne($criteria);
        //var_dump($query);
        if(empty($query)){
            $message='Email id not registered';
            /*echo "Email ID is not registered.";
            echo "Either <a href='login1.php'>Register</a> with the new Email ID or <a href='login1.php'>Login</a> with an already registered ID";*/
        }
        else{
            
                $pass = $query["Password"];
                /*if(password_verify($upass,$pass))*/
                if($pass==$upass){
                    $var = setsession($email);
//                    echo"<pre>";   
//                 echo($_SESSION);                   
                    header("Location: index_customer.php");
                
                }
                else{
                    /*echo $pass;
                    echo $upass;*/
                    $message='you have entered a wrong password';
                    /*echo "You have entered a wrong password";
                    echo "<br>";
                    echo "Either <a href='login1.php'>Register</a> with the new Email ID or <a href='login1.php'>Login</a> with an already registered ID";*/
                }
                
            
        
        }
    }
    

?>


<?php
  $message1='';
if(isset($_POST['reg'])){
       
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass  = $_POST['pass'];
    
        //$options = array('cost' => 10);
        //$pass = password_hash($temp, PASSWORD_BCRYPT, $options);
    
        $arrays = array(
            
            "First Name"    => $fname,
            "Last Name"     => $lname,
            "Email Address" => $email,
            "Password"      => $pass
        
        );
        
        $query = chkemail($email);
        if($query){
            register($arrays);
            header("Location: index_customer.php");
            $var = setsession($email);
//                    echo"<pre>";   
//                    print_r($_SESSION);
                  
                    
                    if($var){
                        
                    header("Location: index_customer.php");
                    }
                    else{
                        $message1="Some error";
                    }
            
        }
   else{
    $message1='Email id already registered';
    /*echo "Email already registered!";
       echo"<br>";
    echo "Please <a href='login1.php'>Register</a> with another email ID";*/
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
  <center><p><?php echo $message; echo $message1; ?></p></center><?php $message=''; $message1='';?>
 
    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up As Customer</a></li>
        <li class="tab"><a href="#login">Log In As Customer</a></li>
        <!-- <li class="tab"><a href="#signupS">Sign Up As Shopkeeper</a></li>
        <li class="tab"><a href="#loginS">Log In As Shopkeeper</a></li>  -->
      </ul>
      
      <div class="tab-content">
        
        <div id="signup">   
          <h1>Sign Up </h1>
          
          <form action="" method="post">
          
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
      <?php
// Turn off all error reporting
error_reporting(0);
?>
        
        
          <!-- <div id="signupS">   
          <h1>Sign Up </h1>
          
          <form action="register_action1.php" method="post">
          
         
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
            <input type="password" required name='pass' autocomplete="off"/>
          </div>
          
         <!--  <button type="submit" class="button button-block" name='regshop'>Generate Shop Id</button> -->
         <!--<button type="submit" class="button button-block" name='regshop'>Sign up</button>
          
          </form> 

        </div>  -->
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form method="post" action="">
          
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
          
          <!-- <p class="forgot"><a href="#">Forgot Password?</a></p> -->
          
          <button type="submit" name="login" class="button button-block">Log In</button>
          
          </form>

        </div>
        
          <!-- <div id="loginS">   
          <h1>Welcome Back!</h1>
          
          <form action="login_action1.php" method="post">
          
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
            <input type="password" required name='pass' autocomplete="off"/>
          </div>
          
          <!-- <p class="forgot"><a href="#">Forgot Password?</a></p> -->
          
          <!--<button class="button button-block">Log In As a shopkeer</button>
          
          </form> 

        </div> -->
 
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
