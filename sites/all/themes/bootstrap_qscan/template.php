<?php

/**
 * @file
 * template.php
 */
/**
* Add unique class (mlid) to all menu items.
*/
function bootstrap_qscan_menu_link__main_menu(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';
  //var_dump($variables);exit;
  $element['#attributes']['class'][] = 'menu-' . $element['#original_link']['mlid'];

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  echo '<pre>';
  //var_dump($element);
  //var_dump($output);
  //var_dump($sub_menu);
  echo '</pre>';
  
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

function bootstrap_qscan_menu_tree__main_menu($variables) 
{
    // Change id of menu ul
   echo '<pre>';
  var_dump($variables);
  echo '</pre>';
  exit("in");
    return '<ul id="my-custom-menu-id">' . $variables['tree'] . '</ul>';
}