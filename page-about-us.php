<?php get_header(); ?>

  <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?php echo get_theme_file_uri(); ?>/img/bg-img/breadcumb1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Area Start ##### -->
    <section class="about-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3><?php the_field('question'); ?></h3>
                    </div>
                </div>
            </div> 

            <div class="row">
                <div class="col-12">
                    <h6 class="sub-heading pb-5"><?php the_field('answer') ?></h6>

                    <p class="text-center"><?php the_field('description_1'); ?></p>
                </div>
            </div>

            <div class="row align-items-center mt-70">
                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/core-img/salad.png" alt="">
                        <h3><span class="counter">1287</span></h3>
                        <h6>Amazing receipies</h6>
                    </div>
                </div>

                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/core-img/hamburger.png" alt="">
                        <h3><span class="counter">25</span></h3>
                        <h6>Burger receipies</h6>
                    </div>
                </div>

                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/core-img/rib.png" alt="">
                        <h3><span class="counter">471</span></h3>
                        <h6>Meat receipies</h6>
                    </div>
                </div>

                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/core-img/pancake.png" alt="">
                        <h3><span class="counter">326</span></h3>
                        <h6>Desert receipies</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <img class="mb-70" src="<?php the_field('image'); ?>" alt="">
                    <p class="text-center"><?php the_field('description_2'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <div class="contact-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Contact Us</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="contact-form-area">
                        <?php echo do_shortcode('[contact-form-7 id="117" title="Restaurant contact"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Contact Area End ##### -->

<?php get_footer(); ?>