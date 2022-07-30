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


<!-- portfolio_section - start
			================================================== -->
<section class="portfolio_section sec_ptb_120 clearfix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                <div class="section_title text-center mb_50 wow fadeInUp2" data-wow-delay=".1s">
                    <h4 class="small_title">Hand-Fan Printing</h4>
                    <h2 class="big_title mb-0" style="font-size: 45px;">
                        We are the only company in india to manufacture multicolor Handfans
                    </h2>
              
                </div>
            </div>
        </div>
    </div>

    <div class="gallerycontainer">
        <div class="gallery-item">
            <?php if( have_rows('hand_fan_printing','options') ):?>
            <?php while( have_rows('hand_fan_printing','options') ) : the_row();
            $designingimage = get_sub_field('designing_image');
            $imagename = get_sub_field('image_name');?>
            <div class="item wow fadeInUp2">
                <img data-src="<?php echo $designingimage?>" alt="<?php echo $imagename?>">
            </div>
            <?php endwhile;?>
            <?php endif; ?>
           
        </div>
    </div>
</section>
<!-- portfolio_section - end
			================================================== -->
<div style="    margin-bottom: 40px;
    padding: 30px;
    float: right;">
									<a class="custom_btn bg_default_yellow" href="https://wa.me/916380974082">
										get a quote 
										<span><i class="fa-solid fa-arrow-right-long"></i></span>
									</a>
</div>


<?php get_footer();?>