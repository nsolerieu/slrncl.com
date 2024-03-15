<?php

require_once("parsedown.php");

define('FILE_EXT', 'md');

$post_name = filter_var($_GET['post'], FILTER_DEFAULT);
$folder_name = filter_var($_GET['folder'], FILTER_DEFAULT);
$file_path = __DIR__.'/content/posts/'.$folder_name.'/'.$post_name.'.'.FILE_EXT;

$page = "blog";
include "../header.php";

?>

<main>

  <section class="blog-content medium-padding-bottom medium-padding-top">
    <div class="container">
      <div class="row">
        <div class="col-100">
        	<div class="the-content">

          	<?php 

          	if ( file_exists($file_path) ) {

							$file = fopen($file_path, 'r');
							$post_title = trim(fgets($file),'#');
							fclose($file);

							$parsedown = new Parsedown();
							$content = $parsedown->text(file_get_contents($file_path));
							echo $content;

						} else {

							echo'
								<h2>Not Found</h2>
								<p>Sorry, couldn\'t find that post... Try something else, or go <a href="https://slrncl.com/blog/">back to the feed</a> to select a different post.</p>
							';
						}

          	?>

        		<p class='large-margin-top text-small text-color-secondary'>
        			<a href="/blog/">&larr; Index</a> <span class="nav-separator">/</span> Published on <?php echo substr($post_name,0,10); ?>
        		</p>
        	
          </div>
        </div>
      </div>
    </div>
  </section>

</main> 

<?php include "../footer.php";?>