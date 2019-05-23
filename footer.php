


  <footer>
    <nav>
      <ul>
        <?php wp_nav_menu( array(
     'theme_location'=>'place_footer',
              'container'     =>'',
              'menu_class'    =>'',
              'items_wrap' => '%3$s',//<ul>を出力しない
            ));
      ?>
      </ul>
    </nav>

  </footer>
  <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/main.js" charset="utf-8"></script>

</body>
</html>
