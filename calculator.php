<?php
		echo "Wat wil je doen maat? (+, -, %)" . PHP_EOL;
	$multiplier=readline("");
if ($multiplier === '+' || $multiplier === '-' || $multiplier === '%' ){
} else {
		echo "Daar kan ik niets mee."  . PHP_EOL . "Probeer opnieuw"; 
	exit(); 
}		
		echo "Wat is je eerste getal?" . PHP_EOL;
	$first=readline("");
if (!is_numeric($first)) {echo "Geen getal makker" . PHP_EOL . "bruh"; 
	exit();} 
		echo "En nu de tweede?" . PHP_EOL;
		$second=readline("");
if (is_numeric($second)) {} 
	else { 
		echo "Nog steeds geen getal!" . PHP_EOL . "Probeer opnieuw";
	exit(); 
} 
if ( $multiplier === '+' ) {
		echo "" . ($first + $second);
} 
if ( $multiplier === '-' ) {
		echo "" . ($first - $second);
} 
if ( $multiplier === '%' ) {
		echo "" . ($first % $second);
} 
exit();