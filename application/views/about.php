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
        	<div class='col-sm-3'><img src="<?php echo base_url();?>public/images/logo-varia-usaha-beton.png" alt=""></div>
			<div class='col-sm-9'>
				<div class="center wow fadeInDown">
					<h2>About <font color='#c52d2f'>Varia Usaha Beton</font></h2>
					<p class="lead" style="text-align:justify"> <font face="BPreplay">PT. Varia Usaha Beton adalah salah satu anak perusahaan PT. Semen Indonesia Beton yang memproduksi berbagai macam produk beton seperti Beton Siap pakai, Beton Pra Cetak, Beton Mansory, Crushed Stone, Jasa Kontruksi, dan Jasa Sewa Peralatan. PT Varia Usaha Beton didirikan tahun 1991 berdasarkan Akta notaris Suyati Subadi, SH No 18/1991 dengan akta perubahan akta notaris Dr. Slamet Wahyudi, SH, Mkh No 102/31 Desember 2015.</font><p>

					<p class="lead" style="text-align:justify"> <font face="BPreplay">Seiring dengan bergesernya system ekonomi internasional dengan adanya perdagangan bebas AFTA 2015 akan menimbulkan dampak besar bagi pelaku pasar di Indonesia, tidak terkecuali PT. VUB yang telah berkontribusi banyak atas pembangunan ekonomi, khususnya pada pembangunan insfrastruktur dan properti.</font><p>	

					<p class="lead" style="text-align:justify"> <font face="BPreplay">Kesiapan PT. VUB dalam menyongsong MEA (Masyarakat Ekonomi Asean) ini sudah dilakukan jauh sebelumnya; berbagai palatihan dalam peningkatan kualitas Sumbar Daya Manusia, baik yang dilakukan oleh internal maupun pihak ketiga secara periodik akan mampu bersaing dengan sumber daya manusia negara asean lainnya.</font><p>	

					<p class="lead" style="text-align:justify"> <font face="BPreplay">Selain itu, pencapaian dan penerapan sistem manajemen internasional ISO 9001, OHSAS 18001, ISO 14001 dan Peraturan Perundangan SMK3 Kepmen 05 serta kelengkapan mesin dan alat-alat yang sesuai standard dan serba otomatis juga merupakan kekuatan perusahaan dalam bersaing di bisnis utama kami, yaitu penyediaan material beton siap pakai dan produk-produk lainnya, seperti beton pracetak, beton prategang, beton masonry, bahan galian dll.</font><p>

					<p class="lead" style="text-align:justify"> <font face="BPreplay">Pengalaman kami sejak tahun 1991 dalam mengutamakan kepuasan dan kepercayaan pelanggan selama ini turut membuat PT. VUB menjadi produsen beton siap pakai & agregat pilihan utama pelanggan di pasar nasional sesuai dengan visi perusahaan.</font><p>


					<p class="lead" style="text-align:justify"> <font face="BPreplay">Sebagai perusahaan yang bergerak dalam bidang industri hilir produk semen, Perseroan telah berpartisipasi sebagai penyedia produk beton dalam berbagai proyek konstruksi sejak 1991, dengan mensuplai produk ke berbagai proyek berskala besar di seluruh tanah air. Saat ini Perseroan telah mengembangkan sayap bisnisnya di Jawa Timur, Jawa Tengah, Sulawesi Selatan, Sulawesi Utara, Nusa Tenggara Barat, dan Kalimantan Timur dengan jumlah Plant yang dikelola sebanyak 34 (tiga puluh empat), terdiri dari 10 (sepuluh) fix Plant BSP, 9 (sembilan) Plant BSP proyek, 4 (empat) Plant BPC, 3 (tiga) Plant BM, dan 8 (delapan) Plant BG.</p>



					<!-- <p class="lead" style="text-align:justify">Sejak 1988, bisnis utama kami menyediakan beton dan bahan bangunan kebutuhan di Jawa Timur. Selain beton siap pakai, kami memperluas layanan menyediakan beton pracetak seperti pile, girder, collar, saddle, dll Kami juga menyediakan berbagai produk beton masonry seperti tile, hollow block dan paving block. Bisnis utama kami juga meliputi pasokan batu pecah dan pasir dari tambang kami sendiri. Sebagai pendukung bisnis utama, kami menawarkan beberapa layanan seperti pergudangan semen, pompa beton dan pengerjaannya.</p>					 -->
				</div>
				
				<!-- about us slider -->
				<div id="about-slider">
					<div id="carousel-slider" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
					  	<ol class="carousel-indicators visible-xs">
						    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-slider" data-slide-to="1"></li>
						    <li data-target="#carousel-slider" data-slide-to="2"></li>
					  	</ol>

