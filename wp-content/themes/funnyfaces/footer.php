            <footer data-section="5" class="footer">
                <div class="footer-b">
                    <ul class="footer_social">
                        <li class="footer_social-item"><a href="" class="footer_social-link facebook"></a></li>
                        <li class="footer_social-item"><a href="" class="footer_social-link inst"></a></li>
                    </ul>
                    <div class="footer_phone">
                        <?php dynamic_sidebar('footer_phone'); ?>
                    </div>
                    <div class="footer_logo-b"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Funny Faces" class="footer_logo"></div>
                </div>
            </footer>
        </div>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/scripts/scripts.min.js"></script>

            <?php wp_footer(); ?>
    </body>
</html>