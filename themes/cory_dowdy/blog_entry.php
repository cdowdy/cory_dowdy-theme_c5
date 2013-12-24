<?php  defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/blog_header.php'); ?>
<div class="page-wrap">
	<!-- Main Page Content and Sidebar -->
	 <div class="row blog-content">
	 	<!-- Main Blog Content -->
	 	<div class="large-9 columns blog-post" role="content">
	 		<hr />
	 		<?php  $ai = new Area('Blog Post Header'); $ai->display($c); ?>
	 		<article>
	 			<h3><?php  echo $c->getCollectionName(); ?></h3>
	 			<h6><?php  echo t(
					'Written by %1$s on %2$s',
					$c->getVersionObject()->getVersionAuthorUserName(),
					$c->getCollectionDatePublic(DATE_APP_GENERIC_MDY_FULL)
				); ?></h6>
	 			<hr />
	 			<div class="row">
	 				<div class="large-12 columns">
	 					<?php  $as = new Area('Main'); $as->display($c); ?>
	 				</div>
	 			</div>
	 			<div class="row">
	 				<div class="large-12 columns">
	 					<?php  $a = new Area('Blog Post More'); $a->display($c); ?>
	 				</div>
	 			</div>
	 			<div class="row">
	 				<div class="large-12 columns">
	 					<?php  $ai = new Area('Blog Post Footer'); $ai->display($c); ?>
	 				</div>
	 			</div>
	 		</article>

	 		<hr />
	 	</div>
	 	<!-- End Main Content -->

	 	<!-- Sidebar -->
	 	<aside class="large-3 columns blog-sidebar">

	 		<hr />

	 		<?php 
			$as = new Area('Sidebar');
			$as->display($c);
			?>		
		</aside>
		<!-- End Sidebar -->
	</div>
	<!-- End Main Content and Sidebar -->
</div><!-- page wrap -->

<?php  $this->inc('elements/footer.php'); ?>