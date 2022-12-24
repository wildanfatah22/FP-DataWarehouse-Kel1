<?php include 'koneksi.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WAREHOUSE ADVENTUREWORK - Total Penjualan</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <div id="wrapper">
        <?php include 'page/sidebar.php';?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <?php include 'page/topbar.php' ?>
                </nav>

                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Total Penjualan</h1>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Pendapatan
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php                                           
                                                $sql = "SELECT SUM(LineTotal) as LineTotal from factsales";
                                                $query = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($query) > 0){
                                                    while($row2=mysqli_fetch_array($query)){
                                                        echo "$".number_format($row2['LineTotal'],0,".",",");
                                                    }
                                                }      
                                                ?>  
                                            </div>
                                            </div>
                                        <div class="col-auto">
                                             <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Total Pendapatan Pada 2001
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php                                           
                                                $sql = "SELECT SUM(fs.LineTotal) as LineTotal 
                                                from factsales fs
                                                join dimtime dt on dt.TimeID = fs.TimeID
                                                where Year='2001'";
                                                $query = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($query) > 0){
                                                    while($row2=mysqli_fetch_array($query)){
                                                        echo "$".number_format($row2['LineTotal'],0,".",",");
                                                    }
                                                }      
                                                ?>  
                                            </div>
                                            </div>
                                        <div class="col-auto">
                                             <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Pendapatan Pada 2002
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php                                           
                                                $sql = "SELECT SUM(fs.LineTotal) as LineTotal 
                                                from factsales fs
                                                join dimtime dt on dt.TimeID = fs.TimeID
                                                where Year='2002'";
                                                $query = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($query) > 0){
                                                    while($row2=mysqli_fetch_array($query)){
                                                        echo "$".number_format($row2['LineTotal'],0,".",",");
                                                    }
                                                }      
                                                ?>  
                                            </div>
                                            </div>
                                        <div class="col-auto">
                                             <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Pendapatan Pada 2003
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php                                           
                                                $sql = "SELECT SUM(fs.LineTotal) as LineTotal 
                                                from factsales fs
                                                join dimtime dt on dt.TimeID = fs.TimeID
                                                where Year='2003'";
                                                $query = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($query) > 0){
                                                    while($row2=mysqli_fetch_array($query)){
                                                        echo "$".number_format($row2['LineTotal'],0,".",",");
                                                    }
                                                }      
                                                ?>  
                                            </div>
                                            </div>
                                        <div class="col-auto">
                                             <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Total Pendapatan Pada 2004
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php                                           
                                                $sql = "SELECT SUM(fs.LineTotal) as LineTotal 
                                                from factsales fs
                                                join dimtime dt on dt.TimeID = fs.TimeID
                                                where Year='2004'";
                                                $query = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($query) > 0){
                                                    while($row2=mysqli_fetch_array($query)){
                                                        echo "$".number_format($row2['LineTotal'],0,".",",");
                                                    }
                                                }      
                                                ?>  
                                            </div>
                                            </div>
                                        <div class="col-auto">
                                             <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid">
                            <figure class="highcharts-figure">
                                <div id="chart1">       
                                </div>
                                <p class="highcharts-description"></p>
                            </figure>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>



<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>


    <script>
        Highcharts.chart('chart1', {
    chart: {
        type: 'areaspline'
    },
    title: {
        text: 'Transaksi Customer Per Tahun',
        align: 'center'
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        verticalAlign: 'top',
        x: 120,
        y: 70,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF'
    },
    xAxis: {
        categories : [
            <?php 
                $sql = "SELECT ROUND(SUM(fs.LineTotal)) as LineTotal, dt.year as tahun from factsales fs 
                join dimtime dt on dt.TimeID = fs.TimeID 
                group by Year";
                $query = mysqli_query($conn, $sql);
                if (mysqli_num_rows($query) > 0){
                    while($row2=mysqli_fetch_array($query)){
                        $jm=$row2["LineTotal"];
                        $thn=$row2["tahun"];
                        echo "'$thn',";
                    }
                } 
                ?>
        ],
    },
    yAxis: {
        title: {
            text: 'Quantity'
        }
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        series: {
            pointStart: 2001
        },
        areaspline: {
            fillOpacity: 0.5
        }
    },
    series: [{
        name: 'Jumlah Transaksi Customer Per Tahun',
        data:
            [
                <?php 
                $sql = "SELECT ROUND(SUM(fs.LineTotal)) as LineTotal, dt.year as tahun from factsales fs 
                join dimtime dt on dt.TimeID = fs.TimeID 
                group by Year";
                $query = mysqli_query($conn, $sql);
                if (mysqli_num_rows($query) > 0){
                    while($row2=mysqli_fetch_array($query)){
                        $jm=$row2["LineTotal"];
                        $thn=$row2["tahun"];
                        echo "$jm,";
                    }
                } 
                ?>
            ]
    }]
});

    </script>


</body>