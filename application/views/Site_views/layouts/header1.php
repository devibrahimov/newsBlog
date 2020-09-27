<?php $lang = $this->session->userdata('lang')?>
<body>
		<div id="main-wrapper" class="homepage-five  ">
			<div class="topbar">
				<div class="container">
					<div id="date-time">
						<ul class="nav navbar">
							<!-- <li><a href="<?=site_url('');?>">ANA SƏHİFƏ</a></li>
							<li><a href="<?=site_url('haqqimizda');?>">HAQQIMIZDA</a></li>

							<li><a href="<?=site_url('chipabunelik');?>">CHİP Abunə</a></li>
							<li><a href="<?=site_url('elaqe');?>">BİZİMLƏ Əlaqə</a></li> -->
								<!-- <li><a href="<?=site_url('');?>">Məhsullar</a></li> -->
						</ul>
					</div>
					<div id="topbar-right">
						<!-- <div class="dropdown language-dropdown">
							<a data-toggle="dropdown" href="#"><span class="change-text"><?php if($lang=='ru'){ echo  'RU' ;}else{echo 'AZ';} ?></span> <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu language-change">
								<li><a href="<?=site_url('site/changelang/az');?>">AZ</a></li>
								<li><a href="<?=site_url('site/changelang/ru');?>">RU</a></li>
							</ul>
						</div> -->
						<div id="weather"></div>
								<?php $this->load->view(Svw.'partials/seach&login');?>
					</div>
				</div>
			</div>
			<header id="navigation">
				<div class="navbar  " role="banner">

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
									<img class="main-logo img-responsive" src="<?=base_url('assets/site/')?>images/logo.png" title="Chip.az - logo" alt="logo Azerbaijan chip.az" >
								</a>
							</div>
								<?php $this->load->view(Svw.'partials/navbar');?>
						</div>
					</div>
				</div>
			</header><!--/#navigation-->
