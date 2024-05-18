<!DOCTYPE html>
<html lang="en">

<head>
    <?php get_header(); ?>
</head>

<body>
    <header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3"><?php echo the_title(); ?></span>
            <span class="site-heading-lower">クラス紹介</span>
        </h1>
    </header>

    <?php get_template_part('includes/header'); ?>

    <?php $img = get_thumbnails(); ?>

    <section class="page-section about-heading">

        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?php echo $img[0]; ?>" alt="..." />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">

                                <!-- ここから仮データ -->
                                <!-- <div>
                                    <?php
                                    // var_dump(is_category()) 
                                    ?></div>
                                <?php
                                // if (is_category()) : 
                                ?>
                                    <span class="section-heading-upper">
                                        <?php
                                        // the_content(); 
                                        ?>
                                    </span>
                                    <span class="section-heading-lower">About me</span>
                                <?php
                                // endif; 
                                ?> -->

                                <span>Mao Okada</span>

                            </h2>
                            <p>インストラクター</p>
                            <p class="mb-0">
                                はじめまして、私は19歳の時にCloud9を立ち上げ、<br />
                                その後10年以上にわたりそのダンスチームを率いてきました。<br />
                                ダンスは私にとって生きる喜びであり、人々を魅了する力を持っていると感じています。<br />
                                私の使命は、ダンスを通じて人々に感動と喜びを与え、共に成長し、輝く未来を築くことです。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?php echo get_template_directory_uri(); ?>/assets/img/class/stylejazz.jpg" alt="..." />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                Style Jazz
                            </h2>
                            <p>★★★ 中学生以上 ★★★</p>
                            <p class="mb-0">
                                かっこよくSexyなスタイルです。<br />
                                基礎･動きのニュアンスなども確認し､それぞれの個性を活かして発揮しております。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?php echo get_template_directory_uri(); ?>/assets/img/class/stylejazzsecond.jpg" alt="..." />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                Style Jazz 中級
                            </h2>
                            <p>★★★ 小4 〜 ★★★</p>
                            <p class="mb-0">
                                Sexyで女の子らしい振付けの中に､かっこよさも加えたスタイルです。<br>
                                初心者の方でも基礎から学んでいただけます。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?php echo get_template_directory_uri(); ?>/assets/img/class/kidfirst.jpg" alt="..." />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                Kids first
                            </h2>
                            <p>★★★ 小3 〜 小5 ★★★</p>
                            <p class="mb-0">
                                KIDSクラスからレベルアップを目指したクラスです。かっこよくて可愛い振付け。<br />
                                初心者の方でも基礎から始めていきます！

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?php echo get_template_directory_uri(); ?>/assets/img/class/kidslevelup.jpg" alt="..." />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                Kids Levelup
                            </h2>
                            <p>★★★ 5歳 〜 小3 ★★★</p>
                            <p class="mb-0">
                                可愛いさとかっこよさを組み合わせたスタイルのKIDSクラスです。<br />
                                初めてのお子様でも基礎から初め､自分のペースで頑張っていただいております。
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