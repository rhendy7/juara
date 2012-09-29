<script>
$(function(){
$.plot($("#placeholder"), [ [[0, 0], [1, 10]]], { yaxis: { max: 10 }, grid: { color: "#000", borderWidth:1} });
});
</script>


<div id="dashboard">
				<h2 class="ico_home">Dashboard</h2>
				<div id ="quickview_content">
				
				<div class="clearfix">
				
				<div class="left quickview">
					<h3>Tahun Ajaran : <?php echo "2012-2013";?></h3>
					<ul>
					<li>Prasarana <span class="number">15</span></li>
					<li>Sarana  <span class="number">340</span></li>
					<li>Jumlah Guru: <span class="number">3</span></li>
					<li>Jumlah Siswa: <span class="number">3</span></li>
					
					</ul>
				</div>
				<div class="quickview left">
					<h3>Lokasi Sekolah</h3>
					<?php echo modules::run('gmap/gmap_on_admin'); ?>
				</div>
					
				</div>
				</div>
</div><!-- end #dashboard -->