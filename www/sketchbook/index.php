<?php $page = "sketchbook";?>
<?php include "../header.php";?>

<main>

  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-100">
          <h1>Sketchbook</h1>
          <p class="medium-margin-top text-small text-color-secondary max-width-400">
            No particular theme or purpose other than archival without relying on social media. Mostly done on ipad/procreate. Mostly tracing crappy picture  of stuff I found intriguing – as a meditative exercise, not much of a creative one.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="gallery" >
    <div class="large-container">
      <div class="row sketchbook-feed">
        <?php
        
        $dir_name = "images/";
        $images = glob("images/*.png");

        foreach( array_reverse($images) as $image ) {
          
          $date = substr($image,7,10);
          $cleandate = str_replace('-', '.', $date);

          echo '<figure class="sketchbook-page">
                  <img data-src="https://slrncl.com/sketchbook/'.$image.'" alt="A sketch by Nicolas Solerieu made on '.$cleandate.'" class="lazy zoomlightbox-trigger fluid-img">
                  <div class="sketchbook-page__date">'.$cleandate.'<div>
                </figure>';
          }

        ?>
      </div>
    </div>
  </section>

<?php include '../footer.php';?>
