<?php /**template name: Home */ get_header()?>


<div class="swiper heading-slider">
    <div class="swiper-wrapper">
        <?php if(have_rows("heading-slider")): while(have_rows("heading-slider")): the_row(); ?>
        <div class="swiper-slide">
            <div class="heading-slide">
                <div class="img-bg">
                    <img src="<?php echo get_sub_field("img") ?>" alt="" class="w-100 img-fluid">
                    <div class="overlay"></div>
                    <div class="slide-content">
                        <div class="text1"><?php echo get_sub_field("text1") ?></div>
                        <div class="text2"><?php echo get_sub_field("text2") ?></div>
                        <div class="more">
                            <a href="<?php echo get_sub_field("link") ?>">Xem thêm <i class="fa-light fa-arrow-right"
                                    style="color: #ffffff;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile;endif ?>
    </div>
    <div class="swiper-pagination"></div>
</div>


<div class="field-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left"><?php echo get_field("field-title")?></div>

            </div>
            <div class="col-lg-6">
                <div class="right"><?php echo get_field("field-text")?></div>
            </div>
        </div>
        <ul class="box-wrap">
            <?php if(have_rows("fields")): while(have_rows("fields")): the_row(); ?>
            <li class="box">
                <div class="box-title">
                    <span><?php echo get_sub_field("stt") ?></span>
                    <span><?php echo get_sub_field("name") ?></span>
                </div>
                <div class="box-content">
                    <img src="<?php echo get_sub_field("img") ?>" alt="" class="w-100">
                    <div class="box-text-wrap">
                        <div class="box-title2">
                            <span> <?php echo get_sub_field("stt") ?></span> <br>
                            <span><?php echo get_sub_field("name") ?></span>
                        </div>
                        <div class="box-text">
                            <p>
                                <?php echo get_sub_field("desc") ?>
                            </p>
                            <div class="more">
                                <a href="<?php echo get_sub_field("link") ?>">Xem thêm </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <?php endwhile;endif ?>


        </ul>
        <ul class="box-wrap-mobile">
            <?php if(have_rows("fields")): while(have_rows("fields")): the_row(); ?>
            <li class="box-mobile">
                <div class="box-title-mobile">
                    <span><?php echo get_sub_field("stt") ?></span>
                    <span><?php echo get_sub_field("name") ?></span>
                </div>
                <div class="box-content-mobile">
                    <img src="<?php echo get_sub_field("img") ?>" alt="" class="w-100">
                    <div class="box-text-wrap-mobile">
                        <div class="box-title2-mobile">
                            <span> <?php echo get_sub_field("stt") ?></span> <br>
                            <span><?php echo get_sub_field("name") ?></span>
                        </div>
                        <div class="box-text-mobile">
                            <p>
                                <?php echo get_sub_field("desc") ?>
                            </p>
                            <div class="more more-mobile">
                                <a href="<?php echo get_sub_field("link") ?>">Xem thêm </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <?php endwhile;endif ?>


        </ul>
    </div>
</div>


<div class="stakeholder-wrap">
    <div class="container">
        <div class="stake-title"><?php echo get_field("stakeholder-title")?></div>
        <div class="stakes">
            <?php if(have_rows("stakes")): while(have_rows("stakes")): the_row(); ?>
            <div class="stake">
                <div class="stake-name">
                    <a href="<?php echo get_sub_field("link")?>"><?php echo get_sub_field("name")?>
                    </a>
                </div>
                <div class="stake-img">
                    <a href="<?php echo get_sub_field("link")?>"><img src="<?php echo get_sub_field("img")?>" alt=""
                            class="w-100"></a>
                </div>
            </div>


            <?php endwhile;endif ?>

        </div>
    </div>
</div>


<div class="news-wrap">
    <div class="container position-relative">
        <div class="news-title"><?php echo get_field("news-title")?></div>
        <div class="swiper news-swiper">
            <div class="swiper-wrapper">
                <?php 
                $args = array(
                'post_type' => 'post',  
                'posts_per_page' => 10, 
                'orderby' => 'date',    
                'order' => 'DESC'       
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post(); ?>
                <div class="swiper-slide">
                    <div class="aPost">
                        <div class="post-img">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?></a>
                        </div>
                        <div class="post-group">
                            <div class="post-title"><a href="<?php the_permalink()?>"><?php the_title() ?></a></div>
                            <div class="post-date">
                                <?php echo get_the_date("d-m-Y") ?>
                            </div>
                            <div class="more">
                                <a href="<?php the_permalink() ?>">Xem thêm <i class="fa-light fa-arrow-right"
                                        style="color: #ffffff;"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <?php
                }
                wp_reset_postdata();
                } else {
                echo 'Không có bài viết nào.';
                }
                ?>
            </div>
        </div>
        <div class="btn-news-wrap">
            <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
            <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
        </div>

    </div>
</div>



<?php get_footer()?>