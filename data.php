<?php require_once 'connection.php'; ?>
<?php require_once 'library.php'; ?>
<?php

    //if(isset($_POST['showshop'])){
//        print_r($_POST);
      
        
        $data = $_POST['data'];
        //echo $data;
        file_put_contents('json/data1.json', $data);
        $data_shop = $_POST['data1'];
        

        //$data_shop = json_decode($data_shop);
		file_put_contents('json/data_shop.json', $data_shop);        
		
		/*foreach ($data_shop as $id => $item) {
		   $collection->insert($item);
		}*/
		$pieces=explode(']', $data_shop);
		foreach ($pieces as $key => $value) {
			$small_piece=explode(';', $value);
	        $arrays = array(
	            
	            "id"    => $small_piece[0],
	            "name"     => $small_piece[1],
	            "add" => $small_piece[2],
	            "pass" => mt_rand(100000,999999)      
	        );
	        $collection->remove(array('id' => $small_piece[0]));
	        if(chkshopid($small_piece[0]))
	        {//$collection->remove(array('id' => $small_piece[0]));
	        register($arrays);
	    	}
		}



        header("Location: login1.php");
      //  }


 ?>