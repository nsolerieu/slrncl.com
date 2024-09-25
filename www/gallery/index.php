<?php $page = "gallery";?>
<?php include "../header.php";?>

<main>

  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-100">
          <h1>Visual archive</h1>
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
                  <img data-src="https://slrncl.com/gallery/'.$image.'" alt="'.$cleantitle.' by Nicolas Solerieu" class="lazy zoomlightbox-trigger poster-frame">
                  <div class="small-margin-top">
                    <p class="text-small no-margin uppercase text-color-secondary line-height-100">'.$cleantitle.'</p>
                    <p class="text-small text-color-secondary line-height-100y">'.$cleandate.'<p>
                  </div>
                </figure>';
          }

        ?>
      </div>
    </div>
  </section>

<?php include '../footer.php';?>
