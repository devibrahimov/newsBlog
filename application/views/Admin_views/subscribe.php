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
                  <th>Ad</th>
                  <th>Email</th>
                  <th>Tarix</th>

                </tr>
                </thead>
                <tbody>
                  <?php foreach($sbscribes as $s): ?>

                <tr class="<?php if($s['see']==0){echo 'bg-warning';}?>">

                  <td><?php if($s['see']==0){echo '<i class="fa  fa-circle text-aqua"> </i> ';}?><?=$s['name']?></td>
                  <td><?=$s['email']?></td>
                  <td><?= $s['datetime'] ?></td>
									<td><a href="<?=site_url('admin/singlesubscribe/').$s['id']?>" class="btn btn-default"> <i class="fa  fa-eye text-aqua"> </i></a> </td>
                </tr>
              <?php endforeach ;?>
                </tbody>
                <tfoot>

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
