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
                                            <th><span>Email</span></th>
                                            <th><span>State</span></th>
                                            <th><span>District</span></th>
                                            <th><span>Service</span></th>
                                            <th><span>Sub Service</span></th>
                                            <th><span>Phone</span></th>
                                            <th><span>Case Description</span></th>
                                            <th></th>
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
                                echo "<td>" . $row['state'] . "</td>";
                                echo "<td>" . $row['district'] . "</td>";
                                echo "<td>" . $row['service'] . "</td>";
                                echo "<td>" . $row['sub_service'] . "</td>";
                                echo "<td>" . $row['phone_no'] . "</td>";
                                echo "<td>" . $row['descrip'] . "</td>";
                                echo "<td><a class='h5' href='#'>Edit</a></td>";
                                echo "<td><a class='h5' href='#'>Delete</a></td>";
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
    </div>