<?php
$idPhoto = 1;
$idPhotographe = 1;

	$dateactuel = time();
	$url = $dateactuel + $idPhotographe;
	$url = base_convert(strval($url), 10, 32);
	echo $url;
?>