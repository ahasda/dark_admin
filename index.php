<?php
session_start();

$conn = mysqli_connect('localhost', 'u291563295_litem_fee', 'Litem@123_legalis', 'u291563295_litem_fee') or die('Unable to connect to the database.');

$query =  "SELECT * FROM contact_detalis";

?>

<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/adomx-preview/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 12:06:58 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" co ntent="ie=edge">
    <title>Litem Career page</title>
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




    <!-- pagination cdn  -->
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.3/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.1.1/css/buttons.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.css">


</head>

<style>
    textarea {
        background-color: transparent;
        color: white;
    }


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
        color: #ffffff;
        /* Bootstrap primary color */
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
        color: #6c757d;
        /* Bootstrap secondary color */
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
        padding-left: 12px;
        /* Adjust spacing as needed */
        padding-right: 12px;
        /* Adjust spacing as needed */
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
                        <h3>Dashboard <span>/ Litem Data</span></h3>
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
                                <table class="table table-vertical-middle table-selectable" id="myTable" id="example" class="display nowrap">

                                    <!-- Table Head Start -->
                                    <thead>
                                        <tr>

                                            <th><span>Id</span></th>
                                            <th><span>Name</span></th>
                                            <th><span>Email</span></th>
                                            <th><span>State</span></th>
                                            <th><span>District</span></th>
                                            <th><span>Service</span></th>
                                            <th><span>Sub Service</span></th>
                                            <th><span>Phone</span></th>
                                            
                                            <th><span>Date</span></th>


                                        </tr>
                                    </thead><!-- Table Head End -->

                                    <!-- Table Body Start -->
                                    <tbody>
                                        <?php
                                        // Run the query
                                        $run = mysqli_query($conn, "SELECT * FROM contact_detalis ORDER BY date DESC");
                                        $count=0;
                                        // Fetch and display each row
                                        while ($row = mysqli_fetch_assoc($run)) {
                                            echo "<tr>";
                                            echo "<td>" . ++$count. "</td>";
                                            echo "<td>" . $row['name'] . "</td>";
                                            echo "<td>" . $row['email'] . "</td>";
                                            echo "<td>" . $row['state'] . "</td>";
                                            echo "<td>" . $row['district'] . "</td>";
                                            echo "<td>" . $row['service'] . "</td>";
                                            echo "<td>" . $row['sub_service'] . "</td>";
                                            echo "<td>" . $row['phone_no'] . "</td>";
                                            // echo "<td>" . $row['case_description'] . "</td>";
                                            echo "<td>" . $row['date'] . "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                              


                            </div>

                            <!-- Pagination -->
                            <div class="pagination">
                                <?php
                                // Previous button
                                // if ($page > 1) {
                                //     echo "<a href='?page=" . ($page - 1) . "' class='ps-3 pe-3'>&laquo; Previous</a>";
                                // } else {
                                //     echo "<span class='disabled '>&laquo; Previous</span>";
                                // }

                                // // Page numbers
                                // for ($i = 1; $i <= $number_of_pages; $i++) {
                                //     echo "<a href='?page=" . $i . "' class='ps-3 pe-3'>" . $i . "</a> ";
                                // }

                                // // Next button
                                // if ($page < $number_of_pages) {
                                //     echo "<a href='?page=" . ($page + 1) . "' class=' ps-3 pe-3'>Next &raquo;</a>";
                                // } else {
                                //     echo "<span class='disabled'>Next &raquo;</span>";
                                // }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Transaction End -->

            </div>

        </div><!-- Content Body End -->

        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">2024 &copy; <a href="https://themeforest.net/user/codecarnival">Litem Legalis</a></p>
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


    <!-- pagination data  -->
    <script src="//cdn.datatables.net/2.1.3/js/dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.print.min.js"></script>
    

<script>
    // let table = new DataTable('#myTable');
    new DataTable('#myTable', {
    layout: {
        topStart: {
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        }
    }
});
</script>

</body>


<!-- Mirrored from demo.hasthemes.com/adomx-preview/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 12:07:24 GMT -->

</html>