<?php
    	
        $data = file_get_contents('data.json');
        $data_array = json_decode($data, true);

        //data in our POST
        $input = array(
            'username' => $_POST['name'],
			"Email" => $_POST['email'],
            "password" => $_POST['pass'] 
        );
    
        //append the POST data
         $data_array[] = $input;
    
        //return to json and put contents to our file
        $data_array = json_encode($data_array, JSON_PRETTY_PRINT);
        file_put_contents('data.json', $data_array);
    
        header('location:index.php')
      ?>