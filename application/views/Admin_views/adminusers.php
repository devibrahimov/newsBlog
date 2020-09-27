<?php $this->load->view(Avw.'layouts/head');?>

<?php $this->load->view(Avw.'layouts/header');?>
  <!-- Theme style -->
  <?php $userstate = $this->session->admin['state']?>
<?php $this->load->view(Avw."layouts/sidebar_$userstate");?>


    <!-- Main content -->
      <div class="row">
        <div class="col-md-5">
        <form action="<?=site_url('Admincontroller/add_adminuser');?>" method="post">
        <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Yeni Admin </h3>
              <input type="submit" class="btn btn-success  "value="Yadda saxla">
            </div>
            <div class="box-body">
    <div class="row">
    <div class="col-md-6"><input class="form-control" type="text" name="name" maxlength="400" placeholder="Ad" required></div>
    <div class="col-md-6"><input class="form-control" type="text" name="username" maxlength="150"  placeholder="Isdifadəçi adı"required></div>
    </div>
    <br />
    <div class="row">
    <div class="col-md-6"><input class="form-control" type="email"  name="email" maxlength="100" placeholder="Email" required></div>
    <div class="col-md-6"><input class="form-control" type="text"  name="password" maxlength="100" placeholder="Şifrə" required> </div>
    </div>
    <div class="form-group">
      <div class="radio">
        <label>
          <input type="radio" name="state" id="optionsRadios1" value="Superuser">
          Super User
        </label>
           &nbsp;  &nbsp;
        <label>
          <input type="radio" name="state" id="optionsRadios2" value="Admin">
          Admin
        </label>
       &nbsp;  &nbsp;
        <label>
          <input type="radio" name="state" id="optionsRadios2" value="Modirator">
          Modirator
        </label>

      </div>
      </div>
            </div>
            <!-- /.box-body -->
          </div>
        <?php csrfToken() ;//from tools_hepler ?>

        </form>
        </div>






        <div class="col-md-7">
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
                  <th>İsdifadəçi Adı</th>
                    <th > Email vəzifəsi</th>
                  <th >İsdifadəçi </th>
                  <th  >Əməliyyatlar</th>
                </tr>

                <?php foreach( $users as $user):?>
                <tr>
                  <td><?=$user['id']?></td>
                  <td><?=$user['name']?></td>
                  <td><?=$user['username']?></td>
                  <td><?=$user['email']?></td>
                  <td><span class="badge <?php if($user['state']=='Superuser'){echo 'bg-green';}elseif($user['state']=='Admin'){echo 'bg-aqua';}else{echo 'bg-yellow';}?>"><?=$user['state']?></span></td>
                  <td>
                   <a href="<?=site_url('Admin/adminusers/').$user['id'];?>"><span class="btn  bg-blue">Dəyiş</span></a>
                   <a href="<?=site_url('Admincontroller/deleteuser/').$user['id'];?>"><span class="btn  bg-red">Sil</span></a>

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

  <?php $this->load->view(Avw.'layouts/footer');?>

</body>
</html>
