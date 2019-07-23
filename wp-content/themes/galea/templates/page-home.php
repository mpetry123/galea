<?php
/**
 * Template Name: Page Home
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
$about_us = $content_blocks[1];
$our_services = $content_blocks[2];
$doctors = $content_blocks[3];
$gallery = $content_blocks[4];
?>
    <section id="hero" class="hero bg-image">
        <div class="background-image" style="background-image: url('<?= $hero['featured_image']['url']; ?>');"></div>
        <div class="container">
            <h1 class="page-heading">
                <?= get_the_title(); ?>
            </h1>
            <div class="callout">
                <strong class="stand-out">
                    <?= $hero['heading']; ?>
                </strong>
                <?php if( $hero['display_cta'] ) : ?>
                    <a href="<?= $hero['cta']['url']; ?>" title="<?= $hero['cta']['title']; ?>" class="cta"><?= $hero['cta']['title']; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section id="about-us" class="bg-gray">
        <div class="container">
            <div class="row">
                <div class="column justify-left">
                    <div class="copy">
                        <h2 class="heading"><?= $about_us['heading']; ?></h2>
                        <?= $about_us["body_copy"]; ?>
                        <a href="<?= $about_us['cta']['url']; ?>" class="cta"><?= $about_us['cta']['title']; ?></a>
                    </div>
                </div>
                <div class="column">
                    <picture>
                        <img src="<?= $about_us['featured_image']['url']; ?>" alt="<?= $about_us['featured_image']['alt']; ?>" />
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <section id="our-services" class="bg-white">
        <div class="container">
            <div class="row <?= $our_services['order']; ?>">
                <div class="column align-center justify-left">
                    <div class="copy">
                        <h2 class="heading"><?= $our_services['heading']; ?></h2>
                        <?= $our_services["body_copy"]; ?>
                        <a href="<?= $our_services['cta']['url']; ?>" class="cta"><?= $our_services['cta']['title']; ?></a>
                    </div>
                </div>
                <div class="column justify-left">
                <picture>
                        <img src="<?= $our_services['featured_image']['url']; ?>" alt="<?= $our_services['featured_image']['alt']; ?>" />
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <section id="the-doctors" class="bg-black">
        <div class="container">
            <div class="row">
                <div class="column align-center">
                    <div class="copy centered">
                        <h2 class="heading"><?= $doctors['heading']; ?></h2>
                        <div class="justify-self justify-self-center">
                        <?= $doctors["body_copy"]; ?>
                        <a href="<?= $doctors['cta']['url']; ?>" class="cta"><?= $doctors['cta']['title']; ?></a>
                    </div>
                </div>
                <div class="column">
                    <picture>
                        <img src="<?= $doctors["featured_image"]["url"]; ?>" alt="<?= $doctors["body_copy"]["alt"]; ?>" />
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery" class="bg-white">
        <div class="container">
            <div class="copy align-center">
                <h2 class="heading"><?= $gallery['heading']; ?></h2>
                <?= $gallery['body_context']; ?>
                <a href="<?= $gallery['cta']['url']; ?>" class="cta"><?= $gallery['cta']['title']; ?></a>
            </div>
            <!-- Swiper -->
            <div class="gallery">
                <div class="swiper-container-wrapper">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <? foreach( $gallery['slides'] as $slide) : ?>
                            <div class="swiper-slide">
                                <div class="bg-image" style="background: url('<?= $slide['photo']['url']; ?>);"></div>
                            </div>
                            <? endforeach; ?>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('components/contact-us'); ?>
<?php
unset( $content_blocks, $hero, $about_us, $our_services, $doctors, $gallery );
get_footer();
?>