<?php $__env->startSection('page-content'); ?>

    <br>
    <div class="block full">
        <!-- All Orders Title -->
        <div class="block-title">
            
            
            
            <h2><strong>Bets</strong> details</h2>
        </div>
        <!-- END All Orders Title -->

        <!-- All Orders Content -->
        <table id="ecom-orders" class="table table-bordered table-striped table-vcenter">
            <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Client</th>
                <th class="text-center">Detail</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Type</th>
                <th class="text-center">Time</th>
                <th class="text-center">Comment</th>

            </tr>
            </thead>
            <tbody id="bets">
            <?php for($i = 0 ; $i < sizeof($data); $i ++){?>
            <tr>
                <td class="text-center"><?php echo $data[$i]->id;?></td>
                <td class="text-center"><?php echo $data[$i]->client;?></td>
                <td class="text-left">
                    <?php
                $bets = json_decode($data[$i]->bets);

                for($j = 0; $j < sizeof($bets); $j++){ ?>
                    <div class="row">
                        <div class="col-md-2"><?php echo "#".$bets[$j]->wagerId;?></div>
                        <div class="col-md-6"><?php echo $bets[$j]->teamName;?></div>
                        <div class="col-md-2"><?php echo $bets[$j]->wagerType."(".$bets[$j]->odds.")";?></div>
                        <div class="col-md-2"><?php if ($data[$i]->bets_type=='single') echo "$".$bets[$j]->amount;?></div>

                    </div>
                    <?php
                }
                ?>
                </td>
                <td class="text-center"><?php echo "$".$data[$i]->bets_amount;?></td>
                <td class="text-center"><?php echo $data[$i]->bets_type;?></td>
                <td class="text-center"><?php echo $data[$i]->created_at;?></td>
                <td class="text-center"><?php echo $data[$i]->comment;?></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        <!-- END All Orders Content -->
    </div>
    <script>

        $(document).ready(function () {
            $('.sidebar-nav a').removeClass('active');
            $('#betsdetail').addClass('active');
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel\Laravel_blade\bet\resources\views/user/betsdetail.blade.php ENDPATH**/ ?>