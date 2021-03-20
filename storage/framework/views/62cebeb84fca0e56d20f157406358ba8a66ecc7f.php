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
                                        <th>Pharmacy Name</th>
                                        <th>Pharmacy Address</th>
                                        <th>Created Date</th>
                                        <th>Phone</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>#PN001</td>

                                        <td>
                                            <h2 class="table-avatar">
                                                <a class="avatar avatar-sm mr-2" data-toggle="modal" href="#edit_specialities_details">
                                                    <img class="avatar-img rounded-circle" src="../assets_admin/img/features/feature-01.jpg" alt="product image">
                                                </a>
                                                <a data-toggle="modal" href="#edit_specialities_details">Medlife Medical</a>
                                            </h2>
                                        </td>

                                        <td>96 Red Hawk Road<br> Cyrus, MN 56323 </td>

                                        <td>12-05-2020</td>

                                        <td>320-795-8815</td>

                                        <td class="text-right">
                                            <div class="actions">
                                                <a class="btn btn-sm bg-success-light" data-toggle="modal" href="#edit_specialities_details">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>
                                                <a  data-toggle="modal" href="#delete_modal" class="btn btn-sm bg-danger-light">
                                                    <i class="fe fe-trash"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#SP002</td>

                                        <td>
                                            <h2 class="table-avatar">
                                                <a class="avatar avatar-sm mr-2" data-toggle="modal" href="#edit_specialities_details">
                                                    <img class="avatar-img rounded-circle" src="../assets_admin/img/features/feature-02.jpg" alt="product image">
                                                </a>
                                                <a data-toggle="modal" href="#edit_specialities_details">PharmaMed Medical</a>
                                            </h2>
                                        </td>
                                        <td>3130 Murry Street<br>Princess Anne, VA 23456</td>

                                        <td>13-05-2020</td>

                                        <td>913-631-2538</td>

                                        <td class="text-right">
                                            <div class="actions">
                                                <a class="btn btn-sm bg-success-light" data-toggle="modal" href="#edit_specialities_details">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>
                                                <a  data-toggle="modal" href="#delete_modal" class="btn btn-sm bg-danger-light">
                                                    <i class="fe fe-trash"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#SP002</td>

                                        <td>
                                            <h2 class="table-avatar">
                                                <a class="avatar avatar-sm mr-2" data-toggle="modal" href="#edit_specialities_details">
                                                    <img class="avatar-img rounded-circle" src="../assets_admin/img/features/feature-02.jpg" alt="product image">
                                                </a>
                                                <a data-toggle="modal" href="#edit_specialities_details">The Pill Club Medical</a>
                                            </h2>
                                        </td>

                                        <td>3503 Flint Street<br>Saipan, MP 96950</td>

                                        <td>14-05-2020</td>

                                        <td>816-270-2336</td>

                                        <td class="text-right">
                                            <div class="actions">
                                                <a class="btn btn-sm bg-success-light" data-toggle="modal" href="#edit_specialities_details">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>
                                                <a  data-toggle="modal" href="#delete_modal" class="btn btn-sm bg-danger-light">
                                                    <i class="fe fe-trash"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
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
                    <h5 class="modal-title">Add Pharmacy</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row form-row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Pharmacy Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file"  class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Pharmacy Details</label>
                                    <textarea class="form-control" rows="4"></textarea>
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
    <div class="modal fade" id="edit_specialities_details" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Pharmacy</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row form-row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Pharmacy Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file"  class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Pharmacy Details</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                    </form>
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
                        <button type="button" class="btn btn-primary">Save </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
    </div>
    <!-- /Main Wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel\Laravel_blade\bet\resources\views/admin/users_admin.blade.php ENDPATH**/ ?>