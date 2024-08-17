<style>
        .side-header {
           
            /* position: fixed;  */
            height: 100%; 
            /* overflow-y: auto;  */
        }
        .side-header-menu {
            width: 267px;
        }
        .side-header-menu a {
            display: flex; 
            align-items: center; 
            /* justify-content: center; */
            padding: 20px 45px; 
            color: #ffff; 
            text-decoration: none; 
        }
     
        .side-header-menu a:hover {
            background-color: #b58d28 !important; 
            color: #fff;
        }
    </style>


<div class="side-header show">
    <button class="side-header-close btn btn-link"><i class="zmdi zmdi-close"></i></button>
    <!-- Side Header Inner Start -->
    <div class="side-header-inner custom-scroll">
        <nav class="side-header-menu" id="side-header-menu">
            <div class="list-group">
                <a href="index.php" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="fa-solid fa-house"></i></i>&nbsp; <span class="ms-2">Home Data</span>
                </a>
                <a href="career.php" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="fa-regular fa-square-check"></i>&nbsp; <span class="ms-2">Career Data</span>
                </a>
                <a href="about.php" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="fa-regular fa-address-card"></i>&nbsp; <span class="ms-2">About Data</span>
                </a>
                <a href="chart.php" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="fa-regular fa-address-card"></i>&nbsp; <span class="ms-2">Chart</span>
                </a>
            </div>
        </nav>
    </div><!-- Side Header Inner End -->
</div>
