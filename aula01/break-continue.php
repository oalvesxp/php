<?php

/**
 * @file: break-continue.php
 * @author: Osvaldo Alves
 * @date: 26/01/2023
 * @description: Study to understand how a looping behaves.
 * @use: Run with command:> php break-continue.php.
 *
 * This looping makes a count in the variable $i from 1 to 15, when it reaches the value 7 it goes through an if/else condition where it will be defined tha it must 'continue'.
 * In the second condition, a break was added when the value is equal to 13.
 * Finally, the value of the $i variable will be printed when the looping is stopped.
 	* 
 	* Requires the PHP >= 5 version.
 *
 */

include 'check-time.php';
startExec();

for ($i = 1; $i <= 15; $i++) {
	if($i ==7) {
		continue;
	} elseif ($i == 13) {
		break;
	}
}

	echo "$i" . PHP_EOL;

echo endExec() . PHP_EOL;

?>
