var map = L.map('map').setView([12.782339, 124.026729], 11);
L.tileLayer( 'https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=CxC7aDuJcG77pDH5yjGS', {
    maxZoom: 10,
    attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
}).addTo(map);
L.Control.geocoder().addTo(map);

