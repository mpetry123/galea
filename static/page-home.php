<?php
require_once('./header.php');
?>
    <section id="hero" class="hero bg-image">
        <div class="background-image" style="background-image: url('./dist/img/hero-img-page-home.jpg');"></div>
        <div class="container">
            <div class="callout">
                <strong class="stand-out">The Future of you</strong>
                <a href="./page-about.php" class="cta">Learn More</a>
            </div>
        </div>
    </section>
    <section id="about-us" class="bg-gray">
        <div class="container">
            <div class="text-and-media">
                <div class="content-text">
                    <h2 class="heading">About Us</h2>
                    <p>Visualize your body, and internalize its form. Your 
                        <br>bones are not just bones. They are immaculate 
                        <br>pieces of biological construction designed to move, 
                        <br>flex and adapt at every joint.</p>
                    <p>Your muscles are not just muscles. They are an 
                        <br>intricate system of power and force that react at 
                        <br>light speed so we can push, pull, lift and go further.</p>
                    <p>Your mind is not just your mind. It is the command 
                        <br>centre for every signal you send, every action you 
                        <br>complete, and every thought you think.</p>
                    <p>And your body? It’s not just your body. It’s your 
                        <br>machine.</p>
                    <p>This is The Institute of Human Mechanics.
                        <br>Optimize your machine.</p>
                    <a href="./page-about.php" class="cta">Learn More</a>
                </div>
                <div class="content-media">
                    <img src="./dist/img/feat-img-about-us-cropped.png" alt="About Us Featured Image" />
                </div>
            </div>
        </div>
    </section>
    <section id="our-services">
        <div class="container">
            <div class="text-and-media order-invert-desktop">
                <div class="content-text">
                    <h2 class="heading">Our Services</h2>
                    <p>With a focus on ground-breaking technology and 
                    medical innovations, The Institute of Human Mechanics 
                    is the world’s premier hub for regenerative medicine. 
                    IHM provides our patients a superior level of care, while focusing on alternative treatments for osteoarthritis and sports-related muscle, ligament, and tendon injuries. 
                    With our patented CytoRich technology (approved by Health Canada), patients are discovering a new potential they never thought possible. As part of our commitment 
                    to help our patients get the absolute most of their lives, IHM is proud to welcome the TMB MedSpa and their cosmetic and and their full suite of body sculpting 
                    services to our clinic in Toronto.
                    </p>
                    <a href="./page-about.php" class="cta">Learn More</a>
                </div>
                <div class="content-media">
                    <img src="./dist/img/feat-img-our-services-cropped.png" alt="Our Services" />
                </div>
            </div>
        </div>
    </section>
    <section id="the-doctors" class="bg-black">
        <div class="container text-and-media">
            <div class="content-text">
                <h2 class="heading">The Doctors</h2>
                <p>While each of our doctors have different expertise in a 
                    <br>wide variety of medical fields and specialties, a common vision 
                    <br>brings them together and guides their practice. Each is absolutely 
                    <br>dedicated to conducting their own research, forming new studies, and 
                    <br>executing their own clinical trials. The group of practitioners at IHM 
                    <br>is completely unique in this respect, and results in the absolute 
                    <br>best results, progress and care for our patients.</p>
                <a href="./page-about.php" class="cta">Learn More</a>
            </div>
            <div class="content-media">
                <img src="./dist/img/feat-img-the-doctors.jpg" alt="Our Services" />
            </div>
        </div>
    </section>
    <section id="gallery">
        <div class="container align-center">
            <h2 class="heading">Gallery</h2>
            <p>Take a look around our state-of-the-art clinic.</p>
            <a href="#gallery" class="cta">See All</a>
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
    <?php require('./component-contact-us.php'); ?>
<?php
require_once('./footer.php');
?>