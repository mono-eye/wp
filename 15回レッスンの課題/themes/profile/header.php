<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?php echo get_theme_file_uri(); ?>img/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/style.css'; ?>">
    <?php wp_head(); ?>
  </head>

  <body>
    <header id="header" class="wrapper">
      <h1 class="site-title"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Profile"></a></h1>
      <nav>
        <ul>
          <li><a href="<?php echo get_page_link( $id ); ?>#about">About</a></li>
          <li><a href="<?php echo get_page_link( $id ); ?>#bicycle">Bicycle</a></li>
        </ul>
      </nav>
    </header>