<?php 
/*
 * Template Name: Category List
 */
	get_header("mobile");
?>
<div class="container">
	
	<div class="row">
		<?php while (have_posts()) : the_post(); ?>
			<div class="col-xs-12">
				<h1><?php the_title(); ?></h1>
			</div>
	<?php endwhile; ?>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<?php
			listByPostType();
			?>
		</div>
	</div>
</div>
<?php
	get_footer("mobile");