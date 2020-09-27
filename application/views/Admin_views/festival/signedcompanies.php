<?php $userstate = $this->session->admin['state']?>
<?php $this->load->view(Avw.'layouts/head');?>

<?php $this->load->view(Avw.'layouts/header');?>
  <!-- Theme style -->

<?php $this->load->view(Avw."layouts/sidebar_$userstate");?>

    <!-- Main content -->
<div class="container">
<div class="row">

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Messages</span>
              <span class="info-box-number">1,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
 
       
</div>
   
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Bordered Table</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body" id="newsContentTable" style="overflow-x: auto;">
        <table class="table table-bordered">
          <tr>
            <th>Logo</th>
            <th>Şirkətin adı</th>
            <th>Kategoriyası</th>
            <th>Telefon,Email</th>
            <th>Məsul Şəxs</th> 
            <th>Məsul Şəxs</th> 
          </tr>

            <?php foreach($companies as $c):?>
          <tr>  
            <td>
            <img src="http://mukafat.chip.az/assets/uploads/logos/<?=$c['logo']?>" width="100px;" alt="">
            </td>
            <td><?=$c['name']?></td>
            <td><?=$companycatName[$c['company_catid']];?></td>
            <td><?=$c['phone']?> , <?=$c['email']?></td>
            <td><?=$c['person']?></td>
            <td>
            <a href="<?=site_url('admin/singlecompany/').$c['id'];?>" class="btn btn-info"> <i class="fa fa-eye"></i> </a>
            </td>
          </tr>
          <?php endforeach;?>
        </table>
      </div>
            <!-- /.box-body -->


              <!-- /.box-body -->
              <div class="box-footer clearfix">
                 

              </div>
            </div>
          </div>
          <!-- /.box -->
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
