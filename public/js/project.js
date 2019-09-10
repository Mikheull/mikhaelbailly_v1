// Script pour choisir un type de filtre de projet
$( "#project_hub .navbar .fitler_buttons" ).click(function() {
    var url = this.dataset.filter;
    $( "#project_hub .navbar .fitler_buttons" ).removeClass('active');
    $( this ).addClass('active');
    if(url == 'all'){
        $( ".project-item" ).fadeIn(200);
        $( ".project-item" ).show();
    }else{
        $( ".project-item" ).hide();
        $( "[data-category='"+ url +"']" ).fadeIn(200);
    }
});





$( "#open-gallery" ).click(function() {
    $( "#gallery_wrapper" ).toggleClass('hidden');
});

$(document).ready(function() {
    $(document).on("click", "#close-gallery", function(e) {
        $( '#gallery_wrapper' ).toggleClass( 'hidden' );
    });
});
$(document).bind('keydown', function(e) {
    if(e.which == 27) {
        if ( $( '#gallery_wrapper' ).hasClass('hidden') ) {
            return false;
        }else{
            e.preventDefault();
            $( '#gallery_wrapper' ).toggleClass( 'hidden' );
        }
        return false;
    }
});







$( "#open-prototype" ).click(function() {
    $( "#prototype_wrapper" ).toggleClass('hidden');
});



$(document).ready(function() {
    $(document).on("click", "#close-prototype", function(e) {
        $( '#prototype_wrapper' ).toggleClass( 'hidden' );
    });
});
$(document).bind('keydown', function(e) {
    if(e.which == 27) {
        if ( $( '#prototype_wrapper' ).hasClass('hidden') ) {
            return false;
        }else{
            e.preventDefault();
            $( '#prototype_wrapper' ).toggleClass( 'hidden' );
        }
        return false;
    }
});
