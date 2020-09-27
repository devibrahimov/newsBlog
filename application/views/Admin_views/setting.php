<?php $this->load->view(Avw.'layouts/head');?>

<?php $this->load->view(Avw.'layouts/header');?>
  <!-- Theme style -->
	<?php $userstate = $this->session->admin['state']?>
<?php $this->load->view(Avw."layouts/sidebar_$userstate");?>

    <!-- Main content -->
<div class="row">
<div class="col-md-6">

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Quick Example </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?=site_url('admincontroller/add_sitesetting/1')?>" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="email" value="<?=$data['email']?>" id="exampleInputEmail1" placeholder=" ">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Əlaqə nömrəsi</label>
                  <input type="text" class="form-control" name="phone" value="<?=$data['phone']?>"  id="exampleInputPassword1" placeholder=" ">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Əlaqə nömrəsi(Office)</label>
                  <input type="text" class="form-control" name="phoneOffice" value="<?=$data['phoneOffice']?>"  id="exampleInputPassword1" placeholder=" ">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Adress</label>
                  <input type="text" class="form-control" name="adress" value="<?=$data['adress']?>"  id="exampleInputEmail1" placeholder=" ">
                </div>
                <!-- <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                  <label for="exampleInputFile">Site Logo</label>
                  <input type="file" id="exampleInputFile" name="logo" >
                  <p class="help-block">Example block-level help text here.</p>
                </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputFile">Site Title icon</label>
                    <input type="file" id="exampleInputFile" name="icon" >
                  <p class="help-block">Example block-level help text here.</p>
                </div>
                    </div>
                </div> -->

                <hr>

                <div class="input-group">
                <div class="input-group-btn">
                  <button type="button" disable class="btn btn-info"><i class="fa fa-facebook"></i></button>
                </div>
                <!-- /btn-group -->
                <input type="text" class="form-control" name="facebook" value="<?=$data['facebook']?>"  placeholder="Social media Link adresini bura yazin ">
              </div>
              <br>


              <div class="input-group">
                <div class="input-group-btn">
                  <button type="button" disable class="btn btn-warning"><i class="fa fa-instagram"></i></button>
                </div>
                <!-- /btn-group -->
                <input type="text" class="form-control" name="instagram" value="<?=$data['instagram']?>"  placeholder="Social media Link adresini bura yazin">
              </div>
              <br>

              <div class="input-group">
                <div class="input-group-btn">
                  <button type="button" disable class="btn btn-danger"><i class="fa fa-youtube"></i></button>
                </div>
                <!-- /btn-group -->
                <input type="text" class="form-control" name="youtube"  value="<?=$data['youtube']?>" placeholder="Social media Link adresini bura yazin">
              </div>
              <br>

              <div class="input-group">
                <div class="input-group-btn">
                  <button type="button" disable class="btn btn-primary"><i class="fa fa-linkedin"></i></button>
                </div>
                <!-- /btn-group -->
                <input type="text" class="form-control" name="linkedin" value="<?=$data['linkedin']?>" placeholder="Social media Link adresini bura yazin">
              </div>
              <br>
              </div>
              <!-- /.box-body -->
              <?php csrfToken() ;//from tools_hepler ?>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

</div>
<div class="col-md-6">
<div class="row">
<div class="col-md-6">
    <div class="card card-default">

        <span class="card-img">
          <img src="<?=base_url().'assets/site/images/logo.png'?>" class="img-responsive">
        </span>
        <span class="card-body">
        <label for="exampleInputFile">Site Logo</label>
        <input type="file" id="exampleInputFile" name="logo" >
        <p class="help-block">Example block-level help text here.</p>
        </span>

    </div>
</div>
<div class="col-md-6">

    <div class="card card-default">

        <span class="card-img">
          <img src="<?=base_url().'assets/site/images/presets/preset1/logo-icon.png'?>" class="img-responsive">
        </span>
        <span class="card-body">
        <label for="exampleInputFile">Site icon</label>
                  <input type="file" id="exampleInputFile" name="icon" >
                  <p class="help-block">Example block-level help text here.</p>
        </span>

    </div>

</div>


</div>
<!-- end row -->
<div class="row">
<div class="col-md-12">
<div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">Text Emphasis</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <h4 class="text-muted">Email : <?=$data['email']?></h4>
              <h4 class="text-muted">Telefon : <?=$data['phone']?> </h4>
              <h4 class="text-muted">Telefon (Ofis) :  <?=$data['phoneOffice']?></h4>
              <h4 class=" text-muted">Adres :  <?=$data['adress']?></h4>
              <h4 class="text-aqua">Facebook :  <?=$data['facebook']?></h4>
              <h4 class="text-yellow">Instagram :  <?=$data['instagram']?></h4>
              <h4 class="text-red">Youtube :  <?=$data['youtube']?> </h4>
              <h4 class="text-light-blue">Linkedin :  <?=$data['linkedin']?></h4>
            </div>
            <!-- /.box-body -->
          </div>
</div>
</div>
</div>
</div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view(Avw.'layouts/footer');?>

</body>
</html>
