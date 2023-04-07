
<?php $__env->startSection('container'); ?>
    
    <div class="content">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="judulModal">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('pages.update', $user->id)); ?>" method="post">
                        <?php echo method_field('put'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="name" class="form-label">Username</label>
                            <input type="text" class="form-control" id="name" placeholder="username"
                                name="name" value="<?php echo e($user->name); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="email"
                                name="email" value="<?php echo e($user->email); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" class="form-control" id="password" placeholder="password" name="password"
                                value="<?php echo e($user->password); ?>">
                        </div>

                </div>
                <div class="modal-footer">
                    <a href="/pages" class="btn btn-danger">Close</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Laravel1\resources\views/pages/detail.blade.php ENDPATH**/ ?>