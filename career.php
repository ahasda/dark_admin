

<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/adomx-preview/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 12:06:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Litem Admin Panel</title>
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

</head>

<body class="skin-dark">

    <div class="main-wrapper">


        <!-- Header Section Start -->

           <?php 

            include "header.php";

         ?>

        <!-- Header Section End -->

        
        <!-- Side Header Start -->
       
        <?php 

        include "navbar.php";

         ?>

        <!-- Side Header End -->

        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Dashboard <span>/ Career Data</span></h3>
                    </div>
                </div><!-- Page Heading End -->

                <!-- Page Button Group Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-date-range">
                        <input type="text" class="form-control input-date-predefined">
                    </div>
                </div><!-- Page Button Group End -->

            </div><!-- Page Headings End -->

         

            <div class="row mbn-30">

                <!-- Recent Transaction Start -->
                <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">User Details</h4>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-vertical-middle table-selectable">

                                    <!-- Table Head Start -->
                                    <thead>
                                        <tr>
                                            
                                            
                                            <th><span>Name</span></th>
                                            <th><span>College Name</span></th>
                                            <th><span>City</span></th>
                                            <th><span>Resume</span></th>
                                            <th><span>Year</span></th>
                                        </tr>
                                    </thead><!-- Table Head End -->

                                    <!-- Table Body Start -->
                                    <tbody>
                            <?php
                            // while ($row = mysqli_fetch_array($result)) {
                            //     echo "<tr>";
                            //     echo "<td>" . $row['id'] . "</td>";
                            //     echo "<td>" . $row['name'] . "</td>";
                            //     echo "<td>" . $row['email'] . "</td>";
                            //     echo "<td>" . $row['state'] . "</td>";
                            //     echo "<td>" . $row['district'] . "</td>";
                            //     echo "<td>" . $row['service'] . "</td>";
                            //     echo "<td>" . $row['sub_service'] . "</td>";
                            //     echo "<td>" . $row['phone_no'] . "</td>";
                            //     echo "<td>" . $row['descrip'] . "</td>";
                            //     echo "<td><a class='h5' href='#'>Edit</a></td>";
                            //     echo "<td><a class='h5' href='#'>Delete</a></td>";
                            //     echo "</tr>";
                            // }
                            ?>
                        </tbody><!-- Table Body End -->
                    </table>
                </div>

                <!-- Pagination -->
                <div class="pagination">
                    <?php
                    // Previous button
                    // if ($page > 1) {
                    //     echo "<a href='?page=" . ($page - 1) . "'>&laquo; Previous</a>";
                    // } else {
                    //     echo "<span class='disabled'>&laquo; Previous</span>";
                    // }

                    // Page numbers
                    // for ($i = 1; $i <= $number_of_pages; $i++) {
                    //     echo "<a href='?page=" . $i . "'>" . $i . "</a> ";
                    // }

                    // Next button
                    // if ($page < $number_of_pages) {
                    //     echo "<a href='?page=" . ($page + 1) . "'>Next &raquo;</a>";
                    // } else {
                    //     echo "<span class='disabled'>Next &raquo;</span>";
                    // }
                    ?>
                </div>
            </div>
        </div>
    </div><!-- Recent Transaction End -->

</div>

        </div><!-- Content Body End -->

        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">2019 &copy; <a href="https://themeforest.net/user/codecarnival">Codecarnival</a></p>
                </div>

            </div>
        </div><!-- Footer Section End -->

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

    <!-- Plugins & Activation JS For Only This Page -->

    <!--Moment-->
    <script src="assets/js/plugins/moment/moment.min.js"></script>

    <!--Daterange Picker-->
    <script src="assets/js/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/js/plugins/daterangepicker/daterangepicker.active.js"></script>

    <!--Echarts-->
    <script src="assets/js/plugins/chartjs/Chart.min.js"></script>
    <script src="assets/js/plugins/chartjs/chartjs.active.js"></script>

    <!--VMap-->
    <script src="assets/js/plugins/vmap/jquery.vmap.min.js"></script>
    <script src="assets/js/plugins/vmap/maps/jquery.vmap.world.js"></script>
    <script src="assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/plugins/vmap/vmap.active.js"></script>

</body>


<!-- Mirrored from demo.hasthemes.com/adomx-preview/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 12:07:24 GMT -->
</html>