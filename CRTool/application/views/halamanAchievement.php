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
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#dataTable" data-toggle="tab">TABLE</a>
                </li>
                <li><a href="#dataChart" data-toggle="tab">CHART</a>
                </li>
            </ul>
        </div>
        
        <div class="tab-content">
            <div class="tab-pane active" id="dataTable">
                  <table class="table table-hover" align="center" style="width: 100%">
                    <thead>
                        <tr>
                          <th colspan="8">ACHIEVEMENT FOR 6 MONTHS</th>
                        </tr>
                        <tr>
                          <th rowspan="2">MONTH</th>
                          <th colspan="2">SUM OF SN</th>
                          <th colspan="4">SALES OUT</th>
                        </tr>
                        <tr>
                          <th>APPROVE</th>
                          <th>RETUR</th>
                          <th>INCOME</th>
                          <th>TARGET</th>
                          <th>DEFISIT</th>
                          <th>ACHIEVEMENT (%)</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>JANUARY 2016</td>
                        <td>162</td>
                        <td>0</td>
                        <td>169,965,000</td>
                        <td>300,000,000</td>
                        <td>130,035,000</td>
                        <td style="background-color: red">56.65</td>
                      </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="tab-pane active" id="dataChart">
                   <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
