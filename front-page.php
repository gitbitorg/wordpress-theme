<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_template_part( 'template-parts/head/site-head' ); ?>
</head>
<body id="body" <?php body_class(); ?>>
  <div class='site'>
    <?php get_header(); ?>

    <main class='homepage'>
      <section class="hero" style='background-image:url("<?php echo bloginfo('template_directory'); ?>/assets/images/people-meeting.jpg");'>
        <div class='app-wrapper'>
          <div class='ms-Grid'>
            <div class='ms-Grid-row'>
              <header class="ms-Grid-col ms-u-sm11 ms-u-lg6">
                <h1 class="ms-font-su"><?php echo get_bloginfo('name'); ?></h1>
                <span class="subtitle ms-font-xxl"><?php echo get_bloginfo( 'description' ); ?></span>
              </header>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class='app-wrapper'>
          <div class='ms-Grid'>
            <div class='ms-Grid-row'>
              <div class="ms-Grid-col ms-u-sm12 ms-u-md6 ms-u-lg4">
                <div class="card ms-u-textAlignCenter" style="max-width:350px;">
                  <div><i class="ms-Icon ms-Icon--OfficeLogo card-icon color-o365" aria-hidden="true"></i></div>
                  <div class='card-contents'>
                    <h2 class="ms-font-su card-title">Overview</h2>
                    <div class='excerpt ms-font-xl'>Find out why many companies, small and large, are making the jump to Office 365! Get answers to all your questions.</div>
                    <footer class="ms-u-textAlignRight">
                      <a class="ms-Button ms-Button--hero" href="/in-a-nutshell">
                        <span class="ms-Button-label">Learn more</span>
                      </button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="ms-Grid-col ms-u-sm12 ms-u-md6 ms-u-lg4">
                <div class="card ms-u-textAlignCenter" style="max-width:350px;">
                  <div><i class="ms-Icon ms-Icon--DeveloperTools card-icon color-green" aria-hidden="true"></i></div>
                  <div class='card-contents'>
                    <h2 class="ms-font-su card-title">Learning Resources</h2>
                    <div class='excerpt ms-font-xl'>GitBit provides information through the form of How-to “Step-by-Step” Documentation, Blogs, and Informative Videos.</div>
                    <footer class="ms-u-textAlignRight">
                      <a class="ms-Button ms-Button--hero" href="/in-a-nutshell">
                        <span class="ms-Button-label">Learn more</span>
                      </button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="ms-Grid-col ms-u-sm12 ms-u-md6 ms-u-lg4">
                <div class="card ms-u-textAlignCenter" style="max-width:350px;">
                  <div><i class="ms-Icon ms-Icon--Group card-icon color-blue" aria-hidden="true"></i></div>
                  <div class='card-contents'>
                    <h2 class="ms-font-su card-title">Support</h2>
                    <div class='excerpt ms-font-xl'>Looking for answers to your Office 365 questions? Reach out to GitBit’s Trained Professionals.</div>
                    <footer class="ms-u-textAlignRight">
                      <a class="ms-Button ms-Button--hero" href="/">
                        <span class="ms-Button-label">Learn more</span>
                      </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="hero" style='background-image:url("<?php echo bloginfo('template_directory'); ?>/assets/images/meeting.png");'>
        <div class='app-wrapper'>
          <div class='ms-Grid'>
            <div class='ms-Grid-row'>
              <header class="ms-Grid-col ms-u-sm11 ms-u-lg6 pull-right bg-teal">
                <h1 class="ms-font-su">How We Can Help</h1>
                <p class="subtitle ms-font-xl">We believe your transition to Office 365 should be an easy one. With that goal in mind, GitBit is focused on providing up to date and accurate information to assist small and mid-sized companies on their transition to Office 365.</p>
                <p class="subtitle ms-font-xl">GitBit provides information through the form of How-To “step-by-step documentation”, Blogs, and Video Learning resources.</p>
                <p class="subtitle ms-font-xl">Have questions? Feel free to reach out to us directly via the Contact Us page and expect an answer from an expert shortly. Here at GitBit all Office 365 experts are trained, certified, and qualified professionals.</p>
              </header>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class='app-wrapper'>
          <div class='ms-Grid'>
            <div class='ms-Grid-row'>
              <div class="ms-Grid-col ms-u-sm12 ms-u-textAlignCenter">
                <h1 class="ms-font-su">Looking for answers…</h1>
                <p class="ms-font-xxl">Contact our GitBit Professional Support Team with any questions you may have regarding Office 365 – whether it be during the transition, configuration, or post-setup, we’re here to help!</p>
                <a href="/contact" class="ms-Button ms-Button--primary no-decoration">
                  <span class="ms-Button-icon"><i class="ms-Icon ms-Icon--Mail"></i></span>
                  <span class="ms-Button-label">Submit Question</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php get_footer(); ?>
  </div>
</body>
</html>
