<?php

/**
 * Preprocess function for html
 *
 * @param $variables
 */
function silex_preprocess_html(&$variables){
    drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800', array('type' => 'external'));
    drupal_add_css('http://fonts.googleapis.com/css?family=Raleway:400,700,300,200,100,900', array('type' => 'external'));
    drupal_add_css('http://fonts.googleapis.com/css?family=Amatic+SC:400,700', array('type' => 'external'));
}
/**
 * Preprocess variables for page.tpl.php
 *
 * @see page.tpl.php
 */
function silex_preprocess_page(&$variables) {
  // Primary nav
  $variables['footer_links'] = FALSE;
    // Build links
    $tree = menu_tree_page_data('footer-menu');
    $variables['footer_menu'] = twitter_bootstrap_menu_navigation_links($tree);
    
    // Build list
    $variables['footer_links'] = theme('twitter_bootstrap_links', array(
      'links' => $variables['footer_menu'],
      'attributes' => array(
        'id' => 'footer-menu',
        'class' => array('links'),
      ),
      'heading' => array(
        'text' => "",
        'level' => 'h2',
        'class' => array('element-invisible'),
      ),
    ));
  
  // Replace tabs with dropw down version
  $variables['tabs']['#primary'] = _twitter_bootstrap_local_tasks($variables['tabs']['#primary']);
}