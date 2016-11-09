  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-align: center">
        <?php echo $namaCR; ?>
        <small><?php echo $halaman;?></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">AHATECH</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="myTable" class="display table" width="100%">
                <thead>
                <tr>
                  <th>ITEM'S NAME</th>
                  <th>COUNTS</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    for($i=0; $i<7; $i++){
                        echo '<a data-toggle="modal" data-target="#myDetailBarang">';
                        echo '<tr>';
                        echo '<th scope="row"><a data-toggle="modal" data-target="#myDetailBarang">TVS SERIES SILVER</a></th>';
                        echo '<td>4</td>';
                        echo '</tr>';
                        echo '</a>';}
                ?>
                </tbody>
              </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>

                 <div id="myDetailBarang" class="modal fade" role="dialog">
                  <div class="modal-dialog">
              <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header" style="background-color: #FFFFDD">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">TVS SERIES SILVER</h4>
                      </div>
                      <div class="modal-body" id="containSelector" style="padding: 20px 30px;">
                                    <div class="box">
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <thead>
                      <tr>
                        <th>#</th>
                        <th>DETAIL SN</th>
                        <th>STATUS</th>
                        <th>DATE SUBMITTED</th>
                      </tr>
                    </thead>
                    <!--panggil getOfflineCR-->
                    <tbody>
                      <?php
                      $val=65;
                      $i=0;
                      foreach ($listonline as $row):
                        echo '<tr>';
                          echo '<td>'.chr($val).'</td>';
                          echo '<td>'.$row->Name.'</td>';
                          echo '<td>'.$listoutlet[$i]->Name.'</td>';
                          echo '<td>'.$row->CheckInDate.' WIB</td>';
                        echo '</tr>';
                        $val = $val + 1;
                        $i = $i +1;
                      endforeach;
                      ?>
                    </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
                      </div>
                    </div>
                  </div>
                </div>

<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>



  <!-- /.content-wrapper -->
