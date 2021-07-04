<?=$this->layout('index');?>

<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="item active" style="background-image: url(<?=$this->asset('/images/slider/bg1.jpg')?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Help Finding Information Online</h1>
                                <div class="animation animated-item-2">
                                    Every new computer that’s brought home from the store has an operating system installed onto it.
                                </div>
                                <a class="btn-slide animation animated-item-3" href="#">Learn More</a>
                                <a class="btn-slide white animation animated-item-3" href="#">Get Started</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.item-->

            <div class="item" style="background-image: url(<?=$this->asset('/images/slider/bg2.jpg')?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Help Finding Information Online</h1>
                                <div class="animation animated-item-2">
                                    Every new computer that’s brought home from the store has an operating system installed onto it.
                                </div>
                                <a class="btn-slide white animation animated-item-3" href="#">Learn More</a>
                                <a class="btn-slide animation animated-item-3" href="#">Get Started</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!--/.item-->

        </div>
        <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
    <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs hidden-sm" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section>
<!--/#main-slider-->

<section id="feature">
    <div class="container">
        <div class="center fadeInDown">
            <h2>Features</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="row">
            <div class="features">
                <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <div class="icon">
                            <i class="fa fa-rocket"></i>
                        </div>
                        <h2>Fast</h2>
                        <p>Having a baby can be a nerve wracking experience for new</p>
                    </div>
                </div>
                <!--/.col-md-3-->
                <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <div class="icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <h2>Easy</h2>
                        <p>If you are looking for a new way to promote your business that</p>
                    </div>
                </div>
                <!--/.col-md-3-->
                <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <div class="icon">
                            <i class="fa fa-bullhorn"></i>
                        </div>
                        <h2>Cheap</h2>
                        <p>Okay, you’ve decided you want to make money with Affiliate</p>
                    </div>
                </div>
                <!--/.col-md-3-->
                <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <div class="icon">
                            <i class="fa fa-arrows"></i>
                        </div>
                        <h2>Editable</h2>
                        <p>A Pocket PC is a handheld computer, which features many</p>
                    </div>
                </div>
                <!--/.col-md-3-->
            </div>
            <!--/.services-->
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#feature-->

<section id="recent-works">
    <div class="container">
        <div class="center fadeInDown">
            <h2>Recent Works</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="row">
          <?php
  					$post_by_categorys = $this->post()->getPost('6', 'DESC', WEB_LANG_ID);
  					foreach($post_by_categorys as $list_post){
  				?>
            <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$list_post['picture'];?>" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <a class="preview" href="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$list_post['picture'];?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>

                        </div>
                    </div>

                </div>
                <div class="">
                  <h3><a href="<?=BASE_URL;?>/detailpost/<?=$list_post['seotitle'];?>"><?=$this->pocore()->call->postring->cuthighlight('title', $list_post['title'], '30');?>...</a></h3>
                  <p><?=$this->pocore()->call->postring->cuthighlight('post', $list_post['content'], '50');?>...</p>
                  <p><?=$this->post()->getPostTag($list_post['tag']);?></p>
                </div>
            </div>
          <?php } ?>

        </div>
        <!--/.row-->
        <div class="clearfix text-center">
            <br>
            <br>
            <a href="#" class="btn btn-primary">Show More</a>
        </div>
    </div>
    <!--/.container-->
</section>
<!--/#recent-works-->

<section id="services" class="service-item">
    <div class="container">
        <div class="center fadeInDown">
            <h2>Our Service</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="<?=$this->asset('/images/services/ux.svg')?>">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">UI/UX Design</h3>
                        <p>Hydroderm is the highly desired anti-aging cream on</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="<?=$this->asset('/images/services/web.svg')?>">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Web Design</h3>
                        <p>Hydroderm is the highly desired anti-aging cream on</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="<?=$this->asset('/images/services/motion.svg')?>">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Motion Graphics</h3>
                        <p>Hydroderm is the highly desired anti-aging cream on</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="<?=$this->asset('/images/services/mobile-ui.svg')?>">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Mobile UI/UX</h3>
                        <p>Hydroderm is the highly desired anti-aging cream on</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="<?=$this->asset('/images/services/web-app.svg')?>">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Web Applications</h3>
                        <p>Hydroderm is the highly desired anti-aging cream on</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="<?=$this->asset('/images/services/mobile-ui.svg')?>">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">SEO Marketing</h3>
                        <p>Hydroderm is the highly desired anti-aging cream on</p>
                    </div>
                </div>
            </div>

        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#services-->

