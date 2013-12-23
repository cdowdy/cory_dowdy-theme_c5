<?php defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>
<div class="page-wrap">
  <section class="top-color1">
    <div class="row">
      <div class="medium-9 medium-centered columns">
        <?php 
        $a = new Area('Header Content');
        $a->display($c);
        ?>
      </div>
    </div>
  </section>

  <section class="middle">
    <div class="row">
      <?php
      $a = new Area('Main Content Area');
      $a->display($c);
      ?>
    </div>
  </section>

</div><!-- page wrap -->


<?php $this->inc('elements/footer.php'); ?> 