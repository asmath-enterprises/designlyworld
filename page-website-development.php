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

<section class="websites" id="demos">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <div class="section_title text-center mb_50 wow fadeInUp2" data-wow-delay=".1s">
                    <h4 class="small_title">Website Development</h4>
                    <p style="font-size: 25px;">
                        We Build well-versed Custom themes in WordPress without using any theme builders, along with we
                        add SEO, Page Speed Optimization, etc... Here are some of the best links that we have designed,
                        developed, and tested websites in past years.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid demo-container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 demo-block">
                <a class="demo-block-wrapper" href="creative-agency.html">
                    <div class="demo-item"
                        style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/demo-imgs/demo-1.jpg);">
                    </div>
                </a>
                <a href="creative-agency.html">
                    <h4>Notaads</h4>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 demo-block">
                <a class="demo-block-wrapper" href="digital-agency.html">
                    <div class="demo-item"
                        style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/demo-imgs/demo-2.jpg);">
                    </div>
                </a>
                <a href="digital-agency.html">
                    <h4>Neolife Education</h4>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 demo-block">
                <a class="demo-block-wrapper" href="design-studio.html">
                    <div class="demo-item"
                        style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/demo-imgs/demo-4.jpg);">
                    </div>
                </a>
                <a href="design-studio.html">
                    <h4>Neolife Educare</h4>
                </a>
            </div>

        </div>
    </div>
</section>

<?php get_footer();?>