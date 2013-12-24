<?php defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>

<div class="page-wrap">
  <section class="work">
    <div class="row work-header">
      <a href="#workSection">
        <div class="small-12 large-6 columns work_links">
          <div class="work-icon w-icons"></div>
          <h2>Some of My Work</h2>
        </div>
      </a>
      <a href="#c5Section">
        <div class="small-12 large-6 columns work_links">
          <div class="c5-demo-icon w-icons"></div>
          <h2>Concrete5 Packages</h2>
        </div>
      </a>
    </div>
  </section>

<section id="workSection">
  <div class="row">
    <div class="small-12 columns">
    	<?php 
	        $a = new Area('Project Header');
	        $a->display($c);
	    ?>
    </div>
    <div class="row">
      <div class="small-9 small-centered columns">
      	<?php 
	        $a = new Area('Featured Project Image');
	        $a->display($c);
	    ?>
      </div>
    </div>
    <div class="row">
      <div class="small-9 small-centered columns">
      	<?php 
	        $a = new Area('Featured Project Description');
	        $a->display($c);
	    ?>
    </div>
  </div>
</div>
<!-- Site Evolution with clickable lightbox gallery -->
  <div class="row">
    <div class="small-12 columns">
      <h4>Site Evolution:</h4>
      </div>
    </div> <!-- End Evolution Row --> 

<!-- Magnific popup  section -->
<div class="row">
  <div class="small-12 columns">
    <ul  class="small-block-grid-2">
      <li><a class="image-popup-vertical-fit" href="<?php  echo $this->getThemePath(); ?>/img/portfolio/comp1.png" title="First Site Comp. Rather.....bleh.">
        <img class="center" src="<?php  echo $this->getThemePath(); ?>/img/portfolio/comp1-th.png"></a> <!-- thumbnail and popup link image -->
        <dl class="accordion" data-accordion>
          <dd>
            <a href="#panel2">Details:</a>
            <div id="panel2" class="content">This is the first site comp. The colors are rather...not my final choice as you can see.  The gray background felt to dark for a pool company and the box shadow underneath originally used for separation felt amatuerish. I quickly moved away from this design and the client felt the same...an open design process really helps!
            </div>
          </dd>
        </dl>
      </li>


      <li><a class="image-popup-vertical-fit" href="<?php  echo $this->getThemePath(); ?>/img/portfolio/comp2.png" title="Caption. Can be aligned it to any side.">
        <img class="center" src="<?php  echo $this->getThemePath(); ?>/img/portfolio/comp2-th.png"></a> <!-- thumbnail and popup link image --> 
        <dl class="accordion" data-accordion>
          <dd>
            <a href="#panel3">Details:</a>
            <div id="panel3" class="content"> Second Comp.  Not much has changed besides background color.  Still not very desirable.
            </div>
          </dd>
        </dl>
      </li>


      <li><a class="image-popup-vertical-fit" href="<?php  echo $this->getThemePath(); ?>/img/portfolio/comp3.png" title="Caption. Can be aligned it to any side.">
        <img class="center" src="<?php  echo $this->getThemePath(); ?>/img/portfolio/comp3-th.png"></a> <!-- thumbnail and popup link image -->
        <dl class="accordion" data-accordion>
          <dd>
            <a href="#panel4">Details:</a>
            <div id="panel4" class="content"> Site has progressed from a small header image.  To a large full width image and reduced in size navigation.
            </div>
          </dd>
        </dl>
      </li>

      <!-- Current -->
      <li><a class="image-popup-vertical-fit" href="<?php  echo $this->getThemePath(); ?>/img/portfolio/current.png" title="Caption. Can be aligned it to any side.">
        <img class="center" src="<?php  echo $this->getThemePath(); ?>/img/portfolio/current-th.png"></a> <!-- thumbnail and popup link image -->
        <dl class="accordion" data-accordion>
          <dd>
            <a href="#panel5">Details:</a>
            <div id="panel5" class="content">Current site.  Slightly transparent navigation.  Fully scaleable svg icons for featured links and header image is webp for supported browsers.
            </div>
          </dd>
        </dl>
      </li>
    </ul>
  </div> <!-- columns -->
</div>   <!-- row -->
</section>
<section id="c5Section">
  <div class="row">
    <div class="small-12 columns">
        <h4>Concrete5 Packages</h4>
        <p>The above image lightboxes (the popup image when clicked) is a made possible by a JavaScript plugin by Dmitry Semenov called <a href="http://dimsemenov.com/plugins/magnific-popup/">Magnific Popup</a> . I turned this plugin into a Concrete5 add on package.  The source of the plugin can be found <a href="https://github.com/cdowdy/concrete5-Magnific-Popup">Here</a> or you can download it from <a href="#">INSERT CONCRETE5 MARKETPLACE LINK</a>.</p>
        <p>A demo of the Concrete5 add-on package can be found <a href="/demo.html">HERE</a></p>
    </div>
  </div>
</section>

</div><!-- page wrap -->


<?php $this->inc('elements/footer.php'); ?>