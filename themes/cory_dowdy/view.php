<?php defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>
<div class="page-wrap">
  <section class="top-color1">
    <div class="row">
      <div class="medium-9 medium-centered columns">
        <?php 

      print $innerContent;
      
      ?>
      </div>
    </div>
  </section>

</div><!-- page wrap -->


<?php $this->inc('elements/footer.php'); ?> 