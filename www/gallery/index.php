<?php $page = "gallery";?>
<?php include "../header.php";?>

<main>

  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-100">
          <h1>Visual archive</h1>
          <p class="medium-margin-top text-small text-color-secondary max-width-400">
            My replacement for Dribbble. A place to post occasional creative explorations.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="gallery" >
    <div class="large-container">
      <div class="row poster-feed">
        <?php
        
        $dir_name = "images/";
        $images = glob("images/*.png");

        foreach( array_reverse($images) as $image ) {

          $title = substr($image,18);
          $titlenoextension = substr($title, 0, -4);
          $cleantitle = str_replace('-', ' ', $titlenoextension);
          
          $date = substr($image,7,10);
          $cleandate = str_replace('-', '.', $date);

          echo '<figure class="poster">
                  <img data-src="https://slrncl.com/gallery/'.$image.'" alt="'.$cleantitle.' by Nicolas Solerieu" class="lazy zoomlightbox-trigger poster__frame">
                  <div class="small-margin-top">
                    <h2 class="text-small no-margin captialize">'.$cleantitle.'</h2>
                    <p class="text-small text-color-secondary">'.$cleandate.'<p>
                  </div>
                </figure>';
          }

        ?>
      </div>
    </div>
  </section>

<?php include '../footer.php';?>
