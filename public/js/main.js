jQuery(document).ready( function($) {

    // Masonry layout
    $('.edrea-masonry').masonry({
        itemSelector: '.edrea-card',
    });

    // Ajax Load More
    var ajax_url = $('#button-load-more').val();
    var total_posts = 1;
    $('#button-load-more').click( function( e ) {

        e.preventDefault();

        total_posts += 1;

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
                    $('.edrea-masonry').append( $content ).masonry( 'appended', $content );
                } else {
                    $('#button-load-more').text( $('#button-text' ).val() );
                }

            },

        });
    })

});


