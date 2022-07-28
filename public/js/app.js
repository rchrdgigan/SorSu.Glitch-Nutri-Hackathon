var map = L.map('map').setView([12.782339, 124.026729], 11);
L.tileLayer( 'https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=CxC7aDuJcG77pDH5yjGS', {
    maxZoom: 15,
    attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
}).addTo(map);

const __lati__bulan = 12.664994;
const __long__bulan = 123.887735;
let bulan = [__lati__bulan, __long__bulan]
L.marker(bulan).addTo(map)
    .bindPopup('<h2>Municipality Bulan</h2><a href="#kamote">Fuits (20)</a><br><a href="#karots">Vegetable (40)</a>')
    .openPopup();

let matnog = [12.588073, 124.078905];
L.marker(matnog).addTo(map)
.bindPopup('<h2>Municipality Matnog</h2><a href="#kamote">Root Crops (20)</a><br><a href="#karots">Vegetable (40)</a>')
.openPopup();

let bulusan = [12.754213, 124.129723];
L.marker(bulusan).addTo(map)
.bindPopup('<h2>Municipality Bulusan</h2><a href="#kamote">Root Crops (20)</a><br><a href="#karots">Vegetable (40)</a>')
.openPopup();

let provicial = [12.970435, 124.004532];
L.marker(provicial).addTo(map)
.bindPopup('<h2>Municipality Sorosogon</h2><a href="#kamote">Root Crops (20)</a><br><a href="#karots">Vegetable (40)</a><br><a href="#karots">Fruits (20)</a>')
.openPopup();