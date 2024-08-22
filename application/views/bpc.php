<script type="text/javascript">
  var message="Function right click is Disabled!";
  function clickIE4(){
    if(event.button==2){
      alert(message);
      return false;
    }
  }
  function clickNS4(e){
    if(document.layers||document.getElementById&&!document.all){
      if(e.which==2||e.which==3){
        alert(message);
        return false;
      }
    }
  }
  if(document.layers){
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown=clickNS4;
  }else if(document.all&&!document.getElementById){
    document.onmousedown=clickIE4;
  }
  document.oncontextmenu=new Function("alert(message);return false");
</script>

    <section class="pricing-page">
        <div class="container">
            <div class="center">  
                <h2>Beton Pra Cetak (BPC)</h2>
                <p class="lead">Berikut beberapa produk yang kami hasilkan dari Unit Bisnis Beton Pra Cetak (BPC)</p>
            </div>  

<!--             <div class="media">
                <div class="pull-left">
                    <a href="#"><img class="media-object" src="<?php echo base_url();?>public/images/produk/precast.gif" alt=""></a>
                </div>
            </div> -->

            <div class="pricing-area text-center">
                <div class="row">

                    <div class="col-sm-12 plan price-one wow fadeInDown">
                        <ul>
<!--                             <li class="heading-one">
                                <h1>Box Culvert</h1>
                            </li> -->

                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="<?php echo base_url();?>public/images/produk/precast.png" alt=""></a>
                                </div>
                            </div>
                        </ul>
                    </div>


                    <div class="col-sm-8 plan price-one wow fadeInDown">
                        <ul>
                            <li class="heading-one">
                                <h1>Box Culvert</h1>
                                <!-- <span>$6/Month</span> -->
                            </li>

                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="<?php echo base_url();?>public/images/produk/box-culvert.png" alt=""></a>
                                </div>
<!--                                 <div class="media-body">
                                    <h4>Ir. Wedo Wiroaji</h4>
                                    <h5><b>Komisaris Utama</b></h5>
                                    
                                    <ul class="social_icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div> -->
                            </div>

<!--                             <li>5 Gb Disk Space</li>
                            <li>1GB Dadicated Ram</li>
                            <li>10 Addon Domain</li>
                            <li>10 Email Account</li>
                            <li>24/7 Support</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li> -->
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-one wow fadeInDown">
                        <ul>
                            <li class="heading-one">
                                <h1>Jenis Box Culvert</h1>
                            </li>

                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="<?php echo base_url();?>public/images/produk/box-culvert-dimensi1.PNG" alt=""></a>
                                </div>
                            </div>
                        </ul>
                    </div>

<!--                     <div class="col-sm-4 plan price-two wow fadeInDown">
                        <ul>
                            <li class="heading-two">
                                <h1>Standerd</h1>
                                <span>$12/Month</span>
                            </li>
                            <li>10 Gb Disk Space</li>
                            <li>2GB Dadicated Ram</li>
                            <li>20 Addon Domain</li>
                            <li>20 Email Account</li>
                            <li>24/7 Support</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div> -->

                    <div class="col-sm-8 plan price-one wow fadeInDown">
                        <ul>
                            <li class="heading-one">
                                <h1>U-Ditch</h1>
                            </li>

                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="<?php echo base_url();?>public/images/produk/u-dicth u1.PNG" alt=""></a>
                                </div>
                            </div>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-one wow fadeInDown">
                        <ul>
                            <li class="heading-one">
                                <h1>Jenis U-Ditch</h1>
                            </li>

                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="<?php echo base_url();?>public/images/produk/u-dicth u dimensi1.PNG" alt=""></a>
                                </div>
                            </div>
                        </ul>
                    </div>

                    <div class="col-sm-8 plan price-one wow fadeInDown">
                        <ul>
                            <li class="heading-one">
                                <h1>Cover U-Ditch</h1>
                            </li>

                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="<?php echo base_url();?>public/images/produk/cover1.PNG" alt=""></a>
                                </div>
                            </div>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-one wow fadeInDown">
                        <ul>
                            <li class="heading-one">
                                <h1>Jenis Cover U-Ditch</h1>
                            </li>

                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="<?php echo base_url();?>public/images/produk/cover dimensi1.PNG" alt=""></a>
                                </div>
                            </div>
                        </ul>
                    </div>

                    <div class="col-sm-8 plan price-one wow fadeInDown">
                        <ul>
                            <li class="heading-one">
                                <h1>Panel</h1>
                            </li>

                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="<?php echo base_url();?>public/images/produk/pagar2.png" alt=""></a>
                                </div>
                            </div>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-one wow fadeInDown">
                        <ul>
                            <li class="heading-one">
                                <h1>Jenis Panel</h1>
                            </li>

                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="<?php echo base_url();?>public/images/produk/pagar1.PNG" alt=""></a>
                                </div>
                            </div>
                        </ul>
                    </div>                    

