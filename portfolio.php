<?php $parentTitle = "Ming Hang Tam"; $currentTitle = "Portfolio"; $separator = " - "; include "inc/top.inc";?>

		<?php include "inc/nav.inc";?>

		<section id="portfolio">
		
			<div class="container">

        		<div class="overlay-content-container">

					<h2>Portfolio</h2>

					<p>Click the thumbnails below to see descriptions and links.</p>

					<div class="og-container">

						<ul id="og-grid" class="og-grid">
								
							<li>
								<a href="lab09/" data-largesrc="images/doraemon.jpg" data-title="Doraemon Wiki" data-description="Worked as a team, Therese and I created a website that follows three webpage design principles of Z-pattern, F-pattern, and card layout.">
								<img class="img-responsive" src="images/doraemon.jpg" alt="doraemon">
								</a>
							</li>
								
							<li>
								<a href="project2-team7/" data-largesrc="images/superhero.jpg" data-title="SuperHero Central" data-description="Worked as Team 7, I helped modify the framework set by Team 1 in their Project 2, based on their RFP. We ultimately incorporated a video into the slideshow using HTML5 video tag.">
								<img class="img-responsive" src="images/superhero.jpg" alt="superhero">
								</a>
							</li>

							<li>
								<a href="project3_csc170/" data-largesrc="images/itceos.jpg" data-title="IT CEOs" data-description="In Spring 2015, I created my first website that features global and local navigation bars, with my first touches on CSS and JavaScript.">
								<img src="images/itceos.jpg" alt="itceos">
								</a>
							</li>
							
						</ul>

					</div>		

				</div><!--overlay-content-container-->

			</div><!--.container-->

		</section>

		

		<?php include "inc/footer.inc";?>
	
	<?php include "inc/scripts.inc";?>
	<script>
		$(function() {
			Grid.init();
		});
	</script>
	
	</body>

</html>