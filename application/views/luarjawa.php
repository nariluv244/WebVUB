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
        <h2>Plant <font color='#c52d2f'>Luar Jawa</font></h2>
        <p class="lead">Berikut adalah daftar Plant yang ada di wilayah Jawa Timur, baik Plant Beton Siap   Pakai, Beton Masonry, Beton Pra Cetak maupun Bahan Galian</p>
    </div>
    <div class='col-sm-4'>
        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="media">
                <div class="pull-left">
                </div>
                <div class="media-body">
                    <h4>Agus Iswahyudi</h4>
                    <h5>Kepala Plant <br>BSP Makassar</b></h5>
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
            <p><b>Office:</b> 04114723155 / 0811 1782409
            <p><b>Alamat:</b> Jl. Kima Raya No. 2 Kawasan Industri Makasar
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
        </div>
    </div>
    <div class='col-sm-8'>
        <div class="gmap-plant">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmapplant">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d508674.04167934443!2d119.50678799999999!3d-5.101121!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefc7e26dd1591%3A0xfd1aeb5f6827ffba!2sPt%20Varia%20Usaha%20Beton!5e0!3m2!1sen!2sid!4v1696902450470!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                    <h4>Abdul Fatah</h4>
                    <h5><b>Kepala Plant <br>BM Makassar</b></h5>                    
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
            <p><b>Office:</b> 04114723155
            <p><b>Alamat:</b> Jl. Kimia Raya No.2 Kawasan Industri Makassar
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
        </div>
    </div>
    <div class='col-sm-8'>
        <div class="gmap-plant">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmapplant">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d508674.04167934443!2d119.50678799999999!3d-5.101121!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefc7e26dd1591%3A0xfd1aeb5f6827ffba!2sPt%20Varia%20Usaha%20Beton!5e0!3m2!1sen!2sid!4v1696902970891!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                    <h4>Aris Wibowo</h4>
                    <h5><b>Kepala Plant<br>BSP Pujut-Mandalika</b></h5>
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
            <p><b>Alamat:</b> Jl Sengkol, Mertak, Pujut Kab. Lombok Tengah, Nusa Tenggara Barat
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
        </div>
    </div>
    <div class='col-sm-8'>
        <div class="gmap-plant">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmapplant">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7883.839636842946!2d116.347063!3d-8.887047!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdab2ee5e31399%3A0x9438122f3b6e26ee!2sPT.%20Varia%20Usaha%20Beton%20-%20Mandalika!5e0!3m2!1sid!2sid!4v1696903931899!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                    <h4>Sumantri</h4>
                    <h5><b>Kepala Plant <br>BG Mataram</b></h5>
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
            <p><b>Office:</b> 08113538
            <p><b>Alamat:</b> Jl. Bukit Tinggi Jl. Pringgabaya Utara, Kec. Pringgabaya, Kab. Lombok Timur
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
        </div>
    </div>
    <div class='col-sm-8'>
        <div class="gmap-plant">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmapplant">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7891.433653472144!2d116.633559!3d-8.526849!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc392285fcb9f7%3A0x2de7ffd11fb37e3b!2sPT%20Varia%20Usaha%20Beton%20Plant%20BG%20Mataram!5e0!3m2!1sen!2sid!4v1696904062276!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                    <h4>Petrus Catur Yulianto</h4>
                    <h5><b>Kepala Plant <br>BSP Manado Tikala</b></h5>
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
            <p><b>Office:</b> 081131171748
            <p><b>Alamat:</b> Jl. Ring Road No.1, Taas, Kec. Tikala, Kota Manado, Sulawesi Utara
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
        </div>
    </div>
    <div class='col-sm-8'>
        <div class="gmap-plant">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmapplant">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.5335202123324!2d124.86304340000001!3d1.454087399999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32870bc682d13573%3A0x76276950847fd21e!2sPT.%20Varia%20Usaha%20Beton%20BSP%20Tikala%20Manado!5e0!3m2!1sid!2sid!4v1696904271514!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                    <h4>Prasetyono</h4>
                    <h5><b>Kepala Plant <br>BG Parangloe</b></h5>
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
            <p><b>Office:</b> 08113521964
            <p><b>Alamat:</b> Jl Poros Malino Km 49, Desa Borisallo, Kec. Parangloe, Kab. Gowa, Sulawesi Selatan
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
        </div>
    </div>
    <div class='col-sm-8'>
        <div class="gmap-plant">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmapplant">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15892.237463368421!2d119.66459600000002!3d-5.253354!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee93b3e9df6fb%3A0xeb04ff9324735ee6!2sPlant%20BG%20Parangloe%20Pt.Varia%20Usaha%20Beton!5e0!3m2!1sen!2sid!4v1696904442997!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                    <h4>Pernomo Hery Prasetyo</h4>
                    <h5><b>Kepala Plant <br>BSP Jambi</b></h5>
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
            <p><b>Alamat:</b> Sukajaya, Bayung Lencir, Musi Banyuasin Regency, Sumatra Selatan
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
        </div>
    </div>
    <div class='col-sm-8'>
        <div class="gmap-plant">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmapplant">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7975.292608621074!2d103.64664200000001!3d-1.8906549999999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e257bb1e514cb6d%3A0xab204a372b412818!2sPT.%20Varia%20Usaha%20Beton%20BSP%20Tol%20Jambi!5e0!3m2!1sen!2sid!4v1696905085975!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                    <h4>Sulkan</h4>
                    <h5><b>Kepala Plant <br>BSP Purwokerto</b></h5>
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
            <p><b>Office:</b> 0281655578
            <p><b>Alamat:</b> JL. Raya Pageraji KM 7,5, Cilongo, Dusun II, Pageraji, Kec. Cilongok, Kabupaten Banyumas, Jawa Tengah 53162
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
        </div>
    </div>
    <div class='col-sm-8'>
        <div class="gmap-plant">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmapplant">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7912.934676665537!2d109.167801!3d-7.413415999999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6560932ac0f8d3%3A0x11bce43481025c0b!2sPT.%20Varia%20Usaha%20Beton%20(BSP%20Purwokerto)!5e0!3m2!1sid!2sid!4v1696822189239!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="
                            no-referrer-when-downgrade"></iframe>
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
                    <h4>Erdani Catur Adi Prasetyo</h4>
                    <h5><b>Kepala Plant <br>BSP Kutai Timur</b></h5>
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
            <p><b>Alamat:</b> Teluk Pandan, Kec. Teluk Pandan, Kabupaten Kutai Timur, Kalimantan Timur 75321
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
        </div>
    </div>
    <div class='col-sm-8'>
        <div class="gmap-plant">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmapplant">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d510695.0828341029!2d117.42919900000001!3d0.146182!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x320a116a100a2849%3A0x9ed1310b6efc590d!2sPT.%20Varia%20Usaha%20Beton%20BSP%20Teluk%20Pandan%20Kutai%20Timur!5e0!3m2!1sen!2sid!4v1696906501141!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                    <h4>Muhamad Fuad Pebrian</h4>
                    <h5><b>Kepala Plant <br>BSP Pulo Asahan</b></h5>
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
            <p><b>Office:</b> 081130530696
            <p><b>Alamat:</b> Gedangan, Pulo Bandring, Asahan Regency, Sumatra Utara
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
        </div>
    </div>
    <div class='col-sm-8'>
        <div class="gmap-plant">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmapplant">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d7969.038490654942!2d99.576127!3d2.953311!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMsKwNTcnMTEuNyJOIDk5wrAzNCc0NS41IkU!5e0!3m2!1sen!2sid!4v1696912258515!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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