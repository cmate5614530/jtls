<?php $page="bets_admin";?>

<?php $__env->startSection('content'); ?>
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto">
                        <h3 class="page-title">Bets</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Bets</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-hover table-center mb-0 table-bordered ">
                                    <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Client</th>
                                        <th class="text-center">Detail</th>
                                        <th class="text-center">Amount</th>
                                        <th class="text-center">Type</th>
                                        <th class="text-center">Payout</th>
                                        <th class="text-center">Comment</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($data['bets'] as $bet){?>
                                    <tr>
                                        <td><?php echo $bet->id;?></td>

                                        <td>
                                            <?php echo $bet->client;?>
                                        </td>
                                        <td>
                                            <?php
                                            $bets = json_decode($bet->bets);

                                            for($j = 0; $j < sizeof($bets); $j++){ ?>
                                            <div class="row">
                                                <div class="col-md-2 col-xs-12"><?php echo "#".$bets[$j]->wagerId;?></div>
                                                <div class="col-md-5 col-xs-12"><?php echo $bets[$j]->teamName;?></div>
                                                <div class="col-md-3 col-xs-12"><?php echo $bets[$j]->wagerType."(".$bets[$j]->odds.")";?></div>
                                                <div class="col-md-2 col-xs-12"><?php if ($bet->bets_type=='single') echo "$".$bets[$j]->amount;?></div>

                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td class="text-right"><?php echo "$ ".$bet->bets_amount;?></td>
                                        <td><?php echo $bet->bets_type;?></td>

                                        <td class="text-right"><?php echo $bet->payout_amount?"$ ".$bet->payout_amount:'';?></td>
                                        <td><?php echo $bet->comment;?></td>


                                        <td class="text-center">
                                            <div class="actions">
                                                <a class="btn btn-sm bg-success-light" data-toggle="modal" onclick="edit_bet(<?php echo $bet->id;?>)">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>
                                                <a  data-toggle="modal" onclick="delete_bet(<?php echo $bet->id;?>)" class="btn btn-sm bg-danger-light">
                                                    <i class="fe fe-trash"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->



    <!-- Edit Details Modal -->
    <div class="modal fade" id="edit_bet" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Payout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row form-row" id="edit_modal_content">

                    </div>
                    <div id="edit_error"></div>
                    <button type="button" class="btn btn-primary btn-block" id="edit_save_btn">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Details Modal -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" >
            <div class="modal-content">
                <!--	<div class="modal-header">
                        <h5 class="modal-title">Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>-->
                <div class="modal-body">
                    <div class="form-content p-2">
                        <h4 class="modal-title">Delete</h4>
                        <p class="mb-4">Are you sure want to delete?</p>
                        <button type="button" class="btn btn-primary" id="del_btn">Confirm </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
    </div>
    <!-- /Main Wrapper -->
    <script>
        $(document).ready(function () {

        });
        function edit_bet(bet_id) {
            var bets = <?php echo json_encode($data['bets']);?>;
            $('#edit_bet').modal('show');
            for(var i=0; i< bets.length; i++){
                if(bets[i].id == bet_id){
                    var comment = bets[i].comment?bets[i].comment:'';
                    var html = '                     <div class="col-12 col-sm-3">' +
                        '                                <input type="hidden" id="edit_id" name="edit_id" value="'+bets[i].id+'">' +
                        '                                <div class="form-group">' +
                        '                                    <label>Payout</label>' +
                        '                                    <input type="number" min="0" class="form-control" id="edit_payout" name="edit_payout" required value="'+bets[i].payout_amount+'">' +
                        '                                </div>' +
                        '                            </div>'+
                        '                            <div class="col-12">' +
                        '                                <div class="form-group">' +
                        '                                    <label>Comment</label>' +
                        '                                    <textarea rows="3" class="form-control" id="edit_comment" name="edit_comment" >'+ comment + '</textarea>' +
                        '                                </div>' +
                        '                            </div>' ;


                    $('#edit_modal_content').html(html);
                }
            }
        }

        $('#edit_save_btn').click(function () {
            var data = new FormData();
            data.append('id', $('#edit_id').val());
            data.append('payout_amount',$('#edit_payout').val());
            data.append('comment',$('#edit_comment').val());
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:'save-payout',
                type:'POST',
                processData: false,
                contentType: false,
                data: data,
                success:function (e) {
                    if(e){
                        if(e.success == true){
                            //console.log(e.user);
                            var bet = e.bet;
                            $('#edit_payout').val(bet.payout_amount);
                            $('#edit_comment').val(bet.comment);
                            $('#edit_error').html('<p style="color: darkgreen; text-align: center;">Successfully updated!</p>');
                            window.location.reload();
                        }else{
                            //console.log('Something went wrong. Please check input fields.');
                            $('#edit_error').html('<p style="color: red;text-align: center;">Something went wrong. Please check input fields.</p>');
                        }
                    }
                }
            })
        });

        function delete_bet(i) {
            $('#delete_modal').modal('show');
            $('#del_btn').click(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: 'del-bet',
                    type: 'POST',
                    data: {id: i},
                    success: function (e) {
                        if(e.success){
                            $('#delete_modal').modal('hide');
                            window.location.reload();
                        }
                    }
                })
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel\Laravel_blade\bet\resources\views/admin/bets_admin.blade.php ENDPATH**/ ?>