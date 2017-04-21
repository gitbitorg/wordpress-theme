<div class="about" style="display: none;">
  <span itemprop="name"><?php the_title(); ?></span>
  <span itemprop="headline"><?php the_title(); ?></span>
  <span itemprop="author"><?php echo the_author(); ?></span>
  <a itemprop="mainEntityOfPage" href="<?php the_permalink(); ?>"><span itemprop="name"><?php the_title(); ?></span></a>
  <span itemprop="dateCreated" content="<?php the_date_xml(); ?>"><?php the_date('F j, Y'); ?></span>
  <span itemprop="datePublished" content="<?php the_date_xml(); ?>"><?php the_date('F j, Y'); ?></span>
  <span itemprop="dateModified" content="<?php the_modified_date('Y-m-d'); ?>"><?php the_modified_date('Y-m-d'); ?></span>
  <div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
    <img src="<?php the_post_thumbnail_url( 'large' ); ?>">
    <meta itemprop="url" content="<?php the_post_thumbnail_url( 'large' ); ?>">
    <meta itemprop="width" content="600">
    <meta itemprop="height" content="600">
  </div>

  <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
    <span itemprop="name">GitBit</span>
    <span itemprop="url" content="http://gitbit.org/"></span>
    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/gitbit-logo-160x60.png">
      <meta itemprop="url" content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/gitbit-logo-160x60.png">
      <meta itemprop="width" content="160">
      <meta itemprop="height" content="60">
    </div>
  </span>
  <?php
    $categories = get_the_category();
    if ($categories) {
      foreach($categories as $category) { echo '<span itemprop="about">' . $category->name . '</about>'; }
    }
  ?>
  <span itemprop="keywords"><?php
    $posttags = get_the_tags();
    if ($posttags) {
      $count=0;
      foreach($posttags as $tag) {
        if ($count > 0) { echo ', '; }
        echo $tag->name;
        $count++;
      }
    }
  ?></span>
</div>
