
<?php $this->load->view(Avw.'layouts/head');?>
<link rel="stylesheet" href="<?=base_url('assets/admin/')?>bower_components/select2/dist/css/select2.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="<?=base_url('assets/admin/')?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
</head>
<?php $this->load->view(Avw.'layouts/header');?>
<?php $userstate = $this->session->admin['state']?>
<?php $this->load->view(Avw."layouts/sidebar_$userstate");?>

    <!-- Main content -->


			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Yeni Kategoriya Əlave Et</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form  method="post" action="<?=site_url('Admin_Categories/addcategory');?>">
              <div class="box-body">
                <div class="row">
                  <div class="col-md-4">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Aze</label>
                  <input type="text" class="form-control" name="az_cat">
                </div>
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                  <label for="exampleInputPassword1">Rus</label>
                  <input type="text" class="form-control" name="ru_cat" >
                </div>
                  </div>
									<div class="col-md-2">
										<div class="form-group">
												<label>Alt kategoriyasi</label>
												<select class="form-control select2" style="width: 100%;" name="childcat">
												 	<option value="0">Alt kategoriya yoxdur</option>
													<option value="1">Alt kategoriya olacaq</option>
												</select>
											</div>
                  </div>

                  <div class="col-md-2">
                  <div class="form-group">
											<label>Üst kategoriyasi</label>
											<select class="form-control select2" style="width: 100%;" name="pid">
												<option>Üst kategoriya yoxdur</option>
											 <?php foreach($categories as $cat):?>
						             <option value="<?=$cat['id']?>"><?=$cat['az_name']?></option>

											 <?php endforeach; ?>
											</select>
										</div>
                  </div>

                </div>
			  </div>
        <?php csrfToken() ;//from tools_hepler ?>

              <!-- /.box-body -->
              <div class="box-footer">
               <button type="submit" class="btn btn-success">Yadda Saxla</button>
			  </div>

            </form>
          </div>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>

                <tr>
                  <th>Rendering engine</th>
                  <th>Parent Kategoriyasi</th>
                  <th></th>
                  <th>State</th>
                  <th>əməliiaytlar</th>
                </tr>

                </thead>
                <tbody>
                <?php foreach($categories as $cat):?>
                <tr>
                  <td><?=$cat['az_name']?></td>
                  <td> <?php if($cat['parent_id'] == 0 ){echo '--';}else{echo $cat_name[ $cat['parent_id'] ]; } ?> </td>
                  <td>Win 95+</td>
                  <td> <?php if($cat['state']==='1'){echo '<i class="fa fa-check  text-success"></i>';}
                  if($cat['state']==='-2'){echo '<i class="fa fa-trash  text-danger"></i>';}
                  if($cat['state']==='0'){echo '<i class="fa fa-warning  text-warning"></i>';}  ?></td>


                  <td> <a href="<?=site_url('Admin_Categories/editcategorypage/').$cat['id']?>"class="btn btn-sm btn-primary"><i class="fa fa-edit"> </i> Edit</a>
                   <a href="<?=site_url('Admin_Categories/trashcategory/').$cat['id']?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"> </i> Sil</a></td>
                </tr>
                <?php endforeach; ?>


                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

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
