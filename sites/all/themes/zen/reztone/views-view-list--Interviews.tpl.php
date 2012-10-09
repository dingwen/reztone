<?php
// $Id: views-view-list.tpl.php,v 1.3 2008/09/30 19:47:11 merlinofchaos Exp $
/**
 * @file views-view-list.tpl.php
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
 
 drupal_add_css(drupal_get_path('theme', 'reztone') . "/page-press.css", 'theme', 'all', FALSE);
 $styles = drupal_get_css();
?>

<div class="interview-img"><img src=' <?php print drupal_get_path ("theme", "reztone"). "/images/press/pic.png"?>'/> </div>
    <div class = "interview-container">
        <div class="item-list">
          <?php if (!empty($title)) : ?>
            <h3><?php print $title; ?></h3>
          <?php endif; ?>
          <<?php print $options['type']; ?>>
            <?php foreach ($rows as $id => $row): ?>
              <li class="<?php print $classes[$id]; ?>"><?php print $row; ?></li>
            <?php endforeach; ?>
          </<?php print $options['type']; ?>>
        </div>
        
    </div>
    
    

<div class="blue-dot"><img src='<?php print drupal_get_path ("theme", "reztone"). "/images/press/line.png"?>' /></div>