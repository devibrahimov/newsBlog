<?php $userstate = $this->session->admin['state']?>
<?php $this->load->view(Avw.'layouts/head');?>

<?php $this->load->view(Avw.'layouts/header');?>
  <!-- Theme style -->

<?php $this->load->view(Avw."layouts/sidebar_$userstate");?>

    <!-- Main content -->
 
   <!-- Main content -->
   <section class="content">

<div class="row">
  <div class="col-md-3">

    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="http://localhost/mini/assets/uploads/logos/<?=$company['logo']?>" alt="User profile picture">

        <h3 class="profile-username text-center"><?=$company['name']?></h3>

        <p class="text-muted text-center"></p>

        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>Elaqedar şəxs</b> <a class="pull-right"><?=$company['person']?></a>
          </li>
          <li class="list-group-item">
            <b>Telefon</b> <a class="pull-right"><?=$company['phone']?></a>
          </li>
          <li class="list-group-item">
            <b>Email</b> <a class="pull-right"><?=$company['email']?></a>
          </li>
        </ul>

        <a href="<?=$company['website']?>" class="btn btn-primary btn-block"><b>web site</b></a>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- About Me Box -->
     
  </div>
  <!-- /.col -->
  <div class="col-md-9">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#activity" data-toggle="tab">Məlumatlar</a></li>
        <li><a href="#timeline" data-toggle="tab">Qiymətləndirmə</a></li> 
      </ul>
      <div class="tab-content">
        <div class="active tab-pane" id="activity"> 
         <p><?=$company['companycomment']?></p>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="timeline">
        
        </div>
        <!-- /.tab-pane -->
  
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.nav-tabs-custom -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->



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
