<?php require('elements/header.php'); ?>

<div class="homepage">
	<section class="hero">
		<div class="container">
			<div>
				<?php
			        $a = new Area('Hero Text');
			        $a->display($c);
				 ?>
				 <div class="two-column desktop">
				 	<div><span class="white btn"><a href="/"><i class="fa fa-phone"></i> (518) 392-5161</a></span></div>
				 	<div><span class="green btn"><a href="/">Get a quote online</a></span></div>
				 </div>
			</div>
			<div>
				<img src="<?php echo $this->getThemePath(); ?>/img/hero-family-img.png" alt="family" class="family">
			</div>	
		</div>
		<div class="mobile">
			<div><span class="white btn"><a href="/"><i class="fa fa-phone"></i> (518) 392-5161</a></span></div>
			<div><span class="green btn"><a href="/">Get a quote online</a></span></div>
		</div>
	</section>
	<section class="awards">
		<img src="<?php echo $this->getThemePath(); ?>/img/team-photo.png" alt="We're with you for all of life's important moments." class="team">
		<div class="container">
			<div>
				<img src="<?php echo $this->getThemePath(); ?>/img/oldest-business.png" alt="oldest family owned business">
				<?php
				    $a = new Area('Text First Box');
				    $a->display($c);
				 ?>
			</div>
			<div>
				<img src="<?php echo $this->getThemePath(); ?>/img/best-practices.png" alt="best insurance agency">
				<?php
				    $a = new Area('Text Second Box');
				    $a->display($c);
				 ?>
			</div>
			<div>
				<img src="<?php echo $this->getThemePath(); ?>/img/agent-of-year.png" alt="agent of the year">
				<?php
				    $a = new Area('Text Third Box');
				    $a->display($c);
				 ?>
			</div>
			<div>
				<img src="<?php echo $this->getThemePath(); ?>/img/top-agency.png" alt="top agency">
				<?php
				    $a = new Area('Text Fourth Box');
				    $a->display($c);
				 ?>
			</div>
		</div>
	</section>
	<section class="products">
		<div class="slider-wrapper">
			<div class="slider-container">
				<h2>We make it easy to protect your...</h2>
				<div class="slider">
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/slider3.png" />
						<span class="btn orange"><a href="">Automobile</a></span>
					</div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/slider2.png" />
						<span class="btn blue">Life<a href=""></a></span>
					</div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/slider1.png" />
						<span class="btn purple">Business<a href=""></a></span>
					</div>
					<div>
						<img src="<?php echo $this->getThemePath(); ?>/img/slider4.png" />
						<span class="btn green"><a href="">Home</a></span>
					</div>
				</div>
			</div>
		</div> 
	</section>
	<div class="container five-star">
		<h2>5 Star Rating on Google!</h2>
	</div>
	<section class="testimonials">
		<p class="instruction"><span></span></p>
		<div class="wrapper">
			<div><div class="testimonial">
				<div>
					<img src="<?php echo $this->getThemePath(); ?>/img/testimonials/Bill-Minahan.png" alt=
					"testimonial" class="photo" />
					<img src="<?php echo $this->getThemePath(); ?>/img/five-stars.png" class="stars"/>
				</div>
				<div>
					<p>Tracy Ruggiero is an extraordinary person to work with. She is knowledgeable, committed, dedicated, responsive and makes insurance fun... She's always there when I need whether it's adding to the fleet or adding to the investment properties. She has never steered me wrong. It's so nice to have someone you can call or email locally... Thank you Tracy for the excellent service over the years!</p>
					<p><strong>- Bill Minahan</strong></p>

					<p class="google-link"><a href="https://www.google.com/search?q=metzwood+insurance&source=hp&ei=TdndYPSxNK6x5NoPtZyTKA&iflsig=AINFCbYAAAAAYN3nXaGceO5_0nfsFqmtGSeHmxHfGhHh&oq=metzwood+insurance&gs_lcp=Cgdnd3Mtd2l6EAMyCwguEMcBEK8BEJMCMgIIADIICC4QxwEQrwEyCAguEMcBEK8BULsHWKsUYNkVaABwAHgAgAHpAYgB6QGSAQMyLTGYAQCgAQGqAQdnd3Mtd2l6&sclient=gws-wiz&ved=0ahUKEwi0jLGoksLxAhWuGFkFHTXOBAUQ4dUDCAk&uact=5#lrd=0x89ddf3daa7c69871:0x149e16d074ab2901,1">Via Google Reviews</a></p>
				</div>
			</div></div>
			<div><div class="testimonial">
				<div>
					<img src="<?php echo $this->getThemePath(); ?>/img/testimonials/Gregg-Beringer.png" alt=
					"testimonial" class="photo" />
					<img src="<?php echo $this->getThemePath(); ?>/img/five-stars.png" class="stars"/>
				</div>
				<div>
					<p>Yvette Belardo and everyone at Metzwood Insurance are the perfect mix of professional and personal. Their knowledge of insurance, clear communication, and timely replies epitomize professionalism. They also have the personal touch of understanding individual needs, and it's also likely that someone there already knows you, your business, or organization. </p>
					<p><strong>- Gregg Berninger</strong></p>

					<p class="google-link"><a href="https://www.google.com/search?q=metzwood+insurance&source=hp&ei=TdndYPSxNK6x5NoPtZyTKA&iflsig=AINFCbYAAAAAYN3nXaGceO5_0nfsFqmtGSeHmxHfGhHh&oq=metzwood+insurance&gs_lcp=Cgdnd3Mtd2l6EAMyCwguEMcBEK8BEJMCMgIIADIICC4QxwEQrwEyCAguEMcBEK8BULsHWKsUYNkVaABwAHgAgAHpAYgB6QGSAQMyLTGYAQCgAQGqAQdnd3Mtd2l6&sclient=gws-wiz&ved=0ahUKEwi0jLGoksLxAhWuGFkFHTXOBAUQ4dUDCAk&uact=5#lrd=0x89ddf3daa7c69871:0x149e16d074ab2901,1">- Via Google Reviews</a></p>
				</div>
			</div></div>
			<div><div class="testimonial">
				<div>
					<img src="<?php echo $this->getThemePath(); ?>/img/testimonials/Dave-McGrath.png" alt=
					"testimonial" class="photo" />
					<img src="<?php echo $this->getThemePath(); ?>/img/five-stars.png" class="stars"/>
				</div>
				<div>
					<p>I have worked with Jennifer at Metzwood for the past few years and have had great experiences so far. She is available to answer questions about my coverage is good about reminding me when things are due (I am not always as good about remembering). Thanks!</p>
					<p><strong>- Dave McGrath</strong></p>

					<p class="google-link"><a href="https://www.google.com/search?q=metzwood+insurance&source=hp&ei=TdndYPSxNK6x5NoPtZyTKA&iflsig=AINFCbYAAAAAYN3nXaGceO5_0nfsFqmtGSeHmxHfGhHh&oq=metzwood+insurance&gs_lcp=Cgdnd3Mtd2l6EAMyCwguEMcBEK8BEJMCMgIIADIICC4QxwEQrwEyCAguEMcBEK8BULsHWKsUYNkVaABwAHgAgAHpAYgB6QGSAQMyLTGYAQCgAQGqAQdnd3Mtd2l6&sclient=gws-wiz&ved=0ahUKEwi0jLGoksLxAhWuGFkFHTXOBAUQ4dUDCAk&uact=5#lrd=0x89ddf3daa7c69871:0x149e16d074ab2901,1">- Via Google Reviews</a></p>
				</div>
			</div></div>
			<div><div class="testimonial">
				<div>
					<img src="<?php echo $this->getThemePath(); ?>/img/testimonials/Colleen-Carpenter-Rice.png" alt=
					"testimonial" class="photo" />
					<img src="<?php echo $this->getThemePath(); ?>/img/five-stars.png" class="stars"/>
				</div>
				<div>
					<p>Had been wanting to check out new insurance for both homeowners and car for a while. I wish we had done it sooner. New policies will save us about $1,000 with better coverage. Kami was quick to review our info and get us quotes. We are happy to work with a local business who cares about their customers and their community!</p>
					<p><strong>- Colleen Carpenter-Rice</strong></p>

					<p class="google-link"><a href="https://www.google.com/search?q=metzwood+insurance&source=hp&ei=TdndYPSxNK6x5NoPtZyTKA&iflsig=AINFCbYAAAAAYN3nXaGceO5_0nfsFqmtGSeHmxHfGhHh&oq=metzwood+insurance&gs_lcp=Cgdnd3Mtd2l6EAMyCwguEMcBEK8BEJMCMgIIADIICC4QxwEQrwEyCAguEMcBEK8BULsHWKsUYNkVaABwAHgAgAHpAYgB6QGSAQMyLTGYAQCgAQGqAQdnd3Mtd2l6&sclient=gws-wiz&ved=0ahUKEwi0jLGoksLxAhWuGFkFHTXOBAUQ4dUDCAk&uact=5#lrd=0x89ddf3daa7c69871:0x149e16d074ab2901,1">Via Google Reviews</a></p>
				</div>
			</div></div>
			<div><div class="testimonial">
				<div>
					<img src="<?php echo $this->getThemePath(); ?>/img/testimonials/Craig-Wescott.png" alt=
					"testimonial" class="photo" />
					<img src="<?php echo $this->getThemePath(); ?>/img/five-stars.png" class="stars"/>
				</div>
				<div>
					<p>Amy, Matt and the entire team at Metzwood are fantastic. The office is convenient, safe and friendly. I always feel like I am the highest priority client.</p>
					<p><strong>- Craig Westcott</strong></p>


					<p class="google-link"><a href="https://www.google.com/search?q=metzwood+insurance&source=hp&ei=TdndYPSxNK6x5NoPtZyTKA&iflsig=AINFCbYAAAAAYN3nXaGceO5_0nfsFqmtGSeHmxHfGhHh&oq=metzwood+insurance&gs_lcp=Cgdnd3Mtd2l6EAMyCwguEMcBEK8BEJMCMgIIADIICC4QxwEQrwEyCAguEMcBEK8BULsHWKsUYNkVaABwAHgAgAHpAYgB6QGSAQMyLTGYAQCgAQGqAQdnd3Mtd2l6&sclient=gws-wiz&ved=0ahUKEwi0jLGoksLxAhWuGFkFHTXOBAUQ4dUDCAk&uact=5#lrd=0x89ddf3daa7c69871:0x149e16d074ab2901,1">Via Google Reviews</a></p>
				</div>
			</div></div>
			<div><div class="testimonial">
				<div>
					<img src="<?php echo $this->getThemePath(); ?>/img/testimonials/Caleb-White.png" alt=
					"testimonial" class="photo" />
					<img src="<?php echo $this->getThemePath(); ?>/img/five-stars.png" class="stars"/>
				</div>
				<div>
					<p>We've been with MetzWood for over 10 years for both personal and business insurance. I can't say enough good things about their customer service and attention to detail - always accessible and supportive, especially in times of need. From the top down, a first class organization.</p>
					<p><strong>- Caleb White</strong></p>

					<p class="google-link"><a href="https://www.google.com/search?q=metzwood+insurance&source=hp&ei=TdndYPSxNK6x5NoPtZyTKA&iflsig=AINFCbYAAAAAYN3nXaGceO5_0nfsFqmtGSeHmxHfGhHh&oq=metzwood+insurance&gs_lcp=Cgdnd3Mtd2l6EAMyCwguEMcBEK8BEJMCMgIIADIICC4QxwEQrwEyCAguEMcBEK8BULsHWKsUYNkVaABwAHgAgAHpAYgB6QGSAQMyLTGYAQCgAQGqAQdnd3Mtd2l6&sclient=gws-wiz&ved=0ahUKEwi0jLGoksLxAhWuGFkFHTXOBAUQ4dUDCAk&uact=5#lrd=0x89ddf3daa7c69871:0x149e16d074ab2901,1">Via Google Reviews</a></p>
				</div>
			</div>
			</div>
		</div>
	</section>
	<section class="video">
		<div class="container two-column">
			<div>
				<img src="<?php echo $this->getThemePath(); ?>/img/father-daughter-img.png" alt="video" />
			</div>
			<div>
				<div class="cta-box">
					<h3>TEEN GROWING UP?</h3>
					<p><em>That’s a MetzWood Moment</em></p>
					<span class="btn clear"><a href="/">Play Video <i class="fas fa-caret-right"></i></a></span>
				</div>

			</div>
		</div>
	</section>
	<section class="news">
		<div class="container grid three">
			<?php
			  $pl = new PageList();
			  $pl->filterByParentID(207); 
			  $pl->sortByDisplayOrder('alpha_asc'); // Sort alphebetically
			  $pages = $pl->get();
			  $counter = 0;
			 
			  // Display Page Name and Description
			  foreach ($pages as $page){
			  	$counter++;
			    $title = $page->getCollectionName();
			    $description = $page->getCollectionDescription();
			    $link = $page->getCollectionLink();
			    if($page->getAttribute('thumbnail')) {
              		$picture = $page->getAttribute('thumbnail');
              		$imagepath = $picture->getRelativePath();
              	}
              	if ($counter == 4):
              		break;
              	endif;
            	?>
            	
            	<div>
            		<div class="news-item">
						<img src="<?php echo $imagepath ?>" />
						<h3><?php echo $title ?></h3>
						<p><?php echo $description ?></p>
						<span class="btn"><a href="<?php echo $link ?>">Read More <i class="fas fa-caret-right"></i></a></span>
					</div>
            	</div>
			<?php } ?>
		</div>
	</section>
</div>

<?php require('elements/footer.php'); ?>
