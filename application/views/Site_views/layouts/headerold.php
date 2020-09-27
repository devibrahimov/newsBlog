<?php $lang = $this->session->userdata('lang')?>
<body>
	<div id="main-wrapper" class="homepage">
		<header id="navigation">
			<div class="navbar" role="banner">
				<div class="container">
					<a class="secondary-logo" href="<?=site_url('')?>">
						<img class="img-responsive" src="<?=base_url('assets/site/')?>images/logo.png" title="Chip.az - logo" alt="Chip.az - logo">
					</a>
				<!-- navbar -->
				</div>
				<div class="topbar">
					<div class="container">
						<div id="topbar" class="navbar-header">
							<a class="navbar-brand" href="<?=site_url('')?>">
								<img class="main-logo img-responsive" src="<?=base_url('assets/site/')?>images/logo.png" title="Chip.az - logo"  alt="Chip.az - logo">
							</a>

							<?php $this->load->view(Svw.'partials/navbar');?>

							<div id="topbar-right">
								<!-- <div class="dropdown language-dropdown">
									<a data-toggle="dropdown" href="#"><span class="change-text"><?php if($lang=='ru'){ echo  'RU' ;}else{echo 'AZ';} ?></span> <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu language-change">
										<li><a href="<?=site_url('site/changelang/az');?>">AZ</a></li>
										<li><a href="<?=site_url('site/changelang/ru');?>">RU</a></li>
									</ul>
								</div> -->

						<?php $this->load->view(Svw.'partials/seach&login');?>


								<div id="date-time"></div>
								<div id="weather"></div>
							</div>
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
					</div>
				</div>
				<!-- <div id="menubar" class="container"> -->
					<!-- navbar burada idi -->
					<!-- seachlogin burada idi -->
				<!-- </div> -->
			</div>
		</header><!--/#navigation-->
