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
                <li data-target="#main-slider" data-slide-to="3"></li>
                <li data-target="#main-slider" data-slide-to="4"></li>
                <li data-target="#main-slider" data-slide-to="5"></li>
            </ol>

            <div id="carousel-slider" class="carousel slide" data-ride="carousel">
            <!-- <div class="carousel-inner"> -->

                <div class="item active" style="background-image: url(<?php echo base_url()?>public/images/slider/imageedit_3_5137693017.jpg)">                    
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
<!--                                 <div class="carousel-content">
                                    <h1 class="animation animated-item-1"><img src="<?php echo base_url()?>public/images/slider/visislider.png" class="img-responsive"></h1>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(<?php echo base_url()?>public/images/slider/imageedit_1_4597086753.png)">                    
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
<!--                                 <div class="carousel-content">
                                    <h1 class="animation animated-item-1"><img src="<?php echo base_url()?>public/images/slider/visislider.png" class="img-responsive"></h1>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->                

                <!-- <div class="item active" style="background-image: url(<?php echo base_url()?>public/images/slider/bg1.jpg)"> -->
                <div class="item" style="background-image: url(<?php echo base_url()?>public/images/slider/bgdepan4.jpg)">                    
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1"><img src="<?php echo base_url()?>public/images/slider/visislider.png" class="img-responsive"></h1>
                                    <!-- <font color="red"><b>Menjadi Perusahaan Beton Pilihan Utama Pelanggan di Pasar Nasional</b></font> -->
                                    <!-- <h2 class="animation animated-item-2"><font color="red"><b>Your Concrete Partner</b></font></h2> -->
                                    <!-- <a class="btn-slide animation animated-item-3" href="#">Read More</a> -->
                                    <!-- <img src="<?php echo base_url()?>public/images/slider/visi.png" class="img-responsive"> -->
                                </div>
                            </div>

<!--                             <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo base_url()?>public/images/slider/visi.png" class="img-responsive">
                                </div>
                            </div> -->

<!--                             <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo base_url()?>public/images/slider/img1.png" class="img-responsive">
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div><!--/.item-->

                <!-- <div class="item" style="background-image: url(<?php echo base_url()?>public/images/slider/bg2.jpg)"> -->
                <div class="item" style="background-image: url(<?php echo base_url()?>public/images/slider/udit.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1"><img src="<?php echo base_url()?>public/images/slider/misi1.png" class="img-responsive"></h1>      
                                    <!-- <font color="red"><b>Memproduksi dan Menjual Beton dan Agregates yang Memenuhi Persyaratan Pelanggan (Tepat Mutu, Tepat Waktu, dan Tepat Jumlah)</b></font>                               -->
<!--                                     <h1 class="animation animated-item-1"><font color="black">Lorem ipsum dolor sit amet consectetur adipisicing elit</font></h1>
                                    <h2 class="animation animated-item-2"><font color="black">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</font></h2> -->
                                    <!-- <a class="btn-slide animation animated-item-3" href="#">Read More</a> -->
                                </div>
                            </div>

<!--                             <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo base_url()?>public/images/slider/img2.png" class="img-responsive">
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div><!--/.item-->

                <!-- <div class="item" style="background-image: url(<?php echo base_url()?>public/images/slider/bg3.jpg)"> -->
                <div class="item" style="background-image: url(<?php echo base_url()?>public/images/slider/udit2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1"><img src="<?php echo base_url()?>public/images/slider/misi2.png" class="img-responsive"></h1>     
                                    <!-- <font color="red"><b>Menghasilkan Laba yang Mampu Mendukung Pertumbuhan Perusahaan Secara Berkelanjutan dan Kesejahteraan Seluruh Pemangku Kepentingan</b></font>                                -->
<!--                                     <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2> -->
                                    <!-- <a class="btn-slide animation animated-item-3" href="#">Read More</a> -->
                                </div>
                            </div>
