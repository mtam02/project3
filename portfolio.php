<?php $parentTitle = "Ming Hang Tam"; $currentTitle = "Portfolio"; $separator = " - "; include "inc/top.inc";?>

		<?php include "inc/nav.inc";?>

		<section id="portfolio">
		
			<div class="container">

        		<div class="overlay-content-container">

					<h2>Portfolio</h2>

					<p>Click thumbnails below to see descriptions and links.</p>

					<div class="og-container">

						<ul id="og-grid" class="og-grid">
								
							<li>
								<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
								<img class="img-responsive" src="images/thumbs/1.jpg" alt="1">
								</a>
							</li>
								
							<li>
								<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
								<img src="images/thumbs/2.jpg" alt="2">
								</a>
							</li>

							<li>
								<a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
								<img src="images/thumbs/3.jpg" alt="3">
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