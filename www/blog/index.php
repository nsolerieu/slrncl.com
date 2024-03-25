<?php

define('FILE_EXT', 'md');

$content = '';

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

  <section class="blog-feed medium-padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-100">

					<?php

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

						$first_post_year = 2017;
						$current_year = date("Y");
						
						for ($year = $current_year; $year >= $first_post_year; $year--) {

							$empty_year = TRUE;

							echo '<h2 class="large-margin-top">'.$year.'</h2>';

							foreach ($files_array as $file) {

								$filename_no_ext = $file->getBasename('.'.FILE_EXT);
								$file_pointer = $file->openFile();

								$post_title = trim($file_pointer->fgets(),'# ');
								$date = substr($filename_no_ext,2,8);
								$post_year = substr($filename_no_ext,0,4);
								$wordCount = str_word_count(file_get_contents($file));

								//<a href="post.php?folder='.$folder.'&post='.$filename_no_ext.'" class="blog-list-item row-box-reveal-hover">

								if ( $post_year == $year ) {

									$empty_year = FALSE;

									echo '
										<a href="'.$filename_no_ext.'" class="blog-list-item row-box-reveal-hover">
											<p class="blog-list-item__title">'.$post_title.'</p>
											<div class="blog-list-item__info">
												<div class="blog-list-item__info__date">'.$date.'</div>
												<div class="blog-list-item__info__wordcount">'.$wordCount.'</div>
											</div>
										</a>
									';
								}
							}

							if ( $empty_year == TRUE ) {
								echo '<div class="box secondary-bg no-border small text-color-secondary text-small">I had nothing to share in '.$year.'</div>';
							}

						}

        	?>

        </div>
      </div>
    </div>
  </section>

</main> 

<?php include "../footer.php";?>