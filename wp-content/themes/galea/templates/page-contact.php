<?php
/**
 * Template Name: Page Contact
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package galea
 */

get_header();
// Content Blocks
$content_blocks = get_field("content_blocks");
// Sections
$hero = $content_blocks[0];
$address = get_field("contact_info_address", "options");
$fax = get_field("contact_info_fax", "options");
$phone = get_field("contact_info_phone", "options");
$email = get_field("contact_info_email", "options");
$lower_section = $content_blocks[1];
?>
<section id="hero" class="hero bg-black">
    <div class="container">
    <h1 class="page-heading">
        <?= get_the_title(); ?>
    </h1>
        <div class="row order-invert-desktop">
            <div class="column align-center">
                <img src="<?= $hero['featured_image']['url']; ?>" alt="<?= $hero['featured_image']['alt']; ?>" />
            </div>
            <div class="column align-center">
                <div class="copy centered">
                    <h2 class="stand-out">
                        <span>GET IN</span>
                        <span class="large">TOUCH</span>
                    </h2>
                    <div class="bg-white location-and-contact-info clip-m-shape">
                        <address>
                            <?= $address; ?>
                        </address>    
                        <dl class="contact-data">
                            <dt class="label">Phone</dt>
                            <dd><a href="<?= $phone['url']; ?>"><?= $phone['title']; ?></a></dd>
                            <dt>Fax</dt>
                            <dd><a href="<?= $fax['url']; ?>"><?= $fax['title']; ?></a></dd>
                            <dt>Email</dt>
                            <dd><a href="<?= $email['url']; ?>"><?= $email['title']; ?></a></dd>
                        </dl>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="column">
                <img src="<?= $lower_section['featured_image']['url']; ?>" alt="<?= $lower_section['featured_image']['alt']; ?>" />
            </div>
            <div class="column">
                <h2 class="heading">
                    <?= $lower_section['heading']; ?>
                </h2>
                <?= do_shortcode("[gravityform id=". $lower_section['form_id'] ." title=false description=false ajax=true tabindex=49]"); ?>
            </div>
        </div>
    </div>
</section>

<?php
get_template_part('components/contact-us');
get_footer();
?>



