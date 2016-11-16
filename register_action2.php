<?php require_once 'connection.php'; ?>
<?php require_once 'library1.php'; ?>
<?php
    
    if(chkLogin()){
        header("Location: cart/profile.php");
    }
?>
<?php
// Turn off all error reporting
error_reporting(0);
?>
<?php

/*if(isset($_POST['shopreg'])){
       
        $shopid = $_POST['shopid'];
        $shopname = $_POST['shopname'];
        $shopadd  = $_POST['shopadd'];
        $shoppass = $_POST['shoppass'];
        
    
        //$options = array('cost' => 10);
        //$pass = password_hash($temp, PASSWORD_BCRYPT, $options);
    
        $arrays = array(
            
            "shopid"    => $shopid,
            "shopname"     => $shopname,
            "shopadd" => $shopadd,
            "shoppass"      => $shoppass
        
        );
        
        $query = chkshopid($shopid);
        if($query){
            register($arrays);
            header("Location: cart/profile.php");
            $var = setsession1($shopid);
//                    echo"<pre>";   
//                    print_r($_SESSION);
                  
                    
                    if($var){
                        
                    header("Location: cart/profile.php");
                    }
                    else{
                        echo "Some error";
                    }
            
        }
   else{
    echo "Email already registered!";
       echo"<br>";
    echo "Please <a href='login2.php'>Register</a> with another email ID";
   }
}
*/

if(isset($_POST['shopreg'])){
    $id=$_POST['shopid'];
    $criteria = array("id"=> $id);
    $query = $collection->findOne($criteria);
    $pass=$query['pass'];
    
    echo 'your password is ';
    echo $pass;
    /*header("Location:login2.php");
    footer("echo 'your password is $pass'");*/
}
?>