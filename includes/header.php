<?php include 'includes/links.php';?>
<!-- header -->
<header>
    <div class="header-btm" id="myHeader">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" alt="img" class="img-fluid logo">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fal fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#how-it-works">How it Works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#city">Cities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="business.php">Business</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="drivers.php">Become a Guy!</a>
                        </li>
                    </ul>

                    <ul class="side-ul">
                        <li class="sd-li">
                            <a href="javascript:;"><i class="fa-regular fa-phone"></i> 214-608-3786 </a>
                        </li>
                        <li class="sd-li">
                            <a class="btn btn-started" href="javascript:;">Get Quote</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- header -->

<!-- Modal -->
<div class="modal fade delivery-step" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="main-img">
                    <img src="images/logo.png" alt="img" class="w-100">
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="multi-step-form">
                    <div class="steps-container">
                        <!-- Step 1 -->
                        <div class="step step-1 active" id="step-1">
                            <h2>How can we help?</h2>
                            <div class="store-box">
                                <div class="txt">
                                    <h3>Store Delivery</h3>
                                    <p>Get your purchase home</p>
                                </div>
                                <div class="main-img">
                                    <img src="images/svg1.svg" alt="img" class="img-fluid">
                                    <p>from $56</p>
                                </div>
                            </div>
                            <div class="store-box">
                                <div class="txt">
                                    <h3>Move a Few Items</h3>
                                    <p>Low rates, zero back pain</p>
                                </div>
                                <div class="main-img">
                                    <img src="images/svg2.svg" alt="img" class="img-fluid">
                                    <p>from $67</p>
                                </div>
                            </div>
                            <div class="store-box">
                                <div class="txt">
                                    <h3>Facebook Marketplace</h3>
                                    <p>Get items you buy and sell on Facebook <br>Marketplace delivered</p>
                                </div>
                                <div class="main-img">
                                    <img src="images/svg3.svg" alt="img" class="img-fluid">
                                    <p>from $63</p>
                                </div>
                            </div>
                            <div class="store-box">
                                <div class="txt">
                                    <h3>Apartment Move</h3>
                                    <p>Move your studio, 1br, or 2br apartment</p>
                                </div>
                                <div class="main-img">
                                    <img src="images/svg4.svg" alt="img" class="img-fluid">
                                    <p>from $139</p>
                                </div>
                            </div>
                            <div class="store-box">
                                <div class="txt">
                                    <h3>Labor Only</h3>
                                    <p>No truck, but a ton of muscle</p>
                                </div>
                                <div class="main-img">
                                    <img src="images/svg5.svg" alt="img" class="img-fluid">
                                    <p>from $56</p>
                                </div>
                            </div>
                            <div class="store-box">
                                <div class="txt">
                                    <h3>Haul Away</h3>
                                    <p>Easily discard unwanted items</p>
                                </div>
                                <div class="main-img">
                                    <img src="images/svg6.svg" alt="img" class="img-fluid">
                                    <p>from $59</p>
                                </div>
                            </div>
                            <div class="step-btn">
                                <button type="button" class="next btn step-next" onclick="nextStep()">Next</button>
                            </div>
                        </div>
                        <!-- Step 2 to -->
                        <div class="step step-2" id="step-2" style="display: none;">
                            <h2>Where to?</h2>
                            <div class="where">
                                <div class="up-location" onclick="openPopup()">
                                    <img src="images/svg7.svg" alt="img" class="img-fluid">
                                    <h5>Pick up location</h5>
                                </div>
                                <!-- Popup Modal -->
                                <div id="popupOverlay" class="popup-overlay">
                                    <div class="popup-box">
                                        <span class="close-btn" onclick="closePopup()">Close</span>
                                        <h3>Pick up location</h3>
                                        <div class="main-input">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                            <input type="search" name="search" id="" placeholder="Enter an address">
                                        </div>
                                    </div>
                                </div>
                                <div class="up-location" onclick="openPopup()">
                                    <img src="images/svg8.svg" alt="img" class="img-fluid">
                                    <h5>Drop off location</h5>
                                </div>
                                <div id="drop-popupOverlay" class="popup-overlay">
                                    <div class="popup-box">
                                        <span class="close-btn" onclick="closePopup()">Close</span>
                                        <h3>Drop off location</h3>
                                        <div class="main-input">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                            <input type="search" name="search" id="" placeholder="Enter an address">
                                        </div>
                                    </div>
                                </div>
                                <h6>Estimate cost without locations</h6>
                                <div class="ifream-box">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14159985.113265185!2d58.347677784375975!3d29.949884283699703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38db52d2f8fd751f%3A0x46b7a1f7e614925c!2sPakistan!5e0!3m2!1sen!2s!4v1752017259450!5m2!1sen!2s"
                                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <div class="step-btn">
                                <button type="button" class="next btn step-next" onclick="prevStep()">Back</button>
                                <button type="button" class="next btn step-next" onclick="nextStep()">Next</button>
                            </div>
                        </div>
                        <!-- Step 3 to -->
                        <div class="step step-3" id="step-3" style="display: none;">
                            <div class="add-an">
                                <h2>Add an item</h2>
                                <div class="main-input">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    <input type="search" name="search" id="" placeholder="Search items">
                                </div>
                                <h4>Item size guide</h4>
                                <h3>Popular items</h3>
                                <div class="items-box">
                                    <div class="box">
                                        <h5>Chair</h5>
                                        <img src="images/svg9.svg" alt="img">
                                    </div>
                                    <div class="box">
                                        <h5>Box</h5>
                                        <img src="images/svg10.svg" alt="img">
                                    </div>
                                    <div class="box">
                                        <h5>Mattress</h5>
                                        <img src="images/svg11.svg" alt="img">
                                    </div>
                                    <div class="box">
                                        <h5>Couch</h5>
                                        <img src="images/svg12.svg" alt="img">
                                    </div>
                                    <div class="box">
                                        <h5>Dining Table</h5>
                                        <img src="images/svg13.svg" alt="img">
                                    </div>
                                </div>
                            </div>
                            <button type="button" onclick="prevStep()">Back</button>
                            <button type="button" onclick="nextStep()">Next</button>
                        </div>
                        <!-- Step 4 to -->
                        <div class="step" id="step-4" style="display: none;">
                            <h2>Step 4</h2>
                            <input type="text" />
                            <button type="button" onclick="prevStep()">Back</button>
                            <button type="button" onclick="nextStep()">Next</button>
                        </div>
                        <!-- Step 5 to -->
                        <div class="step" id="step-5" style="display: none;">
                            <h2>Step 5</h2>
                            <input type="text" />
                            <button type="button" onclick="prevStep()">Back</button>
                            <button type="button" onclick="nextStep()">Next</button>
                        </div>
                        <!-- Step 6 to -->
                        <div class="step" id="step-6" style="display: none;">
                            <h2>Step 6</h2>
                            <input type="text" />
                            <button type="button" onclick="prevStep()">Back</button>
                            <button type="button" onclick="nextStep()">Next</button>
                        </div>
                        <!-- Step 7 to -->
                        <div class="step" id="step-7" style="display: none;">
                            <h2>Step 7</h2>
                            <input type="text" />
                            <button type="button" onclick="prevStep()">Back</button>
                            <button type="button" onclick="nextStep()">Next</button>
                        </div>
                        <!-- Step 8 -->
                        <div class="step" id="step-8" style="display: none;">
                            <h2>Step 8 (Final Step)</h2>
                            <input type="text" />
                            <button type="button" onclick="prevStep()">Back</button>
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>