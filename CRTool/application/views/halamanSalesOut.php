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
              <table id="dealer" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
  <!-- /.content-wrapper -->
