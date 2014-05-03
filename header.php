<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="Mt.K" />

  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">

  <title><?php wp_title("|", true, "right"); bloginfo("name"); ?></title>
</head>

<body>
  <header class="site-header">
    <div class="wrap header-wrap">
      <h1><a href="<?php echo home_url("/"); ?>"><?php bloginfo("name"); ?></a></h1>

      <nav class="nav">
        <div class="nav-wrap">
          <?php wp_nav_menu(); ?>
        </div>
      </nav>
    </div>
  </header>
<?php wp_head(); ?>