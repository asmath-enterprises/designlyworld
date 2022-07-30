<?php get_header();?>
<!-- breadcrumb_section - start
			================================================== -->
<section class="breadcrumb_section d-flex align-items-center clearfix"
    data-background="<?php bloginfo('template_directory'); ?>/assets/images/new/breadcrumbsabt.webp">
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


<!-- about_section - start
			================================================== -->
<section class="about_section sec_ptb_130 clearfix">
	<div class="container">
		<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

			<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
				<div class="about_image_1 wow fadeInUp2" data-wow-delay=".1s">
					<img data-src="<?php bloginfo('template_directory'); ?>/assets/images/designly/about_01.webp" alt="designers in sivakasi" >
				</div>
			</div>

			<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
				<div class="about_content">
					<div class="section_title wow fadeInUp2" data-wow-delay=".1s">
						<h4 class="small_title">About Our Company</h4>
						<h2 class="big_title mb-0" style="font-size: 40px;">
							Print Your Dream Works With Designlyworld
						</h2>
						<span class="biggest_title">About</span>
					</div>

					<p class="wow fadeInUp2" data-wow-delay=".2s">
						<span>
							Designlyworld provides unique designing & printing services in Sivakasi.
							We are a one-of-a-kind branding & designing company, specialising in high-quality print
							media and packaging services. Our creative & innovative team is committed to design
							excellence and to increase the reach of your brand among target audiences.
							Our mission is to surpass your expectations providing designs that reflect your brand
							presence. This approach has made us one of the fastest growing branding companies in our
							space. Experience the power of designing & branding with Designlyworld today.
						</span>
					</p>
					<a class="custom_btn bg_default_yellow wow fadeInUp2" href="https://designlyworld.com/contact-us/">
						Contact Us
						<span><i class="fa-solid fa-arrow-right"></i></span>
					</a>

				</div>
			</div>

		</div>
	</div>
</section>
<!-- about_section - end
			================================================== -->

<!-- skill_section - start
			================================================== -->
<section class="skill_section clearfix" style="padding-bottom:80px">
	<div class="container">
		<div class="row mt__50 justify-content-center">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
				<div class="circle_progress_item">
					<div class="orange_printing_bar circle_progress">
						<strong class="percentage_text">95</strong>
					</div>
					<h4 class="item_title">Designing</h4>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
				<div class="circle_progress_item">
					<div class="yellow_branding_bar circle_progress">
						<strong class="percentage_text"></strong>
					</div>
					<h4 class="item_title">Video Making</h4>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
				<div class="circle_progress_item">
					<div class="blue_logo_bar circle_progress">
						<strong class="percentage_text"></strong>
					</div>
					<h4 class="item_title">Website Development</h4>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- skill_section - end
			================================================== -->
<!-- faqcontact_section - start
			================================================== -->
<section class="faqcontact_section  clearfix">
	<div class="container-fluid p-0">
		<div class="row no-gutters align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
			<div class="col-lg-6 col-md-7 col-sm-9 col-xs-12">
				<div class="faq_image wow fadeIn" data-wow-delay=".1s">
					<img data-src="<?php bloginfo('template_directory'); ?>/assets/images/designly/contact.webp" alt="designers in tamilnadu" >
				</div>
			</div>
			<div class="col-lg-6 col-md-7 col-sm-9 col-xs-12" style="padding:20px">
				<?php echo do_shortcode('[contact-form-7 id="32" title="Contact form 1"]'); ?>
			</div>
		</div>
	</div>
</section>
<!-- faqcontact_section - end
			================================================== -->
<?php get_footer();?>