<?php

/**
 * @file
 * Display Suite Custom Two Col configuration.
 */

function ds_custom_one_two_one_col() {
  return array(
    'label' => t('Custom One Two One Col'),
    'regions' => array(
      'one' => t('one'),
      'two' => t('two'),
      'three' => t('three'),
      'four' => t('four'),
    ),
    // Uncomment if you want to include a CSS file for this layout (custom_two_col.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (custom_two_col.png)
    // 'image' => TRUE,
  );
}
