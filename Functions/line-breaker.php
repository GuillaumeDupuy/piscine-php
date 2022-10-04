<?php

function breakLines(string $str, int $nb) : string {
	return wordwrap($str, $nb);
}