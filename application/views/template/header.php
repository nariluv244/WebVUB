<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-4">
                    <div class="top-number"><p><i class="fa fa-phone-square"></i> +6231 998 41300 <?php //echo CI_VERSION?></p></div>
                </div>
                <div class="col-sm-6 col-xs-8">
                   <div class="social">
                        <ul class="social-share">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                        <div class="search">
                            <form role="form">
                                <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                <i class="fa fa-search"></i>
                            </form>
                       </div>
                   </div>
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->

    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img width='15%' height='15%' src="<?php echo base_url()?>public/images/logo-varia-usaha-beton.png" alt="logo vub"><img src="<?php echo base_url()?>public/images/logotext.png" alt="logo vub"></a>
            </div>
            
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="<?php echo curCname()=='home' ? 'active' : ''; ?>"><a href="<?php echo base_url()?>"><font color="white"><b>Home</b></font></a></li>
                    <li class="dropdown <?php echo (curCname()=='about' || curCname()=='profile') ? 'active' : ''; ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><font color="white">Profile </font><i class="fa fa-angle-down"></b></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url()?>about"><font color="white">About VUB</font></a></li>
                            <li><a href="<?php echo base_url()?>profile"><font color="white">Company Profile</font></a></li>
                        </ul>
                    </li>
                    <!-- <li class="<?php echo curCname()=='about' ? 'active' : ''; ?>"><a href="<?php echo base_url().'about'?>"><b>About</b></a></li>
                    <li class="<?php echo curCname()=='' ? 'active' : ''; ?>"><a href="<?php echo base_url()?>"><b>Company Profile</b></a></li> -->
                    <li class="dropdown <?php echo (curCname()=='product') ? 'active' : ''; ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><font color="white">Product / Services</font> <i class="fa fa-angle-down"></b></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url()?>product/bsp"><font color="white">Beton Siap Pakai</font></a></li>
                            <li><a href="<?php echo base_url()?>product/bpc"><font color="white">Beton Precast</font></a></li>
                            <li><a href="<?php echo base_url()?>product/bm"><font color="white">Beton Masonry</font></a></li>
                            <li><a href="<?php echo base_url()?>product/bg"><font color="white">Bahan Galian</font></a></li>
                            <li><a href="<?php echo base_url()?>product/sewa"><font color="white">Jasa Sewa</font></a></li>
                        </ul>
                    </li>
                    <li class="dropdown <?php echo (curCname()=='plant') ? 'active' : ''; ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="white"><b>Plant <i class="fa fa-angle-down"></b></font></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url()?>plant/jatim"><font color="white">Jawa Bagian Timur</font></a></li>
                            <li><a href="<?php echo base_url()?>plant/jateng"><font color="white">Jawa Bagian Tengah</font></a></li>
                            <li><a href="<?php echo base_url()?>plant/luarjawa"><font color="white">Luar Jawa</font></a></li>
                        </ul>
                    </li>
                    <li class="dropdown <?php echo (curCname()=='reference' || curCname()=='ongoing') ? 'active' : ''; ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="white"><b>Project <i class="fa fa-angle-down"></b></font></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url()?>reference"><font color="white">References Projects</font></a></li>
                            <li><a href="<?php echo base_url()?>ongoing"><font color="white">On Going Projects</font></a></li>
                        </ul>
                    </li>


                    <li class="dropdown <?php echo (curCname()=='media') ? 'active' : ''; ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="white"><b>Media <i class="fa fa-angle-down"></b></font></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url()?>media/transaksi"><font color="white">Transaksi</font></a></li>
                            <li><a href="<?php echo base_url()?>media/brosurAllProduk"><font color="white">Brosur Semua Produk</font></a></li>
                            <li><a href="<?php echo base_url()?>media/brosurbetoninstan"><font color="white">Brosur Beton Instan</font></a></li>
                            <li><a href="<?php echo base_url()?>media/formpermintaanpenawaranharga"><font color="white">Form Permintaan Penawaran Harga</font></a></li>
                            <li><a href="<?php echo base_url()?>media/formpengajuankeagenan"><font color="white">Form Pengajuan Keagenan</font></a></li>
                        </ul>
                    </li>

                    <li class="<?php echo curCname()=='gallery' ? 'active' : ''; ?>"><a href="<?php echo base_url()?>gallery"><font color="white"><b>Gallery</b></font></a>
                    </li>
                    <li class="<?php echo curCname()=='carier' ? 'active' : ''; ?>"><a href="<?php echo base_url()?>carier"><font color="white"><b>Career</b></font></a>
                    </li>
                    <li class="<?php echo curCname()=='news' ? 'active' : ''; ?>"><a href="<?php echo base_url()?>news"><font color="white"><b>News</b></font></a></li>
                    <li class="<?php echo curCname()=='' ? 'active' : ''; ?>"><a href="blog.html"><b>Kuesioner</b></a></li>
                    <li class="<?php echo curCname()=='contact' ? 'active' : ''; ?>"><a href="<?php echo base_url()?>contact"><font color="white"><b>Contact</b></font></a></li>                        
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
    
</header><!--/header-->