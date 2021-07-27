<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<footer>
      <div class="container grid four">
      	<div>
      		<img src="<?php echo $this->getThemePath(); ?>/img/logo.png" alt="logo" />
      	</div>
      	<div>
      		<span class="white btn"><a href="/"><i class="fa fa-phone"></i> (518) 392-5161</a></span>
      	</div>
      	<div>
      		<span class="btn dark-blue"><a href="/request-quote">Get a Quote Online</a></span>
      	</div>
      	<div>
                  <?php
                      $a = new GlobalArea('Social Links');
                      $a->display($c);
                   ?>
            </div>
     </div>
</footer>

</div>

<?php View::element('footer_required'); ?>


<script src="<?php echo $this->getThemePath(); ?>/_js/vendor/slick.min.js"></script>

<script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/_js/main.js"></script>

</body>
</html>
