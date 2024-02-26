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
            <div class="col-md-6">
                <div class="left-des">
                    <div class="jsc-title"><?php echo get_field("linhvuc-title") ?></div>
                    <div class="jsc-desc"><?php echo get_field("linhvuc-desc") ?></div>
                    <div class="jsc-desc"><?php echo get_field("jsc-name") ?></div>
                </div>

            </div>
            <div class="col-md-6">
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

<div class="history-wrap">
    <div class="container">
        <div class="history-title"><?php echo get_field("history-title") ?></div>
        <div class="history">
            <?php if(have_rows("history")): while(have_rows("history")): the_row(); ?>
            <div class="ewrap">
                <div class="event">
                    <div class="year"><?php echo get_sub_field("year") ?></div>
                    <div class="event-text"><?php echo get_sub_field("event") ?></div>
                </div>
            </div>
            <?php endwhile;endif ?>

        </div>
    </div>
</div>

<div class="chi-nhanh-wrap">
    <div class="container">
        <div class="chi-nhanh-title"><?php echo get_field("chi-nhanh-title") ?></div>
        <div class="row">
            <div class="col-md-5">
                <div class="chi-nhanh-map">
                    <img src="<?php echo get_field("chi-nhanh-map") ?>" alt="" class="">
                </div>
            </div>
            <div class="col-md-7">
                <?php if(have_rows("chi-nhanh")): while(have_rows("chi-nhanh")): the_row(); ?>
                <div class="chi-nhanh">
                    <div class="place"><?php echo get_sub_field("dia-diem") ?></div>
                    <div class="row cpny">
                        <?php if(have_rows("ctys")): while(have_rows("ctys")): the_row(); ?>
                        <div class="col-6">
                            <div class="cpny-item">
                                <div class="cpny-name">
                                    <a
                                        href="<?php echo get_sub_field("link") ?>"><?php echo get_sub_field("name") ?></a>
                                </div>
                                <div class="cpny-info">
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

                <?php endwhile;endif ?>

            </div>

        </div>
    </div>
</div>

<div class="cty-tv-wrap">
    <div class="container">
        <div class="tv-title"><?php echo get_field("cty-tv-title") ?></div>
    </div>
    <div class="container swiper cty-tv-slider">
        <div class="swiper-wrapper">
            <?php if(have_rows("cty-tvs")): while(have_rows("cty-tvs")): the_row(); ?>

            <div class="swiper-slide">
                <div class="tv">
                    <div class="row">
                        <div class="col-md-7 tv-left px-0">
                            <a href="<?php echo get_sub_field("link") ?>">
                                <img src="<?php echo get_sub_field("img") ?>" alt="" class="w-100">
                            </a>
                        </div>
                        <div class="col-md-5">
                            <div class="tv-right">
                                <div class="tv-name">
                                    <a
                                        href="<?php echo get_sub_field("link") ?>"><?php echo get_sub_field("name") ?></a>
                                </div>
                                <div class="tv-des">
                                    <?php echo get_sub_field("desc") ?>
                                </div>

                                <div class="in4-wrap">

                                    <?php if(have_rows("in4")): while(have_rows("in4")): the_row(); ?>
                                    <div class="i">
                                        <img src="<?php echo get_sub_field("icon") ?>" alt="">
                                        <div class="iwrap">
                                            <?php echo get_sub_field("text") ?>
                                        </div>
                                    </div>

                                    <?php endwhile;endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile;endif ?>

        </div>
        <div class="btn-tv-wrap">
            <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
            <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
        </div>
    </div>
</div>

<div class="mission-wrap">
    <div class="container missions">
        <div class="row">
            <div class="col-md-6">
                <div class="mission-heading">
                    <div class="mis-title"><?php echo get_field("mission-title") ?></div>
                    <div class="mis-desc"><?php echo get_field("mission-desc") ?></div>
                </div>
            </div>
            <?php if(have_rows("missions")): while(have_rows("missions")): the_row(); ?>
            <div class="col-md-6">
                <div class="mission">
                    <div class="mission-bg">
                        <img src="<?php echo get_sub_field("bg") ?>" alt="" class="w-100">
                    </div>
                    <div class="mis-name-wrap">
                        <img src="<?php echo get_sub_field("icon") ?>" alt="">
                        <div class="mis-name"><?php echo get_sub_field("mission") ?></div>
                    </div>
                    <div class="mis-text">
                        <?php echo get_sub_field("text") ?>
                    </div>
                </div>
            </div>
            <?php endwhile;endif ?>

        </div>


    </div>
</div>







<?php get_footer()?>