<?php include 'include/header.php';?>
<div class="home visa">
<!-- start home banner -->
    <div class="home-banner" style="background-image:url(<?php echo base_url('assets/') ?>images/visa-banner.png);">
        <div class="container">
            <div class="outer-box">
                 <div class="right-section">
                    <div class="ad-section">
                        <a href="#">
                            <img class="lazy"
                                src="<?php echo base_url('promotions/arabia-pass.jpg'); ?>" alt="arabia-pass">
                        </a>
                    </div>
                </div><!-- right-section -->
                <div class="total-content">
                <div class="top-data">
                         <h1>UAE Visa</h1>
                        <p>Easily choose the best UAE visa & get it fast and ease online</p>
                </div>
                    <div class="left-section">
                        <div class="tab-section">
                            <div id="parentHorizontalTab" class="activites-tab">
                                <ul class="resp-tabs-list hor_1">
                                    <li>
                                        <div class="visa_tab"></div><span>Visa</span>
                                    </li>
                                </ul>
                                <div class="resp-tabs-container hor_1">
                                    <!-- activites tab -->
                                        <div class="tab-block">
                                            <div class="form-box">
                                                <form class="visa-top-sec" id="visaForm" method="get"
                                                    action="<?php echo base_url('uae-visa/apply/form'); ?>">
                                                        <div class="row">
                                                            <div class="col-md-5 col-12">
                                                                <div class="sr-box">
                                                                        <select required="required" data-placeholder="I'm a citizen of"
                                                                            class="form-control search_test hl-button" name="visa_living">
                                                                            <option value=""> choose </option>
                                                                            <option class="hemant" selected disabled value="saab">I'm
                                                                                Living in</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 col-12">
                                                                <div class="sr-box">
                                                                    <select required="required" data-placeholder="I'm Living in"
                                                                        class="form-control search_test hl-button" name="nationality">
                                                                        <option value=""> choose </option>
                                                                        <option class="hemant" selected disabled value="saab">I'm a
                                                                            citizen of</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 col-12">
                                                                <div class="sr-box visa-pass-block">
                                                                    <select data-placeholder="No of Passengers" name="pax"
                                                                        class="form-control search_test hl-button">
                                                                        <option class="hemant" selected value="saab">No of
                                                                            applicants</option>
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 col-12">
                                                                <div class="sr-box">
                                                                    <select data-placeholder="I'm Living in"
                                                                        class="form-control search_test hl-button" name="visa_id">
                                                                        <option class="hemant" selected disabled value="saab">Visa
                                                                            Type</option>
                                                                        <option class="hemant" value="">Visa Name</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-12">
                                                            <input type="submit" class="sr-btn" value="Search"/>
                                                            </div>
                                                        </div>
                                                </form>
                                            </div>
                                        </div>
                                            </div><!-- form-box -->

                                        </div><!-- tab-one -->
                                </div><!-- resp-tabs-container -->
                            </div>
                        </div><!-- tab-section -->
                    </div><!-- left-section -->
                                              </div>
                <!-- start banner bottom home -->
        <div class="banner-bottom">
            <div class="container">
                <h2>Why Book With Arabia Horizons</h2>
                <div class="inner-wrp">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="inner-section">
                                <span>
                                    <img src="<?php echo base_url('assets/images/support-blue.png'); ?>" alt="Superior Customer Support" />
                                </span>
                                <h5>Superior Customer <br /> Support</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="inner-section">
                                <span>
                                    <img src="<?php echo base_url('assets/images/book-blue.png'); ?>"
                                        alt="Fast and Easy Booking" />
                                </span>
                                <h5>Fast and Easy<br /> Booking</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="inner-section">
                                <span>
                                    <img src="<?php echo base_url('assets/images/reviews-blue.png'); ?>" alt="Genuine Reviews & Photos" />
                                </span>
                                <h5>Genuine Reviews &<br /> Photos</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="last-item inner-section">
                                <span>
                                    <img src="<?php echo base_url('assets/images/happy-blue.png'); ?>" alt="No Hidden Fees" />
                                </span>
                                <h5>No Hidden <br />Fees</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end banner bottom home -->
            </div>
    <!-- end  home-banner -->
    <!-- start visa type -->
    <div class="easy-visa white-bg">
        <div class="container">
            <h2>UAE Visa Types<span>Choose the visa that match your needs and get it easily online </span></h2>
            <div class="row">
                <div class="images-outer">
                    <div class="sm-images">
                        <a href="<?php echo base_url('uae-visa/'.$visa[0]['visa_id']); ?>" target="_blank">
                            <div class="image-sec">
                                <img class="lazy" src="<?php echo base_url('assets/') ?>images/things-to-do/visa-type4.png"
                                    alt="visa 1">
                            </div>
                            <div class="data-sec">
                                <p>UAE Visa</p>
                                <h3>30 Days Visa - Single Entry</h3>
                                <span>AED 1,475</span>
                            </div>
                        </a>
                    </div>

                    <div class="sm-images">
                        <a href="<?php echo base_url('uae-visa/'.$visa[1]['visa_id']); ?>" target="_blank">
                            <div class="image-sec">
                                <img class="lazy" src="<?php echo base_url('assets/') ?>images/things-to-do/visa-type5.png"
                                    alt="visa 2">
                            </div>
                            <div class="data-sec">
                                <p>UAE Visa</p>
                                <h3>30 Days Visa - Multiple Entry</h3>
                                <span>AED 949</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="images-outer">
                    <div class="lg-images">
                        <a href="<?php echo base_url('uae-visa/'.$visa[2]['visa_id']); ?>" target="_blank">
                            <div class="image-sec">
                                <img class="lazy" src="<?php echo base_url('assets/') ?>images/things-to-do/visa-type3.png"
                                    alt="visa 3">
                            </div>
                            <div class="data-sec">
                                <p>UAE Visa</p>
                                <h3>14 Days Visa - Single Entry</h3>
                                <span>AED 425</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="images-outer">
                    <div class="sm-images">
                        <a href="<?php echo base_url('uae-visa/'.$visa[3]['visa_id']); ?>" target="_blank">
                            <div class="image-sec">
                                <img class="lazy" src="<?php echo base_url('assets/') ?>images/things-to-do/visa-type1.png"
                                    alt="visa 4">
                            </div>
                            <div class="data-sec">
                                <p>UAE Visa</p>
                                <h3>90 Days Visa - Single Entry</h3>
                                <span>AED 1,475</span>
                            </div>
                        </a>
                    </div>

                    <div class="sm-images">
                        <a href="<?php echo base_url('uae-visa/'.$visa[4]['visa_id']); ?>" target="_blank">
                            <div class="image-sec">
                                <img class="lazy" src="<?php echo base_url('assets/') ?>images/things-to-do/visa-type2.png"
                                    alt="visa 5">
                            </div>
                            <div class="data-sec">
                                <p>UAE Visa</p>
                                <h3>90 Days Visa - Multiple Entry</h3>
                                <span>AED 1,999</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div><!-- row -->

        </div>
    </div>
    <!-- end visa type -->
 <!-- start how to apply visa -->
    <div class="steps-section cpt-tvl">
        <div class="container">
            <h2>How to Apply for UAE visa?<span>Applying for a hassle-free UAE tourist visa just got easier with four simple steps</span>
            </h2>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="steps-block first-step">
                        <div class="number">
                            <span>1</span>
                        </div>
                        <img src="assets/images/things-to-do/step1.png" alt="step 1">
                        <p>UAE Visa</p>
                        <h3>Choose your nationality, 
                            residence and Visa type
                        </h3>
                        <p>By choosing your nationality before you apply for your visa, system will check if you need to apply for a visa or no advance visa arrangements are required to visit the UAE.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                     <div class="steps-block  second-step">
                        <div class="number">
                            <span>2</span>
                        </div>
                        <img src="assets/images/things-to-do/step2.png" alt="step 2">
                        <p>UAE Visa</p>
                        <h3>Complete your visa 
                            application form
                        </h3>
                        <p>We know filling up a form can be a time- consuming process, but we've minimized the amount of information you need to provide to reflect the UAE Immigration requirements. You can add as many applicants (travelling in a single group) as you want from this single form.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                     <div class="steps-block  third-step">
                        <div class="number">
                            <span>3</span>
                        </div>
                        <img src="assets/images/things-to-do/step3.png" alt="step 3">
                        <p>UAE Visa</p>
                        <h3>Pay visa fees online through 
                            our secured payment gateway
                        </h3>
                        <p>Pay your visa fee securely and with complete peace of mind through our trusted payment gateway which uses an industry-leading 256-bit SSL for added security. In addition, our online payment options also allow you to make the payment using your debit card as well as your credit card.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="steps-block forth-step">
                        <div class="number">
                            <span>4</span>
                        </div>
                        <img src="assets/images/things-to-do/step4.png" alt="Receive your visa">
                        <p>UAE Visa</p>
                        <h3>Receive your visa
                        </h3>
                        <p>Visa Approval - When you receive your visa document, please review the printed information right away to make sure there are no errors. If there are any spelling errors, contact us immediately to correct such error.</p>
                    </div>
                </div>
            <a href="#" class="more-btn hvr-radial-out submit-btn" target="_blank">Apply Now</a>
        </div>
    </div> 
 <!-- end how to apply visa -->
    <!-- start track your location -->
    <div class="track-section">
        <div class="container">
            <h2>Track Your Application</h2>
            <p>Track your visa application status or download the visa copy (once its issued). You just need to insert
                your visa application reference number and search. If you have any queries or concerns regarding your
                UAE Visa Application, you can directly reach us by email, chat, and/or phone.</p>
            <form class="track-form">
                <input type="text" class="sr-input" placeholder="Reference Number">
                <input type="submit" class="submit-btn" value="Search">
            </form>
        </div>
    </div>
    <!-- end track your location -->
    <!-- start faq -->
    <div class="clearfix"></div>
    <div class="visa-faq planning-your-visit">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="show-more">What are the different types of visas?
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
                <div class="more-section">
                <p>The purpose of your visit will determine the type of visa you need to apply for. It could be a tourist, transit, employment or student visa.</p>
                </div>
            </div>                
            <div class="show-more">How many days will it take to process my visa?
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
                <div class="more-section">
                <p>Once accepted, visa applications require a minimum of 3 - 5 working days to process and may take longer.</p>
                </div>
            </div>            
            <div class="show-more">Is the visa application fee refundable if it has been rejected?
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
                <div class="more-section">
                <p>No, the visa application fee is non-refundable in all cases, including if the visa application is rejected.</p>
                </div>
            </div>
            <div class="show-more">Is there an age criteria for applying UAE visa?
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
                <div class="more-section">
                <p>Yes, there is. Females below 30 years of age and males below 22 years of age need to apply for a UAE visit visa along with their father, mother or husband to avoid any chances of rejection.</p>
                </div>
            </div>
            <div class="show-more">How will I receive my UAE visa?
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
                <div class="more-section">
                <p>Your UAE visit visa or Dubai visa will be sent to the email address provided at the start of the application process.</p>
                </div>
            </div>
            <div class="show-more">When can I apply for UAE visa?
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
                <div class="more-section">
                <p>You can apply for your UAE visit visa (Emirates visa) anywhere between 60 to 5 working days prior to your travel date.</p>
                </div>
            </div>
            <a href="#" class="more-btn hvr-radial-out btn-light">Read More</a>
        </div>
    </div>
    <!-- end faq -->
</div>
 <?php include 'include/our-locations.php';?>
<?php include 'include/footer.php';?>
<?php include 'custom/visa-custom.php';?>
<?php include 'include/footer-bottom.php';?>