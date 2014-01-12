<?php include('../bazy/baza_htm.php');?> 
	
	<section id="sec_edu">
	
	
		<article id="art1_edu">
				<h2>Przypadek 10</h2>
				<p>Kobieta l. 63 ból w klatce piersiowej.</p>
				<p>Co widzisz na poniższym zapisie? (Kliknij obrazek by powiększyć)</p>
				<a target="_blank" href="img_ekg/ekg10.png"><img src="img_ekg/button.png" alt="proszę poczekać chwilkę..." border="0" /></a>
			
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				
			<div id="identyfikator">		
				<input type="radio" name="nazwa" value="wartość" />A. Zawał ściany dolnej <br />
				<input type="radio" name="nazwa" value="wartość2" />B. Przerost lewej komory <br />
				<input type="radio" name="nazwa" value="wartość2" />C. Zapalenie osierdzia  <br />
				<input type="radio" name="nazwa" value="wartość2" />D. Zespół wczesnej repolaryzacji <br />
			<br />
				
						
			</div><!-- end identyfikator-->
					
			</form>
			
		</article>
		
		
	</section>		<div id="dashboard2">
			<p><b>Zawał ściany dolnej.</b></p>
						<p>Jeśli znajdziesz uniesienia ST szukaj obniżek. Typowo w zawale obecne są przeciwwstawne obniżki.</p>
						<p>W tym przykładzie wyraźnie widać skośne w dół obniżki ST w aVL - często pierwszy objaw zawału ściany dolnej - oraz bradykardia - również często występująca przy tej lokalizacji STEMI.</p>
		</div>

	</div><!-- end Inner-->
	</div><!-- end wrapper-->
	
	
	
	<footer>
				&copy; www.pogotowieosw.pl&nbsp;&nbsp; | &nbsp;&nbsp;Design by Harry P.&nbsp;&nbsp; | &nbsp;&nbsp;
				<small>Admin: Harry P.</small>
	</footer>
				

</body>
</html>
