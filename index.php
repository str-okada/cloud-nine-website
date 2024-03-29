<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

<head>
    <?php get_header(); ?>
</head>

<body>
    <header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">Dance team</span>
            <span class="site-heading-lower">Cloud Nine <?php echo date('Y'); ?></span>
        </h1>
    </header>

    <?php get_template_part('includes/header'); ?>

    <section class="page-section clearfix">
        <div class="container">
            <div class="intro">
                <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="http://cloud-nine-01.local/wp-content/themes/cloud01/assets/img/dance-01/image1.jpeg" alt="..." />
                <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">私たちについて</span>
                        <span class="section-heading-lower">Cloud9</span>
                    </h2>
                    <p class="mb-3">
                        Cloud9は、独自のクリエイティビティと情熱で満ち溢れたダンスチームです。ジャズのエレガンスとヒップホップのエネルギーを融合させ、独自のスタイルを築き上げています。メンバーはそれぞれの日々のスキルアップに励み、一つのステージで輝きを放っています。私たちのパフォーマンスは、ダイナミックなリズムと華麗なムーブメントが織りなすエンターテイメントです。躍動感溢れる演技は観客を魅了し、音楽と一体となって心を揺さぶります。
                    </p>
                    <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="#!">体験レッスンはこちら！</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner bg-faded text-center rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Our Promise</span>
                            <span class="section-heading-lower">To You</span>
                        </h2>
                        <p class="mb-0">
                            Cloud9は、ダンスの技術向上だけでなく、チームワークや創造性の育成にも力を入れています。和歌山の地域コミュニティとの交流やイベント参加を通じて、文化の発展に貢献しています。私たちは常に新しい挑戦を受け入れ、成長し続けることを信条としています。
                            <br />
                            <br />
                            Cloud9は、ダンスを通じて人々に喜びと活力を届けることを使命としています。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('includes/footer') ?>

    <?php get_footer(); ?>

</body>

</html>