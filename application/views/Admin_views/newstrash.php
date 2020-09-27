<?php $this->load->view(Avw.'layouts/head');?>
<!-- DataTables -->
<link rel="stylesheet" href="<?=base_url('assets/admin/')?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<?php $this->load->view(Avw.'layouts/header');?>
  <!-- Theme style -->
	<?php $userstate = $this->session->admin['state']?>
<?php $this->load->view(Avw."layouts/sidebar_$userstate");?>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Xəbər id</th>
                  <th>Xəbər başlıq</th>
                  <th>Kategoriyası(s)</th>
                  <th>Oxunma sayı</th>
                  <th>Yazar</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($trashnews as $news): ?>
                <tr>
                  <td><?=$news['id']?></td>
                  <td><?=$news['az_title']?></td>
                  <td><?=$cat_name[$news['catid'] ]?></td>
                  <td><?=$news['hit']?></td>
                  <td><?=$user_name[$news['created_by'] ]?></td>

                </tr>
              <?php endforeach ;?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view(Avw.'layouts/footer');?>
  <!-- DataTables -->
  <script src="<?=base_url('assets/admin/')?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?=base_url('assets/admin/')?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
</body>
</html>
