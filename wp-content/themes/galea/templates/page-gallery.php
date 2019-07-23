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
<section id="hero" class="hero bg-white">
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
        <div class="gallery with-description">
            <div class="swiper-container-wrapper">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <? foreach( $gallery['slides'] as $slide) : ?>
                        <div class="swiper-slide">
                            <div class="bg-image" style="background: url('<?= $slide['photo']['url']; ?>');"></div>
                            <div class="copy centered">
                                <h3 class="heading">
                                    <?= $slide['heading']; ?>
                                </h3>
                                <div class="description">
                                    <?= $slide['description']; ?>
                                </div>
                            </div>
                        </div>
                    <? endforeach; ?>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next light-arrow"></div>
                <div class="swiper-button-prev light-arrow"></div>
            </div>
        </div>
    </div>
</section>
<?php
unset( $content_blocks, $hero, $gallery );
get_footer();
?>