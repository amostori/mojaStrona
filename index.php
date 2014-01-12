<!DOCTYPE html>

<?php
	include('menu2.php');
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

  <link rel="stylesheet" href="styl.css" type="text/css">
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
	<aside>
		<h2>Jak wezwać pogotowie ratunkowe</h2>
		<p>Wybierz numer 999 i powiedz co się stało oraz gdzie.</p>
		<p>Nie odkładaj słuchawki pierwszy. Dyspozytor może mieć dodatkowe pytania.</p>
		<h2>Jeśli jesteś sam warto przed dzwonieniem wykonać parę rzeczy:</h2>
			<ol>
				<li>Upewnij się, że jest bezpiecznie. Jeśli nie, wycofaj się.</li>
				<li>Oceń liczbę poszkodowanych. To jest bezcenna informacja dla nas.</li>
				<li>Sprawdź czy chory jest przytomny. Jeśli tak porozmawiaj z nim i następnie zadzwoń po pogotowie.</li>
				<li>Jeśli chory jest nieprzytomny zawołaj sobie kogoś do pomocy i sprawdź czy chory oddycha.</li>
				<li>Jeśli chory oddycha ułóż go na boku i wezwij pogotowie. Nie zostawiaj go bez ważnego powodu.</li>
				<li>Jeśli chory nie oddycha wezwij nas i następnie rozpocznij reanimację. Nie martw się. Teraz nie można mu już zaszkodzić. Może być tylko lepiej.</li>
				<li>Jeśli w którymś momencie nie wiesz co robić to nie rób nic. Zachowaj spokój i rozmawiaj z poszkodowanym. Czasami ci podpowie.</li>
			</ol>
	</aside>
	
	<section>
		<article id="art1">
			<h2>Witaj na stronie Pogotowia Ratunkowego w Oświęcimiu</h2>
			
			<img src="images/ambulans1.jpg" width="699" height="524" alt="Poczekaj chwilkę, tu będzie zdjęcie, ale musi się wczytać. Swoją drogą, masz wolny internet :)" />
			<p>Nasze karetki stacjonują w Oświęcimiu, Kętach, Zatorze i Brzeszczach.</p>
			<p>We wrześniu interweniowaliśmy 865 razy. Średni czas dojazdu do pacjenta to 6 minut 18 sekund.</p>
			<hr />
			<br />
		</article>
		
		<article id="art2">
			<h3>Czas dojazdu w poszczególnych miesiącach</h3>
				<ol>
					<li>Luty 2013 - <em>7,42 min</em></li>
					<li>Marzec 2013 - <em>7,94 min</em></li>
					<li>Kwiecień 2013 - <em>6,29 min</em></li>
					<li>Maj 2013 - <em>5,68 min</em></li>
					<li>Czerwiec 2013 - <em>6,75 min</em></li>
				</ol>
		</article>
		
		<article id="art3">
			
		</article>
	</section>
	</div>
	</div>
	<footer>
				&copy; www.pogotowieosw.pl&nbsp;&nbsp; | &nbsp;&nbsp;Design by Harry P.&nbsp;&nbsp; | &nbsp;&nbsp;
				Admin: Harry P.
	</footer>
				

</body>
</html>
