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
          <div class="box box-primary">
            <div class="box-body box-profile">
              <h3 class="profile-username text-center"><?php echo $halaman; ?></h3>

              <p class="text-muted text-center"><img src='http://image.flaticon.com/icons/png/512/33/33622.png' style="height: 20px; width: 20px;" /> SALES ID</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <a>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="reservation">
                        </div>
                  </a>
                </li>
                <li>
                          <table class="table table-sm table-striped" style="width: 100%; margin-top: 1%;">
                <thead>
                  <tr>
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>DEALER</th>
                    <th>OUTLET</th>
                    <th>LOCATION</th>
                  </tr>
                </thead>
                <!--panggil getDetailActivity-->
                <tbody>
                <?php
                for($i=0; $i<7; $i++){
                  echo '<tr>';
                    echo '<th scope="row">20/10/2016</th>';
                    echo '<td>17.52</td>';
                    echo '<td>DEALER 1</td>';
                    echo '<td>TIMUR TECH</td>';
                    echo '<td>HI TECH MALL</td>';
                  echo '</tr>';}
                ?>
                </tbody>
              </table>  
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
