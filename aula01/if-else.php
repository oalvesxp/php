<?php

/**
 * @file: if-else.php
 * @author: Osvaldo Alves
 * @date: 26/01/2022
 * @description: Using if/else to validate an underage person's entry to a given location based on two conditions.
 * 1- Be over 18 years old. 
 * 2- Be over 16 years old and accompanied by an adult.
 * 
 * @use: Run this script with command:> php if-else.php
 *
 * More informations.
 	*
 	* Requires the PHP >= 5 version.
 *
 */

$age = 18;
$people = 2;

echo "Você só pode entrar sozinho se tiver \"18\" anos ou mais." . PHP_EOL;
echo "Você também pode entrar se tiver \"16\" anos ou mais e estiver acompanhado de um adulto." . PHP_EOL;

?>
