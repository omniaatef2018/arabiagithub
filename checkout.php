<?php include 'include/header.php';?>
<div class="alert alert-warning">
        If your travel plans change, we offer last-minute cancellation on all bookings. Cancel up to 24 hours in advance for a full refund. <a href="#">Learn more. </a>
    <i class="fa fa-times"></i>
</div>
<div class="checkout-page">
    <div class="container">
        <!-- start left side -->
        <div class="left-side">
            <div class="alert-error">Payment Error will be here</div>
            <p class="cart-counter-wrap"> We'll hold your spot for <span id="cart-counter">
                    <span id="mnt">59</span> : <span id="sec">00</span></span> minutes</p>
            <div class="step1">
                <div class="main-outer">
                    <h1>step1 : Guest Details</h1>
                    <hr/>
                </div>
                <div class="travel-info">
                    <form method="post"  class="was-validated"  action="<?php echo base_url('activity/guest'); ?>">
                        <!-- start radio inputs -->
                        <!-- <div class="row">
                            <div class="col-4">
                                <div class="radio-form">
                                    <input type="radio" id="Tourist" name="clientType">
                                    <label for="Tourist">Tourist</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="radio-form">
                                    <input type="radio" id="Resident" name="clientType">
                                    <label for="Resident">Resident</label>
                                </div>
                            </div>
                        </div>   -->
                        <!-- end radio inputs -->
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
                                    <label>Visa Status<b>*</b></label>
                                    <select name="visa_status" class="country-list" required>
                                        <option value="">choose</option>
                                        <option value="Tourist"
                                            <?php if(!empty($guest_details)){ if($guest_details['visa_status']=="Tourist"){echo 'selected';}} ?>>
                                            Tourist</option>
                                        <option value="GCC Resident"
                                            <?php if(!empty($guest_details)){ if($guest_details['visa_status']=="GCC Resident"){echo 'selected';}} ?>>
                                            GCC Resident</option>
                                        <option value="UAE Resident"
                                            <?php if(!empty($guest_details)){ if($guest_details['visa_status']=="UAE Resident"){echo 'selected';}} ?>>
                                            UAE Resident</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- start Traveler details section -->
                        <div class="clearfix"></div>
                        <hr style="background-color: #d2d2d2;">
                            <div class="traveler-details">
                                <h6>Traveler details</h6>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="traveler-form">
                                                <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="outer-secx">
                                                                <label>Title<b>*</b></label>
                                                                <select name="title" class="info-title" required="">
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
                                                                <input type="text" placeholder="Your First Name" name="first_name" value="" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="outer-secx">
                                                                <label>Last Name<b>*</b></label>
                                                                <input type="text" placeholder="Your Last Name" name="last_name" value="" required="">
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="outer-secx">
                                                            <label>Email Address<b>*</b></label>
                                                            <input type="email" placeholder="Voucher will be sent here, make sure it is correct" value="" name="email" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="outer-secx">
                                                            <label>Mobile<b>*</b></label>
                                                            <input type="text" placeholder="Phone Number(In case of emergency)" name="mobile" value="" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="outer-secx">
                                                            <label>Nationality<b>*</b></label>
                                                            <select name="nationality" class="country-list" required="">
                                                                    <option value="">select</option>
                                                                    <option value="egypt">Egypt</option>
                                                                    <option value="dubai">Dubai</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="outer-secx">
                                                            <label>Visa Status<b>*</b></label>
                                                            <select name="visa_status" class="country-list" required="">
                                                                <option value="">choose</option>
                                                                <option value="Tourist">
                                                                    Tourist</option>
                                                                <option value="GCC Resident">
                                                                    GCC Resident</option>
                                                                <option value="UAE Resident">
                                                                    UAE Resident</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <label class="custom-check">Same as billing details
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        <!-- end Traveler details section -->
                        <hr style="background-color: #d2d2d2;">
                        <div class="tour-location-box">
                            <div class="tour-location-title">
                                <h6>Evening Desert Safari</h6>
                                <p><i class="fa fa-bus"></i> Free transfer is included in this activity</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="outer-secx">
                                        <label>Pickup Location<b>*</b></label>
                                        <input type="text" placeholder="Provie your address in order to arrange transfer"
                                            value="" name="pickup_location[]" required>
                                        <input type="hidden" value="" name="tour_booking_id[]">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="outer-secx">
                                        <label>Note<b>*</b></label>
                                        <input type="text" placeholder="Let us know if you have any special requirements"
                                            name="note[]" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label class="custom-check same-pickup">Same Pick Up Location for all tourist
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr style="background-color: #d2d2d2;" class="last-line">
                        <!-- single item -->
                        <div class="tour-location-box last-section">
                            <div class="tour-location-title">
                                <h6>Dune Buggy Safari</h6>
                                <p><i class="fa fa-bus"></i> Free transfer is included in this activity</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="outer-secx">
                                        <label>Pickup Location<b>*</b></label>
                                        <input type="text" placeholder="Provie your address in order to arrange transfer"
                                            value="" name="pickup_location[]" required>
                                        <input type="hidden" value="" name="tour_booking_id[]">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="outer-secx">
                                        <label>Note<b>*</b></label>
                                        <input type="text" placeholder="Let us know if you have any special requirements"
                                            name="note[]" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single item -->
                    </form>
                </div>
            </div>
            <!-- travel-info -->
            <div class="col-12 payment-section">
                <div class="payment-section main-outer">
                    <h6>step 2 : Enter Payment Details</h6>
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
            <!-- <div class="ftr-sec">
                <div class="row">
                    <div class="col-12">
                        <label class="custom-check">Same as billing details
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>               
                <p>By ticking the box, you won’t receive marketing emails. You can<br/> subscribe at any time. For more information, read our<a target="_blank" href="<?php echo base_url('terms'); ?>"> privacy policy.</a>
                </p>
            </div> -->
            <div class="clearfix"></div>
            <!-- start total section -->
            <!-- <div class="total-price-checkout">
                <div class="save-btn col-sm-6">
                    <input type="submit" disabled value="Proceed to Payment" class="sub-btn more-btn hvr-radial-out" name="sub-btn">
                </div>
                <div class="row note col-12">
                    <p>By proceeding, you confirm that you accept our<a href="#"> general terms</a> and <a href="#">privacy policy</a>.</p>
                </div>
            </div> -->
            <!-- end total section -->
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
                <div class="content-area">
                    <h5>Evening Desert Safari</h5>
                    <i class="fa fa-times"  data-toggle="modal" data-target="#cancellation-confirm"></i>
                    <p>Shared Arabian Dunes Safari - Sharing without Dinner</p>

                    <div class="item-desc">
                        <img src="assets/images/date.png" alt="date image"/>
                        02 apr
                    </div>
                    <div class="row item">
                        <div class="col-6">
                           <img src="assets/images/user.png" alt="user image"/> 
                           334
                        </div>
                        <div class="col-6">
                            <span class="float-right">AED 700</span>
                        </div>
                    </div> 
                   <div class="row item">
                        <div class="col-6">
                           total
                        </div>
                        <div class="col-6">
                            <span class="float-right">AED 700</span>
                        </div>
                    </div>
                    <hr style="background-color:#e3e4e7"/>
                </div>
                <div class="clearfix"></div>
                <div class="col-12">
                    <div class="toggle-div">
                        <div class="image">
                            <img src="assets/images/small-offer.png" alt="promo code">
                        </div>
                        <span>Enter gift or promo code.</span>
                    </div>
                    <div class="input-promo-code">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter promo code">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Send</button>
                            </div>
                        </div>
                    </div>
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
                        <label class="custom-check">Same as billing details
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
                    <input type="submit" disabled value="Proceed to Payment" class="sub-btn more-btn hvr-radial-out" name="sub-btn">
                </div>
                <div class="row note col-12">
                    <p>By proceeding, you confirm that you accept our<a href="#"> general terms</a> and <a href="#">privacy policy</a>.</p>
                </div>
            </div>
            <!-- end total section -->
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
<?php include 'custom/checkout-custom.php';?>
<?php include 'include/footer-bottom.php';?>