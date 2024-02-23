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
            <li class="box active">
                <div class="box-title">
                    01 NGÀNH ĐÁ
                </div>
                <div class="box-content">
                    <img src="https://s3-alpha-sig.figma.com/img/f40c/8996/d5005b41cb7c9830a7bbf919fd328980?Expires=1709510400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=nsjluhIGumnGbNxrzw739e~FgSfdCBRK7ZiWvpkwNS4P2sHjylZPfZZYmLlMPYHrL1oInEbYY5CYitUlypQvh02eX8kVjfZ7PvWXFQIzaCwmpleR276f3KERE8viVbpZKa5j3wMaT05OWIAz7AQK85IqFzvB5IQiyXLZg190sp1lSk7hylM7Dd~OKj6j6uu8OmhKVUrHdQogG6l0LcGJMe5ifDeuiybq16UOutNHkUAyt3TZZaEjTk5qQp3oYGW9ffS4ixyOedhlEbRauUdOZk9XZI19szzl~WcGdslq2MDxnqm4~vRbtvKTfOwaRnbqJ-7FILo6FlzdlK9gE6XwEQ__"
                        alt="" class="w-100">
                    <div class="box-text-wrap">
                        <div class="box-title2">01 <br> NGÀNH ĐÁ</div>
                        <div class="box-text">
                            <p>
                                Với mong muốn đem đến cho thị trường những sản phẩm theo tiêu chuẩn quốc tế với tính
                                thẩm mỹ
                                cao và độ bền cùng thời gian, Công ty Cổ phần Phú Tài (Phú Tài JSC) luôn dẫn đầu và tiên
                                phong trong việc đưa ra các sản phấm làm bằng đá tự nhiên cao cấp, không chỉ mang lại sự
                                sang trọng hoàn hảo cho bất kỳ không gian nào mà còn đứng vững trước thử thách của thời
                                gian. Nâng tầm không gian của bạn bằng sản phẩm đá của chúng tôi - sự pha trộn hoàn hảo
                                giữa
                                vẻ đẹp và độ bền vượt thời gian.
                            </p>
                            <div class="more">
                                <a href="<?php echo get_sub_field("img") ?>">Xem thêm </a>
                            </div>


                        </div>
                    </div>
                </div>
            </li>
            <li class="box">
                <div class="box-title">
                    02 NGÀNH GỖ
                </div>
                <div class="box-content">
                    <img src="https://s3-alpha-sig.figma.com/img/f40c/8996/d5005b41cb7c9830a7bbf919fd328980?Expires=1709510400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=nsjluhIGumnGbNxrzw739e~FgSfdCBRK7ZiWvpkwNS4P2sHjylZPfZZYmLlMPYHrL1oInEbYY5CYitUlypQvh02eX8kVjfZ7PvWXFQIzaCwmpleR276f3KERE8viVbpZKa5j3wMaT05OWIAz7AQK85IqFzvB5IQiyXLZg190sp1lSk7hylM7Dd~OKj6j6uu8OmhKVUrHdQogG6l0LcGJMe5ifDeuiybq16UOutNHkUAyt3TZZaEjTk5qQp3oYGW9ffS4ixyOedhlEbRauUdOZk9XZI19szzl~WcGdslq2MDxnqm4~vRbtvKTfOwaRnbqJ-7FILo6FlzdlK9gE6XwEQ__"
                        alt="" class="w-100">
                    <div class="box-text-wrap">
                        <div class="box-title2">01 <br> NGÀNH ĐÁ</div>
                        <div class="box-text">
                            <p>
                                Với mong muốn đem đến cho thị trường những sản phẩm theo tiêu chuẩn quốc tế với tính
                                thẩm mỹ
                                cao và độ bền cùng thời gian, Công ty Cổ phần Phú Tài (Phú Tài JSC) luôn dẫn đầu và tiên
                                phong trong việc đưa ra các sản phấm làm bằng đá tự nhiên cao cấp, không chỉ mang lại sự
                                sang trọng hoàn hảo cho bất kỳ không gian nào mà còn đứng vững trước thử thách của thời
                                gian. Nâng tầm không gian của bạn bằng sản phẩm đá của chúng tôi - sự pha trộn hoàn hảo
                                giữa
                                vẻ đẹp và độ bền vượt thời gian.
                            </p>
                            <div class="more">
                                <a href="<?php echo get_sub_field("img") ?>">Xem thêm </a>
                            </div>


                        </div>
                    </div>
                </div>
            </li>
            <li class="box">
                <div class="box-title">
                    02 NGÀNH GỖ
                </div>
                <div class="box-content">
                    <img src="https://s3-alpha-sig.figma.com/img/f40c/8996/d5005b41cb7c9830a7bbf919fd328980?Expires=1709510400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=nsjluhIGumnGbNxrzw739e~FgSfdCBRK7ZiWvpkwNS4P2sHjylZPfZZYmLlMPYHrL1oInEbYY5CYitUlypQvh02eX8kVjfZ7PvWXFQIzaCwmpleR276f3KERE8viVbpZKa5j3wMaT05OWIAz7AQK85IqFzvB5IQiyXLZg190sp1lSk7hylM7Dd~OKj6j6uu8OmhKVUrHdQogG6l0LcGJMe5ifDeuiybq16UOutNHkUAyt3TZZaEjTk5qQp3oYGW9ffS4ixyOedhlEbRauUdOZk9XZI19szzl~WcGdslq2MDxnqm4~vRbtvKTfOwaRnbqJ-7FILo6FlzdlK9gE6XwEQ__"
                        alt="" class="w-100">
                    <div class="box-text-wrap">
                        <div class="box-title2">01 <br> NGÀNH ĐÁ</div>
                        <div class="box-text">
                            <p>
                                Với mong muốn đem đến cho thị trường những sản phẩm theo tiêu chuẩn quốc tế với tính
                                thẩm mỹ
                                cao và độ bền cùng thời gian, Công ty Cổ phần Phú Tài (Phú Tài JSC) luôn dẫn đầu và tiên
                                phong trong việc đưa ra các sản phấm làm bằng đá tự nhiên cao cấp, không chỉ mang lại sự
                                sang trọng hoàn hảo cho bất kỳ không gian nào mà còn đứng vững trước thử thách của thời
                                gian. Nâng tầm không gian của bạn bằng sản phẩm đá của chúng tôi - sự pha trộn hoàn hảo
                                giữa
                                vẻ đẹp và độ bền vượt thời gian.
                            </p>
                            <div class="more">
                                <a href="<?php echo get_sub_field("img") ?>">Xem thêm </a>
                            </div>


                        </div>
                    </div>
                </div>
            </li>
            <li class="box">
                <div class="box-title">
                    02 NGÀNH GỖ
                </div>
                <div class="box-content">
                    <img src="https://s3-alpha-sig.figma.com/img/f40c/8996/d5005b41cb7c9830a7bbf919fd328980?Expires=1709510400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=nsjluhIGumnGbNxrzw739e~FgSfdCBRK7ZiWvpkwNS4P2sHjylZPfZZYmLlMPYHrL1oInEbYY5CYitUlypQvh02eX8kVjfZ7PvWXFQIzaCwmpleR276f3KERE8viVbpZKa5j3wMaT05OWIAz7AQK85IqFzvB5IQiyXLZg190sp1lSk7hylM7Dd~OKj6j6uu8OmhKVUrHdQogG6l0LcGJMe5ifDeuiybq16UOutNHkUAyt3TZZaEjTk5qQp3oYGW9ffS4ixyOedhlEbRauUdOZk9XZI19szzl~WcGdslq2MDxnqm4~vRbtvKTfOwaRnbqJ-7FILo6FlzdlK9gE6XwEQ__"
                        alt="" class="w-100">
                    <div class="box-text-wrap">
                        <div class="box-title2">01 <br> NGÀNH ĐÁ</div>
                        <div class="box-text">
                            <p>
                                Với mong muốn đem đến cho thị trường những sản phẩm theo tiêu chuẩn quốc tế với tính
                                thẩm mỹ
                                cao và độ bền cùng thời gian, Công ty Cổ phần Phú Tài (Phú Tài JSC) luôn dẫn đầu và tiên
                                phong trong việc đưa ra các sản phấm làm bằng đá tự nhiên cao cấp, không chỉ mang lại sự
                                sang trọng hoàn hảo cho bất kỳ không gian nào mà còn đứng vững trước thử thách của thời
                                gian. Nâng tầm không gian của bạn bằng sản phẩm đá của chúng tôi - sự pha trộn hoàn hảo
                                giữa
                                vẻ đẹp và độ bền vượt thời gian.
                            </p>
                            <div class="more">
                                <a href="<?php echo get_sub_field("img") ?>">Xem thêm </a>
                            </div>


                        </div>
                    </div>
                </div>
            </li>
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