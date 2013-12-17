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
          <ul class="footer-links">
            <li><a href="#">Work</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Demos</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </div> 
  </div>
</footer>

<?php $c = Page::getCurrentPage();     
if (!$c->isEditMode()) { ?>
<script src="<?php echo $this->getThemePath(); ?>/min/CoryDowdy.min.js"></script>
<script>
  $(document).foundation();
</script>
<?php } ?>
<?php Loader::element('footer_required'); ?>
  </body>
</html>