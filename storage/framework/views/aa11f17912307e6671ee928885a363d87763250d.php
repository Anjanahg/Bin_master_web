<?php $__env->startSection('styles'); ?>
    <style>
        .thumbnail{
            background-color: white;
            margin: 4%;
            height: 150px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(Auth::user()!=null): ?>
            <h1>Welcome to <?php echo e($council->name); ?></h1>
            <?php if(Auth::user()->type=="USER" and $client!=null): ?>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <a href="<?php echo e(route('add_garbage')); ?>">
                            <div class="thumbnail">
                                
                                <div class="caption">
                                    <h3>Add Garbage Record</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="<?php echo e(route('view_records')); ?>">
                            <div class="thumbnail">
                                
                                <div class="caption">
                                    <h3>View Garbage Records</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="<?php echo e(route('view__collection_records')); ?>">
                            <div class="thumbnail">
                                
                                <div class="caption">
                                    <h3>Garbage Collection Logs</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <div class="col-sm-6 col-md-3">
                        <a href="<?php echo e(route('view_complaint')); ?>">
                            <div class="thumbnail">
                                
                                <div class="caption">
                                    <h3>File a complaint</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="<?php echo e(route('user_complaints')); ?>">
                            <div class="thumbnail">
                                
                                <div class="caption">
                                    <h3>View Complaints</h3>
                                    <?php if($recent_activity==true): ?> <span class="label label-success">New Messeges</span> <?php endif; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php elseif(Auth::user()->type=="USER"): ?>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Alert!</strong> No collection points have been registered in your name. Some functions may not be available.
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="">
                        <div class="thumbnail">
                            
                            <div class="caption">
                                <h3>Edit Profile</h3>
                            </div>
                        </div>
                    </a>
                </div>
            <?php elseif(Auth::user()->type=="ADMIN"): ?>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <a href="<?php echo e(route('admin_complaints')); ?>">
                            <div class="thumbnail">
                                
                                <div class="caption">
                                    <h3>View Complaints</h3>
                                    <?php if($recent_activity==true): ?> <span class="label label-success">New Messeges</span> <?php endif; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="<?php echo e(route('manage_users')); ?>">
                            <div class="thumbnail">
                                
                                <div class="caption">
                                    <h3>Manage Users</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="<?php echo e(route('manage_collection_points')); ?>">
                            <div class="thumbnail">
                                
                                <div class="caption">
                                    <h3>Manage Collection Points</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="<?php echo e(route('view_route')); ?>">
                            <div class="thumbnail">
                                
                                <div class="caption">
                                    <h3>View Collection Route</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="<?php echo e(route('edit_council_pos_get')); ?>">
                            <div class="thumbnail">
                                
                                <div class="caption">
                                    <h3>Edit Council Details</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="<?php echo e(route('manage_areas')); ?>">
                            <div class="thumbnail">
                                
                                <div class="caption">
                                    <h3>Manage Collection Areas</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="<?php echo e(route('manage_trucks')); ?>">
                            <div class="thumbnail">
                                
                                <div class="caption">
                                    <h3>Manage Trucks</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php elseif(Auth::user()->type=="WORKER"): ?>
                <?php if(Auth::user()->truck_id==null): ?>
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Alert!</strong> Please update Your Truck before proceed
                    </div>
                <?php endif; ?>
                <?php if(Auth::user()->truck_id!=null): ?>
                    <div class="col-sm-6 col-md-3">
                        <a href="<?php echo e(route('add_col_rec')); ?>">
                            <div class="thumbnail">
                                
                                <div class="caption">
                                    <h3>Add Collection Records</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="<?php echo e(route('manage_col_rec')); ?>">
                            <div class="thumbnail">
                                
                                <div class="caption">
                                    <h3>Manage Collection Records</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
                <div class="col-sm-6 col-md-3">
                    <a href="<?php echo e(route('update_truck')); ?>">
                        <div class="thumbnail">
                            
                            <div class="caption">
                                <h3>Update Truck</h3>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <h1>Welcome to GarbageMan</h1>
            <h3>Login to proceed</h3>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>