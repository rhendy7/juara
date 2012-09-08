<?php 

// $this->load->view('content/css'); 
      echo  modules::run('templates');
	  $this->load->model('M_g_admin');
?>



<div class="post">
					<h2 class="title"><a href="#">Selamat anda berhasil meninput data kordinat sekolah </a></h2>
					<div class="entry">
					
						<strong>Dengan ini</strong>,
						<ol>
							<li> Nama : <?php echo $pengguna->nama;?></li>
							<li> Email : <?php echo $pengguna->email;?></li>
							<li> Nama Sekolah : <?php echo $sekolah->nama;?></li>
						
						</ol>
						</br> Saya menyatakan bahwa saya adalah pengelola yang sah dari sekolah ini dan saya bertanggung jawab terhadap data yang akan saya input di sekolah ini  
						
						</br> 
						</br>
						<div style="border: 1px solid #eee;">
						<b> Keterangan : </b>
						<i>
						</br>
						ini adalah aplikasi berbasis web yang digunakan untuk menginput data-data sekolah dan informasi ini akan digunakan oleh Dinas Pendidikan Kota dan secara publik (untuk informasi tertentu)
						. Aplikasi ini tidak menggantikan fungsi dari aplikasi pendataan dari Dinas Pendidikan Pusat. 
						
						</i>
						</br>
						Setelah proses pengisian telah anda selesaikan, maka anda akan dapat menggunakan Websekolah <strong>Juara</strong> Anda.
						</br>Untuk memulai silahkan klik tombol Halaman Admin...
						</div>
					</div>
					
					<div id = "float_right"> <?php echo anchor('pengelola_web_sekolah/daftar_admin_pertama', 'Halaman Admin', 'class ="button medium green"'); ?> </div>
					
</div>

