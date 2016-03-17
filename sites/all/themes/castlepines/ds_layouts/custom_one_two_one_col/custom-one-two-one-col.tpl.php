<?php
/**
 * @file
 * Display Suite Custom Two Col template.
 *
 * Available variables:
 *
 * Layout:
 * - $classes: String of classes that can be used to style this layout.
 * - $contextual_links: Renderable array of contextual links.
 * - $layout_wrapper: wrapper surrounding the layout.
 *
 * Regions:
 *
 * - $one: Rendered content for the "one" region.
 * - $one_classes: String of classes that can be used to style the "one" region.
 *
 * - $two: Rendered content for the "two" region.
 * - $two_classes: String of classes that can be used to style the "two" region.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

  <!-- Needed to activate contextual links -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
    <<?php print $one_wrapper; ?> class="ds-one<?php print $one_classes; ?>">
      <?php print $one; ?>
    </<?php print $one_wrapper; ?>>
   
   <div class="clearfix">
    <<?php print $two_wrapper; ?> class="ds-two group-left<?php print $two_classes; ?>">
      <?php print $two; ?>
    </<?php print $two_wrapper; ?>>

    <<?php print $three_wrapper; ?> class="ds-three group-right<?php print $three_classes; ?>">
      <?php print $three; ?>
    </<?php print $three_wrapper; ?>>
   </div>
    
    <<?php print $four_wrapper; ?> class="ds-four<?php print $four_classes; ?>">
      <?php print $four; ?>
    </<?php print $four_wrapper; ?>>
</<?php print $layout_wrapper ?>>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
