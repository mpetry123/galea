<?php
/**
 * Template Name: Page Gallery
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

$content_blocks = get_field("content_blocks");
$hero = $content_blocks[0];
$gallery = $content_blocks[1];
?>
<section id="hero" class="hero">
    <div class="container">
        <h1 class="page-heading">
            <?= the_title(); ?>
        </h1>
        <div class="row order-invert-desktop">
            <div class="column">
                <img src="<?= $hero['featured_image']['url']; ?>" alt="<?= $hero['featured_image']['alt']; ?>" />
            </div>
            <div class="column align-center">
                    <div class="copy centered">
                        <h2 class="heading">
                            <?= $hero['heading']; ?>
                        </h2>
                        <div class="body-copy">
                            <?= $hero['body_copy']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="gallery" class="bg-black">
    <div class="container align-center">
        <!-- Swiper -->
        <div class="gallery">
            <div class="swiper-container-wrapper">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <? foreach( $gallery['slides'] as $slide) : ?>
                        <div class="swiper-slide">
                            <div class="bg-image" style="background: url('<?= $slide['photo']['url']; ?>');"></div>
                            <div class="copy">
                                <h3 class="heading">
                                    <?= $slide['photo']['heading']; ?>
                                </h3>
                                <div class="description">
                                    <?= $slide['photo']['description']; ?>
                                </div>
                            </div>
                        </div>
                    <? endforeach; ?>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>
<?php
get_template_part('components/contact-us');
get_footer();
?>


<!--div class="swiper-slide">
                            <div class="bg-image" style="background: url('/wp-content/themes/galea/dist/img/img-slide-placeholder.jpg');"></div>
                            <div class="copy">
                                <h3 class="heading">Image Title</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
                                <br>eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim 
                                <br>ad minim veniam, quis nostrud exercitation.</p>
                            </div>
                        </div-->