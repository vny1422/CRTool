<div class="row content" id="mainBody">
	<div class="row">
		<h1 style="text-align: center"><?php echo $halaman; ?></h1>
	</div>
	
	<div class="row" align="center">
      <img src='http://image.flaticon.com/icons/png/512/33/33622.png' style="height: 20px; width: 20px;" /> SALES ID
	</div>
  <div class="row" align="center">
    <p style="border-style: dashed; font-size: 1.5em;"> NANANG TAUFAN B. </p>
  </div>
  <div class="row" align="center">
    <div class="col-sm-6">
      <div class='input-group date' id='datetimepicker5' style="width: 80%;">
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
    </div>
    <div class="col-sm-6">
      <div class='input-group date' id='datetimepicker5' style="width: 80%;">
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
    </div>

  </div>
  <div class="row">
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
  </div>
</div>
  <script type="text/javascript">
            $(function () {
                $('#datetimepicker5').datetimepicker({
                    defaultDate: "11/1/2013",
                    disabledDates: [
                        moment("12/25/2013"),
                        new Date(2013, 11 - 1, 21),
                        "11/22/2013 00:53"
                    ]
                });
            });
        </script>
<script type="text/javascript"><?php echo base_url('assets/js/halamanDetailActivity.js'); ?></script>