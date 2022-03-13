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
      <p>カテゴリー一覧</p>
      <?php $terms = get_terms("book-genre") ?>
      <ul>
        <? foreach ($terms as $term) : ?>
          <li><a class="nav-link" href="<?php echo get_term_link($term) ?>"><?php echo esc_html($term->name) ?></a></li>
        <? endforeach; ?>
      </ul>
    </header><!-- .page-header -->

    <?php
    /* Start the Loop */
    while (have_posts()) :
      the_post();

    ?>
  <?php
      /*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
      get_template_part('template-parts/content', get_post_type());

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
