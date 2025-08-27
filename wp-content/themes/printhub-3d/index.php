<?php
/**
 * Main template file
 *
 * @package PrintHub_3D
 */
get_header();
?>
<div class="container">
  <?php if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        </header>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile;
  else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'printhub-3d' ); ?></p>
  <?php endif; ?>
</div>
<?php
get_footer();
