<?php
/**
 * Front page template
 *
 * @package PrintHub_3D
 */
get_header();
?>
<section class="hero">
  <h1><?php esc_html_e( 'Welkom bij PrintHub 3D', 'printhub-3d' ); ?></h1>
  <p><?php esc_html_e( 'Jouw regionale hub voor kleurrijke en hoogwaardige 3D prints.', 'printhub-3d' ); ?></p>
  <a href="#quote" class="button"><?php esc_html_e( 'Vraag een offerte aan', 'printhub-3d' ); ?></a>
</section>

<section id="quote" class="quote-form">
  <?php echo do_shortcode( '[printhub-3d-quote]' ); ?>
</section>

<section class="products">
  <h2><?php esc_html_e( 'Laatste producten', 'printhub-3d' ); ?></h2>
  <?php echo do_shortcode( '[products limit="4" columns="4" orderby="date" order="DESC"]' ); ?>
</section>
<?php
get_footer();
