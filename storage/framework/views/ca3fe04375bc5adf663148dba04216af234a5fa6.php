<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>New Book</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card">
        <form class="row g-3 card-body" action="<?php echo e(route('save_book')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group col-md-6">
            <label for="title" class="form-label">Title</label>
            <input id="title" name="title" type="text" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="author" class="form-label">Author</label>
            <input id="author" name="author" type="text" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="isbn" class="form-label">ISBN</label>
            <input id="isbn" name="isbn" type="text" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="category" class="form-label">Category</label>
            <input id="category" name="category" type="text" class="form-control">
        </div>


        <div class="form-group col-md-6">
            <label for="publishing_company" class="form-label">Publishing company</label>
            <input id="publishing_company" name="publishing_company" type="text" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="published_at" class="form-label">Published at</label>
            <input id="published_at" name="published_at" type="date" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="image" class="form-label">Book Image</label>
            <input id="image" class="form-control-file" type="file" name="image">
        </div>

        <br>
        <div class="col-auto">
            <a href="<?php echo e(route('showAll')); ?>" class="btn btn-secondary" >Cancel</a>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Libcoll-main\resources\views/books/create.blade.php ENDPATH**/ ?>