<?php
/**
 * Template Name: Page Services
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
$upper_section = $content_blocks[1];
$packages = $content_blocks[2];
?>
<section id="hero" class="hero bg-gray">
    <div class="container">
        <h1 class="page-heading">
            <?= get_the_title(); ?>
        </h1>
        <div class="row order-invert-desktop">
            <div class="column">
                <img src="<?= $hero['featured_image']['url']; ?>" width="510" alt="<?= $hero['featured_image']['alt']; ?>" />
            </div>
            <div class="column align-center">
                <div class="copy centered">
                    <strong class="stand-out">
                        <?= $hero['heading']; ?>
                    </strong>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="services" class="bg-white">
    <div class="container">
        <div class="row">
            <div class="column">
                <div class="copy centered">
                    <h2 class="heading">
                        <?= $upper_section['columns'][0]['heading']; ?>
                    </h2>
                    <?= $upper_section['columns'][0]['body_copy']; ?>
                </div>
            </div>
            <div class="column">
                <div class="copy centered">
                    <h2 class="heading">
                        <?= $upper_section['columns'][1]['heading']; ?>
                    </h2>
                    <?= $upper_section['columns'][1]['body_copy']; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column align-center justify-left">
                <img src="<?= $packages['section_featured_image']['url']; ?>" alt="<?= $packages['section_featured_image']['alt']; ?>" />
            </div>
            <div class="column align-center  justify-right">
                <div class="copy centered">
                <h2 class="stand-out">
                    <?= $packages['section_heading']; ?>
                </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column justify-left">
                <div class="copy centered">
                <h2 class="heading">
                    <?= $packages['columns'][0]['heading']; ?>
                </h2>
                <?= $packages['columns'][0]['body_copy']; ?>
                </div>
            </div>
            <div class="column justify-right">
                <div class="copy centered">
                    <h2 class="heading">
                        <?= $packages['columns'][1]['heading']; ?>
                    </h2>
                    <?= $packages['columns'][1]['body_copy']; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column justify-left">
                <div class="copy centered">
                    <h2 class="heading">
                        <?= $packages['columns'][2]['heading']; ?>
                    </h2>
                    <?= $packages['columns'][2]['body_copy']; ?>
                    </div>
            </div>
            <div class="column  justify-right">
                <div class="copy centered">
                    <h2 class="heading">
                        <?= $packages['columns'][3]['heading']; ?>
                    </h2>
                    <?= $packages['columns'][3]['body_copy']; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column justify-left">
                <div class="copy centered">
                    <h2 class="heading">
                        <?= $packages['columns'][4]['heading']; ?>
                    </h2>
                    <?= $packages['columns'][4]['body_copy']; ?>
                </div>
            </div>
            <div class="column justify-right">
                <div class="copy centered">
                    <h2 class="heading">
                        <?= $packages['columns'][5]['heading']; ?>
                    </h2>
                    <?= $packages['columns'][5]['body_copy']; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('components/contact-us'); ?>
<?php
unset( $content_blocks, $hero, $upper_section, $packages );
get_footer();
?>