<section id="middle" class="skill-area" style="background-image: url(<?=$this->asset('/images/skill-bg.png')?>)">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 fadeInDown">
                <div class="skill">
                    <h2>Our Skills</h2>
                    <p>All users on MySpace will know that there are millions of people out there. Every <br> day besides so many people joining this community.</p>
                </div>
            </div>
            <!--/.col-sm-6-->

            <div class="col-sm-6">
                <div class="progress-wrap">
                    <h3>Graphic Design</h3>
                    <div class="progress">
                        <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                            <span class="bar-width">85%</span>
                        </div>

                    </div>
                </div>

                <div class="progress-wrap">
                    <h3>HTML</h3>
                    <div class="progress">
                        <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                            <span class="bar-width">95%</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="progress-wrap">
                    <h3>CSS</h3>
                    <div class="progress">
                        <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            <span class="bar-width">80%</span>
                        </div>
                    </div>
                </div>

                <div class="progress-wrap">
                    <h3>Wordpress</h3>
                    <div class="progress">
                        <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                            <span class="bar-width">90%</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#middle-->

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 fadeInDown">
                <div class="tab-wrap">
                    <div class="media">
                        <div class="parrent pull-left">
                            <ul class="nav nav-tabs nav-stacked">
                                <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Responsive Web Design</a></li>
                                <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">Premium Plugin Included</a></li>
                                <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Predefine Layout</a></li>
                                <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Our Philosopy</a></li>
                                <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">What We Do?</a></li>
                            </ul>
                        </div>

                        <div class="parrent media-body">
                            <div class="tab-content">
                                <div class="tab-pane fade" id="tab1">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/tab2.png">
                                        </div>
                                        <div class="media-body">
                                            <h2>Adipisicing elit</h2>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade active in text-right" id="tab2">
                                    <div class="video-box">
                                        <img src="images/tab-video-bg.png" alt="video">
                                        <a class="video-icon" href="http://www.youtube.com/watch?v=cH6kxtzovew" rel="prettyPhoto"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                                </div>

                                <div class="tab-pane fade" id="tab4">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                                </div>

                                <div class="tab-pane fade" id="tab5">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,</p>
                                </div>
                            </div>
                            <!--/.tab-content-->
                        </div>
                        <!--/.media-body-->
                    </div>
                    <!--/.media-->
                </div>
                <!--/.tab-wrap-->
            </div>
            <!--/.col-sm-6-->

        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#content-->

<section id="testimonial">
    <div class="container">
        <div class="center fadeInDown">
            <h2>Testimonials</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
        <div class="testimonial-slider owl-carousel">
            <div class="single-slide">
                <div class="slide-img">
                    <img src="<?=$this->asset('/images/client1.jpg')?>" alt="">
                </div>
                <div class="content">
                    <img src="<?=$this->asset('/images/review.png')?>" alt="">
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                    <h4>- Charlotte Daniels</h4>
                </div>
            </div>
            <div class="single-slide">
                <div class="slide-img">
                    <img src="<?=$this->asset('/images/client2.jpg')?>" alt="">
                </div>
                <div class="content">
                    <img src="<?=$this->asset('/images/review.png')?>" alt="">
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                    <h4>- Charlotte Daniels</h4>
                </div>
            </div>
            <div class="single-slide">
                <div class="slide-img">
                    <img src="<?=$this->asset('/images/client3.jpg')?>" alt="">
                </div>
                <div class="content">
                    <img src="<?=$this->asset('/images/review.png')?>" alt="">
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                    <h4>- Charlotte Daniels</h4>
                </div>
            </div>
            <div class="single-slide">
                <div class="slide-img">
                    <img src="<?=$this->asset('/images/client2.jpg')?>" alt="">
                </div>
                <div class="content">
                    <img src="<?=$this->asset('/images/review.png')?>" alt="">
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                    <h4>- Charlotte Daniels</h4>
                </div>
            </div>
            <div class="single-slide">
                <div class="slide-img">
                    <img src="<?=$this->asset('/images/client1.jpg')?>" alt="">
                </div>
                <div class="content">
                    <img src="<?=$this->asset('/images/review.png')?>" alt="">
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                    <h4>- Charlotte Daniels</h4>
                </div>
            </div>
            <div class="single-slide">
                <div class="slide-img">
                    <img src="<?=$this->asset('/images/client3.jpg')?>" alt="">
                </div>
                <div class="content">
                    <img src="<?=$this->asset('/images/review.png')?>" alt="">
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                    <h4>- Charlotte Daniels</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="partner">
    <div class="container">
        <div class="center fadeInDown">
            <h2>Our Partners</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="partners">
            <ul>
                <li>
                    <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="<?=$this->asset('/images/partners/brand-1.png')?>"></a>
                </li>
                <li>
                    <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="<?=$this->asset('/images/partners/brand-2.png')?>"></a>
                </li>
                <li>
                    <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="<?=$this->asset('/images/partners/brand-3.png')?>"></a>
                </li>
                <li>
                    <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="<?=$this->asset('/images/partners/brand-4.png')?>"></a>
                </li>
                <li>
                    <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="<?=$this->asset('/images/partners/brand-5.png')?>"></a>
                </li>
            </ul>
        </div>
    </div>
    <!--/.container-->
</section>
<!--/#partner-->


<section id="bottom">
    <div class="container fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
            <div class="col-md-2">
                <a href="#" class="footer-logo">
                    <img src="<?=$this->asset('/images/logo-black.png')?>" alt="logo">
                </a>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h3>Company</h3>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">We are hiring</a></li>
                                <li><a href="#">Meet the team</a></li>
                                <li><a href="#">Copyright</a></li>
                                <li><a href="#">Terms of use</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h3>Support</h3>
                            <ul>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Refund policy</a></li>
                                <li><a href="#">Ticket system</a></li>
                                <li><a href="#">Billing system</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h3>Developers</h3>
                            <ul>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">SEO Marketing</a></li>
                                <li><a href="#">Theme</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Email Marketing</a></li>
                                <li><a href="#">Plugin Development</a></li>
                                <li><a href="#">Article Writing</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h3>Our Partners</h3>
                            <ul>
                                <li><a href="#">Adipisicing Elit</a></li>
                                <li><a href="#">Eiusmod</a></li>
                                <li><a href="#">Tempor</a></li>
                                <li><a href="#">Veniam</a></li>
                                <li><a href="#">Exercitation</a></li>
                                <li><a href="#">Ullamco</a></li>
                                <li><a href="#">Laboris</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                </div>
            </div>


        </div>
    </div>
</section>
<!--/#bottom-->
