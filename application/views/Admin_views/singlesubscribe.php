<?php $this->load->view(Avw.'layouts/head');?>
<link rel="stylesheet" href="<?=base_url('assets/admin/')?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<?php $this->load->view(Avw.'layouts/header');?>
  <!-- Theme style -->
	<?php $userstate = $this->session->admin['state']?>
<?php $this->load->view(Avw."layouts/sidebar_$userstate");?>

<div class="row">

    <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Chip Abune </h3>

                <div class="box-tools pull-right">
                  <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Previous"><i class="fa fa-chevron-left"></i></a>
                  <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Next"><i class="fa fa-chevron-right"></i></a>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <div class="mailbox-read-info">
                  <h3><?=$sbscribes['name']?> <?=$sbscribes['lastname']?></h3>
                  <h5>kimden: <?=$sbscribes['email']?>
                   <h5>Telefon: <?=$sbscribes['phone']?>
                    <span class="mailbox-read-time pull-right"> <?=$sbscribes['datetime']?></span></h5>
                </div>
                <!-- /.mailbox-read-info -->

                <!-- /.mailbox-controls -->
                <div class="mailbox-read-message">
                  Adress:
                  <p><?=$sbscribes['adress']?></p>
                  <hr>
                  Mesaj:
                  <p><?=$sbscribes['comment']?></p>


                </div>
                <!-- /.mailbox-read-message -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <ul class="mailbox-attachments clearfix">



                </ul>
              </div>
              <!-- /.box-footer -->

              <!-- /.box-footer -->
            </div>
            <!-- /. box -->
          </div>
    <div class="col-md-6">
      <div class="box box-primary">
        <form action="<?=site_url('Email/subscribeReply');?>" method="post">
           <?php csrfToken();?>
        <div class="box-header with-border">
          <h3 class="box-title">Abunenin mail adresine cavab olaraq gonderin</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="form-group">
            <input class="form-control" name="useremail"  value="<?=$sbscribes['email']?>">
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="Subject:" name="subject" value="Chip Azerbaijan">
          </div>
          <div class="form-group">
                <textarea id="compose-textarea" name="textareacontent" class="form-control" style="height: 300px">

                  <br><hr>
                  <h4><u>Hörmətlə</u></h4>
                  <h1><?= $this->session->admin['name']?> </h1>
                  <ul>
                    <li>Bakı şəhəri, Ağa Neymətulla 2</li>
                    <li>+994 12 514 07-15</li>
                    <li>+994 55 514 07-15</li>
                  </ul>

                </textarea>
          </div>
          <!-- <div class="form-group">
            <div class="btn btn-default btn-file">
              <i class="fa fa-paperclip"></i> Attachment
              <input type="file" name="attachment">
            </div>
            <p class="help-block">Max. 32MB</p>
          </div> -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <div class="pull-right">
            <!-- <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button> -->
            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
          </div>
          <!-- <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button> -->
        </div>
        <!-- /.box-footer -->
      </form>
      </div>
      <!-- /. box -->
    </div>
    <!-- /.col -->
  </div>
    <!-- /.row -->
</section>
<!-- /.content -->

</div>
  <?php $this->load->view(Avw.'layouts/footer');?>
  <script src="<?=base_url('assets/admin/')?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Page Script -->
  <script>
    $(function () {
      //Add text editor
      $("#compose-textarea").wysihtml5();
    });
  </script>
