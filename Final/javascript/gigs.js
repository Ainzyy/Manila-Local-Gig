var map = L.map('map');
map.setView([14.588988, 121.042274], 12);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var marker = L.marker([14.588620254901354, 121.04246686560928]).addTo(map);

let mandala = `

<div style='text-align: center;'>
<h3>Mandala Park</h3>
  <img src="https://images.summitmedia-digital.com/spotph/images/weekend-market-mandala-park.jpg" width='150px' height='150px' alt="">
</div>
`
marker.bindPopup(mandala);