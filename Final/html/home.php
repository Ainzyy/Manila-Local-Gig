<?php
  $title = "Home";
  $page = $style = 'home';
  $script = 'script';
  include_once('../assets/php/nav.php');
  require_once('../config/admindb.php');
  $query = "select * from artist_data ORDER BY RAND() LIMIT 3";
  $result = mysqli_query($con,$query); 
?>
        <!-- BANNER -->
        <section class="banner">
          <div class="carousel__fade">
            <div class="carousel_inner">
               <div class="carousel_item carousel_item__active">
                  <img src="../images/Rakrakan.png" alt="" class="carousel_img">
               </div>
               <div class="carousel_item carousel_item__pos_next" >
                  <img src="../images/TheDeck1.jpg" alt="" class="carousel_img">
               </div>
               <div class="carousel_item carousel_item__pos_next">
                  <img src="../images/TheDeck55.jpg" alt="" class="carousel_img">
               </div>
            </div>
          </div>
        </section>


        <!-- FEATURED -->
        
        <section class="featured">
            <div class="container">

            <h1 class="heading">FEATURED</h1>

            <div class="box-container">
              <?php while($row = mysqli_fetch_array($result)): ?>
                <div class="box">
                    <img src="<?php echo $row['image_url']; ?>" alt="">
                    <h3><?php echo $row['band_name']; ?></h3>
                    <p><?php echo $row['descript']; ?></p>
                    <form action="<?php echo $row['ig_links']; ?>" target="_blank">
          <button class="btn">Follow</button>
          </form>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        </section>


        <!-- GALLERY -->

        <section class="galleryHome">
          <h1>GALLERY</h1>
            <div class="image-grid">
              <img class="image-grid-col-2 image-grid-row-2" src="../images/TheDeck55.jpg" alt="architecture">
              <img src="../images/TheDeck.jpg" alt="architecture">
              <img src="../images/TheDeck1.jpg" alt="architecture">
              <img src="../images/TheDeck2.jpg" alt="architecture">
              <img src="../images/TheDeck3.jpg" alt="architecture">
            </div>
            <div class="MoreGallery">
              <a href="../html/gallery.php" class="More">More Photos</a>
            </div>
        </section>

        <!-- CALL TO ACTION -->
        <section class="cta">
          <h1>Promote Your Gigs</h1>
          <a href="" class="hero-btn">Contact Us</a>
        </section>


<?php
include_once('../assets/php/footer.php');
?>