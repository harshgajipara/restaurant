<?php get_header(); ?>

<!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?php echo get_theme_file_uri(); ?>/img/bg-img/breadcumb2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                    <?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
                        <h2><?php echo $term->name; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- Receipe Content Area -->
        <div class="receipe-content-area">
            <div class="container">

                <?php 
                $recipe = new WP_Query(array(
                    'post_type'=>'recipes',
                    'tax_query'=>array(array(
                        'taxonomy'=>'recipe_cat',
                        'field' => 'term_id',
                        'terms' => $term->term_id,
                    )),
                ));

                while($recipe->have_posts()){
                    $recipe->the_post();
                ?>
                    
               <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="receipe-headline my-5">
                            <span><?php the_time('F j, Y') ?></span>
                            <h2><?php the_title(); ?></h2>
                            <div class="receipe-duration">
                                <h6>Prep: <?php the_field('prep') ?></h6>
                                <h6>Cook: <?php the_field('cook') ?></h6>
                                <h6>Yields: <?php the_field('yield') ?></h6>
                            </div>
                        </div>
                    </div>

                <div class="row">
                    
                       <?php the_content(); ?>
                       <img height="80px" width="180px" src="<?php echo get_the_post_thumbnail_url(); ?>">
    
                    <!-- Ingredients -->
                    <div class="col-12 col-lg-4">
                        <div class="ingredients">
                            <h4>Ingredients</h4>

                            <?php if( have_rows('ingrediant') ): ?>
                            
                            <?php while( have_rows('ingrediant') ): the_row(); 
                                $item = get_sub_field('item');
                                ?>

                                <label><?php echo $item; ?></label>
                                
                            <?php endwhile; ?>
                            
                        <?php endif; ?>
                            
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
            </div>
        </div>

<?php get_footer(); ?>