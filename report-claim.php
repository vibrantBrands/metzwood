<?php require('elements/header.php'); ?>
	
	<section class="hero">
		<div class="container column">
				<?php
		        $a = new Area('empty full width');
		        $a->display($c);
		 ?>
		</div>
		<div class="container two-column">
			<div>
				<?php
				        $a = new Area('Hero Text');
				        $a->display($c);
				 ?>
				 <div class="two-column">
				 	<div><?php
				        $a = new Area('Hero Button 1');
				        $a->display($c);
				 ?></div>
				 	<div><?php
				        $a = new Area('Hero Button 2');
				        $a->display($c);
				 ?></div>
				 </div>
			</div>
			<div>
				<?php
				    $a = new Area('Image');
				    $a->display($c);
				 ?>
			</div>
		</div>
	</section>

	<section class="page-content report-claim">

		<div class="container">
		<?php
			$a = new Area("Main Page Content");
			$a->display();
		?>
		</div>

		<div class="container">
			<ul class="insurance-companies">
			<?php
				$page = Page::getCurrentPage();
				if ($page->getCollectionID() == 190): ?>

		        <?php
			        $fs = FileSet::getByName('Insurance Logos');
			        $fl = new FileList();
			        $fl->filterBySet($fs);
			        $fl->sortBy('fsDisplayOrder', 'asc');
			        $files = $fl->get();
			       
			        foreach($files as $f) {
			          $downloadpath = $f->getDownloadURL();
			          $imagepath = $f->getRelativePath();
			          $title = $f->getTitle();
			          $url = $f->getDescription();
			          ?>
			          
			          <li>
		                <a href='<?php echo $url ?>' target='_blank'>
		                 <img src='<?php echo $imagepath; ?>' class='logo' />
		                 <p><?php echo $title ?></p>
		               </a>
			          </li>
			        
			        <?php } ?>

		      <?php	endif; ?>

		      <?php
				$page = Page::getCurrentPage();
				if ($page->getCollectionID() == 191): ?>

		        <?php
			        $fs = FileSet::getByName('Insurance Logos');
			        $fl = new FileList();
			        $fl->filterBySet($fs);
			        $fl->sortBy('fsDisplayOrder', 'asc');
			        $files = $fl->get();
			       
			        foreach($files as $f) {
			          $downloadpath = $f->getDownloadURL();
			          $imagepath = $f->getRelativePath();
			          $title = $f->getTitle();
			          $url = $f->getTags();
			          ?>
			          
			          <li>
		                <a href='<?php echo $url ?>' target='_blank'>
		                 <img src='<?php echo $imagepath; ?>' class='logo' />
		                 <p><?php echo $title ?></p>
		               </a>
			          </li>
			        
			        <?php } ?>

		      <?php	endif; ?>
		      </ul>
		  	</div>
		</div>
	</section>
	<section class="get-a-quote">
		<div class="container">
			<?php
		        $a = new Area('Section Title');
		        $a->display($c);
		 	?>
			<div class="two-column">
				<div>
					<?php
				        $a = new Area('Left FAQs');
				        $a->display($c);
				 	?>
				</div>
				<div>
					<?php
				        $a = new Area('Right FAQs');
				        $a->display($c);
				 	?>
				</div>
			</div>
		</div>
	</section>

<?php require('elements/footer.php'); ?>
