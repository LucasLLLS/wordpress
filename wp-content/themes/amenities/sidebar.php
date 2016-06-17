<?php 
	
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="sidebar col-sm-3">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>