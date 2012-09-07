 <ul class="latestnews">
	<?php
	$i = 1;
	foreach($list->result() as $row)
	{
	$i++;
	?>
 
 
 
 
        <?php if($i == 4) { echo '<li class="last">';} else { echo '<li>';}?>
          <p><strong><a href="#"><?php echo ucwords($row->judul);?></a></strong> <?php echo word_limiter($row->isi, 53); ?></p>
        </li>
		
		
	<?php } ?>	
</ul>