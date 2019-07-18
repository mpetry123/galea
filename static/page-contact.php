<?php
require_once('./header.php');
?>
<section id="hero" class="hero bg-black">
    <div class="container">
    <h1 class="page-heading">Contact</h1>
        <div class="row">
            <div class="column align-center">
                <div class=" justify-center">
                    <h2 class="heading stand-out">GET IN <br> TOUCH</h2>
                </div>
                <div class="clip clip-m-shape with-content bg-white location-and-contact-info">
                    <address>199 Avenue Rd Toronto M5R 2J3</address>    
                    <div class="break"></div>
                    <p>
                        <strong>Phone</strong><a href="tel:1416123123">416.123.123</a>
                        <br>
                        </strong>Fax</strong><a href="tel:1416123123">416.123.123</a>
                        <br>
                        <strong>Email</strong><a href="mailto:email@email.com">email@email.com</a>
                    </p>
                </div>
            </div>
            <div class="column">
                <img src="./dist/img/hero-feat-img-map.png" alt="About Us Featured Image" />
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="multi-column">
            <div class="content">
                <img src="./dist/img/feat-img-contact.png" alt="" />
            </div>
            <div class="content">
                <h2 class="heading">Leave us a message</h2>
                <div class="break"></div>
                <form>
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" />
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="text" name="name" />
                    </div>
                    <div>
                        <label>Phone</label>
                        <input type="text" name="name" />
                    </div>
                    <div>
                        <label>Message</label>
                        <textarea name="message">
                        </textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
require_once('./footer.php');
?>



