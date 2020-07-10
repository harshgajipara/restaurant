<?php get_header(); ?>

    <!-- ##### Top Catagory Area Start ##### -->
    <section class="top-catagory-area section-padding-80-0">
        <div class="container">
            <div class="row">

                <?php if( have_rows('home_cards') ): ?>
                    
                    <?php while( have_rows('home_cards') ): the_row(); 
                        $image = get_sub_field('image');
                        $title = get_sub_field('title');
                        $sub_title = get_sub_field('sub_title');
                        $link = get_sub_field('link');
                        ?>

                         <div class="col-12 col-lg-6">
                            <div class="single-top-catagory">
                                <img src="<?php echo $image; ?>" alt="">
                                <!-- Content -->
                                <div class="top-cta-content">
                                    <h3><?php echo $title; ?></h3>
                                    <h6><?php echo $sub_title; ?></h6>
                                    <a href="<?php echo $link; ?>" class="btn delicious-btn">See Full Receipe</a>
                                </div>
                            </div>
                        </div>
                        
                    <?php endwhile; ?>
                    
                <?php endif; ?>

            </div>
        </div>
    </section>
    <!-- ##### Top Catagory Area End ##### -->

    <!-- ##### Best Receipe Area Start ##### -->
    <section class="best-receipe-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>The best Receipies</h3>
                    </div>
                </div>
            </div>

            <div class="row">

                <?php if( have_rows('best_recipes') ): ?>
                
                <?php while( have_rows('best_recipes') ): the_row(); 
                    $image = get_sub_field('image');
                    $name = get_sub_field('name');
                    ?>
                    
                     <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="<?php echo $image; ?>" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5><?php echo $name; ?></h5>
                            </a>
                        </div>
                    </div>
                </div>

                    
                <?php endwhile; ?>
                
            <?php endif; ?>

              
            </div>
        </div>
    </section>
    <!-- ##### Best Receipe Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <?php $cta = get_field('cta'); ?>
    <section class="cta-area bg-img bg-overlay" style="background-image: url(<?php echo $cta['backgroud_image']; ?>);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Cta Content -->
                    <div class="cta-content text-center">
                        <h2><?php echo $cta['title']; ?></h2>
                        <p><?php echo $cta['description']; ?></p>
                        <a href="<?php echo $cta['link']; ?>" class="btn delicious-btn">Discover all the receipies</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### Small Receipe Area Start ##### -->
    <section class="small-receipe-area section-padding-80-0">
        <div class="container">
            <div class="row">


                <?php
                $recipe = new WP_Query(array(
                    'post_type'=>'recipes',
                ));

                while($recipe->have_posts()){
                    $recipe->the_post();
                ?>

                <!-- Small Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-small-receipe-area d-flex">
                        <!-- Receipe Thumb -->
                        <div class="receipe-thumb">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        </div>
                        <!-- Receipe Content -->
                        <div class="receipe-content">
                            <span><?php the_time('F j, Y') ?></span>
                            <a href="<?php the_permalink(); ?>">
                                <h5><?php the_title(); ?></h5>
                            </a>
                        </div>
                    </div>
                </div>

            <?php } ?>
                
            </div>
        </div>
    </section>
    <!-- ##### Small Receipe Area End ##### -->

    <!-- ##### Quote Subscribe Area Start ##### -->
    <section class="quote-subscribe-adds">
        <div class="container">
            <div class="row align-items-end">
                <!-- Quote -->
                <?php $card = get_field('card_story','option'); ?>
                <div class="col-12 col-lg-4">
                    <div class="quote-area text-center">
                        <span>"</span>
                        <h4><?php echo $card['quote']; ?></h4>
                        <p><?php echo $card['author']; ?></p>
                        <div class="date-comments d-flex justify-content-between">
                        </div>
                    </div>
                </div>

                <!-- Newsletter -->
                <div class="col-12 col-lg-4">
                    <div class="newsletter-area">
                        <h4>Subscribe to our newsletter</h4>
                        <!-- Form -->
                        <div class="newsletter-form bg-img bg-overlay" style="background-image: url(<?php echo get_theme_file_uri(); ?>/img/bg-img/bg1.jpg);">
                           <?php echo do_shortcode('[mc4wp_form id="69"]'); ?>
                            <p><?php the_field('shortcode_details'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Adds -->
                <div class="col-12 col-lg-4">
                    <div class="delicious-add">
                        <img src="<?php echo get_theme_file_uri(); ?>/img/bg-img/add.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Quote Subscribe Area End ##### -->

    <?php get_footer(); ?>