<footer class='site-footer ms-Grid'>
  <div class='ms-Grid-row'>
    <section class='pages footer-link-list ms-Grid-col ms-u-sm12 ms-u-md3 ms-u-textAlignCenter'>
      <h3>Pages</h3>
      <ul>
        <?php wp_list_pages( '&title_li=' ); ?>
      </ul>
    </section>
    <section class='pages footer-link-list ms-Grid-col ms-u-sm12 ms-u-md3 ms-u-textAlignCenter'>
      <h3>Follow Us</h3>
      <ul>
        <?php if ( get_option('facebook') ) { ?>
          <li><a target="_blank" href="<?php echo get_option('facebook'); ?>">Facebook</a></li>
        <?php } ?>
        <?php if ( get_option('linkedin') ) { ?>
          <li><a target="_blank" href="<?php echo get_option('linkedin'); ?>">LinkedIn</a></li>
        <?php } ?>
        <?php if ( get_option('twitter') ) { ?>
          <li><a target="_blank" href="<?php echo get_option('twitter'); ?>">Twitter</a></li>
        <?php } ?>
        <?php if ( get_option('googleplus') ) { ?>
          <li><a target="_blank" href="<?php echo get_option('googleplus'); ?>">Google+</a></li>
        <?php } ?>
        <?php if ( get_option('github') ) { ?>
          <li><a target="_blank" href="<?php echo get_option('github'); ?>">GitHub</a></li>
        <?php } ?>
      </ul>
    </section>
    <section class='site-description ms-Grid-col ms-u-sm12 ms-u-textAlignCenter'>
      <span class='ms-font-xl'><?php echo get_bloginfo( 'description' ); ?></span>
    </section>
  </div>
</footer>
<?php wp_footer(); ?>
