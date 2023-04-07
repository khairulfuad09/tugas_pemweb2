
<?php $__env->startSection('container'); ?>
    
    <?php if(session()->has('success')): ?>
        <div class="alert alert-succes alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <?php if(session()->has('LoginError')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo e(session('LoginError')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <button type="button" class="btn btn-primary tombolTambahData mb-5" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data
    </button>
    <?php echo csrf_field(); ?>
    <h1>Daftar Motor</h1>
    <div class="d-flex flex-wrap">
        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/<?php echo e($car->gambar); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Plat : <?php echo e($car->plat); ?></h5>
                    <p class="card-text">Nama Motor : <?php echo e($car->nama_motor); ?></p>
                    <p class="card-text">Alamat : <?php echo e($car->alamat); ?></p>
                    <a href="<?php echo e(route('home.edit', $car->id)); ?>" class="btn btn-primary">Edit</a>
                    <form action="<?php echo e(route('home.destroy', $car->id)); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger"
                            onclick="confirm('Anda yakin akan meenghapus data ini?')">Hapus</button>
                    </form>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php echo e($cars->links()); ?>

<?php $__env->stopSection(); ?>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('home.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="plat" class="form-label">Nomor Plat</label>
                        <input type="text" class="form-control" id="plat" placeholder="Nomor Plat"
                            name="plat">
                    </div>
                    <div class="mb-3">
                        <label for="nama_motor" class="form-label">Nama Motor</label>
                        <input type="text" class="form-control" id="nama_motor" placeholder="Nama Motor"
                            name="nama_motor">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah data</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php echo $__env->make('template.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Laravel1\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>