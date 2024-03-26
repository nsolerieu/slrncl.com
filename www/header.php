
<?php define('BASE_URL', 'https://slrncl.com'); ?>

<!DOCTYPE html>

<html lang="en">

<head>

  <title>slrncl / <?php echo $page; ?> <?php if ( $is_post ) { echo '/'.$post_title; } ?></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="Nicolas Solerieu - Web designer, father, cyclist and weirdo based in San Luis Obsipo, CA" />
  <link rel="icon" type="image/x-icon" href="https://slrncl.com/assets/favicon.ico">

  <meta name="author" content="Nicolas SOLERIEU">
  <meta name="publisher" content="Nicolas SOLERIEU">

  <link href="https://github.com/nsolerieu" rel="me">
  <link rel="canonical" href="https://slrncl.com">
  <link rel="pingback" href="https://webmention.io/slrncl.com/xmlrpc">
  <link rel="webmention" href="https://webmention.io/slrncl.com/webmention">

  <meta property="og:title" content="<?php echo $page; ?> <?php if ( $is_post ) { echo '/'.$post_title; } ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="<?php echo BASE_URL; ?>/assets/img/slrncl-og-image.png" />

  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/boot.css" >
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css" >

</head>

<!-- BODY -->
<body id="body" class="page page-<?php echo $page; ?>">

  <header>
    <div class="container">
      <div class="col-100">
        <nav class="header-nav">
          <a href="<?php echo BASE_URL; ?>/index" class="home-button menu-item <?php if($page == 'home') { echo 'active'; } ?>"></a>
          <a href="<?php echo BASE_URL; ?>/work" class="menu-item <?php if($page == 'work') { echo 'active'; } ?>">Work</a>
          <a href="<?php echo BASE_URL; ?>/bikes"class="menu-item <?php if($page == 'bikes') { echo 'active'; } ?>">Bikes</a>
          <a href="<?php echo BASE_URL; ?>/now"class="menu-item <?php if($page == 'now') { echo 'active'; } ?>">Now</a>
          <a href="<?php echo BASE_URL; ?>/blog/"class="menu-item <?php if($page == 'blog') { echo 'active'; } ?>">Blog</a>
        </nav>
      </div>
    </div>
  </header>