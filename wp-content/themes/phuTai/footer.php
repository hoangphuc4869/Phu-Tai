<footer>
    <div class="footer-wrap overflow-hidden">
        <div class="container footer">
            <div class="company-name-footer"><?php echo get_field("company-name",'option') ?></div>
            <div class="row footer-row">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="address">
                        <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                        <?php if(have_rows("addresses","option")): while(have_rows("addresses","option")): the_row(); ?>
                        <p><?php echo get_sub_field('text') ?></p>
                        <?php endwhile;endif ?>
                    </div>
                    <div class="phones">
                        <div class="icon"><i class="fa-solid fa-phone"></i></div>

                        <?php if(have_rows("phone-numbers","option")): while(have_rows("phone-numbers","option")): the_row(); ?>
                        <p><a href="tel: <?php echo get_sub_field('text') ?>"><?php echo get_sub_field('text') ?></a>
                        </p>
                        <?php endwhile;endif ?>
                    </div>
                    <div class="fax">
                        <div class="icon"><i class="fa-solid fa-fax"></i></div>

                        <?php if(have_rows("fax","option")): while(have_rows("fax","option")): the_row(); ?>
                        <p><a href="tel: <?php echo get_sub_field('text') ?>"><?php echo get_sub_field('text') ?></a>
                        </p>
                        <?php endwhile;endif ?>
                    </div>
                    <div class="mails">
                        <div class="icon"><i class="fa-duotone fa-envelope-open-text"
                                style="--fa-primary-color: #ffffff; --fa-secondary-color: #003366;"></i></div>

                        <?php if(have_rows("mails","option")): while(have_rows("mails","option")): the_row(); ?>
                        <p><a href="mailto: <?php echo get_sub_field('text') ?>"><?php echo get_sub_field('text') ?></a>
                        </p>
                        <?php endwhile;endif ?>
                    </div>
                </div>
                <?php if(have_rows("menus-footer","option")): while(have_rows("menus-footer","option")): the_row(); ?>
                <div class="col-lg-3 col-md-6 col-6 ">
                    <div class="menu-footer-title"><?php echo get_sub_field("title") ?></div>
                    <ul class="menu-footer">
                        <?php if(have_rows("sub-menus","option")): while(have_rows("sub-menus","option")): the_row(); ?>
                        <li>
                            <a href="<?php echo get_sub_field('link') ?>">
                                <?php echo get_sub_field('text') ?>
                            </a>
                        </li>
                        <?php endwhile;endif ?>
                    </ul>
                </div>

                <?php endwhile;endif ?>
            </div>
        </div>
    </div>
    <div class="footer2">
        <?php echo get_field("copyright", "option") ?>
    </div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="<?php bloginfo("template_directory")?>/assets/js/app.js"></script>


</body>

</html>