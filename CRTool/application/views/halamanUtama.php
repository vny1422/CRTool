  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-align: center">
        <?php echo $halaman; ?>
        <small><?php echo date("d F Y");?></small>
      </h1>
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
                      <li ><a data-toggle="modal" data-target="#newStore" data-backdrop="static" data-keyboard="false" id="sesuatu">NEW</a></li>
                </ul>
            </div>
        </div>

          <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog modal-sm">
              <!-- Modal content-->
                    <form action="<?php echo base_url()?>cHalamanUtama/cekBermasalah" method="post">
                    <div class="modal-content">
                      <div class="modal-header" id="modal_warningCriteria">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">MINIMUM CHECK FOR ALL DEALERS</h4>
                      </div>
                      <div class="modal-body" id="containSelector" style="padding: 20px 30px;">
                      
                          <p>CHECK-IN MINIMUM </p><select name="kriteria_masalah"><option value="weeks">WEEKS</option><option value="months">MONTHS</option></select><br><input type="number" name="jumlah_minimum" min="0" max="100">
                      </div>
                      <div class="modal-footer">
                        <button id="btn" class="btn btn-primary btn-block" action="submit"><span class="glyphicon glyphicon-floppy-saved"></span> SAVE</button>
                      </div>
                    </div>
                    </form>
                  </div>
          </div>

          <div id="newStore" class="modal fade" role="dialog">
                  <div class="modal-dialog modal-sm">
              <!-- Modal content-->
                    <form action="<?php echo base_url()?>cHalamanUtama/addNewStore" method="post">
                    <div class="modal-content">
                      <div class="modal-header" id ="modal_addNewStore">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">ADD NEW STORE</h4>
                      </div>
                      <div class="modal-body" id="containSelector" style="padding: 20px 30px;">
                        <!--<p style="text-align: left;"><input type="text" id="myPlaceTextBox" /></p>-->
                            <div class="container-fluid bd-example-row">
                                <div class="row">
                             <input type="text" name="nama_lokasi" id="nama_lokasi" placeholder="outlet's name">
                                </div>
                                <div class="row">
                                   <input type="text" name="alamat_lokasi" id="alamat_lokasi" placeholder="outlet's address">               
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        Latitude
                                        <div class="row">
                                            <input type="text" name="latitude" id="latitude">
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-sm-9">
                                        <div class="row">
                              Longitude
                                            <input type="text" name="longitude" id="longitude">
                                        </div>
                                    </div>
                                </div>
                      </div>
                      <div class="modal-footer">
                        <button id="btn" class="btn btn-primary btn-block" action="submit"><span class="glyphicon glyphicon-floppy-saved"></span> SAVE</button>
                      </div>
                    </div>
                    </form>
                  </div>
          </div>
        
        <!-- script new marker alamat -->
        <script type="text/javascript">
              var mapOptions = {
        center: new google.maps.LatLng(0, 0),
        zoom: 16
    },
    map = new google.maps.Map(document.getElementById("mainMap"), mapOptions),
    marker = new google.maps.Marker({
        position: map.getCenter(),
        map: map,
        title: 'Drag to set position',
        draggable: true,
        flat: false
    });
    google.maps.event.addListener(marker, 'dragend', function() {
        latlng = marker.getPosition();
        url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+ latlng.lat() + ',' + latlng.lng() + '&sensor=false';
        $.get(url, function(data) {
            if (data.status == 'OK') {
                map.setCenter(data.results[0].geometry.location);                
                if (confirm('Do you also want to change location text to ' + data.results[0].formatted_address) === true) {
                    $('#location').val(data.results[0].formatted_address);
                    $('#lat').val(data.results[0].geometry.location.lat);
                    $('#lng').val(data.results[0].geometry.location.lng);
                }
            }
        });
        
    });
    
        

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
                    $val=65;
                    $i=0;
                    foreach ($listonline as $row):
                      echo '<tr>';
                        echo '<td>'.chr($val).'</td>';
                        echo '<td>'.$row->Name.'</td>';
                        echo '<td>'.$listoutlet[$i]->Name.'</td>';
                        if (intval($row->Hour) < 10) $row->Hour = '0'.$row->Hour;
                        if (intval($row->Minute) < 10) $row->Minute = '0'.$row->Minute;
                        echo '<td>'.$row->Day.'/'.$row->Month.'/'.substr($row->Year, -2).' '.$row->Hour.':'.$row->Minute.' WIB</td>';
                      echo '</tr>';
                      $val = $val + 1;
                      $i = $i +1;
                    endforeach;
                    foreach ($listoffline as $row):
                      echo '<tr>';
                        echo '<td>'.chr($val).'</td>';
                        echo '<td>'.$row->Name.'</td>';
                        echo '<td>'.$listoutlet[$i]->Name.'</td>';
                        if (intval($row->Hour) < 10) $row->Hour = '0'.$row->Hour;
                        if (intval($row->Minute) < 10) $row->Minute = '0'.$row->Minute;
                        echo '<td>'.$row->Day.'/'.$row->Month.'/'.substr($row->Year,-2).' '.$row->Hour.':'.$row->Minute.' WIB</td>';
                      echo '</tr>';                      $val = $val + 1;
                      $i = $i +1;
                    endforeach;
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
