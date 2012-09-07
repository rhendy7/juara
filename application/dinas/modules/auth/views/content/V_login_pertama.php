
<?php echo  modules::run('templates/form'); ?>


		<?php if($message != "") { ?>
  
	    	<div id="warning" class="info_div"><span class="ico_error"><?php echo $message;?></span></div>
	    <?php } ?>

		
			
<div class="post">
					<h2 class="title"><a href="#">Selamat Login Pertama Kali Pengelola Sekolah :)</a></h2>
					<div class="entry">
					
						Hi, <strong>hello</strong>!, Selamat Datang<?php echo $pengguna->nama;?>
						</br>anda sekarang ada di Halaman awal Websekolah <strong> </strong>
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

			
			
			<label for="login"><strong>Nama Sekolah</strong> </label><input name="sekolah_nama" value="<?php echo $sekolah->nama;?>" disabled > </input>
			<br />
			<label><strong>Email anda (pengelola) :</strong></label> <input name="sekolah_nama" value="<?php echo $pengguna->email;?>" > </input>
			<br />
			
	 

		
		
			<!-- Php Form  -->			
			
		
			
		


			
			<br />
		
			<input id="save" class="loginbutton" type="submit" class="submit" value="Log In" />
			
		
			
				
			
	
		
			
			
			
		
			
			
			
			<?php echo form_close();?>