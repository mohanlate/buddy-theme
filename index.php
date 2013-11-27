	<?php
		get_header();
	?>

	<?php 
		$recent = new WP_Query("page_id=24"); 
		while($recent->have_posts()) : $recent->the_post();
	?>

		<?php the_content(); ?>
	<?php endwhile; ?> 

	<?php
		get_footer();
	?>

