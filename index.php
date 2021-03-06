<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>

    <!--CSS-->
    <link rel="stylesheet" href="css/styles.css">
    <!--Fav Icon-->
    <link rel="shortcut icon" href="img/fav-icon.png">
    <!--FontAwesome Icon-->
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>
    <!--lightslider-->
    <link rel="stylesheet" href="css/lightslider.css">
</head>
<body>
    <!--Navigation-->
    <nav>
        <!--Sosmed & No hp-->
        <div class="social-call">
            <!--Sosmed-->
            <div class="social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <!--No hp-->
            <div class="phone">
                <span>Call +62823456789</span>
            </div>
        </div>
        <!--Menu Bar-->
        <div class="navigation">
            <!--logo-->
            <a href="#" class="logo"><img src="img/logo.png" alt=""></a>
            <!--menu-->
            <ul class="menu">
                <li><a href="#">SHOP</a>
                    <!--Sale label-->
                    <span class="sale-lable">Sale</span>
                </li>
                <li><a href="#">SHOP BY CATEGORIES</a></li>
                <li><a href="#">PAYMENT CONFIRMATION</a></li>
                <li><a href="#">HOW TO ORDER</a></li>
            </ul>
            <!--right menu-->
            <div class="right-menu">
                <!--search-->
                <a href="javascript:void(0);" class="search">
                    <i class="fas fa-search"></i>
                </a>
                <!--user-->
                <a href="javascript:void(0);" class="user">
                    <i class="fas fa-user"></i>
                </a>
                <!--cart-->
                <a href="#">
                    <i class="fas fa-shopping-cart">
                        <!--number of product in cart-->
                        <span class="num-cart-product">0</span>
                    </i>
                </a>
            </div>
        </div>
    </nav>

    <!--search-bar-->
    <div class="search-bar">
        <!--input-->
        <div class="search-input">
            <input type="text" placeholder="Search For Product" name="search"/>
            <!--cancel button-->
            <a href="javascript:void(0);" class="search-cancel">
                <i class="fas fa-times"></i>
            </a>
        </div>
    </div>

    <!--login and sign up-->
    <div class="form">
        <!--login-->
        <div class="login-form">
            <!--cancel button-->
            <a href="javascript:void(0);" class="form-cancel">
                <i class="fas fa-times"></i>
            </a>
            <!--heading-->
            <strong>Log in</strong>
            <!--input-->
            <form>
                <input type="email" name="email" placeholder="example@gmail.com" required/>
                <input type="password" name="password" placeholder="password" required/>
                <!--submit button-->
                <input type="submit" value="Log In"/>
            </form>
            <!--forget and sign up button-->
            <div class="form-btns">
                <a href="#" class="forget">Forget Your Password?</a>
                <a href="javascript:void(0);" class="sign-up-btn">Create Account</a>
            </div>
        </div>

        <!--sign up-->
        <div class="sign-up-form">
            <!--cancel button-->
            <a href="javascript:void(0);" class="form-cancel">
                <i class="fas fa-times"></i>
            </a>
            <!--heading-->
            <strong>Sign Up</strong>
            <!--input-->
            <form>
                <input type="text" name="fullname" placeholder="full name" required/>
                <input type="email" name="email" placeholder="example@gmail.com" required/>
                <input type="password" name="password" placeholder="password" required/>
                <!--submit button-->
                <input type="submit" value="Sign Up"/>
            </form>
            <!--forget and sign up button-->
            <div class="form-btns">
                <a href="javascript:void(0);" class="already-account">Already Have Account?</a>
            </div>
        </div>
    </div>

    <!--full slider-->
    <ul id="adaptive" class="cs-hidden">
        <!--box 1-->
        <li class="item-a">
            <!--box-->
            <div class="full-slider-box f-slide-1">
                <div class="f-slider-text-container">
                    <div class="f-slider-text">
                        <span>Limited Offer</span>
                        <strong>30% Off<br> With <font>Promo Code</font></strong>
                        <a href="#" class="f-slider-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </li>
        <!--box 2-->
        <li class="item-b">
            <!--box-->
            <div class="full-slider-box f-slide-2">
                <div class="f-slider-text-container">
                    <div class="f-slider-text">
                        <span>Limited Offer</span>
                        <strong>30% Off<br> With <font>Promo Code</font></strong>
                        <a href="#" class="f-slider-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </li>
        <!--box 3-->
        <li class="item-c">
            <!--box-->
            <div class="full-slider-box f-slide-3">
                <div class="f-slider-text-container">
                    <div class="f-slider-text">
                        <span>Limited Offer</span>
                        <strong>30% Off<br> With <font>Promo Code</font></strong>
                        <a href="#" class="f-slider-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </li>
        <!--box 4-->
        <li class="item-d">
            <!--box-->
            <div class="full-slider-box f-slide-4">
                <div class="f-slider-text-container">
                    <div class="f-slider-text">
                        <span>Limited Offer</span>
                        <strong>30% Off<br> With <font>Promo Code</font></strong>
                        <a href="#" class="f-slider-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </li>
    </ul> 

    <!--jQuery-->
    <script src="js/JQuery.js"></script>
    <!--js-->
    <script src="js/main.js"></script>
    <!--lightslider-->
    <script src="js/lightslider.js"></script>
</body>
</html>