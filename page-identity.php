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
                    <h4 class="small_title">Our Recent Works</h4>
                    <h2 class="big_title mb-0">
                        Let’s See Our Latest Project That Recently Done
                    </h2>
                    <span class="biggest_title">Works</span>
                </div>
            </div>
        </div>
    </div>
    <div class="product_selection_bar wow fadeInUp2 clearfix" data-wow-delay=".1s"
        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
        <div class="row" style="float: right;padding-right: 45px;">
            <div class="">
                <div class="select_option mb-0">
                    <div class="nice-select" tabindex="0"><span class="current">Identity</span>
                        <ul class="list">
                       
                             <li data-value="1" class="option"><a href="https://designlyworld.com/packaging/">Packaging</a></li>
                             <li data-value="2" class="option"><a href="https://designlyworld.com/brochure-catalogue/">Brochure & Catalogue</a></li>
                             <li data-value="3" class="option"><a href="https://designlyworld.com/flyers-posters/">Flyers & Posters</a></li>
                            <li data-value="4" class="option"><a href="https://designlyworld.com/social-ads/">Social Ads</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gallerycontainer">
        <div class="gallery-item">
            <?php if( have_rows('identity','options') ):?>
            <?php while( have_rows('identity','options') ) : the_row();
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



<?php get_footer();?>