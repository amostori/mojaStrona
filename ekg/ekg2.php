<?php include('../bazy/baza_htm.php');?> 
	<section id="sec_edu">
	
	
		<article id="art1_edu">
				<h2>Przypadek 2</h2>
				<p>Pacjent 85 l. z dusznością, bólem w klatce piersiowej, niespokojny.</p>
				<p>Co widzisz na poniższym zapisie? (Kliknij obrazek by powiększyć)</p>
				<a target="_blank" href="img_ekg/tomb.png"><img src="img_ekg/button.png" alt="proszę poczekać chwilkę..." border="0" /></a>
			
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				
			<div id="identyfikator">			
				<input type="radio" name="nazwa" value="wartość" />A. STEMI <br />
				<input type="radio" name="nazwa" value="wartość2" />B. Zawał serca podwsierdziowy <br />
				<input type="radio" name="nazwa" value="wartość2" />C. Przerost lewej komory <br />
				<input type="radio" name="nazwa" value="wartość2" />D. Blok lewej odnogi pęczka Hisa <br />
			<br />
				
						
			</div><!-- end identyfikator-->
					
			</form>
			
		</article>
		
		
		
		
		
	</section>
	<div id="dashboard2">
			<p><b>Jest to masywny zawał STEMI. Widoczne charakterystyczne zmiany QRS w odprowadzeniu I i aVL, przypominające kształtem nagrobki. Stan pacjent wymaga maksymalnej uwagi - w każdej chwili może dojść do migotania komór.</b></p>
	<p>Dodatkowo obecny jest RBBB czyli blok prawej odnogi pęczka Hisa ("królicze uszy w V<small>2</small>") i lewej przedniej wiązki (lewogram). Mamy więc do czynienia z blokiem dwuwiązkowym.</p>
		</div>
	</div><!-- end Inner-->
	</div><!-- end wrapper-->
	
	
	
	<footer>
				&copy; www.pogotowieosw.pl&nbsp;&nbsp; | &nbsp;&nbsp;Design by Harry P.&nbsp;&nbsp; | &nbsp;&nbsp;
				<small>Admin: Harry P.</small>
	</footer>
				

</body>
</html>
