<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="row pb-4" data-aos="fade-up" data-aos-duration="1500" data-aos-delay = "1500" data-aos-easing="linear">
			<p class="title text-white text-center"><?php echo($contactUs)?></p>
		</div>
		<div class="horizontalLine mt-4 mb-4"></div>
		<div class="row justify-content-center pt-4" data-aos="fade-down" data-aos-duration="1500" data-aos-delay = "1500" data-aos-easing="linear">
			<div class="col-sm-5 text-white article">
				<div class="mt-2">
					<span class="mt-0 pt-0">
						<svg width="1.8rem" height="1.8rem" fill="currentColor" viewBox="0 0 200 200">
							<path d="M109.336 104.331a17.481 17.481 0 0 1-18.671 0L20.222 59.784H20v78.442c0 9.54 7.784 17.273 17.386 17.273h125.228c9.602 0 17.386-7.733 17.386-17.273V59.784h-.222l-70.442 44.547z"/>
							<path d="M22.578 44.5l.215.125 68.173 43.111a16.917 16.917 0 0 0 18.069 0l68.173-43.111.215-.125H22.578z"/>
						</svg>
					</span>
					<span class="mt-3"><?php echo($email)?></span>
				</div>
				
				<div class="mt-2">
					<span class="mt-0 pt-0">
						<svg width="1.8rem" height="1.8rem" fill="currentColor" viewBox="0 0 200 200">
						<path d="M174.754 137.015l-16.878-17.024c-7.055-7.116-18.563-7.186-25.705-.156l-.283.278-.803.794c-5.874 5.808-15.363 5.761-21.178-.105L78.719 89.344c-5.798-5.849-5.75-15.271.108-21.061l.001.001.283-.279c7.142-7.03 7.211-18.499.156-25.615L62.404 25.383c-7.061-7.122-18.581-7.185-25.72-.14l-.001-.001-11.238 11.11c-4.496 4.445-6.458 10.916-4.936 17.042 14.422 58.077 66.325 112.081 124.426 126.073 6.239 1.503 12.817-.21 17.377-4.711l12.003-11.848.284-.279c7.14-7.03 7.21-18.498.155-25.614z"/>
						</svg>
					</span>
					<span class="mt-3"><?php echo($phone)?></span>
				</div>
				<div class="row mt-4">
					<div class="col-sm-6">
						First Name
						<input id='firstName' class="form-control text-secondary inputFont" type="text" value="">
					</div>
					<div class="col-sm-6">
						Last Name
						<input id='lastName' class="form-control text-secondary inputFont" type="text" value="">
					</div>
				</div>
				
				<div class="row article mt-3">
					<div class="col-sm-10">
						Email*
						<input id='email' class="form-control text-secondary inputFont" type="text" value="">
					</div>
				</div>
				
				<div class="row mt-3">
					<div class="col-sm-12">
						Message*
						<textarea class= "form-control inputFont" id="message" rows="3"></textarea>
					</div>
				</div>
				<div class="row mt-3" >
					<div class="col-sm-9" id="errorMessage">
						
					</div>
					<div class="col-sm-3">
						<button class="btn btn-lg btn-outline-light article py-0 px-3" onclick="sendMessage()">submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
