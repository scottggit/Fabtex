<?php
$page_title = "Home | Below Invoice";
include('include/html_head.php');
include('include/navbar.php');
?>
<div class="content">
    <section class="header hdr-grad hdr-grad-r pt-10">
        <div class="container pt-lg-5">
            <div class="row align-items-center py-5">
                <div class="col-lg-6 order-lg-2">
                    <div class="animate__animated" data-animate="slideInRight">
                        <img src="../dist/img/cars/lambo-1-lg.png" alt="Car" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 pe-xl-5">
                    <h1 class="display-2 mb-2 animate__animated" data-animate="slideInLeft">Your <span class="text-primary">Trusted</span></h1>
                    <h3 class="display5 text-bold ltr-spc-3 mb-5 animate__animated" data-animate="slideInLeft">Exotic & Luxury Auto Broker</h3>
                    <p class="p-indicator mb-5 animate__animated" data-animate="slideInLeft">Get your new car delivered to your home or office, without ever stepping foot in the dealership!</p>
                    <div class="d-md-flex justify-content-between">
                        <a href="#" class="my-2 me-2 btn btn-lg btn-primary animate__animated" data-animate="slideInLeft">Get Started</a>
                        <a href="#" class="my-2 me-2 btn btn-lg btn-white animate__animated" data-animate="slideInLeft">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center section-1 py-5 mt-10">
                <span class="animate_circle_border animate_circle_border-left animate_circle_border-secondary"></span>
                <span class="animate_circle_lg"></span>
                <div class="col-md-5 pe-lg-5 mb-5 mb-lg-0">
                    <img src="../dist/img/cars/lexus-1-lg.png" alt="Car" class="img-fluid animate__animated" data-animate="slideInRight">
                </div>
                <div class="col-md-7">
                    <div class="col-lg-10">
                        <div class="lg-n-container mb-5">
                            <span class="text-long animate__animated" data-animate="slideInRight">01</span>
                            <div class="lg-n-detail ps-4">
                                <h5 class="text-primary-light animate__animated" data-animate="slideInRight">We Are</h5>
                                <h3 class="display-5 text-primary animate__animated" data-animate="slideInRight">Below invoice</h3>
                                <h5 class=" animate__animated" data-animate="slideInRight">Your Luxury Auto Broker</h5>
                            </div>
                        </div>
                        <p class="p-indicator text-small animate__animated" data-animate="slideInRight">At Below Invoice, we streamline your luxury vehicle acquisition process by providing a comprehensive set of services including locating your desired vehicle, negotiating the optimal price and finance or lease options, and coordinating the delivery of your desired vehicle to the location of your choice.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-2 py-5 mb-5">
        <span class="animate_circle_border animate_circle_border-left-out animate_circle_border-secondary"></span>
        <span class="animate_circle_border animate_circle_border-right animate_circle_border-primary top-50"></span>
        <div class="container">
            <div class="d-sm-flex justify-content-between align-items-center mb-5">
                <div class="lg-n-container mb-5 mb-sm-0">
                    <span class="text-long animate__animated" data-animate="slideInUp">02</span>
                    <div class="lg-n-detail ps-4">
                        <h5 class="text-primary-light animate__animated" data-animate="slideInUp">Featured</h5>
                        <h3 class="display-5 text-primary animate__animated" data-animate="slideInUp">Lease Specials</h3>
                    </div>
                </div>
                <a href="#" class="btn btn-primary animate__animated" data-animate="slideInUp">Get Started</a>
            </div>
            <div class="row">
                <?php 
                    $rounded_cars = ['lambo-1-sm.png','car-1-sm.png','mercedes-2-sm.png','car-2-sm.png','car-3-sm.png','lexus-5-sm.png','lexus-3-sm.png','lexus-2-sm.png','lexus-1-sm.png','lexus-10-sm.png','lexus-9-sm.png','car-3-sm.png'];
                    foreach($rounded_cars as $car){
                        include('include/rounded_car.php'); 
                    }
                ?>
            </div>
        </div>
    </section>
    
    <section class="section-3 py-5 mb-5">
        <span class="animate_circle_border animate_circle_border-left-out animate_circle_border-primary"></span>
        <img src="../dist/img/rounded-cut.png" alt="Rounded Image" class="side-rounded-img">
        <div class="container">
            <div class="row align-items-lg-end">
                <div class="col-lg-4 mb-4">
                    <div class="lg-n-container mb-5">
                        <span class="text-long animate__animated" data-animate="slideInUp">03</span>
                        <div class="lg-n-detail ps-4">
                            <h5 class="display-5 mb-0 animate__animated" data-animate="slideInUp">WE <span class="text-primary">Process</span></h5>
                        </div>
                    </div>
                    <div class="c-card p-4 animate__animated" data-animate="slideInUp">
                        <div class="c-card_title-w-img mb-4">
                            <img src="../dist/img/icon-primary-marker.svg" alt="Icon Marker">
                            <div class="c-card-desc">
                                <h5 class="ps-3 mb-0">We <span class="text-primary">LOCATE</span></h5>
                            </div>
                        </div>
                        <p class="p-indicator text-smaller ltr-spc">If a vehicle is out there, we can find it. We specialize in locating and shipping cars from around the country to meet the exact vehicle specifications you’re looking for. Our established relationships with the premier dealerships across the nation, allow us to provide our customers with exclusive pricing for leases and purchases.</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="c-card p-4 animate__animated" data-animate="slideInUp">
                        <div class="c-card_title-w-img mb-4">
                            <img src="../dist/img/icon-primary-thumbsup.svg" alt="Icon Marker">
                            <div class="c-card-desc">
                                <h5 class="ps-3 mb-0">We <span class="text-primary">Negotiate</span></h5>
                            </div>
                        </div>
                        <p class="p-indicator text-smaller ltr-spc">Let us leverage our buying power and negotiating expertise to find you the car of your dreams at the best possible price. We go beyond finding you rebates and incentives, and look for additional ways to save you money on the back end and in financing. Our clients can be rest assured, knowing that we’ll remove all the hidden expenses that often get wrapped into your lease or purchase at a dealership. We find you every possible money-saving opportunity such as multiple security deposits, shop through multiple banks, and make sure no fees or interest rates have hidden dealership mark-ups.</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 order-rev">
                    <div class="c-card p-4 order-lg-2 animate__animated" data-animate="slideInUp">
                        <div class="c-card_title-w-img mb-4">
                            <img src="../dist/img/icon-primary-truck.svg" alt="Icon Marker">
                            <div class="c-card-desc">
                                <h5 class="ps-3 mb-0">We <span class="text-primary">Deliver</span></h5>
                            </div>
                        </div>
                        <p class="p-indicator text-smaller ltr-spc">We are proud to offer the ultimate car-buying concierge service to all our clients. If you’re in California and the car of your dreams is in New York, you won’t even need to lift a finger; let alone set foot in a dealership. After negotiating the best possible deal on your behalf, we will deliver your new vehicle to your home or office. We’ll go over all the documents with you and show you the key features of your new car.</p>
                    </div>
                    <div class="text-end my-5 order-lg-1 animate__animated" data-animate="slideInUp">
                        <a href="#" class="btn btn-white">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-4 py-5 mb-5 slick-w-custom-nav">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 pe-lg-4 pe-xl-5 mb-5 mb-lg-0 border-lg-end custom_nav_container">
                    <div class="lg-n-container">
                        <span class="text-long animate__animated" data-animate="slideInUp">04</span>
                        <div class="lg-n-detail ps-4">
                            <h5 class="text-primary-light animate__animated" data-animate="slideInUp">Brands</h5>
                        
                            <h5 class="display-5 mb-0 animate__animated" data-animate="slideInUp"><span class="text-primary">We Work With</span></h5>
                        </div>
                    </div>
                    <div class="custom_nav animate__animated" data-animate="slideInUp">
                        <span class="fake-prev"></span>
                        <span class="fake-next"></span>
                    </div>
                </div>
                <div class="col-lg-5 px-lg-5">
                    <p class="text-smaller mb-0 animate__animated" data-animate="slideInUp">Below Invoice focuses on Luxury and Exotic vehicles. From a Lexus to a Ferrari, we work to deliver our best price with minimal time investment on your end</p>
                </div>
            </div>
            <div class="animate__animated" data-animate="slideInUp">
                <div class="logo-img_carousel slick_shadow slick_trigger">
                    <?php 
                        $logos = ['audi.png', 'bmw.png', 'bugatti.png', 'ferrari.png', 'koenigsegg.png', 'lamborghini.png', 'lexus.png', 'mclaren.png', 'mercedes.png', 'pagani.png', 'porsche.png', 'rolls-royce.png', ];
                        foreach($logos as $logo){
                            include('include/logo_carousel.php'); 
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-5 py-5 mb-5 slick-w-custom-nav">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class=" custom_nav_container">
                    <div class="lg-n-container">
                        <span class="text-long animate__animated" data-animate="slideInUp">05</span>
                        <div class="lg-n-detail ps-4">
                            <h5 class="text-primary-light animate__animated" data-animate="slideInUp">What our clients say</h5>
                        
                            <h5 class="display-5 mb-0 animate__animated" data-animate="slideInUp"><span class="text-primary">About us</span></h5>
                        </div>
                    </div>
                    <div class="custom_nav animate__animated" data-animate="slideInUp">
                        <span class="fake-prev"></span>
                        <span class="fake-next"></span>
                    </div>
                </div>
            </div>
            <div class="animate__animated" data-animate="slideInUp">
                <div class="testimonial_slick slick_trigger">
                    <?php 
                        $testimonails = [
                            'brian.png' => 'Brian L.',
                            'ashley.png' => 'Ashley N.',
                            'stephan.png' => 'Stephan T.',
                            'brian1.png' => 'Brian L.',
                            'ashley1.png' => 'Ashley N.',
                        ];
                        foreach($testimonails as $testimonail_img => $testimonail_name){
                            include('include/home_testimonial.php'); 
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-6 py-5 mb-5 slick-w-custom-nav">
        <span class="animate_circle_border animate_circle_border-left animate_circle_border-secondary"></span>
        <div class="container">
            <div class="row">
                <div class="col-xl-2 order-xl-1 animate__animated" data-animate="slideInUp">
                    <div class="lg-n-container mb-xl-5">
                        <span class="text-long animate__animated" data-animate="slideInUp">06</span>
                        <div class="lg-n-detail ps-4">
                            <h5 class="text-primary-light animate__animated" data-animate="slideInUp">News from</h5>
                        
                            <h3 class="display-5 mb-0 animate__animated" data-animate="slideInUp"><span class="text-primary">Blogs</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1 order-xl-3 pb-4 pb-xl-0 animate__animated" data-animate="slideInUp">
                    <div class="custom_nav_container blogs_slick_nav justify-content-end justify-content-xl-between">
                        <div class="custom_nav flex-xl-column animate__animated" data-animate="slideInUp">
                            <span class="fake-prev me-xl-0 mb-xl-3"></span>
                            <span class="fake-next"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 order-xl-2 animate__animated" data-animate="slideInUp">
                    <div class="blog_list blog_slick slick_trigger">
                        <?php 
                            $blogs = [
                                'car_interior.png',
                                'car_on_road.png',
                                'car_rims.png',
                                'car_rims2.png',
                                'car_silver.png',
                                'car_yellow.png',
                            ];
                            foreach($blogs as $blog_img){
                                include('include/blog/blog_item.php'); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('include/contact_us.php'); ?>
</div>
<?php include('include/footer.php'); ?>
<?php include('include/footer_include_scripts.php'); ?>