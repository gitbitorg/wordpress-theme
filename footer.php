<footer class='site-footer ms-Grid'>
  <div class='ms-Grid-row'>
    <section class='pages footer-link-list ms-Grid-col ms-u-sm12 ms-u-md3 ms-u-textAlignCenter'>
      <h3>Pages</h3>
      <ul>
        <?php wp_list_pages( '&title_li=' ); ?>
      </ul>
    </section>
    <section class='pages footer-link-list ms-Grid-col ms-u-sm12 ms-u-md3 ms-u-textAlignCenter'>
      <h3>Pages</h3>
      <ul>
        <li><a href="<?php echo get_option('github'); ?>">GitHub</a></li>
        <li><a href="<?php echo get_option('twitter'); ?>">Twitter</a></li>
      </ul>
    </section>
    <section class='site-description ms-Grid-col ms-u-sm12 ms-u-textAlignCenter'>
      <span class='ms-font-xl'><?php echo get_bloginfo( 'description' ); ?></span>
    </section>
  </div>
</footer>
</div> <!-- site -->
<?php wp_footer(); ?>
</body>
</html>
