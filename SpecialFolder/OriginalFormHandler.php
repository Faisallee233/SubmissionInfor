<?php

if($_SERVER["REQUEST_METHOD"]==="POST"){

    $details = [$_POST["firstName"], $_POST["lastName"], $_POST["email"]];
     
    $detailsStack = [];
    
    for($i = 0; $i < count($details); $i++){
         array_push($detailsStack, $details[$i]);
    }

   if(!empty($detailsStack[0]) && !empty($detailsStack[1]) && !empty($detailsStack[2])){
      
    echo "<ul>";
 
    for($i = 0; $i < count($detailsStack); $i++){
        echo "<li>".$detailsStack[$i]."</li>";
    }

    echo "<ul>";

   }else{
       echo "Please fill in all fields";
   }

}
?>


