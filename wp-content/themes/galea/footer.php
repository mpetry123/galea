<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package galea
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer bg-black">
		<div class="container">
			<div class="nav-and-logo">
				<a href="/static/page-home.php">
					<img alt="logo" src="/wp-content/themes/galea/dist/img/logo-img-bottom.svg" />
				</a>
				<?php
					wp_nav_menu( array( 
						'theme_location' => 'footer',
						'container' => 'nav',
						'menu_class' => "nav"
					) ); 
				?>
			</div>
			<div class="address-and-notes">
				<address>199 Avenue Road Toronto ON M5R 2J3</address>
				<div class="notes">
					<a href="#privacy-policy">Privacy Policy</a>
					<span>2019 The Institute of Human Mechanics</span>
					<span>Desined and bullt by Community</span>
				</div>
			</div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
