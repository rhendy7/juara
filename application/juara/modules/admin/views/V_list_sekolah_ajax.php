<?php if($list != FALSE) { ?>


<table width="100%" >
				  <caption></caption>
				  <thead>
					<tr>
					  <th scope="col" rowspan="2">No </th>
					  <th scope="col" rowspan="2">Nama</th>
					  <th scope="col" rowspan="2">NIS</th>
					  <th scope="col" rowspan="2">Telp</th>
					  <th scope="col" rowspan="2">Pengelola</th>
					</tr>
					
				  </thead>
				
				 <tbody>
					<tr>
					<?php $this->load->model('M_g_admin'); $no=1;?>
					
					<?php foreach($list->result() as $row): ?>
					  <td><?php echo $no; $row->id;?></th>
					  <td><?php echo $row->nama;?></td>
					  <td><?php echo $row->nis;?></td>
					  <td><?php echo $row->telp;?></td>
					  <?php 
					  //let query first based on id_sekolah 
					  
					  $id_unit_kerja = $row->id_unit_kerja;
					  $user = $this->M_g_admin->get_pengelola_sekolah($id_unit_kerja);
					  					  
					  
					  ?>
					  
					  <?php if($user == FALSE) { ?>
					 <td><?php echo anchor('auth/add_pengelola/'.$row->id_unit_kerja,'Tambah');?> </td>
					 <?php } else { ?>
					  <td><?php echo anchor('admin/view_pegawai_detail/'.$user->user_id, $user->email);}?> </td>
					</tr>
					
					<?php $no++; ?>
					<?php endforeach; ?>
				</tbody>
</table>
<?php } else {?>

<h3> No Data </h3>

<?php } ?>