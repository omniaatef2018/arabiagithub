<div class="newsletter">
  <div class="container">
    <div class="row">
      <!-- start left side -->
      <div class="col-lg-5 col-12">
        <div class="left-side">
          <h3>We've got amazing deals just for you</h3>
          <p>Sign up to access and get a weekly dose of travel inspiration </p>
        </div>
      </div>
      <!-- end left-side -->
      <!-- start right side -->
      <div class="col-lg-7 col-12">
        <div class="right-side">
          <ul class="ft-medias">
            <li><a target="_blank" href="#" rel="nofollow">
              <i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li><a target="_blank" href="#"  rel="nofollow">
              <i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li><a target="_blank" href="#"  rel="nofollow">
              <i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </li>
            <li><a target="_blank" href="#"  rel="nofollow">
              <i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
            </li>
            <li><a target="_blank" href="#"  rel="nofollow">
              <i class="fa fa-instagram" aria-hidden="true"></i></a>
            </li>
            <li><a target="_blank" href="#"  rel="nofollow">
              <i class="fa fa-youtube-play" aria-hidden="true"></i> 
            </a>
            </li>
          </ul>
          <div id="blogSub" class="nlt-form">
            <form method="post" action="#">
              <input type="email" placeholder="Email address" name="email" required>
              <input type="hidden" name="callback" value="">
              <input type="submit" value="Subscribe" class="sub-btn" name="sub-btn">
            </form>
          </div>
        </div>
      </div>
      <!-- end right-side -->
    </div>
  </div>
</div>
 <!-- newsletter -->
<footer class="footer  clearfix">
  <div class="container">
    <div class="footer-widget-outer clearfix">
      <div class="row">
        <div class="ft-logo-sec">
          <div class="ft-logo"><img class="lazy" src="<?php echo base_url('assets/images/logo.png'); ?>"
               alt="logo" /></div>
          <p>Payment Channels</p>
          <div class="payment-img"><img class="lazy"
              src="<?php echo base_url('assets/images/payment.jpg'); ?>"
              alt="payment" /></div>
        </div>
        <div class="ft-men-sec">
          <h6>About us</h6>
          <ul>
            <li><a href="<?php echo base_url('about.php'); ?>" target="_blank">About Us</a></li>
            <li><a target="_blank" href="https://blog.arabiahorizons.com">Our Blog</a></li>
            <li><a href="<?php echo base_url('career'); ?>" target="_blank">Careers</a></li>
            <li><a href="<?php echo base_url('contact'); ?>" target="_blank">Contact Us</a></li>
          </ul>
        </div>
        <div class="ft-men-sec">
          <h6>Services</h6>
          <ul>
            <li><a href="<?php echo base_url('things-to-do'); ?>" target="_blank">Things To Do</a></li>
            <li><a href="<?php echo base_url('uae-visa'); ?>" target="_blank">UAE Visa</a></li>
          </ul>
        </div>
        <div class="ft-men-sec">
          <h6>What we do</h6>
          <ul>
            <li><a href="<?php echo base_url('experience-dubai'); ?>" target="_blank">Experience Dubai</a></li>
            <li><a href="<?php echo base_url('corporate'); ?>" target="_blank">Corporate</a></li>
          </ul>
        </div>
        <div class="ft-men-sec">
          <h6>Terms of use</h6>
          <ul>
            <li><a href="<?php echo base_url('terms'); ?>" target="_blank">Terms And Conditions</a></li>
            <li><a href="<?php echo base_url('privacy'); ?>" target="_blank">Privacy Policy</a></li>
            <li><a href="<?php echo base_url('cookie'); ?>" target="_blank">Cookie Policy</a></li>
            <li><a href="<?php echo base_url('sitemap'); ?>" target="_blank">Site map</a></li>
          </ul>
        </div>
        <div class="ft-reviews-sec">
          <span><img class="lazy" src="<?php echo base_url('assets/images/google.svg'); ?>"
               alt="google" /></span>
          <span><img class="lazy" src="<?php echo base_url('assets/images/feefo.svg'); ?>"
               alt="feefo" /></span>
          <div class="rating">
            <p>4.9/5</p> <img class="lazy" src="<?php echo base_url('assets/images/Rating.svg'); ?>"
               alt="Rating" />
          </div>
          <p>8000+ verified reviews with 98% excellent score</p>
          <span><img src="<?php echo base_url('assets/images/green-security.svg'); ?>"
               alt="green-security" /></span>
          <span><img  src="<?php echo base_url('assets/images/expo.svg'); ?>"
               alt="Dubai Expo 2020" /></span>
          <span><img src="<?php echo base_url('assets/images/Dubai-Tourism.svg'); ?>"
               alt="Dubai Tourism" /></span>
        </div>
      </div>
    </div><!-- footer-widget-outer -->
    <div class="clearfix"></div>
    <div class="copy-right">
      <p>&copy; 2006-<?php echo date('Y'); ?> Arabia Horizons Tours LLC. All Rights Reserved.</p>
    </div>

  </div>
  <!-- start cookies confirm  -->
  <div class="cookies">
    <p>Arabia Horizons uses cookies to give you the best possible service. If you continue browsing, you agree to our use of cookies. More details can be found in our  <a href="#" target="_blank">privacy policy </a><i class="fa fa-times"></i></p>
   </div>
