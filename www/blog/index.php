<?php

define('FILE_EXT', 'md');

$content = '';

function sortPosts($a, $b) {
	$a_value = $a->getFilename();
	$b_value = $b->getFilename();
	return strcmp($b_value, $a_value);
}

$files = new DirectoryIterator(__DIR__.'/content/posts/');

$files_array = [];

foreach ($files as $file) {
	if ( $file->isFile() && $file->getExtension() == FILE_EXT ) {
		array_push($files_array, $file->getFileInfo());
	}
}
usort($files_array, 'sortPosts');

foreach ($files_array as $file) {

	$filename_no_ext = $file->getBasename('.'.FILE_EXT);
	$file_pointer = $file->openFile();

	$post_title = trim($file_pointer->fgets(),'# ');
	$date = substr($filename_no_ext,2,8);
	$wordCount = str_word_count(file_get_contents($file));

	$content .= '
		<a href="'.$filename_no_ext.'" class="blog-list-item row-box-reveal-hover">
			<p class="blog-list-item__title">'.$post_title.'</p>
			<div class="blog-list-item__info">
				<div class="blog-list-item__info__date">'.$date.'</div>
				<div class="blog-list-item__info__wordcount">'.$wordCount.'</div>
			</div>
		</a>';
}

$page = "blog";
include "../header.php";

?>

<main>

	<section class="blog-hero medium-padding-top">
    <div class="container">
      <div class="row">
        <div class="col-100">
        	<h1>Blog</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="blog-content medium-padding-bottom medium-padding-top">
    <div class="container">
      <div class="row">
        <div class="col-100">
        	<div class="the-content">

          	<?php echo $content; ?>

          </div>
        </div>
      </div>
    </div>
  </section>

</main> 

<?php include "../footer.php";?>