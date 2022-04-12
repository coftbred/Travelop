<?php 
    include 'includes/header.php'

?>
<style>
    section.offer {
        background: aliceblue;
    }
    section.get-touch {
        background: url(https://thumbs.dreamstime.com/b/travel-accessories-light-blue-background-getting-ready-summer-vacation-d-rendering-150871769.jpg);
        background-attachment: inherit;
        background-size: contain;
        background-repeat: round;
    }
    
</style>

    <section class="home">
        <div class="background">
            <div class="inner">
                <h1>Discover</h1>
                <h2>The world</h2>
                <button class="btn-primary">Explore Now <span></span></button>
            </div>
        </div>
    </section>
    <section class="search">
        <div class="container">
            <ul> 
                <li class="active" >
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
            <form action="offers.php" method="get">
            <div class="all-input">
                <div>
                    <label for="">Destination</label>
                    <input type="text" name="search">
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
                <button class="btn-primary" type="submit" name="ok" value="search">Search <span></span> </button>
                
            </div>
            </form>
        </div>
    </section>
    <section class="intro container">
        <h1>We have the best tours</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque saepe nam tempora error debitis. Asperiores, fuga. Enim veniam dolor reiciendis!</p>
        <div class="wrapper">
            <div class="card">
                <p> May 25th - June 1st</p>
                <div>
                    <h2>Mauritius</h2>
                    <h6>From 1450$</h6>
                    <div class="rating-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="offers.php"><button class="btn-primary" >See more<span></span></button></a>
                </div>
            </div>
            <div class="card">
                <p> May 25th - June 1st</p>
                <div>
                    <h2>Scootland</h2>
                    <h6>From 1450$</h6>
                    <div class="rating-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="offers.php"><button class="btn-primary" >See more<span></span></button></a>
                </div>
            </div>
            <div class="card">
                <p> May 25th - June 1st</p>
                <div>
                    <h2>Greece</h2>
                    <h6>From 1450$</h6>
                    <div class="rating-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="offers.php"><button class="btn-primary" >See more<span></span></button></a>
                </div>
            </div>
        </div>
    </section>
    <section class="package">
        <div class="container">
            <div id="carouselExampleInterval" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <div class="inner-content">
                            <h2>Maldives Delux package</h2>
                            <img class="img-fluid w-75" style="height: 50vh;" src="https://img.nhandan.com.vn/Files/Images/2021/02/17/200512103822_maldives_bungalow_a-1613558933290.jpg" alt="">
                            <div class="rating-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, nulla. Dolore est illum reprehenderit magni non temporibus enim, dolores aliquam qui velit, numquam corrupti itaque?</p>
                            <button class="btn-primary">Book Now <span></span></button>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <div class="inner-content">
                            <h2>GRAND CASTLE package</h2>
                            <img class="img-fluid w-75" style="height: 50vh;" src="https://www.intuswindows.com/wp-content/uploads/2018/01/GC-Complete-4_WEB-e1585229839104.jpg" alt="">
                            <div class="rating-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, nulla. Dolore est illum reprehenderit magni non temporibus enim, dolores aliquam qui velit, numquam corrupti itaque?</p>
                            <button class="btn-primary">Book Now <span></span></button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="inner-content">
                            <h2>TURKEY HILLS package</h2>
                            <img class="img-fluid w-75" style="height: 50vh;" src="https://hikearizona.com/t2008/01/04/O_5929-777777_1199466201-11.jpg" alt="">
                            <div class="rating-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, nulla. Dolore est illum reprehenderit magni non temporibus enim, dolores aliquam qui velit, numquam corrupti itaque?</p>
                            <button class="btn-primary">Book Now <span></span></button>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- <div class="inner-content">
                <h2>Maldives Delux package</h2>
                <div class="rating-star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, nulla. Dolore est illum reprehenderit magni non temporibus enim, dolores aliquam qui velit, numquam corrupti itaque?</p>
                <button class="btn-primary">Book Now <span></span></button>
            </div>
            <button class="previous"><img src="./img/icon/prev.png" alt=""></button>
            <button class="next"><img src="./img/icon/next.png" alt=""></button>
        </div> -->
    </section>


    <section class="offer">
        <div class="container">
            <h1>The best offer with rooms</h1>
            <div class="wrapper">
                <div class="item">
                    <div class="left">
                        <div class="img-fluid">
                            <img src="img/offer_1.jpg" alt="">
                        </div>
                        <h5>Grand Castle</h5>
                    </div>
                    <div class="right">
                        <p><span>$50</span> per night</p>
                        <div class="rating-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
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

                        <a href="#">Read More </a>

                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <div class="img-fluid">
                            <img src='https://preview.colorlib.com/theme/travelix/images/xoffer_2.jpg.pagespeed.ic.HA9cJExNCg.webp' alt="">
                        </div>
                        <h5>Turkey Hills</h5>
                    </div>
                    <div class="right">
                        <p><span>$70</span> per night</p>
                        <div class="rating-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
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

                        <a href="#">Read More </a>

                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <div class="img-fluid">
                            <img src="https://preview.colorlib.com/theme/travelix/images/xoffer_3.jpg.pagespeed.ic.9JfYNcm8fb.webp" alt="">
                        </div>
                        <h5>Island Dream</h5>
                    </div>
                    <div class="right">
                        <p><span>$80</span> per night</p>
                        <div class="rating-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
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

                        <a href="#">Read More </a>

                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <div class="img-fluid">
                            <img src="https://preview.colorlib.com/theme/travelix/images/xoffer_4.jpg.pagespeed.ic.sP-uVX8-UR.webp" alt="">
                        </div>
                        <h5>Travel Light</h5>
                    </div>
                    <div class="right">
                        <p><span>$30</span> per night</p>
                        <div class="rating-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
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

                        <a href="#">Read More </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial">
        <div class="container">
            <h1>What our Clients Say about us</h1>
            <div class="wrapper">
                <div class="item">
                    <div class="icon">
                        <i class="fab fa-app-store"></i>
                    </div>
                    <div class="text">
                        <div class="name">
                            <h5>Ibrahim khalil</h5>
                            <p>May 24, 2017</p>
                        </div>
                        <h4>Best Hollyday Ever</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem itaque, obcaecati error amet eos harum.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <i class="fa fa-air-freshener"></i>
                    </div>
                    <div class="text">
                        <div class="name">
                            <h5>Ibrahim khalil</h5>
                            <p>May 24, 2017</p>
                        </div>
                        <h4>Best Hollyday Ever</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem itaque, obcaecati error amet eos harum.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <i class="fa fa-anchor"></i>
                    </div>
                    <div class="text">
                        <div class="name">
                            <h5>Ibrahim khalil</h5>
                            <p>May 24, 2017</p>
                        </div>
                        <h4>Best Hollyday Ever</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem itaque, obcaecati error amet eos harum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trending">
        <div class="container">
            <h1>Trending Now</h1>
            <div class="wrapper">
                <div class="item">
                    <div class="left">
                        <img src="./img/listing_thumb_1.jpg" alt="">
                    </div>
                    <div class="right">
                        <h4>Grand Hotel</h4>
                        <h6>From $400</h6>
                        <p>Madrid, Spain</p>
                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <img src="./img/listing_thumb_2.jpg" alt="">
                    </div>
                    <div class="right">
                        <h4>Queen Hotel</h4>
                        <h6>From $400</h6>
                        <p>Madrid, Spain</p>
                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <img src="./img/listing_thumb_3.jpg" alt="">
                    </div>
                    <div class="right">
                        <h4>Mars Hotel</h4>
                        <h6>From $400</h6>
                        <p>Madrid, Spain</p>
                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <img src="./img/listing_thumb_4.jpg" alt="">
                    </div>
                    <div class="right">
                        <h4>Grand Hotel</h4>
                        <h6>From $400</h6>
                        <p>Madrid, Spain</p>
                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <img src="./img/listing_thumb_5.jpg" alt="">
                    </div>
                    <div class="right">
                        <h4>Mars Hotel</h4>
                        <h6>From $400</h6>
                        <p>Madrid, Spain</p>
                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <img src="./img/listing_thumb_6.jpg" alt="">
                    </div>
                    <div class="right">
                        <h4>Grand Hotel</h4>
                        <h6>From $400</h6>
                        <p>Madrid, Spain</p>
                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <img src="./img/listing_thumb_7.jpg" alt="">
                    </div>
                    <div class="right">
                        <h4>Mars Hotel</h4>
                        <h6>From $400</h6>
                        <p>Madrid, Spain</p>
                    </div>
                </div>
                <div class="item">
                    <div class="left">
                        <img src="./img/listing_thumb_8.jpg" alt="">
                    </div>
                    <div class="right">
                        <h4>Queen Hotel</h4>
                        <h6>From $400</h6>
                        <p>Madrid, Spain</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="get-touch">
        <div class="container">
            <div class="wrapper">
                <div class="left">
                    <div class="contact-img">
                    </div>
                </div>
                <div class="right">
                    <h1>Get in Touch</h1>
                    <form action="action.php">
                        <div>
                            <input type="email" placeholder="Email">
                            <input type="text" placeholder="Name">
                        </div>
                        <input type="text" placeholder="Subject">
                        <textarea name="message"cols="30" rows="10" placeholder="Message"></textarea>
                    </form>
                    <button class="btn-primary">Send Message<span></span></button>
                </div>
            </div>
        </div>
    </section>
    

<?php 
include 'includes/footer.php'

?>