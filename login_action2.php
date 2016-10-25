<?php require_once 'connection.php'; ?>
<?php require_once 'library1.php'; ?>
<?php
    
    if(chkLogin()){
        header("Location: cart/profile.php");
    }
?>
<?php

    if(isset($_POST['shoplogin'])){
//        print_r($_POST);
      
        
        $shopid = $_POST['shopid'];
        $shoppass = $_POST['shoppass'];
        $criteria = array("shopid"=> $shopid);
        $query = $collection->findOne($criteria);
        //var_dump($query);
        if(empty($query)){
            echo "Shop ID is not registered.";
            echo "Either <a href='login2.php'>Register</a> with the new Email ID or <a href='login2.php'>Login</a> with an already registered ID";
        }
        else{
            
                $pass = $query["shoppass"];
                /*if(password_verify($upass,$pass))*/
                if($pass==$shoppass){
                    $var = setsession1($shopid);
//                    echo"<pre>";   
//                 echo($_SESSION);                   
                    header("Location: cart/profile.php");
                
                }
                else{
                    /*echo $pass;
                    echo $upass;*/
                    echo "You have entered a wrong password";
                    echo "<br>";
                    echo "Either <a href='login2.php'>Register</a> with the new Email ID or <a href='login2.php'>Login</a> with an already registered ID";
                }
                
            
        
        }
    }
    

?>