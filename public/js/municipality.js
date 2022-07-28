var map = L.map('map').setView([12.782339, 124.026729], 11);
L.tileLayer( 'https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=CxC7aDuJcG77pDH5yjGS', {
    maxZoom: 15,
    attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
}).addTo(map);

let bulusan = [12.754213, 124.129723];
L.marker(bulusan).addTo(map)
.bindPopup('<h2>Municipality Bulusan</h2><a href="#kamote">Root Crops (20)</a><br><a href="#karots">Vegetable (40)</a>')
.openPopup();