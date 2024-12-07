
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

<div class="overlay"></div>

<header>
  <div class="container">
    <div class="row">
      <div class="col-100 header-container">

        <div class="main-header">
          <div class="header-path">
            <a href="<?php echo BASE_URL; ?>" class="text-color-secondary">slrncl.com</a>
            <span class="text-color-secondary">/</span>

            <?php if ( $is_post ) { ?> 
              <a href="<?php echo BASE_URL; ?>/blog/">blog</a> <span class="text-color-secondary">/</span> ...
            <?php } else { ?>  
              <span><?php echo $page; ?></span>
            <?php } ?>

          </div>
          <div class="menu-button">
            <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px">
              <line x1="0" y1="8" x2="16" y2="8" />
              <line x1="8" y1="0" x2="8" y2="16" />
            </svg>
          </div>
        </div>
        
        <div class="menu-panel box large primary-bg">
          <div class="nav-columns">
            <div class="column">
              <ul>
                <li><a href="<?php echo BASE_URL; ?>/about">About</a></li>
                <li><a href="<?php echo BASE_URL; ?>/work">Work</a></li>
                <li><a href="<?php echo BASE_URL; ?>/blog/">Blog</a></li>
                <li><a href="<?php echo BASE_URL; ?>/now">Now</a></li>
                <li><a href="<?php echo BASE_URL; ?>/contact">Contact</a></li>
              </ul>
            </div>
            <div class="column">
              <ul>
                <li><a href="<?php echo BASE_URL; ?>/moments/">Moments</a></li>
                <li><a href="<?php echo BASE_URL; ?>/notes">Notes</a></li>
                <li><a href="<?php echo BASE_URL; ?>/sketchbook">Sketchbook</a></li>
                <li><a href="<?php echo BASE_URL; ?>/things">Things</a></li>
                <li><a href="<?php echo BASE_URL; ?>/bikes">Bikes</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</header>