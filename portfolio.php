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
								<a href="https://www.youtube.com/watch?v=hnONC0HlsXs" data-largesrc="images/bartok.jpg" data-title="YouTube: Bartók Violin Concerto No. 2, Sz. 112 - I. Allegro non troppo" data-description="Posted on YouTube, I performed the first movement of Bartók Violin Concerto No. 2, Sz. 112 in the Bowdoin International Music Festival at the Studzinski Recital Hall on August 4, 2016.">
								<img class="img-responsive" src="images/bartok.jpg" alt="bartok">
								</a>
							</li>

							<li>
								<a href="https://www.youtube.com/watch?v=jCov4p9zZAo" data-largesrc="images/brahms.jpg" data-title="YouTube: Brahms Clarinet Quintet in B minor, Op. 115 - I. Allegro" data-description="Posted on YouTube, I performed the first movement of Brahms Clarinet Quintet in B minor, Op. 115 as first violin in the Bowdoin International Music Festival at the Studzinski Recital Hall on August 5, 2016.">
								<img class="img-responsive" src="images/brahms.jpg" alt="brahms">
								</a>
							</li>
								
							<li>
								<a href="http://urcsc170.org/mtam2/lab09/" data-largesrc="images/doraemon.jpg" data-title="Website: Doraemon Wiki" data-description="Worked as a team, Therese and I created a website that follows three webpage design principles of Z-pattern, F-pattern, and card layout.">
								<img class="img-responsive" src="images/doraemon.jpg" alt="doraemon">
								</a>
							</li>
								
							<li>
								<a href="http://urcsc170.org/mtam2/project2-team7/" data-largesrc="images/superhero.jpg" data-title="Website: SuperHero Central" data-description="Worked as Team 7, I helped modify the framework set by Team 1 in their Project 2, based on their RFP. We ultimately incorporated a video into the slideshow using HTML5 video tag.">
								<img class="img-responsive" src="images/superhero.jpg" alt="superhero">
								</a>
							</li>

							<li>
								<a href="http://urcsc170.org/examples/mtam2/project3/" data-largesrc="images/itceos.jpg" data-title="Website: IT CEOs" data-description="In Spring 2015, I created my first website that features global and local navigation bars, with my first touches on CSS and JavaScript.">
								<img class="img-responsive" src="images/itceos.jpg" alt="itceos">
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