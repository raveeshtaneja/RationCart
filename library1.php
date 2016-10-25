<?php
     //session_start();
     $_SESSION["userLoggedIn"] = 0;
    function register($document){
        global $collection;
        $collection->insert($document);
        return true;
    }
    
 /*   function chkshop($email){
        global $collection;
        $temp = $collection->findOne(array('Email Address'=> $email));
        if(empty($temp)){
        return true;
        }
        else{
            return false;
        }
    }*/

    function chkshopid($shopid){
        global $collection;
        $temp = $collection->findOne(array('shopid'=> $shopid));
        if(empty($temp)){
        return true;
        }
        else{
            return false;
        }
    }
/*
   function setsession($email){
     
       
        //session_start();

        $_SESSION["userLoggedIn"] = 1;
        global $collection;
        $temp = $collection->findOne(array('Email Address'=> $email));
        $_SESSION["uname"] = $temp["First Name"];
        $_SESSION["email"] = $email;
        return true;
        
    }*/

      function setsession1($shopid){
     
       
        //session_start();

        $_SESSION["userLoggedIn"] = 1;
        global $collection;
        $temp = $collection->findOne(array('shopid'=> $shopid));
        $_SESSION["shopname"] = $temp["shopname"];
        $_SESSION["shopid"] = $shopid;
        $_SESSION["shopadd"]=$temp["shopadd"];
        return true;
        
    }
    function chkLogin(){
        
        //var_dump($_SESSION);
        
        if($_SESSION["userLoggedIn"]== 1){
            return true;
        }
        else{
            return false;
        }
    }
    function removeall(){
        unset($_SESSION["userLoggedIn"]);
        unset($_SESSION["uname"]);
        unset($_SESSION["email"]);
        return true;
    }
    
?>