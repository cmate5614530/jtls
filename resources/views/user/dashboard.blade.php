@extends('user.layout')
@section('page-content')

    <div class="row text-center">
        <div class="col-sm-6 col-lg-4">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background">
                    <h4 class="widget-content-light"><strong>Total Bets</strong></h4>
                </div>
                <div class="widget-extra-full"><span class="h2 animation-expandOpen">3000</span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-4">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong>Total Amount Won</strong> </h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">2500</span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-4">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong>Total Amount Lost</strong> </h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">500</span></div>
            </a>
        </div>
    </div>
    <div class="block full">
        <!-- All Orders Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
            </div>
            <h2><strong>All</strong> Orders</h2>
        </div>
        <!-- END All Orders Title -->

        <!-- All Orders Content -->
        <table id="ecom-orders" class="table table-bordered table-striped table-vcenter">
            <thead>
            <tr>
                <th class="text-center" style="width: 100px;">ID</th>
                <th class="visible-lg">Customer</th>
                <th class="text-center visible-lg">Products</th>
                <th class="hidden-xs">Payment</th>
                <th class="text-right hidden-xs">Value</th>
                <th>Status</th>
                <th class="hidden-xs text-center">Submitted</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685199</strong></a></td>
                <td class="visible-lg"><a href="javascript:void(0)">Ryan Hopkins</a></td>
                <td class="text-center visible-lg"><a href="javascript:void(0)">4</a></td>
                <td class="hidden-xs">Credit Card</td>
                <td class="text-right hidden-xs"><strong>$1776,00</strong></td>
                <td><span class="label label-warning">Processing</span></td>
                <td class="hidden-xs text-center">25/12/2014</td>

            </tr>

            <tr>
                <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685197</strong></a></td>
                <td class="visible-lg"><a href="javascript:void(0)">Ethan Greene</a></td>
                <td class="text-center visible-lg"><a href="javascript:void(0)">4</a></td>
                <td class="hidden-xs">Bank Wire</td>
                <td class="text-right hidden-xs"><strong>$2240,00</strong></td>
                <td><span class="label label-info">For delivery</span></td>
                <td class="hidden-xs text-center">28/11/2014</td>

            </tr>

            <tr>
                <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685192</strong></a></td>
                <td class="visible-lg"><a href="javascript:void(0)">Harry Medina</a></td>
                <td class="text-center visible-lg"><a href="javascript:void(0)">3</a></td>
                <td class="hidden-xs">Paypal</td>
                <td class="text-right hidden-xs"><strong>$2252,00</strong></td>
                <td><span class="label label-warning">Processing</span></td>
                <td class="hidden-xs text-center">05/06/2014</td>

            </tr>
            <tr>
                <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685191</strong></a></td>
                <td class="visible-lg"><a href="javascript:void(0)">Patrick Bates</a></td>
                <td class="text-center visible-lg"><a href="javascript:void(0)">5</a></td>
                <td class="hidden-xs">Bank Wire</td>
                <td class="text-right hidden-xs"><strong>$676,00</strong></td>
                <td><span class="label label-warning">Processing</span></td>
                <td class="hidden-xs text-center">11/05/2014</td>

            </tr>
            <tr>
                <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685190</strong></a></td>
                <td class="visible-lg"><a href="javascript:void(0)">Ethan Greene</a></td>
                <td class="text-center visible-lg"><a href="javascript:void(0)">3</a></td>
                <td class="hidden-xs">Paypal</td>
                <td class="text-right hidden-xs"><strong>$2027,00</strong></td>
                <td><span class="label label-warning">Processing</span></td>
                <td class="hidden-xs text-center">25/03/2014</td>

            </tr>
            <tr>
                <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685189</strong></a></td>
                <td class="visible-lg"><a href="javascript:void(0)">Harry Burke</a></td>
                <td class="text-center visible-lg"><a href="javascript:void(0)">5</a></td>
                <td class="hidden-xs">Credit Card</td>
                <td class="text-right hidden-xs"><strong>$440,00</strong></td>
                <td><span class="label label-danger">Canceled</span></td>
                <td class="hidden-xs text-center">21/12/2014</td>

            </tr>
            </tbody>
        </table>
        <!-- END All Orders Content -->
    </div>
    
@endsection
