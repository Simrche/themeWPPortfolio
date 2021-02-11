<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Moi
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			$data = get_fields();
		?>

		<div class="portfolio">
			<div class="portfolio-header" style='background-color:<?=$data['color']?>'>
				<h1><?php the_title()?></h1>

				<?php if(!empty($data['client'])) : ?>
				<p>Client : <?=$data['client']?></p>
				<?php endif; ?>
			</div>
			<div class="portfolio-content">
				<p><?php the_content()?></p>
			</div>
		</div>

		<?php

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
