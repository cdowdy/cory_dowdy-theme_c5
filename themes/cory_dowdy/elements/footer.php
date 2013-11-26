<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<!-- Footer -->
 
      <footer class="row">
        <div class="large-12 columns"><hr />
          <div class="row">
 
            <div class="large-6 columns">
              <p>© Copyright no one at all. Go to town.</p>
            </div>
 
            <div class="large-6 columns">
              <ul class="inline-list right">
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
              </ul>
            </div>
 
          </div>
        </div>
      </footer>
 
    <!-- End Footer -->
 
    </div>
  </div>
    
    
    <?php if (!$c->isEditMode()) { ?>
    <script src="<?php echo $this->getThemePath(); ?>/js/vendor/min/jquery.min.js"></script>
    <script src="<?php echo $this->getThemePath(); ?>/js/foundation/min/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <?php } ?>
    <?php Loader::element('footer_required'); ?>
  </body>
</html>