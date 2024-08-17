<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto);

        body {
            font-family: Roboto, sans-serif;
        }

        #chart {
            max-width: 650px;
            margin: 35px auto;
        }
    </style>
</head>

<body>
    <div id="chart">
    </div>
</body>

</html>





<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'litem_fee') or die("Connection failed: " . mysqli_connect_error());

$query = mysqli_query($conn, "SELECT DAY(`date`) as day, COUNT(*) AS count FROM `contact_detalis` WHERE MONTH(`date`) = MONTH(CURDATE()) AND YEAR(`date`) = YEAR(CURDATE()) GROUP BY DAY(`date`)");

$daywiseData = array_fill(1, 31, 0);  // Initialize an array with 31 zeros for each day

if ($query) {
    while ($row = mysqli_fetch_assoc($query)) {
        $daywiseData[(int)$row['day']] = (int)$row['count'];
    }
} else {
    echo "Query failed: " . mysqli_error($conn);
    die();
}

mysqli_close($conn);
?>

<script>
    var daysInMonth = 31;
    var categories = [];
    for (var i = 1; i <= daysInMonth; i++) {
        categories.push(i);
    }

    // PHP data to JavaScript
    var daywiseData = <?php echo json_encode(array_values($daywiseData)); ?>;

    var options = {
        chart: {
            type: 'line'
        },
        series: [{
            name: 'Queries',
            data: daywiseData
        }],
        colors: ['#008000'  ],
        chart: {
            height: 273,
            type: 'area',
            zoom: {
                enabled: false
            }
        },
        xaxis: {
            categories: categories
        }
    }

    var chart = new ApexCharts(document.querySelector("#chart"), options);

    chart.render();
</script>