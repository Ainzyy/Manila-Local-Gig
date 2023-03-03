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
                  <div class="carousel_caption">
                     <h1 class="carousel_title">Banner</h1>
                     <p class="carousel_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id cupiditate
                        corporis laudantium quae velit quam.</p>
                  </div>
               </div>
               <div class="carousel_item">
                  <img src="../images/rak.jpg" alt="" class="carousel_img">
               </div>
               <div class="carousel_item">
                  <img src="../images/1.jpg" alt="" class="carousel_img">
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
                    <a href="<?php echo $row['ig_links']; ?>" class="btn">Follow</a>
                </div>
                <?php endwhile; ?>
            </div>

        </div>
        </section>


        <!-- GALLERY -->

        <section class="galleryHome">
          <h1>GALLERY</h1>
            <div class="image-grid">
              <img class="image-grid-col-2 image-grid-row-2" src="../images/5.jpg" alt="architecture">
              <img src="../images/5.jpg" alt="architecture">
              <img src="../images/5.jpg" alt="architecture">
              <img src="../images/5.jpg" alt="architecture">
              <img src="../images/5.jpg" alt="architecture">
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