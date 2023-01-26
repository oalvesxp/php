<?php

/**
 * Created by vim
 * User: oalves
 * Date: 26/01/2022
 * time: 12:56 PM
 */

for ($i = 1; $i <= 15; $i++) {
	if($i ==7) {
		continue;
	} elseif ($i == 13) {
		break;
	}
}

	echo "$i" . PHP_EOL;

?>
