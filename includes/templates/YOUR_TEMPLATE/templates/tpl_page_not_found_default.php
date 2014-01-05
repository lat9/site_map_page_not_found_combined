<?php
/**
 * Page Template
 *
 * Displays page-not-found message and site-map (if configured)
 *
 * @package templateSystem
 * @copyright Copyright 2013 Vinos de Frutas Tropicales (lat9)
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_page_not_found_default.php 3230 2006-03-20 23:21:29Z drbyte $
 */
?>
<div class="centerColumn" id="pageNotFound">
  <h1 id="pageNotFoundHeading"><?php echo HEADING_TITLE; ?></h1>

<?php if (DEFINE_PAGE_NOT_FOUND_STATUS == '1') { ?>
  <div id="pageNotFoundMainContent" class="content">
<?php
/**
 * require the html_define for the page_not_found page
 */
  require($define_page); ?>
  </div>
<?php } ?>

<?php
// Pull in the common formatting for the site_map and page_not_found pages (lat9)
require($template->get_template_dir('/tpl_modules_map_list.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_modules_map_list.php'); 
?>

  <div class="buttonRow back"><?php echo zen_back_link() . zen_image_button(BUTTON_IMAGE_BACK, BUTTON_BACK_ALT) . '</a>'; ?></div>
</div>
