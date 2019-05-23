<?php get_header(); ?>

<main>
<div class="mainbar">
  <div class="inside__article--style">

<?php if(have_posts()): while(have_posts()):the_post(); ?>


  <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
  <span class="tab tag_<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
  <h1 class="article__title"><?php the_title(); ?></h1>
  <?php the_content('Read more'); ?>

<?php endwhile; endif; ?>

<span class="old">
  <?php previous_post_link('%link','古い記事へ'); ?>
</span>
<span class="new">
  <?php next_post_link('%link','新しい記事へ'); ?>
</span>

  </div>
  <!-- ./single_style -->
</div>

<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>​
