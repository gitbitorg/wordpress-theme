<footer class='site-footer ms-Grid'>
  <div class="app-wrapper">
    <?php if ( is_active_sidebar( 'footer_sidebar' ) ) : ?>
      <nav class='ms-Grid-row footer_sidebar'>
        <?php dynamic_sidebar( 'footer_sidebar' ); ?>
      </nav>
    <?php endif; ?>
    <section class='site-description ms-u-textAlignCenter ms-Grid-row'>
      <span class='ms-font-xl ms-Grid-col ms-u-sm12'><?php echo get_bloginfo( 'description' ); ?></span>
    </section>
  </div>
</footer>
<?php wp_footer(); ?>
