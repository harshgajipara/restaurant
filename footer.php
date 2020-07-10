 <!-- ##### Follow Us Instagram Area Start ##### -->
    <div class="follow-us-instagram">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>Follow Us Instragram</h5>
                </div>
            </div>
        </div>
       
        <!-- shortcode for instagram will go here -->
    </div>
    <!-- ##### Follow Us Instagram Area End ##### -->

 <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
                    <!-- Footer Social Info -->
                    <div class="footer-social-info text-right">
                        <?php $social = get_field('social','option'); ?>
                        <a href="<?php echo $social['pinterest']; ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="<?php echo $social['facebook']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="<?php echo $social['twitter']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="<?php echo $social['behance']; ?>"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="<?php echo $social['linkedin']; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                    <!-- Footer Logo -->
                    <div class="footer-logo">
                        <a href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri(); ?>/img/core-img/logo.png" alt=""></a>
                    </div>
                    <!-- Copywrite -->
                    <p>
                        Copyright &copy; All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i>
                    </p>
                </div>
            </div>
        </div>
    </footer>
     <!-- ##### Footer Area End ##### -->

   <?php wp_footer(); ?>
</body>
</html>