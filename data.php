<?php

    //if(isset($_POST['showshop'])){
//        print_r($_POST);
      
        
        $data = $_POST['data'];
        echo $data;
        file_put_contents('json/data1.json', $data);
         header("Location: login1.php");
      //  }


 ?>