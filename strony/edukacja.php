<!DOCTYPE html>

<?php
	include('../menu.php');
?>

<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Andika&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8">
  <meta name="Description" content="Strona najlepszego pogotowia ratunkowego w historii Europy!">
  <meta name="Keywords" content="pogotowie, ratunkowe, oswiecim, wedzina, andrzejczak, karetki">
  <meta name="Author" content="Marcin Andrzejczak">
  <meta name="Generator" content="kED2">

  <title><?php echo $nazwa_strony ?></title>

  <link rel="stylesheet" href="../styl.css" type="text/css">
	<script src="../js/jquery-1.6.3.min.js"></script>
	<script type='text/javascript' src='../js/jquery.cookie.js'></script>
<script type='text/javascript' src='../js/jquery.hoverIntent.minified.js'></script>
<script type='text/javascript' src='../js/jquery.dcjqaccordion.2.7.min.js'></script>
<script>
jQuery(document).ready(function($) {
    jQuery('#sliding-navigation').dcAccordion();
		
		
});
</script>
</head>
<body>


<div id="wrapper">
	<header id="logo">
		<h1>Pogotowie Ratunkowe w Oświęcimiu</h1>
		<hr />
		<nav id="nawLogo">
			<?php
			echo "<ul id=\"ulLogo\">";
			
				foreach($menu as $klucz=>$wartosc){
					if($klucz == $aktualna_str)
						echo "<li id=\"aktualny\">". $wartosc. "</li>";
					else
						echo "<li><a href=\"$klucz\">". $wartosc. "</a></li>";
				}
				
			echo "</ul>";
			?>
		</nav>
	</header>
	
	
	<hr />
	
	
	<div id="inner">
	
<?php include ('../menu_edu.php') ?>
	
	<section id="sec_edu">
	
	
		<article id="art1_edu">
		
			<h2>Witaj!</h2>
			<p>Jeśli chcesz poszerzyć swoją wiedzę dobrze trafiłeś. Znajdziesz tu parę ciekawych informacji.</p>
			<p>Na początek polecam "Kącik Ekg" a w nim garść artykułów i quiz.</p>
			<p>Znajdziesz tu również dział z algorytmami postępowania dla ratowników i kilka prezentacji w formie "Prezi". Na tym etapie rozwoju strony materiałów jest jeszcze niewiele, ale z czasem z pewnością ich przybędzie.</p>
			<h2>Miłej lektury!</h2>

			
				
		</article>
		
		
		
	</section>
	</div><!-- end Inner-->
	</div><!-- end wrapper-->
	
	
	
	<footer>
				&copy; www.pogotowieosw.pl&nbsp;&nbsp; | &nbsp;&nbsp;Design by Harry P.&nbsp;&nbsp; | &nbsp;&nbsp;
				<small>Admin: Harry P.</small>
	</footer>
				

</body>
</html>
