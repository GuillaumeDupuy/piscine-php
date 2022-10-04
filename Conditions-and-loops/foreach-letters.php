<?php
foreach (range('A', 'Z') as $l) {
	if ($l == 'Z') echo($l);
	else echo($l . " | ");
}