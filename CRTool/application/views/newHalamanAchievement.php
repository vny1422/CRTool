<div class="row content" id="mainBody">
	<div class="row">
		<h1 style="text-align: center"><?php echo $halaman; ?></h1>
	</div>
	
	<div class="row">
            <ul class="tab">
                <li><a href="javascript:void(0)" class="tablinks" onclick="openTabs(event, 'table')" id="defaultOpen">TABLE</a></li>
                <li><a href="javascript:void(0)" class="tablinks" onclick="openTabs(event, 'chart')">CHART</a></li>
            </ul>
            <div class="row">
              <p id="selectOption">Select CR
                <select class="selectpicker" data-live-search="true">
                    <option data-tokens="nanang">Nanang</option>
                    <option data-tokens="budi">Budi</option>
                    <option data-tokens="gian">Gian</option>
                </select>
              </p>
            </div>
            <div class="row">
              <div id="table" class="tabcontent">
              <p>
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
                </table></p>
              </div>
            </div>

            <div id="chart" class="tabcontent">
            </div>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url("assets/js/halamanAchievement.js"); ?>"></script>