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
