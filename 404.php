<?php 

/**
 * 404 template.
 *
 * @package Edrea
 * 
 * @version 1.0.0
 * @copyright  Copyright (c) 2023, Leonardo Doherty
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * 
 */

get_header(); ?>

    <main class="edrea-page-not-found">
        <div class="container">
            <h1>Oops! 404 Not Found</h1>
            <h3>This page is currently not available</h3>
            <p>Take me <a href="<?php echo get_home_url(); ?>">Home</a></p>
        </div>
    </main>

<?php get_footer(); ?>