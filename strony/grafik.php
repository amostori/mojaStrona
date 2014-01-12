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
		<article id="art1">
			<h2>Grafik na styczeń jest dostępny po podaniu hasła</h2>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];  ?>">
		<fieldset id="grafik">
			<legend>Wpisz hasło:</legend>
			<ul>
				<li> 
					Hasło<input type="password" name="haslo">
				</li>
			</ul>
		</fieldset>
		<hr />
		<input type="submit" name="wyslij" value="Otwórz" />
		<input type="reset" value="wyczyść" />
	</form>
	<?php  
	
	if (isset($_POST['haslo'])){
	$haslo = $_POST['haslo'];
			
				if($haslo == 'ambu'){
					echo "<br />";
					echo 'Hasło prawidłowe.&nbsp;';
					echo '<a href=sty.xls>Kliknij by zobaczyć grafik</a>';
				}
				else{
				echo "<br />";
				echo 'Błędne hasło. Spróbuj ponownie';
				
				}
				}
		?>
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
