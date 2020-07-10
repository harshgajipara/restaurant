<?php get_header(); ?>

<!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?php echo get_theme_file_uri(); ?>/img/bg-img/breadcumb2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2><?php the_archive_title(); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

     <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <?php
                       
                        while(have_posts()) {
                            the_post();
                         ?>
                        
                        <!-- Single Blog Area -->
                        <div class="single-blog-area mb-80">
                            <!-- Thumbnail -->
                            <div class="blog-thumbnail">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                <!-- Post Date -->
                                <div class="post-date">
                                    <a href="#"><span><?php the_time('d'); ?></span><?php the_time('F'); ?> <br> <?php the_time('Y'); ?></a>
                                </div>
                            </div>
                            <!-- Content -->
                            <div class="blog-content">
                                <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                                <div class="meta-data">by <?php the_author_posts_link(); ?> in <?php echo get_the_category_list(', '); ?>
                                </div>
                                <p><?php echo wp_trim_words(get_the_content(), 40); ?> </p>
                                <a href="<?php the_permalink(); ?>" class="btn delicious-btn mt-30">Read More</a>
                            </div>
                        </div>

                    <?php } ?>
                        

                    </div>

                </div>

        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

<?php get_footer(); ?>