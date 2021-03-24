<?php $page="index_admin";?>
@extends('layouts.layout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Welcome {{Auth::user()->name}}!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
										<span class="dash-widget-icon text-primary border-primary">
											<i class="fe fe-users"></i>
										</span>
                                <div class="dash-count">
                                    <h3><?php echo count($data['users']);?></h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Users</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
										<span class="dash-widget-icon text-success">
											<i class="fe fe-credit-card"></i>
										</span>
                                <div class="dash-count">
                                    <h3><?php echo $data['customer_count'];?></h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">

                                <h6 class="text-muted">Customers</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
										<span class="dash-widget-icon text-danger border-danger">
											<i class="fe fe-money"></i>
										</span>
                                <div class="dash-count">
                                    <h3>$ <?php echo $data['total_submitted_bets']-$data['total_payouts'];?></h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">

                                <h6 class="text-muted">Total Earnings</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-danger w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
										<span class="dash-widget-icon text-warning border-warning">
											<i class="fe fe-money"></i>
										</span>
                                <div class="dash-count">
                                    <h3>$ <?php echo $data['total_payouts'];?></h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">

                                <h6 class="text-muted">Total Payouts</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-warning w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6">

                    <!-- Sales Chart -->
                    <div class="card card-chart">
                        <div class="card-header">
                            <h4 class="card-title">Customers of this year</h4>
                        </div>
                        <div class="card-body">
                            <div id="morrisArea"></div>
                        </div>
                    </div>
                    <!-- /Sales Chart -->

                </div>
                <div class="col-md-12 col-lg-6">

                    <!-- Invoice Chart -->
                    <div class="card card-chart">
                        <div class="card-header">
                            <h4 class="card-title">Earnings of this year</h4>
                        </div>
                        <div class="card-body">
                            <div id="morrisLine"></div>
                        </div>
                    </div>
                    <!-- /Invoice Chart -->

                </div>
            </div>


        </div>
    </div>
    <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->
    <script>
        let customer_1 = <?php echo $data['customer_1'];?>;
        let customer_2 = <?php echo $data['customer_2'];?>;
        let customer_3 = <?php echo $data['customer_3'];?>;
        let customer_4 = <?php echo $data['customer_4'];?>;
        let customer_5 = <?php echo $data['customer_5'];?>;
        let customer_6 = <?php echo $data['customer_6'];?>;
        let customer_7 = <?php echo $data['customer_7'];?>;
        let customer_8 = <?php echo $data['customer_8'];?>;
        let customer_9 = <?php echo $data['customer_9'];?>;
        let customer_10 = <?php echo $data['customer_10'];?>;
        let customer_11 = <?php echo $data['customer_11'];?>;
        let customer_12 = <?php echo $data['customer_12'];?>;

        let earning_1 = <?php echo $data['earning_1'];?>;
        let earning_2 = <?php echo $data['earning_2'];?>;
        let earning_3 = <?php echo $data['earning_3'];?>;
        let earning_4 = <?php echo $data['earning_4'];?>;
        let earning_5 = <?php echo $data['earning_5'];?>;
        let earning_6 = <?php echo $data['earning_6'];?>;
        let earning_7 = <?php echo $data['earning_7'];?>;
        let earning_8 = <?php echo $data['earning_8'];?>;
        let earning_9 = <?php echo $data['earning_9'];?>;
        let earning_10 = <?php echo $data['earning_10'];?>;
        let earning_11 = <?php echo $data['earning_11'];?>;
        let earning_12 = <?php echo $data['earning_12'];?>;
    </script>
@endsection
