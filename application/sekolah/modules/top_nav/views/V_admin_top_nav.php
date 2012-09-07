<ul id="menu" class="menu">
        <li><a href="#">Home</a></li>
        <li> <div id="main_li"><a href="#">Sekolah</a></div>
            <ul>
				<li id="li_space"></li>
                <li><?php echo anchor('admin/list_sekolah', 'Lihat List Sekolah', 'title="Lihat List Sekolah"') ?></li>
                <li><?php echo anchor('admin/tambah_sekolah', 'Tambah Sekolah', 'title="Tambah sekolah baru SD/IBT, SMP/MTSN, SMA/MAN"') ?></li>
                <li><a href="#">Else</a></li>
            </ul>
        </li>
        <li><span>User</span>
            <ul>
                <li><a href="#">Tambah User</a></li>
                <li><a href="#">Two</a></li>
                <li><a href="#">Three</a></li>
                <li class="submenu">
					<span>No Link</span>
					<ul>
                		<a href="#"><li class="noborder">One</li></a>
                		<li><a href="#">Two</a></li>
                		<li><a href="#">Three</a></li>
                		<li><a href="#">Four</a></li>
                		<li><a href="#">Five</a></li>
					</ul>
				</li>
                <li><a href="#">Five</a></li>
                <li><a href="#">Six</a></li>
            </ul>
        </li>
        <li><a href="#">Three</a>
            <ul>
                <li><a href="#">One</a></li>
                <li><a href="#">Two</a></li>
                <li><a href="#">Three</a></li>
            </ul>
        </li>
        <li><a href="#">Four</a>
            <ul id="menu_info">
				<li>
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce justo nulla, malesuada in porta vitae, fermentum ac nulla.</p>
				</li>
            </ul>
        </li>
    </ul>