<!-- end cookies confirm  -->
</footer>
<!-- Login Popup -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Log In</h5>
      </div>
      <div class="modal-body">
      <form>
          <div class="form-group">
            <label>Email Address</label>
            <input type="email" class="form-control" placeholder="Email Adress">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control"  placeholder="Password">
          </div>
          <div class="form-group">
              <label class="custom-check">Remember me
                  <input type="checkbox">
                  <span class="checkmark"></span>
              </label>
              <div class="forget-password">
              <button type="button" class="forget-btn" data-toggle="modal" data-target="#Forget-modal">
                  Forgot password?
              </button>
              </div>
          </div>
          <button type="submit" class="signup-btn btn btn-primary">Log In</button>
            <div class="or-area">
              <span>or logIn with</span>
            </div>
          <div class="social-login clearfix">
            <a href="#" class="fb-link">
              <span class="social-icon"><img class="lazy" src="http://localhost/aht-website-front/assets/images/icon-facebook.svg" alt="facebook"></span>
              <span>Sign in with Facebook</span>
            </a>
            <a href="#" class="google-link">
              <span class="social-icon">
                <img class="lazy" src="http://localhost/aht-website-front/assets/images/icon-google.svg" alt="google"></span>
              <span>Sign in with Google</span>
            </a>
          </div>
      </form>
      </div>
      <div class="have-account">
          <button type="button" class="create-account-btn" data-toggle="modal" data-target="#signup-modal">
             Create Account
          </button>
          <p>Don’t have an account?</p>
      </div>
    </div>
  </div>
</div>
<!-- END Login Popup -->
<!-- start forget  Popup -->
<div class="modal fade" id="Forget-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Reset Password</h5>
      </div>
      <div class="modal-body">
        <p>Enter the email address used to send you a link to reset your password.</p>
      <form>
          <div class="form-group">
            <label>Email Address</label>
            <input type="email" class="form-control">
          </div>
          <button type="submit" class="signup-btn btn btn-primary">Reset Password</button>
      </form>
      </div>
      <div class="have-account">
          <button type="button" class="login-btn" data-toggle="modal" data-target="#login-modal">
            Back to sign in <i class="fa fa-angle-right"></i>
          </button>
      </div>
    </div>
  </div>
</div>
<!--end forget Popup -->
<!-- start register popup -->
<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sign Up</h5>
      </div>
      <div class="modal-body">
      <form>
          <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" placeholder="First Name">
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" placeholder="Last Name">
          </div>
          <div class="form-group">
            <label>Email Address</label>
            <input type="email" class="form-control"  placeholder="Email Address">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password">
          </div>
          <div class="form-group">
              <label class="custom-check">Yes! I would like to receive special offers.
                  <input type="checkbox">
                  <span class="checkmark"></span>
              </label>
          </div>
          <button type="submit" class="signup-btn btn btn-primary">Sign Up</button>
            <div class="or-area">
              <span>or SignUp with</span>
            </div>
          <div class="social-login clearfix">
            <a href="#" class="fb-link">
              <span class="social-icon"><img class="lazy" src="http://localhost/aht-website-front/assets/images/icon-facebook.svg" alt="facebook"></span>
              <span>Sign in with Facebook</span>
            </a>
            <a href="#" class="google-link">
              <span class="social-icon">
                <img class="lazy" src="http://localhost/aht-website-front/assets/images/icon-google.svg" alt="google"></span>
              <span>Sign in with Google</span>
            </a>
          </div>
      </form>
      </div>
      <div class="have-account">
          <p>Already have an account?</p>
          <button type="button" class="login-btn" data-toggle="modal" data-target="#login-modal">
            Log In
          </button>
      </div>
    </div>
  </div>
