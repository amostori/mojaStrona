<!DOCTYPE html>


<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Andika&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8">
  <meta name="Description" content="Strona najlepszego pogotowia ratunkowego w historii Europy!">
  <meta name="Keywords" content="pogotowie, ratunkowe, oswiecim, wedzina, andrzejczak, karetki">
  <meta name="Author" content="Marcin Andrzejczak">
  <meta name="Generator" content="kED2">

  <title>Edukacja</title>

  <link rel="stylesheet" href="../styl.css" type="text/css">
	<style type="text/css">
		ul#sliding-navigation{
		
		font-size: 1.0em;
	
	}
	</style>
	
	<script src="../js/jquery-1.6.3.min.js"></script>
	<script src="../js/jquery.easing.1.3.js"></script>
	<script src="../js/skrypt.js"></script>
	

	
	<script>
	
		$(document).ready(function(){
			
			$('#sliding-navigation a').click(function(){
		
				var url = $(this).attr('href');
				$('#art1_eduNew').load(url + (' #art1_edu'));
				$('#odp').removeClass('schowaj');
				$('#dashboard').load(url + (' #dashboard2'));
	
				
				return false;
				
			
			}); // end of click
		$('#first a').click();
		
		}); // end of ready
	
	</script>
	
</head>
<body>


<div id="wrapper">
	<header id="logo">
		<h1>Pogotowie Ratunkowe w Oświęcimiu</h1>
		<hr />
		<nav id="nawLogo">
			<ul id="ulLogo">
			
				<li ><a href="../index.php">strona główna</a></li>
				<li><a href="../strony/grafik.php">grafik</a></li>
				<li><a href="../strony/dladzieci.php">dla dzieci</a></li>
				<li><a href="../strony/galeria.php">galeria</a></li>
				<li><a href="../strony/edukacja.php">edukacja</a></li>
				</ul>
		</nav>
	</header>
	
	
	<hr />
	
	
	<div id="inner">
	
	<div id="navigation-block">
		
		<ul id="sliding-navigation">
			<li class="sliding-element"><h3>Quiz ekg</h3></li>
			<li class="sliding-element" id="first"><a href="ekg1.php">Przykład 1</a></li>
			<li class="sliding-element"><a href="ekg2.php">Przykład 2</a></li>
			<li class="sliding-element"><a href="ekg3.php">Przykład 3</a></li>
			<li class="sliding-element"><a href="ekg4.php">Przykład 4</a></li>
			<li class="sliding-element"><a href="ekg5.php">Przykład 5</a></li>
			<li class="sliding-element"><a href="ekg6.php">Przykład 6</a></li>
			<li class="sliding-element"><a href="ekg7.php">Przykład 7</a></li>
			<li class="sliding-element"><a href="ekg8.php">Przykład 8</a></li>
			<li class="sliding-element"><a href="ekg9.php">Przykład 9</a></li>
			<li class="sliding-element"><a href="ekg10.php">Przykład 10</a></li>
			<li class="sliding-element"><a href="ekg11.php">Przykład 11</a></li>
			<li class="sliding-element"><a href="ekg12.php">Przykład 12</a></li>
</ul>
		
	</div>