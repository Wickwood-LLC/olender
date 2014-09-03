<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Olender theme.
 */

/*Remove 'Submitted by' on article pages.*/

function olender_preprocess_node(&$variables) {
  if ($variables['submitted']) {
    $variables['submitted'] = t('!datetime | !username', array('!username' => $variables['name'], '!datetime' => format_date($variables['node']->created, 'custom', 'F j, Y - g:ia')));
  }
}