</div>
<!-- END Register Popup -->
<!-- Optional JavaScript -->
<script src="<?php echo base_url('assets/js/jquery-2.2.4.min.js'); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
<script src="<?php echo base_url('assets/js/slick.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/waypoints.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.counterup.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/easyResponsiveTabs.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/datepicker.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/dropify.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.aniview.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.sidr.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/sumoselect.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/simplebar.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

<script>
  var browserFlag = true;
  if (/Edge/.test(navigator.userAgent)) {
    browserFlag = false;
  }
  var ua = window.navigator.userAgent;
  var isIE = /MSIE|Trident/.test(ua);
  if (isIE) {
    browserFlag = false
  }
  if (browserFlag) {
    // loading smoothscrolling script for browsers other than IE & Edge
    // Get the first script element on the page
    var ref = document.getElementsByTagName('script')[0];
    // Create a new script element
    var script = document.createElement('script');
    // Set the script element `src`
    script.src = '<?php echo base_url('assets/'); ?>js/smoothscrolling.js';
    // Inject the script into the DOM
    ref.parentNode.insertBefore(script, ref);
  }
  $('#parentHorizontalTab').easyResponsiveTabs({
    type: 'default', //Types: default, vertical, accordion
    width: 'auto', //auto or any width like 600px
    fit: true, // 100% fit in a container
    tabidentify: 'hor_1', // The tab groups identifier
    activate: function (event) { // Callback function if tab is switched
      var $tab = $(this);
      var $info = $('#nested-tabInfo');
      var $name = $('span', $info);
      $name.text($tab.text());
      $info.show();
    }
  });
  $('#ChildVerticalTab_1').easyResponsiveTabs({
    type: 'vertical',
    width: 'auto',
    fit: true,
    tabidentify: 'ver_1', // The tab groups identifier
    activetab_bg: '#fff', // background color for active tabs in this group
    inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
    active_border_color: '#c1c1c1', // border color for active tabs heads in this group
    active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
  });

  $('#ChildVerticalTab_2').easyResponsiveTabs({
    type: 'vertical',
    width: 'auto',
    fit: true,
    tabidentify: 'ver_1', // The tab groups identifier
    activetab_bg: '#fff', // background color for active tabs in this group
    inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
    active_border_color: '#c1c1c1', // border color for active tabs heads in this group
    active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
  });
</script>
<script>
    var res = "";

    var verifyCallback = function (response) {
        res = response;
    };

    var resetResponse = function (response) {
        res = '';
    };

    function verifyForm() {
        if (res == "") {
            alert('Invalid Re-captcha answer');
        } else {
            $('#sub-contact').submit();
        }
    }

    var onloadCallback = function () {
        grecaptcha.render('contact_form', {
            'sitekey': '6LdMCckUAAAAAL9lhksyW9oYEZfZCtC6CGpfLQI-',
            'callback': verifyCallback,
            'expired-callback': resetResponse,
            'error-callback': resetResponse
        });
    };
</script>
<!-- start social contacts -->
<div class="social-contacts-wrapper">
    <div class="icons-section">
        <div class="container1">
          <div class="items">
            <img src="assets/images/messangerIcon.svg" alt="messangerIcon" class="messanger-Icon">
            </div>
            <div class="items">
            <img src="assets/images/whatsapp.svg" alt="whatsapp" class="whatsapp-Icon">

            </div>
            <div class="items">
            <img src="assets/images/phone-icon.svg" alt="phone-icon" class="phone-Icon">
            </div>
        </div>
    </div>
    <div class="links-section">
        <ul>
            <li>
                <a href="tel:+971565031294" rel="nofollow" target="_blank">
                    <div class="row">
                        <div class="col">
                                <img src="assets/images/phone-icon.svg" alt="phone"/>
                        </div>
                        <div class="col">Call us</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="http://m.me/arabiahorizons"  rel="nofollow" target="_blank"> 
                    <div class="row">
                        <div class="col">
                          <img src="assets/images/messangerIcon.svg" alt="messangerIcon"/>
                        </div>
                        <div class="col">Messanger</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://api.whatsapp.com/send?phone=+971565031294"  rel="nofollow" target="_blank"> 
                    <div class="row">
                        <div class="col">
                          <img src="assets/images/whatsapp.svg" alt="whatsapp"/>
                        </div>
                        <div class="col">Whatsapp</div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- end social contacts -->

