<?php include('../bazy/baza_htm.php');?> 
	
	<section id="sec_edu">
	
	
		<article id="art1_edu">
				<h2>Przypadek 9</h2>
				<p>Mężczyzna l. 51 ból w klatce piersiowej.</p>
				<p>Co widzisz na poniższym zapisie? (Kliknij obrazek by powiększyć)</p>
				<a target="_blank" href="img_ekg/ekg9.png"><img src="img_ekg/button.png" alt="proszę poczekać chwilkę..." border="0" /></a>
			
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				
			<div id="identyfikator">		
				<input type="radio" name="nazwa" value="wartość" />A. Zapalenie osierdzia <br />
				<input type="radio" name="nazwa" value="wartość2" />B. Zawał ściany przedniej, bocznej i dolnej <br />
				<input type="radio" name="nazwa" value="wartość2" />C. Zespół WPW  <br />
				<input type="radio" name="nazwa" value="wartość2" />D. Zawał ściany przedniej i dolnej <br />
			<br />
				
					
			</div><!-- end identyfikator-->
					
			</form>
			
		</article>
		
		
		
	</section>
	<div id="dashboard2">
			<p><b>Zapalenie osierdzia</b></p>
			<img src="img_ekg/ekg9_zoom.png" alt="wait"  />
						<p>Kiedy widzisz uniesienia ST nad ścianami przednią, dolną i boczną rozważ czy nie jest to przypadkiem zapalenie osierdzia bo jest to typowe dla tej choroby. Dodatkowe cechy zapalenia osierdzia w Ekg to zazębienia punktu J, obniżki odcinka PQ (widoczne tu najlepiej w II i V<small>2</small>) oraz wklęsłe uniesienie ST (w przeciwieństwie do zawału gdzie uniesienia są wypukłe). Niemniej zwykle tych dwóch schorzeń nie da się odróżnić na podstawie samego Ekg.</p>
						
		</div>
	</div><!-- end Inner-->
	</div><!-- end wrapper-->
	
	
	
	<footer>
				&copy; www.pogotowieosw.pl&nbsp;&nbsp; | &nbsp;&nbsp;Design by Harry P.&nbsp;&nbsp; | &nbsp;&nbsp;
				<small>Admin: Harry P.</small>
	</footer>
				

</body>
</html>
