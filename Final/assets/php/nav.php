<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?> | Manila Local Gigs</title>
        <script src="../javascript/script.js"></script>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="<?php echo $style; ?>">
        <link rel="stylesheet" href="../css/lightbox.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/f74f3994a1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    </head>
    <body>
        <section class="header">
          <!-- NAVIGATION BAR -->
            <nav>
                <a href="index.php">
                    <img src="../images/MeDrawing.png" alt="">
                </a>
                <div class="nav-links">
                    <i class="fa fa-times-circle" aria-hidden="true" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="artist.php">ARTIST</a></li>
                        <li><a href="gigs.php">GIGS</a></li>
                        <li><a href="venues.php">VENUES</a></li>
                        <li><a href="gallery.php">GALLERY</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                        <li><a href="#about">ABOUT</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" aria-hidden="true" onclick="showMenu()"></i>
            </nav>
        </section>