<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="row justify-content-center pt-4" >
			<div class="col-sm-4">
				<div class="card loginCard text-white article" data-aos="fade-down" data-aos-duration="1500" data-aos-easing="linear">
					<div class="row justify-content-center">
						<img class="loginLogo" src = './static/logo.ico'>
					</div>
					<div class="row mt-2 justify-content-center">
						<div class="col-sm-10">
							Employee Name
							<input id='username' class="form-control inputFont" type="text" value="">
						</div>
					</div>
					
					<div class="row mt-3 justify-content-center">
						<div class="col-sm-10">
							Password
							<input id='password' class="form-control inputFont" type="password" value="">
						</div>
					</div>
					<div class="row mt-4 mb-4 justify-content-center">
						<div class="col-sm-5 text-end">
							<button class="btn btn-lg btn-outline-light article py-0 px-5" onclick="login()">Login</button>
						</div>
						<div class="col-sm-5 text-start">
							<button class="btn btn-lg btn-outline-light article py-0 px-5" onclick="resetLoginView()">Reset</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
