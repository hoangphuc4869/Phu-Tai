<?php /**template name: Giới thiệu */ get_header()?>

<div class="swiper heading-slider">
    <div class="swiper-wrapper">
        <?php if(have_rows("heading-slider")): while(have_rows("heading-slider")): the_row(); ?>
        <div class="swiper-slide">
            <div class="heading-slide">
                <div class="img-bg">
                    <img src="<?php echo get_sub_field("img") ?>" alt="" class="w-100 img-fluid">
                    <div class="overlay"></div>

                </div>
            </div>
        </div>
        <?php endwhile;endif ?>
    </div>
    <div class="swiper-pagination"></div>
</div>

<div class="gioi-thieu-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="gioi-thieu-title"><?php the_title() ?></div>
            </div>
            <div class="col-lg-6">
                <div class="gt-text">
                    <?php echo get_field("gioi-thieu-text") ?>
                </div>
            </div>

        </div>
    </div>

</div>

<div class="linhvuc-jsc-wrap overflow-hidden">
    <div class="linhvuc-jsc container position-relative">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-des position-relative">
                    <div class="jsc-title"><?php echo get_field("linhvuc-title") ?></div>
                    <div class="jsc-desc"><?php echo get_field("linhvuc-desc") ?></div>
                    <div class="jsc-desc"><?php echo get_field("jsc-name") ?></div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="lv-wrap">
                    <?php if(have_rows("linhvuc")): while(have_rows("linhvuc")): the_row(); ?>
                    <div class="linhvuc-name">
                        <span><?php echo get_sub_field("number") ?></span>
                        <span><a
                                href="<?php echo get_sub_field("link") ?>"><?php echo get_sub_field("name") ?></a></span>
                    </div>
                    <div class="linhvuc-img">
                        <a href="<?php echo get_sub_field("link") ?>"><img src="<?php echo get_sub_field("img") ?>"
                                alt="" class="w-100"></a>
                    </div>

                    <?php endwhile;endif ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer()?>