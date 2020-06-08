<?php include 'include/header.php';?>
<div class="support">
    <div class="top-banner">
        <img src="assets/images/support-blue.png" alt="support"/>
        <h1>Contact us</h1>
        <p>
            Any Question? Please Contact us, <br/>
            We're usually pretty quick
        </p>
    </div>
    <div class="container">
        <div class="bottom-data">
            <p><span>Arabia Horizons</span>
                team provides one-stop travel booking services in 9 <br/> languages through our shops, kiosks, website and mobile app.
            </p>
            <div class="row">
                <div class="col-sm-6">
                    <h2>For Reservations:</h2>
                    <p>
                    Tel: (+971-4) 294 6060 <br/><br/>
                    Tel: (+971-4) 388 2244 <br/><br/>
                    Mob: +971 (0) 50 540 2520 <br/><br/>
                    Mob: +971 (0) 55 797 4121
                    </p>
                </div>            
                <div class="col-sm-6">
                    <h2>For Corporate/Group bookings:</h2>
                    <p>
                    Mob: +971 (0) 52 971 7425 
                    </p>
                </div>
            </div>
            <form class="contact-form" id="sub-contact" method="post">
                <h2>Send us a Message</h2>
                <div class="form-group">
                    <label>First Name<span>*</span></label>
                    <input type="text" class="form-control" placeholder="Your First Name">
                </div>
                <div class="form-group">
                    <label>Email Address<span>*</span></label>
                    <input type="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Inquiry topic<span>*</span></label>
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mobile<span>*</span></label>
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Message<span>*</span></label>
                    <textarea cols="20"></textarea>
                </div>
                <div class="contact-recaptcha" id="contact_form"></div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
            <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async
                        defer>
            </script>
        </div>
    </div>
</div>
<?php include 'include/our-locations.php';?>
<?php include 'include/footer.php';?>
<?php include 'include/footer-bottom.php';?>