<!--                     <div class="col-sm-4 plan price-three wow fadeInDown">
                        <img src="images/ribon_one.png">
                        <ul>
                            <li class="heading-three">
                                <h1>Premium</h1>
                                <span>$24/Month</span>
                            </li>
                            <li>50 Gb Disk Space</li>
                            <li>8GB Dadicated Ram</li>
                            <li>Unlimited Addon Domain</li>
                            <li>Unlimited Email Account</li>
                            <li>24/7 Support</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div>
 -->
<!--                     <div class="col-sm-6 col-md-3 plan price-four wow fadeInDown">
                        <ul>
                            <li class="heading-four">
                                <h1>Basic</h1>
                                <span>$3/Month</span>
                            </li>
                            <li>5 Gb Disk Space</li>
                            <li>1GB Dadicated Ram</li>
                            <li>10 Addon Domain</li>
                            <li>10 Email Account</li>
                            <li>24/7 Support</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-five wow fadeInDown">
                        <ul>
                            <li class="heading-five">
                                <h1>Standerd</h1>
                                <span>$6/Month</span>
                            </li>
                            <li>5 Gb Disk Space</li>
                            <li>1GB Dadicated Ram</li>
                            <li>10 Addon Domain</li>
                            <li>10 Email Account</li>
                            <li>24/7 Support</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-six wow fadeInDown">
                         <img src="images/ribon_two.png">
                        <ul>
                            <li class="heading-six">
                                <h1>Premium</h1>
                                <span>$12/Month</span>
                            </li>
                            <li>5 Gb Disk Space</li>
                            <li>1GB Dadicated Ram</li>
                            <li>10 Addon Domain</li>
                            <li>10 Email Account</li>
                            <li>24/7 Support</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div>

                     <div class="col-sm-6 col-md-3 plan price-seven wow fadeInDown">
                        <ul>
                            <li class="heading-seven">
                                <h1>Developer</h1>
                                <span>$19/Month</span>
                            </li>
                            <li>5 Gb Disk Space</li>
                            <li>1GB Dadicated Ram</li>
                            <li>10 Addon Domain</li>
                            <li>10 Email Account</li>
                            <li>24/7 Support</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div><!--/pricing-area-->
        </div><!--/container-->
    </section><!--/pricing-page-->

     <!-- <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(<?php echo base_url()?>public/images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo base_url()?>public/images/slider/img1.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="item" style="background-image: url(<?php echo base_url()?>public/images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo base_url()?>public/images/slider/img2.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="item" style="background-image: url(<?php echo base_url()?>public/images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo base_url()?>public/images/slider/img3.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Our Clients</h2>
            </div>
        

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Client</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bumn">BUMN</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".dev">Developers</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".cont">Contractors</a></li>
            </ul>

            <div class="row">
                <div class="portfolio-items">
                    <div class="portfolio-item bumn col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/abipraya.png" alt="">
                        </div>
                    </div>
                    <div class="portfolio-item bumn col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/adhikarya.png" alt="">
                        </div>
                    </div>
                    <div class="portfolio-item bumn col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/waskita.png" alt="">
                        </div>
                    </div>
                    <div class="portfolio-item bumn col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/wika.png" alt="">
                        </div>
                    </div>
                    <div class="portfolio-item bumn col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/pertamina.png" alt="">
                        </div>
                    </div>
                    <div class="portfolio-item bumn col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/totalbp.png" alt="">
                        </div>
                    </div>
                    <div class="portfolio-item bumn col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/hk.png" alt="">
                        </div>
                    </div>
                    <div class="portfolio-item bumn col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/sggresik.png" alt="">
                        </div>
                    </div>
                    <div class="portfolio-item bumn col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/nindyakarya.png" alt="">
                        </div>
                    </div>
                    <div class="portfolio-item bumn col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/pp.png" alt="">
                        </div>
                    </div>
                    <div class="portfolio-item dev col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/pakuwongroup.png" alt="">
                        </div>
                    </div>
                    <div class="portfolio-item dev col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/jayaland.png" alt="">
                        </div>
                    </div>
                     <div class="portfolio-item dev col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/ciputra1.png" alt="">
                        </div>
                    </div>
                     <div class="portfolio-item dev col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/tamandhika1.png" alt="">
                        </div>
                    </div>
                     <div class="portfolio-item cont col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/pulauintan.png" alt="">
                        </div>
                    </div>
                     <div class="portfolio-item cont col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/thiess.png" alt="">
                        </div>
                    </div>
                     <div class="portfolio-item cont col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/ometraco1.png" alt="">
                        </div>
                    </div>
                     <div class="portfolio-item cont col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/lippo1.png" alt="">
                        </div>
                    </div>
                     <div class="portfolio-item cont col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/dutagraha.png" alt="">
                        </div>
                    </div>
                     <div class="portfolio-item cont col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/kadi.png" alt="">
                        </div>
                    </div>
                    <div class="portfolio-item cont col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/ciptadimensi.png" alt="">
                        </div>
                    </div>
                     <div class="portfolio-item cont col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/asa1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    
    

   