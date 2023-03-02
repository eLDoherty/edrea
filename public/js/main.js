jQuery(document).ready( function($) {

    // Masonry layout
    $('.edrea-masonry').masonry({
        itemSelector: '.edrea-card',
    });

    // Ajax Load More
    var ajax_url = $('#button-load-more').val();
    var total_posts = parseInt($('#current_total_post').val());
    $('#button-load-more').click( function( e ) {

        e.preventDefault();

        total_posts += 3;

        var wrapper = $('#edrea-ajax-wrapper');

        $.ajax({
            type: "POST",
            url: ajax_url,
            dataType: 'html',
            data: {
                action:'edrea_load_more',
                count: total_posts
            },
            success: function( res ){
                wrapper.html( res );
                $('.edrea-masonry').masonry('reloadItems');
            },
            error: function( error ) {
                console.log( error );
            }
        });
    })

});


