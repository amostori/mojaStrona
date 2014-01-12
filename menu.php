<?php

	$menu = array(
								'../index.php'=>'strona główna',
								'grafik.php'=>'grafik',
								'dladzieci.php'=>'dla dzieci',
								'galeria.php'=>'galeria',
								'edukacja.php'=>'edukacja');
				
	$pozycja = strrpos($_SERVER['PHP_SELF'],'/');
	$aktualna_str = substr($_SERVER['PHP_SELF'], $pozycja+1);
	
	$nazwa_strony = $menu[$aktualna_str];
?>