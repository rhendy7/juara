<?php 

// $this->load->view('content/css'); 
      echo  modules::run('templates');
	  $this->load->model('M_g_admin');
?>



<div class="post">
					<h2 class="title"><a href="#">Selamat Login Pertama Kali Pengelola Sekolah :)</a></h2>
					<div class="entry">
					
						Hi, <strong>hello</strong>!, Selamat Datang <?php $pengelola = $this->M_g_admin->get_pengelola_sekolah($id_sekolah); echo $pengelola->nama; ?>
						</br>anda sekarang ada di Halaman awal Websekolah <strong> <?php  $sekolah = $this->M_g_admin->get_sekolah_where_id($id_sekolah); echo "$sekolah->kode_tingkat_sekolah ";  echo ucfirst($sekolah->nama); ?></strong>
						</br>Setelah ini anda akan dipandu untuk mengisi kelengkapan data profil sekolah.  Beberapa data yang diperlukan untuk diisi pada halaman berikut ini diantaranya :
						<ol>
							<li> Data Utama Profil Sekolah </li>
							<li> Data profil anda sebagai pengelola sekolah </li>
						
						</ol>
						Setelah proses pengisian telah anda selesaikan, maka anda akan dapat menggunakan Websekolah <strong>Juara</strong> Anda.
						</br>Untuk memulai silahkan klik tombol Mulai...					
					</div>
					
					<div id = "float_right"> <?php echo anchor('pengelola_web_sekolah/form_profil_sekolah1', 'Mulai', 'class ="button medium green"'); ?> </div>
					
</div>

