<?php get_header(); ?>

  <main>
    <!-- メインバー -->
    <div class="mainbar">
      <section class="information">
        <h2 class="mainbar_heading">INFORMATION</h2>
        <div class="information__box">

            <?php
$infoPosts = get_posts('numberposts=5');
foreach($infoPosts as $post):
?>
          <div class="information__box--item">
                        <?php the_time('Y.m.d'); ?>

                        <span class="tab tag_<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">  <i class="fa fa-folder-open"></i><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
                        <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?></a>
          </div>
<?php endforeach; ?>

      </div><!-- ./information__box -->
    </section>
<!-- ./information -->


    <section class="pickup">
      <h2 class="mainbar_heading">PICKUP</h2>

      <div class="article__box">
      <?php
 $infoPosts = get_posts('numberposts=2&category=1,3,4,5');
 foreach($infoPosts as $post):
?>
        <article>
          <div class="img__box">
            <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('medium'); ?>

          </div>
          <h3 class="pickup__title"><?php the_title(); ?></h3>
          </a>

        </article>


<?php endforeach; ?>
    </div>

    </section>
<!-- ./pickup -->



    <section class="newArticle">
      <h2 class="mainbar_heading">新着記事</h2>

      <?php
 $infoPosts = get_posts('numberposts=5');
 foreach($infoPosts as $post):
?>
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

<?php endforeach; ?>

    </section>
    <!-- ./newArticle -->

  </div>
  <!-- ./mainbar -->



  <?php get_sidebar(); ?>




  </main>



<?php get_footer(); ?>
