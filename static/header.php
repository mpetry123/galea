<?php 
    $path = explode("?",$_SERVER['REQUEST_URI']);
    $filename = basename($path[0]);
    $page_class = explode(".", $filename )[0];
    $theme_color = array( "page-about" => 0, "page-home" => 1, "page-services" => 1, "page-contact"=> 0);
    $dark_header = ( $theme_color[$page_class] == 0 ) ? true : false;
    //echo $theme_color[$page_class];
    //print_r( $_SERVER ); 
    ?>
<head>
    <title>Galea</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./vendor/css/swiper.min.css">
    <link rel="stylesheet" href="./dist/css/main.css">
</head>
<body class="<?php echo $page_class . " " . $header_theme; ?>">
    <header>
        <div class="container">
            <a href="/static/page-home.php" class="branding">
                <?php if($dark_header) : ?>
                    <img class="logo logo-desktop logo-light"  alt="logo" src="./dist/img/logo-img-full-light.svg" />
                    <img class="logo logo-mobile logo-light" alt="logo" src="./dist/img/logo-img-top-light.svg" />
                <?php else : ?>
                    <img class="logo logo-mobile logo-dark" alt="logo" src="./dist/img/logo-img-top.svg" />
                    <img class="logo logo-desktop logo-dark"  alt="logo" src="./dist/img/logo-img-full.svg" />
                <?php endif; ?>
            </a>
            <div class="hamburger-container">
                <ul class="hamburger" data-js="toggleMenu">
                    <li class=""></li>
                    <li class=""></li>
                    <li class=""></li>
                </ul>
            </div>
            <nav data-js="menu" class="dropdown">
                <ul>
                    <li>
                        <a href="./page-about.php">About</a>
                    </li>
                    <li>
                        <a href="./page-services.php">Services</a>
                    </li>
                    <li>
                        <a href="./page-doctors.php">Doctors</a>
                    </li>
                    <li>
                        <a href="./page-gallery.php">Gallery</a>
                    </li>
                    <li>
                        <a href="./page-contact.php">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>