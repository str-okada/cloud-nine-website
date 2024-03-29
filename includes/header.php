<?php wp_body_open(); ?>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Cloud 9</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <?php
        $menu_name = 'global_nav';
        $locations = get_nav_menu_locations();

        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        ?>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <?php foreach ($menu_items as $item) : ?>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="<?php echo $item->url;?>"><?php echo $item->title;?></a></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</nav>