<div class="comments-num">
	<?php 
		$commetnsNum = get_comments_number();
		if($commetnsNum == 1){
			echo '<h3>1 Comment</h3>';
		}else{
			echo '<h3>'.$commetnsNum. ' Comments'.'</h3>';
		}
		
		
	 ?>
</div>

<div class="comments-list">
	<?php echo wp_list_comments(); ?>
</div>
<div class="comments-from">
	<?php 
		echo comment_form();
	 ?>
</div>