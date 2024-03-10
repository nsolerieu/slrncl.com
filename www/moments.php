<?php $page = "moments";?>
<?php include "header.php";?>

<main>

  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-100">
          <h1  class="text-color-primary">Moments</h1>
          <p class="text-regular text-color-secondary">
            I got away from instagram but still wanted a place to keep my photos. Many years, many cameras. <a href="#why">Learn more</a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="moments" >
    <div class="gallery-container moments-feed">
        <?php

        $dir_name = "assets/img/moments/";
        $images = glob($dir_name."*.jpg");
        foreach( array_reverse($images) as $image ) {

        echo '<figure class="diapo">
                <img data-src="https://slrncl.com/'.$image.'" alt="'.substr($image, 11).'" class="lazy zoomlightbox-trigger" >
              </figure>';
        }

        ?>
    </div>
  </section>

  <section id="why" class="padded-section">
    <div class="container">
      <div class="row">
        <div class="col-100">
          <h2 class="no-margin-top medium-margin-bottom text-color-primary">Why this is.</h2>
          <p class="text-regular text-color-secondary">
            This is mostly intended for my personal consumption. If you read these words and feel anything from perusing this gallery, that's great. But there is really no goal to this. We all see things. Few can catch and hold on to the feeling of a moment without the help of photography.
          </p>
          <p class="text-regular text-color-secondary medium-margin-top">
            I'm building this thing because there doesn't seem to be much satisfying alternative to instagram. Although this is an attempt at exiting the voyeurism of social media, there is still some ego in needing to keep a record. I'm working on it here.
          </p>
          <p class="text-regular text-color-secondary medium-margin-top">
            I'm trying to not grow my footprint too much and tame my ego. These compressed JPGs will be hosted here as I'm purging all my cloud accounts and other devices.
          </p>
          <p class="text-regular text-color-secondary medium-margin-top">
            It's simple like a folder, but online. A place to store all of my photos that are currently scattered across google drive, my phone library, old phones, my instagram archive, and a bunch of SD cards. The images are intentionally low-res, the moment matters. I remember the details.
          </p>
          <p class="medium-margin-top text-small text-color-secondary">
            Final point &mdash; I live in the same world, go slower and look around.
          </p>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'footer.php';?>
