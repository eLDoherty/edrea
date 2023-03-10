<?php

/**
 * Social sharer Section.
 *
 * @package Edrea
 */

?>

<h3 style="margin-bottom: 5px; padding: 0px;"><?php echo __( "Share:" , 'edrea' ); ?></h3>
<ul class="edrea-social-sharer__wrapper">
    <li>
        <a class="share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink();?>" title="Share on Facebook" target="_blank">
            <svg id="facebook" data-name="facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.61 59.03">
                <path fill="#FFFFFF" d="M47.2,12.76H41.63c-4.36,0-5.18,2.09-5.18,5.11v6.71h10.4l-1.38,10.5h-9V62H25.59V35.07h-9V24.57h9V16.84c0-9,5.5-13.87,13.52-13.87a69.4,69.4,0,0,1,8.09.43Z" transform="translate(-16.59 -2.97)"/>
            </svg>
        </a>
    </li>
    <li>
        <a class="share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo get_the_permalink();?>&text=<?php echo get_the_title(); ?>&via=<?php the_author_meta( 'twitter' ); ?>" title="Tweet this" target="_blank">
            <svg id="twitter" data-name="twitter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58.1 47.2">
                <path fill="#FFFFFF" d="M54.86,20.19v1.55c0,15.74-12,33.88-33.88,33.88A33.64,33.64,0,0,1,2.74,50.27a24.55,24.55,0,0,0,2.88.15A23.84,23.84,0,0,0,20.4,45.33,11.93,11.93,0,0,1,9.27,37.07a15,15,0,0,0,2.25.18,12.58,12.58,0,0,0,3.13-.41A11.91,11.91,0,0,1,5.1,25.17V25a12,12,0,0,0,5.38,1.51A11.92,11.92,0,0,1,6.8,10.61,33.84,33.84,0,0,0,31.35,23.06a13.44,13.44,0,0,1-.29-2.73,11.92,11.92,0,0,1,20.61-8.15,23.43,23.43,0,0,0,7.56-2.87A11.87,11.87,0,0,1,54,15.88,23.87,23.87,0,0,0,60.84,14,25.59,25.59,0,0,1,54.86,20.19Z" transform="translate(-2.74 -8.42)"/>
            </svg>
        </a>
    </li>
    <li>
        <a class="share-pinterest" href="//pinterest.com/pin/create/%20button?url=<?php echo urlencode(get_permalink($post->ID)); ?>&description=<?php echo get_the_title(); ?>" target="_blank" title="Pin it">
            <svg id="pinterest" data-name="pinterest" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61.48 61.48">
                <path fill="#FFFFFF" d="M31.78,63a30.1,30.1,0,0,1-8.73-1.28,25.52,25.52,0,0,0,3.12-6.56s.36-1.36,2.16-8.45c1,2,4.16,3.84,7.48,3.84,9.89,0,16.61-9,16.61-21.09,0-9.09-7.72-17.61-19.49-17.61C18.37,11.83,11,22.32,11,31c0,5.28,2,10,6.28,11.77a1.06,1.06,0,0,0,1.52-.8c.16-.52.48-1.88.64-2.44A1.51,1.51,0,0,0,19,37.85a8.93,8.93,0,0,1-2-6C17,24,22.77,17.07,32.1,17.07c8.24,0,12.81,5,12.81,11.81,0,8.85-3.92,16.33-9.77,16.33a4.76,4.76,0,0,1-4.84-5.92C31.22,35.41,33,31.2,33,28.4c0-2.52-1.36-4.64-4.16-4.64-3.28,0-5.92,3.4-5.92,8a12.81,12.81,0,0,0,1,4.88c-3.36,14.25-4,16.73-4,16.73a26.94,26.94,0,0,0-.52,7.08A30.77,30.77,0,1,1,31.78,63Z" transform="translate(-1.04 -1.5)"/>
            </svg>
        </a>
    </li>
    <li>
        <a class="share-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_the_permalink(); ?>&title=<?php echo get_the_title(); ?>&source=Jonaky_Blog" title="Share on Linkedin" target="_blank">
            <svg id="linkedin" data-name="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292 292">
                <path fill="#FFFFFF" d="M186.4 142.4c0 19-15.3 34.5-34.2 34.5 -18.9 0-34.2-15.4-34.2-34.5 0-19 15.3-34.5 34.2-34.5C171.1 107.9 186.4 123.4 186.4 142.4zM181.4 201.3h-57.8V388.1h57.8V201.3zM273.8 201.3h-55.4V388.1h55.4c0 0 0-69.3 0-98 0-26.3 12.1-41.9 35.2-41.9 21.3 0 31.5 15 31.5 41.9 0 26.9 0 98 0 98h57.5c0 0 0-68.2 0-118.3 0-50-28.3-74.2-68-74.2 -39.6 0-56.3 30.9-56.3 30.9v-25.2H273.8z" transform="translate(-104.55 -69.65)" />
            </svg>
        </a>
    </li>
    <li>
        <a class="share-whatsapp" href="https://api.whatsapp.com/send?text=<?php echo get_the_title(); ?>: <?php echo get_the_permalink(); ?>" data-action="share/whatsapp/share" title="Share on Whatsapp" target="_blank">
            <svg id="whatsapp" data-name="whatsapp" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
                <path fill="#FFFFFF" d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" transform="translate(-5.55 -4.65)" />
            </svg>
        </a>
    </li>
    <li>
        <a class="share-email" href="mailto:type%20email%20address%20here?subject=I%20wanted%20to%20share%20this%20post%20with%20you%20from%20<?php bloginfo('name'); ?>&body=<?php echo get_the_title(); ?> - <?php echo get_the_permalink(); ?>" title="Email to a friend/colleague" target="_blank">
            <svg id="email" data-name="email" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                <path fill="#FFFFFF" d="M101.3 141.6v228.9h0.3 308.4 0.8V141.6H101.3zM375.7 167.8l-119.7 91.5 -119.6-91.5H375.7zM127.6 194.1l64.1 49.1 -64.1 64.1V194.1zM127.8 344.2l84.9-84.9 43.2 33.1 43-32.9 84.7 84.7L127.8 344.2 127.8 344.2zM384.4 307.8l-64.4-64.4 64.4-49.3V307.8z" transform="translate(-105.55 -60.65)" />
            </svg>
        </a>
    </li>
</ul>
