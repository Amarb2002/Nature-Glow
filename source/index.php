<?php
include 'meta.php';
include 'header.php';
?>

<body>
    <!-- Preloader -header.php -->
    <!-- ##### Header Area Start #####   header.php-->
    <!-- ##### Header Area End #####  header.php -->
    <!-- ##### Hero Area Start ##### -->
    <section id="home" class="hero-area">
        <div class="hero-post-slides owl-carousel">

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/1.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2>"He who plants a tree plants a hope</h2>
                                <p>Trees are the Earth's endless effort to speak to the listening heaven..</p>
                                <div class="welcome-btn-group">
                                    <a href="login.php" class="btn alazea-btn mr-30">GET STARTED</a>
                                    <a href="index.php#Contact" class="btn alazea-btn active">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/22.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2>Save The Environment</h2>
                                <p>“Trees are poems that the earth writes upon the sky.” “To be without trees would, in the most literal way, to be without our roots.

                                </p>
                                <div class="welcome-btn-group">
                                    <a href="login.php" class="btn alazea-btn mr-30">GET STARTED</a>
                                    <a href="index.php#Contact" class="btn alazea-btn active">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Service Area Start ##### -->
    <section id="service" class="our-services-area bg-gray section-padding-100-0">
        <?php
        include './module/service.php';
        ?>
    </section>
    <!-- ##### Service Area End ##### -->

    <!-- ##### About Area Start ##### -->
    <section id="about" class="about-us-area section-padding-100-0">
        <?php
        include './module/about.php';
        ?>
    </section>
    <!-- ##### About Area End ##### -->

    <!-- ##### Portfolio Area Start ##### -->
    <section id="portfolio" class="alazea-portfolio-area section-padding-100-0">
        <?php
        include './module/portfolio.php';
        ?>
    </section>
    <!-- ##### Portfolio Area End ##### -->

    <!-- ##### Product Area Start ##### -->
    <!-- <section class="new-arrivals-products-area bg-gray section-padding-100">
        <?php
        include './module/product.php';
        ?>
    </section> -->
    <!-- ##### Product Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section id="Contact" class="contact-area section-padding-100-0">
        <?php
        include './module/contact.php';
        ?>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php
    include 'footer.php';
    ?>
</body>

</html>