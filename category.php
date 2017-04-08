<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <?php $cat_id = get_query_var('cat'); ?>
  <?php $cat_data = get_option("category_$cat_id"); ?>
  <?php get_template_part( 'template-parts/head/site-head' ); ?>
  <?php get_template_part( 'template-parts/post/meta' ); ?>
</head>
<body id="body" <?php body_class(); ?>>
  <div class='site'>
    <?php get_header(); ?>
    <div class="app-wrapper">
      <main class="category ms-Grid">
        <header class="ms-Grid-row">
          <div class="ms-Grid-col ms-u-sm12 ms-u-xl6 ms-u-textAlignCenter">
            <h1 class="ms-font-su"><?php single_cat_title(); ?></h1>
            <div class="subheading"><span class="ms-font-xxl"><?php echo $cat_data['subheading'] ?></span></div>
            <img src="<?php echo $cat_data['img'] ?>" />
            <div class="description ms-font-xl"><?php echo category_description(); ?></div>
          </div>
        </header>
        <section class="ms-Grid-row posts">
          <?php
            $args = array ( 'category' => ID, 'posts_per_page' => 9, 'post__in' => get_option( 'sticky_posts' ));
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) :	setup_postdata($post);
          ?>
            <?php get_template_part( 'template-parts/card/content', get_post_format() ); ?>
          <?php endforeach; ?>
        </section>
        <section class="ms-Grid-row testimonies">
          <header class="ms-Grid-col ms-u-sm12">
            <h2 class="ms-font-xxl"><?php echo $cat_data['testimony_title'] ?></h2>
          </header>
          <div class="testimony ms-Grid-col ms-u-sm12 ms-u-lg4 ms-u-textAlignCenter">
            <a href="<?php echo $cat_data['testimony1_url'] ?>">
              <img src="<?php echo $cat_data['testimony1_image'] ?>" width="200px">
            </a>
          </div>
          <div class="testimony ms-Grid-col ms-u-sm12 ms-u-lg4 ms-u-textAlignCenter">
            <a href="<?php echo $cat_data['testimony2_url'] ?>">
              <img src="<?php echo $cat_data['testimony2_image'] ?>" width="200px">
            </a>
          </div>
          <div class="testimony ms-Grid-col ms-u-sm12 ms-u-lg4 ms-u-textAlignCenter">
            <a href="<?php echo $cat_data['testimony3_url'] ?>">
              <img src="<?php echo $cat_data['testimony3_image'] ?>" width="200px">
            </a>
          </div>
        </section>
      </main>
    </div>

    <?php get_footer(); ?>
  </div>
</body>
</html>
