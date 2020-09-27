 
<?php $this->load->view(Avw.'layouts/head');?> 
<link rel="stylesheet" href="<?=base_url('assets/admin/')?>bower_components/select2/dist/css/select2.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="<?=base_url('assets/admin/')?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
</head>
<?php $this->load->view(Avw.'layouts/header');?>
<?php $userstate = $this->session->admin['state']?>
<?php $this->load->view(Avw."layouts/sidebar_$userstate");?>
		 <div class="row">

     <div class="col-md-4">
     <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Kategoriyalar</h3>
 
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table"> 
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Task</th> 
                  <th style="width: 40px">Label</th>
                </tr>
                <?php foreach($cats as $cat):?>
                <?php if($cat['athome']== 1 ){ continue; } ?>
                <tr>
                  <td>1.</td>
                  <td><?=$cat['az_name']?></td> 
                  <td><a href="<?= site_url('Admin_Categories/addathome/').$cat['id'];?>"><span class="badge bg-green">SEÇ</span></a></td>
                </tr>
                <?php endforeach; ?>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
     </div>
     <div class="col-md-4">
     <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Ana Səhifədə Görsənən Xəbər Kategoriyaları</h3>

               
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table"> 
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Task</th> 
                  <th style="width: 40px">Label</th>
                </tr>
                <?php foreach($catsathome as $cat):?>
                <tr>
                  <td>1.</td>
                  <td><?=$cat['az_name']?></td> 
                  <td><a href="<?= site_url('Admin_Categories/removefromhome/').$cat['id'];?>"><span class="badge bg-red">imtina</span></a></td>
                </tr>
                <?php endforeach; ?>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
       </div>
     </div>
    <!-- Main content -->  

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

	<?php $this->load->view(Avw.'layouts/footer');?> 
  <!-- Select2 -->
<script src="<?=base_url('assets/admin/')?>bower_components/select2/dist/js/select2.full.min.js"></script>
 <!-- DataTables -->
<script src="<?=base_url('assets/admin/')?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets/admin/')?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();

    $('#example2').DataTable()
});
</script>

</body>
</html>