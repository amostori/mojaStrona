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

  <title><?php echo $nazwa_strony ?></title>

  <link rel="stylesheet" href="../styl.css" type="text/css">
	<script src="../js/jquery-1.6.3.min.js"></script>
	<script type='text/javascript' src='../js/jquery.cookie.js'></script>
<script type='text/javascript' src='../js/jquery.hoverIntent.minified.js'></script>
<script type='text/javascript' src='../js/jquery.dcjqaccordion.2.7.min.js'></script>
<script>
jQuery(document).ready(function($) {
    jQuery('#sliding-navigation').dcAccordion();
		
		//Ajaxowe przejście do stron Zawal.php i Lokal.php
		$('.serce a').click(function(){
		
			var url = $(this).attr('href');
			$('#art1_edu').load(url + ' #art1_edu');
			return false;
		
		}); //end click
});
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
	
<?php include ('../menu_edu.php') ?>
	<section id="sec_edu">
	
	
		<article id="art1_edu">
			<h2>Kryteria rozpoznania zawału serca w ekg wg wytycznych Polskiego Towarzystwa Kardiologicznego, 2010</h2>
			<p>Pierwszym choć rzadko uchwytnym objawem zawału serca w ekg są duże, dodatnie załamki T. Obraz taki występuje przelotnie, w ciągu pierwszej do dwóch godzin od momentu pojawienia się bólu w klatce piersiowej.</p>
			<img src="../ekg/img_ekg/duzyT.png" alt="czekaj proszę" width="253" height="152" />
			<p>W dalszej kolejności następuje stopniowe unoszenie się odcinka ST w co najmniej dwóch odprowadzeniach sąsiadujących. Początkowo uniesienie jest wklęsłe, ale szybko przechodzi w wypukłe łącząc się ze zstępującym ramieniem załamka T.</p>
			<img src="../ekg/img_ekg/ew2.png" alt="proszę czekać" width="266" height="302" />
			<img src="../ekg/img_ekg/ew3.png" alt="Proszę czekaj" width="280" height="224" />
			<p>W tabeli poniżej przedstawiono kryteria uniesienia odcinków ST w punkcie J wg wytycznych PTK, 2010.</p>
			<img src="../ekg/img_ekg/tabela1.PNG" alt="proszę czekać" width="633" height="148" />
			<p>Warto pamiętać, że u mężczyzn do 40 r. ż. odcinek ST w punkcie J w odprowadzeniu V<small>2</small> i V<small>3</small> bywa uniesiony do 3 mm, a w zespole wczesnej repolaryzacji (np. u sportowców) nawet do 5 mm.</p>
			<p>Stąd najbardziej wiarygodnym kryterium nieprawidłowego uniesienia odcinka ST jest jego <strong>kształt</strong>, w ostrym niedokrwieniu przeważnie <strong>wypukły</strong> (fala Pardeego). </p>
			<p>Artykuł opracowano na poastawie dokumentu: <a href="http://www.mp.pl/oit/krazenia/show.html?id=73490">prof. dr hab. med. Barbary Dąbrowskiej</a></p>
			
				
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
