<?php $userstate = $this->session->admin['state']?>
<?php $this->load->view(Avw.'layouts/head');?>

<?php $this->load->view(Avw.'layouts/header');?>
  <!-- Theme style -->

<?php $this->load->view(Avw."layouts/sidebar_$userstate");?>

    <!-- Main content -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <form action="<?=site_url('Admin_Categories/addcompanycategory')?>" method="post">
                <div class="input-group input-group-sm">
                    <?php csrfToken();?>
                        <input type="text" name="categoryname" class="form-control" >
                            <span class="input-group-btn">
                            <button type="submit"  class="btn btn-info btn-flat">yadda saxla!</button>
                        </span>
                   
                    </div>
                    </form>
                </div> 
             <div class="col-md-6">
             <div class="box">
            <div class="box-header">
              <h3 class="box-title">Kategoriyalar</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tr>
                  <th ># id</th>
                  <th>Kategoriya</th>
                  <th style="width: 40px">Label</th>
                </tr>
                    <?php foreach($categories as $cat): ?>
                    <tr>
                    <td><?=$cat['id']?></td>
                    <td><?=$cat['name']?></td>
                    
                    <td><a href="<?=site_url('Admin_Categories/trash_company_categories/').$cat['id']?>"><span class="badge bg-red">Sil</span></a></td>
                    </tr>
                    <?php endforeach;?>     
              </table>
            </div>
            <!-- /.box-body -->
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
