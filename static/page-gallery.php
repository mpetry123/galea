<?php
require_once('./header.php');
?>

<section id="hero" class="hero">
    <div class="container multi-column">
        <div class="callout">
            <h2 class="heading">Gallery Overview</strong>
            <p>Our clinic is not just a space – it is the physical embodiment of our philosophy as doctors and practitioners, and a sanctuary for our patients. We hope you find it comfortable, exciting, modernly rejuvenating,</p>
            <a href="./page-about.php" class="cta">Learn More</a>
        </div>
        <div class="media">
        <img src="./dist/img/hero-feat-img-gallery.png" alt="About Us Featured Image" />
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
                        <div class="swiper-slide">
                            <div class="bg-image" style="background: url('./dist/img/img-slide-placeholder.jpg');"></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-image" style="background: url('./dist/img/img-slide-placeholder.jpg');"></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-image" style="background: url('./dist/img/img-slide-placeholder.jpg');"></div>
                        </div>
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
<?php
require_once('./footer.php');
?>