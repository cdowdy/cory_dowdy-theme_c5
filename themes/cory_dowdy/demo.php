<?php  defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
<div class="page-wrap">
  <!-- Main Page -->
  <div class="row">
    <div class="small-12 columns demo-header">
      <h3>Concrete5 Add-On Package: Magnific Popup</h3>
      <p>Original Plugin can be found <a href="http://dimsemenov.com/plugins/magnific-popup/">HERE</a></p>
      <p>Concrete5 Package source can be found <a href="https://github.com/cdowdy/concrete5-Magnific-Popup">Here</a></p>
    </div>
  </div>
  <!-- single image popups -->
  <div class="row">
    <div class="small-12 columns">
        <h5>Single Image Popup</h5>
    </div>
    <hr />
    <div class="small-12 columns demos">
      <div class="small-4 columns">
        <a class="image-popup-vertical-fit" href="http://placehold.it/900x572" title="Caption">
          <img class="center" src="http://placehold.it/200x200&text=Vertical Fit Popup" alt="" />
        </a>
        <p>Vertical Fit Popup</p>
      </div>
      <div class="small-4 columns">
        <a class="image-popup-fit-width" href="http://placehold.it/900x572&text=Fits Horizontally" title="Caption.">
          <img class="center" src="http://placehold.it/200x200&text=Fit Width Popup" >
        </a>
        <p>Fit Width Popup</p>
      </div>
      <div class="small-4 columns">
        <a class="image-popup-no-margins" href="http://placehold.it/900x620&text=No Margins" title="Caption">
          <img class="center" src="http://placehold.it/200x200&text=No Margins Popup" >
        </a>
        <p>Fit Width Popup</p>
      </div>
    </div>
     <hr />
  </div>
  <!-- gallery popups -->
  <div class="row">
    <div class="small-12 columns">
      <h5>Gallery Popup</h5>
    </div>
    <hr />
    <ul class="popup-gallery small-block-grid-2 large-block-grid-4">
      <li>
        <a href="http://placehold.it/600x600&text=Image One" title="Placeholder">
          <img class="center" src="http://placehold.it/150x150&text=Image One">
        </a>
      </li>
      <li>
        <a href="http://placehold.it/600x600&text=Image Two" title="Placeholder">
          <img class="center" src="http://placehold.it/150x150&text=Image Two">
        </a>
      </li>
      <li>
        <a href="http://placehold.it/600x600&text=Image Three" title="Placeholder">
          <img class="center" src="http://placehold.it/150x150&text=Image Three">
        </a>
      </li>
      <li>
        <a href="http://placehold.it/600x600&text=Image Four" title="Placeholder">
          <img class="center" src="http://placehold.it/150x150&text=Image Four">
        </a>
      </li>
    </ul>
  </div>
  <!-- zoom gallery -->
  <div class="row">
    <div class="small-12 columns">
      <h5>Zoom-Gallery</h5>
    </div>
    <hr />
    <ul class="zoom-gallery small-block-grid-2 large-block-grid-4">
      <li>
        <a href="http://placehold.it/600x600&text=Zoom-Gallery One" data-source="http://placehold.it/600x600" title="Images From Placehold.it">
          <img class="center" src="http://placehold.it/150x150&text=Zoom-Gallery One" >
        </a>
      </li>
      <li>
        <a href="http://placehold.it/600x600&text=Zoom-Gallery two" data-source="http://placehold.it/600x600" title="Images From Placehold.it">
          <img class="center" src="http://placehold.it/150x150&text=Zoom-Gallery two" >
        </a>
      </li>
      <li>
        <a href="http://placehold.it/600x600&text=Zoom-Gallery three" data-source="http://placehold.it/600x600" title="Images From Placehold.it">
          <img class="center" src="http://placehold.it/150x150&text=Zoom-Gallery three" >
        </a>
      </li>
       <li>
        <a href="http://placehold.it/600x600&text=Zoom-Gallery Four" data-source="http://placehold.it/600x600" title="Images From Placehold.it">
          <img class="center" src="http://placehold.it/150x150&text=Zoom-Gallery Four" >
        </a>
      </li>
    </ul>
  </div>
  <!-- video and maps popup -->
  <div class="row">
    <div class="small-12 columns ">
      <h5>Video and Map Popups</h5>
    </div>
    <hr />
    <div class="row">
      <div class="small-6 columns demos">
        <p>No Thumbnail YouTube Video</p>
        <a class="popup-youtube" href="http://www.youtube.com/watch?v=a_426RiwST8">Open YouTube video</a>
      </div>
      <div class="small-6 columns demos">
        <p>No Thumbnail Vimeo Video</p>
        <a class="popup-vimeo" href="http://vimeo.com/13962827">Open Vimeo video</a>
      </div>
    </div>
    <hr />
    <div class="row">
      <div class="small-6 columns demos">
        <p>YouTube Thumbnail</p>
        <a class="popup-youtube" href="http://www.youtube.com/watch?v=a_426RiwST8"><img class="center" src="http://img.youtube.com/vi/a_426RiwST8/mqdefault.jpg" /></a>
      </div>
      <div class="small-6 columns demos">
        <p>Vimeo Thumbnail</p>
        <a class="popup-vimeo" href="http://vimeo.com/13962827"> <img class="center" src="http://placehold.it/350x150" data-vimeo-id="13962827" class="Large"/></a>
      </div>
    </div>
    <hr />
    <div class="row">
      <div class="small-6 columns">
        <p>Google Maps Popup</p>
         <a class="popup-gmaps" href="https://maps.google.com/maps?q=411+Woody+Hayes+Dr.&hl=en&sll=40.003161,-83.019905&sspn=0.077713,0.169086&hnear=411+Woody+Hayes+Dr,+Columbus,+Ohio+43210&t=h&z=16">411 Wood Hayes Dr, Columbus, Ohio</a>
       </div>
     </div>
  </div>
  <!-- End Main -->
</div><!-- page wrap -->

<?php  $this->inc('elements/footer.php'); ?>