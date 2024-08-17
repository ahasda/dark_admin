<?php
// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'litem_fee') or die('Unable to connect to the database.');

// Pagination variables
$results_per_page = 20; // Number of results per page
$query = "SELECT * FROM `data_form`";
$result = mysqli_query($conn, $query);
$number_of_results = mysqli_num_rows($result);
$number_of_pages = ceil($number_of_results / $results_per_page);

// Determine which page number visitor is currently on
if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

// Calculate the starting limit for the query
$this_page_first_result = ($page - 1) * $results_per_page;

// SQL query with pagination
$query = "SELECT * FROM `data_form` LIMIT $this_page_first_result, $results_per_page";
$result = mysqli_query($conn, $query);



?>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<style>
    
/* Base styles for the pagination container */
.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px 0;
}

/* Styles for each pagination link */
.pagination a {
    text-decoration: none;
    color: #ffffff; /* Bootstrap primary color */
    padding: 8px 12px;
    margin: 0 5px;
    border: 1px solid #ddd;
    border-radius: 4px;
    transition: background-color 0.3s, color 0.3s;
}

/* Hover effect for pagination links */
.pagination a:hover {
    background-color: #007bff;
    color: #fff;
}

/* Active page link styles */
.pagination a.active {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;
}

/* Styles for disabled links */
.pagination .disabled {
    color: #6c757d; /* Bootstrap secondary color */
    padding: 8px 12px;
    margin: 0 5px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

/* Ensure spacing between page numbers */
.pagination a.ps-3,
.pagination a.pe-3,
.pagination .ps-3,
.pagination .pe-3 {
    padding-left: 12px; /* Adjust spacing as needed */
    padding-right: 12px; /* Adjust spacing as needed */
}
</style>

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
                                            
                                            <th><span>Id</span></th>
                                            <th><span>Name</span></th>
                                            <th><span>Email</span></th>
                                            <th><span>Phone</span></th>
                                            <th><span>State</span></th>
                                            <th><span>Service</span></th>
                                            <th><span>date</span></th>

                                        </tr>
                                    </thead><!-- Table Head End -->

                                    <!-- Table Body Start -->
                                    <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['phone'] . "</td>";
                                echo "<td>" . $row['state'] . "</td>";
                                echo "<td>" . $row['service'] . "</td>";

                                // Create a string with all the property details
                                $propertyDetails = "ID: " . $row['id'] . "\n" .
                                "Name: " . $row['name'] . "\n" .
                                "Email: " . $row['email'] . "\n" .
                                "Phone No: " . $row['phone'] . "\n" .
                                "state: " . $row['state'] . "\n" .
                                "service: " . $row['service'];

                            // URL-encode the property details
                            $encodedDetails = urlencode($propertyDetails);

                            // Use the phone number from the database row
                            $phone_no = '7409697047';

                            // Generate the WhatsApp link with the encoded property details
                            echo "<td> <a href='https://api.whatsapp.com/send?phone=$phone_no&text=$encodedDetails' target='_blank' style='font-size: 30px; color: green;'><i class='fa-brands fa-whatsapp'></i></a></td>";

                                echo "</tr>";
                            }
                            ?>
                        </tbody><!-- Table Body End -->
                    </table>
                </div>

                <!-- Pagination -->
                <div class="pagination">
                    <?php
                    // Previous button
                    if ($page > 1) {
                        echo "<a href='?page=" . ($page - 1) . "'>&laquo; Previous</a>";
                    } else {
                        echo "<span class='disabled'>&laquo; Previous</span>";
                    }

                    // Page numbers
                    for ($i = 1; $i <= $number_of_pages; $i++) {
                        echo "<a href='?page=" . $i . "'>" . $i . "</a> ";
                    }

                    // Next button
                    if ($page < $number_of_pages) {
                        echo "<a href='?page=" . ($page + 1) . "'>Next &raquo;</a>";
                    } else {
                        echo "<span class='disabled'>Next &raquo;</span>";
                    }
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