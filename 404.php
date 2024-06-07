<!doctype html>
<html lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Radios - Electronics Store WooCommerce Template</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" type="images/x-icon"/>

    <!-- css include -->
    <?php include("styles.php") ?>
</head>

<body>

    <div class="body_wrap">

        <!-- preloder start  -->
        <div class="preloder_part">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
        <!-- preloder end  -->

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
            </svg>
        </div>
        <!-- back to top end -->

        <!-- header start -->
        <?php include("header.php") ?>
        <!-- header end -->

        <!-- slide-bar start -->
        <?php include("sidebar.php") ?>
        <!-- slide-bar end -->

        <main>
            <!-- breadcrumb start -->
            <section class="breadcrumb-area">
                <div class="container">
                    <div class="radios-breadcrumb breadcrumbs">
                        <ul class="list-unstyled d-flex align-items-center">
                            <li class="radiosbcrumb-item radiosbcrumb-begin">
                                <a href="index.php"><span>Home</span></a>
                            </li>
                            <li class="radiosbcrumb-item radiosbcrumb-end">
                                <span>404</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- breadcrumb end -->
            
            <!-- error page start -->
            <section class="error__page pb-90">
                <div class="container">
                    <div class="error__text text-center">
                        <h1>404</h1>
                        <h3>Oops... It looks like you ‘re lost !</h3>
                        <p>Oops! The page you are looking for does not exist. It might have been moved or deleted.</p>
                        <div class="go-back-btn mt-50">
                            <a class="thm-btn thm-btn__2" href="#!" >
                                <span class="btn-wrap">
                                    <span>Go Back Home</span>
                                    <span>Go Back Home</span>
                                </span>
                                <i class="far fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- error page end -->
            
        </main>

        <!-- footer start -->
        <?php include("footer.php"); ?>
        <!-- footer end -->

        <!-- start newsletter-popup-area-section -->
        <?php include("newsletter_popup.php"); ?>
        <!-- end newsletter-popup-area-section -->


        <!-- start cookies-area -->    
        <div class="cookies-area">
            <p> This website uses cookies to improve your experience. By using this website you agree to our <a href="#">Data Protection Policy</a>. </p>
            <a href="#" class="read-more">Read more</a>
            <div>
                <button class="cookie-btn">Accept</button>
            </div>
        </div>
        <!-- end cookies-area -->


    </div>

    <!-- jquery include -->
    <?php include("scripts.php") ?>
</body>

</html>
