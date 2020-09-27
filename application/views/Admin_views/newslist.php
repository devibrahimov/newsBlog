<?php $this->load->view(Avw.'layouts/head');?>
 <!-- DataTables -->
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
              <span class="info-box-number"><?=count($news);?></span>
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
            <a href="<?=site_url('admin/newstrash')?>" class="info-box-icon bg-red"><i class="fa fa-trash-o"></i></a>

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
<!-- ---------------------------------------------------  -->

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
            <th><i class="fa fa-power-off" style="color: green;" > </i></th>
            <th>Xəbər Şəkili</th>
            <th>Xəbər Başlıq</th>
            <th>Xəbər Kateqoriyası</th>
            <th>Yazar</th>
            <th>Paylaşım tarixi</th>
            <th>Əməliyyatlar</th>
          </tr>

            <?php foreach($news as $n):?>
          <tr>
          <td>
              <?php if($n['active']=='0'){echo '<i class="fa fa-eye"style="color: red; "> </i>';}?>
              <?php if($n['active']=='1'){echo '<i class="fa fa-eye" style="color: green;"> </div>';}?>
              <br>
              <?=$n['hit']?>
          </td>
            <td><img src="<?=base_url('').small_image($n['image'])?>" width="100px"> 
           
          </td>
            <td> <?=$n['az_title']?></td>
            <td> <?=$cat_name[$n['catid'] ]?></td>
            <td style="background:#c3c3c3;"><?=$user_name[$n['created_by'] ]?></td>
            <td> <div style="border-bottom:1px solid black;"><span style="color: blue; ">Xəbər yazılma vaxtı<br > <?=$n['created']?></span></div>  <span  style="color: blue;">Xəbər paylashilma vaxtı<br> <?=$n['publish_up']?></span> </td>

            <td>
            <a href="<?=site_url('Admincontroller/editpage/').$n['id'];?>"><span class="btn  bg-blue">Dəyiş</span></a>
            <a href="<?=site_url('Admin_news/totrash/').$n['id'];?>"><span class="btn  bg-red"><i class="fa fa-trash"></i></span></a>
						<a href="<?=site_url('Admin/viewpage/').$n['id'];?>"><span class="btn  bg-navy"><i class="fa fa-eye"></i></span></a>
               <?php if($n['active']=='0'){?> <a href="<?=site_url('Admin_news/publish_news/').$n['id'];?>"><span class="btn  bg-green">Yayinla</span></a> <?php }?>

              <?php if($n['active']=='1'){?>  <a href="<?=site_url('Admin_news/unpublish/').$n['id'];?>"><span class="btn  bg-gray">Yayini durdur</span></a>  <?php }?>

            </td>
          </tr>
          <?php endforeach;?>

        </table>
      </div>
            <!-- /.box-body -->


              <!-- /.box-body -->
              <div class="box-footer clearfix">
                <?=$NewsPaginationLinks;?>

              </div>
            </div>
          </div>
          <!-- /.box -->
  </div>
</div>






    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view(Avw.'layouts/footer');?>
 <!-- DataTables -->

</body>
</html>
