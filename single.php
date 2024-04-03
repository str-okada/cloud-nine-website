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
            <span class="site-heading-lower"><?php the_title();?></span>
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
                                ここに詳細情報
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