//------------------ MAP ------------------

var locations = [
    ["<div style='text-align: center;'><h3>Mandala Park</h3><img src='https://images.summitmedia-digital.com/spotph/images/weekend-market-mandala-park.jpg' width='150px' height='150px' alt=''></div>", 14.588620254901354, 121.04246686560928],
    ["<div style='text-align: center;'><h3>Social House</h3><img src='../gigvenuephoto/socialhouse.jpg' width='150px' height='150px' alt=''></div>", 14.57610278654274, 121.0191188294643],
    ["<div style='text-align: center;'><h3>70's Bistro</h3><img src='../gigvenuephoto/19east.jpg' width='150px' height='150px' alt=''></div>", 14.630675046960093, 121.06134121147596],
    ["<div style='text-align: center;'><h3>19 East</h3><img src='../gigvenuephoto/saguijo.jpg' width='150px' height='150px' alt=''></div>", 14.459092222453174, 121.04599013639363],
    ["<div style='text-align: center;'><h3>Jess and Pat's</h3><img src='../gigvenuephoto/jessandpats.jpg' width='150px' height='150px' alt=''></div>", 14.647963016092643, 121.05733929964659]
  ];
  
  var map = L.map('map').setView([14.588988, 121.042274], 11);
  mapLink =
    '<a href="http://openstreetmap.org">OpenStreetMap</a>';
  L.tileLayer(
    'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; ' + mapLink + ' Contributors',
      maxZoom: 18,
    }).addTo(map);
  
  for (var i = 0; i < locations.length; i++) {
    marker = new L.marker([locations[i][1], locations[i][2]])
      .bindPopup(locations[i][0])
      .addTo(map);
  }





//------------------ TABLE ------------------

const search = document.querySelector('.input-group input'),
    table_rows = document.querySelectorAll('tbody tr'),
    table_headings = document.querySelectorAll('thead th');

// 1. Searching for specific data of HTML table
search.addEventListener('input', searchTable);

function searchTable() {
    table_rows.forEach((row, i) => {
        let table_data = row.textContent.toLowerCase(),
            search_data = search.value.toLowerCase();

        row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
        row.style.setProperty('--delay', i / 25 + 's');
    })

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
    });
}

// 2. Sorting | Ordering data of HTML table

table_headings.forEach((head, i) => {
    let sort_asc = true;
    head.onclick = () => {
        table_headings.forEach(head => head.classList.remove('active'));
        head.classList.add('active');

        document.querySelectorAll('td').forEach(td => td.classList.remove('active'));
        table_rows.forEach(row => {
            row.querySelectorAll('td')[i].classList.add('active');
        })

        head.classList.toggle('asc', sort_asc);
        sort_asc = head.classList.contains('asc') ? false : true;

        sortTable(i, sort_asc);
    }
})


function sortTable(column, sort_asc) {
    [...table_rows].sort((a, b) => {
        let first_row = a.querySelectorAll('td')[column].textContent.toLowerCase(),
            second_row = b.querySelectorAll('td')[column].textContent.toLowerCase();

        return sort_asc ? (first_row < second_row ? 1 : -1) : (first_row < second_row ? -1 : 1);
    })
        .map(sorted_row => document.querySelector('tbody').appendChild(sorted_row));
}