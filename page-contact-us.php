<?php get_header();?>
	<!-- breadcrumb_section - start
			================================================== -->
<section class="breadcrumb_section d-flex align-items-center clearfix"
    data-background="<?php bloginfo('template_directory'); ?>/assets/images/new/breadcrumbs.webp">
    <div class="container">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay=".1s">
             
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay=".1s">
                <ul class="breadcrumb_nav ul_li_right clearfix">
                   
                </ul>
            </div>
        </div>
    </div>
</section>
			<!-- breadcrumb_section - end
			================================================== -->
			<!-- contact_section - start
			================================================== -->
			<section class="contact_section sec_ptb_130 clearfix">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
							<div class="contact_content">
								<div class="section_title mb_30 wow fadeInUp2" data-wow-delay=".1s">
									<h4 class="small_title">Contact Us</h4>
									<h2 class="big_title mb-0">
										Feel Free To Contact Us
									</h2>
									<span class="biggest_title">Contact</span>
								</div>
								<p class="mb_30 wow fadeInUp2" data-wow-delay=".2s">
								Create Your Dream Works With Designly World, we make innovation in every design.
								</p>
								<ul class="contact_information_list ul_li_block clearfix">
									<li class="wow fadeInUp2" data-wow-delay=".3s">
										<div class="item_icon bg_default_orange"><i class="fa-solid fa-location-dot"></i></div>
										<div class="item_content">
											<h4>Locations</h4>
											<a href="https://goo.gl/maps/uFzuxYuz3pyjgq9d9" target="_blank" rel="noopener noreferrer"><p>62/74, Police Station Rd, Sivakasi, Tamil Nadu</p></a>	
										</div>
									</li>
									<li class="wow fadeInUp2" data-wow-delay=".4s">
										<div class="item_icon bg_default_yellow"><i class="fa-solid fa-envelope"></i></div>
										<div class="item_content">
											<h4>Email Us</h4>
											<a href="mailto:designlyworld@gmail.com" target="_blank" rel="noopener noreferrer"><p>designlyworld@gmail.com</p></a>
										</div>
									</li>
									<li class="wow fadeInUp2" data-wow-delay=".5s">
										<div class="item_icon bg_default_lightgreen"><i class="fa-brands fa-whatsapp"></i></div>
										<div class="item_content">
											<h4>Whatsapp</h4>
											<a href="https://wa.me/916380974082" target="_blank" rel="noopener noreferrer"><p>+91 63809 74082</p></a>
										</div>
									</li>
									
								</ul>
							</div>
						</div>

						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
					<?php echo do_shortcode('[contact-form-7 id="32" title="Contact form 1"]'); ?>
						</div>
						
					</div>
				</div>
			</section>
			<!-- contact_section - end
			================================================== -->



<?php get_footer();?>