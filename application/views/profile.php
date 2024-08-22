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

<section id="about-us">
        <div class="container">
        	<div class='row'>
	        	<div class='col-sm-3'><img src="<?php echo base_url();?>public/images/logo-varia-usaha-beton.png" alt=""></div>
				<div class='col-sm-9'>
					<div class="center wow fadeInDown">
						<h2>History <font color='#c52d2f'>Varia Usaha Beton</font></h2>
						<!-- <p class="lead" style="text-align:justify">Sejak 1988, bisnis utama kami menyediakan beton dan bahan bangunan kebutuhan di Jawa Timur. Selain beton siap pakai, kami memperluas layanan menyediakan beton pracetak seperti pile, girder, collar, saddle, dll Kami juga menyediakan berbagai produk beton masonry seperti tile, hollow block dan paving block. Bisnis utama kami juga meliputi pasokan batu pecah dan pasir dari tambang kami sendiri. Sebagai pendukung bisnis utama, kami menawarkan beberapa layanan seperti pergudangan semen, pompa beton dan pengerjaannya.</p> -->
            <p class="lead" style="text-align:justify">PT. Varia Usaha Beton berdiri berdasarkan Akte Notaris Suyati Subandi SH No.18 Tahun 1991, dengan pemegang saham PT. Varia Usaha dan Yayasan Dana Pensiun Karyawan PT. Semen Gresik. Adapun perkembangan perusahaan adalah sebagai berikut :</p>
            <p class="lead" style="text-align:justify"><b>1989</b><br>
              PT. Semen Gresik (Persero) menyerahkan Unit Usah Beton Siap Pakai, Beton Masonry, dan Bahan Galian kepada salah satu anak perusahaan, PT. Varia Usaha.
            </p>
            <p class="lead" style="text-align:justify"><b>1991</b><br>
              PT. Varia Usaha memisahkan Unit Beton Siap Pakai dan Unit Usaha Tegel menjadi Perusahaan yang berdiri sendiri yaitu PT. Varia Usaha Beton yang berdasarkan Akte Notari Suyati Subandi SH No. 18/1991.
            </p>            
            <p class="lead" style="text-align:justify"><b>1992</b><br>
              PT. Varia Usaha menyerahkan pengelolaan Unit Usaha Pemecah Batu Pandaan untuk dikelola PT. Varia Usaha Beton.
            </p>
            <p class="lead" style="text-align:justify"><b>1994</b><br>
              * Perluasan usaha pertama Plant Beton Masonry di Ujung Pandang.<br>
              * Mulai Mengadakan perluasan Plant Beton Siap Pakai di Semarang.
            </p>
            <p class="lead" style="text-align:justify"><b>1997</b><br>
              Perusahaan membuka unit baru, yaitu Unit Plant Beton Pra Cetak/ Pra Tegang yang meliputi tiang pancang, girder, beam, slab, sleeper, tetrapod dan lain-lain di Gresik, Jawa Timur.
            </p>                                                
            <p class="lead" style="text-align:justify"><b>2001</b><br>
              Pengembangan Plant Beton Siap Pakai di Purwokerto.
            </p>
            <p class="lead" style="text-align:justify"><b>2003</b><br>
              Mengadakan perluasan Plant Beton Siap Pakai di Solo.
            </p>            
            <p class="lead" style="text-align:justify"><b>2007</b><br>
              Mengadakan perluasan Plant Beton Siap Pakai di Mataram, Nusa Tenggara Barat.
            </p>                        
            <p class="lead" style="text-align:justify"><b>2012</b><br>
              * Pengembangan Plant Beton Siap Pakai di Educity, Surabaya.<br>
              * Pengembangan Plant Bahan Galian di Mataram, Nusa Tenggara Barat.
            </p>                                    
            <p class="lead" style="text-align:justify"><b>2013</b><br>
              * Pengembangan Plant Beton Masonry di Pandaan, Jawa Timur.<br>
              * Pengembangan Plant Beton Siap Pakai di Ungaran dan Malang.<br>
              * Pengembangan Plant Bahan Galian di Batang Pamotan.
            </p>                                                
            <p class="lead" style="text-align:justify"><b>2014</b><br>
              * Pengembangan Plant Beton Siap Pakai di Makassar, Yogyakarta, Jember.<br>
              * Pengembangan Plant Beton Pra Cetak di Semarang.<br>
              * Pengembangan Plant Bahan Galian di Pasrepan dan Boyolali.
            </p>                                                            
					</div>
					
					<!-- about us slider -->
					<!-- <div id="about-slider">
						<div id="carousel-slider" class="carousel slide" data-ride="carousel"> -->
							<!-- Indicators -->
						  	<!-- <ol class="carousel-indicators visible-xs">
							    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
							    <li data-target="#carousel-slider" data-slide-to="1"></li>
							    <li data-target="#carousel-slider" data-slide-to="2"></li>
						  	</ol>

							<div class="carousel-inner">
								<div class="item active">
									<img src="images/slider_one.jpg" class="img-responsive" alt=""> 
							   </div>
							   <div class="item">
									<img src="images/slider_one.jpg" class="img-responsive" alt=""> 
							   </div> 
							   <div class="item">
									<img src="images/slider_one.jpg" class="img-responsive" alt=""> 
							   </div> 
							</div> -->
							<!-- 
							<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
								<i class="fa fa-angle-left"></i> 
							</a>
							
							<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
								<i class="fa fa-angle-right"></i> 
							</a> -->
						<!-- </div> --> <!--/#carousel-slider-->
					<!-- </div> --><!--/#about-slider-->
				</div>
			</div>

			<div class='row'>
				<div class="get-started center wow fadeInDown col-sm-6 visi">
					<br><br>
	                <h2><i>"Menjadi Perusahaan Beton Pilihan Utama Pelanggan di Pasar Nasional"</i></h2>
	                <div class="request">
	                    <h4><a href="#"> Visi VUB </a></h4>
	                </div>
	            </div><!--/.get-started-->

	            <div class="get-started center wow fadeInDown col-sm-6 misi">
	                <h3 style="text-align:justify"><i>Memproduksi Dan Menjual Beton Dan aggregates Yang Memenuhi Persyaratan Pelanggan (Tepat Mutu, Tepat Waktu Dan Tepat Jumlah)</i></h3>
	                <h3 style="text-align:justify"><i>Menghasilkan Laba Yang Mampu Mendukung Pertumbuhan Perusahaan Secara Berkelanjutan Dan Kesejahteraan Seluruh Pemangku Kepentingan</i></h3>
	                <h3 style="text-align:justify"><i>Menjalankan Proses Bisnis Yang Prima Dengan Di Dukung Oleh Karyawan Yang Profesional, Sesuai Dengan Perundangan Dan Peraturan Yang Berlaku</i></h3>
	                <!-- <h3>Menjadi Perusahaan Beton Pilihan Utama Pelanggan di Pasar Nasional</h3> -->
	                <div class="request">
	                    <h4><a href="#"> Misi VUB </a></h4>
	                </div>
	            </div><!--/.get-started-->
	        </div>

			
		</div><!--/.container-->
    </section><!--/about-us-->

    <section id="content">
        <div class="container">
            <div class="row">
            	<!-- <div class='col-sm-12'> -->
            		<div class="center wow fadeInDown"><h2>Corporate <font color='#c52d2f'>Commitment</font></h2></div>
            	
            	<div class="col-xs-12 col-sm-4">
                    <!-- <h2>Accordion</h2> -->
                    <div class="accordion">
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  VISIONER
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse">
                                <div class="panel-body">  
                                    <p >Berwawasan atau berpikiran jauh kedepan dalam segala hal. Termasuk mengikuti perkembangan yang akan terjadi mendatang.</p>   
                                </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  ULET
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <p>Dalam melaksanakan sesuatu tidak mudah putus asa dan selalu siap untuk menyelesaikannya.</p>   
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  BERANI
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <p>Tidak segan untuk berkata dan bertindak berdasarkan kebenaran kepada siapapun.</p>   
                              </div>
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <!-- <h2>Accordion</h2> -->
                    <div class="accordion">
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  KOMPETEN
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseFour1" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
<!--                                         <div class="pull-left">
                                            <img class="img-responsive" src="images/accordion1.png">
                                        </div> -->
                                        <div class="media-body">
                                             <!-- <h4>Adipisicing elit</h4> -->
                                             <p>Mampu melaksanakan tugas yang menjadi tanggung jawabnya dengan baik dengan hasil yang sesuai dengan target yang sudah ditetapkan.</p>   
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFive1">
                                  INTEGRITAS
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFive1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <p>Penuh dedikasi, kejujuran dan bersikap sebenarnya, bertindak menurut etika menjaga kehormatan dan nama baik serta menerapkan kebenaran.</p>   
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseSix1">
                                  TANGGUNG JAWAB
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseSix1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <p>Berani bertanggung jawab terhadap segala keputusan maupun hasil kerja yang dibebankan kepadanya.</p>   
                              </div>
                            </div>
                          </div>

                           <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseSeven1">
                                  ADIL
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseSeven1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <p>Memperlakukan semua teman kerja baik itu bawahan, teman sejawat maupun atasan dengan tidak membeda-bedakannya.</p>   
                              </div>
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <!-- <h2>Accordion</h2> -->
                    <div class="accordion">
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseEight1">
                                  OPTIMIS
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseEight1" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
<!--                                         <div class="pull-left">
                                            <img class="img-responsive" src="images/accordion1.png">
                                        </div> -->
                                        <div class="media-body">
                                             <!-- <h4>Adipisicing elit</h4> -->
                                             <p>Selalu berpikiran dan berprilaku positif dalam mencapai sesuatu yang sudah direncanakan.</p>   
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseNine1">
                                  KERJASAMA
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseNine1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <p>Sikap saling membantu, mendukung dan memiliki sifat kebersamaan dalam melaksanakan tugas dan kewajibannya.</p>   
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTen1">
                                  ETIKA
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTen1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <p>Mengetahui, memahami dan melaksanakan tugas serta berperilaku sehari-hari sesuai dengan tata krama yang sudah disepakati dalam peraturan perusahaan maupun secara umum.</p>   
                              </div>
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->

    <section id="content">
        <div class="container">
            <div class="row">             
                <div class="center wow fadeInDown"><h2>Peta <font color='#c52d2f'>Bisnis</font></h2></div>
            </div>

            <div class="media">
                <div class="pull-left">
                    <a href="#"><img class="media-object" src="<?php echo base_url();?>public/images/PETA-BISNIS.png" alt=""></a>
                </div>
            </div>            
        </div>

<!--         <div class="col-sm-12 plan price-one wow fadeInDown">
            <ul>
                <div class="media">
                    <div class="pull-left">
                        <a href="#"><img class="media-object" src="<?php echo base_url();?>public/images/PETA-BISNIS.png" alt=""></a>
                    </div>
                </div>
            </ul>
        </div> -->

    </section>    

