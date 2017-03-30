<footer class='site-footer'>
  <section class='pages'>
    <?php wp_list_pages( '&title_li=' ); ?>
  </section>
  <section class='site-description'>
    <span><?php echo get_bloginfo( 'description' ); ?></span>
  </section>
</footer>
</div> <!-- site -->
<script src="<?php bloginfo('template_directory'); ?>/js/fabric.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
