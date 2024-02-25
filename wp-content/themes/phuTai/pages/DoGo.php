<?php /**template name: lĩnh vực đồ gỗ */ get_header()?>

<div class="swiper linhvuc-slider">
    <div class="swiper-wrapper">
        <?php if(have_rows("linhvuc-slider")): while(have_rows("linhvuc-slider")): the_row(); ?>
        <div class="swiper-slide">
            <img src="<?php echo get_sub_field("img") ?>" alt="" class="w-100">

        </div>
        <?php endwhile;endif ?>
    </div>
    <div class="swiper-pagination"></div>
</div>

<div class="menu-linhvuc">
    <?php 
        wp_nav_menu(array(
            'theme_location' => 'menu-6',
            
        ))
        ?>
</div>

<div class="dogo-heading-wrap">
    <div class="container">
        <div class="dogo-heading-title"><?php echo get_field("heading-title") ?></div>
        <div class="row text-desc">
            <?php if(have_rows("text-desc")): while(have_rows("text-desc")): the_row(); ?>
            <div class="col-lg-4">
                <div class="d-text">
                    <?php echo get_sub_field("text") ?>

                </div>
            </div>
            <?php endwhile;endif ?>

        </div>
        <div class="row chart">
            <div class="col-lg-6 col-md-6">
                <div class="chart-wrap">
                    <canvas class="chart1"></canvas>
                    <div class="row legend1">


                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="chart-wrap">
                    <canvas class="chart2">

                    </canvas>
                    <div class="row legend2"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sp-go-wrap">
    <div class="container">
        <div class="nha-may-title"><?php echo get_field("san-pham-go-title") ?></div>
    </div>
    <div class="container sp-go">

        <?php if(have_rows("san-pham-go")): while(have_rows("san-pham-go")): the_row(); ?>
        <div class="row item-go">
            <div class="col-lg-6 col-md-6">
                <div class="left-sp">
                    <?php if(have_rows("spimg")): while(have_rows("spimg")): the_row(); ?>
                    <img src="<?php echo get_sub_field("img") ?>" alt="" class="sp-img w-100">
                    <?php endwhile;endif ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="right-sp">
                    <div class="sp-title"><?php echo get_sub_field("name")?></div>
                    <div class="sp-desc"><?php echo get_sub_field("desc")?></div>
                </div>
            </div>
        </div>
        <?php endwhile;endif ?>
    </div>
</div>

<div class="cong-suat-wrap">
    <div class="container">
        <div class="nha-may-title"><?php echo get_field("nha-may-title") ?></div>
        <div class="nha-may-bg">
            <img src="<?php echo get_field("nha-may-bg") ?>" alt="" class="w-100">
            <div class="row nha-may-wrap">
                <?php if(have_rows("nha-mays")): while(have_rows("nha-mays")): the_row(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="nha-may">
                        <div class="nha-may-name"><?php echo get_sub_field("name") ?></div>
                        <div class="nha-may-desc">
                            <?php if(have_rows("desc")): while(have_rows("desc")): the_row(); ?>
                            <p>
                                <img src="<?php echo get_sub_field("icon") ?>" alt="">
                                <span><?php echo get_sub_field("text") ?></span>
                            </p>
                            <?php endwhile;endif ?>

                        </div>
                    </div>

                </div>
                <?php endwhile;endif ?>

            </div>

        </div>
    </div>
</div>

<div class="cty-da-wrap">
    <div class="container">
        <div class="cty-da-title">
            <?php echo get_field("cty-go-title") ?>
        </div>
        <div class="row">
            <?php if(have_rows("cty-go")): while(have_rows("cty-go")): the_row(); ?>
            <div class="col-lg-3 col-md-6 col-6">
                <div class="cty">
                    <div class="cty-img">
                        <a href="<?php echo get_sub_field("link") ?>"><img src="<?php echo get_sub_field("img") ?>"
                                alt="" class="w-100"></a>
                    </div>
                    <div class="cty-name"><a
                            href="<?php echo get_sub_field("link") ?>"><?php echo get_sub_field("title") ?></a></div>
                    <div class="cty-desc"><?php echo get_sub_field("desc") ?></div>
                </div>
            </div>
            <?php endwhile;endif ?>

        </div>
    </div>
</div>

<div class="cty-da-wrap">
    <div class="container">
        <div class="cty-da-title">
            <?php echo get_field("thanh-vien-title") ?>
        </div>
        <div class="row">
            <?php if(have_rows("thanh-vien")): while(have_rows("thanh-vien")): the_row(); ?>
            <div class="col-lg-3 col-md-6 col-6">
                <div class="cty">
                    <div class="cty-img">
                        <a href="<?php echo get_sub_field("link") ?>"><img src="<?php echo get_sub_field("img") ?>"
                                alt="" class="w-100"></a>
                    </div>
                    <div class="cty-name"><a
                            href="<?php echo get_sub_field("link") ?>"><?php echo get_sub_field("title") ?></a></div>
                    <div class="cty-desc"><?php echo get_sub_field("desc") ?></div>
                </div>
            </div>
            <?php endwhile;endif ?>

        </div>
    </div>
</div>



<?php get_footer()?>