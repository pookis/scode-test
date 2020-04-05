<?php
/**
 *
 * @package scoding
 */

get_header();?>



<!-- Hero area start -->


<?php if (have_rows('first')): ?>
<?php while (have_rows('first')): the_row();?>
<div class="hero-area" style="background-image: url(<?php the_sub_field('background_image');?>
);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero-left-texts">
                    <h1><?php if ($heading = get_sub_field('heading')): ?>
<?php echo $heading; ?>
<?php endif;?>
<span><?php if ($sub_heading = get_sub_field('sub_heading')): ?>
<?php echo $sub_heading; ?>
<?php endif;?>
</span></h1>
                    <p><?php if ($explanation = get_sub_field('explanation')): ?>
<?php echo $explanation; ?>
<?php endif;?></p>
                </div>
            </div>
            
<?php endwhile;?>
<?php endif;?>

            <div class="col-lg-6">
                <div class="hero-form">
                    <form action="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, accusantium!</p>
                        <div class="form-main-inner">
                            <div class="single-form-blk">
                                <input type="text" placeholder="Your Name">
                            </div>
                            <div class="single-form-blk">
                                <input type="text" placeholder="Your Companny Name">
                            </div>
                            <div class="single-form-blk">
                                <select name="" id="">
                                    <option value="">select items</option>
                                    <option value="">select items</option>
                                    <option value="">select items</option>
                                    <option value="">select items</option>
                                    <option value="">select items</option>
                                    <option value="">select items</option>
                                </select>
                            </div>
                            <div class="shop-sidbar text-center clearfix">
                                <input type="text" id="amount" readonly
                                    style="border:0; color:#f6931f; font-weight:bold;">
                                <div class="range-slider1">
                                    <div id="slider-range"></div>
                                    <div class="slider-bttom-containt">
                                        <p class="left">$6000</p>
                                        <a href="#">lorem</a>
                                        <p class="right">$70000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="sb-btn">
                                <button type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Hero area end -->
<!--    banner-area-start-->
<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="banner-containt">
                    <div class="banner-image">


                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/banner-img.png" alt="">
                    </div>
                    <div class="banner-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="banner-btn text-center">
                    <a href="#">Lorem ipsum</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--    car-box-area-start-->
<div class="car-box-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Lorem ipsum dolor.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="single-box">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/car1.png" alt="">
                    <div class="box-containt">
                        <h3>Lorem ipsum</h3>
                        <div class="box-containt-heading">
                            <h3>$13700</h3>
                            <span>2015</span>
                        </div>
                        <div class="box-text">
                            <div class="box-left-text">
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                            </div>
                            <div class="box-right-text">
                                <div class="box-right-right">
                                    <div class="box-right">
                                        <span>lorem</span>
                                        <p>Lorem ipsum.</p>
                                    </div>
                                    <div class="box-right">
                                        <span>lorem</span>
                                        <p>Lorem ipsum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-btn">
                            <a href="#">lorem</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-box">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/car2.png" alt="">
                    <div class="box-containt">
                        <h3>Lorem ipsum</h3>
                        <div class="box-containt-heading">
                            <h3>$13700</h3>
                            <span>2015</span>
                        </div>
                        <div class="box-text">
                            <div class="box-left-text">
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                            </div>
                            <div class="box-right-text">
                                <div class="box-right-right">
                                    <div class="box-right">
                                        <span>lorem</span>
                                        <p>Lorem ipsum.</p>
                                    </div>
                                    <div class="box-right">
                                        <span>lorem</span>
                                        <p>Lorem ipsum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-btn">
                            <a href="#">lorem</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-box">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/car3.png" alt="">
                    <div class="box-containt">
                        <h3>Lorem ipsum</h3>
                        <div class="box-containt-heading">
                            <h3>$13700</h3>
                            <span>2015</span>
                        </div>
                        <div class="box-text">
                            <div class="box-left-text">
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                            </div>
                            <div class="box-right-text">
                                <div class="box-right-right">
                                    <div class="box-right">
                                        <span>lorem</span>
                                        <p>Lorem ipsum.</p>
                                    </div>
                                    <div class="box-right">
                                        <span>lorem</span>
                                        <p>Lorem ipsum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-btn">
                            <a href="#">lorem</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-box">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/car4.png" alt="">
                    <div class="box-containt">
                        <h3>Lorem ipsum</h3>
                        <div class="box-containt-heading">
                            <h3>$13700</h3>
                            <span>2015</span>
                        </div>
                        <div class="box-text">
                            <div class="box-left-text">
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                            </div>
                            <div class="box-right-text">
                                <div class="box-right-right">
                                    <div class="box-right">
                                        <span>lorem</span>
                                        <p>Lorem ipsum.</p>
                                    </div>
                                    <div class="box-right">
                                        <span>lorem</span>
                                        <p>Lorem ipsum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-btn">
                            <a href="#">lorem</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-box">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/car5.png" alt="">
                    <div class="box-containt">
                        <h3>Lorem ipsum</h3>
                        <div class="box-containt-heading">
                            <h3>$13700</h3>
                            <span>2015</span>
                        </div>
                        <div class="box-text">
                            <div class="box-left-text">
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                            </div>
                            <div class="box-right-text">
                                <div class="box-right-right">
                                    <div class="box-right">
                                        <span>lorem</span>
                                        <p>Lorem ipsum.</p>
                                    </div>
                                    <div class="box-right">
                                        <span>lorem</span>
                                        <p>Lorem ipsum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-btn">
                            <a href="#">lorem</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-box">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/car1.png" alt="">
                    <div class="box-containt">
                        <h3>Lorem ipsum</h3>
                        <div class="box-containt-heading">
                            <h3>$13700</h3>
                            <span>2015</span>
                        </div>
                        <div class="box-text">
                            <div class="box-left-text">
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                            </div>
                            <div class="box-right-text">
                                <div class="box-right-right">
                                    <div class="box-right">
                                        <span>lorem</span>
                                        <p>Lorem ipsum.</p>
                                    </div>
                                    <div class="box-right">
                                        <span>lorem</span>
                                        <p>Lorem ipsum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-btn">
                            <a href="#">lorem</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-box">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/car1.png" alt="">
                    <div class="box-containt">
                        <h3>Lorem ipsum</h3>
                        <div class="box-containt-heading">
                            <h3>$13700</h3>
                            <span>2015</span>
                        </div>
                        <div class="box-text">
                            <div class="box-left-text">
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                            </div>
                            <div class="box-right-text">
                                <div class="box-right-right">
                                    <div class="box-right">
                                        <span>lorem</span>
                                        <p>Lorem ipsum.</p>
                                    </div>
                                    <div class="box-right">
                                        <span>lorem</span>
                                        <p>Lorem ipsum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-btn">
                            <a href="#">lorem</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-box">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/car2.png" alt="">
                    <div class="box-containt">
                        <h3>Lorem ipsum</h3>
                        <div class="box-containt-heading">
                            <h3>$13700</h3>
                            <span>2015</span>
                        </div>
                        <div class="box-text">
                            <div class="box-left-text">
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                                <p>lorem</p>
                            </div>
                            <div class="box-right-text">
                                <div class="box-right-right">
                                    <div class="box-right">
                                        <span>lorem</span>
                                        <p>Lorem ipsum.</p>
                                    </div>
                                    <div class="box-right">
                                        <span>lorem</span>
                                        <p>Lorem ipsum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-btn">
                            <a href="#">lorem</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="car-box-btn">
                    <a href="#" class="sb-btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--    brand-area-start-->
