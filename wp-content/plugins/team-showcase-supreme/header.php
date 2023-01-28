<div class="wpm-6310-header">
  <ul class="wpm-6310-nav">
    <li class="has-dropdown">
      <a class="<?php if(isset($_GET['page']) && ($_GET['page'] == 'wpm-team-showcase' || $_GET['page'] == 'wpm-template-01-10' || $_GET['page'] == 'wpm-template-11-20' || $_GET['page'] == "wpm-template-21-30" || $_GET['page'] == "wpm-template-31-40")) echo "wpm-6310-active" ?>">Short code & Templates</a>
      <ul class="dropdown-menu">
        <li>
          <a href="<?php echo admin_url("admin.php?page=wpm-team-showcase"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'wpm-team-showcase') echo "wpm-6310-active" ?>">All ShortCode</a>
        </li>
        <li>
          <a href="<?php echo admin_url("admin.php?page=wpm-template-01-10"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'wpm-template-01-10') echo "wpm-6310-active" ?>">Template 01-10</a>
        </li>
        <li>
          <a href="<?php echo admin_url("admin.php?page=wpm-template-11-20"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'wpm-template-11-20') echo "wpm-6310-active" ?>">Template 11-20</a>
        </li>
        <li>
          <a href="<?php echo admin_url("admin.php?page=wpm-template-21-30"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'wpm-template-21-30') echo "wpm-6310-active" ?>">Template 21-30</a>
        </li>
        <li>
          <a href="<?php echo admin_url("admin.php?page=wpm-template-31-40"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'wpm-template-31-40') echo "wpm-6310-active" ?>">Exclusive Templates</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="<?php echo admin_url("admin.php?page=wpm-team-showcase-team-member"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'wpm-team-showcase-team-member') echo "wpm-6310-active" ?>">Manage Members</a>
    </li>
    <li>
      <a href="<?php echo admin_url("admin.php?page=wpm-team-showcase-category"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'wpm-team-showcase-category') echo "wpm-6310-active" ?>">Manage Category</a>
    </li>
    <li>
      <a href="<?php echo admin_url("admin.php?page=wpm-team-showcase-license"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'wpm-team-showcase-license') echo "wpm-6310-active" ?>">License</a>
    </li>
    <li>
      <a href="<?php echo admin_url("admin.php?page=wpm-team-showcase-settings-help"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'wpm-team-showcase-settings-help') echo "wpm-6310-active" ?>">Help</a>
    </li>
    <li>
      <a href="<?php echo admin_url("admin.php?page=wpm-6310-wpmart-plugins"); ?>" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'wpm-6310-wpmart-plugins') echo "wpm-6310-active" ?> wpm-6310-plugin-menu">WpMart Plugins</a>
    </li>
    <li>
      <a href="https://www.wpmart.org/downloads/team-showcase-supreme-pro/" target="_blank" class="wpm-6310-pro">Upgrade To Pro<i class="fas fa-star"></i></a>
    </li>
  </ul>
  <h3>
    <span class="dashicons dashicons-flag"></span>
    Notifications
  </h3>
  <p>Thank you for using the "Team Members - Team with Slider" plugin free version. I Just wanted to see if you have any questions or concerns about my plugins. If you do, Please do not hesitate to <a href="https://wordpress.org/support/plugin/team-showcase-supreme/" target="_blank">file a bug report</a></p>
  <p>By the way, did you know we also have a <a href="http://www.wpmart.org/downloads/team-showcase-supreme-pro/" target="_blank">Premium Version</a>? It offers 38+ templates with exclusive CSS3 effects. It also comes with 16/7 personal support.</p>
  <p>Thank you Again!</p>
  <?php 
  wpm_6310_team_showcase_supreme_install();
  ?>
</div>
