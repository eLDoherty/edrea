jQuery(document).ready( function($) {

    // Masonry layout
    $('.edrea-masonry').masonry({
        itemSelector: '.edrea-card',
        gutter : 0,
        stagger: 30,
    });

    // Ajax Load More
    var ajax_url = $('#button-load-more').val();
    var total_posts = 1;
    $('#button-load-more').click( function( e ) {

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
                    $('#button-load-more').text('Load more');
                    $('.edrea-masonry').append( $content ).masonry( 'appended', $content );
                    $('.edrea-masonry').masonry('reloadItems');
                    $('html, body').animate({
                        scrollTop: $("#button-load-more").offset().top
                    }, 200);
                } else {
                    $('#button-load-more').text( $('#button-text' ).val() );
                }

            },

        });
    })

});


