<header class='site-header'>
  <div class='app-wrapper'>
    <section>
      <div class="ms-u-hiddenMdUp site-logo">
        <a href="<?php bloginfo( 'wpurl' );?>">
          <img src='<?php bloginfo('template_directory'); ?>/assets/GitBit-logo-50x50.png' alt='GitBit' height='40' width='40' class='logo'/>
        </a>
      </div>
      <div class="ms-u-hiddenSm site-logo">
        <a href="<?php bloginfo( 'wpurl' );?>">
          <img src='<?php bloginfo('template_directory'); ?>/assets/GitBit-logo-50x50.png' alt='GitBit' height='40' width='40' class='logo'/>
          <span class='ms-font-xxl site-title'><?php echo get_bloginfo( 'name' ); ?></span>
        </a>
      </div>
    </section>
    <section>
      <nav id="site-nav" class='site-nav' role="navigation">
        <?php
          wp_nav_menu( array(
            'menu_class'     => 'nav-header-list ms-u-hiddenMdDown',
            'theme_location' => 'nav-menu'
          ) );
        ?>
        <button class="ms-Button ms-Button--hero ms-u-hiddenLgUp nav-panel-button">
          <i class="ms-Icon ms-Icon--GlobalNavButton" aria-hidden="true"></i>
        </button>
        <div class="ms-Panel nav-panel">
          <button class="ms-Panel-closeButton ms-PanelAction-close nav-panel-close">
            <i class="ms-Panel-closeIcon ms-Icon ms-Icon--Cancel"></i>
          </button>
          <div class="ms-Panel-contentInner">
            <p class="ms-Panel-headerText"><?php echo get_bloginfo( 'name' ); ?></p>
            <div class="ms-Panel-content">
              <?php
                wp_nav_menu( array(
                  'menu_class'     => 'nav-panel-list ms-font-l',
                  'theme_location' => 'nav-menu'
                ) );
              ?>
            </div>
          </div>
        </div>
        <script type="text/javascript">
          var PanelExamples = document.getElementsByClassName("site-nav");
          for (var i = 0; i < PanelExamples.length; i++) {
            (function() {
              var PanelExampleButton = PanelExamples[i].querySelector(".nav-panel-button");
              var PanelExamplePanel = PanelExamples[i].querySelector(".ms-Panel");
              PanelExampleButton.addEventListener("click", function(i) {
                new fabric['Panel'](PanelExamplePanel);
              });
            }());
          }
        </script>
      </nav>
    </section>
  </div>
</header>
