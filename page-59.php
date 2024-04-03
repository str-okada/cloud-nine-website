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


    <?php
    $args = array(
        'posts_per_page'   => 5, // 読み込みたい記事数（全件取得時は-1）
        'category'         => 1, // 読み込みたいカテゴリID（複数の場合は '1,2'）
        'orderby'          => 'ID', // 何順で記事を読み込むか（省略時は日付順）
        'order'            => 'DESC', // 昇順(ASC)か降順か(DESC）
        'exclude'          => '111, 125', // 一覧に表示したくない記事のID（複数時は,区切り）
    );

    //配列で指定した内容で、記事情報を取得
    $datas = get_posts($args);
    ?>

    <?php
    if ($datas) :
        foreach ($datas as $post) : //var_dump($post); 
    ?>
            <?php $img = get_thumbnails(); ?>
            <section class="page-section">
                <div class="container">
                    <div class="product-item">
                        <div class="product-item-title d-flex">
                            <div class="bg-faded p-5 d-flex me-auto rounded">
                                <a href="<?php the_permalink() ?>">
                                    <h2 class="section-heading mb-0">
                                        <span class="section-heading-upper">
                                            <?php // echo $post->post_title; 
                                            ?>
                                        </span>
                                        <span class="section-heading-lower">
                                            <?php echo $post->post_title; ?>
                                        </span>
                                    </h2>
                                </a>
                            </div>
                        </div>
                        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="<?php echo $img[0]; ?>" alt="cloud9" />
                        <div class="product-item-description d-flex ms-auto">
                            <div class="bg-faded p-5 rounded">
                                <p class="mb-0">
                                    <?php the_content(); ?>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <?php
        endforeach;
    endif;
    wp_reset_postdata(); ?>

    <?php get_template_part('includes/footer') ?>

    <?php get_footer(); ?>

</body>

</html>