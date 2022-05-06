<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>Users Management</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('new_user')); ?>" class="btn-dark btn-sm">
    <i class="fa fa-plus"></i> New User
</a>
<div class="table-responsive card-body d-flex justify-content-center">
<table id="users" class="table table-hover" style="width:90%">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">userType</th>
            <th scope="col">actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user->id); ?></td>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->userType); ?></td>
            <td>
                <a href="<?php echo e(route('show_user', ['id'=>$user->id])); ?>" class="btn-info btn-sm"><i class="bi bi-eye"></i></a>
                <a href="<?php echo e(route('edit_user', ['id'=>$user->id])); ?>" class="btn-secondary btn-sm"><i class="bi bi-pencil-square"></i></a>
                <a href="" onclick="return confirm('Are you sure?')" class="btn-danger btn-sm"><i class="bi bi-trash-fill"></i></a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Libcoll-main\resources\views/users/showAll.blade.php ENDPATH**/ ?>