<?php
require_once('./header.php');
?>
    <section id="hero" class="hero bg-image">
        <div class="background-image" style="background-image: url('./dist/img/hero-img-page-home.jpg');"></div>
        <div class="container">
            <div class="callout">
                <strong class="stand-out">The Future of you</strong>
                <a href="./page-about.php" class="cta">Contact Us</a>
            </div>
        </div>
    </section>
    <section id="about-us" class="bg-gray">
        <div class="container">
            <div class="row">
                <div class="column justify-left">
                    <div class="copy">
                        <h2 class="heading align-left">About Us</h2>
                        <div class="break"></div>
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
                            <div class="break"></div>
                        <a href="./page-about.php" class="cta">Learn More</a>
                    </div>
                </div>
                <div class="column">
                    <picture>
                        <img src="./dist/img/feat-img-about-us.png" alt="About Us Featured Image" />
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <section id="our-services">
        <div class="container">
            <div class="row order-invert-desktop">
                <div class="column align-center justify-left">
                    <div class="copy">
                        <h2 class="heading align-left">Our Services</h2>
                        <div class="break"></div>
                        <p>With a focus on ground-breaking technology and 
                        <br>medical innovations, The Institute of Human Mechanics 
                        <br>is the world’s premier hub for regenerative medicine. 
                        <br>IHM provides our patients a superior level of care, while 
                        <br>focusing on alternative treatments for osteoarthritis and 
                        <br>sports-related muscle, ligament, and tendon injuries. 
                        <br>With our patented CytoRich technology (approved by 
                        <br>Health Canada), patients are discovering a new potential 
                        <br>they never thought possible. As part of our commitment 
                        <br>to help our patients get the absolute most of their 
                        <br>lives, IHM is proud to welcome the TMB MedSpa and 
                        <br>their cosmetic and and their full suite of body sculpting 
                        <br>services to our clinic in Toronto.
                        </p>
                        <div class="break"></div>
                        <a href="./page-about.php" class="cta">Learn More</a>
                    </div>
                </div>
                <div class="column justify-left">
                    <picture>
                        <img src="./dist/img/feat-img-our-services-cropped.png" alt="Our Services" />
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <section id="the-doctors" class="bg-black">
        <div class="container">
            <div class="row">
                <div class="column align-center">
                    <div class="copy">
                        <h2 class="heading justify-self justify-self-center">The Doctors</h2>
                        <div class="break"></div>
                        <div class="justify-self justify-self-center">
                        <p>While each of our doctors have different expertise in a 
                            <br>wide variety of medical fields and specialties, a common 
                            <br>vision brings them together and guides their practice. 
                            <br>Each is absolutely dedicated to conducting their own 
                            <br>research, forming new studies, and executing their own 
                            <br>clinical trials. The group of practitioners at IHM is 
                            <br>completely unique in this respect, and results in the 
                            <br>absolute best results, progress and care for our patients.</p>
                        </div>
                        <div class="break"></div>
                        <a href="./page-about.php" class="cta justify-self justify-self-center">Learn More</a>
                    </div>
                </div>
                <div class="column">
                    <picture>
                        <img src="./dist/img/feat-img-the-doctors.jpg" alt="Our Services" />
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery">
        <div class="container text-align-center">
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