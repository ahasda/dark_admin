<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/adomx-preview/dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 12:08:05 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Adomx - Responsive Bootstrap 4 Admin Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/Litem Favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/cryptocurrency-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="assets/css/style-primary.css">

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

</head>

<body class="skin-dark">

    <div class="main-wrapper">

        <!-- Content Body Start -->
        <div class="content-body m-0 p-0">

            <div class="login-register-wrap">
                <div class="row">

                    <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                        <div class="login-register-form-wrap">

                            <div class="content mb-5">
                                <h1 class="">Login Litem CRM </h1>
                                <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                            </div>

                            <div class="login-register-form">
                                <form action="" id="family">
                                    <div class="row">
                                        <div class="col-12 mb-20">
                                            <input class="form-control" name="user_name" type="text" placeholder="User ID / Email">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <input class="form-control" name="password" type="password" placeholder="Password">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label for="remember" class="adomx-checkbox-2">
                                                <input id="remember" name="remember" type="checkbox">
                                                <i class="icon"></i>Remember.
                                            </label>
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-between">
                                                <div class="col-auto mb-15">
                                                    <a href="#">Forgot Password?</a>
                                                </div>
                                                <div class="col-auto mb-15">
                                                    Don't have an account? <a href="register.html">Create Now.</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-10">
                                            <button name="submit" id="submit" class="button button-primary button-outline">Sign in</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <script>
                      $(document).ready(function() {
    $(document).on('submit', '#family', function(event) {
        event.preventDefault(); // Prevent the default form submission
        let data = $(this).serialize(); // Serialize form data

        $.ajax({
            url: 'crm.php',
            data: data,
            method: 'POST',
            success: function(response) {
                if (response) {
                    $('#family')[0].reset();
                    alert(response);
                    window.location.href = 'index.php';
                } 
                else {
                    alert('Data not submitted: ' + response);
                }
            },
            // error: function(xhr, status, error) {
            //     alert('Data not submitted: ' + error);
            // }
        });
    });
});

                    </script>



                    <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">
                        <div class="content">
                            <h1>Sign in</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- Content Body End -->

    </div>

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="assets/js/main.js"></script>

</body>


<!-- Mirrored from demo.hasthemes.com/adomx-preview/dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 12:08:05 GMT -->

</html>