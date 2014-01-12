<?php include('../bazy/baza_htm.php');?> 
	
	<section id="sec_edu">
	
	
		<article id="art1_edu">
				<h2>Przypadek 7</h2>
				<p>Mężczyzna l.53 - ból w klatce piersiowej.</p>
				<p>Co widzisz na poniższym zapisie? (Kliknij obrazek by powiększyć)</p>
				<a target="_blank" href="img_ekg/ekg7.png"><img src="img_ekg/button.png" alt="proszę poczekać chwilkę..." border="0" /></a>
			
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				
			<div id="identyfikator">		
				<input type="radio" name="nazwa" value="wartość" />A. Zapalenie osierdzia <br />
				<input type="radio" name="nazwa" value="wartość2" />B. Przerost lewej komory <br />
				<input type="radio" name="nazwa" value="wartość2" />C. Zawał ściany dolnej <br />
				<input type="radio" name="nazwa" value="wartość2" />D. Zawał przedniej ściany <br />
			<br />
				
			</div><!-- end identyfikator-->
					
			</form>
			
		</article>
		
		
		
	</section>
	<div id="dashboard2">
			<p><b>Ostry zawał ściany przedniej.</b></p>
						<p>Kiedy widzisz  uniesienia odcinka ST szukaj obniżek w odprowadzeniach przeciwwległych, w tym przypadku nad ścianą dolną. Zwykle towarzyszą one uniesieniom ST w zawale serca.</p>
						<p>Zwróć uwagę na wygląd załamków T w odprowadzeniach przedsercowych. Wysokie, symetryczne, charakterystyczne dla wczesnej fazy zawału, mogą być pierwszym objawem w EKG. </p>
		</div>
	</div><!-- end Inner-->
	</div><!-- end wrapper-->
	
	
	
	<footer>
				&copy; www.pogotowieosw.pl&nbsp;&nbsp; | &nbsp;&nbsp;Design by Harry P.&nbsp;&nbsp; | &nbsp;&nbsp;
				<small>Admin: Harry P.</small>
	</footer>
				

</body>
</html>
