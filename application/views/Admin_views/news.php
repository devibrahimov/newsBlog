<?php $this->load->view(Avw.'layouts/head');?>
<link rel="stylesheet" href="<?=base_url('assets/admin/')?>bower_components/select2/dist/css/select2.min.css">

<!-- <link href="https://cdn.jsdelivr.net/npm/froala-editor@3.0.2/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" /> -->

</head>
<?php $this->load->view(Avw.'layouts/header');?>
  <!-- Theme style -->
  <?php $userstate = $this->session->admin['state']?>
<?php $this->load->view(Avw."layouts/sidebar_$userstate");?>

          <!-- START CUSTOM TABS -->

      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <form method="post" action="<?=site_url('Admin_news/addnews');?>" enctype="multipart/form-data">
          <div class="nav-tabs-custom">

            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab"> Ümumi </a></li>
              <li><a href="#tab_2" data-toggle="tab"> Azərbaycan dili</a></li>
              <!-- <li><a href="#tab_3" data-toggle="tab">Rus dili</a></li> -->
              <li class="pull-right"><input type="submit" class="btn btn-success"value="Yadda saxla" ></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                  <div class="form-group">
                  <label>Xəbər Kategoriyasını Seçin</label>
                  <select class="form-control select2" name="catid" style="width: 100%;" required>

                  <?php foreach($cats as $cat):?>
                <option value="<?=$cat['id']?>"><?=$cat['az_name']?> </option>
                <?php endforeach; ?>

                <option value="<?=@$this->session->newsdata['catid'];?> "><?=@$cat_name[$this->session->newsdata['catid']];?> </option>

                  </select>
                 </div>


                 <div class="form-group">
                  <label for="exampleInputFile">Xəbər Şəkilini yüklləyin</label>
                  <input type="file" id="exampleInputFile" name="image" required>

                  <p class="help-block">Şəkil Seçərkən xxx ölçüsündən çox olmamasına diqqət edin</p>

                  <input type="hidden" name="created_by" value="<?=$this->session->admin['id']?>">

                </div>
                </div>
              <!-- /.tab-pane -->


              <div class="tab-pane" id="tab_2">
              <div class="form-group">

              <label for="exampleInputEmail1">Xəbər Başlıqı(Azərbaycan-dili)</label>
              <input type="text" class="form-control"  name="az_title" value="<?= $this->session->newsdata['az_title']?>">
              <br />


                  <label for="exampleInputEmail1">Xəbər Mətni(Azərbaycan-dili)</label>


<!-- ==================================================================== -->

                 <textarea rows="130" cols="150" id="az_text" name="az_text"> <?= $this->session->newsdata['az_text']?> </textarea>

<!-- ==================================================================== -->


          <label for="exampleInputEmail1" class="text-info">"AZ" - Google keywords(tagları vergül ilə ayırın)</label>
          <input type="text" class="form-control"  name="azkeywords" max="200" value="<?= $this->session->newsdata['az_title']?>">

                </div>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="tab_3">
              <div class="form-group">

                      <label for="exampleInputEmail1">Xəbər Başlıqı(Rus-dili)</label>
                      <input type="text" class="form-control" name="ru_title" value="<?= $this->session->newsdata['ru_title']?>" >
                      <br />


                      <label for="exampleInputEmail1">Xəbər Mətni(Rus-dili)</label>
                      <div class="box box-info">
                      <div class="box-header">
                      <h3 class="box-title">CK Editor
                      <small>Advanced and full of features</small>
                      </h3>

                      </div>
                      <!-- /.box-header -->
                      <div class="box-body pad">

                        <textarea id="ru_text" name="ru_text" class="textarea" rows="10" cols="80" contenteditable="true">
                        <?= $this->session->newsdata['ru_text']?>
                        </textarea>

                      </div>
                      <label for="exampleInputEmail1" class="text-info">"RU" - Google keywords(tagları vergül ilə ayırın)</label>
                      <input type="text" class="form-control"  name="rukeywords" max="200" value="<?= $this->session->newsdata['az_title']?>">
                      </div>
                      <!-- /.box -->
                      </div>

              </div>
              <!-- /.tab-pane -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->

          <?php csrfToken() ;//from tools_hepler ?>

          </form>
        </div>
        <!-- /.col -->



      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view(Avw.'layouts/footer');?>
  <script src="<?=base_url('assets/admin/')?>bower_components/select2/dist/js/select2.full.min.js"></script>
  <!-- CK Editor -->
  <script src="<?=base_url('assets/admin/')?>bower_components/ckeditor/ckeditor.js"></script>
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.0.2/js/froala_editor.pkgd.min.js"></script> -->

<script>
$(function(){
  $('.select2').select2();
 
  CKEDITOR.replace('az_text',
 {
     filebrowserBrowseUrl: '<?=base_url('assets/admin/')?>bower_components/ckeditor/ckfinder/ckfinder.html',
     filebrowserImageBrowseUrl: '<?=base_url('assets/admin/')?>bower_components/ckeditor/ckfinder/ckfinder.html?type=Images',
     filebrowserUploadUrl: '<?=base_url('assets/admin/')?>bower_components/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
     filebrowserImageUploadUrl: '<?=base_url('assets/admin/')?>bower_components/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
 }) ;
  CKEDITOR.replace('ru_text');
});
    


</script>
</body>
</html>
