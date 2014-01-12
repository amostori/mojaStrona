<?php include('../bazy/baza_htm.php');?> 
	
	<section id="sec_edu">
	
	
		<article id="art1_edu">
				<h2>Przypadek 12</h2>
				<p>Mężczyzna l. 26 ból w klatce piersiowej.</p>
				<p>Co widzisz na poniższym zapisie? (Kliknij obrazek by powiększyć)</p>
				<a target="_blank" href="img_ekg/ekg12.png"><img src="img_ekg/button.png" alt="proszę poczekać chwilkę..." border="0" /></a>
			
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				
			<div id="identyfikator">		
				<input type="radio" name="nazwa" value="wartość" />A. Normalne ekg <br />
				<input type="radio" name="nazwa" value="wartość2" />B. Niespecyficzne zmiany ekg <br />
				<input type="radio" name="nazwa" value="wartość2" />C. Zawał tylnej ściany  <br />
				<input type="radio" name="nazwa" value="wartość2" />D. Przerost lewej komory <br />
			<br />
				
						
			</div><!-- end identyfikator-->
					
			</form>
			
		</article>
		
		
		
	</section>
	<div id="dashboard2">
			<p><b>Ostry zawał tylnej ściany serca</b></p>
			<p>Świadczą o tym obniżki ST w V<small>1</small> - V<small>3</small>. Mimo młodego wieku pacjent ten miał całkowicie niedrożną prawą tętnicę wieńcową.</p>
						
		</div>
	</div><!-- end Inner-->
	</div><!-- end wrapper-->
	
	
	
	<footer>
				&copy; www.pogotowieosw.pl&nbsp;&nbsp; | &nbsp;&nbsp;Design by Harry P.&nbsp;&nbsp; | &nbsp;&nbsp;
				<small>Admin: Harry P.</small>
	</footer>
				

</body>
</html>
