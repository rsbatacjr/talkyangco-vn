<?php
get_header();
?>

<div class="row">
	<div class="container">
			<?php if (have_posts()) :
				while (have_posts()) : the_post(); ?>

					<div class="post">
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