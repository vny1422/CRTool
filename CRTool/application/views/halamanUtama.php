  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-align: center">
        <?php echo $halaman; ?>
        <small>29 October 2016</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div id="mainMap">
              <div style="width: 100%; margin-left: 0%; height: 110%;"> <?php echo $map['html']; ?></div>
            </div>
      </div>
        
        <div class="row" id="addMenu">
            <div class="col-xs-12">
                <ul id="navs" data-open="-" data-close="MORE" style="text-align: center;">
                      <!--<li><a href="http://www.17sucai.com/">FRESH</a></li>-->
                      <li><a data-toggle="modal" data-target="#myModal">WARN</a></li>
                      <li><a data-toggle="modal" data-target="#newStore">NEW</a></li>
                </ul>
            </div>
        </div>
        
          <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog modal-sm">
              <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header" id="modal_warningCriteria">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">MINIMUM CHECK FOR ALL DEALERS</h4>
                      </div>                     
                      <div class="modal-body" id="containSelector" style="padding: 20px 30px;">
                        <form action="<?php echo base_url()?>/cHalamanUtama/cekBermasalah" method="post">
                          <p>CHECK-IN MINIMUM </p><select name="kriteria_masalah"><option value="weeks">WEEKS</option><option value="months">MONTHS</option></select><br><input type="number" name="jumlah_minimum" min="0" max="100">
                      </div>
                      <div class="modal-footer">
                        <button id="btn" class="btn btn-primary btn-block" action="submit"><span class="glyphicon glyphicon-floppy-saved"></span> SAVE</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                  <div id="newStore" class="modal fade" role="dialog">
                  <div class="modal-dialog modal-sm">
              <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header" id ="modal_addNewStore">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">ADD NEW STORE</h4>
                      </div>                     
                      <div class="modal-body" id="containSelector" style="padding: 20px 30px;">
                        <p style="text-align: left;"><input type="text" id="myPlaceTextBox" /></p>
                      </div>
                      <div class="modal-footer">
                        <button id="btn" class="btn btn-primary btn-block" action="submit"><span class="glyphicon glyphicon-floppy-saved"></span> SAVE</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
        
        <!-- script untuk animasi tombol MORE -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script type="text/javascript">
        (function(){
            var ul=$("#navs"),li=$("#navs li"),i=li.length,n=i-1,r=120;
            ul.click(function(){
              $(this).toggleClass('active');
              if($(this).hasClass('active')){
                for(var a=0;a<i;a++){
                  li.eq(a).css({
                  'transition-delay':""+(50*a)+"ms",
                  '-webkit-transition-delay':""+(50*a)+"ms",
                  'left':(r*Math.cos(90/n*a*(Math.PI/180))),
                  'top':(-r*Math.sin(90/n*a*(Math.PI/180))) 
                  });
                }
              }else{
                li.removeAttr('style');}
            });
        })($);
      </script>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row" style="float: none;
    display: block;
    margin: 0 auto;">
          <div class="center-block">
              <table class="table table-sm table-striped" style="width: 100%; margin-top: 1%;">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>CR's Name</th>
                        <th>Last Check In</th>
                        <th>Time Check In</th>
                      </tr>
                    </thead>
                    <!--panggil getOfflineCR-->
                    <tbody>
                    <?php
                    for($x=1; $x<=7; $x++){
                      echo '<tr>';
                        echo '<th scope="row">'.$x.'</th>';
                        echo '<td>ANDI B.</td>';
                        echo '<td>DAYTONA AXIOO</td>';
                        echo '<td>19.00'.'WIB'.'</td>';
                      echo '</tr>';
                    }
                    ?>
                    </tbody>
                  </table>
            </div>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
