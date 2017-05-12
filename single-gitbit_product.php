<?php while ( have_posts() ) : the_post(); ?>
<?php $product = get_post_meta($post->ID, 'gitbit_product', true); ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_template_part( 'template-parts/head/site-head' ); ?>
  <?php get_template_part( 'template-parts/post/meta' ); ?>
</head>
<body id="body" <?php body_class(); ?>>
	<div class='site'>
		<?php get_header(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<main class="ms-Grid product-page">
				<header class="hero ms-Grid-row ms-u-textAlignCenter app-wrapper">
					<div class="topic ms-Grid-col ms-u-sm12 ms-fontSize-sPlus ms-fontWeight-semilight">
						<?php the_terms( $post->ID, 'gitbit_product_topic', '', ' / ' ); ?>
					</div>
					<div class="ms-Grid-col ms-u-sm12">
						<h1 class="title ms-font-su"><?php the_title(); ?></h1>
					</div>
					<div class="excerpt ms-Grid-col ms-u-sm12 ms-fontWeight-semilight ms-font-l">
						<?php the_excerpt(); ?>
					</div>
				</header>
				<section class="hero grey-background">
					<div class="app-wrapper">
						<div class="ms-Grid-row">
							<div class="ms-Grid-col ms-u-sm12 ms-u-textAlignCenter">
								<iframe src="<?php echo $product['video'] ?>?modestbranding=1&rel=0" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
							</div>
						</div>
					</div>
				</section>
				<section class="hero">
					<div class="app-wrapper">
						<div class="ms-Grid-row">
							<div class="ms-Grid-col ms-u-sm12 ms-u-textAlignCenter">
								<h2 class="ms-font-xxl">Features</h2>
							</div>
						</div>
						<ul class="features ms-Grid-row ms-font-xl">
							<?php 
								the_terms( $post->ID, 'gitbit_product_feature', 
									'<li class="feature icon-list ms-Grid-col ms-u-sm12 ms-u-md6 ms-u-xl4 ms-u-textAlignCenter"><i class="ms-Icon ms-Icon--CheckMark color-green" aria-hidden="true"></i>',
									'</li><li class="feature icon-list ms-Grid-col ms-u-sm12 ms-u-md6 ms-u-xl4 ms-u-textAlignCenter"><i class="ms-Icon ms-Icon--CheckMark color-green" aria-hidden="true"></i>',
									'</li>'
								);
							?>
						</ul>
					</div>
				</section>
				<section class="hero grey-background">
					<div class="app-wrapper">
						<div class="ms-Grid-row">
							<div class="ms-Grid-col ms-u-sm12 ms-u-md6">
								<blockquote>
									<img class="quotemark" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/open-quote.png" />
									<h3 class="ms-font-xxl quote"><?php echo $product['quote1'] ?></h3>
								</blockquote>
							</div>
							<div class="ms-Grid-col ms-u-sm12 ms-u-md6">
								<blockquote>
									<img class="quotemark" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/open-quote.png" />
									<h3 class="ms-font-xxl quote"><?php echo $product['quote2'] ?></h3>
								</blockquote>
							</div>
						</div>
					</div>
				</section>
				<section class="hero">
					<div class="app-wrapper">
						<div class="features ms-Grid-row">
							<div class="ms-Grid-col ms-u-sm12 ms-u-xl6 ms-u-textAlignCenter ms-u-xlPush6">
								<?php the_post_thumbnail('featured-image'); ?>
							</div>
							<div class="ms-Grid-col ms-u-sm12 ms-u-xl6 ms-fontWeight-light ms-font-xl ms-u-xlPull6">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</section>
				<section class="hero grey-background">
					<div class="app-wrapper">
						<div class="ms-Grid-row">
							<div class="ms-Grid-col ms-u-sm12 ms-u-textAlignCenter">
								<iframe src="<?php echo $product['slideshare'] ?>" width="595" height="485"
										frameborder="0" marginwidth="0" marginheight="0" scrolling="no"
										style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;"
										allowfullscreen>
								</iframe>
							</div>
						</div>
					</div>
				</section>
				<section class="hero">
					<div class="app-wrapper">
						<div class="ms-Grid-row">
							<?php   if(has_term('24/7 IT Support', 'gitbit_product_services')) { ?>
								<div class="ms-Grid-col ms-u-sm12 ms-u-md4">
									<div class="ms-Grid-row">
										<div class="ms-Grid-col ms-u-sm1">
											<h2 class="ms-font-xxl"><i class="ms-Icon ms-Icon--DeveloperTools" aria-hidden="true"></i></h2>
										</div>
										<div class="ms-Grid-col ms-u-sm11">
											<h2 class="ms-font-xxl"><?php the_title(); ?> is covered under <a href="/247-it-support">24/7 IT support</a></h2>
										</div>
									</div>
								</div>
							<?php } if(has_term('Business Essentials', 'gitbit_product_services')) { ?>
								<div class="ms-Grid-col ms-u-sm12 ms-u-md4">
									<div class="ms-Grid-row">
										<div class="ms-Grid-col ms-u-sm1">
											<h2 class="ms-font-xxl"><i class="ms-Icon ms-Icon--CloudWeather" aria-hidden="true"></i></h2>
										</div>
										<div class="ms-Grid-col ms-u-sm11">
											<h2 class="ms-font-xxl"><?php the_title(); ?> is available as an addon for <a href="/business-essentials">Business Essentials</a></h2>
										</div>
									</div>
								</div>
							<?php } if(has_term('Consulting', 'gitbit_product_services')) { ?>
								<div class="ms-Grid-col ms-u-sm12 ms-u-md4">
									<div class="ms-Grid-row">
										<div class="ms-Grid-col ms-u-sm1">
											<h2 class="ms-font-xxl"><i class="ms-Icon ms-Icon--PartyLeader" aria-hidden="true"></i></h2>
										</div>
										<div class="ms-Grid-col ms-u-sm11">
											<h2 class="ms-font-xxl">Contact our <a href="/consulting">Digital Advisors</a> to schedule a demo or find the right package for you</h2>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</section>
				<section class="hero grey-background">
					<div class="app-wrapper">
						<div class="ms-Grid-row">
							<div class="ms-Grid-col ms-u-sm12 ms-u-textAlignCenter">
								<h2 class="ms-font-xxl"><?php the_title(); ?> integrates with the following products</h2>
							</div>
							<div class="ms-Grid-col ms-u-sm12">
								<ul class="integrations ms-Grid-row ms-font-xl">
									<?php 
										the_terms( $post->ID, 'gitbit_product_integration', 
											'<li class="integration icon-list ms-Grid-col ms-u-sm12 ms-u-md6 ms-u-xl4 ms-u-textAlignCenter"><i class="ms-Icon ms-Icon--Link color-green" aria-hidden="true"></i>',
											'</li><li class="integration icon-list ms-Grid-col ms-u-sm12 ms-u-md6 ms-u-xl4 ms-u-textAlignCenter"><i class="ms-Icon ms-Icon--Link color-green" aria-hidden="true"></i>',
											'</li>'
										);
									?>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<section class="hero">
					<div class="app-wrapper">
						<div class="ms-Grid-row">
							<div class="ms-Grid-col ms-u-sm12 ms-u-textAlignCenter">
								<h2 class="ms-font-xxl">Request a demo</h2>
							</div>
							<div class="ms-Grid-col ms-u-sm12 ms-u-xl6 ms-u-textAlignCenter ms-u-xlPush3">
								<div class="fiber-ninja-form">
									<?php echo do_shortcode("[ninja_form id=4]"); ?>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>
		</div>

		<?php get_footer(); ?>
		<?php get_template_part( 'template-parts/post/meta-product' ); ?>
	</div>
</body>
</html>
<?php endwhile; ?>