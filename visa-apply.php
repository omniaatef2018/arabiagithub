<?php include 'include/header.php';?>
<!-- start inner banner -->
<div class="inner-banenr visa-apply" style="background-image:url(<?php echo base_url('assets/'); ?>images/visa-banner.png)">
    <div class="container">
        <h1>30 Days Multiple Entry Visa
            <span>If 14 days is shorter, plan for 30 days stay with friends or families or meet your loved ones in UAE.</span></h1>
    </div>
</div>
<!-- end inner banner -->
<div class="checkout-page visa-apply">
    <div class="container">
        <!-- start left side -->
        <div class="left-side">
            <div class="breadcrumb-tour">
                <ul>
                    <li><a href="#">United Arab Emirates</a></li>
                    <li><a href="#">Dubai</a></li>
                </ul>
            </div>
            <div class="top-heading">
                <h2>Application Form - 30 Days Visa</h2>
                <p>We know this can be a time-consuming process, but we've minimized the amount of information you need to provide to reflect the UAE Immigration requirements.
                    The visa validity will be 58 days from the date of issue but stay should be no more than 30 days from the date of entry in UAE.
                </p>
            </div>
            <div class="step1">
                <div class="main-outer">
                    <h1><span>1</span> Application
                        <label class="custom-check"> 
                             Lead person
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                        </label>
                    </h1>
                    <hr/>
                </div>
                <div class="travel-info">
                    <form method="post"  class="was-validated"  action="<?php echo base_url('activity/guest'); ?>">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="outer-secx">
                                    <label>Title<b>*</b></label>
                                    <select name="title" class="info-title" required>
                                        <option value=""> choose </option>
                                        <option value="Mr."> Mr</option>
                                        <option value="Mrs."> Mrs</option>
                                        <option value="Miss"> Miss</option>
                                        <option value="Ms."> Ms</option>
                                        <option value="Dr."> Dr</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="outer-secx">
                                    <label>First Name<b>*</b></label>
                                    <input type="text" placeholder="Your First Name" name="first_name"
                                        value="<?php if(!empty($guest_details)){ echo $guest_details['first_name'];} ?>"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="outer-secx">
                                    <label>Last Name<b>*</b></label>
                                    <input type="text" placeholder="Your Last Name" name="last_name"
                                        value="<?php if(!empty($guest_details)){ echo $guest_details['last_name'];} ?>"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="outer-secx">
                                    <label>Email Address<b>*</b></label>
                                    <input type="email" placeholder="Voucher will be sent here, make sure it is correct"
                                        value="<?php if(!empty($guest_details)){ echo $guest_details['email'];} ?>"
                                        name="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="outer-secx">
                                    <label>Mobile<b>*</b></label>
                                    <input type="text" placeholder="Phone Number(In case of emergency)" name="mobile"
                                        value="<?php if(!empty($guest_details)){ echo $guest_details['mobile'];} ?>"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="outer-secx">
                                    <label>Nationality<b>*</b></label>
                                    <select name="nationality" class="country-list" required>
                                            <option value="">select</option>
                                            <option value="egypt">Egypt</option>
                                            <option value="dubai">Dubai</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="outer-secx">
                                    <label>Relation between Guarantor & Applicant<b>*</b></label>
                                    <select name="visa_status" class="country-list" required>
                                        <option value="">choose</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- start Traveler details section -->
                        <div class="clearfix"></div>
                        <div class="yellow-box">
                            <ul>
                                <li>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    The document was scanned or photographed on a dark, flat surface.</li>
                                <li>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    The document should appear flat, without any visible folds or creases.</li>
                                <li>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    Any words and numbers on the document should be clear and readable.</li>
                                <li>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    Photos should be sharp (not blurry), and without any glare.</li>
                                <li>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    Any documents that contain seals or photographs should be scanned in color so every element is visible and clear.</li>
                            </ul>
                        </div>
                        <!-- single item -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="upload-file">
                                    <p>Upload colored passport copy <span> * </span></p>
                                    <input type="file" class="dropify upload-input" data-height="140"  data-max-file-size="1M"  accept="image/*"  onchange="loadImageFile();"/>
                                </div>
                            </div>   
                            <div class="col-md-4">
                                <div class="upload-file">
                                    <p>Upload colored photograph <span> * </span></p>
                                    <input type="file" class="dropify upload-input" data-height="140" data-max-file-size="1M"  accept="image/*"  onchange="loadImageFile();"/>
                                </div>
                            </div>   
                            <div class="col-md-4">
                                <div class="upload-file">
                                    <p>Upload birth certificate <span> * </span></p>
                                    <input type="file" class="dropify upload-input" data-height="140" data-max-file-size="1M"  accept="image/*"  onchange="loadImageFile();"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- travel-info -->
            <div class="step1">
                <div class="main-outer">
                    <h1><span>2</span> Application
                    </h1>
                    <hr/>
                </div>
                <div class="travel-info">
                    <form method="post"  class="was-validated"  action="<?php echo base_url('activity/guest'); ?>">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="outer-secx">
                                    <label>Title<b>*</b></label>
                                    <select name="title" class="info-title" required>
                                        <option value=""> choose </option>
                                        <option value="Mr."> Mr</option>
                                        <option value="Mrs."> Mrs</option>
                                        <option value="Miss"> Miss</option>
                                        <option value="Ms."> Ms</option>
                                        <option value="Dr."> Dr</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="outer-secx">
                                    <label>First Name<b>*</b></label>
                                    <input type="text" placeholder="Your First Name" name="first_name"
                                        value="<?php if(!empty($guest_details)){ echo $guest_details['first_name'];} ?>"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="outer-secx">
                                    <label>Last Name<b>*</b></label>
                                    <input type="text" placeholder="Your Last Name" name="last_name"
                                        value="<?php if(!empty($guest_details)){ echo $guest_details['last_name'];} ?>"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="outer-secx">
                                    <label>Email Address<b>*</b></label>
                                    <input type="email" placeholder="Voucher will be sent here, make sure it is correct"
                                        value="<?php if(!empty($guest_details)){ echo $guest_details['email'];} ?>"
                                        name="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="outer-secx">
                                    <label>Mobile<b>*</b></label>
                                    <input type="text" placeholder="Phone Number(In case of emergency)" name="mobile"
                                        value="<?php if(!empty($guest_details)){ echo $guest_details['mobile'];} ?>"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="outer-secx">
                                    <label>Nationality<b>*</b></label>
                                    <select name="nationality" class="country-list" required>
                                            <option value="">select</option>
                                            <option value="egypt">Egypt</option>
                                            <option value="dubai">Dubai</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="outer-secx">
                                    <label>Relation between Guarantor & Applicant<b>*</b></label>
                                    <select name="visa_status" class="country-list" required>
                                        <option value="">choose</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- start Traveler details section -->
                        <div class="clearfix"></div>
                        <div class="yellow-box">
                            <ul>
                                <li>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    The document was scanned or photographed on a dark, flat surface.</li>
                                <li>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    The document should appear flat, without any visible folds or creases.</li>
                                <li>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    Any words and numbers on the document should be clear and readable.</li>
                                <li>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    Photos should be sharp (not blurry), and without any glare.</li>
                                <li>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    Any documents that contain seals or photographs should be scanned in color so every element is visible and clear.</li>
                            </ul>
                        </div>
                        <!-- single item -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="upload-file">
                                    <p>Upload colored passport copy <span> * </span></p>
                                    <input type="file" class="dropify" data-height="140"  data-max-file-size="1M"   accept="image/*"  onchange="loadImageFile();"/>
                                </div>
                            </div>   
                            <div class="col-md-4">
                                <div class="upload-file">
                                    <p>Upload colored photograph <span> * </span></p>
                                    <input type="file" class="dropify" data-height="140" data-max-file-size="1M"   accept="image/*"  onchange="loadImageFile();"/>
                                </div>
                            </div>   
                            <div class="col-md-4">
                                <div class="upload-file">
                                    <p>Upload birth certificate <span> * </span></p>
                                    <input type="file" class="dropify" data-height="140" data-max-file-size="1M"   accept="image/*"  onchange="loadImageFile();"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 payment-section">
                <div class="payment-section main-outer">
                    <p><i class="fa fa-lock"></i> Payments are secure and encrypted</p>
                </div>
                <div class="payment-type">
                    <div class="accordion-outer">
                        <div class="accordion-payment">
                            <input type='radio' id='DebitCredit' name='occupation' value='Working' required />
                            <label for="DebitCredit">Credit/Debit Card</label>
                            <div class="img-sec">
                                <img src="<?php echo base_url('assets/'); ?>images/pay-icon.png" alt="pay-icon"></div>
                        </div>
                        <div class="accordion-payment">
                            <input type='radio' id='paypal' name='occupation' value='Working' required />
                            <label for="paypal">PayPal</label>
                            <div class="img-sec">
                                <img src="<?php echo base_url('assets/'); ?>images/paypal.png" alt="paypal"></div>
                        </div>                    
                        <div class="accordion-payment">
                            <input type='radio' id='googlepay' name='occupation' value='Working' required />
                            <label for="googlepay">Google pay</label>
                            <div class="img-sec">
                                <img src="<?php echo base_url('assets/'); ?>images/googlepay.svg" alt="googlepay"></div>
                        </div>
                    </div><!-- accordion-outer -->
                </div>
            </div>
            <!-- Payment Type -->
           
        </div>
        <!--end left-side -->
        <!--end right-side -->
        <div class="right-side">
            <div class="select-items">
                <div class="content-area">
                    <h5>Evening Desert Safari</h5>
                    <i class="fa fa-times" data-toggle="modal" data-target="#cancellation-confirm"></i>
                    <p>Shared Arabian Dunes Safari - Sharing without Dinner</p>

                    <div class="item-desc">
                        <img src="assets/images/date.png" alt="date image"/>
                        02 apr
                    </div>
                    <div class="row item">
                        <div class="col-6">
                           <img src="assets/images/user.png" alt="user image"/> 
                        </div>
                        <div class="col-6">
                            <span class="float-right">AED 700</span>
                        </div>
                    </div> 
                   <div class="row item">
                        <div class="left-data-item col-6">
                           total
                        </div>
                        <div class="right-data-item col-6">
                            <span class="float-right">AED 700</span>
                        </div>
                    </div>
                    <hr style="background-color:#e3e4e7"/>
                </div>
                <!-- total amount -->
                <div class="total-amout">
                    <div class="price">
                        <p>Total (2 items)<b>AED 2,000</b></p>
                    </div>
                </div>
            </div>
            <!-- select-items -->
            <!-- start data security -->
                <div class="clearfix"></div>
                <div class="visa-information">
                    <div class="col-12">
                        <h3>Visa Information</h3>
                        <hr/>
                        <ol>
                            <li><b>
                                <i class="fa fa-square" aria-hidden="true"></i>
                                 Type of Visa : </b> <p>30 Days Visa - Single</p> </li>
                            <li><b>
                                <i class="fa fa-square" aria-hidden="true"></i>
                                 Visa Fee :    </b>  <p>AED 525 / person</p> </li>
                            <li><b><i class="fa fa-square" aria-hidden="true"></i>
                                 Visa Validity: </b> <p>60 days from the date of issue</p> </li>
                            <li><b><i class="fa fa-square" aria-hidden="true"></i>
                                 Stay Validity: </b> <p>30 days from the date of entry</p> </li>
                            <li><b><i class="fa fa-square" aria-hidden="true"></i>
                                 Processing Time:</b> <p>03 - 05 working day</p> </li>
                        </ol>
                    </div>
                </div>
                <div class="data-security">
                    <div class="col-12">
                        <h5>
                            <img src="assets/images/lock.svg" alt="lock image"/>
                            Data Security</h5>
                        <hr/>
                        <p>Our info's safe with us. All data is encrypted and transmitted securely with an SSL protocol.</p>
                    </div>
                </div>
            <!-- end data security -->
            <!-- start Book with confidence -->
                <div class="book-with-confidence">
                    <div class="col-12">
                        <h5>Book with confidence</h5>
                        <hr/>
                        <div class="row">
                            <div class="col-12">
                                <i class="fa fa-check"></i>
                                <p>Best price guarantee. Found your activity for less? We'll refund the difference.</p>
                             </div>
                        </div>                     
                        <div class="row">
                            <div class="col-12">
                                <i class="fa fa-check"></i>
                                <p>Peace of mind. Book ahead to skip the lines and reserve your spot.</p>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- end Book with confidence -->
        </div>
        <!-- right-side -->
            <div class="ftr-sec">
                <div class="row">
                    <div class="col-12">
                        <label class="custom-check">Don’t send promotional emails.
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>               
                <p>By ticking the box, you won’t receive marketing emails. You can<br/> subscribe at any time. For more information, read our<a target="_blank" href="<?php echo base_url('terms'); ?>"> privacy policy.</a>
                </p>
            </div>
            <div class="clearfix"></div>
            <!-- start total section -->
            <div class="total-price-checkout">
                <div class="save-btn col-sm-6">
                    <input type="submit" value="Proceed to Payment" class="sub-btn more-btn hvr-radial-out" name="sub-btn">
                </div>
                <div class="row note col-12">
                    <p>By proceeding, you confirm that you accept our<a href="#"> general terms</a> and <a href="#">privacy policy</a>.</p>
                </div>
            </div>
            <!-- end total section -->
            <div class="blue-section">
                <p>
                    <b>Disclaimer: </b>
                        Please be informed that the role of Arabia Horizons Tours LLC is limited to application submission only. We are a private agency, not affiliated with the Government of Dubai. Visa Approval / Rejection is under the sole discretion of UAE immigration authorities.
                </p>
            </div>
    </div>
</div><!-- checkout-page -->
<?php include 'include/footer.php';?>
<!-- start cancellation modal -->
<div class="modal fade" id="cancellation-confirm" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
       Are you sure to delete ?
      </div>
      <div class="modal-footer">
          <div class="col-12 row">
              <div class="col-6">
                <button type="button" class="col-12 btn btn-danger" data-dismiss="modal">Yes</button>
             </div>
             <div class="col-6">
                <button type="button" class="col-12 btn btn-info"  data-dismiss="modal">Cancel</button>
             </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end cancellation modal -->
<?php include 'custom/visa-apply-custom.php';?>
<?php include 'include/footer-bottom.php';?>