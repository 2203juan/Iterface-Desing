<?php

    function RGB($R,$G,$B){
        if($R>255){
            $R = 255;
        }
        if($G>255){
            $G = 255;
        }
        if($B>255){
            $B=255;
        }
        $ans = array(($R/16)%16,($R)%16,($G/16)%16,($G)%16,($B/16)%16,($B)%16);
        $num = array("0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F");
        $res = "";

        for ($i=0; $i <6 ; $i++) { 
            $res = $res.($num[$ans[$i]]);
        }
        return $res;
    }
    $solve= "#".RGB(159, 165, 201);
    echo $solve;

?>