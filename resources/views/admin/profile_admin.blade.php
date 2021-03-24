<?php $page="profile_admin";?>
@extends('layouts.layout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Profile</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <!-- Page Content -->
            <div class="row">
                <input type="hidden" name="id" id="id" value="{{Auth::user()->id}}">
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">

                            <!-- Profile Settings Form -->
                            <h5 class="card-title">My Profile</h5>
                                <div class="row form-row">
                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <div class="change-avatar" style="display: flex;">
                                                <div class="profile-img">
                                                    <img src="<?php if(Auth::user()->photo) echo "uploads/photo/".Auth::user()->photo;else echo "assets_admin/img/features/feature-01.jpg"?>"
                                                         style="width:100px; height: 100px;" alt="Photo" id="profile_photo">
                                                </div>
                                                <div class="upload-img" style="padding-top:25px; padding-left:20px;">
                                                    <div class="change-photo-btn" style="background-color: #20c0f3; border-radius: 50px; color: #fff;cursor: pointer;display: block;font-size: 13px;
                                                        font-weight: 600;padding: 10px 15px;position: relative;transition: .3s;text-align: center;margin: 0 0 10px;width: 150px;">
                                                                <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                        <input type="file" class="upload" name="photo" id="photo" accept="image/*" style="bottom: 0;cursor: pointer;filter: alpha(opacity=0);left: 0;
                                                            margin: 0;opacity: 0;padding: 0;position: absolute;right: 0;top: 0;width: 220px;">
                                                    </div>
                                                    <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Username<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name" id="name" value="<?php echo $data['admin']->name;?>" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label>Email<span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" name="email" id="email" value="<?php echo $data['admin']->email;?>" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="address" id="address" value="<?php echo $data['admin']->address;?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $data['admin']->phone;?>">
                                        </div>
                                        <div id="edit_error"></div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary" id="edit_save_btn">Save Changes</button>
                            <!-- /Profile Settings Form -->

                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Change Password</h5>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">

                                    <div class="form-group">
                                        <label>Old Password<span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="old_password" name="old_password">
                                    </div>
                                    <div class="form-group">
                                        <label>New Password<span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="new_password" name="new_password">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password<span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="new_pass_confirm" name="new_pass_confirm">
                                    </div>
                                    <div id="password_msg"></div>
                                    <button class="btn btn-primary" type="submit" id="save_pass" name="save_pass">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /Page Content -->
            <div></div>

        </div>
    </div>
    <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#profile_photo').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }else{
            $('#profile_photo').attr('src', "{{asset('assets_admin/img/features/feature-01.jpg')}}");
        }
    }

    $("#photo").change(function() {
        readURL(this);
    });

    $('#save_pass').click(function () {
        var data = new FormData();
        data.append('id', $('#id').val());
        data.append('old_password', $('#old_password').val());
        data.append('new_password', $('#new_password').val());
        data.append('new_pass_confirm', $('#new_pass_confirm').val());
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:'save_password',
            type:'POST',
            processData: false,
            contentType: false,
            data: data,
            success:function (e) {
                if(e){
                    if(e.success == true){
                        $('#old_password').val('');
                        $('#new_password').val('');
                        $('#new_pass_confirm').val('');
                        $('#password_msg').html('<p style="color: darkgreen; text-align: center;">Successfully updated!</p>');
                        window.location.reload();
                    }else{
                        $('#password_msg').html('<p style="color: red;text-align: center;">Something went wrong. Please check input fields.</p>');
                    }
                }
            }
        })

    });

    $('#edit_save_btn').click(function () {
        let photo = $('#photo')[0].files;
        var data = new FormData();
        data.append('id', $('#id').val());
        data.append('name',$('#name').val());
        data.append('email', $('#email').val());
        data.append('phone', $('#phone').val());
        data.append('address', $('#address').val());
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
                        $('#name').val(user.name);
                        $('#email').val(user.email);
                        $('#phone').val(user.phone);
                        $('#address').val(user.address);
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
</script>
@endsection
