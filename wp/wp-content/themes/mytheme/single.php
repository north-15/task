<?php get_header(); ?>

<!-- <?php print_r($post); ?> -->

<div class="contents">
  <?php get_sidebar(); ?>

  <article>
    <h1><?php echo $post->post_title; ?></h1>
    <!-- <p><?php echo $post->post_modified; ?></p> -->
    <pre><?php echo $post->post_content; ?></pre>
    <p class="single-date"><?php echo $post->post_date; ?></p>
  </article>
</div>


<?php get_footer(); ?>