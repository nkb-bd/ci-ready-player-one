      <div class="carousel-slider owl-carousel"> 
                

                <?php if (isset($slider_data)): ?>
               

                  <?php foreach ($slider_data as $data): ?>

                       <div class="hero-wrap js-fullheight " style="background-image: url('<?php echo base_url("/{$data['path']}")?>');" data-stellar-background-ratio="0.5">
                          <div class="overlay"></div>
                          <div class="container ">
                            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                              <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                                <h1 class="mb-0"><?=$data['heading']?></h1>
                                <h3 class="subheading mb-4 pb-1"><?=$data['sub_heading']?></h3>
                                <p><a href="#" class="btn btn-primary py-3 px-4">New here!</a> <a href="#" class="btn btn-white py-3 px-4"><span class="icon-play-circle"></span> Live Stream</a></p>
                                <div class="mouse">
                                  <a href="#" class="mouse-icon">
                                    <div class="mouse-wheel"><span class="ion-ios-arrow-down"></span></div>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    
                  <?php endforeach ?>
                  
                <?php endif ?>
            
       
      </div>

    
    <section class="ftco-intro py-5" style="background-image: url(<?php echo base_url("/{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/bg_4.jpg);">
      <div class="overlay" style=" width:  100%;"></div>
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-6 ftco-animate">
            <h2 class="subheading"><span class="icon-calendar"></span> Upcoming Events</h2>
            <!-- <h2><a href="#">"The Law Demands, but Grace Supplies" &mdash; Pastor John Doe </a></h2> -->
          </div>
          <div class="col-md-6 pl-md-5 ftco-animate">
            <div id="timer" data-time = "21 December 2019 9:56:00 GMT+01:00" class="d-flex mb-3">
              <div class="time" id="days"></div>
              <div class="time pl-4" id="hours"></div>
              <div class="time pl-4" id="minutes"></div>
              <div class="time pl-4" id="seconds"></div>
            </div>
            <p><a href="#" class="btn btn-primary px-4 py-2">Join our event</a></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-daily-verse bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 daily-verse text-center p-5">
            <span class="icon-anchor"></span>
            <h3 class="ftco-animate">
              <?=$this->settings->meta_description?>
            </h3>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 text-center heading-section ftco-animate">
            <h2 class="mb-2"><span class="px-4">Our Services</span></h2>
            <!-- <span class="subheading">Church Services</span> -->
          </div>
        </div>
        <div class="row">

           <!-- services -->
            <?php if (count( $services_data)>0): 

                 $len = count( $services_data);
                $firsthalf = array_slice($services_data, 0, $len / 2);
                $secondhalf = array_slice($services_data, $len / 2);

              
              ?>
                

              
       

            


          <div class="col-lg-6">
              <?php foreach ($firsthalf as $data): ?>
                  <div class="d-flex services ftco-animate text-lg-right">
                    <div class="icon order-lg-last d-flex align-items-center justify-content-center">
                       <?php if (!empty($data['path'])): ?>
                           <img src="<?=base_url()?><?=$data['path']?>" alt="T<?=$data['heading']?>" class="img-raised user-img  img-fluid">
                        <?php endif ?>
                    </div>
                    <div class="media-body pr-lg-5">
                      <h3 class="heading mb-3"><?=$data['heading']?></h3>
                        <p><?=$data['sub_heading']?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>


          <div class="col-lg-6">
               <?php foreach ($secondhalf as $data): ?>
                  <div class="d-flex services ftco-animate text-lg-right">
                    <div class="icon order-lg-last d-flex align-items-center justify-content-center">
                       <?php if (!empty($data['path'])): ?>
                           <img src="<?=base_url()?><?=$data['path']?>" alt="T<?=$data['heading']?>" class="img-raised user-img  img-fluid">
                        <?php endif ?>
                    </div>
                    <div class="media-body pr-lg-5">
                      <h3 class="heading mb-3"><?=$data['heading']?></h3>
                        <p><?=$data['sub_heading']?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
          </div>
        </div>

        <?php endif ?>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 text-center heading-section heading-section-light ftco-animate">
            <h2 class="mb-2"><span class="px-4">Have a project in mind?</span></h2>
            <span class="subheading">You can reach us by email!</span>
          </div>
        </div>
        <div class="row d-flex sermon-wrap">
          <div class="col-md-6 d-flex align-items-stretch ftco-animate">
            <div class="img" style="background-image: url(<?php echo base_url("/{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/get_in_touch.jpeg);"></div>
          </div>
          <div class="col-md-6 py-4 text ftco-animate">
            <h2 class="mb-4"><a href="sermon.html"><?=str_replace("|"," ",$this->settings->site_name);?></a></h2>
            <div class="meta">
            <?=$this->settings->welcome_message;?>
            </div>
            <p class="mt-4 btn-customize">
              <a href="https://vimeo.com/45830194" class="btn btn-primary px-4 py-3 mr-md-2 popup-vimeo"><span class="icon-play"></span> Demo</a> 
              <a href="#" class="btn btn-black px-4 py-3 ml-lg-2"><span class="icon-message"></span> Get In Touch</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    
    <section class="ftco-counter" id="section-counter">
      <div class="container">
        <div class="row d-flex">
        
          <div class="col-md-12 px-5 py-5">

            <!-- portfolio -->

            <style>

            </style>
              <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-12 text-center heading-section  ftco-animate">
                  <h2 class="mb-2"><span class="px-4">Our Potfolio</span></h2>
                  <span class="subheading">You can have a quick look!</span>
                </div>
              </div>

                <div class="filters filter-button-group">
                  <ul><h4>
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".webdesign">Web Design</li>
                    <li data-filter=".webdev">Web Development</li>
                    <li data-filter=".brand">Brand Identity</li>
                  </h4></ul>
                </div>

                <div class="content grid">


                  <div class="single-content brand webdesign grid-item">
                    <a href="#">
                    <img class="p2" src="https://static1.squarespace.com/static/56c5196f4c2f85dda57c1d66/59d944df8a02c7abc311e81d/5b71c491b8a045325bf1beba/1534182696851/Screen+Shot+2018-08-13+at+1.48.35+PM.png">
                    </a>
                  </div>

                  <div class="single-content brand grid-item">
                    <img class="p2" src="https://static1.squarespace.com/static/56c5196f4c2f85dda57c1d66/59d944df8a02c7abc311e81d/59da52ba29f187b71a84628e/1507480323521/Portfolio+Template+AMD-06.jpg">
                  </div>
                        
                        <div class="single-content webdesign grid-item">
                    <img class="p2" src="https://static1.squarespace.com/static/56c5196f4c2f85dda57c1d66/59d944df8a02c7abc311e81d/5b71a4cd0ebbe87857c695de/1534181858373/Portfolio+Template+AMD-11.png">
                  </div>
                        
                        <div class="single-content webdesign grid-item">
                    <img class="p2" src="https://static1.squarespace.com/static/56c5196f4c2f85dda57c1d66/59d944df8a02c7abc311e81d/59da3b4bf7e0ab21edcb9aa1/1507480179530/Portfolio+Template+AMD-06.png">
                  </div>
                        
                        <div class="single-content webdesign brand grid-item">
                    <img class="p2"src="https://static1.squarespace.com/static/56c5196f4c2f85dda57c1d66/59d944df8a02c7abc311e81d/59da46128419c28f51bc28b1/1534175868854/Portfolio+Template+AMD-04.png">
                  </div>
                        
                        <div class="single-content webdesign grid-item">
                    <img class="p2" src="https://static1.squarespace.com/static/56c5196f4c2f85dda57c1d66/59d944df8a02c7abc311e81d/5b71c1e221c67c0feefe2a10/1534182546003/Portfolio+Template+AMD-03.png">
                  </div>
                        
                        <div class="single-content webdesign webdev grid-item">
                    <img class="p2"src="https://static1.squarespace.com/static/56c5196f4c2f85dda57c1d66/59d944df8a02c7abc311e81d/59d9455546c3c4655adade94/1507480179518/Portfolio+Template+AMD-01.png">
                  </div>
                        
                    
                    </div>
          </div>
        </div>
      </div>
    </section>
    <!-- portfolio -->

    
    <!-- team -->

    <section class="ftco-section testimony-section" style="background-image: url(<?php echo base_url("/{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/bg_3.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-2">Our Team</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo base_url("/{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Member</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo base_url("/{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Member</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo base_url("/{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Member</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo base_url("/{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/person_4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Member</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo base_url("/{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Member</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- team -->

    <!-- testimony -->
    <section class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 py-5 ">
             <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-12 text-center heading-section  ftco-animate">
                  <h2 class="mb-2"><span class="px-4">Testimony</span></h2>
                  <span class="subheading">Our Happy Clients</span>
                </div>
              </div>
          
            <div class="  owl-carousel   carousel-clients">
              
              <div class="col-lg-8  offset-2 d-flex ftco-animate " >
                <div class="text-center">
                    <img src="<?php echo base_url("/{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/image_1.jpg" style="max-width: 180px; display: inline-block;" class="img-responsive rounded" alt="">
                 
                  <div class="text d-flex  d-block " >
                   
                    <div class=" p-4 text-center">
                      <p>Mack Winston2</p>
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                      <h3 class="heading mt-2"><a href="#">Don’t just take our words for it. Our clients are our biggest supporters</a></h3>
                    
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-lg-8  offset-2 d-flex ftco-animate " >
                <div class="text-center">
                    <img src="<?php echo base_url("/{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/image_1.jpg" style="max-width: 180px;display: inline-block;" class="img-responsive rounded" alt="">
               
                  <div class="text d-flex float-right d-block " >
                   
                    <div class=" p-4 text-center">
                      <p>Mack Winston</p>
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                      <h3 class="heading mt-2"><a href="#">Don’t just take our words for it. Our clients are our biggest supporters</a></h3>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        
        </div>
      </div>
    </section>
    <!-- testimony -->
    

    <!-- partners -->
     <section class="ftco-section bg-light">

        <div class="container">
          <div class="col-md-12">
            <div class="owl-carousel   carousel-partners">
                 <div class="col-md-12">
                    <a class="social-icon text-xs-center" target="_blank" href="#">
                      <img src="<?=base_url("{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/07.png" class="img-responsive" style="max-width: 150px;" alt="">
                   </a>
                 </div>
                 
                 <div class="col-md-12">
                    <a class="social-icon text-xs-center" target="_blank" href="#">
                      <img src="<?=base_url("{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/07.png" class="img-responsive" style="max-width: 150px;" alt="">
                   </a>
                 </div>
                 
                 <div class="col-md-12">
                    <a class="social-icon text-xs-center" target="_blank" href="#">
                      <img src="<?=base_url("{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/07.png" class="img-responsive" style="max-width: 150px;" alt="">
                   </a>
                 </div>
                 
                 <div class="col-md-12">
                    <a class="social-icon text-xs-center" target="_blank" href="#">
                      <img src="<?=base_url("{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/07.png" class="img-responsive" style="max-width: 150px;" alt="">
                   </a>
                 </div>
                 
                 <div class="col-md-12">
                    <a class="social-icon text-xs-center" target="_blank" href="#">
                      <img src="<?=base_url("{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/07.png" class="img-responsive" style="max-width: 150px;" alt="">
                   </a>
                 </div>
                 
                 <div class="col-md-12">
                    <a class="social-icon text-xs-center" target="_blank" href="#">
                      <img src="<?=base_url("{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/07.png" class="img-responsive" style="max-width: 150px;" alt="">
                   </a>
                 </div>
                 
                 <div class="col-md-12">
                    <a class="social-icon text-xs-center" target="_blank" href="#">
                      <img src="<?=base_url("{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/07.png" class="img-responsive" style="max-width: 150px;" alt="">
                   </a>
                 </div>
                 
                 <div class="col-md-12">
                    <a class="social-icon text-xs-center" target="_blank" href="#">
                      <img src="<?=base_url("{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/07.png" class="img-responsive" style="max-width: 150px;" alt="">
                   </a>
                 </div>
                 
               
              </div>
          </div>
        </div>
     </section>
    <!-- partners -->

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 text-center heading-section  ftco-animate">
            <h2 class="mb-2"><span class="px-4">Recent Blog</span></h2>
            <span class="subheading">Our Blog</span>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-lg-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo base_url("/{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/image_1.jpg');">
              </a>
              <div class="text d-flex float-right d-block">
                <div class="topper text-center pt-4 px-3">
                  <span class="day">18</span>
                  <span class="mos">January</span>
                  <span class="yr">2019</span>
                </div>
                <div class="desc p-4">
                  <h3 class="heading mt-2"><a href="#">All you want to know about Bible</a></h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo base_url("/{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/image_2.jpg');">
              </a>
              <div class="text d-flex float-right d-block">
                <div class="topper text-center pt-4 px-3">
                  <span class="day">15</span>
                  <span class="mos">January</span>
                  <span class="yr">2019</span>
                </div>
                <div class="desc p-4">
                  <h3 class="heading mt-2"><a href="#">All you want to know about Bible</a></h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo base_url("/{$this->settings->themes_folder}/{$this->settings->theme}/")?>images/image_3.jpg');">
              </a>
              <div class="text d-flex float-right d-block">
                <div class="topper text-center pt-4 px-3">
                  <span class="day">14</span>
                  <span class="mos">January</span>
                  <span class="yr">2019</span>
                </div>
                <div class="desc p-4">
                  <h3 class="heading mt-2"><a href="#">All you want to know about Bible</a></h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-gallery bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 text-center heading-section  heading-section-light  ftco-animate">
            <h2 class="mb-2"><span class="px-4">Contact</span></h2>
            <!-- <span class="subheading">Our Blog</span> -->
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="row no-gutters">
              <form class="contact-form row">
                  <div class="form-field form-group col col-md-6">
                     <input id="name" class="input-text form-control" type="text" placeholder="Name" required>
                  </div>
                  <div class="form-field  form-group col col-md-6">
                     <input id="email" class="input-text js-input  form-control"  placeholder="Email" type="email" required>
                  </div>
                  <div class="form-field  form-group col-md-12">
                     <textarea rows="6" cols="50" class="input-text js-input  form-control"  type="text" required></textarea>
                  </div>
                  <div class="form-field   col-md-12 align-center">
                    <button class="btn btn-primary px-4 py-3 mr-md-2 col-md-12 "><span class="icon-chat"></span> Send</button>
                  </div>
               </form>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-stretch">
            <div id="map"></div>
          </div>
        </div>
      </div>
    </section>



    <section class="ftco-section ftco-section-parallax bg-secondary ftco-no-pb">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white heading-section-no-line ftco-animate">
              <h2>Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
 