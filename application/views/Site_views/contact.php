
<?php $this->load->view(Svw.'layouts/head');?>

<?php $this->load->view(Svw.'layouts/header');?>


<div class="container">
			<div class="page-breadcrumbs">
				<h1 class="section-title title">Bizimlə Əlaqə</h1>
			</div>
			<div class="row">
				<div class="col-sm-8 col-md-9">
					<div class="contact-us">
						<div class="map-section">
							<div ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d759.5368743417216!2d49.88135982922262!3d40.39361502011009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDIzJzM3LjAiTiA0OcKwNTInNTQuOSJF!5e0!3m2!1sen!2s!4v1558608905429!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
						</div>
						<div class="contact-info">
	<br>
							<div class="row  "style="background-color:white; padding-left:10px;">
								<div class="col-md-4 " >
									<h2>Baş Ofis</h2>
									<address> <?=$contact['adress']?> </address>
								</div >
										<div class="col-md-4" >
											<h2>E-mail</h2>
											<address>
											 <a href="#"><?=$contact['email']?></a></span>
											</address>
										</div>
								<div  class="col-md-4" >
									<h2>Telefon</h2>
									<address>
									<span><strong>MOB:</strong> <?=$contact['phone']?></span><br>
								  <span><strong>OFIS:</strong>  <?=$contact['phoneOffice']?></span>
									</address>
								</div >
							</div>
						</div>
						<br>
						<div class="message-box">
							<h3 class="section-title title">Ziyarətçi formu</h3>
							<form id="comment-form" name="comment-form" action="<?=site_url('Email/send')?>" method="post">
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<label for="name">Ad Soyad</label>
											<input type="text" name="username" class="form-control" required="required">
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="email" name="useremail" class="form-control" required="required">
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label for="subject">Başlıq</label>
											<input type="subject" name="subject" class="form-control">
										</div>
									</div>
									<?php csrfToken();?>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="comment" >Mesaj</label>
											<textarea name="comment" id="comment" required="required" class="form-control" rows="5"></textarea>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">GÖNDƏR </button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div><!-- contact-us -->
				</div>
				<div class="col-md-3 col-sm-4">
					<?php $this->load->view(Svw.'partials/banner');?>
 
				</div>
			</div><!-- row -->
		</div><!--/.container-->
	</div><!--/#main-wrapper-->

<?php $this->load->view(Svw.'layouts/footer');?>
	<?php $this->load->view(Svw.'layouts/foot');?>
