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
	
	<link href="../fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet">
	<script src="../js/jquery-1.6.3.min.js"></script>
	<script src="../js/jquery.easing.1.3.js"></script>
	<script src="../fancybox/jquery.fancybox-1.3.4.min.js"></script>
	
														<script>
															$(document).ready(function() {
																$('#gallery a').fancybox({
																	
																	overlayOpacity: .5,
																	transitionIn: 'elastic',
																	transitionOut: 'elastic',
																	easingIn: 'easeInSine',
																	easingOut: 'easeOutSine',
																	titlePosition: 'outside' ,		
																	cyclic: true
																});
															}); // end ready
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
	
	<section>
		<article id="art_galeria">
			
			<h2>Galeria</h2>
			
			<div id="gallery">
			<a href="../images/am1.jpg" rel="gallery" title="am1"><img src="../images/am1_h.jpg"  alt="piłki do golfa"></a>

			
			<a href="../images/am3.jpg" rel="gallery" title="am3"><img src="../images/am3_h.jpg"  alt="piłki do golfa"></a>
			<a href="../images/am4.jpg" rel="gallery" title="am4"><img src="../images/am4_h.jpg"  alt="kamienna ściana"></a>
			<a href="../images/am5.jpg" rel="gallery" title="am5"><img src="../images/am5_h.jpg"  alt="piłki do golfa"></a>
			<a href="../images/am6.jpg" rel="gallery" title="Ładne miejsce"><img src="../images/am6_h.jpg"  alt="kamienna ściana"></a>
			<a href="../images/am7.jpg" rel="gallery" title="am6"><img src="../images/am7_h.jpg"  alt="piłki do golfa"></a>
			<a href="../images/am8.jpg" rel="gallery" title="Ładne miejsce"><img src="../images/am8_h.jpg"  alt="kamienna ściana"></a>
			<a href="../images/szymi.jpg" rel="gallery" title="Ładne miejsce"><img src="../images/szymi_h.jpg"  alt="kamienna ściana"></a>
			
		</div>
			
			
		</article>
	</section>
	</div>
	</div>
	<footer>
				&copy; www.pogotowieosw.pl&nbsp;&nbsp; | &nbsp;&nbsp;Design by Harry P.&nbsp;&nbsp; | &nbsp;&nbsp;
				<small>Admin: Harry P.</small>
	</footer>
				

</body>
</html>
