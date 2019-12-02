<?php
function checkLove( $strMessage , $strEncript ) {	
	$bolPermuteString = true;	
	if (strlen($strMessage) <= 1 || strlen($strMessage) >= 100) {
		echo "Message length should be in 1 to 100 characters";
		return false;
	}

	if(strlen($strMessage) == strlen($strEncript)){
		$bolPermuteString = permute($strMessage, 0, strlen($strMessage), $strEncript);
	}	

	if(encriptMessage( strtolower($strMessage), str_split(strtolower($strEncript))) == 'love' && $bolPermuteString){
		echo 'I love you, too!';
	} else {
		echo 'Let us breakup!';
	}
}

function encriptMessage( $strMessage, $arrEncript ) {
	$strWord = '';
	foreach ($arrEncript as $key => $value) {		
		if( strpos( $strMessage, $value ) !== false){
    			$strWord .= $value;
			} 

	}		
	return $strWord;
}
function permute($string, $i, $n, $strEncript) {
    if ($i == $n) {    	
        //echo "$string\n";
    } else {
        for ($j = $i; $j < $n; $j++) {
            swap($string, $i, $j);
            permute($string, $i+1, $n, $strEncript);
            swap($string, $i, $j); // backtracking.
        }
    }
    if ($string == $strEncript) {
    	return false;
    }    
}

function swap(&$string, $i, $j) {
    $temp = $string[$i];
    $string[$i] = $string[$j];
    $string[$j] = $temp;
}

$strMessage = 'lovewewe';
$strEncript = 'love';
checkLove( $strMessage, $strEncript );
?>