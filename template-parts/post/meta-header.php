<header class='ms-Grid-row'>
  <h1 itemprop="name" class="article-title ms-font-su ms-Grid-col ms-u-sm12 ms-u-md8 ms-u-lg10"><?php the_title(); ?></h1>
  <?php $date_published_style = is_page() ? 'style="display:none;"' : null ?>
  <span <?php echo $date_published_style ?> itemprop="datePublished" content="<?php the_modified_date('Y-m-d'); ?>" class="ms-fontWeight-light ms-Grid-col ms-u-sm12 ms-u-md8 ms-u-lg10"><?php the_modified_date('F j, Y'); ?></span>
  <div class="ms-fontWeight-light ms-Grid-col ms-u-sm12 ms-u-textAlignCenter">
    <?php the_post_thumbnail('featured-image'); ?>
  </div>
</header>
