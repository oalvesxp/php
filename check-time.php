<?php

/**
 * @file: check_time.php
 * @author: Osvaldo Alves
 * @date: 26/01/2022
 * @description: Calculating the time of exection of a script php.
 * @use: include this file in the top of the script that you want, call the function startExec() and on in the end of script call the function endExec(). Before run the script.
 *
 * The function endExec() returns the result of running in seconds.
 	* 
 	* Requires the PHP >= 5 version.
 *
 */

global $time;

/* Get current time */
function getTime(){
	return microtime(TRUE);
}

/* Calculate start time */
function startExec(){
	global $time;
	$time = getTime();
}

/**
 * Calculate end time of the script, execution time and return results.
 *
 */
function endExec(){
	global $time;
	$finalTime = getTime();
	$execTime = $finalTime - $time;
	return number_format($execTime, 6) . 's';
}

?>

