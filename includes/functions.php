<?php 

    function display_greeting(){

        $hour= date('h');
        if($hour >=0 and $hour<=11){
            echo "Good Morning";
        }elseif($hour >=12 and $hour<=17){
            echo "Good Afternoon";
        }else{
            echo "Good Evening";
        }
    }


?>