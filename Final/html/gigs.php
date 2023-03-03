<?php
  $title = "Gigs";
  $page = $script = $style = 'gigs';
  include_once('../assets/php/nav.php');
  require_once('../config/admindb.php');
  $query = "select * from schedule";
   $result = mysqli_query($con,$query);
?>
<!-- START CONTENTS -->

<!-- MAIN CONTENTS -->
<main class="table-container">

  <div class="table">
  <section class="table__header">
            <h1>Upcoming Gig Schedules</h1>
            <div class="input-group">
                <input type="search" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Gig Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Production <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Location <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Date <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Gig Description <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tbody>
                    <tr>
                        <td> <?php echo $row['gig_name']; ?> </td>
                        <td> <?php echo $row['production']; ?> </td>
                        <td> <?php echo $row['place']; ?> </td>
                        <td> <?php echo $row['date']; ?> </td>
                        <td>  <?php echo $row['gig_desc']; ?>  </td>
                    </tr>
                </tbody>
                <?php endwhile; ?>
            </table>
        </section>
    </div>
    
    </main>
    <section class="manilaMap">
      <h1>Interactive Map</h1>
      <div id="map">
      </div>
    </section>


<!-- END CONTENTS -->
<?php
    include_once('../assets/php/footer.php');
?>