
<?php $this->load->view(Svw.'layouts/head');?>
<link href="<?=base_url('assets/site/')?>bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet">

<?php $this->load->view(Svw.'layouts/header');?>

<style>
span{
	font-size:13px;
}
</style>
		<!-- signup-page -->
		<div class="signup-page">
			<div class="container">
				<div class="row">
					<!-- user-login -->
					<div class="col-sm-6 col-sm-offset-3">
						<div class="ragister-account">
							<h1 class="section-title title">Qeydiyyat Formu</h1>

							<form id="registation-form" name="registation-form" method="post" action="<?=site_url('qeydiyyat')?>">
								<div class="form-group">
									<label>Ad *</label>
									<input type="text" name="n" class="form-control" maxlength="30" required="required">
								</div>
								<div class="form-group">
									<label>Soyad *</label>
									<input type="text" name="l" class="form-control" maxlength="30" required="required">
								</div>
								<div class="form-group">
								<label>Doğum tarixiniz *</label>
									<div class='input-group date' id='datetimepicker1'  >

										<input type='text' class="form-control"  name="w" required="required"/>
											<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
											</span>
									</div>
								</div>

								<div class="form-group">
									<label>Email *</label>
									<input type="email" name="e" class="form-control" maxlength="30" required="required">
								</div>
								<div class="form-group">
									<label>Şifrə *</label>
									<input type="password" name="p" class="form-control" minlength="6" maxlength="30"  id="password" required="required">
									<span id="validate"> </span>
								</div>
								<div class="form-group">
									<label>Şifrəni təkrarlayın</label>
									<input type="password" name="confirm_password" class="form-control" id="confirm_password" required="required"><span id='message'></span>
								</div>
								<!-- checkbox -->

								<div class="submit-button text-center">
									<button type="submit" id="submit" disabled="true" class="btn btn-primary">Qeydiyyat</button>
								</div>
								<?php csrfToken() ;//from tools_hepler ?>
							</form>

							<div class="row  " style="margin-top:15px;">
									 <div class="col-md-6">
									 <div class="submit-button text-center">
									<button type="submit" class="btn btn-info btn-block">Facebook</button>
								</div>
									 </div>
									 <div class="col-md-6">
									 <div class="submit-button text-center">
									<button type="submit" class="btn btn-danger btn-block">Google</button>
								</div>
									 </div>
								 </div>
						</div>
					</div><!-- user-login -->
				</div><!-- row -->

			</div><!-- container -->
		</div><!-- signup-page -->
	</div><!-- main-wrapper -->

<?php $this->load->view(Svw.'layouts/footer');?>
<?php $this->load->view(Svw.'layouts/foot');?>

<script type="text/javascript" src="<?=base_url('assets/site/')?>bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script  type="text/javascript">
$('#password, #confirm_password').keyup( function () {
  if ($('#password').val() == $('#confirm_password').val()) {
	  $('#message').html('Şifrələr eynidir').css('color', 'green');
	$('#submit').prop('disabled',false);
	} else {
	$('#message').html('Şifrələr eyni deyil').css('color', 'red');
	$('#submit').prop('disabled',true);
  }

});
$(function () {
	$('#datetimepicker1').datepicker();
});
 </script>
