<?php

if($_SERVER["REQUEST_METHOD"]==="POST"){

    $details = [$_POST["firstName"], $_POST["lastName"], $_POST["email"]];
     
    $detailsStack = [];
    
    for($i = 0; $i < count($details); $i++){
         array_push($detailsStack, $details[$i]);
    }

   if(!empty($detailsStack[0]) && !empty($detailsStack[1]) && !empty($detailsStack[2])){
      
    if(filter_var($detailsStack[2], FILTER_VALIDATE_EMAIL) && ctype_lower($detailsStack[2]) && preg_match("/^[a-zA-Z-' ]*$/",$detailsStack[1]) && preg_match("/^[a-zA-Z-' ]*$/",$detailsStack[0])){
        echo "<ul>";
 
    for($i = 0; $i < count($detailsStack); $i++){
        echo "<li>".$detailsStack[$i]."</li>";
    }

    echo "<ul>";
    }else{
        echo "Invalid input";
    }

   }else{
       echo "Please fill in all fields";
   }

}
?>


