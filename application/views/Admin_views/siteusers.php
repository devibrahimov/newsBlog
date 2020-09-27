<?php $this->load->view(Avw.'layouts/head');?>

<?php $this->load->view(Avw.'layouts/header');?>
  <!-- Theme style -->
  <?php $userstate = $this->session->admin['state']?>
<?php $this->load->view(Avw."layouts/sidebar_$userstate");?>


<!-- Main content -->
  <div class="row">

    <div class="col-md-12">
    <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">İsdifadəçi Siyahısı</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            <tbody>

            <tr>
              <th style="width: 10px">#</th>
              <th>Adı</th>
              <th>Soy Adı</th>
              <th>Email adresi</th>
              <th>Qeydiyyat tarixi</th>
              <th  >Əməliyyatlar</th>
            </tr>

            <?php foreach( $users as $user):?>
            <tr>
              <td><?=$user['id']?></td>
              <td><?=$user['name']?></td>
              <td><?=$user['last_name']?></td>
              <td> <?=$user['email']?></span></td>
              <td> <?=$user['register_date']?></span></td>
              <td>
               <!-- <a href="<?=site_url('Admincontroller/editpage/').$user['id'];?>"><span class="btn  bg-blue">Dəyiş</span></a>
               <a href="<?=site_url('Admincontroller/deleteuser/').$user['id'];?>"><span class="btn  bg-red">Sil</span></a> -->
              </td>
            </tr>

              <?php endforeach;?>

          </tbody>
          </table>
        </div>
        <!-- /.box-body -->

      </div>
    </div>
  </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view(Avw.'layouts/footer');?>

</body>
</html>
