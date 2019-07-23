<?php
/**
 * Template Name: Page Doctors
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
$doctors_upper_top = $content_blocks[1];
$doctors_upper_bottom = $content_blocks[2];
$family_medicine = $content_blocks[3];
?>
<section id="hero" class="hero bg-black">
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
<section>
    <div class="container">
        <div class="row order-invert-desktop">
            <div class="column align-center justify-right">
                <div class="copy centered">
                <h2 class="heading">
                    <?= $doctors_upper_top['heading']; ?>
                </h2>
                <div class="subheading position-and-credentials">
                    <?= $doctors_upper_top['subheading']; ?>
                </div>
                <?= $doctors_upper_top['body_copy']; ?>
                </div>
            </div>
            <div class="column justify-left">
                <img src="/wp-content/themes/galea/dist/img/feat-img-dr-1.png" alt="Featured Image" />
            </div>
        </div>
        <div class="row">
            <div class="column align-center justify-left">
                <div class="copy centered">
                <h2>
                    <?= $doctors_upper_bottom['heading']; ?>
                </h2>
                <div class="subheading position-and-credentials">
                    <?= $doctors_upper_bottom['subheading']; ?>
                </div>
                <?= $doctors_upper_bottom['body_copy']; ?>
                </div>
            </div>
            <div class="column justify-right">
                <img src="/wp-content/themes/galea/dist/img/feat-img-dr-2.png" alt="Featured Image" />
            </div>
        </div>
    </div>
</section>
<section id="hero" class="bg-black">
    <div class="container">
        <div class="row  order-invert-desktop">
            <div class="column align-center">
                <div class="copy centered">
                <h2 class="stand-out">
                    <?= $family_medicine['section_heading']; ?>
                </h2>
                </div>
            </div>
            <div class="column">
                <img src="<?= $family_medicine['section_featured_image']['url']; ?>" alt="<?= $family_medicine['section_featured_image']['alt']; ?>" />
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
        
        <div class="column  justify-left">
            <div class="copy centered">
                <h2 class="heading">
                    <?= $family_medicine['columns'][0]['heading']; ?>
                </h2>
                <div class="subheading position-and-credentials">
                    <?= $family_medicine['columns'][0]['subheading']; ?>
                </div>
                <div class="body-copy">
                    <?= $family_medicine['columns'][0]['body_copy']; ?>
                </div>
            </div>
        </div>
            <div class="column justify-right">
                <div class="copy centered">
                    <h2 class="heading">
                        <?= $family_medicine['columns'][1]['heading']; ?>
                    </h2>
                    <div class="subheading position-and-credentials">
                        <?= $family_medicine['columns'][1]['subheading']; ?>
                    </div>
                    <div class="body-copy">
                        <?= $family_medicine['columns'][1]['body_copy']; ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="column justify-left align-center">
                <div class="copy centered">
                    <h2 class="heading">
                        <?= $family_medicine['columns'][2]['heading']; ?>
                    </h2>
                    <div class="subheading position-and-credentials">
                        <?= $family_medicine['columns'][2]['subheading']; ?>
                    </div>
                    <div class="body-copy">
                        <?= $family_medicine['columns'][2]['body_copy']; ?>
                    </div>
                </div>
            </div>
            <div class="column justify-right">
                <img src="<?= $family_medicine['columns'][3]['featured_image']['url']; ?>" alt="<?= $family_medicine['columns'][2]['featured_image']['alt']; ?>" />
            </div>
        </div>
    </div>
</section>



<?php get_template_part('components/contact-us'); ?>

<?php
get_footer();
?>


