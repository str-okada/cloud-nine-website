<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">Cloud9について</span>
            <span class="site-heading-lower">About us</span>
        </h1>
    </header>

    <?php get_template_part('includes/header'); ?>
    <?php $img = get_thumbnails(); ?>
    
    <section class="page-section">
        <div class="container">
            <div class="product-item">
                <div class="product-item-title d-flex">
                    <div class="bg-faded p-5 d-flex me-auto rounded">
                        <h2 class="section-heading mb-0">
                            <span class="section-heading-upper">地域イベント</span>
                            <span class="section-heading-lower">地域イベント</span>
                        </h2>
                    </div>
                </div>
                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="<?php echo $img[0]; ?>" alt="..." />
                <div class="product-item-description d-flex ms-auto">
                    <div class="bg-faded p-5 rounded">
                        <p class="mb-0">Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('includes/footer') ?>

    <?php get_footer(); ?>

</body>

</html>