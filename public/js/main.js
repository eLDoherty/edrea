jQuery(document).ready( function($) {

    $('#edrea-ajax-wrapper').imagesLoaded( function() {
        $('#edrea-ajax-wrapper').masonry({
            itemSelector: '.edrea-card',
            transitionDuration: '1.5s',
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

                if( res.length > 0 ) {
                    var $content = $( res );
                    $('#edrea-ajax-wrapper').imagesLoaded().done( function() {
                        $('#edrea-ajax-wrapper').append( $content ).masonry( 'appended', $content );
                    });
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


