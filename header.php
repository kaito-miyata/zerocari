<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/reset.css">
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="header__container">
      <h1>ゼロキャリ</h1>
      <p>ゼロからキャリアを創るメディア。<br>ワクワクする人生を。<br>次世代の働き方やキャリアを発信していきます。</p>
    </div>



    <nav>
      <ul class="nav_menu">
        <?php wp_nav_menu( array(
     'theme_location'=>'place_global',
              'container'     =>'',
              'menu_class'    =>'',
              'items_wrap' => '%3$s',//<ul>を出力しない
            ));
      ?>
      </ul>

      <div id="hamberger">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </div>
    </nav>

  </header>
