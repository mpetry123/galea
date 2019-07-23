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

$footer_address = get_field("contact_info_address", "options");
$footer_copyright = get_field("footer_copyright", "options");
$footer_privacy_policy = get_field("footer_privacy_policy", "options");
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
				<address>
					<?= $footer_address; ?>
				</address>
				<div class="notes">
					<a href="<?= $footer_privacy_policy['url']; ?>">
						<?= $footer_privacy_policy['title']; ?>
					</a>
					<span>
						<?= $footer_copyright; ?>
					</span>
					<span>
						Designed and built by Community
					</span>
				</div>
			</div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php unset($footer_address, $footer_copyright, $footer_privacy_policy);
wp_footer(); ?>
</body>
</html>
