  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!--<section class="content-header">
      <h1 style="text-align: center">
        <?php //echo $halaman; ?>
      </h1>
    </section>-->

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">OUTLETS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th>NAME</th>
                  <th>ADDRESS</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    for($i=0; $i<7; $i++){
                        echo '<tr>';
                        echo '<th scope="row">Ahatech</th>';
                        echo '<td>Plaza Marina</td>';
                        echo '</tr>';}
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>NAME</th>
                  <th>ADDRESS</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('newAssets/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('newAssets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('newAssets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('newAssets/plugins/datatables/dataTables.bootstrap.min.js'); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('newAssets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('newAssets/plugins/fastclick/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('newAssets/dist/js/app.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('newAssets/dist/js/demo.js'); ?>"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
  <!-- /.content-wrapper -->
