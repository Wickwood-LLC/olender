<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Olender theme.
 */

/*Remove 'Submitted by' on article pages.*/

function olender_preprocess_node(&$variables) {
  if ($variables['submitted']) {
  	$variables['post_date'] = t('!datetime', array('!datetime' => format_date($variables['node']->created, 'custom', 'F j, Y - g:ia')));
    $variables['post_author'] = t('!username', array('!username' => $variables['name']));
  }
}

function theme_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    $output .= '<div class="breadcrumb">' . implode(' » ', $breadcrumb) . '</div>';
    return $output;
  }
}