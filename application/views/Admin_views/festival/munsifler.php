<?php $userstate = $this->session->admin['state']?>
<?php $this->load->view(Avw.'layouts/head');?>

<?php $this->load->view(Avw.'layouts/header');?>
  <!-- Theme style -->

<?php $this->load->view(Avw."layouts/sidebar_$userstate");?>

    <!-- Main content -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <form action="<?=site_url('Admincontroller/addjuri')?>" method="post" enctype="multipart/form-data">
               
                    <?php csrfToken();?>
                    <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Different Height</h3>
            </div>
            <div class="box-body">

              <input class="form-control" type="text" name="name" placeholder="Ad Soyad">
              <br>
              <input class="form-control" type="text" name="job"  placeholder="İş,Vəzifəsi">
              <br>
              <input class="form-control" type="file" name="imagename"  placeholder="Şəkili">
              <br>
               <button type="submit" class="btn btn-success"> Yadda Saxla </button>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
                    
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
                  <th>#id</th>
                  <th>Kategoriya</th>
                  <th style="width: 40px">Label</th>
                </tr>
                    <?php foreach($juris as $juri): ?>
                    <tr>
                    <td><?=$juri['name']?></td>
                    <td><?=$juri['job']?></td> 
                    <td><a href="<?=site_url('Admincontroller/trash_juri/').$juri['id']?>"><span class="badge bg-red">Sil</span></a></td>
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
