			<div id="sidebar" class="right">
				<h2 class="ico_home_blue">Sidebar</h2>
			<ul id="menu">
				<li>
					<a href="#" class="ico_posts">Kategori berita</a>
					<ul>
											
						<li><?php echo anchor('blog/daftar_kategori','Daftar kategori (tambah, edit, hapus)'); ?></li>	
					</ul>
				
					<a href="#" class="ico_posts">Berita</a>
					<ul>
						
						<li><?php echo anchor('blog/tambah_berita','Tambah berita'); ?></li>	
						<li><?php echo anchor('blog/daftar_berita','Daftar berita'); ?></li>	
					</ul>
					<a href="#" class="ico_page">Kegiatan </a>
					<ul>
						<li><?php echo anchor('jadwal_kegiatan','Jadwal Kegiatan'); ?></li>
						
						
					</ul>
					
					
					
					
					
					<?php echo anchor('gallery/albums','Galleri','class="ico_page"'); ?>
					<a href="#" class="ico_user">Users</a>
					<ul>
						<li><a href="#">Edit users</a></li>
						<li><a href="#">Add user</a></li>
						<li><a href="#">Manage users</a></li>
					</ul>
					
					
					<a href="#" class="ico_settings">Settings</a>
					<ul>
						<li><a href="#">Database</a></li>
						<li><a href="#">Themes</a></li>
						<li><a href="#">Options</a></li>
					</ul>
				</li>
		
				
			</ul>

			</div><!-- end #sidebar -->