<?php

function checkLuck($input){
	
	if(find_consecutive(str_split($input), 6)){
		echo 'Sorry sorry!';
	}	else {
		echo 'You are goning to have good time';
	}
}

function find_consecutive($array, $count) {
    $consecutive = array();
    $previous = null;
    foreach ($array as $value) {
    	//echo "".$value;
        if ($previous !== null && $value == $previous) {
            $consecutive[] = $value;
            if ($found == $count) {
                return true;
            }
        } else {
            $consecutive = array($value);
            $found = 1;
        }
        $previous = $value;        
        $found++;
    }
    return false;
}

echo 'Good Luck!</br>';
checkLuck('00001111100000');
?>