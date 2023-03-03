<?php
  $title = "Artists";
  $page = $style = 'artist';
  $script = '';
  include_once('../assets/php/nav.php');
  require_once('../config/admindb.php');
  $query = "select * from artist_data ORDER BY RAND() LIMIT 8";
  $result = mysqli_query($con,$query); 
  
 ?>
<!-- While Loop -->
 <section class ="artist">
  <?php while($row = mysqli_fetch_array($result)): ?>
    <div class="card">
      <div class="card-image">
        <img src="<?php echo $row['image_url']; ?>" alt="Profile image">
      </div>
      <p class="name"><?php echo $row['band_name']; ?></p>
      <p><?php echo $row['band_type']; ?></p>
      <p><?php echo $row['descript']; ?></p>
      <div class="socials">
        <form action="<?php echo $row['ig_links']; ?>" target="_blank">
          <button class="instagram"><i class="fab fa-instagram"></i></button>
          </form>
      </div>
    </div>
  <?php endwhile; ?>
  </section>

<!-- END CONTENTS -->
<?php
    include_once('../assets/php/footer.php');
?>