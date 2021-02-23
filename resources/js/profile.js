function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active text-gray-900 border-l-4 border-blue-600 p-1", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active text-gray-900 border-l-4 border-blue-600 p-1";
}