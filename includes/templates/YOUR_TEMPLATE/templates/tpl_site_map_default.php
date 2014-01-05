<?php
/**
 * Page Template
 *
 * Loaded by index.php?main_page=site_map <br />
 * Displays site-map and some hard-coded navigation components
 *
 * @package templateSystem
 * @copyright Copyright 2013 Vinos de Frutas Tropicales (lat9)
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_site_map_default.php 4340 2006-09-02 04:54:53Z drbyte $
 */
?>
<div class="centerColumn" id="siteMap">

<h1 id="siteMapHeading"><?php echo HEADING_TITLE; ?></h1>

<?php if (DEFINE_SITE_MAP_STATUS >= '1' and DEFINE_SITE_MAP_STATUS <= '2') { ?>
<div id="siteMapMainContent" class="content">
<?php
/**
 * require the html_define for the site_map page
 */
  require($define_page);
?>
</div>
<?php } ?>

<?php
// Pull in the common formatting for the site_map and page_not_found pages (lat9)
require($template->get_template_dir('/tpl_modules_map_list.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_modules_map_list.php'); 
?>

<div class="buttonRow back"><?php echo zen_back_link() . zen_image_button(BUTTON_IMAGE_BACK, BUTTON_BACK_ALT) . '</a>'; ?></div>
</div>