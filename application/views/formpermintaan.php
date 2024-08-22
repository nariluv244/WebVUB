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
        	
			<div class='col-sm-12'>
				<div class="center wow fadeInDown">
					<p class="lead" style="text-align:justify"> <font face="BPreplay">Produk PT. Varia Usaha Beton sangat bervariasi. Oleh karena itu, Kami tidak menyediakan “Price List”. Namun pelanggan dapat meminta harga bila sudah menentukan spesifikasi, jumlah kebutuhan, dan menginformasikan lokasi proyek tersebut. Isilah data – data di dalam form berikut ini: Form Permintaan Penawaran
						<a href="https://sites.google.com/site/sites/system/errors/WebspaceNotFound?path=%2Fvariabetonpusat%2Fhome%2FFORM-REQUEST-VUB.xls">Form Permintaan Penawaran Harga</a> 
					</font><p>

					<p class="lead" style="text-align:justify"> <font face="BPreplay">Harga tersebut sesuai kebutuhan Proyek dan di-email ke : 
						<a href = "marketing@variabeton.com">marketing@variabeton.com</a> atau bila pelanggan membutuhkan respon yang lebih cepat harap menghubungi marketing Kami via telepon di : 031-99841300</font><p>	


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
			
				</div>	<!--/.row-->

			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->