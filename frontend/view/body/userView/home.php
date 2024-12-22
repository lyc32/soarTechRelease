<?php 
	require '../config/LinkConfig.php';
?>

<div class="container mt-5">
	<div class="row mt-5 justify-content-center">
		<div class="row pb-4" data-aos="fade-up" data-aos-duration="1500" data-aos-delay = "1500" data-aos-easing="linear">
			<p class="title text-white text-center"><?php echo($homePageTitle)?></p>
		</div>
		<div class="horizontalLine mt-4 mb-4"></div>
		<div class="row pt-4" data-aos="fade-down" data-aos-duration="1500" data-aos-delay = "1500" data-aos-easing="linear">
			<p class="article text-white text-center"><?php echo($homePageArticle)?></p>
		</div>
	</div>
</div>

<div class="container mt-5">
	<div class="row pt-4" data-aos="flip-up" data-aos-duration="1500" data-aos-delay = "2600" data-aos-offset="40em">
		<p class="article text-white text-center">Follow us</p>
	</div>
	<div class="row mt-2 justify-content-center">
		<div class="col-sm-6">
			<div class="row justify-content-center">
				<div class="horizontalLine mt-4 mb-4"></div>
			</div>
			<div class="row justify-content-center">
				<div class="col-3">
					<div class="logoCard" data-aos="fade-up" data-aos-duration="1500" data-aos-delay = "2400" data-aos-offset="70em" data-aos-easing="linear">
						<a href="<?php echo($facebook);?>" target="_blank">
							<img class="logoImg" src="./static/facebookIcon.png">
						</a>
					</div>
				</div>
				
				<div class="col-3">
					<div class="logoCard" data-aos="fade-up" data-aos-duration="1500" data-aos-delay = "2600" data-aos-offset="70em" data-aos-easing="linear">
						<a href="<?php echo($instagram);?>" target="_blank">
							<img class="logoImg" src="./static/instagramIcon.png">
						</a>
					</div>
				</div>
				
				<div class="col-3 text-center">
					<div class="logoCard" data-aos="fade-up" data-aos-duration="1500" data-aos-delay = "2800" data-aos-offset="70em" data-aos-easing="linear">
						<a href="<?php echo($twitter);?>" target="_blank">
							<img class="logoImg" src="./static/twitterIcon.png">
						</a>
					</div>
				</div>
				
				<div class="col-3 text-center">
					<div class="logoCard" data-aos="fade-up" data-aos-duration="1500" data-aos-delay = "3000" data-aos-offset="70em" data-aos-easing="linear">
						<a href="<?php echo($whatsapp);?>" target="_blank">
							<img class="logoImg" src="./static/whatsappIcon.png">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>