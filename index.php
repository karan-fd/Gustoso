<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Gustoso</title>
    <!-- Splide Slider CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/css/splide.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/icons/favicon.svg" type="image/x-icon">
    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Header Section Starts -->
    <header class="header--section" id="headerSection">
        <div class="container">
            <hgroup class="header--box">
                <div class="header--logo">
                    <h1><a href="#" title="Gistoso">Gustoso</a></h1>
                </div>
                <nav class="header--nav">
                    <ul class="menuList">
                        <li><a href="#" title="Welcome">Welcome</a></li>
                        <li><a href="#" title="Menu">Menu</a></li>
                        <li><a href="#" title="Reservations">Reservations</a></li>
                        <li><a href="#" title="News">News</a></li>
                        <li><a href="#" title="Contact">Contact</a></li>
                    </ul>
                    <div class="header--menuBar">
                        <button class="menuBar" id="menuBar" aria-label="menu-bar-toggler">
                            <span></span><span></span><span></span><span></span>
                        </button>
                    </div>
                </nav>
                <ul class="socialIcons">
                    <li><a href="https://twitter.com/" title="Twitter" target="_blank" rel="noreferrer">
                            <img src="img/icons/twitter.png" alt="twitter-logo">
                        </a></li>
                    <li><a href="https://facebook.com/" title="Facebook" target="_blank" rel="noreferrer">
                            <img src="img/icons/facebook.png" alt="facebook-logo">
                        </a></li>
                    <li><a href="https://instagram.com/" title="Instagram" target="_blank" rel="noreferrer">
                            <img src="img/icons/instagram.png" alt="instagram-logo">
                        </a></li>
                </ul>
            </hgroup>
        </div>
    </header>
    <section class="mobileMenu--section">
        <div class="mobileMenu--container">
            <nav class="mobileMenu--nav">
                <ul class="menuList">
                    <li><a href="#" title="Welcome">Welcome</a></li>
                    <li><a href="#" title="Menu">Menu</a></li>
                    <li><a href="#" title="Reservations">Reservations</a></li>
                    <li><a href="#" title="News">News</a></li>
                    <li><a href="#" title="Contact">Contact</a></li>
                </ul>
                <ul class="socialIcons">
                    <li><a href="https://twitter.com/" title="Twitter" target="_blank" rel="noreferrer">
                            <img src="img/icons/twitter.png" alt="twitter-logo">
                        </a></li>
                    <li><a href="https://facebook.com/" title="Facebook" target="_blank" rel="noreferrer">
                            <img src="img/icons/facebook.png" alt="facebook-logo">
                        </a></li>
                    <li><a href="https://instagram.com/" title="Instagram" target="_blank" rel="noreferrer">
                            <img src="img/icons/instagram.png" alt="instagram-logo">
                        </a></li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- Header Section Ends -->
    <!-- Banner Section Starts -->
    <section class="banner--section" id="bannerSection">
        <div class="banner--bg"><img src="img/bg/banner--bg.png" alt=""></div>
        <div class="container">
            <div class="banner--textbox">
                <h2>Pastry with love</h2>
                <img src="img/banner--line.png" alt="">
                <p>We’re bringing you fresh ingredients every day in ways you can’t resist.</p>
                <div class="btn--holder">
                    <a href="#" title="Our Menu" class="btn">Our Menu</a>
                </div>
            </div>
        </div>
        <a href="#aboutSection" class="center--icons">
            <figure>
                <img src="img/center--bread.png" alt="">
            </figure>
        </a>
    </section>
    <!-- Banner Section Ends -->
    <!-- About Section Starts -->
    <section class="about--section" id="aboutSection" style="background: url(img/bg/about--bg.png)center center no-repeat; background-size:cover;">
        <div class="container">
            <div class="about--box">
                <div class="about--textBox">
                    <div class="section--title __center">
                        <h3>Art of cakes</h3>
                        <p>we create delicious memories</p>
                    </div>
                    <div class="text">
                        <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed.</p>
                        <article>
                            <h4>Chef Cook</h4>
                            <div class="imgText">
                                <h4>Benito</h4>
                                <figure>
                                    <img src="img/persons/chef--cook.png" alt="">
                                </figure>
                                <h4>Gaspare</h4>
                            </div>
                            <p class="quoted--msg">Unique creations for unique<br>
                                occasions.</p>
                        </article>
                    </div>
                </div>
                <div class="about--imgBox">
                    <?php
                    $array = array(
                        ['imgPath' => "aoc-tl",],
                        ['imgPath' => "aoc-tr",],
                        ['imgPath' => "aoc-bl",],
                        ['imgPath' => "aoc-br",],
                    );
                    foreach ($array as $aboutImg) { ?>
                        <figure class="about--img">
                            <img src="img/<?php echo $aboutImg['imgPath'] ?>.png" alt="">
                        </figure>
                    <?php } ?>
                    <div class="about--img_infoText">
                        <img src="img/icons/about-noticetext-layer.png" alt="">
                        <h6>TASTES SO
                            GOOD!</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section Ends -->
    <!-- Info Section Starts -->
    <section class="info--section" id="infoSection" style="background: url(img/bg/info--bg.png)center center no-repeat; background-size:cover;">
        <div class="container">
            <div class="info--box">
                <article class="info--detailCard">
                    <div class="info--detailImg">
                        <img src="img/info-detail-img.png" alt="">
                    </div>
                    <div class="info--detailText">
                        <div class="section--title">
                            <h3>Tasty pancakes</h3>
                            <p>season favourite</p>
                        </div>
                        <div class="text">
                            <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus.</p>
                        </div>
                        <div class="rating">
                            <img src="img/icons/info-star-rating.png" alt="">
                        </div>
                        <div class="info--sliderBox">
                            <div class="info--imgSlider splide" id="info--imgSlider">
                                <div class="splide__slider">
                                    <div class="splide__track">
                                        <div class="splide__list">
                                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                <div class="splide__slide">
                                                    <div class="info--img">
                                                        <img src="img/info-item-img.png" alt="">
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="info--minuteCard" style="background: url(img/bg/info-minute-bg.png)center center no-repeat; background-size:cover;">
                    <h6>
                        READY IN
                        <span>40</span>
                        mins
                    </h6>
                </article>
            </div>
        </div>
    </section>
    <!-- Info Section Ends -->
    <!-- Menu Section Starts -->
    <section class="menu--section" id="menuSection" style="background: url(img/bg/menu--bg.png)center center no-repeat; background-size:cover;">
        <div class="menu--layer">
            <img src="img/menu-bg-layer.png" alt="">
        </div>
        <div class="container">
            <div class="menu--box">
                <div class="menu--details">
                    <div class="section--title __center">
                        <h3>Breakfast</h3>
                        <p>7am Breakfast? we’re open!</p>
                    </div>
                    <ul class="menuLists">
                        <li>
                            <h4>Full breakfast</h4>
                            <p>Duis ut tortor, et risus, vulputate pretium</p>
                            <div class="price">$12.49</div>
                            <img src="img/menu-list-icon.png" alt="">
                        </li>
                        <li>
                            <h4>Toast & Jam</h4>
                            <p>Suspendisse, tempus, nterdum</p>
                            <div class="price">$4.90</div>
                            <img src="img/menu-list-icon.png" alt="">
                        </li>
                        <li>
                            <h4>Muffins</h4>
                            <p>Fusce eget dui sodales est</p>
                            <div class="price">$3.95</div>
                            <img src="img/menu-list-icon.png" alt="">
                        </li>
                    </ul>
                </div>
                <div class="menu--cards">
                    <?php for ($i = 1; $i <= 3; $i++) { ?>
                        <article class="menu--card">
                            <div class="estd--layer">
                                <div class="estd--value">
                                    <span>EST.</span>
                                    <span>1893</span>
                                </div>
                                <img src="img/menu-card-title-layer.png" alt="">
                            </div>
                            <div class="menu--text">
                                <h5>Your morning
                                    Escape with Flair</h5>
                                <p>Donec vitae sapien ut libero venenatis faucibus.
                                    Nullam quis ante. Etiam sit amet orci eget eros
                                    faucibus tincidunt. Duis leo.</p>
                                <div class="btn--holder">
                                    <a href="#" title="Read" class="btn btn--bordered">Read</a>
                                </div>
                            </div>
                        </article>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Menu Section Ends -->
    <!-- Recipe Section Starts -->
    <section class="recipe--section" id="recipeSection">
        <div class="recipe--layer"><img src="img/recipe--layer.png" alt=""></div>
        <div class="container">
            <div class="section--title __center">
                <h3>The Jibarito sandwich</h3>
                <p>the best sandwich you’ve ever tasted!</p>
            </div>
            <div class="recipe--box">
                <div class="recipe--leftContent">
                    <div class="recipe--leftItem">
                        <figure><img src="img/recipe--item-img.png" alt=""></figure>
                        <h4>Class aptent</h4>
                        <p>Quot alienum persecuti ut eam, nam ad
                            atqui primis nusquam.</p>
                    </div>
                    <div class="recipe--leftItem">
                        <figure><img src="img/recipe--item-img.png" alt=""></figure>
                        <h4>Nulla eget</h4>
                        <p>Nullam dictum felis eu pede mollis
                            pretium Integer tincidunt.</p>
                    </div>
                    <div class="recipe--leftItem">
                        <figure><img src="img/recipe--item-img.png" alt=""></figure>
                        <h4>Sed nibh purus</h4>
                        <p> Aenean eleifend tellus leo ligula,
                            porttitor eu, consequat vitae.</p>
                    </div>
                </div>
                <div class="recipe--rightContentDiv">
                    <div class="recipe--rightContent">
                        <figure class="recipe--rightImg"><img src="img/recipe--right-img.png" alt=""></figure>
                        <div class="recipe--rightInfo">
                            <article class="info--minuteCard">
                                <h6>
                                    PREP
                                    <span>15</span>
                                    mins
                                </h6>
                            </article>
                            <article class="info--minuteCard">
                                <h6>
                                    COOK
                                    <span>35</span>
                                    mins
                                </h6>
                            </article>
                            <article class="info--minuteCard" style="background: url(img/bg/info-minute-bg.png)center center no-repeat; background-size:cover;">
                                <h6>
                                    READY IN
                                    <span>50</span>
                                    mins
                                </h6>
                            </article>
                        </div>
                        <div class="btn--holder">
                            <a href="#" title="Full Recipe" class="btn btn--white">Full Recipe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Recipe Section Ends -->
    <!-- Footer Section Starts -->
    <footer class="footer--section" id="footerSection">
        <div class="container">
            <div class="footer--box">
                <nav class="footer--nav">
                    <ul class="menuList">
                        <li><a href="#" title="Our Menu">Our Menu</a></li>
                        <li><a href="#" title="Gallery">Gallery</a></li>
                        <li><a href="#" title="Culture">Culture</a></li>
                    </ul>
                </nav>
                <div class="footer--logo">
                    <h6><a href="#" title="Gistoso">Gustoso</a></h6>
                </div>
                <nav class="footer--nav">
                    <ul class="menuList">
                        <li><a href="#" title="Events">Events</a></li>
                        <li><a href="#" title="Catering">Catering</a></li>
                        <li><a href="#" title="Visit Us">Visit Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
    <!-- Footer Section Ends -->
    <!-- Splide Slider JS -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/js/splide.min.js"></script>
    <!-- Custom JS -->
    <script src="js/app.js"></script>
</body>

</html>