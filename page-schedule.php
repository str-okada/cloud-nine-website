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
                            <span class="section-heading-lower">Come On In</span>
                        </h2>
                        <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Style Jazz 中級 (小4〜小6)
                                <span class="ms-auto">‣‣ 水曜 18:30-19:30</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Style Jazz (中学生以上)
                                <span class="ms-auto">‣‣ 水曜 19:45-20:45</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Kids first (小3〜小4)
                                <span class="ms-auto">‣‣ 木曜 18:30-19:30</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                Kids Levelup (5歳〜小3)
                                <span class="ms-auto">‣‣ 木曜 19:45-20:45</span>
                            </li>
                        </ul>

                        <p class="address mb-5">
                            <em>
                                <strong>和歌山県の橋本市を中心に活動しております</strong>
                            </em>
                        </p>
                        <p class="mb-0">
                            <small>
                                <em>お問い合わせはこちら！</em>
                                <br />

                                電話かインスタグラムのDMにてお伺いいたします
                            </small>
                            <br />

                            電話 : 
                            (080) 5325-5319
                            <br />
                            Instagram : 
                            <a href="https://www.instagram.com/cloud9_mao/" target="_blank">
                                <!-- <i class="bi bi-instagram"></i> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                </svg>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?php echo get_template_directory_uri(); ?>/assets/img/event-1/1-1.jpg" alt="cloud9" />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">

                            <h3>
                                見学無料･体験(500円)お待ちしております！！
                            </h3>
                            <p class="mb-0">

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section cta fade">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner bg-faded text-center rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Our Promise</span>
                            <span class="section-heading-lower">To You</span>
                        </h2>
                        <p class="mb-0">
                            Cloud9は、ダンスの技術向上だけでなく、チームワークや創造性の育成にも力を入れています。和歌山の地域コミュニティとの交流やイベント参加を通じて、地元盛り上げに貢献しています。私たちは常に新しい挑戦を受け入れ、成長し続けることを信条としています。
                            <br />
                            <br />
                            Cloud9は、ダンスを通じて人々に喜びと活力を届けることを目標としています。
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