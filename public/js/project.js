// Script pour choisir un type de filtre de projet
$( ".hub .navbar .fitler_buttons" ).click(function() {
    var url = this.dataset.filter;
    $( ".hub .navbar .fitler_buttons" ).removeClass('active');
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
    console.log('open');
    $( "#gallery_wrapper" ).toggleClass('hidden');
    // $("body").css("overflow", "hidden");
});



$( "#open-prototype" ).click(function() {
    console.log('open');
    $( "#prototype_wrapper" ).toggleClass('hidden');
    // $("body").css("overflow", "hidden");
});