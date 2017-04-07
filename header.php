<header class='site-header'>
  <div class='app-wrapper'>
    <div class='ms-Grid'>
      <div class='ms-Grid-row'>
        <div class='ms-Grid-col ms-u-sm6 ms-u-hiddenMdUp site-logo'>
          <a href="<?php bloginfo( 'wpurl' );?>">
            <img src='<?php bloginfo('template_directory'); ?>/assets/GitBit-logo-50x50.png' alt='GitBit' height='40' width='40' class='logo'/>
          </a>
        </div>
        <div class='ms-Grid-col ms-u-md4 ms-u-hiddenSm site-logo'>
          <a href="<?php bloginfo( 'wpurl' );?>">
            <img src='<?php bloginfo('template_directory'); ?>/assets/GitBit-logo-50x50.png' alt='GitBit' height='40' width='40' class='logo'/>
            <span class='ms-font-xxl site-title'><?php echo get_bloginfo( 'name' ); ?></span>
          </a>
        </div>
        <nav id="site-nav" class='site-nav ms-Grid-col ms-u-sm6 ms-u-md8' role="navigation">
          <?php
            wp_nav_menu( array(
              'menu_class'     => 'ms-u-hiddenMdDown',
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
      </div>
    </div>
  </div>
</header>
