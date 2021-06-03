var search = document.getElementById('search');
search.addEventListener('click', search_content);
function search_content(){
    var search_content = document.getElementById('search_content');
    search_content.classList.toggle('search_style');
    search_content.autofocus;
}

// var slider = document.getElementById("myRange");
// var output = document.getElementById("priceValue");
// output.innerHTML = slider.value;
//
// slider.oninput = function() {
//     output.innerHTML = this.value;
// }

$( function() {
    $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 500,
        values: [ 75, 450 ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
        " - $" + $( "#slider-range" ).slider( "values", 1 ) );
} );
