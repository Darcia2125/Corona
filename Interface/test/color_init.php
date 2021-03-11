<?php
foreach(array('r', 'g', 'b') as $color){
        //Generate a random number between 0 and 255.
        $rgbColor[$color] = mt_rand(100, 255);
    }
    $sat = mt_rand(25,80)/100;
    $bright = sqrt(1-($sat*$sat));
        if($bright<0.25){
            $bright = 0.25;
        }
    $RED = $sat * ($rgbColor["r"] + ((255 - $rgbColor["r"]) * (1 - $bright)));
    $GREEN = $sat * ($rgbColor["g"] + ((255 - $rgbColor["g"]) * (1 - $bright)));
    $BLUE = $sat * ($rgbColor["b"] + ((255 - $rgbColor["b"]) * (1 - $bright)));
    $cocolor="rgb(" . $RED . "," . $GREEN . "," . $BLUE . ")";
?>