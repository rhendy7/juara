<?php 

// $this->load->view('content/css'); 
      echo  modules::run('templates');
	  $this->load->model('M_g_admin');
?>



<div class="post">
					<h2 class="title"><a href="#">Selamat Login Pertama Kali Pengelola Sekolah :)</a></h2>
					<div class="entry">
					
						Hi, <strong>hello</strong>!, Selamat Datang
						</br> Anda saat ini login sebagai <b><?php echo $pengguna->nama; ?></b> dan dengan email <b><?php echo $pengguna->email;?></b> 
						</br>Apakah anda yakin data diatas data anda ? <?php echo anchor('redirection/clear_session','Ini bukan nama dan email saya !') ?>
						</br>anda sekarang ada di Halaman awal Websekolah <strong> <?php  ?></strong>
						</br>Setelah ini anda akan dipandu untuk memastikan profil sekolah anda dan mengisi lokasi sekolah anda :
						<ol>
							<li> Pastikan anda adalah sebagai pengelola yang BENAR sesuai dengan sekolah anda </li>
							<li> Mohon siapkan data kordinat sekolah anda </li>
						
						</ol>
						Setelah proses pengisian telah anda selesaikan, maka anda akan dapat menggunakan Websekolah <strong>Juara</strong> Anda.
						</br>Untuk memulai silahkan klik tombol Mulai...					
					</div>
					
					<div id = "float_right"> <?php echo anchor('pengelola_web_sekolah/form_profil_sekolah1', 'Mulai', 'class ="button medium green"'); ?> </div>
					
</div>

