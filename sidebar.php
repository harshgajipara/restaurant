 <!-- Widget -->
                        <div class="single-widget mb-80">
                            <h6>Archive</h6>
                            <ul class="list">
                                <li><?php wp_get_archives(); ?></li>
                            </ul>
                        </div>

                        <!-- Widget -->
                        <div class="single-widget mb-80">
                            <h6>Categories</h6>
                            <ul class="list">
                                <li><?php wp_list_categories(array(
                                        'title_li'=>false
                                    )); ?></li>
                            </ul>
                        </div>

                        <!-- Widget -->
                        <div class="single-widget mb-80">
                            <h6>Newsletter</h6>

                            <!-- Form -->
                            <div class="newsletter-form bg-img bg-overlay" style="background-image: url(<?php echo get_theme_file_uri(); ?>/img/bg-img/bg1.jpg);">
                                <?php echo do_shortcode('[mc4wp_form id="69"]'); ?>
                                <p><?php the_field('shortcode_details_copy','option'); ?></p>
                            </div>
                        </div>

                        <!-- Widget -->
                        <?php $card = get_field('card_story','option'); ?>
                        <div class="single-widget mb-80">
                            <div class="quote-area text-center">
                                <span>"</span>
                                <h4><?php echo $card['quote']; ?></h4>
                                <p><?php echo $card['author']; ?></p>
                            </div>
                        </div>
                        
                    </div>
                </div>