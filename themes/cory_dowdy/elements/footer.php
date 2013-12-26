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
<?php if ($c->getCollectionHandle() == 'demos'):?>
<script>
$(document).ready(function(){$(".image-popup-vertical-fit").magnificPopup({type:"image",closeOnContentClick:true,mainClass:"mfp-img-mobile",image:{verticalFit:true}});
$(".image-popup-fit-width").magnificPopup({type:"image",closeOnContentClick:true,image:{verticalFit:false}});$(".image-popup-no-margins").magnificPopup({type:"image",closeOnContentClick:true,closeBtnInside:false,fixedContentPos:true,mainClass:"mfp-no-margins mfp-with-zoom",image:{verticalFit:true},zoom:{enabled:true,duration:300}});
$(".popup-gallery").magnificPopup({delegate:"a",type:"image",tLoading:"Loading image #%curr%...",mainClass:"mfp-img-mobile",gallery:{enabled:true,navigateByImgClick:true,preload:[0,1]},image:{tError:'<a href="%url%">The image #%curr%</a> could not be loaded.',titleSrc:function(a){return a.el.attr("title")+"<small>Images from Placehold.it";
}}});$(".zoom-gallery").magnificPopup({delegate:"a",type:"image",closeOnContentClick:false,closeBtnInside:false,mainClass:"mfp-with-zoom mfp-img-mobile",image:{verticalFit:true,titleSrc:function(a){return a.el.attr("title")+' &middot; <a class="image-source-link" href="'+a.el.attr("data-source")+'" target="_blank">image source</a>';
}},gallery:{enabled:true},zoom:{enabled:true,duration:300,opener:function(a){return a.find("img");}}});$(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({disableOn:700,type:"iframe",mainClass:"mfp-fade",removalDelay:160,preloader:false,fixedContentPos:false});
$("img").VimeoThumb();});
</script>
<?php endif;?>
<?php Loader::element('footer_required'); ?>
  </body>
</html>