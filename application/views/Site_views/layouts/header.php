 <?php $lang = $this->session->userdata('lang')?>

 <div id="main-wrapper" class="homepage-four">
	 <header id="navigation">
		 <div class="navbar" role="banner">
			 <div id="menubar">
				 <div class="container-fluid">
					 <div class="navbar-header" style="margin-bottom:7px">
						 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							 <span class="sr-only">Toggle navigation</span>
							 <span class="icon-bar"></span>
							 <span class="icon-bar"></span>
							 <span class="icon-bar"></span>
						 </button>

						 <a class="navbar-brand" href="<?=site_url('')?>">
							 <img class="main-logo img-responsive" src="<?=base_url('assets/site/')?>images/logo.png" alt="logo">
						 </a>
					 </div>


					  <?php $this->load->view(Svw.'partials/navbar');?>
				 </div>
			 </div>
		 </div>
	 </header><!--/#navigation-->
