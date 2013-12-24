<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<!-- Footer -->
<footer class="f-primary">
  <div class="row">
    <div class="small-12 columns">
      <hr />
      <div class="row">
        <div class="small-12 large-6 columns">
         <p class="copyright">&copy; <?php print date('Y') . ' ' . SITE; ?></p>
        </div>
        <div class="small-12 large-6 columns">
          <?php
          $a = new GlobalArea('Footer Navigation');
          $a->display();
          ?>
        </div>
      </div>
    </div> 
  </div>
</footer>

<?php $c = Page::getCurrentPage();     
if (!$c->isEditMode()) { ?>
<script src="<?php echo $this->getThemePath(); ?>/min/CoryDowdy.min.js"></script>
<script>
  $(document).foundation();$(window).scroll(function(){var a=$(window).scrollTop();if(a>0){$("header").addClass("shadow");}else{$("header").removeClass("shadow");
}});
</script>
<?php } ?>
<?php if ($c->getCollectionHandle() == 'work'):?>
<script>
$(document).ready(function(){$(".image-popup-vertical-fit").magnificPopup({type:"image",closeOnContentClick:true,mainClass:"mfp-img-mobile",image:{verticalFit:true}});
});
</script>
<?php endif; ?>
<?php Loader::element('footer_required'); ?>
  </body>
</html>