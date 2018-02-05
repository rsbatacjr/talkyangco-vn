<?php 
/*
 * Template Name: Category List
 */
	get_header("mobile");
?>
<div class="container">
	<!-- <?php while (have_posts()) : the_post(); ?>
			<div class="col-xs-12">
				<div style="display: block;">
					<div class="mask" style="min-height: 300px;">
						<h1><?php the_title(); ?></h1>
						<div class="clearfix"></div>
					</div>
				</div>
				
			</div>
	<?php endwhile; ?> -->
	
	<div class="row">
		<?php while (have_posts()) : the_post(); ?>
			<div class="col-xs-12">
				<h1><?php the_title(); ?></h1>
			</div>
	<?php endwhile; ?>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th style="width: 10%;">Number</th>
						<th>Title</th>
						<th style="width: 20%">Author</th>
						<th style="width: 10%;">Date</th>
						<th style="width: 10%;">Views</th>
					</tr>
				</thead>
				<tbody>
					<?php
					listByPostType();
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php
	get_footer("mobile");