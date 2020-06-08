<?php include 'include/header.php';?>

<div class="home landing-page">
    <!-- start home banner -->
    <div class="home-banner"
        style="background-image:url(<?php echo base_url('assets/'); ?>images/landing-page-background.jpg);">
        <div class="container">
            <div class="total-content">
                <div class="outer-box">
                    <div class="left-section">
                        <h1>Dubai Desert Safari</h1>
                        <div class="tab-section">
                            <div id="parentHorizontalTab">
                                <ul class="resp-tabs-list hor_1">
                                    <li>
                                        <div class="flight"></div><span>Things To Do</span>
                                    </li>
                                </ul>
                                <div class="resp-tabs-container hor_1">
                                    <!-- Activities Tab -->
                                    <?php include 'include/search-tabs/tab-activities.php';?>
                                </div><!-- resp-tabs-container -->
                            </div>
                        </div><!-- tab-section -->
                    </div><!-- left-section -->
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- end home-banner -->
    <div class="container">
        <!-- start stickey filter -->
        <div class="StickyFiltterTop">
            <div class="StickyFiltter">
                <ul class="menu-slider">
                    <li>
                        <a href="<?php echo base_url('category.php'); ?>" target="_blank">
                            <img src="<?php echo base_url('assets/images/All_categories.png'); ?>"
                                alt="All categries" />All Activities <br /> or Attractions
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('category.php'); ?>" target="_blank">
                            <img src="<?php echo base_url('assets/images/ico/Desert_Safari.png'); ?>"
                                alt="Desert_Safari" />Desert Safari
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('category.php'); ?>" target="_blank">
                            <img src="<?php echo base_url('assets/images/ico/Sightseeing.png'); ?>"
                                alt="Sightseeing" />Sightseeing
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('category.php'); ?>" target="_blank">
                            <img src="<?php echo base_url('assets/images/ico/Adventure.png'); ?>" alt="Adventure" />
                            Adventure</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('category.php'); ?>" target="_blank">
                            <img src="<?php echo base_url('assets/images/ico/Attractions_amp.png'); ?>"
                                alt="Attractions_amp" />Attractions & <br /> Experiences
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('category.php'); ?>" target="_blank">
                            <img src="<?php echo base_url('assets/images/ico/Cruising_amp.png'); ?>"
                                alt="Cruising_amp" />Cruising & Yachting
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('category.php'); ?>" target="_blank">
                            <img src="<?php echo base_url('assets/images/ico/Transportation.png'); ?>"
                                alt="Transportation" />Transportation
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end sticky filter -->
        <!-- start best value section -->
        <div class="best-value">
            <div class="container">
                <h2>Best Value</h2>
                <div class="row">
                    <!-- start card -->
                    <a href="#">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-sm-3 image-box">
                                    <img src="assets/images/hotels/main-image.jpg" class="card-img" alt="main image">
                                    <div class="offer-sec">
                                        <span>35% OFF</span>
                                    </div>
                                    <div class="most-sell-out">
                                        <p>Most like to sell out</p>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-9">
                                                <h3 class="card-title">Dune Buggy Safari</h3>
                                            </div>
                                            <div class="col-3 fav-iocn">
                                                <span>
                                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="review">
                                            <span><i class="fa fa-star"></i>4.9</span>
                                            <p>304 Reviews | 50K+ Booked</p>
                                        </div>
                                        <p class="card-text">
                                            The dune buggy safari is a truly exciting tour of the Arabian Desert while riding a
                                            dune buggy. The experience is an opportunity to fly over high sand dunes along the
                                            extraordinary desert terrain.
                                        </p>
                                        <div class="row">
                                            <div class="col-sm-8 col-12">
                                                <p class="duration">
                                                    <span class="text-muted">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span>Duration</span>: 2 - 4 Hours
                                                    </span>
                                                    <br />
                                                    <br />
                                                    <span class="badge badge-success">Instant confirmations</span>
                                                    <span class="badge badge-warning">Best seller</span>
                                                </p>
                                            </div>
                                            <div class="col-sm-4 col-12">
                                                <div class="price">
                                                    <span>from</span>
                                                    <p>AED 485</p>
                                                    <del>AED 45</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-8">
                                                <div class="cancellation">
                                                    <p>Free cancellation up to 24 hours in advance </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-4">
                                                <div class="available">
                                                    <p>Available Tomorrow</p>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="tooltips-section  d-none d-lg-block">
                                            <img src="assets/images/bus.svg" alt="Hotel Pick Up" data-toggle="tooltip"
                                                data-placement="top" title="Hotel Pick Up" /> <img src="assets/images/group.svg"
                                                alt=" Join in Group" data-toggle="tooltip" data-placement="top"
                                                title=" Join in Group" />
                                            <img src="assets/images/duration.svg" alt="duration" data-toggle="tooltip"
                                                data-placement="top" title="Duration" /> <img src="assets/images/mobile.svg"
                                                alt="Present Mobile or Printed Voucher" data-toggle="tooltip"
                                                data-placement="top" title="Present Mobile or Printed Voucher" />
                                            <img src="assets/images/language.svg" alt="language" data-toggle="tooltip"
                                                data-placement="top" title="Language" />
                                        </div>
                                    </div>
                                </div>
                                <div class="tooltips-section  d-lg-none">
                                    <img src="assets/images/bus.svg" alt="Hotel Pick Up" data-toggle="tooltip"
                                        data-placement="top" title="Hotel Pick Up" /> <img src="assets/images/group.svg"
                                        alt=" Join in Group" data-toggle="tooltip" data-placement="top"
                                        title=" Join in Group" />
                                    <img src="assets/images/duration.svg" alt="duration" data-toggle="tooltip"
                                        data-placement="top" title="Duration" /> <img src="assets/images/mobile.svg"
                                        alt="Present Mobile or Printed Voucher" data-toggle="tooltip" data-placement="top"
                                        title="Present Mobile or Printed Voucher" />
                                    <img src="assets/images/language.svg" alt="language" data-toggle="tooltip"
                                        data-placement="top" title="Language" />
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- end card -->
                </div>
            </div>
        </div>
        <!-- end best value section -->
        <!-- start popular things section -->
        <div class="row">
            <div class="container">
                <h2>Popular Desert Safaris in Dubai</h2>
                <!-- start card -->
                <a href="#">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-sm-3 image-box">
                                <img src="assets/images/hotels/main-image.jpg" class="card-img" alt="main image">
                                <div class="most-sell-out">
                                    <p>Most like to sell out</p>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <h3 class="card-title">Dune Buggy Safari</h3>
                                        </div>
                                        <div class="col-3 fav-iocn">
                                            <span>
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="review">
                                        <span><i class="fa fa-star"></i>4.9</span>
                                        <p>304 Reviews | 50K+ Booked</p>
                                    </div>
                                    <p class="card-text">
                                        The dune buggy safari is a truly exciting tour of the Arabian Desert while riding a dune
                                        buggy. The experience is an opportunity to fly over high sand dunes along the
                                        extraordinary desert terrain.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-8 col-12">
                                            <p class="duration">
                                                <span class="text-muted">
                                                    <i class="fa fa-clock-o"></i>
                                                    <span>Duration</span>: 2 - 4 Hours
                                                </span>
                                                <br />
                                                <br />
                                                <span class="badge badge-success">Instant confirmations</span>
                                                <span class="badge badge-warning">Best seller</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-4 col-12">
                                            <div class="price">
                                                <span>from</span>
                                                <p>AED 485</p>
                                                <del>AED 45</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-8">
                                            <div class="cancellation">
                                                <p>Free cancellation up to 24 hours in advance </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-4">
                                            <div class="available">
                                                <p>Available Tomorrow</p>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="tooltips-section  d-none d-lg-block">
                                        <img src="assets/images/bus.svg" alt="Hotel Pick Up" data-toggle="tooltip"
                                            data-placement="top" title="Hotel Pick Up">
                                        <img src="assets/images/group.svg" alt=" Join in Group" data-toggle="tooltip"
                                            data-placement="top" title=" Join in Group" />
                                        <img src="assets/images/duration.svg" alt="duration" data-toggle="tooltip"
                                            data-placement="top" title="Duration" /> <img src="assets/images/mobile.svg"
                                            alt="Present Mobile or Printed Voucher" data-toggle="tooltip" data-placement="top"
                                            title="Present Mobile or Printed Voucher" />
                                        <img src="assets/images/language.svg" alt="language" data-toggle="tooltip"
                                            data-placement="top" title="Language" />
                                    </div>
                                </div>
                            </div>
                            <div class="tooltips-section d-lg-none">
                                <img src="assets/images/bus.svg" alt="Hotel Pick Up" data-toggle="tooltip" data-placement="top"
                                    title="Hotel Pick Up">
                                <img src="assets/images/group.svg" alt=" Join in Group" data-toggle="tooltip"
                                    data-placement="top" title=" Join in Group" />
                                <img src="assets/images/duration.svg" alt="duration" data-toggle="tooltip" data-placement="top"
                                    title="Duration" /> <img src="assets/images/mobile.svg"
                                    alt="Present Mobile or Printed Voucher" data-toggle="tooltip" data-placement="top"
                                    title="Present Mobile or Printed Voucher" />
                                <img src="assets/images/language.svg" alt="language" data-toggle="tooltip" data-placement="top"
                                    title="Language" />
                            </div>
                        </div>
                    </div>
                </a>
                <!-- end card -->
                <!-- start card -->
                <a href="#">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-sm-3 image-box">
                                <img src="assets/images/hotels/main-image.jpg" class="card-img" alt="main image">
                                <div class="most-sell-out">
                                    <p>Most like to sell out</p>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <h3 class="card-title">Dune Buggy Safari</h3>
                                        </div>
                                        <div class="col-3 fav-iocn">
                                            <span>
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="review">
                                        <span><i class="fa fa-star"></i>4.9</span>
                                        <p>304 Reviews | 50K+ Booked</p>
                                    </div>
                                    <p class="card-text">
                                        The dune buggy safari is a truly exciting tour of the Arabian Desert while riding a dune
                                        buggy. The experience is an opportunity to fly over high sand dunes along the
                                        extraordinary desert terrain.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-8 col-12">
                                            <p class="duration">
                                                <span class="text-muted">
                                                    <i class="fa fa-clock-o"></i>
                                                    <span>Duration</span>: 2 - 4 Hours
                                                </span>
                                                <br />
                                                <br />
                                                <span class="badge badge-success">Instant confirmations</span>
                                                <span class="badge badge-warning">Best seller</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-4 col-12">
                                            <div class="price">
                                                <span>from</span>
                                                <p>AED 485</p>
                                                <del>AED 45</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-8">
                                            <div class="cancellation">
                                                <p>Free cancellation up to 24 hours in advance </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-4">
                                            <div class="available">
                                                <p>Available Tomorrow</p>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="tooltips-section d-none d-lg-block">
                                        <img src="assets/images/bus.svg" alt="Hotel Pick Up" data-toggle="tooltip"
                                            data-placement="top" title="Hotel Pick Up" /> <img src="assets/images/group.svg"
                                            alt=" Join in Group" data-toggle="tooltip" data-placement="top"
                                            title=" Join in Group" />
                                        <img src="assets/images/duration.svg" alt="duration" data-toggle="tooltip"
                                            data-placement="top" title="Duration" /> <img src="assets/images/mobile.svg"
                                            alt="Present Mobile or Printed Voucher" data-toggle="tooltip" data-placement="top"
                                            title="Present Mobile or Printed Voucher" />
                                        <img src="assets/images/language.svg" alt="language" data-toggle="tooltip"
                                            data-placement="top" title="Language" />
                                    </div>
                                </div>
                            </div>
                            <div class="tooltips-section d-lg-none">
                                <img src="assets/images/bus.svg" alt="Hotel Pick Up" data-toggle="tooltip" data-placement="top"
                                    title="Hotel Pick Up" /> <img src="assets/images/group.svg" alt=" Join in Group"
                                    data-toggle="tooltip" data-placement="top" title=" Join in Group" />
                                <img src="assets/images/duration.svg" alt="duration" data-toggle="tooltip" data-placement="top"
                                    title="Duration" /> <img src="assets/images/mobile.svg"
                                    alt="Present Mobile or Printed Voucher" data-toggle="tooltip" data-placement="top"
                                    title="Present Mobile or Printed Voucher" />
                                <img src="assets/images/language.svg" alt="language" data-toggle="tooltip" data-placement="top"
                                    title="Language" />
                            </div>
                        </div>
                    </div>
                </a>
             </div>
                <!-- end card -->
                <a href="#" class="more-btn hvr-radial-out btn-light">View all Desert Safaris in Dubai</a>
        </div>
        <!-- end popular things section -->
    </div>
    <!-- start banner section -->
    <div class="banner">
        <div class="row">
            <div class="left-section">
                <h4>Dubai</h4>
                <a href="#" class="btn hvr-radial-out btn-light">See all 113 tours</a>
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">
                        <b>Language</b>
                        <p>Arabic</p>
                    </li>
                    <li class="list-group-item">
                        <b>Currency</b>
                        <p>U.A.E Dirham<br />
                            1AED = 1.00AED</p>
                    </li>
                    <li class="list-group-item">
                        <b>Time Zone</b>
                        <p>GMT +04:00<br />
                            2 hours ahead</p>
                    </li>
                    <li class="list-group-item">
                        <b>Country Code</b>
                        <p>+971</p>
                    </li>
                </ul>
                <div class="mobile-list">
                    <div class="row">
                        <div class="col-6">
                            <div class="text-right list-group-item">
                                <b>Language</b>
                                <p class="text-right">Arabic</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="list-group-item">
                                <b>Currency</b>
                                <p>U.A.E Dirham<br />
                                    1AED = 1.00AED</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right list-group-item">
                                <b>Time Zone</b>
                                <p class="text-right">GMT +04:00<br />
                                    2 hours ahead</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="list-group-item">
                                <b>Country Code</b>
                                <p>+971</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-section">
                <img src="assets/images/banner.png" alt="banner image" />
            </div>
        </div>
    </div>
    <!-- end banner section -->
    <!-- start blog section -->
    <!-- end blog section -->
    <div class="blog-section">
            <div class="container">
                <h2>Choosing the Perfect Dubai Desert Safari</h2>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="left-section">
                            <img src="assets/images/blog-landing.png" alt="blog image" />
                            <div class="data-bottom">
                                <h4>1. wildlife</h4>
                                <p>
                                    With gazelles, wildcats, monitor lizards to be seen, the Dubai desert can match any
                                    savannah for wildlife sightings. Try a falconry experience for the ultimate in animal
                                    close-ups.
                                </p>
                                <a href="#">Read more</a>
                            </div>
                     </div>
                    </div>
                     <div class="col-lg-6 col-12">
                        <div class="right-section">
                            <div class="card">
                                <div class="row no-gutters">
                                    <div class="col-lg-4 col-sm-3 col-12">
                                        <img src="assets/images/blog-landing.png" alt="blog image" />
                                    </div>
                                    <div class="col-lg-8 col-sm-9 col-12">
                                        <div class="card-body">
                                            <h5 class="card-title">1. wildlife</h5>
                                            <p class="card-text"> With gazelles, wildcats, monitor lizards to be seen,
                                                the Dubai desert can match any savannah for wildlife sightings. Try a
                                                falconry experience for the ultimate in animal close-ups.</p>
                                            <a href="#">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="card">
                                    <div class="row no-gutters">
                                        <div class="col-lg-4 col-sm-3  col-12">
                                            <img src="assets/images/blog-landing.png" alt="blog image" />
                                        </div>
                                        <div class="col-lg-8 col-sm-9  col-12">
                                            <div class="card-body">
                                                <h5 class="card-title">1. wildlife</h5>
                                                <p class="card-text"> With gazelles, wildcats, monitor lizards to be
                                                    seen, the Dubai desert can match any savannah for wildlife
                                                    sightings. Try a falconry experience for the ultimate in animal
                                                    close-ups.</p>
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="card">
                                        <div class="row no-gutters">
                                            <div class="col-lg-4 col-sm-3  col-12">
                                                <img src="assets/images/blog-landing.png" alt="blog image" />
                                            </div>
                                            <div class="col-lg-8 col-sm-9  col-12">
                                                <div class="card-body">
                                                    <h5 class="card-title">1. wildlife</h5>
                                                    <p class="card-text"> With gazelles, wildcats, monitor lizards to be
                                                        seen, the Dubai desert can match any savannah for wildlife
                                                        sightings. Try a falconry experience for the ultimate in animal
                                                        close-ups.</p>
                                                    <a href="#">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start trip advisor -->
    <div class="trip-advisor">
        <div class="container">
            <h2>TripAdvisor Reviews</h2>
            <div class="row">
                <div class="rank-section">
                    <img src="assets/images/trip-advisor-logo.png" alt="trip advisor logo">
                    <div class="orange-section">
                        <h4>#11 </h4>
                        <p> 1,113 Outdoor Activities in Dubai</p>
                        <p>828 reviews</p>
                    </div>
                    <div class="progress-section">
                        <div class="row">
                            <div class="col-4">
                                <p>Excellent</p>
                            </div>
                            <div class="col-6">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 90%"
                                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-2">
                                <span>167</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <p>Very Good</p>
                            </div>
                            <div class="col-6">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-2">
                                <span>8</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <p>Average</p>
                            </div>
                            <div class="col-6">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 3%" aria-valuenow="3"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-2">
                                <span>0</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <p>Poor</p>
                            </div>
                            <div class="col-6">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 3%" aria-valuenow="3"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-2">
                                <span>0</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <p>Terrible</p>
                            </div>
                            <div class="col-6">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 3%" aria-valuenow="3"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-2">
                                <span>0</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="customer-review">
                    <div class="review-box">
                        <div class="user-img"><img class="lazy" src="assets/images/Image218.png" alt="Stephen">
                        </div>
                        <div class="content-sec">
                            <div class="rating-box">
                                <div class="ratings">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:100%"></div>
                                </div>
                            </div>
                            <h6>Frans Ahokas<span> 11 March, 2019</span></h6>
                            <p>The view is amazing, staff well organized, it is expensive but it worthy....</p>
                        </div>
                    </div>
                    <div class="review-box">
                        <div class="user-img"><img class="lazy" src="assets/images/Image218.png" alt="Stephen">
                        </div>
                        <div class="content-sec">
                            <div class="rating-box">
                                <div class="ratings">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:100%"></div>
                                </div>
                            </div>
                            <h6>Frans Ahokas<span> 11 March, 2019</span></h6>
                            <p>The view is amazing, staff well organized, it is expensive but it worthy....</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end trip advisor -->
    <!-- start planning your visit -->
    <div class="planning-your-visit">
        <div class="container">
            <h2>Planning Your Visit</h2>
            <div class="show-more">What is Dubai Desert Conservation Reserve?
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
                <div class="more-section">
                    <p>With Dubai's rapid expansion, the Dubai Desert Conservation Reserve was founded to protect
                        the natural landscape and endemic wildlife from overspill. It is located in the southeastern
                        corner of the Emirate of Dubai and covers 87 squared miles of land. Some safaris are allowed
                        to take you out to these pristine dunes.</p>
                </div>
            </div>
            <div class="show-more">How hot does it get?
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
                <div class="more-section">
                    <p>With Dubai's rapid expansion, the Dubai Desert Conservation Reserve was founded to protect
                        the natural landscape and endemic wildlife from overspill. It is located in the southeastern
                        corner of the Emirate of Dubai and covers 87 squared miles of land. Some safaris are allowed
                        to take you out to these pristine dunes.</p>
                </div>
            </div>
            <div class="show-more">Can you camp?
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
                <div class="more-section">
                    <p>With Dubai's rapid expansion, the Dubai Desert Conservation Reserve was founded to protect
                        the natural landscape and endemic wildlife from overspill. It is located in the southeastern
                        corner of the Emirate of Dubai and covers 87 squared miles of land. Some safaris are allowed
                        to take you out to these pristine dunes.</p>
                </div>
            </div>
            <div class="show-more">What is a desert safari?
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
                <div class="more-section">
                    <p>With Dubai's rapid expansion, the Dubai Desert Conservation Reserve was founded to protect
                        the natural landscape and endemic wildlife from overspill. It is located in the southeastern
                        corner of the Emirate of Dubai and covers 87 squared miles of land. Some safaris are allowed
                        to take you out to these pristine dunes.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end planning your visit -->
    <!-- start links might to help you -->
    <div class="links-help-you">
        <div class="container">
            <h2>Links Might To Help You</h2>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12">
                    <h3>Things to do in Dubai</h3>
                    <a href="#">Sightseeing</a>
                    <a href="#">Adventure</a>
                    <a href="#">Cruising & Yachting</a>
                    <a href="#">Attractions & Experiences</a>
                    <a href="#">Desert Safari</a>
                    <a href="#">Transportation</a>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <h3>Attractions in Dubai</h3>
                    <a href="#">Burj Khalifa</a>
                    <a href="#">Burj Khalifa Level 124</a>
                    <a href="#">Dubai Fountains</a>
                    <a href="#">Burj Khalifa Level 125</a>
                    <a href="#">The Palm Jumeirah</a>
                    <a href="#">Dubai Marina</a>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <h3>Other Links</h3>
                    <a href="#">UAE Visa</a>
                    <a href="#">Experience Dubai</a>
                    <a href="#">Corporate</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end links might to help you -->
    </div>
    <?php include 'include/footer.php';?>
    <?php include 'custom/activities-custom.php';?>
    <?php include 'include/footer-bottom.php';?>