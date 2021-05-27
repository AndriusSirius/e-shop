var search = document.getElementById('search');
search.addEventListener('click', search_content);
function search_content(){
    var search_content = document.getElementById('search_content');
    search_content.classList.toggle('search_style');
    search_content.autofocus;
}

var slider = document.getElementById("myRange");
var output = document.getElementById("priceValue");
output.innerHTML = slider.value;

slider.oninput = function() {
    output.innerHTML = this.value;
}
