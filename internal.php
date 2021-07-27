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
				 <div class="two-column desktop">
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
		<div class="mobile">
			<div>
				<?php
			        $a = new Area('Hero Button 1');
			        $a->display($c);
				 ?>
			</div>
			<div>
				<?php
				    $a = new Area('Hero Button 2');
				    $a->display($c);
				 ?>
				 	
			</div>
		</div>
	</section>

	<section class="page-content">
		<div class="container">
		<?php
			$a = new Area("Main Page Content");
			$a->display();
		?>
		</div>
	</section>
	<section class="faqs">
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
	<section class="get-a-quote">
		<div class="container">
			<?php
				$a = new Area("Quote Code");
				$a->display();
			?>
		</div>
	</section>

<?php require('elements/footer.php'); ?>
