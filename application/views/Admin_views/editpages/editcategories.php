
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
              <h3 class="box-title"><?=$category['az_name']?> Kategoriyasında Dəyişiklik Et</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form  method="post" action="<?=site_url('Admin_Categories/updatecategory/').$category['id'];?>">
              <div class="box-body">
                <div class="row">
                  <div class="col-md-4">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Aze</label>
                  <input type="text" class="form-control" name="az_cat" value="<?=$category['az_name']?>">
                </div>
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                  <label for="exampleInputPassword1">Rus</label>
                  <input type="text" class="form-control" name="ru_cat" value="<?=$category['ru_name']?>">
                </div>
                  </div>
									<div class="col-md-2">
										<div class="form-group">
												<label>Alt kategoriyasi</label>
												<select class="form-control select2" style="width: 100%;" name="childcat">
													<?php
													if($category['childcat']==1){echo '	<option value="1" Disable>Alt kategoriya olacaq</option>';}
													if($category['childcat']==0){echo '	<option value="0" Disable>Alt kategoriya yoxdur</option>';}
													 ?>
													 <?php
													 if($category['childcat']==1){echo '<option value="0">Alt kategoriya yoxdur</option>';}
													 if($category['childcat']==0){echo '<option value="1">Alt kategoriya olacaq</option>';}
														?>



												</select>
											</div>
                  </div>
                  <div class="col-md-2">
                  <div class="form-group">
					<label>Üst kategoriyasi</label>
					<select class="form-control select2" style="width: 100%;" name="pid">
          <option value="<?=$category['parent_id']?>" Disable><?php if($category['parent_id'] != 0){echo $cat_name[$category['parent_id']];}else{echo 'Əsas Kategoriyadır';}?></option>
          	<option value="0">Əsas kategoriya et</option>
					 <?php foreach($cats as $cat):?>
             <option value="<?=$cat['id']?>"><?=$cat['az_name']?></option>

					 <?php endforeach; ?>
					</select>
				</div>
                  </div>

                </div>
			  </div>
			  <?php $csrf = array( 'name' => $this->security->get_csrf_token_name(), 'hash' => $this->security->get_csrf_hash()  ); ?>
        	  <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
              <!-- /.box-body -->
              <div class="box-footer">
               <button type="submit" class="btn btn-success">Yadda Saxla</button>
			  </div>

            </form>
          </div>


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
  
    $('.select2').select2();

    $('#example2').DataTable()
});
</script>

</body>
</html>
