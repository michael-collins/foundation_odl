<?php

/**
 * Implements template_preprocess_html().
 */
function foundation_odl_preprocess_html(&$variables) {
}

/**
 * Implements template_preprocess_page.
 */
function foundation_odl_preprocess_page(&$variables) {
}

/**
 * Implements template_preprocess_node.
 */
function foundation_odl_preprocess_node(&$variables) {
}

/**
 * Implements theme_links() targeting the main menu topbar.
 */
// function foundation_odl_links__menu_odl_site_main_nav_menu($variables) {
//   // We need to fetch the links ourselves because we need the entire tree.
//   $links = menu_tree_output(menu_tree_all_data(variable_get('menu_odl_site_main_nav_links_source', 'menu-odl-site-main-nav')));
//   $output = _foundation_odl_links($links);
//   $variables['attributes']['class'][] = 'right';

//   return '<ul' . drupal_attributes($variables['attributes']) . '>' . $output . '</ul>';
// }

/**
 * Implements theme_links() targeting the main menu topbar.
 */
function foundation_odl_links__topbar_main_menu($variables) {
  // We need to fetch the links ourselves because we need the entire tree.
  $links = menu_tree_output(menu_tree_all_data(variable_get('menu_main_links_source', 'main-menu')));
  $output = _zurb_foundation_links($links);
  $variables['attributes']['class'][] = 'right';

  return '<ul' . drupal_attributes($variables['attributes']) . '>' . $output . '</ul>';
}

function foundation_odl_hook_preprocess_page(&$variables) {
        if (arg(0) == 'node') {
                $variables['node_content'] =& $variables['page']['content']['system_main']['nodes'][arg(1)];
        }
}