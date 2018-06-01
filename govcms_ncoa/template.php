<?php
/**
 * @file
 * The primary PHP file for this theme.
 */


/**
 * Implements hook_preprocess_page().
 */
function govcms_ncoa_preprocess_page(&$vars, $hook) {

/* $vars not $variables */
  if (!empty($vars['page']['sidebar_first']) || !empty($vars['page']['sidebar_second'])) {
    // if one side bar, eg a menu
    $vars['content_column_class'] = ' class="column col-sm-9"';
  }
  elseif (!empty($vars['page']['sidebar_first']) && !empty($vars['page']['sidebar_second'])) {
    // both sidebars
    $vars['content_column_class'] = ' class="column col-sm-6"';
  } else {
    // neither sidebar, eg the homepage
    $vars['content_column_class'] = ' class="column col-sm-12"';
  }

}