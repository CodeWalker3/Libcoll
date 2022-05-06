<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>Book Management</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('new_book')); ?>" class="btn-dark btn-sm">
    <i class="fa fa-plus"></i> New Book
</a>

<?php if(session('success')): ?>
<div id="alert" class="alert alert-primary" role="alert">
<button type="button" class="close" data-dismiss="alert">x</button>
<?php echo e(session('success')); ?>

</div>
<?php endif; ?>
<div class="table-responsive card-body d-flex justify-content-center">

<table id="books" class="table table-hover" style="width:90%">
    <thead>
        <tr>
            <th scope="col">Cover</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Category</th>
            <th scope="col">Publishing company</th>
            <th scope="col">Published at</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><img src="/images/books/<?php echo e($book->image); ?>" alt="<?php echo e($book->title); ?>" width="100"></td>
            <td><?php echo e($book->title); ?></td>
            <td><?php echo e($book->author); ?></td>
            <td><?php echo e($book->category); ?></td>
            <td><?php echo e($book->publishing_company); ?></td>
            <td><?php echo e($book->published_at->format('d-m-Y')); ?></td>
            <td>
                <?php if($book->status == 1){ ?>
                    <div class="badge bg-success"> Available</div>
                <?php } else { ?>
                    <div class="badge bg-secondary"> Unavailable</div>
                <?php } ?>
            </td>
            <td>
                <a href="<?php echo e(route('show_book', ['id'=>$book->id])); ?>" class="btn-info btn-sm"><i class="bi bi-eye"></i></a>
                <a href="<?php echo e(route('edit_book', ['id'=>$book->id])); ?>" class="btn-secondary btn-sm"><i class="bi bi-pencil-square"></i></a>
                <a class="btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="bi bi-trash-fill"></i></a>
            </td>
        </tr>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
      <h5 class="text-center">Are you sure you want to delete this book ?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?php echo e(route('destroy_book', ['id'=>$book->id])); ?>" class="btn btn-danger">delete</a>
      </div>
    </div>
  </div>
</div>
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
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Libcoll-main\resources\views/books/showAll.blade.php ENDPATH**/ ?>