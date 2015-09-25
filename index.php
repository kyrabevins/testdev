<?php

function Greetings($hours){
    $hours=(int)$hours;
    $greetings = "";
    if($hours<11){
        $greetings = "Goodmorning";
    }
    
    elseif ($hours<14) {
        $greetings = "Good afternoon";
    }
    
    elseif ($hours<18){
        $greetings = "Good evening";
        
    }
    
    else{
        
        $greetings="goodnight";
        
    }
    
    return $greetings;
    
};

print(Greetings(12));





