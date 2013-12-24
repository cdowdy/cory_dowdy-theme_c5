<?php  defined('C5_EXECUTE') or die("Access Denied.");

$nh = Loader::helper('navigation');
$previousLinkURL = is_object($previousCollection) ? $nh->getLinkToCollection($previousCollection) : '';
$parentLinkURL = is_object($parentCollection) ? $nh->getLinkToCollection($parentCollection) : '';
$nextLinkURL = is_object($nextCollection) ? $nh->getLinkToCollection($nextCollection) : '';
?>

<div id="ccm-next-previous-<?php  echo $bID; ?>" class="pagination-centered">
  <ul class="pagination">

    <?php  if ($previousLinkText): ?>
	<li class"arrow">
		<?php  echo $previousLinkURL ? '<a href="' . $previousLinkURL . '">' . $previousLinkText . '</a>' : '&nbsp;' ?>
 	</li>
	<?php  endif; ?>

	<?php  if ($parentLinkText): ?>
	<li class="ccm-next-previous-parentlink">
		<?php  echo $parentLinkURL ? '<a href="' . $parentLinkURL . '">' . $parentLinkText . '</a>' : '' ?>
 	</li>
	<?php  endif; ?>
	
	<?php  if ($nextLinkText): ?>
	<li class="arrow">
		<?php  echo $nextLinkURL ? '<a href="' . $nextLinkURL . '">' . $nextLinkText . '</a>' : '' ?>
 	</li>
	<?php  endif; ?>
</div>
