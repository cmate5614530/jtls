<?php echo $__env->make('inc.config', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<?php echo $__env->make('inc.template_start', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<?php echo $__env->make('inc.page_head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

<!-- Page content -->
<div id="page-content">
    <!-- eCommerce Dashboard Header -->
    <div class="content-header">
        <ul class="nav-horizontal text-center">
            <li class="active">
                <a href="page_ecom_dashboard.php"><i class="fa fa-bar-chart"></i> Dashboard</a>
            </li>
            <li>
                <a href="page_ecom_orders.php"><i class="gi gi-shop_window"></i> Orders</a>
            </li>
            <li>
                <a href="page_ecom_order_view.php"><i class="gi gi-shopping_cart"></i> Order View</a>
            </li>
            <li>
                <a href="page_ecom_products.php"><i class="gi gi-shopping_bag"></i> Products</a>
            </li>
            <li>
                <a href="page_ecom_product_edit.php"><i class="gi gi-pencil"></i> Product Edit</a>
            </li>
            <li>
                <a href="page_ecom_customer_view.php"><i class="gi gi-user"></i> Customer View</a>
            </li>
        </ul>
    </div>
    <!-- END eCommerce Dashboard Header -->

    <!-- Quick Stats -->
    <div class="row text-center">
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background">
                    <h4 class="widget-content-light"><strong>Pending</strong> Orders</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 animation-expandOpen">3</span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong>Conversion</strong> Rate</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">4.7%</span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong>Orders</strong> Today</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">120</span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong>Earnings</strong> Today</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">$ 4.250</span></div>
            </a>
        </div>
    </div>
    <!-- END Quick Stats -->

    <!-- eShop Overview Block -->
    <div class="block full">
        <!-- eShop Overview Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <div class="btn-group btn-group-sm">
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default dropdown-toggle" data-toggle="dropdown">Last Year <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="active">
                            <a href="javascript:void(0)">Last Year</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Last Month</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">This Month</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Today</a>
                        </li>
                    </ul>
                </div>
                <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
            </div>
            <h2><strong>eShop</strong> Overview</h2>
        </div>
        <!-- END eShop Overview Title -->

        <!-- eShop Overview Content -->
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="row push">
                    <div class="col-xs-6">
                        <h3><strong class="animation-fadeInQuick">45.000</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Total Orders</a></small></h3>
                    </div>
                    <div class="col-xs-6">
                        <h3><strong class="animation-fadeInQuick">$ 1.200,00</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Cart Value</a></small></h3>
                    </div>
                    <div class="col-xs-6">
                        <h3><strong class="animation-fadeInQuick">1.520.000</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Visits</a></small></h3>
                    </div>
                    <div class="col-xs-6">
                        <h3><strong class="animation-fadeInQuick">28.000</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Customers</a></small></h3>
                    </div>
                    <div class="col-xs-6">
                        <h3><strong class="animation-fadeInQuick">3.5%</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Conv. Rate</a></small></h3>
                    </div>
                    <div class="col-xs-6">
                        <h3><strong class="animation-fadeInQuick">4.250</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Products</a></small></h3>
                    </div>
                    <div class="col-xs-6">
                        <h3><strong class="animation-fadeInQuick">$ 260.000,00</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Net Profit</a></small></h3>
                    </div>
                    <div class="col-xs-6">
                        <h3><strong class="animation-fadeInQuick">$ 16.850,00</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Payment Fees</a></small></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-8">
                <!-- Flot Charts (initialized in js/pages/ecomDashboard.js), for more examples you can check out http://www.flotcharts.org/ -->
                <div id="chart-overview" style="height: 350px;"></div>
            </div>
        </div>
        <!-- END eShop Overview Content -->
    </div>
    <!-- END eShop Overview Block -->

    <!-- Orders and Products -->
    <div class="row">
        <div class="col-lg-6">
            <!-- Latest Orders Block -->
            <div class="block">
                <!-- Latest Orders Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="page_ecom_orders.php" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show All"><i class="fa fa-eye"></i></a>
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2><strong>Latest</strong> Orders</h2>
                </div>
                <!-- END Latest Orders Title -->

                <!-- Latest Orders Content -->
                <table class="table table-borderless table-striped table-vcenter table-bordered">
                    <tbody>
                    <tr>
                        <td class="text-center" style="width: 100px;"><a href="javascript:void(0)"><strong>ORD.685116</strong></a></td>
                        <td class="hidden-xs"><a href="javascript:void(0)">Gerald Berry</a></td>
                        <td class="hidden-xs">Paypal</td>
                        <td class="text-right"><strong>$65,00</strong></td>
                        <td class="text-right"><span class="label label-success">Delivered</span></td>
                    </tr>
                    <tr>
                        <td class="text-center"><a href="javascript:void(0)"><strong>ORD.685115</strong></a></td>
                        <td class="hidden-xs"><a href="javascript:void(0)">Patrick Bates</a></td>
                        <td class="hidden-xs">Bank wire</td>
                        <td class="text-right"><strong>$268,00</strong></td>
                        <td class="text-right"><span class="label label-danger">Canceled</span></td>
                    </tr>
                    <tr>
                        <td class="text-center"><a href="javascript:void(0)"><strong>ORD.685114</strong></a></td>
                        <td class="hidden-xs"><a href="javascript:void(0)">Ethan Greene</a></td>
                        <td class="hidden-xs">Paypal</td>
                        <td class="text-right"><strong>$362,00</strong></td>
                        <td class="text-right"><span class="label label-success">Delivered</span></td>
                    </tr>
                    <tr>
                        <td class="text-center"><a href="javascript:void(0)"><strong>ORD.685113</strong></a></td>
                        <td class="hidden-xs"><a href="javascript:void(0)">Bruce Hicks</a></td>
                        <td class="hidden-xs">Paypal</td>
                        <td class="text-right"><strong>$23,00</strong></td>
                        <td class="text-right"><span class="label label-warning">Processing</span></td>
                    </tr>
                    <tr>
                        <td class="text-center"><a href="javascript:void(0)"><strong>ORD.685112</strong></a></td>
                        <td class="hidden-xs"><a href="javascript:void(0)">Harry Burke</a></td>
                        <td class="hidden-xs">Bank wire</td>
                        <td class="text-right"><strong>$1360,00</strong></td>
                        <td class="text-right"><span class="label label-success">Delivered</span></td>
                    </tr>
                    <tr>
                        <td class="text-center"><a href="javascript:void(0)"><strong>ORD.685111</strong></a></td>
                        <td class="hidden-xs"><a href="javascript:void(0)">Nancy Rose</a></td>
                        <td class="hidden-xs">Bank wire</td>
                        <td class="text-right"><strong>$2685,00</strong></td>
                        <td class="text-right"><span class="label label-warning">Processing</span></td>
                    </tr>
                    <tr>
                        <td class="text-center"><a href="javascript:void(0)"><strong>ORD.685110</strong></a></td>
                        <td class="hidden-xs"><a href="javascript:void(0)">Helen Jensen</a></td>
                        <td class="hidden-xs">Paypal</td>
                        <td class="text-right"><strong>$128,00</strong></td>
                        <td class="text-right"><span class="label label-success">Delivered</span></td>
                    </tr>
                    <tr>
                        <td class="text-center"><a href="javascript:void(0)"><strong>ORD.685109</strong></a></td>
                        <td class="hidden-xs"><a href="javascript:void(0)">Harry Medina</a></td>
                        <td class="hidden-xs">Check</td>
                        <td class="text-right"><strong>$3150,00</strong></td>
                        <td class="text-right"><span class="label label-warning">Processing</span></td>
                    </tr>
                    <tr>
                        <td class="text-center"><a href="javascript:void(0)"><strong>ORD.685108</strong></a></td>
                        <td class="hidden-xs"><a href="javascript:void(0)">Ryan Hopkins</a></td>
                        <td class="hidden-xs">Check</td>
                        <td class="text-right"><strong>$750,00</strong></td>
                        <td class="text-right"><span class="label label-success">Delivered</span></td>
                    </tr>
                    <tr>
                        <td class="text-center"><a href="javascript:void(0)"><strong>ORD.685107</strong></a></td>
                        <td class="hidden-xs"><a href="javascript:void(0)">Anthony Franklin</a></td>
                        <td class="hidden-xs">Paypal</td>
                        <td class="text-right"><strong>$630,00</strong></td>
                        <td class="text-right"><span class="label label-danger">Canceled</span></td>
                    </tr>
                    </tbody>
                </table>
                <!-- END Latest Orders Content -->
            </div>
            <!-- END Latest Orders Block -->
        </div>
        <div class="col-lg-6">
            <!-- Top Products Block -->
            <div class="block">
                <!-- Top Products Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="page_ecom_products.php" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show All"><i class="fa fa-eye"></i></a>
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2><strong>Top</strong> Products</h2>
                </div>
                <!-- END Top Products Title -->

                <!-- Top Products Content -->
                <table class="table table-borderless table-striped table-vcenter table-bordered">
                    <tbody>
                    <tr>
                        <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.php"><strong>PID.8765</strong></a></td>
                        <td><a href="page_ecom_product_edit.php">iPhone 6 Plus 32GB</a></td>
                        <td class="text-center"><strong>435</strong> orders</td>
                        <td class="hidden-xs text-center">
                            <div class="text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.php"><strong>PID.8764</strong></a></td>
                        <td><a href="page_ecom_product_edit.php">Wii U</a></td>
                        <td class="text-center"><strong>502</strong> orders</td>
                        <td class="hidden-xs text-center">
                            <div class="text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.php"><strong>PID.8763</strong></a></td>
                        <td><a href="page_ecom_product_edit.php">Samsung Galaxy Note 4 32GB</a></td>
                        <td class="text-center"><strong>440</strong> orders</td>
                        <td class="hidden-xs text-center">
                            <div class="text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.php"><strong>PID.8762</strong></a></td>
                        <td><a href="page_ecom_product_edit.php">Playstation 4</a></td>
                        <td class="text-center"><strong>750</strong> orders</td>
                        <td class="hidden-xs text-center">
                            <div class="text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.php"><strong>PID.8761</strong></a></td>
                        <td><a href="page_ecom_product_edit.php">HTC One 32GB</a></td>
                        <td class="text-center"><strong>420</strong> orders</td>
                        <td class="hidden-xs text-center">
                            <div class="text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.php"><strong>PID.8760</strong></a></td>
                        <td><a href="page_ecom_product_edit.php">Xbox One</a></td>
                        <td class="text-center"><strong>650</strong> orders</td>
                        <td class="hidden-xs text-center">
                            <div class="text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.php"><strong>PID.8762</strong></a></td>
                        <td><a href="page_ecom_product_edit.php">iPad Mini Retina 64GB</a></td>
                        <td class="text-center"><strong>521</strong> orders</td>
                        <td class="hidden-xs text-center">
                            <div class="text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.php"><strong>PID.8761</strong></a></td>
                        <td><a href="page_ecom_product_edit.php">LG Tab 10.1</a></td>
                        <td class="text-center"><strong>427</strong> orders</td>
                        <td class="hidden-xs text-center">
                            <div class="text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.php"><strong>PID.8760</strong></a></td>
                        <td><a href="page_ecom_product_edit.php">Macbook Pro 15' Retina</a></td>
                        <td class="text-center"><strong>392</strong> orders</td>
                        <td class="hidden-xs text-center">
                            <div class="text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.php"><strong>PID.8760</strong></a></td>
                        <td><a href="page_ecom_product_edit.php">PS Vita</a></td>
                        <td class="text-center"><strong>380</strong> orders</td>
                        <td class="hidden-xs text-center">
                            <div class="text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <!-- END Top Products Content -->
            </div>
            <!-- END Top Products Block -->
        </div>
    </div>
    <!-- END Orders and Products -->
</div>
<!-- END Page Content -->

<?php echo $__env->make('inc.page_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<?php echo $__env->make('inc.template_scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/ecomDashboard.js"></script>
<script>$(function(){ EcomDashboard.init(); });</script>

<?php echo $__env->make('inc.template_end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<?php /**PATH F:\Laravel\Laravel_blade\bet\resources\views/user_dashboard.blade.php ENDPATH**/ ?>