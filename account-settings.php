<?php include 'include/header.php';?>
<div class="account-settings">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">
                    <img src="assets/images/user.png" alt="profile" class="nav-icon"> Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="WishList-tab" data-toggle="tab" href="#WishList" role="tab" aria-controls="WishList" aria-selected="false">
                    <img src="assets/images/heart.png" alt="wishlist" class="nav-icon">
                    WishList</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#History" role="tab" aria-controls="History" aria-selected="false">
                    <img src="assets/images/history.png" alt="history icon" class="nav-icon">    
                    History</a>
            </li>            
            <li class="nav-item">
                <a class="nav-link" id="Bookings-tab" data-toggle="tab" href="#Bookings" role="tab" aria-controls="Bookings" aria-selected="false">
                <img src="assets/images/booking.png" alt="booking icon" class="booking-icon">
                Bookings</a>
            </li>            
            <li class="nav-item">
                <a class="nav-link" id="Promo-tab" data-toggle="tab" href="#Promo" role="tab" aria-controls="Promo" aria-selected="false">
                <img src="assets/images/promo-code-icon.png" alt="promo code icon" class="nav-icon">
                    Promo codes</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                profile
            </div>
            <div class="tab-pane fade" id="WishList" role="tabpanel" aria-labelledby="WishList-tab">
                WishList
            </div>
            <div class="tab-pane fade" id="History" role="tabpanel" aria-labelledby="History-tab">
                History
            </div>            
            <div class="tab-pane fade" id="Bookings" role="tabpanel" aria-labelledby="Bookings-tab">
                Bookings
            </div>            
            <div class="tab-pane fade" id="Promo" role="tabpanel" aria-labelledby="Promo-tab">
                <h3>My Promo Codes</h3>
                <span>3 item</span>
                <form>
                    <input type="text" placeholder="Please enter promo code" class="form-control"/>
                    <button type="submit">Redeem</button>
                </form>
                <div class="avaliable-bar">
                    <b>9j560mc2v</b>
                    <p>This promo code is <span> Avaliable </span> to 25/4/2020</p>
                    <img src="assets/images/help.png" alt="help icon" class="nav-icon">
                </div>                
                <div class="used-bar">
                    <b>9j560mc2v</b>
                    <p>This promo code is <span> Used </span> to 25/4/2020</p>
                    <i class="fa fa-check"></i>
                </div>                
                <div class="Epired-bar">
                    <b>9j560mc2v</b>
                    <p>This promo code is <span> Epired </span> to 25/4/2020</p>
                    <i class="fa fa-times"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.php';?>
<?php include 'include/footer-bottom.php';?>