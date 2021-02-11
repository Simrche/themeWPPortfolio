<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moi
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :

			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
			endwhile;

		else :

		endif;
		?>
		<section id='indexContent'>
			<h2 id='mesProjets'>Salut moi c'est Simon</h2>
			<img src="<?php echo get_template_directory_uri(); ?>/img/dev.png"> 
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore excepturi reprehenderit esse, magni eaque, consectetur est nostrum, voluptates illo itaque optio alias beatae fugiat. Cum suscipit vitae maxime fugiat sint. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus recusandae, explicabo sit tenetur deserunt, animi corporis deleniti eligendi autem illum obcaecati et maiores necessitatibus! Sequi dolore culpa dolorum magnam eum.</p>
			<a href="./portfolio">Me découvrir</a>
		</section>
		

	</main><!-- #main -->
	<script>
	</script>
<?php
get_footer();