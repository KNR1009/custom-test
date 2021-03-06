<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package custom-test
 */

get_header();
?>

<main id="primary" class="site-main col-md-8">
  <?php if (have_posts()) : ?>

    <header class="page-header">
      <?php
      the_archive_title('<h1 class="page-title">', '</h1>');
      the_archive_description('<div class="archive-description">', '</div>');
      ?>
    </header><!-- .page-header -->

    <?php
    /* Start the Loop */
    while (have_posts()) :
      the_post();

    ?>

      <ul>
        <li>
          <a href="<?php echo get_the_permalink() ?>"><?php the_title() ?></a>
        </li>
      </ul>
  <?php


    endwhile;

    the_posts_navigation();

  else :

    get_template_part('template-parts/content', 'none');

  endif;
  ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
