<!DOCTYPE html>
<html lang="en">

<head>
    <?php get_header(); ?>
</head>

<body>
    <header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">
            </span>
            <span class="site-heading-lower"><?php the_title(); ?></span>
        </h1>
    </header>

    <?php get_template_part('includes/header'); ?>

    <?php $img = get_thumbnails(); ?>
    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?php echo $img[0]; ?>" alt="cloud9" />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <p>
                                <?php echo the_content(); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if (get_the_title()=="地域イベント") : ?>
        <section class="page-section">
            <div class="container">
                <!-- Slider main container -->
                <div class="swiper mySwiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->

                        

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-2/2-9.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-2/2-1.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-2/2-2.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-2/2-4.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-2/2-5.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-2/2-6.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-2/2-7.jpg" alt="">
                            </div>
                        </div>
                        
                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-2/2-8.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-2/2-9.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-2/2-10.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-2/2-11.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-2/2-12.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-2/2-13.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-2/2-17.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-2/2-18.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-2/2-22.jpg" alt="">
                            </div>
                        </div>

                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="btn-wrapper">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>


    <?php if (get_the_title()=="発表会") : ?>
        <section class="page-section">
            <div class="container">
                <!-- Slider main container -->
                <div class="swiper mySwiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-1/1-1.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-1/1-2.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-1/1-3.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-1/1-4.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-1/1-5.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-1/1-6.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-1/1-7.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-1/1-8.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-1/1-9.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-1/1-10.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-1/1-11.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-1/1-12.jpg" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event-1/1-13.jpg" alt="">
                            </div>
                        </div>

                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="btn-wrapper">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>



    <?php get_template_part('includes/footer') ?>

    <?php get_footer(); ?>


</body>

</html>