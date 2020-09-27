<?php $this->load->view(Avw.'layouts/head');?>

<?php $this->load->view(Avw.'layouts/header');?>
  <!-- Theme style -->
	<?php $userstate = $this->session->admin['state']?>
<?php $this->load->view(Avw."layouts/sidebar_$userstate");?>
<div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-newspaper-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">CƏMİ Xəbər sayı</span>
            <span class="info-box-number"><?=$news;?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-globe"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Yayımlanan Xəbər sayı</span>
            <span class="info-box-number"><?=$share_count?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Uploads</span>
            <span class="info-box-number">13,648</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span href="<?=site_url('admin/newstrash')?>" class="info-box-icon bg-red"><i class="fa fa-trash-o"></i></span>

          <div class="info-box-content">

            <spanclass="info-box-text">ZİBİL Qabı</span>
            <span class="info-box-number"><?=$trash_count?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- Main content -->


      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view(Avw.'layouts/footer');?>

</body>
</html>
