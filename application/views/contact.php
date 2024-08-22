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

 <section id="contact-info">
        <div class="center">                
            <h2>How to Reach Us?</h2>
            <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p> -->
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=Jl.+Letjend+S.+Parman+38+Waru+Sidoarjo,+Jawa+Timur-Indonesia+&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
                          <!--   <iframe src="https://developer.mozilla.org/en-US/docs/Glossary"
        frameborder="0" scrolling="no" marginheight="0" marginwidth="0" frameborder="0"
        allowfullscreen sandbox> -->
                              <p> <a href="https://developer.mozilla.org/en-US/docs/Glossary">
                                Fallback link for browsers that don't support iframes
                              </a> </p>
                            <!-- </iframe> -->
                        </div>
                    </div>

                    <div class="col-sm-4 map-content">
                        <ul class="row">
                            <li >
                                <address>
                                    <h5><i class='fa fa-home'></i> KANTOR PUSAT</h5>
                                    <!-- <p>Jl. Letjend S. Parman 38 Waru Sidoarjo, Jawa Timur-Indonesia </p> -->
                                    <p>The Royal Business Park Blok F.02-F.03 <br>Jl. H. Anwar Hamzah, Tambak Oso, Waru, Sidoarjo </p>
                                    <p><i class='fa fa-phone'></i> Phone: +6231 998 41300 <br>
                                    <i class='fa fa-phone'></i> Fax: +6231 998 41308 <br>
                                    <i class='fa fa-envelope'></i> Email Address: info@variabeton.com</p>
                            
                                </address>

                               <!--  <address>
                                    <h5>Zonal Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>                                
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address> -->
                            </li>


                            <!-- <li class="col-sm-6">
                                <address>
                                    <h5>Zone#2 Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>

                                <address>
                                    <h5>Zone#3 Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message</h2>
                <!-- <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->