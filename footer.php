<?php

/**
 * Edrea Themes Footer.
 *
 * @package Edrea
 * 
 * @version 1.0.0
 * @copyright  Copyright (c) 2023, Leonardo Doherty
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * 
 */

?>
        <footer class="edrea-footer">
            <div class="container">
                <div class="edrea-footer__wrapper">
                    <nav id="site-navigation" class="footer-navigation">
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-2',
                                    'menu_id'        => 'footer-menu',
                                )
                            );
                        ?>
                    </nav>
                    <div class="edrea-credit">
                        <p>©2023 <a href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a>. All Rights Reserved.</p>
                        <p class="author">Themes by <a style="color: white" href="https://github.com/eLDoherty/edrea">Leonardo Doherty</a></p>
                    </div>
                </div>
            </div>
        </footer>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>