<div class="brand-area pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>Lorem ipsum dolor sit amet, consectetur.</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="brand-img">
                    <a href="#"><img src="<?php echo get_bloginfo('template_url') ?>/assets/img/COPART-logo.png"
                            alt=""></a>
                    <a href="#"><img src="<?php echo get_bloginfo('template_url') ?>/assets/img/iaai-logo.png"
                            alt=""></a>
                    <a href="#"><img src="<?php echo get_bloginfo('template_url') ?>/assets/img/manheim_logo.png"
                            alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--   blog-box-area-->
<div class="blog-box-area" style="background-image: url(<?php echo get_bloginfo('template_url') ?>
/assets/img/kont.png)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <span>Lorem ipsum</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="single-wrapper text-center">
                    <div class="wrapper-icon">
                        <a href="#"><img src="<?php echo get_bloginfo('template_url') ?>/assets/img/Group-11.svg"
                                alt=""></a>
                    </div>
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam obcaecati vitae voluptatum
                        ducimus ea veniam nobis aliquam dolores quis, doloremque?</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-wrapper text-center">
                    <div class="wrapper-icon">
                        <a href="#"><img src="<?php echo get_bloginfo('template_url') ?>/assets/img/Group-15.svg"
                                alt=""></a>
                    </div>
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam obcaecati vitae voluptatum
                        ducimus ea veniam nobis aliquam dolores quis, doloremque?</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-wrapper text-center">
                    <div class="wrapper-icon">
                        <a href="#"><img src="<?php echo get_bloginfo('template_url') ?>/assets/img/Group-11.svg"
                                alt=""></a>
                    </div>
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam obcaecati vitae voluptatum
                        ducimus ea veniam nobis aliquam dolores quis, doloremque?</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-wrapper text-center">
                    <div class="wrapper-icon">
                        <a href="#"><img src="<?php echo get_bloginfo('template_url') ?>/assets/img/Group-15.svg"
                                alt=""></a>
                    </div>
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam obcaecati vitae voluptatum
                        ducimus ea veniam nobis aliquam dolores quis, doloremque?</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-wrapper text-center">
                    <div class="wrapper-icon">
                        <a href="#"><img src="<?php echo get_bloginfo('template_url') ?>/assets/img/Group-11.svg"
                                alt=""></a>
                    </div>
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam obcaecati vitae voluptatum
                        ducimus ea veniam nobis aliquam dolores quis, doloremque?</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-wrapper text-center">
                    <div class="wrapper-icon">
                        <a href="#"><img src="<?php echo get_bloginfo('template_url') ?>/assets/img/Group-15.svg"
                                alt=""></a>
                    </div>
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam obcaecati vitae voluptatum
                        ducimus ea veniam nobis aliquam dolores quis, doloremque?</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-wrapper text-center">
                    <div class="wrapper-icon">
                        <a href="#"><img src="<?php echo get_bloginfo('template_url') ?>/assets/img/Group-11.svg"
                                alt=""></a>
                    </div>
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam obcaecati vitae voluptatum
                        ducimus ea veniam nobis aliquam dolores quis, doloremque?</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-wrapper text-center">
                    <div class="wrapper-icon">
                        <a href="#"><img src="<?php echo get_bloginfo('template_url') ?>/assets/img/Group-15.svg"
                                alt=""></a>
                    </div>
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam obcaecati vitae voluptatum
                        ducimus ea veniam nobis aliquam dolores quis, doloremque?</p>
                </div>
            </div>
        </div>
    </div>
</div>




<?php get_footer();?>