<?php
/**
 * Template Name: Page About
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
$our_vision = $content_blocks[1];
$services = $content_blocks[2];
?>

<section id="hero" class="hero bg-black">
    <div class="container">
        <h1 class="page-heading">
            <?= get_the_title(); ?>
        </h1>
        <div class="row order-invert-desktop">
            <div class="column">
                <picture>
                    <img src="<?= $hero['featured_image']['url']; ?>" width="510" alt="<?= $hero['featured_image']['alt']; ?>" />
                </picture>
            </div>
            <div class="column align-center">
                <div class="copy centered">
                    <strong class="stand-out">
                        <?= $hero['heading']; ?>
                    </strong>
                    <?php if( $hero['display_cta'] ) : ?>
                        <a href="<?= $hero['cta']['url']; ?>" title="<?= $hero['cta']['title']; ?>" class="cta"><?= $hero['cta']['title']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="our-vision" class="bg-gray">
    <div class="container">
        <div class="multi-column order-invert-desktop align-vertical-center">
            <div class="content justify-center">
                <div class="copy centered">
                    <h2 class="heading"><?= $our_vision['heading']; ?></h2>
                    <?= $our_vision['body_copy']; ?>
                </div>
            </div>
            <div class="content">
                <img src="/wp-content/themes/galea/dist/img/feat-img-our-vision.png" alt="Our Vision" />
            </div>
        </div>
    </div>
</section>
<section id="understanding-prp">
    <div class="container">
        <div class="multi-column">
            <div class="column">
                <div class="copy">
                <? if($services["section_heading"]) : ?>
                    <h2 class="stand-out"><?= $services["section_heading"]; ?></h2>
                <? endif; ?>
                <? if($services["section_cta"]) : ?>
                    <a href="<?= $services["section_cta"]["url"]; ?>" class="cta"><?=$services["section_cta"]["title"]; ?></a>
                <? endif; ?>
                </div>
            </div>
            <? foreach( $services['columns'] as $column) : ?>
            <div class="column">
                <div class="copy">
                    <h2 class="heading"><?php echo $column["heading"]; ?></h2>
                    <?php echo $column["body_copy"]; ?>
                </div>
            </div>
            <? endforeach; ?>
        </div>
    </div>
</section>
<?php get_template_part('components/contact-us'); ?>
<?php
get_footer();
?>