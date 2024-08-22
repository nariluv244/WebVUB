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

     <section id="main-slider" class="no-margin">
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
                </div><!--/.item-->

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
                </div><!--/.item-->

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
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->
    <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Our Clients</h2>
               <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
        

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Client</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bumn">BUMN</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".dev">Developers</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".cont">Contractors</a></li>
            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
                    <div class="portfolio-item bumn col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/abipraya.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item bumn col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/adhikarya.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item bumn col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/waskita.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item bumn col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/wika.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item bumn col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/pertamina.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item bumn col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/totalbp.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item bumn col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/hk.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item bumn col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/sggresik.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item bumn col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/nindyakarya.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item bumn col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/pp.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item dev col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/pakuwongroup.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item dev col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/jayaland.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                     <div class="portfolio-item dev col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/ciputra1.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                     <div class="portfolio-item dev col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/tamandhika1.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                     <div class="portfolio-item cont col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/pulauintan.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                     <div class="portfolio-item cont col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/thiess.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                     <div class="portfolio-item cont col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/ometraco1.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                     <div class="portfolio-item cont col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/lippo1.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                     <div class="portfolio-item cont col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/dutagraha.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                     <div class="portfolio-item cont col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/kadi.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item cont col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/ciptadimensi.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                     <div class="portfolio-item cont col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/clients/asa1.png" alt="">
                        </div>
                    </div><!--/.portfolio-item-->
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
    
    

   