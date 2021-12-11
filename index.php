<!DOCTYPE html>
<html>
    <head>
        <title>Hamro T-bazar</title>
    </head>
    <link rel="icon" href="media/icon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="static/css/home.css">
    <link rel="stylesheet" href="static/css/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <body>
        <?php
            include 'db_conection.php'; 
            include 'menu.php';
        ?>
        <div class="banner">
            <div class="banner-m">
                <div class="banner-img visible-b" id="i1">
                    <img src="media/banner/banner1.jpg">
                </div>
                <div class="banner-img" id="i2">
                    <img src="media/banner/banner2.jpg">
                </div>
                <div class="banner-img" id="i3">
                    <img src="media/banner/banner3.jpg">
                </div>
                <div class="banner-btn">
                    <button id="b1" class="t-active"><i class="fa fa-circle "></i></button>
                    <button id="b2" class="t-inactive"><i class="fa fa-circle"></i></button>
                    <button id="b3" class="t-inactive"><i class="fa fa-circle"></i></button>
                </div>
            </div>
        </div>

        <div class="sample_container">
            <p>Current Deals</p>
            <p class="subtitle">Deals of the Week</p>
            <div class="sample-row">
                <div class="sample-col">
                    <div class="prod">
                        <div class="prod-img">
                            <img src="media/product/nescafe.jpg">
                            <button class="view"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="prod-info">
                            Nescafe Coffee
                            <span>Rs. 125/-</span>
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="sample-col">
                    <div class="prod">
                        <div class="prod-img">
                            <img src="media/product/nescafe.jpg">
                            <button class="view"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="prod-info">
                            Nescafe Coffee
                            <span>Rs. 125/-</span>
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="sample-col">
                    <div class="prod">
                        <div class="prod-img">
                            <img src="media/product/nescafe.jpg">
                            <button class="view"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="prod-info">
                            Nescafe Coffee
                            <span>Rs. 125/-</span>
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="sample-col">
                    <div class="prod">
                        <div class="prod-img">
                            <img src="media/product/nescafe.jpg">
                            <button class="view"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="prod-info">
                            Nescafe Coffee
                            <span>Rs. 125/-</span>
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sample-row">
                <div class="sample-col">
                    <div class="prod">
                        <div class="prod-img">
                            <img src="media/product/nescafe.jpg">
                            <button class="view"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="prod-info">
                            Nescafe Coffee
                            <span>Rs. 125/-</span>
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="sample-col">
                    <div class="prod">
                        <div class="prod-img">
                            <img src="media/product/nescafe.jpg">
                            <button class="view"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="prod-info">
                            Nescafe Coffee
                            <span>Rs. 125/-</span>
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="sample-col">
                    <div class="prod">
                        <div class="prod-img">
                            <img src="media/product/nescafe.jpg">
                            <button class="view"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="prod-info">
                            Nescafe Coffee
                            <span>Rs. 125/-</span>
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="sample-col">
                    <div class="prod">
                        <div class="prod-img">
                            <img src="media/product/nescafe.jpg">
                            <button class="view"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="prod-info">
                            Nescafe Coffee
                            <span>Rs. 125/-</span>
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="row">
                <div class="col">
                    <div>&copy; All rights reserved</div>
                    <div>Powered by <a href="https://rusanvaidya.com.np">Rusan Vaidya</a></div>
                </div>
                <div class="col">
                    <ul>
                        <li>About Us</li>
                        <li>Terms and Condition</li>
                        <li>Policy</li>
                        <li>FAQs</li>
                    </ul>
                </div>
                <div class="col">

                </div>
            </div>
        </footer>
    </body>
    <script src="static/js/carousel.js"></script>
</html>