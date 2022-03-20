<?php 
    include 'includes/header.php'

?>
<style>
    section.home {
        background: url(https://preview.colorlib.com/theme/travelix/images/about_background.jpg.webp);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<link rel="stylesheet" href="./css/offers.css">

    <section class="home">
        <div class="background">
            <div class="inner">
                <h1>Our Offers</h1>
            </div>
        </div>
    </section>

    <section class="search">
        <div class="container">
            <ul>
                <li class="active">
                    <i class="fa fa-utensils"></i>
                    <h6>hotel</h6>
                </li>
                <li>
                    <i class="fa fa-car-side"></i>
                    <h6>car rentals</h6>
                </li>
                <li>
                    <i class="fa fa-plane-departure"></i>
                    <h6>Fligths</h6>
                </li>
                <li>
                    <i class="fa fa-suitcase-rolling"></i>
                    <h6>Trips</h6>
                </li>
                <li>
                    <i class="fa fa-anchor"></i>
                    <h6>Cruises</h6>
                </li>
                <li>
                    <i class="fa fa-hiking"></i>
                    <h6>Activities</h6>
                </li>
            </ul>
            <div class="all-input">
                <div>
                    <label for="">Destination</label>
                    <input type="text">
                </div>
                <div>
                    <label for="">Check in</label>
                    <input type="date">
                </div>
                <div>
                    <label for="">Check out</label>
                    <input type="date">
                </div>
                <div>
                    <label for="">Adults</label>
                    <select name="adult">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div>
                    <label for="">Children</label>
                    <select name="children">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <div class="extra-search">
                <div class="item">
                    <input type="checkbox" name="" id="extra-search-1">
                    <label for="extra-search-1">Car Parking</label>
                </div>
                <div class="item">
                    <input type="checkbox" name="" id="extra-search-2">
                    <label for="extra-search-2">Reservation</label>
                </div>
                <div class="item">
                    <input type="checkbox" name="" id="extra-search-3">
                    <label for="extra-search-3">Pool</label>
                </div>
                <div class="item">
                    <input type="checkbox" name="" id="extra-search-4">
                    <label for="extra-search-4">Wireless Internet</label>
                </div>
                <div class="item">
                    <input type="checkbox" name="" id="extra-search-5">
                    <label for="extra-search-5">Smooking Area</label>
                </div>
                <div class="item">
                    <input type="checkbox" name="" id="extra-search-6">
                    <label for="extra-search-6">Pet Garden</label>
                </div>
                <div class="item">
                    <input type="checkbox" name="" id="extra-search-7">
                    <label for="extra-search-7">whilechair Accesseblity</label>
                </div>
                <div class="item">
                    <input type="checkbox" name="" id="extra-search-8">
                    <label for="extra-search-8">Private Parking</label>
                </div>
            </div>
            <div class="more-options">
                <div class="trigger">
                    <p>Load More Options</p>
                </div>
                <ol>
                    <li>
                        <input type="checkbox" name="" id="more-option-1">
                        <label for="more-option-1">Pet Friendly</label>
                    </li>
                    <li>
                        <input type="checkbox" name="" id="more-option-2">
                        <label for="more-option-2">Car Parking</label>
                    </li>
                </ol>
            </div>
            <button class="btn-primary" type="submit">Search <span></span> </button>
        </div>
    </section>

    <section class="offer">
        <div class="container">
            <div class="dropdowns">
                <div class="dropdown">
                    <ul>
                        <li>Show All</li>
                        <li><i class="fa fa-chevron-down"></i></li>
                    </ul>
                    <div class="items">
                        <ol>
                            <li>Ascending</li>
                            <li>Descending</li>
                        </ol>
                    </div>
                </div>
                <div class="dropdown">
                    <ul>
                        <li>Alphabetic</li>
                        <li><i class="fa fa-chevron-down"></i></li>
                    </ul>
                    <div class="items">
                        <ol>
                            <li>Show All</li>
                            <li>Alphabetic</li>
                            <li>Numeric</li>
                        </ol>
                    </div>
                </div>
                <div class="dropdown">
                    <ul>
                        <li>Stars</li>
                        <li><i class="fa fa-chevron-down"></i></li>
                    </ul>
                    <div class="items">
                        <ol>
                            <li>Show All</li>
                            <li>5 Star</li>
                            <li>4 Star</li>
                            <li>3 Star</li>
                            <li>2 Star</li>
                            <li>1 Star</li>
                        </ol>
                    </div>
                </div>
                <div class="dropdown">
                    <ul>
                        <li>Distance from center</li>
                        <li><i class="fa fa-chevron-down"></i></li>
                    </ul>
                    <div class="items">
                        <ol>
                            <li>Distance</li>
                            <li>Distance</li>
                            <li>Distance</li>
                        </ol>
                    </div>
                </div>
                <div class="dropdown">
                    <ul>
                        <li>Review</li>
                        <li><i class="fa fa-chevron-down"></i></li>
                    </ul>
                    <div class="items">
                        <ol>
                            <li>Review</li>
                            <li>Review</li>
                            <li>Review</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="item">
                    <div class="left">
                        <h5>Grand Castle</h5>
                    </div>
                    <div class="right">
                        <div class="review-pricing">
                            <div class="inner-left">
                                <p><span>$50</span> per night</p>
                                <div class="rating-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="inner-right">
                                <div>
                                    <h5>Very Good</h5>
                                    <p>110 reviews</p>
                                </div>
                                <div>
                                    <span>8.1</span>
                                </div>
                            </div>
                        </div>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, adipisci sint. Natus facere explicabo odit labore blanditiis tempora 
                        </p>
                        <div class="icon">
                            <i class="fa fa-clock"></i>
                            <i class="fa fa-bicycle"></i>
                            <i class="fa fa-map-signs"></i>
                            <i class="fab fa-app-store"></i>
                        </div>

                        <button class="btn-primary">Book <span></span></button>
                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <h5>Grand Castle</h5>
                    </div>
                    <div class="right">
                        <div class="review-pricing">
                            <div class="inner-left">
                                <p><span>$50</span> per night</p>
                                <div class="rating-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="inner-right">
                                <div>
                                    <h5>Very Good</h5>
                                    <p>110 reviews</p>
                                </div>
                                <div>
                                    <span>8.1</span>
                                </div>
                            </div>
                        </div>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, adipisci sint. Natus facere explicabo odit labore blanditiis tempora 
                        </p>
                        <div class="icon">
                            <i class="fa fa-clock"></i>
                            <i class="fa fa-bicycle"></i>
                            <i class="fa fa-map-signs"></i>
                            <i class="fab fa-app-store"></i>
                        </div>

                        <button class="btn-primary">Book <span></span></button>
                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <h5>Grand Castle</h5>
                    </div>
                    <div class="right">
                        <div class="review-pricing">
                            <div class="inner-left">
                                <p><span>$50</span> per night</p>
                                <div class="rating-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="inner-right">
                                <div>
                                    <h5>Very Good</h5>
                                    <p>110 reviews</p>
                                </div>
                                <div>
                                    <span>8.1</span>
                                </div>
                            </div>
                        </div>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, adipisci sint. Natus facere explicabo odit labore blanditiis tempora 
                        </p>
                        <div class="icon">
                            <i class="fa fa-clock"></i>
                            <i class="fa fa-bicycle"></i>
                            <i class="fa fa-map-signs"></i>
                            <i class="fab fa-app-store"></i>
                        </div>

                        <button class="btn-primary">Book <span></span></button>
                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <h5>Grand Castle</h5>
                    </div>
                    <div class="right">
                        <div class="review-pricing">
                            <div class="inner-left">
                                <p><span>$50</span> per night</p>
                                <div class="rating-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="inner-right">
                                <div>
                                    <h5>Very Good</h5>
                                    <p>110 reviews</p>
                                </div>
                                <div>
                                    <span>8.1</span>
                                </div>
                            </div>
                        </div>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, adipisci sint. Natus facere explicabo odit labore blanditiis tempora 
                        </p>
                        <div class="icon">
                            <i class="fa fa-clock"></i>
                            <i class="fa fa-bicycle"></i>
                            <i class="fa fa-map-signs"></i>
                            <i class="fab fa-app-store"></i>
                        </div>

                        <button class="btn-primary">Book <span></span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php 
include 'includes/footer.php'

?>