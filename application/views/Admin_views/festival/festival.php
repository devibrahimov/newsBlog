<?php $userstate = $this->session->admin['state']?>
<?php $this->load->view(Avw.'layouts/head');?>

<?php $this->load->view(Avw.'layouts/header');?>
  <!-- Theme style -->

<?php $this->load->view(Avw."layouts/sidebar_$userstate");?>

    <!-- Main content -->
<div class="container">
<div class="row">
    <div class="col-lg-4 col-xs-6">
      <div class="small-box bg-aqua">
          <div class="inner">
              <h3>Şirkət <br/> Kategoriyaları</h3>

              <p>Şirkət Kategoriyaları</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?=site_url('admin/festivaladdcategory')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>

          <div class="small-box bg-aqua">
          <div class="inner">
              <h3>Münsiflər  <br/> Heyyəti </h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?=site_url('admin/munsifler')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>

      </div>
       
      <div class="col-lg-8 col-xs-6">
        
            <div class="row">
            <?php foreach($categories as $cat): ?>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href="<?=site_url('admin/signedcompanies/').$cat['id'];?>">
            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span> 
            </a>
            <div class="info-box-content">
              <span class="info-box-text"><?=$cat['name']?></span>
              <span class="info-box-number"><?php countcompany($cat['id']);?> </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <?php endforeach;?>  

 
</div>
    </div>
   
</div>


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