<!--                             <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo base_url()?>public/images/slider/img3.png" class="img-responsive">
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(<?php echo base_url()?>public/images/slider/btpecah.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1"><img src="<?php echo base_url()?>public/images/slider/misi3.png" class="img-responsive"></h1>
                                    <!-- <font color="red"><b>Menjalankan Proses Bisnis yang Prima Dengan di Dukung Oleh Karyawan yang Profesional, Sesuai Dengan Perundangan dan Peraturan yang Berlaku</b></font> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="services" class="service-item">
       <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Business</h2>
                <p class="lead">Untuk menjadi perusahaan beton pilihan utama pelanggan di Pasar Nasional, <br> berikut adalah Unit Bisnis kami :</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <!-- <img class="img-responsive" src="<?php echo base_url();?>public/images/services/imageedit_9_3710734210.jpg"> -->
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/services/services1.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Beton Siap Pakai</h3>
                            <p>Penyediaan Readymix,Truck Mixer</p>
                            <!-- <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p> -->
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/services/services2.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Beton Masonry</h3>
                            <p>Produksi Paving, Genting, Kanstin, Bata Ringan</p>
                            <!-- <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p> -->
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/services/services3.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Beton Pra Cetak</h3>
                            <p>Produksi Tiang Pancang, U-Ditch, Panel, Sheet Pile</p>
                        </div>
                    </div>
                </div>  

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/services/services4.png">
                            <!-- <img class="img-responsive" src="<?php echo base_url();?>public/images/services/imageedit_13_4882783968.png"> -->
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Bahan Galian</h3>
                            <p>Produksi Batu Pecah</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/services/services5.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Sewa Concrete Pump</h3>
                            <p>Jasa Sewa Pompa, Jasa Angkut Precast</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo base_url();?>public/images/services/services4.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Addmixture</h3>
                            <p>Produksi Additive/Napthoplast</p>
                        </div>
                    </div>
                </div>                                                
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

 <section id="recent-works" class="shortcode-item">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Products</h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/tm.png" alt="">
                        <!-- <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/item1.png" alt=""> -->
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Readymix</a> </h3>
                                <p>Readymix</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/tm.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <!-- <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a> -->
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/uditch.png" alt="">
                        <!-- <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/item2.png" alt=""> -->
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">U-Ditch</a></h3>
                                <p>U-Ditch</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/uditch.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <!-- <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a> -->
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/coveru.png" alt="">
                        <!-- <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/item3.png" alt="">                         -->
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Cover U-Ditch </a></h3>
                                <p>Cover U-Ditch</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/coveru.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <!-- <a class="preview" href="images/portfolio/full/GOR Gresik.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a> -->
                                <!-- <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                 -->
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/crusher.png" alt="">
                        <!-- <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/item4.png" alt=""> -->
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Batu Pecah </a></h3>
                                <p>Batu Pecah</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/crusher.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                                <!-- <a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a> -->
                            </div> 
                        </div>
                    </div>
                </div>   
                
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/kanstin.png" alt="">
                        <!-- <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/item5.png" alt=""> -->
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Kanstin</a></h3>
                                <p>Kanstin</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/kanstin.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                                <!-- <a class="preview" href="images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a> -->
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/kanstinb.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Kanstin </a></h3>
                                <p>Kanstin</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/kanstinb.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                                <!-- <a class="preview" href="images/portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a> -->
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/PAV MERAH.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Paving </a></h3>
                                <p>Paving</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/PAV MERAH.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                                <!-- <a class="preview" href="images/portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a> -->
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/tiangpancang.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Tiang Pancang </a></h3>
                                <p>Tiang Pancang</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/tiangpancang.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                                <!-- <a class="preview" href="images/portfolio/full/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a> -->
                            </div> 
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section><!--/#portfolio-->

    <section id="about-us">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>News</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
                        
            <div id="about-slider">
                <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                    
                    <ol class="carousel-indicators visible-xs">
                        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-slider" data-slide-to="1"></li>
                        <li data-target="#carousel-slider" data-slide-to="2"></li>
                        <li data-target="#carousel-slider" data-slide-to="3"></li>
                    </ol>

<!--                     <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?php echo base_url()?>public/images/portfolio/recent/tiangpancang.png" class="img-responsive" alt=""> 
                       </div>
                       <div class="item">
                            <img src="<?php echo base_url()?>public/images/portfolio/recent/tiangpancang.png" class="img-responsive" alt=""> 
                       </div> 
                       <div class="item">
                            <img src="<?php echo base_url()?>public/images/portfolio/recent/tiangpancang.png" class="img-responsive" alt=""> 
                       </div> 
                    </div> -->

                    <div class="row clearfix">
                    <div class="carousel-inner"> 
                        <div class="item active">                       
                        <div class="col-md-6 col-sm-6"> 
                            <!-- <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms"> -->
                                <div class="media">
                                    <div class="pull-left">
                                        <a href="#"><img class="media-object" src="<?php echo base_url()?>public/images/halalbihalal.jpg" alt=""></a>
                                    </div>
                                    <div class="media-body">
                                        <!-- <h4>Tes1</h4> -->
                                        <!-- <h5>Founder and CEO</h5> -->
     <!--                                    <ul class="tag clearfix">
                                            <li class="btn"><a href="#">Web</a></li>
                                            <li class="btn"><a href="#">Ui</a></li>
                                            <li class="btn"><a href="#">Ux</a></li>
                                            <li class="btn"><a href="#">Photoshop</a></li>
                                        </ul> -->
                                        
<!--                                         <ul class="social_icons">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul> -->
                                    </div>
                                </div>
                                <p>Jajaran Direksi, Kepala Divisi dan Kepala Bagian PT.Varia Usaha Beton dalam rangka acara Halal bi Halal 1438 H di halaman depan kantor PT. Varia Usaha Beton.<a href="<?php echo base_url()?>news">Baca Selengkapnya</a></p>
                            <!-- </div> -->
                        </div>
                        </div>
                        
                        <div class="item">
                            <div class="col-md-6 col-sm-6"> 
                                <div class="media">
                                    <div class="pull-left">
                                        <a href="#"><img class="media-object" src="<?php echo base_url()?>public/images/ultah.jpg" alt=""></a>
                                    </div>
                                    <div class="media-body">
                                    </div>
                                </div>
                                <p>Acara serah terima penghargaan kepada karyawan dengan masa kerja 20,25,30 dan 35 tahun pada acara HUT ke-26 Tahun PT.Varia Usaha Beton.<a href="<?php echo base_url()?>news">Baca Selengkapnya</a></p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-md-6 col-sm-6"> 
                                <div class="media">
                                    <div class="pull-left">
                                        <a href="#"><img class="media-object" src="<?php echo base_url()?>public/images/newface.jpg" alt=""></a>
                                    </div>
                                    <div class="media-body">
                                    </div>
                                </div>
                                <p>View Lanscape kantor baru PT. Varia Usaha Beton.<a href="<?php echo base_url()?>news">Baca Selengkapnya</a></p>
                            </div>
                        </div>

                        <!-- <div class="item">                       
                        <div class="col-md-4 col-sm-6"> 
                                <div class="media">
                                    <div class="pull-left">
                                        <a href="#"><img class="media-object" src="<?php echo base_url()?>public/images/man3.jpg" alt=""></a>
                                    </div>
                                    <div class="media-body">
                                        <h4>Tes3</h4>
                                    </div>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                        </div>
                        
                        <div class="item">
                        <div class="col-md-4 col-sm-6"> 
                                <div class="media">
                                    <div class="pull-left">
                                        <a href="#"><img class="media-object" src="<?php echo base_url()?>public/images/man4.jpg" alt=""></a>
                                    </div>
                                    <div class="media-body">
                                        <h4>Tes4</h4>
                                    </div>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                        </div>    -->                     

                    </div>                     
                    </div>                     
                    
                    <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                        <i class="fa fa-angle-left"></i> 
                    </a>
                    
                    <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
                        <i class="fa fa-angle-right"></i> 
                    </a>
                </div>
            </div>
            
            
            <!-- Our Skill -->
           <!--  <div class="skill-wrap clearfix">
            
                <div class="center wow fadeInDown">
                    <h2>Our Skill</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
                
                <div class="row">
        
                    <div class="col-sm-3">
                        <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="joomla-skill">                                   
                                <p><em>85%</em></p>
                                <p>Joomla</p>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-sm-3">
                        <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="html-skill">                                  
                                <p><em>95%</em></p>
                                <p>HTML</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-3">
                        <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                            <div class="css-skill">                                    
                                <p><em>80%</em></p>
                                <p>CSS</p>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-sm-3">
                        <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
                            <div class="wp-skill">
                                <p><em>90%</em></p>
                                <p>Wordpress</p>                                     
                            </div>
                        </div>
                    </div>
                    
                </div>
    
            </div> -->
            

            <!-- our-team -->
            <!-- <div class="team"> -->
<!--                 <div class="center wow fadeInDown">
                    <h2>Team of Corlate</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div> -->

                <!-- <div class="row clearfix">
                    <div class="col-md-4 col-sm-6"> 
                        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="images/man1.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4>Jhon Doe</h4>
                                    <h5>Founder and CEO</h5>
                                    <ul class="tag clearfix">
                                        <li class="btn"><a href="#">Web</a></li>
                                        <li class="btn"><a href="#">Ui</a></li>
                                        <li class="btn"><a href="#">Ux</a></li>
                                        <li class="btn"><a href="#">Photoshop</a></li>
                                    </ul>
                                    
                                    <ul class="social_icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-4 col-sm-6 col-md-offset-2"> 
                        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="images/man2.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4>Jhon Doe</h4>
                                    <h5>Founder and CEO</h5>
                                    <ul class="tag clearfix">
                                        <li class="btn"><a href="#">Web</a></li>
                                        <li class="btn"><a href="#">Ui</a></li>
                                        <li class="btn"><a href="#">Ux</a></li>
                                        <li class="btn"><a href="#">Photoshop</a></li>
                                    </ul>
                                    <ul class="social_icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div>
                </div>  -->
                <!-- <div class="row team-bar">
                    <div class="first-one-arrow hidden-xs">
                        <hr>
                    </div>
                    <div class="first-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-up"></i>
                    </div>
                    <div class="second-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="third-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-up"></i>
                    </div>
                    <div class="fourth-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-down"></i>
                    </div>
                </div>  -->

                <!-- <div class="row clearfix">   
                    <div class="col-md-4 col-sm-6 col-md-offset-2"> 
                        <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="images/man3.jpg" alt=""></a>
                                </div>

                                <div class="media-body">
                                    <h4>Jhon Doe</h4>
                                    <h5>Founder and CEO</h5>
                                    <ul class="tag clearfix">
                                        <li class="btn"><a href="#">Web</a></li>
                                        <li class="btn"><a href="#">Ui</a></li>
                                        <li class="btn"><a href="#">Ux</a></li>
                                        <li class="btn"><a href="#">Photoshop</a></li>
                                    </ul>
                                    <ul class="social_icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-md-offset-2">
                        <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="images/man4.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4>Jhon Doe</h4>
                                    <h5>Founder and CEO</h5>
                                    <ul class="tag clearfix">
                                        <li class="btn"><a href="#">Web</a></li>
                                        <li class="btn"><a href="#">Ui</a></li>
                                        <li class="btn"><a href="#">Ux</a></li>
                                        <li class="btn"><a href="#">Photoshop</a></li>
                                    </ul>
                                    <ul class="social_icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div>
                </div> -->
            <!-- </div> -->
        </div>
    </section>

<!--     <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Product</h2>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-6 col-sm-9 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>Beton Siap Pakai</h2>
                            <h3 style="text-align:justify">Perusahaan memiliki pengalaman yang cukup banyak dibidang penyediaan Beton Siap Pakai, antara lain dalam pembangunan pabrik, gedung bertingkat maupun infrastruktur seperti jalan, pelabuhan yang memerlukan kontinuitas suplai dan stabilitas mutu.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-9 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Beton PreCast</h2>
                            <h3 style="text-align:justify">Pengembangan usaha beton Precast dilakukan di Gresik dengan menempati areal seluas 8 hektar. Perusahaan mempunyai fasilitas Produksi Tiang Pancang. Produksi dimulai bulan Juli 1997 dan secara bertahap akan terus ditingkatkan kapasitasnya sejalan dengan perkembangan pasar.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-9 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>Beton Masonry</h2>
                            <h3 style="text-align:justify">Produk Beton Ringan yang dihasilkan yaitu: Genteng. Paving. Batako. Produk-produk yang terdiri dari berbagai tipe dan ukuran tersebut telah dipakai secara luas di Jawa Timur, Jawa Tengah dan Sulawesi Selatan, untuk keperluan real estat dan proyek-proyek.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-9 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cogs"></i>
                            <h2>Bahan Galian</h2>
                            <h3 style="text-align:justify">Produk ini sebagian besar diserap para kontraktor dan produsen lainnya untuk mendukung kegiatan proyek sarana / prasarana dan sebagian untuk kebutuhan sendiri.</h3>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section> -->
