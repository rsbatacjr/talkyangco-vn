<?php
get_header();
?>
<div class="container">
	<div class="row">
		<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?>
				<div class="col-xs-12">
					<h1><?= the_title(); ?></h1>
					<?php the_content(''); ?>
					<div class="spacer"></div>
					<div class="spacer"></div>
				</div>
			<?php endwhile;
			endif; ?>
	</div>
</div>

<?php 
get_footer();