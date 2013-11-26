<?php defined('C5_EXECUTE') or die(_("Access Denied."));?>
<!DOCTYPE html>
<html class="no-js">
    <head>
    	<?php Loader::element('header_required'); ?>
        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

        <link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/main.css">
       <?php  if ($c->isEditMode()) { ?> <style>#ccm-highlighter { margin-top: -49px; }</style> <?php  } ?>
        <script src="<?php  echo $this->getThemePath(); ?>/js/vendor/custom.modernizr.js"></script>
    </head>
<body>
	<div class="row">
		<?php if ($c->isEditMode()) {?>
		<div class="large-6 columns">
			<?php } ?>
		<div class="large-12 columns">
			<nav class="top-bar" data-topbar>
				<ul class="title-area">
					<!-- site title -->
					<li class="name">
						<?php
							$a = new GlobalArea('Nav Logo');
							$a->display($c);
						?>
					</li>
					<li class="toggle-topbar menu-icon">
						<a href="#"><span>menu</span></a>
					</li>
				</ul>
				<?php if ($c->isEditMode()) { ?>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="large-6 columns">
			<nav>
				<?php } ?>
				<section class="top-bar-section">
					<?php
						$a = new GlobalArea('Navigation');
						$a->display($c);
					?>
				</section>
			</nav>
		</div>
	</div>