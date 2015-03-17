<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="row">
	<div class="small-push-2 small-8 medium-push-4 medium-4 large-push-2 large-8 columns">
		<ul class="small-block-grid-1 medium-block-grid-1 large-block-grid-2">
		<?php foreach ($rows as $id => $row): ?>
		  <li>
		  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
		    <?php print $row; ?>
		  </div>
		  </li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>