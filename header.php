
<header>
	<nav class="navbar px-5 py-1 shadow  fixed-top navbar-expand-xl ">

		<!-- Brand -->
		<a class="navbar-brand" href="#">Logo</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">پیگیری</span>
		</button>
		<!-- Links -->
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto">

				<li class="nav-item">
					<div class="dropdown">
						<button class="btn btn-default dropdown-toggle" type="button"
							id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="true"><?php include 'images/airplane.php';?>
								<span class="mx-1">هواپیما</span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li><a class="dropdown-item" href="#">پرواز داخلی</a></li>
							<li><a class="dropdown-item" href="#">پرواز خارجی</a></li>

						</ul>
					</div>

				</li>
				<!-- 
				<li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
					href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false"><?php // include 'images/airplane.php';?> <span
						class="mx-1">هواپیما</span> </a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">پرواز داخلی</a> <a
							class="dropdown-item" href="#">پرواز خارجی</a>
					</div></li>
                -->
				<li class="nav-item mx-3 pt-2 "><div class="clearfix">
							<?php include 'images/train.php';?>
							<span class="mx-3">قطار</span>
					</div></li>
				<li class="nav-item mx-3 pt-2 "><div class="clearfix">
							<?php include 'images/bus.php';?>
							<span class="mx-3">اتوبوس</span>
					</div></li>
				<li class="nav-item  mx-3 pt-2 "><div class="clearfix">
							<?php include 'images/tour.php';?>
							<span class="mx-3">تور</span>
					</div></li>
				<li class="nav-item  mx-3 pt-2 "><div class="clearfix">
							<?php include 'images/hotel.php';?>
							<span class="mx-3">هتل</span>
					</div></li>

			</ul>
			<ul class="navbar-nav mr-auto">

				<li class="nav-item pt-1 ">
					<button class="btn btn-default " type="button">
						<i class="fa fa-user mx-1"></i>پیگیری خرید
					</button>
				</li>
				<li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
					href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false">ورود و ثبت نام <i
						class="fa fa-user"></i>
				</a>
					<div class="dropdown-menu" style="padding: 0px;"
						aria-labelledby="navbarDropdown">
						<div class="" href="#">
							<div style="display: none" id="login-alert"
								class="alert alert-danger col-sm-12"></div>

							<form id="loginform" class="form-horizontal w-100 px-4 py-4"
								role="form">

								<div style="margin-bottom: 25px" class="input-group">
									<span class="input-group-addon"><i
										class="glyphicon glyphicon-user"></i></span> <input
										id="login-username" type="text" class="form-control"
										name="username" value=""
										placeholder="نام کاربری یا پست الکترونیک">
								</div>

								<div style="margin-bottom: 25px" class="input-group">
									<span class="input-group-addon"><i
										class="glyphicon glyphicon-lock"></i></span> <input
										id="login-password" type="password" class="form-control"
										name="password" placeholder="رمزورود">
								</div>



								<div class="input-group">
									<div class="checkbox">
										<label> <input id="login-remember" type="checkbox"
											name="remember" value="1"> مرا به خاطر بسپار
										</label>
									</div>
								</div>


								<div style="margin-top: 10px" class="form-group">
									<!-- Button -->

									<div class="col-sm-12 controls">
										<a id="btn-login" href="#" class="btn btn-success">Login </a>
										<a id="btn-fblogin" href="#" class="btn btn-primary">Login
											with Facebook</a>

									</div>
								</div>


								<div class="form-group">
									<div class="col-md-12 control">
										<div
											style="border-top: 1px solid #888; padding-top: 15px; font-size: 85%">
											Don't have an account! <a href="#"
												onClick="$('#loginbox').hide(); $('#signupbox').show()">
												Sign Up Here </a>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div></li>
				<li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
					href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false">۰۲۱ - ۴۳۹۰۰۰۰۰ <i
						class="fa fa-phone"></i>
				</a>
					<div class="dropdown-menu" style="padding: 0px;"
						aria-labelledby="navbarDropdown">
						<div class="" href="#">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#">Home</a></li>
								<li><a href="#">Menu 1</a></li>
								<li><a href="#">Menu 2</a></li>
								<li><a href="#">Menu 3</a></li>
							</ul>
						</div>
					</div></li>

			</ul>
		</div>
	</nav>
</header>