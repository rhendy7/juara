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
					<?php $no=1;?>
					
					<?php foreach($list->result() as $row): ?>
					  <td><?php echo $no;?></th>
					  <td><?php echo $row->nama;?></td>
					  <td><?php echo $row->nis;?></td>
					  <td><?php echo $row->telp;?></td>
					  <?php if($row->user_email == "") { ?>
					 <td><?php echo anchor('auth/add_pengelola/'.$row->id,'Tambah');?> </td>
					 <?php } else { ?>
					  <td><?php echo anchor('admin/view_pegawai_detail/'.$row->user_id, $row->user_email);}?> </td>
					</tr>
					
					<?php $no++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
<?php } else {?>

<h3> No Data </h3>

<?php } ?>