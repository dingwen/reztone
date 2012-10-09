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
?>

<script type="text/javascript" src="<?php print drupal_get_path('theme','reztone').'/JS/accordian.js'?>"></script>
<script type="text/javascript" src="<?php print drupal_get_path('theme','reztone').'/JS/accordian.js'?>"></script>

<div class="item-list">
  <?php if (!empty($title)) : ?>
    <h3 class="toggler"><?php print $title; ?></h3>
  <?php endif; ?>
  

  <<?php print $options['type']; ?>>
    <div class="element">
    <?php foreach ($rows as $id => $row): ?>
      <li class="<?php print $classes[$id]; ?>"><?php print $row; ?></li>
    <?php endforeach; ?>
     </div><!--element-->
  </<?php print $options['type']; ?>>
 
</div>