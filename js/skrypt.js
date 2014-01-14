$(document).ready(function(){



	$('#odp').hover(
														
															function(){
																$('#dashboard').stop().animate(
																
																	{
																		right: '100px'
																	},
																	500,
																	'easeInSine'
																
																);//end animate
															},
															function(){
																$('#dashboard').stop().animate(
																
																	{
																		right: '-1000px'
																		
																	},
																	1500,
																	'easeOutBounce'
																	
																
																);//end animate
															}
														
														);//end hover
														
}); //end of ready
	