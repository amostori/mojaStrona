<?php include('../bazy/baza_htm.php');?> 
	
	<section id="sec_edu">
	
	
		<article id="art1_edu">
				<h2>Przypadek 5</h2>
				<p>Mężczyzna l.55 - kołatanie serca.</p>
				<p>Co widzisz na poniższym zapisie? (Kliknij obrazek by powiększyć)</p>
				<a target="_blank" href="img_ekg/ekg5.png"><img src="img_ekg/button.png" alt="proszę poczekać chwilkę..." border="0" /></a>
			
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				
			<div id="identyfikator">		
				<input type="radio" name="nazwa" value="wartość" />A. Zespół WPW <br />
				<input type="radio" name="nazwa" value="wartość2" />B. Częstoskurcz <br />
				<input type="radio" name="nazwa" value="wartość2" />C. Zawał ściany dolnej <br />
				<input type="radio" name="nazwa" value="wartość2" />D. Zawał podwsierdziowy <br />
			<br />
				
						
			</div><!-- end identyfikator-->
					
			</form>
			
		</article>
		
		
	</section>
	<div id="dashboard2"><p><b>Ekg przedstawia zespół WPW.</b></p>
						<p>W odprowadzeniach przedsercowych widoczna jest typowa dla WPW fala delta. Ta sama fala w III i aVF często powoduje fałszywe rozpoznanie zawału ściany dolnej przez komputer aparatu EKG.</p>
						<p>Zwykle oprócz fali delta występuje skrócenie odcinka PQ i choć w tym konkretnym przypadku tego nie widać pacjent ten ma rozpoznan WPW.</p>
		</div>
		
	</div><!-- end Inner-->
	</div><!-- end wrapper-->
	
	
	
	<footer>
				&copy; www.pogotowieosw.pl&nbsp;&nbsp; | &nbsp;&nbsp;Design by Harry P.&nbsp;&nbsp; | &nbsp;&nbsp;
				<small>Admin: Harry P.</small>
	</footer>
				

</body>
</html>
