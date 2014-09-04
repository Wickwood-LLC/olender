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
