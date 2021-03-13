<?php $__env->startSection('page-content'); ?>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-3">
            <label for="date" class=" control-label">Select date:</label>
            <input type="date" id="datePicker" name="datePicker" class="form-control">
        </div>
        <div class="col-md-6" style="margin-top: 23px;">
            <button class="btn btn-success" id="get_info_btn">select</button>
        </div>
    </div>
    <br>
    <div class="row text-center">
        <div class="col-sm-6 col-lg-4">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background">
                    <h4 class="widget-content-light"><strong>Total Bets</strong></h4>
                </div>
                <div class="widget-extra-full"><span class="h2 animation-expandOpen" id="total_bets"></span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-4">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong>Total Amount Won</strong> </h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen" id="total_amount_won"></span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-4">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong>Total Amount Lost</strong> </h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen" id="total_amount_lost"></span></div>
            </a>
        </div>
    </div>
    <div class="block full">
        <!-- All Orders Title -->
        <div class="block-title">



            <h2><strong>All</strong> Bets</h2>
        </div>
        <!-- END All Orders Title -->

        <!-- All Orders Content -->
        <table id="ecom-orders" class="table table-bordered table-striped table-vcenter">
            <thead>
            <tr>
                <th class="text-center" style="width: 100px;">ID</th>
                <th class="text-center">Client</th>
                <th class="text-center">Bet Amount</th>
                <th class="text-center">Paid Amount</th>
                <th class="text-center">Status</th>
                <th class="text-center">Submitted Time</th>

            </tr>
            </thead>
            <tbody id="bets">

















































            </tbody>
        </table>
        <!-- END All Orders Content -->
    </div>
<script>
    $('#get_info_btn').click(function () {
        console.log($('#datePicker').val());
        get_bets($('#datePicker').val());
    });
    $(document).ready(function () {
        $('.sidebar-nav a').removeClass('active');
        $('#dashboard').addClass('active');
        var now = new Date();

        var day = ("0" + now.getDate()).slice(-2);
        var month = ("0" + (now.getMonth() + 1)).slice(-2);

        var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

        $('#datePicker').val(today);
        get_bets(today);
    });
    function get_bets(date) {
        let _token   = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url:'user-get-bets',
            type:'post',
            data:{date: date, _token:_token},
            success:function (res) {
                if(res){
                    if(res.success == true){
                        console.log('---the result---', res.data);
                        var data = res.data;
                        var html = '', total_bets = 0, total_amount_won = 0, total_amount_lost = 0;
                        for(var i = 0; i< data.length; i ++){
                            var bet_status = data[i].payout_status == 0 ? 'lost' : 'won';
                            var payout_amount = data[i].payout_amount ? data[i].payout_amount : 0;
                            html += '<tr>' +
                                        '<td class="text-center"><a href="user-bets-detail?id='+ data[i].id + '"><strong>#' + data[i].id +'</strong></a>' + '</td>' +
                                        '<td class="text-center">' + data[i].client + '</td>' +
                                        '<td class="text-center">$ ' + data[i].bets_amount + '</td>' +
                                        '<td class="text-center">$ ' + payout_amount + '</td>' +
                                        '<td class="text-center">' + bet_status + '</td>' +
                                        '<td class="text-center">' + data[i].created_at + '</td>' +
                                    '</tr>';
                            total_bets += data[i].bets_amount;
                            total_amount_won += data[i].payout_amount;
                        }
                        total_amount_lost = total_bets - total_amount_won;
                        $('#total_bets').html('$ '+total_bets);
                        $('#total_amount_won').html('$ '+total_amount_won);
                        $('#total_amount_lost').html('$ '+total_amount_lost);
                        $('#bets').html(html);
                    }else{
                        alert('Something went wrong. Please try again.');
                    }
                }
            }

        });
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel\Laravel_blade\bet\resources\views/user/dashboard.blade.php ENDPATH**/ ?>