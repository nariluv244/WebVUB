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

<section id="blog" class="container">
    <div class="center">
        <h2>Plant <font color='#c52d2f'>Jawa Timur</font></h2>
        <p class="lead">Berikut adalah daftar Plant yang ada di wilayah Jawa Timur, baik Plant Beton Siap Pakai, Beton Masonry, Beton Pra Cetak maupun Bahan Galian</p>
    </div>
    <div class='col-sm-4'>
        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="media">
                <div class="pull-left">
                </div>
                <div class="media-body">
                    <h4>M. Sofyan Hadi</h4>
                    <h5>Kepala Plant <br>BSP Sidoarjo</b></h5>
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
            <p><b>Email:</b> marketing@variabeton.com</p>
            <p><b>Office:</b> 08113523539
            <p><b>Alamat:</b> Lingkar Timur No.33 Gebang, Candi, Pegudangan Bizsta Sidoarjo
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
        </div>
    </div>
    <div class='col-sm-8'>
        <div class="gmap-plant">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmapplant">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=Jl.+Letjend+S.+Parman+38+Waru+Sidoarjo,+Jawa+Timur-Indonesia+&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
                            <p> <a href="https://developer.mozilla.org/en-US/docs/Glossary">
                                Fallback link for browsers that don't support iframes
                            </a> </p>
                            <!-- </iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class='col-sm-4'>
        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="media">
                <div class="pull-left">
                </div>
                <div class="media-body">
                    <h4>Rakhmad Dwi Anugrah Putra</h4>
                    <h5><b>Kepala Plant <br>BSP Bangkalan</b></h5>                    
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
            <p><b>Email:</b> marketing@variabeton.com</p>
            <p><b>Office:</b> 0811352631
            <p><b>Alamat:</b> Area Sawah/Kebun, Petapan, Kec. Labang, Kabupaten Bangkalan, Jawa Timur 69163
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
        </div>
    </div>
    <div class='col-sm-8'>
        <div class="gmap-plant">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmapplant">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=Jl.+Letjend+S.+Parman+38+Waru+Sidoarjo,+Jawa+Timur-Indonesia+&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
                            <p> <a href="https://developer.mozilla.org/en-US/docs/Glossary">
                                Fallback link for browsers that don't support iframes
                            </a> </p>
                            <!-- </iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class='col-sm-4'>
        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="media">
                <div class="pull-left">
                </div>
                <div class="media-body">
                    <h4>Achmad Zainuri</h4>
                    <h5><b>Kepala Plant<br>BSP Gresik</b></h5>
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
            <p><b>Email:</b> marketing@variabeton.com</p>
            <p><b>Office:</b> 0313987178
            <p><b>Alamat:</b> Jl. Mayjend Sungkono, Desa Segoromadu, Gresik, Jawa Timur
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
        </div>
    </div>
    <div class='col-sm-8'>
        <div class="gmap-plant">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmapplant">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=Jl.+Letjend+S.+Parman+38+Waru+Sidoarjo,+Jawa+Timur-Indonesia+&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
                            <p> <a href="https://developer.mozilla.org/en-US/docs/Glossary">
                                Fallback link for browsers that don't support iframes
                            </a> </p>
                            <!-- </iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     

    <div class='col-sm-4'>
        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="media">
                <div class="pull-left">
                </div>
                <div class="media-body">
                    <h4>Nurul Kurniawan</h4>
                    <h5><b>Kepala Plant <br>BPC Gresik</b></h5>
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
            <p><b>Email:</b> marketing@variabeton.com</p>
            <p><b>Office:</b> 0313974719 / 08113538354
            <p><b>Alamat:</b> Jl. Mayjend Sungkono, Desa Segoromadu, Gresik, Jawa Timur
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
        </div>
    </div>
    <div class='col-sm-8'>
        <div class="gmap-plant">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmapplant">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=Jl.+Letjend+S.+Parman+38+Waru+Sidoarjo,+Jawa+Timur-Indonesia+&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
                            <p> <a href="https://developer.mozilla.org/en-US/docs/Glossary">
                                Fallback link for browsers that don't support iframes
                            </a> </p>
                            <!-- </iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class='col-sm-4'>
        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="media">
                <div class="pull-left">
                </div>
                <div class="media-body">
                    <h4>Tajri Nasrulloh Abadi</h4>
                    <h5><b>Kepala Plant <br>BM Gresik</b></h5>
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
            <p><b>Email:</b> marketing@variabeton.com</p>
            <p><b>Office:</b> 0313974718 / 08113538358
            <p><b>Alamat:</b> Jl. Mayjend Sungkono, Desa Segoromadu, Gresik, Jawa Timur            
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
        </div>
    </div>
    <div class='col-sm-8'>
        <div class="gmap-plant">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmapplant">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=Jl.+Letjend+S.+Parman+38+Waru+Sidoarjo,+Jawa+Timur-Indonesia+&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
                            <p> <a href="https://developer.mozilla.org/en-US/docs/Glossary">
                                Fallback link for browsers that don't support iframes
                            </a> </p>
                            <!-- </iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class='col-sm-4'>
        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="media">
                <div class="pull-left">
                </div>
                <div class="media-body">
                    <h4>Sugeng Kusheri</h4>
                    <h5><b>Kepala Plant <br>BSP Tuban</b></h5>
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
            <p><b>Email:</b> marketing@variabeton.com</p>
            <p><b>Office:</b> 08113249771
            <p><b>Alamat:</b> Desa Karangasem, Kec. Jenu, Kab. Tuban 
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
        </div>
    </div>
    <div class='col-sm-8'>
        <div class="gmap-plant">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmapplant">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.2459298411067!2d112.732795!3d-7.472444000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e721335fdf5b%3A0x1b82ae9a94d8a1b3!2sVaria%20Usaha%20Beton%20Plant%20Sidoarjo!5e0!3m2!1sid!2sid!4v1696391666300!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p> <a href="https://developer.mozilla.org/en-US/docs/Glossary">
                                Fallback link for browsers that don't support iframes
                            </a> </p>
                            <!-- </iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class='col-sm-4'>
        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="media">
                <div class="pull-left">
                   
                </div>
                <div class="media-body">
                    <h4>Djoko Budi Santoso</h4>
                    <h5><b>Kepala Plant <br>BSP Malang</b></h5>
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
            <p><b>Email:</b> marketing@variabeton.com</p>
            <p><b>Sales:</b> 08113521964
            <p><b>Alamat:</b> Dusun Watudakon, RT 11/RW 07 Gang 2 Desa Kendalpayak, Kecamatan Pakisaji, Malang, jawa Timur           
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
        </div>
    </div>
    <div class='col-sm-8'>
        <div class="gmap-plant">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmapplant">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31604.798776915977!2d112.628838!3d-8.040125!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6277941879d57%3A0xd0393bdec55ce256!2sBSIP%20ANEKA%20KACANG!5e0!3m2!1sen!2sid!4v1696820075805!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p> <a href="https://developer.mozilla.org/en-US/docs/Glossary">
                                Fallback link for browsers that don't support iframes
                            </a> </p>
                            <!-- </iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>             

    <div class='col-sm-4'>
        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="media">
                <div class="pull-left">
                </div>
                <div class="media-body">
                    <h4>Nur Hidayat</h4>
                    <h5><b>Kepala Plant <br>BM Pandaan</b></h5>
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
            <p><b>Email:</b> marketing@variabeton.com</p>
            <p><b>Office:</b> 08113538335
            <p><b>Alamat:</b> Ds. Sumbersuko, Kec. Gempol, Kab. Pasuruan, Jawa Timur        
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
        </div>
    </div>
    <div class='col-sm-8'>
        <div class="gmap-plant">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmapplant">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1977.299834000809!2d112.669014!3d-7.6184639999999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d91e12cc437d%3A0x3de93a5c174d9ca9!2sVaria%20Usaha%20Beton.%20Cab.%20Pandaan!5e0!3m2!1sid!2sid!4v1696820155891!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p> <a href="https://developer.mozilla.org/en-US/docs/Glossary">
                                Fallback link for browsers that don't support iframes
                            </a> </p>
                            <!-- </iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class='col-sm-4'>
        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="media">
                <div class="pull-left">
                </div>
                <div class="media-body">
                    <h4>Didit Sudarmanto</h4>
                    <h5><b>Kepala Plant <br>BG Pandaan</b></h5>
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
            <p><b>Email:</b> marketing@variabeton.com</p>
            <p><b>Office:</b> 0343632136 / 08113538334
            <p><b>Alamat:</b> Ds. Sumbersuko, Kec. Gempol, Kab. Pasuruan, Jawa Timur
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
        </div>
    </div>
    <div class='col-sm-8'>
        <div class="gmap-plant">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmapplant">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1977.299834000809!2d112.669014!3d-7.6184639999999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d91e12cc437d%3A0x3de93a5c174d9ca9!2sVaria%20Usaha%20Beton.%20Cab.%20Pandaan!5e0!3m2!1sid!2sid!4v1696820155891!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p> <a href="https://developer.mozilla.org/en-US/docs/Glossary">
                                Fallback link for browsers that don't support iframes
                            </a> </p>
                            <!-- </iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class='col-sm-4'>
        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="media">
                <div class="pull-left">
                </div>
                <div class="media-body">
                    <h4>Imam Khoiri</h4>
                    <h5><b>Kepala Plant <br>BG Pasrepan</b></h5>
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
            <p><b>Email:</b> marketing@variabeton.com</p>
            <p><b>Sales:</b> 08113521964
            <p><b>Alamat:</b> Mangguan, Pasrepan, Dusun Mangguan, Mangguan, Pasrepan, Pasuruan, Jawa Timur 67175
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
        </div>
    </div>
    <div class='col-sm-8'>
        <div class="gmap-plant">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmapplant">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3952.9252684167527!2d112.86732!3d-7.797737000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7cce5024c19c7%3A0xd17f4ed6823b10c1!2sPT%20Varia%20Usaha%20Beton%20Pasrepan!5e0!3m2!1sid!2sid!4v1696820334177!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p> <a href="https://developer.mozilla.org/en-US/docs/Glossary">
                                Fallback link for browsers that don't support iframes
                            </a> </p>
                            <!-- </iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 



</section><!--/#blog-->