  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-align: center">
        <?php echo $halaman; ?>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="row">
            <label>Select CR</label>
            <select class="selectpicker" data-show-subtext="true" data-live-search="true" style="width: 20%">
                <option data-tokens="nanang">Nanang</option>
                <option data-tokens="budi">Budi</option>
                <option data-tokens="gian">Gian</option>
            </select>
        </div>
        <div class="row">
            <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                <span></span> <b class="caret"></b>
            </div>
        </div>
        <div class="row">
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">OUTLETS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="myTable" class="display table" width="100%">
                <thead>
                <tr>
                  <th>NAME</th>
                  <th>ADDRESS</th>
                  <th>COUNTS</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $namaOutlet = 'Ahatecth';
                    for($i=0; $i<7; $i++){
                        echo '<tr>';
                        echo '<a href="./cSalesOut/barangTerjualOutlet/Ahatech">';
                        echo '<th scope="row">Ahatech</th>';
                        echo '</a>';
                        echo '<td>Plaza Marina</td>';
                        echo '<td>3</td>';
                        echo '</tr>'; }       
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

<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>

<script type="text/javascript">
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);
    
});
</script>



  <!-- /.content-wrapper -->
