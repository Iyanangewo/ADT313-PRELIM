<h1>conditions</h1>
<?php

    $age = 20;
    if($age >= 18){
        echo "Legal Age";
    }else if($age >= 0 && $age <= 10) {
        echo 'somethings';      
    }else{
        echo 'minor'; 
    }

   $ageLabel = ($age>=18) ? '18+' : '17-';
    echo $ageLabel;

    switch ($role) {
        case 'admin':
            # code
            echo 'you have full access';
            break;
        case 'student':
            # code
            echo 'you have full access';
            break; 
            
        case 'instructor':
            # code
            echo 'you have full access';
            break; 
        default:
                # code
                echo 'who are you';
                break;    
    }





?>