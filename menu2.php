<?php

	$menu = array(
								'index.php'=>'strona główna',
								'strony/grafik.php'=>'grafik',
								'strony/dladzieci.php'=>'dla dzieci',
								'strony/galeria.php'=>'galeria',
								'strony/edukacja.php'=>'edukacja');
				
	$pozycja = strrpos($_SERVER['PHP_SELF'],'/');
	$aktualna_str = substr($_SERVER['PHP_SELF'], $pozycja+1);
	
	$nazwa_strony = $menu[$aktualna_str];
?>