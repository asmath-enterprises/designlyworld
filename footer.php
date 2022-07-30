</main>
<!-- main body - end
================================================== -->
<div class="container">
	<div id="clientcarousel" class="owl-carousel owl-theme">
		       <?php if( have_rows('client','options') ):?>
            <?php while( have_rows('client','options') ) : the_row();
            $designingimage = get_sub_field('designing_image');
            $imagename = get_sub_field('image_name');?>
			<div class="item">
			<img src="<?php echo $designingimage?>" alt="<?php echo $imagename?>">
		</div>
            <?php endwhile;?>
            <?php endif; ?>
	</div>
</div>
<!-- footer_section - start
		================================================== -->
<footer class="footer_section bg_default_blue text-white clearfix">
	<div class="container">
		<div class="footer_widget_area clearfix">
			<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="widget recent_works_list">
						<a href="https://designlyworld.com/">
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/footer_logo.webp"
								alt="designlyworld">
						</a>
					</div>
					<div class="row socialmedias">
						<a class="socialmediaa" href="https://www.linkedin.com/company/designlyworld/" target="_blank"
							rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i></a>
						<a class="socialmedia" href="https://instagram.com/designlyworld?igshid=YmMyMTA2M2Y="
							target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
						<a class="socialmedia" href="https://www.facebook.com/profile.php?id=100077195284484"
							target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-f"></i></a>
					</div>
				</div>
					<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
					<div class="widget footer_useful_links">
						<h3 class="footer_widget_title">Services</h3>
						<ul class="ul_li_block clearfix">
							<li><a href="https://designlyworld.com/identity/">Design & Branding</a></li>
							<li><a href="https://designlyworld.com/hand-fan-printing/">Hand-Fan Printing</a></li>
							<li><a href="https://designlyworld.com/website-development/">Website Development</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
					<div class="widget footer_useful_links">
						<h3 class="footer_widget_title">Quick Links</h3>
						<ul class="ul_li_block clearfix">
							<li><a href="https://designlyworld.com/identity/">Indentity</a></li>
							<li><a href="https://designlyworld.com/packaging/">Packaging </a></li>
							<li><a href="https://designlyworld.com/brochure-catalogue/">Brochure & Catalogue</a></li>
							<li><a href="https://designlyworld.com/flyers-posters/">Flyers & Posters</a></li>
							<li><a href="https://designlyworld.com/social-ads/">Social Ads</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
					<div class="widget footer_contact_form">
						<h3 class="footer_widget_title">Contact Us</h3>
						<a href="https://goo.gl/maps/uFzuxYuz3pyjgq9d9" target="_blank" rel="noopener noreferrer"><span
								class="footer_hotline"><i class="fa-solid fa-location-dot"></i> 62/74, Police Station
								Rd, Sivakasi, Tamil Nadu</span> </a>
						<a href="mailto:designlyworld@gmail.com" target="_blank" rel="noopener noreferrer"><span
								class="footer_hotline"><i class="fa-regular fa-envelope"></i> designlyworld@gmail.com
							</span> </a>
						<a href="https://wa.me/916380974082" target="_blank" rel="noopener noreferrer"><span
								class="footer_hotline"><i class="fa-brands fa-whatsapp"></i>+91 63809 74082</span> </a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bottom_boxed clearfix">
			<div class="row align-items-center justify-content-lg-between justify-content-md-between">
				<div class="col-lg-12 col-md-12">
					<p class="copyright_text" style="text-align: center;">© Copyright 2022 All Rights Reserved By
						<a class="author_links" href="https://designlyworld.com/">DesignlyWorld</a></p>
				</div>
			</div>
		</div>

	</div>
</footer>
<!-- footer_section - end
		================================================== -->
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/popper.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.nice-select.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/circle-progress.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/magnific-popup.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/countTo.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/parallax.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/wow.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/lazyload.js"type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/custom.js" type="text/javascript"></script>
</body>
<?php wp_footer();?>

</html>