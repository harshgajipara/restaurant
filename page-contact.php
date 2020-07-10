<?php get_header(); ?>

 <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?php echo get_theme_file_uri(); ?>/img/bg-img/breadcumb4.jpg);">
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

    <!-- ##### Contact Information Area Start ##### -->
    <div class="contact-information-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="logo mb-80">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/core-img/logo.png" alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Contact Text -->
                <div class="col-12 col-lg-5">
                    <div class="contact-text">
                        <p><?php the_field('description'); ?></p>
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                    <!-- Single Contact Information -->
                    <div class="single-contact-information mb-30">
                        <h6>Address:</h6>
                        <p><?php the_field('address'); ?></p>
                    </div>
                    <!-- Single Contact Information -->
                    <div class="single-contact-information mb-30">
                        <h6>Phone:</h6>
                        <p><?php the_field('phone'); ?></p>
                    </div>
                    <!-- Single Contact Information -->
                    <div class="single-contact-information mb-30">
                        <h6>Email:</h6>
                        <p><?php the_field('email'); ?></p>
                    </div>
                </div>

                <!-- Newsletter Area -->
                <div class="col-12 col-lg-4">
                    <div class="newsletter-form bg-img bg-overlay" style="background-image: url(<?php echo get_theme_file_uri(); ?>/img/bg-img/bg1.jpg);">
                        <?php echo do_shortcode('[mc4wp_form id="69"]'); ?>
                        <p><?php the_field('shortcode_details_copy','option'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Contact Information Area End ##### -->

    <!-- ##### Contact Form Area Start ##### -->
    <div class="contact-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Get In Touch</h3>
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
    <!-- ##### Contact Form Area End ##### -->

    <!-- ##### Google Maps ##### -->
    <div class="map-area">
        <div id="googleMap"></div>
    </div>

<?php get_footer(); ?>