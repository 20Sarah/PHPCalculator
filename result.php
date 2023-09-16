<?php

error_reporting(0); //for turning off errors reporting
        
       
        $num1=$_POST['num1'];//creation of a variable to store the value of num1
        $num2=$_POST['num2'];
        // $oprnd=$_POST['sub'];


        $action=$_POST['action'];

 
        if($action=="add"){
            echo $num1+$num2;
        }
        else if($action=="sub"){ 
            echo $num1-$num2;
        }
        elseif(is_nan($num1) || is_nan($num2)){
            echo "Invalid input";

        }
        else{
            echo "default";
        }
    
        
      
        




?>