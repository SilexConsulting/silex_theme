<?php
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

function spv($vars){
  print "################################# DEFINED VARS #################################\n";
  foreach ($vars as $var => $val ){
    $type = gettype($val);
    if ($type == 'string'){
     $disp = "\"$val\"";
    } else { 
      $disp = $type;
    }
    print("->>>>>> $var = $disp\n");
  }
  print "############################### END DEFINED VARS ###############################\n";
}