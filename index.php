<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ClickHudderFax-name.png" type="image/x-icon">
    <title>ClickHudderFax</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/stars.css">
    <link rel="stylesheet" type="text/css" href="css/slider.css">
    <link rel="stylesheet" type="text/css" href="css/product-cards.css">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>
<?php
include 'header.php';
?>
    <main>
        <div class="max-width-wrapper">
            <div class="main-wrapper">
                <div class="home-row-wrapper">
                    <div class="carousel-container">
                        <div id="first-slider" class="carousel-image-wrapper">
                          <img src="images/slider1.jpg" alt="Image" />
                          <img src="images/slider1.jpg" alt="Image" />
                          <img src="images/slider1.jpg" alt="Image" />
                          <img src="images/slider1.jpg" alt="Image" />
                        </div>
                    </div>  
                </div>
    
                <div class="home-row-wrapper">
                    <div class="home-row-title-wrapper">
                        <div class="home-row-title">Explore Shops</div>
                    </div>
                    <div class="home-row-content">
                        <div class="shop-by-images-wrapper shop-img-side-marg">
                            <div class="shop-by-images-container">
                                <div class="product-wrap">
                                    <a class="shop-by-link" href="/butcher.php">
                                        <img class="shop-by-img" src="images/butchers.jpg" alt="">
                                    </a>
                                    <div class="product-info">
                                        Info about the product. Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus at facilis ipsam, eos tempore veritatis! Ex adipisci eaque distinctio ipsam labore ipsa vitae, non perspiciatis dolore nulla dicta consectetur. Quidem.
                                    </div>
                                </div>
                                <div class="product-wrap">
                                <a class="shop-by-link" href="/greengrocers.php">
                                    <img class="shop-by-img" src="images/greengrocers.jpg" alt="">
                                    <div class="product-info">
                                        Info about the product. Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus at facilis ipsam, eos tempore veritatis! Ex adipisci eaque distinctio ipsam labore ipsa vitae, non perspiciatis dolore nulla dicta consectetur. Quidem.
                                    </div>
                                </a>
                                </div>
                                <div class="product-wrap">
                                <a class="shop-by-link" href="/fishmongers.php">
                                    <img class="shop-by-img" src="images/fishmongers.jpg" alt="">
                                    <div class="product-info">
                                        Info about the product. Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus at facilis ipsam, eos tempore veritatis! Ex adipisci eaque distinctio ipsam labore ipsa vitae, non perspiciatis dolore nulla dicta consectetur. Quidem.
                                    </div>
                                </a>
                                </div>
                                <div class="product-wrap">
                                <a class="shop-by-link" href="/bakery.php">
                                    <img class="shop-by-img" src="images/bakery.jpg" alt="">
                                    <br>
                                    <div class="product-info">
                                        Info about the product. Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus at facilis ipsam, eos tempore veritatis! Ex adipisci eaque distinctio ipsam labore ipsa vitae, non perspiciatis dolore nulla dicta consectetur. Quidem.
                                    </div>
                                </a>
                                </div>
                                <div class="product-wrap">
                                <a class="shop-by-link" href="/delicateseen.php">
                                    <img class="shop-by-img" src="images/delicateseen.jpg" alt="">
                                    <br>
                                    <div class="product-info">
                                        Info about the product. Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus at facilis ipsam, eos tempore veritatis! Ex adipisci eaque distinctio ipsam labore ipsa vitae, non perspiciatis dolore nulla dicta consectetur. Quidem.
                                    </div>
                                </a>
                                </div>
                            </div>
                            <div class="shop-by-controls d-none">
                                <span id="shop-by-prev">
                                    <span class="iconify" data-icon="akar-icons:circle-chevron-left-fill" data-inline="false"></span>
                                </span>
                                <span id="shop-by-next">
                                    <span class="iconify" data-icon="akar-icons:circle-chevron-right-fill" data-inline="false"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="home-row-wrapper">
                    <div class="home-row-title-wrapper">
                        <div class="home-row-title">Highly Recommended Products</div>
                    </div>
                    <div class="home-row-content">
                        <div class="card-row">
                            <div class="card-col">
                                <div class="card">
                                    <div class="card-img-wrapper">
                                        <a href="product.php">
                                            <img class="card-img" src="images/placeholder-image.png" alt="">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <a href="product.php">
                                                Product Title
                                            </a>
                                        </div>
                                        <div class="sm-stars" style="--rating: 2.5;"></div>

                                        <div class="card-footer">
                                            <div class="card-price">1.23 GBP</div>
                                            <div class="card-cart">
                                                <span></span>
                                                <span class="iconify" data-icon="fluent:cart-20-regular" data-inline="false"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-col">
                                <div class="card">
                                    <div class="card-img-wrapper">
                                        <a href="product.php">
                                            <img class="card-img" src="images/placeholder-image.png" alt="">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <a href="product.php">
                                                Product Title
                                            </a>
                                        </div>
                                        <div class="sm-stars" style="--rating: 2.5;"></div>

                                        <div class="card-footer">
                                            <div class="card-price">1.23 GBP</div>
                                            <div class="card-cart">
                                                <span></span>
                                                <span class="iconify" data-icon="fluent:cart-20-regular" data-inline="false"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-col">
                                <div class="card">
                                    <div class="card-img-wrapper">
                                        <a href="product.php">
                                            <img class="card-img" src="images/placeholder-image.png" alt="">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <a href="product.php">
                                                Product Title
                                            </a>
                                        </div>
                                        <div class="sm-stars" style="--rating: 2.5;"></div>

                                        <div class="card-footer">
                                            <div class="card-price">1.23 GBP</div>
                                            <div class="card-cart">
                                                <span></span>
                                                <span class="iconify" data-icon="fluent:cart-20-regular" data-inline="false"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-col">
                                <div class="card">
                                    <div class="card-img-wrapper">
                                        <a href="product.php">
                                            <img class="card-img" src="images/placeholder-image.png" alt="">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <a href="product.php">
                                                Product Title
                                            </a>
                                        </div>
                                        <div class="sm-stars" style="--rating: 2.5;"></div>

                                        <div class="card-footer">
                                            <div class="card-price">1.23 GBP</div>
                                            <div class="card-cart">
                                                <span></span>
                                                <span class="iconify" data-icon="fluent:cart-20-regular" data-inline="false"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-col">
                                <div class="card">
                                    <div class="card-img-wrapper">
                                        <a href="product.php">
                                            <img class="card-img" src="images/placeholder-image.png" alt="">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <a href="product.php">
                                                Product Title
                                            </a>
                                        </div>
                                        <div class="sm-stars" style="--rating: 2.5;"></div>

                                        <div class="card-footer">
                                            <div class="card-price">1.23 GBP</div>
                                            <div class="card-cart">
                                                <span></span>
                                                <span class="iconify" data-icon="fluent:cart-20-regular" data-inline="false"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-col">
                                <div class="card">
                                    <div class="card-img-wrapper">
                                        <a href="product.php">
                                            <img class="card-img" src="images/placeholder-image.png" alt="">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <a href="product.php">
                                                Product Title
                                            </a>
                                        </div>
                                        <div class="sm-stars" style="--rating: 2.5;"></div>

                                        <div class="card-footer">
                                            <div class="card-price">1.23 GBP</div>
                                            <div class="card-cart">
                                                <span></span>
                                                <span class="iconify" data-icon="fluent:cart-20-regular" data-inline="false"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-col">
                                <div class="card">
                                    <div class="card-img-wrapper">
                                        <a href="product.php">
                                            <img class="card-img" src="images/placeholder-image.png" alt="">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <a href="product.php">
                                                Product Title
                                            </a>
                                        </div>
                                        <div class="sm-stars" style="--rating: 2.5;"></div>

                                        <div class="card-footer">
                                            <div class="card-price">1.23 GBP</div>
                                            <div class="card-cart">
                                                <span></span>
                                                <span class="iconify" data-icon="fluent:cart-20-regular" data-inline="false"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-col">
                                <div class="card">
                                    <div class="card-img-wrapper">
                                        <a href="product.php">
                                            <img class="card-img" src="images/placeholder-image.png" alt="">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <a href="product.php">
                                                Product Title
                                            </a>
                                        </div>
                                        <div class="sm-stars" style="--rating: 2.5;"></div>

                                        <div class="card-footer">
                                            <div class="card-price">1.23 GBP</div>
                                            <div class="card-cart">
                                                <span></span>
                                                <span class="iconify" data-icon="fluent:cart-20-regular" data-inline="false"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </main>

   <?php
include 'footer.php';
?>


    <script src="js/header.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/shopBySlider.js"></script>
    <script src="js/main.js"></script>
</body>
</html>