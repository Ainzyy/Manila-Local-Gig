<?php
  $title = "Gigs";
  $page = 'gigs';
  $style = '../css/gigs.css';
  $script = 'gigs';
  include_once('../assets/php/nav.php');
?>
<!-- START CONTENTS -->

<!-- MAIN CONTENTS -->
<section class="upcomingGigs">
  <div class="table">
    <div class="table__header">
      <h1>UPCOMING GIGS</h1>
    </div>
    <div class="table__body">
      <thead>
        <tr>
          <th> Gig Name </th>
          <th> Date </th>
          <th> Venue </th>
          <th> Lineup </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td> 1 </td>
          <td> 2 </td>
          <td> 3 </td>
        </tr>
      </tbody>
    </div>
  </div>
</section>

<section class="manilaMap">
  <div id="map">
  <div class='place' style='text-align: center;'>
    <h3>Mandala Park</h3>
    <img src="https://images.summitmedia-digital.com/spotph/images/weekend-market-mandala-park.jpg" width='150px' height='150px' alt="">
  </div>
  </div>
</section>


<!-- END CONTENTS -->
<?php
    include_once('../assets/php/footer.php');
?>