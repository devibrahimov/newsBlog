<?php $lang = $this->session->userdata('lang')?>
<style media="screen">
.social-icons a i {
	font-size: 11px;
	height: 20px;
	width: 20px;
	line-height: 19px;
}
</style>
<body>
	<div id="main-wrapper" class="homepage-five">
		<div class="topbar">
			<div class="container">
				<div id="date-time">
					<ul class="list-inline social-icons">
						<li><a href="<?=$contact['facebook']?>"  target="_blank" ><i class="fa fa-facebook"></i></a></li>
						<li><a href="<?=$contact['instagram']?>"  target="_blank" ><i class="fa fa-instagram"></i></a></li>
						<li><a href="<?=$contact['youtube']?>"  target="_blank" ><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>
				<div id="topbar-right">
<style media="screen">
.list-inline {
	padding-bottom: 7px;
}
</style>
					<div id="weather"></div>
					<ul class="list-inline social-icons">
						<li><a href="<?=site_url('');?>">Ana Səhifə</a></li>
						<li><a href="<?=site_url('haqqimizda');?>">Haqqımızda</a></li>
						<li><a href="<?=site_url('chipabunelik');?>">Chip abunə</a></li>
						<li><a href="<?=site_url('elaqe');?>">Bizimlə əlaqə</a></li>
					</ul>
			 		<?php // $this->load->view(Svw.'partials/seach&login');?>
					</div>
			</div>
		</div>
		<header id="navigation">
			<div class="navbar" role="banner">

				<div id="menubar">
					<div class="container">
						<div class="navbar-header">
							<a class="navbar-brand" href="<?=site_url('');?>">
								<img class="main-logo img-responsive" src="<?=base_url('assets/site/')?>images/logo.png" alt="logo">
							</a>
						</div>

							<?php $this->load->view(Svw.'partials/navbar');?>
					</div>
				</div>
			</div>
		</header><!--/#navigation-->
