@extends ("backend.layouts.app");

@section('head')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>AdminBite admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="assets/extra-libs/css-chart/css-chart.css" rel="stylesheet">
    <link href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
@endsection;

@section('content')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="d-flex align-items-center">
                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <img src="assets/images/welcome.jpg" width="100%" alt="" />
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Active user - project- visitors -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card ">
                            <div class="card-body">
                                <h4 class="card-title">Device Visit</h4>
                                <div id="visitor" style="height:253px; width:100%;" class="m-t-20"></div>
                                <!-- row -->
                                <div class="row m-t-30 m-b-15">
                                    <!-- column -->
                                    <div class="col-4 birder-right text-left">
                                        <h4 class="m-b-0">60%
                                            <small>
                                                <i class="ti-arrow-up text-success"></i>
                                            </small>
                                        </h4>Desktop
                                    </div>
                                    <!-- column -->
                                    <div class="col-4 birder-right text-center">
                                        <h4 class="m-b-0">28%
                                            <small>
                                                <i class="ti-arrow-down text-danger"></i>
                                            </small>
                                        </h4>Mobile
                                    </div>
                                    <!-- column -->
                                    <div class="col-4 text-right">
                                        <h4 class="m-b-0">12%
                                            <small>
                                                <i class="ti-arrow-up text-success"></i>
                                            </small>
                                        </h4>Tablet
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-sm-12 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-8 col-md-12">
                                        <h4 class="card-title">Visitors By Countries</h4>
                                        <div id="visitfromworld" style="width:100%; height:350px"></div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <!-- row -->
                                        <div class="row m-b-15">
                                            <div class="col-9">India</div>
                                            <div class="col-3 text-right">28%</div>
                                            <div class="col-12">
                                                <div class="progress m-t-5">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="row m-b-15">
                                            <div class="col-9"> UK</div>
                                            <div class="col-3 text-right">21%</div>
                                            <div class="col-12">
                                                <div class="progress m-t-5">
                                                    <div class="progress-bar bg-cyan" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="row m-b-15">
                                            <div class="col-9"> USA</div>
                                            <div class="col-3 text-right">18%</div>
                                            <div class="col-12">
                                                <div class="progress m-t-5">
                                                    <div class="progress-bar bg-purple" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="row">
                                            <div class="col-9">China</div>
                                            <div class="col-3 text-right">12%</div>
                                            <div class="col-12">
                                                <div class="progress m-t-5">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales Summery -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card bg-light-info no-card-border">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10">
                                        <span>Referral Earnings</span>
                                        <h4>$769.08</h4>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="" id="ravenue"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card bg-light-warning no-card-border">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-10">
                                        <span>Wallet Balance</span>
                                        <h4>$3,567.53</h4>
                                    </div>
                                    <div class="ml-auto">
                                        <div style="max-width:130px; height:15px;" class="m-b-40">
                                            <canvas id="balance"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card bg-light-success no-card-border">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10">
                                        <span>Estimated Sales</span>
                                        <h4>5769</h4>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="gaugejs-box">
                                            <canvas id="foo" class="gaugejs" height="50" width="100">guage</canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- ============================================================== -->
                <!-- Sales Summery -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by AdminBite admin. Designed and Developed by
                <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
@endsection

@section('scripts')
<!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="dist/js/app.min.js"></script>
    <script src="dist/js/app.init.mini-sidebar.js"></script>
    <!-- Theme settings -->
    <script src="dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <script src="assets/libs/chart.js/dist/chart.min.js"></script>
    <script src="assets/libs/gaugeJS/dist/gauge.min.js"></script>
    <script src="assets/libs/flot/excanvas.min.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="dist/js/pages/dashboards/dashboard2.js"></script>
@endsection;