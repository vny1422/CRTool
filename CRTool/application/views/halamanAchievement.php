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
          <select id="cr" name="cr" class="select2_single form-control" tabindex="-1" style = "width:20%">
              <option></option>
              <?php
              foreach($listcr as $row): ?>
              <option value="<?php echo $row->ID ?>"><?php echo $row->Name ?></option>
              <?php endforeach; ?>

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
                <th>MONTH</th>
                <th>APPROVE</th>
                <th>RETUR</th>
                <th>INCOME</th>
                <th>TARGET</th>
                <th>DEFISIT</th>
                <th>ACHIEVEMENT (%)</th>
              </tr>
              </thead>
              <tbody id="listachievement">
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

<script type="text/javascript">
$(document).ready(function() {
var wrapper         = $("#listachievement"); //Fields wrapper
var cr              = $("#cr");
var table           = $('#myTable').DataTable();
var value           = $(cr).val();

function getTable() {
  $(wrapper).empty();
$.post("<?php echo base_url()?>cAchievement/getAchievement", {idcr: value}, function(data, status){
  var listinput = $.parseJSON(data);
  for (var key in listinput) {
    if (listinput.hasOwnProperty(key)) {
      table.row.add( [
        listinput[key]["month"],
        listinput[key]["approve"],
        listinput[key]["return"],
        listinput[key]["income"],
        listinput[key]["target"],
        listinput[key]["target"] - listinput[key]["income"],
        listinput[key]["income"] / listinput[key]["target"] *100
      ] ).draw();
    }
  }
});
}


$(cr).change(function(){
table.clear();
value = $(this).val();
getTable();
});
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
