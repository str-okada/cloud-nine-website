<!DOCTYPE html>
<html lang="en">

<head>
    <?php get_header(); ?>
</head>

<body>
    <header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">レッスンスケジュール</span>
            <span class="site-heading-lower">Schedule</span>
        </h1>
    </header>

    <?php get_template_part('includes/header'); ?>

    <?php $img = get_thumbnails(); ?>

    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner bg-faded text-center rounded">
                        <h2 class="section-heading mb-5">
                            <span class="section-heading-upper">Come On In</span>
                            <span class="section-heading-lower">We're Open</span>
                        </h2>
                        <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Wednesday
                                <span class="ms-auto">6:00 PM to 8:00 PM</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Thursday
                                <span class="ms-auto">6:00 PM to 8:00 PM</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Friday
                                <span class="ms-auto">6:00 PM to 8:00 PM</span>
                            </li>
                        </ul>
                        <p class="address mb-5">
                            <em>
                                <strong>住所記載</strong>
                                <br />
                                建物記載
                            </em>
                        </p>
                        <p class="mb-0">
                            <small><em>お問い合わせはこちら</em></small>
                            <br />
                            (090) xxxx-xxxx
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?php echo $img[0]; ?>" alt="cloud9" />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">体験レッスンの詳細</span>
                                <span class="section-heading-lower">見学だけもOK</span>
                            </h2>
                            <p>
                                メンバーはそれぞれの日々のスキルアップに励み、一つのステージで輝きを放っています。私たちのパフォーマンスは、ダイナミックなリズムと華麗なムーブメントが織りなすエンターテイメントです。躍動感溢れる演技は観客を魅了し、音楽と一体となって心を揺さぶります。
                            </p>
                            <p class="mb-0">

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