<!-- 						<div class="carousel-inner">
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
					</div> <!--/#carousel-slider-->
				</div><!--/#about-slider-->
			</div>
			
			<!-- Our Skill -->
			<!-- <div class="skill-wrap clearfix">
			
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
            <!--/.our-skill-->
			

			<!-- our-team -->
			<div class="team">
				<div class="center wow fadeInDown">				
					<h2>Board of <font color='#c52d2f'>Commisioner</font></h2>
					<!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
				</div>

				<div class="row clearfix">
					<div class="col-md-4 col-sm-6">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="<?php echo base_url();?>public/images/kaplant/Rahmat-Hidayat.jpeg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>RAHMAT HIDAYAT</h4>
									<h5><b>Komisaris Utama</b></h5>
									<!-- <ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Ui</a></li>
										<li class="btn"><a href="#">Ux</a></li>
										<li class="btn"><a href="#">Photoshop</a></li>
									</ul> -->
									
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="JOKO SUPRIYA#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p>Rahmat Hidayat, lahir di Padang, 07 Agustus 1982. Diangkat menjadi Komisaris Utama PT Varia Usaha Beton pada Juni 2021. Beliau juga menjabat sebagai Direktur Keuangan PT. Semen Indonesia Beton pada Juni 2019. Beliau merupakan lulusan S1 Akuntansi STIE Perbanas Jakarta.</p>
						</div>
					</div><!--/.col-lg-4 -->
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="<?php echo base_url();?>public/images/kaplant/joko-supriyadi.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>JOKO SUPRIYADI</h4>
									<h5><b>Komisaris</b></h5>
									<!-- <ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Ui</a></li>
										<li class="btn"><a href="#">Ux</a></li>
										<li class="btn"><a href="#">Photoshop</a></li>
									</ul> -->
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p>Joko Supriyadi, lahir di Pacitan, 31 Agustus 1976, diangkat sebagai Komisaris PT. Varia Usaha Beton pada Januari 2020. Beliau juga menjabat sebagai Direktur Keuangan PT. Semen Indonesia Logistik pada 4 November 2019. Beliau merupakan lulusan S1 Ekonomi Akuntansi Universitas Muhammadiyah Gresik, Certified Management Accountants – Institute of Management Accountants.</p>
						</div>
					</div><!--/.col-lg-4 -->					
				</div> <!--/.row -->
				<div class="row team-bar">
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
				</div> <!--skill_border-->       

				<div class="row clearfix">   
					<div class="center wow fadeInDown">
						<h2>Board of <font color='#c52d2f'>Director</font></h2>
						<!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
					</div>
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="<?php echo base_url();?>public/images/kaplant/wahyu-nugroho.jpg" alt=""></a>
								</div>

								<div class="media-body">
									<h4>WAHYU NUGROHO</h4>
									<h5><b>Direktur Utama</b></h5>
									<!-- <ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Ui</a></li>
										<li class="btn"><a href="#">Ux</a></li>
										<li class="btn"><a href="#">Photoshop</a></li>
									</ul> -->
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p>Wahyu Nugroho, lahir di Tulungagung, 18 Januari 1980. Diangkat menjadi Direktur Utama PT. Varia Usaha Beton pada November 2020 berdasarkan keputusan para pemegang saham. Beliau menempuh pendidikan S2 Magister Manajemen di Universitas Airlangga (UNAIR) Surabaya, dan S1 Teknik Fisika di Institut Teknologi Sepuluh Nopember (ITS) Surabaya.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-md-offset-2">
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="<?php echo base_url();?>public/images/kaplant/zulhamri-piliang.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>ZULHAMRI PILIANG</h4>
									<h5><b>Direktur Operasional</b></h5>
									<!-- <ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Ui</a></li>
										<li class="btn"><a href="#">Ux</a></li>
										<li class="btn"><a href="#">Photoshop</a></li>
									</ul> -->
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p>Zulhamri Piliang, diangkat menjadi Direktur PT. Varia Usaha Beton pada November 2021 berdasarkan keputusan para pemegang saham. Beliau menempuh pendidikan S2 Magister Manajemen di Universitas Pancasila Jakarta, dan S1 Teknik Sipil di Universitas Andalas Padang.</p>
						</div>
					</div>
				</div>	<!--/.row-->

			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->