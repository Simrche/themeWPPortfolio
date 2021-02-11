<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moi
 */

?>

	<footer id="colophon" class="site-footer">
		<section id='sectionFooter'>
			<div class='divFooter'>
				<h2>Moi</h2>
				<hr>
				<p>
					Pour assurer une bonne entente entre nous, le tutoiement est obligatoire. Tout vouvoiement entrainera le bannissement de ton IP de ce blog.
				</p>
			</div>
			<div class='divFooter'>
				<h2>Si tu apprecie la lecture</h2>
				<hr>
				<a href="<?php echo get_permalink(3); ?>">Mentions légales</a>
				<a href="<?php echo get_permalink(3); ?>">Politique de Confidentialité</a>
			</div>
			<div class='divFooter'>
				<h2>Me retrouver</h2>
				<hr>
				<a href="https://www.instagram.com/simonrche/">Instagram</a>
				<a href="https://twitter.com/Simrche">Twitter</a>
				<a href="https://github.com/Simrche">GitHub</a>
			</div>
		</section>
		<section id='fin'>
			<p id='pFin'>© 2020, Simon Roche. All rights reserved.</p>
		</section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
