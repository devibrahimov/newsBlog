<?php $this->load->view(Avw.'layouts/head');?>
<link rel="stylesheet" href="<?=base_url('assets/admin/')?>bower_components/select2/dist/css/select2.min.css">

<link href="https://cdn.jsdelivr.net/npm/froala-editor@3.0.2/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />

</head>
<?php $this->load->view(Avw.'layouts/header');?>
  <!-- Theme style -->
  <?php $userstate = $this->session->admin['state']?>
<?php $this->load->view(Avw."layouts/sidebar_$userstate");?>

          <!-- START CUSTOM TABS -->


          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="<?=base_url('assets/admin/')?>dist/img/user2-160x160.jpg" alt="User profile picture">

                  <h3 class="profile-username text-center"><?=$user_name[$news['created_by'] ]?></h3>

                  <p class="text-muted text-center">Xəbərin yazarı</p>


                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->

              <!-- About Me Box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"> Əməliyyatlar</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <a href="<?=site_url('Admincontroller/editpage/').$news['id'];?>" class="btn btn-primary btn-block"><b>Dəyişiklik Et</b></a>

                  <hr>

                  <?php if($news['active']=='0'){?> <a href="<?=site_url('Admin_news/publish_news/').$news['id'];?>" class="btn btn-success btn-block"><b>Yayinla</b></a>  <?php }?>
                  <?php if($news['active']=='1'){?> <a href="<?=site_url('Admin_news/unpublish/').$news['id'];?>" class="btn btn-warning btn-block"><b>Yayini durdur</b></a>  <?php }?>
                  <hr>

                  <a href="<?=site_url('Admin_news/totrash/').$news['id'];?>" class="btn btn-danger btn-block"><b>Sil</b></a>

                  <hr>
                  <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab">Xəbərin Mətni </a></li>
                  <!-- <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
                  <li><a href="#settings" data-toggle="tab">Settings</a></li> -->
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <img src="<?=base_url('').small_image($news['image'])?>"  alt="">
                      <div class="user-block">

                              <h1 href="#"><?=$news['az_title']?></h1>


                        <span  style="color:blue;"> yazilma vaxti:  <?=$news['created']?></span>
                      </div>
                      <!-- /.user-block -->
                        <?=htmlspecialchars_decode($news['az_text'])?>

                    </div>
                    <!-- /.post -->


                  </div>
                  <!-- /.tab-pane -->


                </div>
                <!-- /.tab-content -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
          </div>





          <!-- START CUSTOM TABS -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php $this->load->view(Avw.'layouts/footer');?>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.0.2/js/froala_editor.pkgd.min.js"></script>

<script>

    var editor = new FroalaEditor('#az_text');


</script>
</body>
</html>
