<?php

/**
 * @file: looping-while.php
 * @author: Osvaldo Alves
 * @date: 26/01/2023
 * @description: How to do a looping with method while.
 * @use: Run this script with command:> php lopping-while.php
 *
 * More informations.
 	*
 	* Requires the PHP >= 5 version.
 *
 */

$i = 1;

while ($i <= 15) {
	echo "#$i" . PHP_EOL;
	$i = $i + 1;
}

?>
