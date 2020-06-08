<?php include 'include/header.php';?>
<div class="StickyMenuDetails">
    <div class="container">
        <div id="StickyMenuD">
            <ul class="menu-slider">
                <li class="activityLink"><a href="#PackageDetails">Activity Options</a></li>
                <li class="descriptionLink"><a href="#Description">Description</a></li>
                <li class="ItineraryLink"><a href="#Itinerary"> Itinerary</a></li>
                <li class="IncludedLink"><a href="#Included">Included</a></li>
                <li class="InstructionsLink"><a href="#Instructions">Instructions</a></li>
                <li class="ReviewsLink"><a href="#Reviews">Reviews</a></li>
            </ul>
        </div>  
    </div>
</div> 
<div class="tour-details-page">   
    <div class="container">
        <div class="left-side">
            <div class="tour-slider">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="false">
                <ol class="carousel-indicators">
                    <li><i class="fa fa-play active"  data-target="#carouselExampleCaptions" data-slide-to="0" ></i></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item  active">
                        <div class="wrapper">
                        <a class="popup-youtube-tour" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                            <div class="video-popup-icon">
                                <img src="<?php echo base_url('assets/images/bj.jpg'); ?>" alt="">
                            </div>
                        </a> 
                        </div>  
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                    <img src="assets/images/main-banner.jpg" class="d-block w-100" alt="background">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
                <!-- <div class="items">
                    <div class="img-box">
                        <a class="popup-youtube-tour" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                          <div class="video-popup-icon"><img src="<?php echo base_url('assets/images/bj.jpg'); ?>" alt=""></div>
                        </a>    
                    </div>
                </div>items -->
                
                <!-- <div class="items">
                    <div class="img-box">
                        <img src="images/bj.jpg" alt="">
                    </div>
                </div>items -->
            </div><!-- tour-slider -->
            
            <div class="breadcrumb-tour">
                <ul>
                    <li><a href="#">United Arab Emirates</a></li>
                    <li><a href="#">Dubai</a></li>
                    <li>Burj Khalifa</li>
                </ul>
            </div><!-- breadcrumb-tour -->
            
            <div class="title-sec" id="sticker-titile">
                <h1>Burj Khalifa Tickets: Level 124 & 125</h1>
                <div class="rating-box">
                    <div class="ratings">
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                    </div>
                   <p><b>4.9</b></p>
                   <span><b>175 Reviews </b> |  230+ Booked</span>
                </div><!-- rating-box--> 
                <div class="fav-iocn">
                    <span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                </div>
                
            <div class="sticky-sec">
                <ul>
                    <li>
                        <a href="#">
                            <span>
                            <img src="<?php echo base_url('assets/images/instant.png'); ?>"  alt="Instant Confirmation"></span><p>Instant Confirmation</p>
                        </a>
                    </li>
                    <li><a href="#"><span><img src="<?php echo base_url('assets/images/bus.svg'); ?>" alt="Hotel Pick Up"></span><p>Hotel Pick Up</p></a>
                    </li>
                    <li><a href="#"><span><img src="<?php echo base_url('assets/images/group.svg'); ?>"  alt="Join in Group"></span><p> Join in Group</p></a></li>
                    <li><a href="#"><span><img src="<?php echo base_url('assets/images/duration.svg'); ?>"  alt="Duration: 7 Hours"></span><p>Duration: 7 Hours</p></a></li>
                    <li><a href="#"><span><img src="<?php echo base_url('assets/images/language.png'); ?>" alt="Language - English"></span><p>Language - English</p></a></li>
                    <li><a href="#"><span><img src="<?php echo base_url('assets/images/mobile.svg'); ?>"  alt="Present Mobile or Printed Voucher"></span><p>Present Mobile or Printed Voucher</p></a></li>
                    <li><a href="#"><span><img src="<?php echo base_url('assets/images/cancellation.png'); ?>" alt="Free Cancellation before 48 Hrs"></span><p>Free Cancellation before 48 Hrs</p></a></li>
                </ul>
            </div><!-- sticky-sec -->
            </div><!-- title-sec -->
            <div class="content-area">
                <ul class="heightlight">
                    <li>Watching the magical sunset over the vast skyline</li>
                    <li> A taste of Arabic culture in an authentic Arabic camp </li>
                    <li> A signature BBQ dinner in a Bedouin setting</li> 
                    <li> Drop off time: 9:00PM-9: 15 PM</li>
                </ul>
            </div><!-- content-area -->
            <div class="package-option scroll-point" id="PackageDetails">
                <h2><img src="assets/images/logo-icon.png" alt="logo icon"/> Package Options </h2>
                <div class="select-date-section">
                    <p>Select date and activity option</p>
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="date-slt">
                                <div class="date-pic">
                                <span>
                                    <input type='text' class='datepicker-here' data-language='en' placeholder="mm/dd/yyyy" id="txtDate" readonly/>
                                </span>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="drop-select-number">
                                <div class="top-selcet">
                                    <p><img src="assets/images/group.svg" alt="group">
                                        <span class="adult-span">0</span> Adult, 
                                        <span class="child-span">0</span> Child
                                        <i class="fa fa-angle-down"></i>
                                    </p>
                                </div>
                                <div class="bottom-select">
                                    <hr/>
                                    <div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>Adult(+11)</p>
                                            </div>
                                            <div class="col-6">
                                                <div class="adult-select outer">
                                                    <div class="input-group input-number-group">
                                                    <div class="input-group-button input-group-button-left">
                                                        <span class="input-number-decrement adult-count">-</span>
                                                    </div>
                                                    <input class="input-number" type="text" value="0">
                                                    <div class="input-group-button input-group-button-right">
                                                        <span class="input-number-increment">+</span>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div>
                                        <div class="row">
                                            <div class="col-6">                                       
                                                <p>Child (4-10) </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="child-select outer">
                                                    <div class="input-group input-number-group">
                                                    <div class="input-group-button input-group-button-left">
                                                        <span class="input-number-decrement adult-count">-</span>
                                                    </div>
                                                    <input class="input-number" type="text" value="0">
                                                    <div class="input-group-button input-group-button-right">
                                                        <span class="input-number-increment">+</span>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4  col-12">
                            <button class="book-now-btn hvr-sweep-to-right">Check availability</button>
                        </div>
                    </div>
                </div>
                
                <div class="accordion-container">
                  <div class="accordion-set">
                    <div class="title-ac">
                        <div class="row">
                            <div class="col-xl-4 col-md-5 col-12">
                                <div class="left-se">
                                    <h3>Private Arabian Dunes Safari</h3> 
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-3 col-6">
                                <div class="left-se middle-section">
                                    <div class=price><h5>AED <span class="total-packge">0</span></h5> <span>Total Price</span></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="right-se">
                                    <button type="submit" class="sl-btn">SELECT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <p class="description">Shared tour with a maximum of 6 people in one four wheel drive vehicle. 
                            Includes Arabian dunes bashing, sandboarding & a brief camel ride
                            Pickup 2.30-3.00 pm and drop off: 6.00-6.30 pm </p>
                        <h6>Sharing without Dinner	</h6>
                        <div class="adult-number">
                            <div class="title-ac">
                                    <div class="row">
                                    <div class="col-6">
                                        <div class="left-se">
                                            <h5>Adult (11+ years)</h5> 
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="right-se">
                                            <del>AED 750</del>
                                            <span>AED 709</span>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="adult-number">
                            <div class="title-ac">
                                    <div class="row">
                                    <div class="col-6">
                                        <div class="left-se">
                                            <h5>Adult (11+ years)</h5> 
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="right-se">
                                            <del>AED 750</del>
                                            <span>AED 709</span>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="select-time">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="left-data">
                                        <p>Select a starting time:</p>
                                        <button class="btn">9: 00 AM</button>
                                        <button class="btn">5: 00 Pm</button>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="middle-data">
                                        <p>Price breakdown</p>
                                        <p>Adult <span class="adult-span">0</span> x AED 
                                        <span class="adult-price">709</span> 
                                        </p>
                                        <hr/>
                                        <p>Child <span class="child-span">0</span> x  AED 
                                        <span class="child-price">709</span></p>
                                    </div>
                                </div>                                
                                <div class="col-md-4 col-6">
                                    <div class="right-data">
                                        <p>test</p>
                                        <p>AED <span  class="adult-total">0</span></p>
                                        <hr/>
                                        <p>AED <span class="child-total"> 0</span></p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="links">
                                        <a href="#" class="add-to-cart">Add To Cart</a>
                                        <a href="#" class="hvr-sweep-to-right book-now-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content -->
                  </div>
                  <!-- accordion-set -->
                  <div class="accordion-set">
                    <div class="title-ac">
                        <div class="row">
                            <div class="col-xl-4 col-md-5 col-12">
                                <div class="left-se">
                                    <h3>Private Arabian Dunes Safari</h3> 
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-3 col-6">
                                <div class="left-se middle-section">
                                    <div class=price><h5>AED  <span  class="total-packge">0</span></h5> <span>Total Price</span></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="right-se">
                                    <a href="#" class="sl-btn">SELECT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <p class="description">Shared tour with a maximum of 6 people in one four wheel drive vehicle. 
                            Includes Arabian dunes bashing, sandboarding & a brief camel ride
                            Pickup 2.30-3.00 pm and drop off: 6.00-6.30 pm </p>
                        <h6>Sharing without Dinner	</h6>
                        <div class="adult-number">
                            <div class="title-ac">
                                    <div class="row">
                                    <div class="col-6">
                                        <div class="left-se">
                                            <h5>Adult (11+ years)</h5> 
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="right-se">
                                            <del>AED 750</del>
                                            <span>AED 709</span>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="adult-number">
                            <div class="title-ac">
                                    <div class="row">
                                    <div class="col-6">
                                        <div class="left-se">
                                            <h5>Adult (11+ years)</h5> 
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="right-se">
                                            <del>AED 750</del>
                                            <span>AED 709</span>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="select-time">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="left-data">
                                        <p>Select a starting time:</p>
                                        <button class="btn">9: 00 AM</button>
                                        <button class="btn">5: 00 Pm</button>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="middle-data">
                                        <p>Price breakdown</p>
                                        <p>Adult <span class="adult-span">0</span> x AED 
                                        <span class="adult-price">709</span> 
                                        </p>
                                        <hr/>
                                        <p>Child <span class="child-span">0</span> x  AED 
                                        <span class="child-price">709</span></p>
                                    </div>
                                </div>                                
                                <div class="col-md-4  col-6">
                                    <div class="right-data">
                                        <p>test</p>
                                        <p>AED <span  class="adult-total">0</span></p>
                                        <hr/>
                                        <p> AED <span class="child-total">0 </span></p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="links">
                                        <a href="#" class="add-to-cart">Add To Cart</a>
                                        <a href="#" class="hvr-sweep-to-right book-now-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content -->
                  </div>
                  <!-- accordion-set -->
                  <div class="accordion-set soldout-accordion">
                    <div class="title-ac">
                        <div class="row">
                            <div class="col-xl-4 col-md-5 col-12">
                                <div class="left-se">
                                    <h3>Private Arabian Dunes Safari</h3> 
                                    <p>This experience is sold out for that day</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-3 col-6">
                                <div class="left-se middle-section">
                                    <div class=price><h5>AED <span class="total-packge">0</span></h5> <span>Total Price</span></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="right-se">
                                    <a href="#" class="sl-btn">SELECT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <!-- accordion-set -->
                </div>
                <!-- package-option -->
            <div class="clearfix"></div>
            <div class="content-area">
                <div class="row">
                    <div class="col-sm-8 col-12">
                        <h2 id="Description">
                        <img src="assets/images/logo-icon.png" alt="logo-icon" />
                            Your Experience (Description)
                        </h2>
                    </div>
                    <div class="col-sm-4 col-12">
                       <h2> <a href="#" class="more-information">More Information</a></h2>
                    </div>
                </div>                
                <p>The high adrenaline dune bashing safari starts with a pick up in Dubai at your scheduled time by a Safari captain in a 4wd. During the journey you’ll learn more about Dubai’s origin from way back to the present. 
                </p>
                <a href="#" class="show-more">Read more <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
                    <div class="more-section">
                        <p>The high adrenaline dune bashing safari starts with a pick up in Dubai at your scheduled time by a Safari captain in a 4wd. During the journey you’ll learn more about Dubai’s origin from way back to the present.</p>
                    </div>
                </a>
                <h2 id="Itinerary">
                    <img src="assets/images/logo-icon.png" alt="logo-icon" />
                    Itinerary 
                </h2>
                <ul>
                    <li>Pickup from Dubai between (Winter 2:00pm-2.30pm) (Spring & Atunmun 2:30pm-3:00pm) and (3:00pm-3:30pm in Summer).</li>
                    <li>  Arrival at the rest area/meeting point </li>
                    <li> Entry into the desert</li>
                    <li> Dune bashing</li>
                    <li>Sunset viewing stop then depart to the camp</li>
                    <li> Arrival at the desert camp </li>
                    <li> Indulge in the Arabic camp’s fun activities (camel riding, henna painting, belly dance and tanoura show, shisha etc)</li>
                    <li>BBQ dinner</li>
                    <li> End of the activity; and departure back to hotel or residence at 8:15PM.</li>
                    <li> Drop off 9:00PM-9:30PM</li>
                </ul>
                
                <h2 id="Included">
                    <img src="assets/images/logo-icon.png" alt="logo-icon" />
                    What’s Included 
                </h2>
                <div class="details">
                    <p><i class="fa fa-check"></i>Pick up from Dubai in a 4wd
                    <p><i class="fa fa-check"></i>A 30-40 minutes desert dune bashing in a 4wd</p>
                    <p><i class="fa fa-check"></i>Sunset watch </p>
                    <p><i class="fa fa-check"></i>
                        A visit to the camp. The camp features unlimited mineral water, soft drinks, tea, coffee & sandwiches. Here you’re welcomed
                        with traditional Gahwa-A traditional Arabic coffee.
                    </p>
                    <p><i class="fa fa-check"></i>
                        An open Buffet & BBQ dinner featuring fresh grills, hot freshly baked breads, hot buffet, sumptuous desserts from a local 
                        kitchen & fresh fruits.  
                    </p>
                    <p><i class="fa fa-check"></i>
                        Indulge in a set of fun activities including; exploring a souvenir display stall, a henna tattoo corner, photos with Falcon
                        and a photo session clad in the traditional Dishdashas and Abayas. 
                    </p>
                    <p><i class="fa fa-check"></i>
                        Enjoy live shows from professional artists including a mesmerizing Tanoura Dance, Fire Show & an alluring Belly Dance
                    </p>
                    <p><i class="fa fa-check"></i>
                        Drop off back to your hotel or residence in Dubai in a Landcruiser.
                    </p>
                    <p><i class="fa fa-times"></i> 
                        Alcoholic beverages (available at extra cost)
                    </p>
                    <p><i class="fa fa-times"></i>Gratuities</p>
                    <p><i class="fa fa-times"></i>Souvenirs </p>
                </div>
                <div class="yellow-box" id="Instructions">
                    <h2>Trip Instructions  / Essentials </h2>
                    <ul>
                        <li> The evening desert safari is available every day of the week</li>
                        <li>Camel rides are brief as part of animal care </li>
                        <li>During the holy month of Ramadan, Belly dance, Tanoura dance and other entertainment activities are not availed. </li>
                        <li>Pets, Luggage or large bags are not allowed </li>
                        <li> The Safari Jeep can accommodate up to six people. Therefore, booking the evening desert safari in groups of
                        six is highly commendable. This allows you to have the entire jeep to yourselves. </li>
                    </ul>
                    <a href="#" class="show-more">Book with confidence <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                        <div class="more-section">
                        <p>The high adrenaline dune bashing safari starts with a pick up in Dubai at your scheduled time by a Safari captain in a 4wd. During the journey you’ll learn more about Dubai’s origin from way back to the present.</p>
                        </div>
                    </a>
                    <a href="#" class="show-more">Your safety comes first <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                        <div class="more-section">
                        <p>The high adrenaline dune bashing safari starts with a pick up in Dubai at your scheduled time by a Safari captain in a 4wd. During the journey you’ll learn more about Dubai’s origin from way back to the present.</p>
                        </div>
                    </a>
                    <a href="#" class="show-more">Bring with you<i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                        <div class="more-section">
                        <p>The high adrenaline dune bashing safari starts with a pick up in Dubai at your scheduled time by a Safari captain in a 4wd. During the journey you’ll learn more about Dubai’s origin from way back to the present.</p>
                        </div>
                    </a>
                    <a href="#" class="show-more">Cancelation policy <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                        <div class="more-section">
                        <p>The high adrenaline dune bashing safari starts with a pick up in Dubai at your scheduled time by a Safari captain in a 4wd. During the journey you’ll learn more about Dubai’s origin from way back to the present.</p>
                        </div>
                    </a>
                </div><!-- yellow-box -->
                <div class="map-sec">
                    <p>
                    <img src="assets/images/map-icon.png" alt="map-icon">
                    Meet Up Location <br/>
                        •   Tour is subject to changing weather conditions and may be cancelled during poor weather
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.5695404007147!2d55.257387214326975!3d25.18400873841709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5cde8a72902b%3A0xf4e1441179597e30!2sArabia+Horizons+Tours+LLC!5e0!3m2!1sen!2sin!4v1555657608477!5m2!1sen!2sin" width="600" height="450" style="border:0" allowfullscreen></iframe>
                </div>
                <a href="#" class="view-in-google-map">View in Google Maps</a>

            </div><!-- content-area -->
            
            <div class="customer-review scroll-point" id="Reviews">
                <h2>Customer reviews</h2>
                <div class="review-graph">
                  <div class="inner">
                    <div class="outer-rt">
                    <div class="rating">
                      <span class="rating-num">4.5</span>
                      <div class="rating-stars">
                        <div class="rating-users">
                            Out of 5
                        </div>
                        <span><i class="active icon-star"></i></span>
                        <span><i class="active icon-star"></i></span>
                        <span><i class="active icon-star"></i></span>
                        <span><i class="active icon-star"></i></span>
                        <span><i class="icon-star"></i></span>
                      </div>
                    </div>
                     <div class="rating-box">
                        <div class="ratings">
                            <div class="empty-stars"></div>
                            <div class="full-stars" style="width:100%"></div>
                        </div>
                    </div>  
                    </div>    

                    <div class="histo">
                      <div class="histo-rate">
                        <span class="histo-star">
                          <i class="active icon-star"></i> Excellent</span>
                        <span class="bar-block">
                            <span class="bar" data-width="50%"></span>
                        </span>
                        <p>109</p>  
                      </div>

                      <div class="histo-rate">
                        <span class="histo-star">
                          <i class="active icon-star"></i>Very Good </span>
                        <span class="bar-block">
                            <span class="bar" data-width="30%"></span>
                        </span>
                        <p>40</p>  
                      </div> 

                      <div class="histo-rate">
                        <span class="histo-star">
                          <i class="active icon-star"></i>Average</span>
                        <span class="bar-block">
                            <span class="bar" data-width="20%"></span>
                        </span>
                        <p>7</p>   
                      </div>

                      <div class="histo-rate">
                        <span class="histo-star">
                          <i class="active icon-star"></i>Poor</span>
                        <span class="bar-block">
                            <span class="bar" data-width="10%"></span>
                        </span>
                        <p>4</p>
                      </div>

                      <div class="histo-rate">
                        <span class="histo-star">
                          <i class="active icon-star"></i>Terrible</span>
                        <span class="bar-block">
                          <span class="bar" data-width="5%"></span>
                        </span>
                        <p>1</p>  
                      </div>
                    </div>
                  </div>
                </div><!-- review-graph -->
            
                <div class="review-box">
                   <div class="user-img"><img class="lazy" src="assets/images/Image218.png" alt="client1"></div>
                    <div class="content-sec">
                        <div class="rating-box">
                            <div class="ratings">
                                <div class="empty-stars"></div>
                                <div class="full-stars" style="width:100%"></div>
                            </div>
                        </div>
                        <h6>Rachel<span>March, 2019</span></h6>
                       <p>Worth the trip. I was only able to go to 2 parks as I spent a lot of time at the Blossom Pavillon. The orchid show was awesome. The orchids were really eye catching and you just cant have enough of it. They beautifully arranged the orchids!!!! The other parks were also nice. Ordinary flowers were in abundance. Just arrange them well and you will get a beautiful garden.</p>
                        <ul class="images-sec">
                            <li><img class="lazy" src="assets/images/rw_01.jpg" alt="Rachel"></li>
                            <li><img class="lazy" src="assets/images/rw_02.jpg" alt="Rachel"></li>
                            <li><img class="lazy" src="assets/images/rw_03.jpg" alt="Rachel"></li>
                            <li><img class="lazy" src="assets/images/rw_04.jpg" alt="Rachel"></li>
                            <li><img class="lazy" src="assets/images/rw_05.jpg" alt="Rachel"></li>
                            <li><img class="lazy" src="assets/images/rw_06.jpg" alt="Rachel"></li>
                        </ul>
                  
                    </div> 
                </div><!-- review-box -->
                
                <div class="review-box">
                   <div class="user-img"><img class="lazy" src="assets/images/Image218.png"  alt="Stephen"></div>
                    <div class="content-sec">
                        <div class="rating-box">
                            <div class="ratings">
                                <div class="empty-stars"></div>
                                <div class="full-stars" style="width:100%"></div>
                            </div>
                        </div>
                        <h6>Stephen<span>March, 2019</span></h6>
                       <p>The view is amazing, staff well organized, it is expensive but it worthy....</p>
                    </div> 
                </div><!-- review-box -->
                
                <div class="review-box">
                   <div class="user-img"><img class="lazy" src="assets/images/Image218.png" alt="Beth"></div>
                    <div class="content-sec">
                        <div class="rating-box">
                            <div class="ratings">
                                <div class="empty-stars"></div>
                                <div class="full-stars" style="width:100%"></div>
                            </div>
                        </div>
                        <h6>Beth<span>March, 2019</span></h6>
                       <p>It is a world flora expo but they don't have only on flowers, they show the interesting exhibition through multimedia. I really love the exhibition from the national palace museum, though it' s small but the displays abouut horse are stunning.</p>
            
                    </div> 
                </div><!-- review-box -->
                
                <div class="review-box">
                   <div class="user-img"><img class="lazy" src="assets/images/Image218.png" alt="Chanavie"></div>
                    <div class="content-sec">
                        <div class="rating-box">
                            <div class="ratings">
                                <div class="empty-stars"></div>
                                <div class="full-stars" style="width:100%"></div>
                            </div>
                        </div>
                        <h6>Chanavie<span>March, 2019</span></h6>
                       <p>It's was a great experience and were able to see different and beautiful flowers! We went to the waipu exhibition center and it's easy to get there with public transport.</p>
            
                    </div> 
                </div><!-- review-box -->
                
                <a href="#" class="reviews-btn">Show all reviews</a>
            </div><!-- customer-review -->
        </div>
        </div><!-- left-side -->
        <div class="right-side sidebar">
            <div class="total-right-section">
                <div class="book-now-box">
                    <div class="guarantee-price"><span><img class="lazy" src="assets/images/money.svg"  alt="money"></span>Arabia Horizons Guarantee 
                    <img src="assets/images/eximation.png" alt="exclamation"/>
                    </div>
                    <div class="price">
                        <span>From</span>
                        AED  653<b>AED 1,254</b>
                    </div>
                    <div class="avaliable"><span><img  src="assets/images/cancellation.png"  alt="Available Today"></span>Available Tomorrow</div>
                    <a href="#" class="book-now-btn hvr-sweep-to-right">Select Package</a>
                    <!-- start why book with us -->
                    <div class="why-book">
                        <h5>Why book With as!</h5>
                        <hr/>                  
                        <p>
                            <img src="assets/images/check.png" alt="check" />
                            Best Price Guaranteed
                        </p>  
                        <hr/>                                    
                        <p>
                            <img src="assets/images/check.png" alt="check" />
                            Fast & Easy Booking
                        </p> 
                        <hr/>                                     
                        <p>
                            <img src="assets/images/check.png" alt="check" />
                            Instant Confirmation
                        </p> 
                        <hr/>                                     
                        <p>
                            <img src="assets/images/check.png" alt="check" />
                            24/7 Customer Support
                        </p>
                    </div>
                    <!-- end why book with us -->
                </div>
                <!-- book-now-box -->
                <!-- start support secttion -->
                <div class="support-section">
                    <img src="assets/images/support.png" alt="support"/>
                    <p>Need <span>Help !</span></p><br/>
                    <p>(+971) (0)4 294 6060</p>
                </div>
            </div>
            <!-- end support secttion -->
            <a href="#" class="gift-link">
            <img src="assets/images/gift.png" alt="gift">
                Give this as a gift</a>
            <!-- <div class="share-icons">
                <div class="img-text">
                    <span><img class="lazy" src="assets/images/placeholder-image-1.png" data-src="assets/images/share-sm.svg" alt="share icon"></span>
                    <p>
                        <b>Share this Deal</b>
                        Certificate of Excellence
                    </p>
                </div>
                    <ul>
                        <li><a href="#" class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="ink"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="inst"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
     
            </div>
            <div class="feefo-sec">
                <a href="#"><img class="lazy" src="assets/images/placeholder-image-1.png" data-src="assets/images/feefo.jpg" alt="feefo"></a>
            </div> -->
     
        </div><!-- right-side -->  
        <div class="clearfix"></div>
    </div><!-- container -->
