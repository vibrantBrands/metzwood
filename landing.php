<?php require('elements/header.php'); ?>

	<section class="hero landing">
		<div class="container">
		<?php
			$a = new Area("Top of Page Content");
			$a->display();
		?>
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
		<div class="container">
			<?php
				$a = new Area("Quote Code");
				$a->display();
			?>
		</div>
	</section>

<?php require('elements/footer.php'); ?>
