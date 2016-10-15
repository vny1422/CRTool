
	<main>

 	</main>
 	
	 <div id="map_canvas" style="width: 100%; height: 70%; position: relative; overflow: hidden; bottom: 560; background-color: rgb(229, 227, 223);"> <?php echo $map['html']; ?></div>
	 <div id="option_masalah">
	 	<form class="form-horizontal" role="form" action="<?php echo base_url()?>/cHalamanUtama/cekBermasalah" method="post">
	 	<p>CHECK-IN MINIMUM </p><select name="kriteria_masalah"><option value="weeks">WEEKS</option><option value="months">MONTHS</option></select><input type="text" name="jumlah_minimum"><input type="submit" name="SAVE">
	 </div>
	 <!--<div id="map_canvas"></div>-->

