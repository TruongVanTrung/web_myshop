	<ul class="pagination">
		<?php 
			if($current_page>3){
				$first_page = 1;
		?>
		<li><a href="?per_page=<?php echo $item_per_page; ?>&page=<?php echo $first_page ; ?>">Đầu</a></li>
		<?php } 
		if($current_page>1){
			$prev_page = $current_page-1;
		?>
		<li><a href="?per_page=<?php echo $item_per_page; ?>&page=<?php echo $prev_page ; ?>">PREV</a></li>
		<?php } ?>
		<?php for($num=1;$num<=$totalpage;$num++){ 
		?>
			<?php if($num!=$current_page){ ?>
				<?php if($num > $current_page-3 && $num < $current_page+3){ ?>
					<li><a href="?per_page=<?php echo $item_per_page; ?>&page=<?php echo $num; ?>"><?php echo $num; ?></a></li>
				<?php } ?>
			<?php }else{ ?>
				<li><a  style="background-color: #FE980F"><strong ><?php echo $num; ?></strong></a></li>
			<?php } ?>
		<?php  
		}
		if($current_page<$totalpage-1){
			$next_page = $current_page+1;
		?>
		<li><a href="?per_page=<?php echo $item_per_page; ?>&page=<?php echo $next_page; ?>">NEXT</a></li>
		<?php } ?>
		<?php 
			if($current_page>$totalpage-3){
				$end_page = $totalpage;
			?>
			<li><a href="?per_page=<?php echo $item_per_page; ?>&page=<?php echo $end_page ; ?>">Cuối</a></li>
		<?php } ?>
	</ul><!--features_items-->
