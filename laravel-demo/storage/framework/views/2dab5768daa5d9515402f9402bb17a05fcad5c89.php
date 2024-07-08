<!-- CURD 2024-07-05 start -->


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>User Management </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/users/create" title="Create a user"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    

    <!--web_dev6 homework2 ：削除できなかった場合、エラーメッセージを表示する--> 
    <?php elseif($message = Session::get('error')): ?>
        <div class="alert alert-danger">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Updated At</th>
            <th>Actions</th>
        </tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->id); ?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->updated_at); ?></td>
                <td>
                    <form action="/users/<?php echo e($user->id); ?>" method="POST">

                        <a href="/users/<?php echo e($user->id); ?>/edit">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!--homework start-->
        <select name="narabi">
            <option value="asc">昇順</option>
            <option value="desc">降順</option>
        </select>
<!--homework end-->


    </table>


<?php $__env->stopSection(); ?>
<!-- CURD 2024-07-05 end -->
<?php echo $__env->make('users.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel-demo\resources\views/users/index.blade.php ENDPATH**/ ?>