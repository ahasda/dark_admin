<?php

session_start();


?>


<div class="header-section">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">

            <?php

                $conn = mysqli_connect('localhost', 'root', '', 'lappymak_litem-fee') or die();

                $query = mysqli_query($conn, "SELECT * FROM `admin`");

                if ($row = mysqli_fetch_assoc($query)) {
                    // code...

                }

            ?>

            <!-- Header Logo (Header Left) Start -->
            <div class="header-logo col-auto">
                <a href="index.php">
                    <img src="img/litem_logo.png" alt="">
                    <img src="img/litem_logo.png" class="logo-light" alt="" style="height: 50px; width: 100px;">
                </a>
            </div><!-- Header Logo (Header Left) End -->

            <!-- Header Right Start -->
            <div class="header-right flex-grow-1 col-auto">
                <div class="row justify-content-between align-items-center">

                    <!-- Side Header Toggle & Search Start -->
                    <div class="col-auto">
                        <div class="row align-items-center">

                            <!--Side Header Toggle-->
                            <div class="col-auto"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>

                            <!--Header Search-->
                            <div class="col-auto">

                                <div class="header-search">

                                    <button class="header-search-open d-block d-xl-none"><i class="zmdi zmdi-search"></i></button>

                                    <div class="header-search-form mx-auto justify-content-center">
                                        <form action="#">
                                            <input type="text" placeholder="Search Here">
                                            <button><i class="zmdi zmdi-search"></i></button>
                                        </form>
                                        <button class="header-search-close d-block d-xl-none"><i class="zmdi zmdi-close"></i></button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div><!-- Side Header Toggle & Search End -->

                    <!-- Header Notifications Area Start -->
                    <div class="col-auto">

                        <ul class="header-notification-area">

                            <!--Language-->



                            <!--User-->
                            <li class="adomx-dropdown col-auto">
                                <a class="toggle" href="#">
                                    <span class="user">
                                        <span class="avatar">
                                            <img src="img/litem_logo.png" alt="">
                                            <span class="status"></span>
                                        </span>
                                        <span class="name"><?php echo $row['email']; ?></span>
                                    </span>
                                </a>



                                <!-- Dropdown -->
                                <div class="adomx-dropdown-menu dropdown-menu-user">
                                    <div class="head">
                                        <h5 class="name"><a href="#"><?php echo $row['name']; ?></a></h5>
                                        <a class="mail" href="#"><?php echo $row['email']; ?></a>
                                    </div>
                                    <div class="body">
                                        <ul>
                                            <li><a href="logout.php"><i class="zmdi zmdi-lock-open"></i>Sing out</a></li>
                                        </ul>

                                    </div>
                                </div>

                            </li>

                        </ul>

                    </div><!-- Header Notifications Area End -->

                </div>
            </div><!-- Header Right End -->

        </div>
    </div>
</div>