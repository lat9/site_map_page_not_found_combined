<?php
/**
 * Page Template
 *
 * Loaded by index.php?main_page=site_map and index.php?main_page=page_not_found <br />
 * Displays site-map and some hard-coded navigation components
 *
 * @package templateSystem
 * @copyright Copyright 2013 Vinos de Frutas Tropicales (lat9)
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Sun Feb 17 23:22:33 2013 -0500 Modified in v1.5.2 $
 */
//- Common formatting for the site_map and page_not_found pages
//
$div_id = ($_GET['main_page'] == FILENAME_SITE_MAP) ? 'siteMapList' : 'pageNotFoundList';
?>
    <div id="<?php echo $div_id; ?>" class="mapList"><?php echo $zen_SiteMapTree->buildTree(); ?>
      <ul>
<?php if (SHOW_ACCOUNT_LINKS_ON_SITE_MAP=='Yes') { ?>
        <li><?php echo '<a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">' . PAGE_ACCOUNT . '</a>'; ?>
        <ul>
          <li><?php echo '<a href="' . zen_href_link(FILENAME_ACCOUNT_EDIT, '', 'SSL') . '">' . PAGE_ACCOUNT_EDIT . '</a>'; ?></li>
          <li><?php echo '<a href="' . zen_href_link(FILENAME_ADDRESS_BOOK, '', 'SSL') . '">' . PAGE_ADDRESS_BOOK . '</a>'; ?></li>
          <li><?php echo '<a href="' . zen_href_link(FILENAME_ACCOUNT_HISTORY, '', 'SSL') . '">' . PAGE_ACCOUNT_HISTORY . '</a>'; ?></li>
          <li><?php echo '<a href="' . zen_href_link(FILENAME_ACCOUNT_NEWSLETTERS, '', 'SSL') . '">' . PAGE_ACCOUNT_NOTIFICATIONS . '</a>'; ?></li>
        </ul></li>
        <li><?php echo '<a href="' . zen_href_link(FILENAME_SHOPPING_CART) . '">' . PAGE_SHOPPING_CART . '</a>'; ?></li>
        <li><?php echo '<a href="' . zen_href_link(FILENAME_CHECKOUT_SHIPPING, '', 'SSL') . '">' . PAGE_CHECKOUT_SHIPPING . '</a>'; ?></li>
<?php } //endif ?>
        <li><?php echo '<a href="' . zen_href_link(FILENAME_ADVANCED_SEARCH) . '">' . PAGE_ADVANCED_SEARCH . '</a>'; ?></li>
        <li><?php echo '<a href="' . zen_href_link(FILENAME_PRODUCTS_NEW) . '">' . PAGE_PRODUCTS_NEW . '</a>'; ?></li>
        <li><?php echo '<a href="' . zen_href_link(FILENAME_SPECIALS) . '">' . PAGE_SPECIALS . '</a>'; ?></li>
        <li><?php echo '<a href="' . zen_href_link(FILENAME_REVIEWS) . '">' . PAGE_REVIEWS . '</a>'; ?></li>
        <li><?php echo BOX_HEADING_INFORMATION; ?>
        <ul>
<?php if (DEFINE_SHIPPINGINFO_STATUS <= '1') { ?>
          <li><?php echo '<a href="' . zen_href_link(FILENAME_SHIPPING) . '">' . BOX_INFORMATION_SHIPPING . '</a>'; ?></li>
<?php } ?>
<?php if (DEFINE_PRIVACY_STATUS <= '1') { ?>
          <li><?php echo '<a href="' . zen_href_link(FILENAME_PRIVACY) . '">' . BOX_INFORMATION_PRIVACY . '</a>'; ?></li>
<?php } ?>
<?php if (DEFINE_CONDITIONS_STATUS <= '1') { ?>
          <li><?php echo '<a href="' . zen_href_link(FILENAME_CONDITIONS) . '">' . BOX_INFORMATION_CONDITIONS . '</a>'; ?></li>
<?php } ?>
<?php if (DEFINE_CONTACT_US_STATUS <= '1') { ?>
          <li><?php echo '<a href="' . zen_href_link(FILENAME_CONTACT_US, '', 'SSL') . '">' . BOX_INFORMATION_CONTACT . '</a>'; ?></li>
<?php } ?>
<?php if ( isset ($phpBB) && is_object ($phpBB) && (isset($phpBB->phpBB['db_installed_config']) && $phpBB->phpBB['db_installed_config']) && (isset($phpBB->phpBB['files_installed']) && $phpBB->phpBB['files_installed'])  && (PHPBB_LINKS_ENABLED=='true')) { ?>
          <li><?php echo '<a href="' . zen_href_link($phpBB->phpBB['phpbb_url'] . FILENAME_BB_INDEX, '', 'NONSSL', false, '', true) . '" target="_blank">' . BOX_BBINDEX . '</a>'; ?></li>
<?php } ?>
<?php if (isset ($external_bb_url) && isset ($external_bb_text) && !empty($external_bb_url) && !empty($external_bb_text)) { ?>
            <li><?php echo '<a href="' . $external_bb_url . '" target="_blank">' . $external_bb_text . '</a>'; ?></li>
<?php } ?>
<?php if (MODULE_ORDER_TOTAL_GV_STATUS == 'true') { ?>
          <li><?php echo '<a href="' . zen_href_link(FILENAME_GV_FAQ) . '">' . BOX_INFORMATION_GV . '</a>'; ?></li>
<?php } ?>
<?php if (MODULE_ORDER_TOTAL_COUPON_STATUS == 'true') { ?>
          <li><?php echo '<a href="' . zen_href_link(FILENAME_DISCOUNT_COUPON) . '">' . BOX_INFORMATION_DISCOUNT_COUPONS . '</a>'; ?></li>
<?php } ?>
<?php if (SHOW_NEWSLETTER_UNSUBSCRIBE_LINK == 'true') { ?>
          <li><?php echo '<a href="' . zen_href_link(FILENAME_UNSUBSCRIBE) . '">' . BOX_INFORMATION_UNSUBSCRIBE . '</a>'; ?></li>
<?php } ?>
<?php if (DEFINE_PAGE_2_STATUS <= '1') { ?>
          <li><?php echo '<a href="' . zen_href_link(FILENAME_PAGE_2) . '">' . BOX_INFORMATION_PAGE_2 . '</a>'; ?></li>
<?php } ?>
<?php if (DEFINE_PAGE_3_STATUS <= '1') { ?>
          <li><?php echo '<a href="' . zen_href_link(FILENAME_PAGE_3) . '">' . BOX_INFORMATION_PAGE_3 . '</a>'; ?></li>
<?php } ?>
<?php if (DEFINE_PAGE_4_STATUS <= '1') { ?>
          <li><?php echo '<a href="' . zen_href_link(FILENAME_PAGE_4) . '">' . BOX_INFORMATION_PAGE_4 . '</a>'; ?></li>
<?php } ?>
        </ul></li>
      </ul>
    </div>
    <br class="clearBoth" />