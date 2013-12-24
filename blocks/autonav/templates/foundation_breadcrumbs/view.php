<?php  defined('C5_EXECUTE') or die("Access Denied.");
$navItems = $controller->getNavItems(true); ?>
<nav class="breadcrumbs">
<?php
for ($i = 0; $i < count($navItems); $i++) {
	$ni = $navItems[$i];
	
	if ($ni->isCurrent) {
		echo '<li class="current">'. $ni->name . '</li>';
	} else {
		echo '<a href="' . $ni->url . '" target="' . $ni->target . '">' . $ni->name . '</a>';
	}
}
?>
</nav>