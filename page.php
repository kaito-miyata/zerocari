<?php get_header(); ?>

<main>
<div class="mainbar">
<?php if(have_posts()): while(have_posts()):the_post(); ?>


  <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
  <h2 class="article__title"><?php the_title(); ?></h2>
  <p><?php the_content('Read more'); ?></p>

<?php endwhile; endif; ?>


</div>
<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>​
