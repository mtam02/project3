<?php $parentTitle = "Ming Hang Tam"; $currentTitle = "Contact"; $separator = " - "; $currentBody = "body_blue"; include "inc/top.inc";?>

		<?php include "inc/nav.inc";?>

		<section id="contact">

			<div class="container">

				<div class="overlay-content-container">

					<h2>Contact</h2>

					<form method="post" action="database-write.php" name="myForm" onsubmit="return(validate());">

						<div>
							<label for="name">Name:</label>
							<input type="text" name="name" id="name" required>
						</div>

						<div>
							<label for="email">Email:</label>
							<input type="text" name="email" id="email" required onchange="return(validateEmail());">
						</div>

						<div>
							<label for="phone">Phone:</label>
							<input type="text" name="phone" id="phone" required onchange="FW.Phone.Validate(this);">
						</div>

						<div>
							<label for="message">Message:</label>
							<textarea name="message" id="message"></textarea>
						</div>

						<input type="submit" value="Send">

					</form>

				</div><!--overlay-content-container-->

			</div><!--.container-->

		</section>
			
		<?php include "inc/footer.inc";?>

	
	
	<?php include "inc/scripts.inc";?>
	<script src="js/basic_validate.js"></script>
	<script src="js/email_validate.js"></script>
	<script src="js/phone_validate.js"></script>
	
	</body>

</html>