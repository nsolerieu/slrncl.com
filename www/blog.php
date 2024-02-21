<?php

$page = "blog";
include "header.php";

require_once("parsedown.php");

define('FILE_EXT', 'md');

$content = '';
$is_post = !empty($_GET['post']);

function sortPosts($a, $b) {
	$a_value = $a->getFilename();
	$b_value = $b->getFilename();
	return strcmp($b_value, $a_value);
}

if ( $is_post ) {
	// Single post page
	$post_name = filter_var($_GET['post'], FILTER_DEFAULT);
	$file_path = __DIR__.'/assets/blog/'.$post_name.'.'.FILE_EXT;

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
			<a href="https://slrncl.com/blog.php">home page</a> to select a different post.</p>';
	}
} else {
	// Blog main page - list all posts
	$files = new DirectoryIterator(__DIR__.'/assets/blog/');
	$files_array = [];
	foreach ($files as $file) {
		if ( $file->isFile() && $file->getExtension() == FILE_EXT ) {
			array_push($files_array, $file->getFileInfo());
		}
	}
	usort($files_array, 'sortPosts'); // See sortPosts() function above
	foreach ($files_array as $file) {
		$filename_no_ext = $file->getBasename('.'.FILE_EXT);
		$file_pointer = $file->openFile();
		$post_title = trim($file_pointer->fgets(),'# ');
		$dateonly = substr($filename_no_ext,0,7);
		$content .= '<a href="blog.php?post='.$filename_no_ext.'" class="blog-list-item"><span class="blog-list-item__date text-color-secondary">'.str_replace("-", "&nbsp;/&nbsp;", $dateonly).'</span><span class="blog-list-item__title">'.$post_title.'</span></a>';
	}
}

?>

<main>

	<?php if ( ! $is_post ) { ?>
	<section class="blog-hero medium-padding-top">
    <div class="container">
      <div class="row">
        <div class="col-100">
        	<h1>Blog</h1>
        </div>
      </div>
    </div>
  </section>
	<?php } ?>

  <section class="blog-content medium-padding-bottom medium-padding-top">
    <div class="container">
      <div class="row">
        <div class="col-100">
        	<div class="the-content">

          	<?php echo $content; ?>

          	<?php if ( $is_post ) { $dateonly = substr($post_name,0,10); $formateddate = str_replace("-", "/", $dateonly); ?>
        			<p class='large-margin-top text-small text-color-secondary'><a href="blog.php">&larr; Index</a> <span class="nav-separator">/</span> Published on <?php echo $formateddate; ?></p>
        		<?php } ?>

          </div>
        </div>
      </div>
    </div>
  </section>

</main> 

<?php include "footer.php";?>