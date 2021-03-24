<?php $page="users_admin";?>

<?php $__env->startSection('content'); ?>
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto">
                        <h3 class="page-title">User List</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">User List</li>
                        </ul>
                    </div>
                    <div class="col-sm-5 col">
                        <a href="#Add_Specialities_details" data-toggle="modal" class="btn btn-primary float-right mt-2">Add</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-hover table-center mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Created Date</th>
                                        <th>Phone</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($data['users'] as $user){?>
                                    <tr>
                                        <td><?php echo $user->id;?></td>

                                        <td>
                                            <h2 class="table-avatar">
                                                <a class="avatar avatar-sm mr-2" data-toggle="modal" onclick="edit_user_details(<?php echo $user->id;?>)" style="cursor: pointer;">
                                                    <img class="avatar-img rounded-circle"
                                                         src="<?php if($user->photo) echo "uploads/photo/".$user->photo;else echo "assets_admin/img/features/feature-01.jpg";?>" alt="Photo">
                                                </a>
                                                <a data-toggle="modal" onclick="edit_user_details(<?php echo $user->id;?>)" style="cursor: pointer;"><?php echo $user->name;?></a>
                                            </h2>
                                        </td>
                                        <td><?php echo $user->email;?></td>
                                        <td><?php echo $user->address;?></td>

                                        <td><?php $date = date_create($user->created_at); echo date_format($date, 'Y-m-d');?></td>
                                        <td><?php echo $user->phone;?></td>


                                        <td class="text-right">
                                            <div class="actions">
                                                <a class="btn btn-sm bg-success-light" data-toggle="modal" onclick="edit_user_details(<?php echo $user->id;?>)">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>
                                                <a  data-toggle="modal" onclick="delete_user(<?php echo $user->id;?>)" class="btn btn-sm bg-danger-light">
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


    <!-- Add Modal -->
    <div class="modal fade" id="Add_Specialities_details" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('admin.saveuser')); ?>" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row form-row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>User Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Email<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Password<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Photo</label>
                                    <input type="file" class="form-control" name="photo" accept="image/*">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /ADD Modal -->

    <!-- Edit Details Modal -->
    <div class="modal fade" id="edit_user" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit User</h5>
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
        function edit_user_details(user_id) {
            var users = <?php echo json_encode($data['users']);?>;
            $('#edit_user').modal('show');
            for(var i=0; i< users.length; i++){
                if(users[i].id == user_id){
                    var phone = users[i].phone == null ? '': users[i].phone;
                    var address = users[i].address == null ? '': users[i].address;
                    var photo = users[i].photo == null ? 'assets_admin/img/features/feature-01.jpg': 'uploads/photo/'+users[i].photo;
                    var html = '<div class="col-12 col-sm-6">' +
                        '                                    <input type="hidden" id="edit_id" name="edit_id" value="'+users[i].id+'">' +
                        '                                <div class="form-group">' +
                        '                                    <label>User Name<span class="text-danger">*</span></label>' +
                        '                                    <input type="text" class="form-control" id="edit_name" name="edit_name" required value="'+users[i].name+'">' +
                        '                                </div>' +
                        '                            </div>' +
                        '                            <div class="col-12 col-sm-6">' +
                        '                                <div class="form-group">' +
                        '                                    <label>Email<span class="text-danger">*</span></label>' +
                        '                                    <input type="email" class="form-control" id="edit_email" name="edit_email" required value="'+users[i].email+'">' +
                        '                                </div>' +
                        '                            </div>' +
                        '                            <div class="col-12 col-sm-6">' +
                        '                                <div class="form-group">' +
                        '                                    <label>Photo</label>' +
                        '                                    <img class="avatar-img rounded-circle"  style="width:2.5rem;" src="'+ photo +'">' +
                        '                                    <input type="file"  class="form-control" id="edit_photo" name="edit_photo" accept="image/*">' +
                        '                                </div>' +
                        '                            </div>' +
                        '                            <div class="col-12">' +
                        '                                <div class="form-group">' +
                        '                                    <label>Phone</label>' +
                        '                                    <input type="text" class="form-control" id="edit_phone" name="edit_phone" value="'+phone+'">' +
                        '                                </div>' +
                        '                            </div>' +
                        '                            <div class="col-12">' +
                        '                                <div class="form-group">' +
                        '                                    <label>Address</label>' +
                        '                                    <input type="text" class="form-control" id="edit_address" name="edit_address" value="'+address+'">' +
                        '                                </div>' +
                        '                            </div>'

                    $('#edit_modal_content').html(html);
                }
            }
        }

        $('#edit_save_btn').click(function () {
            let photo = $('#edit_photo')[0].files;
            var data = new FormData();
            data.append('id', $('#edit_id').val());
            data.append('name',$('#edit_name').val());
            data.append('email', $('#edit_email').val());
            data.append('phone', $('#edit_phone').val());
            data.append('address', $('#edit_address').val());
            if(photo.length > 0){
                data.append('photo', photo[0]);
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:'save-edit',
                type:'POST',
                processData: false,
                contentType: false,
                data: data,
                success:function (e) {
                    if(e){
                        if(e.success == true){
                            //console.log(e.user);
                            var user = e.user;
                            $('#edit_name').val(user.name);
                            $('#edit_email').val(user.email);
                            $('#edit_phone').val(user.phone);
                            $('#edit_address').val(user.address);
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

        function delete_user(i) {
            $('#delete_modal').modal('show');
            $('#del_btn').click(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: 'del-user',
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

<?php echo $__env->make('layouts.layout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel\Laravel_blade\bet\resources\views/admin/users_admin.blade.php ENDPATH**/ ?>