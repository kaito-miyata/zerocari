<?php get_header(); ?>

<main>

  <div class="mainbar">
    <span class="tab tag_<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"><i class="fa fa-folder-open"></i><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>

    <p class="category_title">
    <?php single_cat_title(); ?>に関する記事一覧
    </p>

    <section class="newArticle">

    <?php if(have_posts()): while(have_posts()): the_post();?>

      <article class="newArticle__parts">
        <span class="tab tag_<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">  <i class="fa fa-folder-open"></i><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
        <br>
        <?php the_time('Y/m/d'); ?>
        <a href="<?php the_permalink(); ?>">
          <h3 class="article__title"><?php the_title(); ?></h3>

          <div class="large">
          <?php the_post_thumbnail('medium'); ?>
          </div>
          <div class="thumbnail">
            <?php the_post_thumbnail('thumbnail'); ?>
          </div>
          <div class="excerpt">
            <?php the_excerpt(); ?>
          </div>




        </a>
      </article>

<?php endwhile; endif; ?>

    </section>
    <!-- ./newArticle -->



  <?php previous_posts_link('新しい投稿ページへ'); ?>
  <?php next_posts_link('古い投稿ページへ'); ?>


  </div>
  <!-- ./mainbar -->

<?php get_sidebar(); ?>

</main>



<?php get_footer(); ?>
