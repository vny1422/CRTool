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
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#table">TABLE</a></li>
            <li><a data-toggle="tab" href="#chart">CHART</a></li>
        </ul>
      
      <div class="tab-content">
          <div id="table" class="tab-pane fade in active">
        <div class="row">
          <label>Select CR</label>
            <select id="cr" name="cr" class="selectpicker" data-live-search="true" >
                <?php
                foreach($listcr as $row): ?>
                <option value="<?php echo $row->ID; ?>" data-tokens="<?php echo $row->Name;?>"><?php echo $row->Name; ?></option>
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
                <th>INCOME(JUTAAN)</th>
                <th>TARGET(JUTAAN)</th>
                <th>DEFISIT(JUTAAN)</th>
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
          </div>
          
          <div id="chart" class="tab-pane fade">
               <!-- <script type="text/javascript">
                      google.charts.load('current', {'packages':['corechart']});
                      google.charts.setOnLoadCallback(drawChart);
                    
                    
                    
                    $.post("<?php echo base_url()?>cAchievement/getAchievement", {idcr: value}, function(data, status){
                      var listinput = $.parseJSON(data);
                      var data = [];
                      for (var key in listinput) {
                        if (listinput.hasOwnProperty(key)) {
                            data.push(listinput[key]["month"]);
                            data.push(listinput[key]["income"] / listinput[key]["target"] *100);
                        }
                      }
                    });

                      function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                             ['Month', 'Achievement'],
                         for (i=0; i<data.length; i+2){  
                                  [data[i],  data[i+1]],
                            }
                        ]);

                        var options = {
                          title: 'SALES ACHIEVEMENT',
                          curveType: 'function',
                          legend: { position: 'bottom' },
                          width: $(window).width()*0.75,
                          height: $(window).height()*0.75
                        };

                        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                        chart.draw(data, options);
                      }
                    </script>-->
                    <div id="curve_chart"></div>
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
    
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
    
                      function drawChart(listinput) {
                          //document.write(listinput);
                          var isiData = [];
                          
                          for (var key in listinput){
                              if(listinput.hasOwnProperty(key)){
                                  isiData.push(listinput[key]["month"]);
                                  isiData.push(listinput[key]["income"] / listinput[key]["target"] *100);
                                  //window.alert(listinput[key]["month"]);
                                 // document.write(listinput[key]["income"] / listinput[key]["target"] *100);
                              }
                          }
                          
                          var gambarChart = [];
                          gambarChart.push(['Month', 'Achievement']);
                          for (i= 0; i<=(isiData.length/2); i=i+2){
                              gambarChart.push([isiData[i], Number(isiData[i+1])]);
                          }
                        var data = google.visualization.arrayToDataTable(gambarChart);

                        var options = {
                          title: 'SALES ACHIEVEMENT',
                          curveType: 'function',
                          legend: { position: 'bottom' },
                          width: $(window).width()*0.75,
                          height: $(window).height()*0.75
                        };

                        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                        chart.draw(data, options);
                      }

function getTable() {
  $(wrapper).empty();
$.post("<?php echo base_url()?>cAchievement/getAchievement", {idcr: value}, function(data, status){
  var listinput = $.parseJSON(data);
    //window.alert(listinput);
  for (var key in listinput) {
    if (listinput.hasOwnProperty(key)) {
      table.row.add( [
        listinput[key]["month"],
        listinput[key]["approve"],
        listinput[key]["return"],
        listinput[key]["income"]/1000000,
        listinput[key]["target"]/1000000,
        (listinput[key]["target"] - listinput[key]["income"])/1000000,
        listinput[key]["income"] / listinput[key]["target"] *100
      ] ).draw();
    }
  }
        drawChart(listinput);
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
