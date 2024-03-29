<!DOCTYPE html>
<html lang="en">

<head>
    <?php get_header(); ?>
</head>

<body>
    <header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3"><?php echo the_title();?></span>
            <span class="site-heading-lower">Mao Okada</span>
        </h1>
    </header>

    <?php get_template_part('includes/header'); ?>
    
    <?php $img = get_thumbnails(); ?>

    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?php echo $img[0];?>" alt="..." />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                <?php if (is_category()) : ?>
                                    <span class="section-heading-upper"><?php wp_title(); the_content();?></span>
                                    <span class="section-heading-lower">About me</span>
                                <?php endif; ?>
                            </h2>
                            <p><?php echo the_title();?></p>
                            <p class="mb-0">
                                はじめまして、私は高校生の時にCloud9を立ち上げ、<br/>
                                その後10年以上にわたりそのダンスチームを率いてきました。<br/>
                                ダンスは私にとって生きる喜びであり、人々を魅了する力を持っていると信じています。<br/>
                                私の使命は、ダンスを通じて人々に感動と喜びを与え、共に成長し、輝く未来を築くことです。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('includes/footer') ?>

    <?php get_footer(); ?>
</body>

</html>