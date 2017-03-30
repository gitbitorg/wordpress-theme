<footer class='site-footer ms-Grid'>
  <div class='ms-Grid-row'>
    <section class='pages footer-link-list ms-Grid-col ms-u-sm12 ms-u-md3 ms-u-textAlignCenter'>
      <h3>Pages</h3>
      <ul>
        <?php wp_list_pages( '&title_li=' ); ?>
      </ul>
    </section>
    <section class='site-description ms-Grid-col ms-u-sm12 ms-u-textAlignCenter'>
      <span class='ms-font-xl'><?php echo get_bloginfo( 'description' ); ?></span>
    </section>
  </div>
</footer>
</div> <!-- site -->
<script src="<?php bloginfo('template_directory'); ?>/js/fabric.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
