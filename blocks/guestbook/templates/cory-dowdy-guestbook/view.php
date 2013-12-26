<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php  $c = Page::getCurrentPage(); ?>
<div class="row">
<div class="small-12 columns">
<h4 class="comments-title"><?php echo $controller->title?></h4>
<hr />
<?php  if($invalidIP) { ?>
<div class="ccm-error"><p><?php echo $invalidIP?></p></div>
<?php  } ?>
<?php 
$u = new User();
if (!$dateFormat) {
	$dateFormat = t('M jS, Y');
}
$posts = $controller->getEntries();
$bp = $controller->getPermissionObject(); 
$dh = Loader::helper('date');
foreach($posts as $p) { ?>
	<?php  if($p['approved'] || $bp->canWrite()) { ?>
    <div class="comments-entry_by<?php  if ($c->getVersionObject()->getVersionAuthorUserName() == $u->getUserName()) {?> authorPost <?php  }?>">
    	<?php  if($bp->canWrite()) { ?> 
				<div class="guestBook-manage-links">
                	<a href="<?php echo $this->action('loadEntry')."&entryID=".$p['entryID'];?>#guestBookForm"><?php echo t('Edit')?></a> | 
					<a href="<?php echo $this->action('removeEntry')."&entryID=".$p['entryID'];?>" onclick="return confirm('<?php echo t("Are you sure you would like to remove this comment?")?>');"><?php echo t('Remove')?></a> |
                	<?php  if($p['approved']) { ?>
 	                   	<a href="<?php echo $this->action('unApproveEntry')."&entryID=".$p['entryID'];?>"><?php echo t('Un-Approve')?></a>
                    <?php  } else { ?>
	                    <a href="<?php echo $this->action('approveEntry')."&entryID=".$p['entryID'];?>"><?php echo t('Approve')?></a>
					<?php  } ?>
                </div>
			<?php  } ?>
				<p class="comments-posted_by"><?php echo t('Posted by')?>
					<?php 
					if( intval($p['uID']) ){
						$ui = UserInfo::getByID(intval($p['uID']));
						if (is_object($ui)) {
							echo $ui->getUserName();
						}
					}else echo $p['user_name'];
					?>
				<?php echo t('on')?>
					<?php echo $dh->date($dateFormat,strtotime($p['entryDate']));?>
			</p>
			<div class="panel">
			<?php echo nl2br($p['commentText'])?>
		</div>
    </div>
	<?php  } ?>
<div class="row">
	<div class="small-12 columns">
<?php  }
 if (isset($response)) { ?>
	<?php echo $response?>
<?php  } ?>
</div>
</div>
<?php  if($controller->displayGuestBookForm) { ?>
	<?php 	
	if( $controller->authenticationRequired && !$u->isLoggedIn() ){ ?>
		<div><?php echo t('You must be logged in to leave a reply.')?> <a href="<?php echo View::url("/login","forward",$c->getCollectionID())?>"><?php echo t('Login')?> &raquo;</a></div>
	<?php  }else{ ?>	
		<a name="guestBookForm-<?php echo $controller->bID?>"></a>
		<div class="row">
		<div id="guestBook-formBlock-<?php echo $controller->bID?>" class="small-12  columns">

			<h5><?php  echo t('Leave a Reply')?></h5>
			<form method="post" action="<?php echo $this->action('form_save_entry', '#guestBookForm-'.$controller->bID)?>">
			<fieldset>
			<?php  if(isset($Entry->entryID)) { ?>
				<input type="hidden" name="entryID" value="<?php echo $Entry->entryID?>" />
			<?php  } ?>
			
			<?php  if(!$controller->authenticationRequired){ ?>
			 <div class="row">
			 	<div class="small-2 columns">
				<label for="name" class="right inline"><?php echo t('Name')?>:</label>
				</div>
				<div class="small-10 columns">
				<input type="text" name="name" value="<?php echo $Entry->user_name ?>" />
				<?php echo (isset($errors['name'])?"<small class=\"error\">".$errors['name']."</small>":"")?>
				</div>
			</div>
			<div class="row">
			 	<div class="small-2 columns">
				<label for="email" class="right inline"><?php echo t('Email')?>:</label>
			</div>
			<div class="small-10 columns">
				<input type="email" name="email" value="<?php echo $Entry->user_email ?>" /> <p class="notice-text"><small>(<?php echo t('Your email will not be publicly displayed.')?>)</small></p>
				<?php echo (isset($errors['email'])?"<small class=\"error\">".$errors['email']."</small>":"")?>
				</div>
			</div>
			<?php  } ?>
			<div class="row">
			<div class="small-12 columns">
			<label>Comments:</label>
			<textarea name="commentText"><?php echo $Entry->commentText ?></textarea>
			<?php echo (isset($errors['commentText'])?"<small class=\"error\">".$errors['commentText']."</small>":"")?>
				</div>
			</div>
			<div class="row">
		    <div class="small-6 columns">
			<?php 
			if($controller->displayCaptcha) {
						   
				
				$captcha = Loader::helper('validation/captcha');				
   				$captcha->label();
   				$captcha->showInput();
   				echo isset($errors['captcha'])?'<small class="error">' . $errors['captcha'] . '</small>':'';
				$captcha->display();

				
				
			}
			?>
			</div>
		</div>
			<input type="submit" name="Post Comment" value="<?php echo t('Post Comment')?>" class="button"/>
			</fieldset>
			</form>
		
	</div>
</div>
	<?php  } ?>
<?php  } ?>
</div>
</div><!-- end comments containing row -->