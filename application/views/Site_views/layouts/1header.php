<?php $lang = $this->session->userdata('lang')?>
<body>

	<div id="main-wrapper" class="homepage-five">

		<div class="topbar container">
<div class="container">
				<div id="date-time"></div>
				<div id="topbar-right">
					<!-- <div class="dropdown language-dropdown">
						<a data-toggle="dropdown" href="#"><span class="change-text">En</span> <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu language-change">
							<li><a href="#">EN</a></li>
							<li><a href="#">FR</a></li>
							<li><a href="#">GR</a></li>
							<li><a href="#">ES</a></li>
						</ul>
					</div> -->


					<!-- <div class="searchNlogin">
						<ul>
							<li class="search-icon"><i class="fa fa-search"></i></li>
							<li class="dropdown user-panel"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i></a>
								<div class="dropdown-menu top-user-section">
									<div class="top-user-form">
										<form id="top-login" role="form">
											<div class="input-group" id="top-login-username">
												<span class="input-group-addon"><img src="images/others/user-icon.png" alt="" /></span>
												<input type="text" class="form-control" placeholder="Username" required="">
											</div>
											<div class="input-group" id="top-login-password">
												<span class="input-group-addon"><img src="images/others/password-icon.png" alt="" /></span>
												<input type="password" class="form-control" placeholder="Password" required="">
											</div>
											<div>
												<p class="reset-user">Forgot <a href="#">Password/Username?</a></p>
												<button class="btn btn-danger" type="submit">Login</button>
											</div>
										</form>
									</div>
									<div class="create-account">
										<a href="#">Create a New Account</a>
									</div>
								</div>
							</li>
						</ul>
						<div class="search">
							<form role="form">
								<input type="text" class="search-form" autocomplete="off" placeholder="Type & Press Enter">
							</form>
						</div>
					</div> -->
				</div>
			</div>
		</div>
		<header id="navigation"  class="container">
			<div class="navbar" role="banner">

				<div id="menubar">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<a class="navbar-brand" href="<?=site_url('')?>">
									<img class="img-responsive" src="<?=base_url('assets/site/')?>images/logo.png" title="Chip.az - logo" alt="Chip.az - logo"
							</a>
						</div>
					<?php $this->load->view(Svw.'partials/navbar');?>

					<?php $this->load->view(Svw.'partials/seach&login');?>
					</div>
				</div>
			</div>

		</header><!--/#navigation-->
