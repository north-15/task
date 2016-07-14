<?php get_header(); ?>
  <div id="top-photo">
    <img src="<?php echo get_template_directory_uri(); ?>/images/PAK76_chikyuugitobin20130804.jpg" alt="" width="100%">
  </div>
  <div class="contents">
  <?php get_sidebar(); ?>
  <div id="top-article">
    <p>- 記事一覧 -</p>
  </div>
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : ?>
        <div id="articles">
          <?php the_post(); ?>
          <?php the_post_thumbnail(); ?>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
          <p><?php echo get_the_date(); ?></p>
          <!-- <p><?php the_category(); ?></p> -->
          <p><?php the_tags(); ?></p>
          <!-- <p><?php the_content(); ?></p> -->
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
<?php get_footer(); ?>