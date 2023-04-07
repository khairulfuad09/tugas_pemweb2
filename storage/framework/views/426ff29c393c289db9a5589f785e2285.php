
<?php $__env->startSection('container'); ?>
    
    <div class="content">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="judulModal">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('home.update', $car->id)); ?>" method="post">
                        <?php echo method_field('put'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="plat" class="form-label">Nomor Plat</label>
                            <input type="text" class="form-control" id="plat" placeholder="Nomor Plat"
                                name="plat" value="<?php echo e($car->plat); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nama_motor" class="form-label">Nama Motor</label>
                            <input type="text" class="form-control" id="nama_motor" placeholder="Nama Motor"
                                name="nama_motor" value="<?php echo e($car->nama_motor); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat"
                                value="<?php echo e($car->alamat); ?>">
                        </div>

                </div>
                <div class="modal-footer">
                    <a href="<?php echo e(route('home.index')); ?>" class="btn btn-danger">Close</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Laravel1\resources\views/mahasiswa/detail.blade.php ENDPATH**/ ?>