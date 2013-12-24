<?php defined('C5_EXECUTE') or die(_("Access Denied."));?>
<!DOCTYPE html>
<html class="no-js">
<head>
<?php Loader::element('header_required'); ?>
<?php $c = Page::getCurrentPage(); ?>
<?php  $u = new User(); ?>
<link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/normalize.css">
<link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/main.min.css">
<?php  if ($c->isEditMode()) { ?> <style>#ccm-highlighter { margin-top: -49px; }</style> <?php  } ?>
<script src="<?php  echo $this->getThemePath(); ?>/min/modernizr.min.js"></script>
<script>
/* grunticon Stylesheet Loader | https://github.com/filamentgroup/grunticon | (c) 2012 Scott Jehl, Filament Group, Inc. | MIT license. */
window.grunticon=function(e){if(e&&3===e.length){var t=window,n=!!t.document.createElementNS&&!!t.document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect&&!!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1"),A=function(A){var o=t.document.createElement("link"),r=t.document.getElementsByTagName("script")[0];o.rel="stylesheet",o.href=e[A&&n?0:A?1:2],r.parentNode.insertBefore(o,r)},o=new t.Image;o.onerror=function(){A(!1)},o.onload=function(){A(1===o.width&&1===o.height)},o.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="}};
grunticon( [ "<?php  echo $this->getThemePath(); ?>/grunticons/icons.data.svg.css", "<?php  echo $this->getThemePath(); ?>/grunticons/icons.data.png.css", "<?php  echo $this->getThemePath(); ?>/grunticons/icons.fallback.css" ] );</script>
<noscript><link href="<?php  echo $this->getThemePath(); ?>/grunticons/icons.fallback.css" rel="stylesheet"></noscript>
<?php if(!$c->isEditMode() || !$u->isRegistered()) { ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<?php } ?>
</head>
<body class="blog">
<?php if ($c->isEditMode()) { ?>
<div class="row">
  <div class="large-6 columns">
<?php } ?>
<header class="contain-to-grid <?php if(!$c->isEditMode() || !$u->isRegistered()) { ?><?php } ?>">
  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name">
        <?php
    		$a = new GlobalArea('Nav Logo');
    		$a->display();
    		?>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>
 <?php if ($c->isEditMode()) { ?>
</nav>
</header>
</div>
<div class="large-6 columns">
	<header>
	<?php }?>
    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <?php
    		$a = new GlobalArea('Navigation');
    		$a->display();
    	?>
    </section>
  </nav>
</header>
<?php if ($c->isEditMode()) { ?>
	</div>
</div>
<?php } ?>