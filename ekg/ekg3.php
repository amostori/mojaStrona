<?php include('../bazy/baza_htm.php');?> 
	
	<section id="sec_edu">
	
	
		<article id="art1_edu">
				<h2>Przypadek 3</h2>
				<p>Pacjent l.60 z bólem w klatce piersiowej.</p>
				<p>Co widzisz na poniższym zapisie? (Kliknij obrazek by powiększyć)</p>
				<a target="_blank" href="img_ekg/ekg3.png"><img src="img_ekg/button.png" alt="proszę poczekać chwilkę..." border="0" /></a>
			
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				
			<div id="identyfikator">		
				<input type="radio" name="nazwa" value="wartość" />A. Lewogram patologiczny <br />
				<input type="radio" name="nazwa" value="wartość2" />B. Zespół WPW <br />
				<input type="radio" name="nazwa" value="wartość2" />C. Zapis bez patologicznych zmian <br />
				<input type="radio" name="nazwa" value="wartość2" />D. Zawał serca <br />
			<br />
			
					
			</div><!-- end identyfikator-->
					
			</form>
			
		</article>
		
		
		
	</section>
	<div id="dashboard2">
			<p><b>Ostry zawał ściany dolnej.</b></p>
						<p>Co prawda zapis ten nie spełnia warunków dla STEMI czyli uniesienie ST powyżej 1 mm conajmniej w dwóch sąsiadujących odprowadzeniach kończynowych, ale obecna jest bradykardia (często w zawale ściany dolnej), spłaszczenie odcinka ST w III i aVF a w aVL ST jest skośny w dół (to zawsze powinno wzmagać w tobie czujność bo wg niektóych autorów to właśnie skośny w dół odcinek ST w aVL jest często pierwszym objawem zawału ściany dolnej). Ponadto w odprowadzeniu V<small>2</small> jest lekkie spłaszczenie ST a załamek R nieco wyższy niż można się spodziewać. </p>
						<p>Takie nagromadzenie drobnych nieprawidłowości, które występując pojedyńczo nie muszą być znaczące, powinno nasunąć podejrzenie, że mamy jednak do czynienia z zawałem serca. I rzeczywiście. Pacjent ten miał 100% niedrożną prawą tętnicę wieńcową.</p>
		</div>
	</div><!-- end Inner-->
	</div><!-- end wrapper-->
	
	
	
	<footer>
				&copy; www.pogotowieosw.pl&nbsp;&nbsp; | &nbsp;&nbsp;Design by Harry P.&nbsp;&nbsp; | &nbsp;&nbsp;
				<small>Admin: Harry P.</small>
	</footer>
				

</body>
</html>
