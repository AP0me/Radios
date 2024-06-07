<!doctype html>
<html lang="zxx">

<?php include("header.php") ?>

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
        <?php include("navbar_header.php") ?>
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
                                <span>Account</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- breadcrumb end -->

            <!-- account start -->
            <section class="account pb-90">
                <div class="container">
                    <div class="row mt-none-30">
                        <div class="col-lg-6 mt-30">
                            <div class="account__wrap pr-60">
                                <h2 class="account__title">Sign Up</h2>
                                <form action="#">
                                    <div class="account__input-field">
                                        <label for="name">Your Name</label>
                                        <input id="name" type="text" placeholder="Enter your name*">
                                    </div>
                                    <div class="account__input-field">
                                        <label for="email">Email Address</label>
                                        <input id="email" type="email" placeholder="Enter Email Address">
                                    </div>
                                    <div class="account__input-field">
                                        <label for="password">New Password</label>
                                        <input id="password" type="text" placeholder="Create password">
                                    </div>
                                    <div class="account__input-field">
                                        <input class="form-check-input" id="checkbox" type="checkbox">
                                        <label class="form-check-label" for="checkbox">I agree to al <a href="#!">Terms</a> & <a href="#!">Condition</a> and Feeds</label>
                                    </div>
                                    <div class="account__btn">
                                        <a class="thm-btn thm-btn__2" href="#!">
                                            <span class="btn-wrap">
                                                <span>Sign Up</span>
                                                <span>Sign Up</span>
                                            </span>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-30">
                            <div class="account__wrap pl-60">
                                <h2 class="account__title">Login here</h2>
                                <form action="#">
                                    <div class="account__input-field">
                                        <label for="lemail">Email Address</label>
                                        <input id="lemail" type="email" placeholder="Enter Email Address">
                                    </div>
                                    <div class="account__input-field">
                                        <label for="lpassword">Password</label>
                                        <input id="lpassword" type="text" placeholder="password">
                                    </div>
                                    <div class="account__input-field">
                                        <input class="form-check-input" id="lcheckbox" type="checkbox" checked>
                                        <label class="form-check-label" for="lcheckbox">Remember Me?</label>
                                    </div>
                                    <div class="account__btn">
                                        <a class="thm-btn thm-btn__2" href="#!">
                                            <span class="btn-wrap">
                                                <span>Login here</span>
                                                <span>Login here</span>
                                            </span>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- account end -->
            
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
