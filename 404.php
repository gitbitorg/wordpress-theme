<?php get_header(); ?>

<main>
  <div class='app-wrapper'>
    <div class='ms-Grid'>
      <div class='ms-Grid-row'>
        <div class='ms-Grid-col ms-u-sm12 ms-u-textAlignCenter'>
          <h2>
            <i class="ms-Icon ms-Icon--Error" aria-hidden="true"></i>
            <?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?>
          </h2>
          <p>
            <?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
