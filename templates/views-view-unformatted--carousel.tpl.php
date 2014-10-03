<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div <?php if ($classes_array[$id]) { 
  	print 'class="item';
  	if (strstr($classes_array[$id], 'views-row-first')) print ' active';
  	print '"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>