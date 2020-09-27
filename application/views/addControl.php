<?php $this->load->view(Avw.'layouts/head');?>

<?php $this->load->view(Avw.'layouts/header');?>
  <!-- Theme style -->
  <?php $userstate = $this->session->admin['state']?>
<?php $this->load->view(Avw."layouts/sidebar_$userstate");?>


<div class="row">
  <div class="col-md-2">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('<?=base_url('assets/admin/')?>/dist/img/photo1.png') center center;">

            </div>

            <div class="box-footer">
              <div class="row">
                <form role="form">
                  <div class="box-body">

                                      <div class="box-footer">
                                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal-default">
                                          Dəyiş
                                        </button>
                                      </div>
                  </div>
                  <!-- /.box-body -->

                </form>
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>


        <div class="col-md-2">
                <!-- Widget: user widget style 1 -->
                <div class="box box-widget widget-user">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header bg-black" style="height:400px;background: url('<?=base_url('assets/admin/')?>/dist/img/photo1.png') center center;">

                  </div>

                  <div class="box-footer">
                    <div class="row">

                        <div class="box-body">

                                            <div class="box-footer">
                                              <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal-default">
                                                Dəyiş
                                              </button>
                                            </div>
                        </div>
                        <!-- /.box-body -->

                    </div>
                    <!-- /.row -->
                  </div>
                </div>
                <!-- /.widget-user -->
              </div>




    </div>

</div>
<!-- /.content-wrapper -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Default Modal</h4>
      </div>
      <div class="modal-body">
        <form class="" action="index.html" method="post">
          <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input type="file" id="exampleInputFile">

                      <p class="help-block">Example block-level help text here.</p>
                    </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
  <?php $this->load->view(Avw.'layouts/footer');?>

</body>
</html>
