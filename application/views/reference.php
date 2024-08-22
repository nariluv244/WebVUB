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

 <section id="recent-works" class="shortcode-item">
        <div class="container">
            <h2>References Projects</h2>
            <div class="row">
<!--                 <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/PLTU Jeneponto.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">PLTU</a> </h3>
                                <p>PLTU Jeneponto</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/PLTU Jeneponto.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/GOR Jember.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">GOR Jember</a></h3>
                                <p>Jember Sport Garden</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/GOR Jember.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/GOR Gresik.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">GOR Gresik </a></h3>
                                <p>Gelora Joko Samudro</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/GOR Gresik.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/Ijen Suites Hotel.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Hotel </a></h3>
                                <p>Ijen Suite Malang</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/Ijen Suites Hotel.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div>    -->
<!-- ===================================                 -->
<!--                 <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/JEMBER ICON.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Apartemen</a></h3>
                                <p>Jember Icon</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/JEMBER ICON.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div>    -->
<!-- ===================================                 -->
<!--                 <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/imageedit_1_2215712793.gif" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Jalan Tol </a></h3>
                                <p>Proyek Jalan Tol</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/proyek-referensi--AMERADA-HESS-9-INDONESIA-PANGKAH).gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div>                 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/dbl.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Arena Olahraga </a></h3>
                                <p>DBL</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/dbl.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/GOR Jember baru.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Stadion Jember </a></h3>
                                <p>Stadion Jember Sport Garden (JSG)</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/GOR Jember baru.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/tol.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Jalan Tol </a></h3>
                                <p>Proyek Jalan Tol</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/tol.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div>  -->

<!-- ========================================================baris 1 -->
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/AMERADA-HESS-9-INDONESIA-PANGKAH)-mini.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Gedung </a></h3>
                                <p>AMERADA HESS 9 INDONESIA PANGKAH</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/AMERADA-HESS-9-INDONESIA-PANGKAH)-full.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/BREAK-WATER-PANTAI-PUGER-JEMBER mini.gif" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Fasilitas </a></h3>
                                <p>BREAK WATER PANTAI PUGER JEMBER</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/BREAK-WATER-PANTAI-PUGER-JEMBER full.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/DBL-ARENA---SURABAYA-mini.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Gedung </a></h3>
                                <p>DBL ARENA SURABAYA</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/DBL-ARENA---SURABAYA-full.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/GEDUNG-REKTORAT-UNIVERSITAS-BRAWIJAYA-MALANG-mini.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Gedung </a></h3>
                                <p>GEDUNG REKTORAT UNIVERSITAS BRAWIJAYA MALANG</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/GEDUNG-REKTORAT-UNIVERSITAS-BRAWIJAYA-MALANG-full.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div>                 

<!-- =======================================================baris 2 -->
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/GELANGGANG-OLAH-RAGA-JEMBER-mini.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Gedung </a></h3>
                                <p>GELANGGANG OLAH RAGA JEMBER</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/GELANGGANG-OLAH-RAGA-JEMBER-full.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/HOLLAND-PARK-CONDOTEL-PANDERMAN-HILL,-BATU-MALANG-mini.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Gedung </a></h3>
                                <p>HOLLAND PARK CONDOTEL PANDERMAN HILL,BATU MALANG</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/HOLLAND-PARK-CONDOTEL-PANDERMAN-HILL,-BATU-MALANG-full.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/IJEN-SUITES-RESORT-&-CONVENTION-MALANG-mini.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Gedung </a></h3>
                                <p>IJEN SUITES RESORT & CONVENTION MALANG</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/IJEN-SUITES-RESORT-&-CONVENTION-MALANG-full.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/MANDALIKA-KUTA-BEACH-LOMBOK-mini.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Gedung </a></h3>
                                <p>MANDALIKA KUTA BEACH LOMBOK</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/MANDALIKA-KUTA-BEACH-LOMBOK-full.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div>    

<!-- =======================================================baris 3 -->
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/MENARA-SUARA-MERDEKA---SEMARANG-mini.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Gedung </a></h3>
                                <p>MENARA SUARA MERDEKA SEMARANG</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/MENARA-SUARA-MERDEKA---SEMARANG-full.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/PABRIK-SEMEN-GRESIK-DI-REMBANG-mini.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Gedung </a></h3>
                                <p>PABRIK SEMEN GRESIK DI REMBANG</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/PABRIK-SEMEN-GRESIK-DI-REMBANG-full.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/PLTU-PACITAN---JAWA-TIMUR-mini.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Gedung </a></h3>
                                <p>PLTU PACITAN JAWA TIMUR</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/PLTU-PACITAN---JAWA-TIMUR-full.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/PLTU-REMBANG-mini.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Gedung </a></h3>
                                <p>PLTU REMBANG</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/PLTU-REMBANG-full.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div>    

<!-- =======================================================baris 4 -->
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/PRECAST-HESS---PETRONAS-mini.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Gedung </a></h3>
                                <p>PRECAST HESS PETRONAS</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/PRECAST-HESS---PETRONAS-full.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/PT-HIT-POLYTRON-mini.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Gedung </a></h3>
                                <p>PT HIT POLYTRON</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/PT-HIT-POLYTRON-full.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/STADION-GAJAYANA-MALANG-mini.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Gedung </a></h3>
                                <p>STADION GAJAYANA MALANG</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/STADION-GAJAYANA-MALANG-full.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/TOL-SEMARANG---SOLO-SEKSI-UNGARAN---BAWEN-mini.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Jalan Tol </a></h3>
                                <p>TOL SEMARANG-SOLO SEKSI UNGARAN-BAWEN</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/TOL-SEMARANG---SOLO-SEKSI-UNGARAN---BAWEN-full.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div>    
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/VIDA-VIEW-APARTMENT-MAKASSAR-mini.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Gedung </a></h3>
                                <p>VIDA VIEW APARTMENT MAKASSAR</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/VIDA-VIEW-APARTMENT-MAKASSAR-full.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div>    
<!--                 <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/web-project-references-mini.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Jalan Tol </a></h3>
                                <p>Proyek Jalan Tol</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/web-project-references-mini.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div>                                     -->

<!--                 <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php echo base_url()?>public/images/portfolio/recent/imageedit_1_2215712793.gif" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Jalan Tol </a></h3>
                                <p>Proyek Jalan Tol</p>
                                <a class="preview" href="<?php echo base_url()?>public/images/portfolio/full/proyek-referensi--AMERADA-HESS-9-INDONESIA-PANGKAH).gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>                                
                            </div> 
                        </div>
                    </div>
                </div>                                                  -->

            </div>
        </div>
    </section><!--/#portfolio-->