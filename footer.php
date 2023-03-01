
        <footer class="edrea-footer">
            <div class="container">
                <div class="edrea-footer__wrapper">
                    <nav id="site-navigation" class="footer-navigation">
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                )
                            );
                        ?>
                    </nav>
                    <div class="edrea-credit">
                        <p>©2023 <a href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a> . All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>