</div><!-- tour-details-page -->
<div class="clearfix"></div>
<!-- start recommended places -->
<div class="recommended-things">
    <!-- start most popular things in dubai -->
    <div class="custom-slider most-popular-things">
    <h3>You might also like...</h3>
    <?php include 'include/activity/recommended-things.php';?>
    <!-- end slider -->
    </div>
<!-- end most popular things in dubai -->
</div>

<!-- end recommended places -->
<?php include 'include/footer.php';?>
<script src="assets/js/sticky-kit.min.js"></script>
<script src="assets/js/jquery.sticky.min.js"></script>
<script>
$('body').addClass('activity-page');
// start fixed links in details page
$(".activity-page").scroll(function (event) {
  var scroll = $(".activity-page").scrollTop();
  var activityTop = $(".package-option").offset().top;
  var descriptionTop = $("#Description").offset().top;
  var ItineraryTop = $("#Itinerary").offset().top;
  var IncludedTop = $("#Included").offset().top;
  var InstructionsTop = $("#Instructions").offset().top;
  var ReviewsTop = $("#Reviews").offset().top;
  if (scroll >= 120) {
    $(".StickyMenuDetails").css({"position":"fixed","top":"0","right":"0","width":"100%","z-index":"9999999999999"});
    if(activityTop < 200 && activityTop > -300)
    {
      $(".StickyMenuDetails ul li.activityLink a").css({"color":"#0085cd","border-bottom":"2px solid #0085cd"});
    }
    else{
      $(".StickyMenuDetails ul li.activityLink a").css({"color":"#1c1c1c","border-bottom":"none"})
    }   
     if(descriptionTop < 200 && descriptionTop > 0)
    {
      $(".StickyMenuDetails ul li.descriptionLink a").css({"color":"#0085cd","border-bottom":"2px solid #0085cd"})
    }
    else{
      $(".StickyMenuDetails ul li.descriptionLink a").css({"color":"#1c1c1c","border-bottom":"none"})
    }    
    if(ItineraryTop < 200 && ItineraryTop > -200)
    {
      $(".StickyMenuDetails ul li.ItineraryLink a").css({"color":"#0085cd","border-bottom":"2px solid #0085cd"})
    }
    else{
      $(".StickyMenuDetails ul li.ItineraryLink a").css({"color":"#1c1c1c","border-bottom":"none"})
    }    
    if(IncludedTop < 200 && IncludedTop > -300)
    {
      $(".StickyMenuDetails ul li.IncludedLink a").css({"color":"#0085cd","border-bottom":"2px solid #0085cd"})
    }
    else{
      $(".StickyMenuDetails ul li.IncludedLink a").css({"color":"#1c1c1c","border-bottom":"none"})
    }    
    if(InstructionsTop < 200 && InstructionsTop > -400)
    {
      $(".StickyMenuDetails ul li.InstructionsLink a").css({"color":"#0085cd","border-bottom":"2px solid #0085cd"})
    }
    else{
      $(".StickyMenuDetails ul li.InstructionsLink a").css({"color":"#1c1c1c","border-bottom":"none"})
    }    
    if(ReviewsTop < 400 && ReviewsTop > -500)
    {
      $(".StickyMenuDetails ul li.ReviewsLink a").css({"color":"#0085cd","border-bottom":"2px solid #0085cd"})
    }
    else{
      $(".StickyMenuDetails ul li.ReviewsLink a").css({"color":"#1c1c1c","border-bottom":"none"})
    }
    
  } else {
    $(".StickyMenuDetails").css({"position":"static","top":"auto","right":"auto","width":"100%"})
  }
});
// end fixed links in details page
// start fixed right section
$(".activity-page").scroll(function(){
  var containerMargin = $(".tour-details-page .container").offset().left +25;
  var bottomMargin = $(".most-popular-things").height();
  var rightdataWidth  = $(".tour-details-page .right-side .total-right-section").innerWidth();
  var scrollWindow = $(".activity-page").scrollTop();
  if($(window).width()<= 992)
  {
    $(".tour-details-page .right-side").css({"position":"initial","right":"auto","top":"auto","z-index":"999999"});
  }
  if($(window).width() > 992){
    if(scrollWindow > 120) {
      $(".tour-details-page .right-side").css({"width":rightdataWidth,"position":"sticky","right":containerMargin,"top":"50px","z-index":"999999"});
      $(".tour-details-page .right-side .book-now-box").css({"padding-top":"10px","padding-bottom":"10px"});
      $(".support-section").css("padding-bottom","7px");
      $(".tour-details-page .right-side .book-now-box .price").css({"padding-top":"8px","margin-top":"0px"});
      $(".tour-details-page .book-now-btn").css("margin-bottom","7px")
  }
  else{
    $(".tour-details-page .right-side").css({"position":"initial","right":"auto","top":"auto","z-index":"999999"});
    $(".tour-details-page .right-side .book-now-box").css({"padding-top":"15px","padding-bottom":"15px"});
    $(".tour-details-page .book-now-btn").css("margin-bottom","25px")
      }
  }
});
////////////////////start resize
$(window).resize(function(){
  var containerMargin1 = $(".tour-details-page .container").offset().left + 25;
  var rightdataWidth1  = $(".tour-details-page .right-side .total-right-section").innerWidth();
  var scrollWindow1= $(".activity-page").scrollTop();
  if($(window).width()<= 992)
  {
    $(".tour-details-page .right-side").css({"position":"initial","right":"auto","top":"auto","z-index":"999999"});
  }
  if($(window).width() > 992){
    if(scrollWindow1 > 120) {
      $(".tour-details-page .right-side").css({"width":rightdataWidth1,"position":"sticky","right":containerMargin1,"top":"50px","z-index":"999999"});
      $(".tour-details-page .right-side .book-now-box").css({"padding-top":"10px","padding-bottom":"10px"});
      $(".support-section").css("padding-bottom","7px");
      $(".tour-details-page .right-side .book-now-box .price").css({"padding-top":"8px","margin-top":"0px"});
      $(".tour-details-page .book-now-btn").css("margin-bottom","7px")
  }
  else{
    $(".tour-details-page .right-side").css({"position":"sticky","right":"auto","top":"auto","z-index":"999999"});
    $(".tour-details-page .right-side .book-now-box").css({"padding-top":"15px","padding-bottom":"15px"});
    $(".tour-details-page .book-now-btn").css("margin-bottom","25px")
  }
  }
});
// end fixed right section
var today = new Date();

$('.activity-date').datepicker({
minDate: today,
autoClose: true
});

$('.popup-youtube-tour').magnificPopup({
    disableOn: 0,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
});

$(".sidebar").stick_in_parent({
    offset_top: 110
});
</script>
<?php include 'include/footer-bottom.php';?>