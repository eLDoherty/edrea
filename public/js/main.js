jQuery(document).ready( function($) {

    $('.edrea-masonry').imagesLoaded().always( function() {

        $('.edrea-masonry').masonry({
            itemSelector: '.edrea-card',
            gutter : 3,
            stagger: 9,
            percentPosition: true,
            transitionDuration: '1.4s',
            columnWidth: '.edrea-grid-sizer'
        });

    });
  
    // Ajax Load More
    var ajax_url = $('#button-load-more').val();
    var total_posts = 1;
    $('#button-load-more').on( 'click', function(e) {

        e.preventDefault(); 

        total_posts += 1; 

        $(this).text('Loading...');
        
        $.ajax({
            type: "POST", 
            url: ajax_url,
            dataType: 'html',
            data: {
                action:'edrea_load_more',
                count: total_posts
            },
            success: function( res ){

                if( res ) {
                    var $content = $( res );
                    $('.edrea-masonry').imagesLoaded().always( function() {
                        $('.edrea-masonry').append( $content );
                    }).done( function() {
                        $('.edrea-masonry').masonry( 'appended', $content );
                        window.scrollBy(0, 350);
                    });
                    $('.edrea-masonry').masonry('layout');
                    $('#button-load-more').text('Load more');
                } else {
                    $('#button-load-more').text( $('#button-text' ).val() );
                }

            },

        });
    });

    // Mobile menu button handler
    $('.edrea-mobile-button').on( 'click', function() {
        $('.edrea-mobile-navigation').css({ left: '40px', opacity: '1'});
    });
    $('.close-mobile-menu').on( 'click', function() {
        $('.edrea-mobile-navigation').css({ left: '100%', opacity: '0'});
    });
    $('.menu-item-depth-0.menu-item-has-children').on( 'click', function(e) {
        $(this).children('.menu-depth-1').slideToggle();
        $(this).toggleClass('menu-active');
    });

    // Handle comment form when empty
    $('#commentform').on('submit', function(e) {
        if( $('#comment').val().length < 1 ) {
             e.preventDefault();
            alert('Please fill the comment field');
            return false;
        } 
        return true;
    });
  
});


