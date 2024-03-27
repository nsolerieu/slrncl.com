<?php

require_once("parsedown.php");

define('FILE_EXT', 'md');

$content = '';
$is_post = !empty($_GET['post']);

$post_name = filter_var($_GET['post'], FILTER_DEFAULT);
$file_path = __DIR__.'/content/posts/'.$post_name.'.'.FILE_EXT;

if ( file_exists($file_path) ) {
	$file = fopen($file_path, 'r');
	$post_title = trim(fgets($file),'#');
	fclose($file);

	$parsedown = new Parsedown();
	$content = $parsedown->text(file_get_contents($file_path));
} else {
	$content = '
		<h2>Not Found</h2>
		<p>Sorry, couldn\'t find a post with that name. Please try again, or go to the 
		<a href="https://slrncl.com/blog/">home page</a> to select a different post.</p>';
}

$page = "blog";
include "../header.php";

?>

<main>

  <section class="blog-content large-padding-top">
    <div class="container">
      <div class="row">
        <div class="col-100">
        	<div class="the-content">

          	<?php echo $content; ?>

          	<?php 
          		$date = substr($post_name,0,10); 
          	?>

        		<p class='large-margin-top text-small text-color-secondary'>
        			<a href="/blog/">&larr; Index</a> <span class="nav-separator">/</span> Published on <?php echo $date; ?>
        		</p>
        	
          </div>
        </div>
      </div>
    </div>
  </section>

</main> 

<?php include "../footer.php";?>