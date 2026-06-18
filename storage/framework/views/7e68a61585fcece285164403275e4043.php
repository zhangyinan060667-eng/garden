<?php echo $__env->make('admin/header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View / Manage Latest Photo Gallary</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View / Delete Photos</h3>
                <a href="/admin/add-photos" class="btn btn-primary float-right">Add New Photos</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php if(session('success')): ?>
                  <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                <?php endif; ?>
                <?php if(session('error')): ?>
                  <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                <?php endif; ?>
                <table id="example2" class="table table-bordered table-hover">
                  <thead valign="center">
                  <tr>
                    <th>Titel of Photo</th>
                    <th>Details of Photo</th>
                    <th>Type of Photo</th>
                    <th>Image Preview</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>

                  <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr>
                    <td><?php echo e($photos->title); ?></td>
                    <td><?php echo e($photos->details); ?></td>             
                    <td><?php echo e($photos->type); ?></td>             
                    <td align="center">
                      <div style="width: 250px; height: 200px;"><img src="<?php echo e(asset('images/'.$photos->image)); ?>" style="height: 100%; width: 100%; object-fit: cover;"></div></td>
                    <td><a href="/admin/edit-photos/<?php echo e($photos->id); ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="/admin/view-photos/<?php echo e($photos->id); ?>" class="btn btn-primary">Delete</a></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php echo $__env->make('admin/footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php echo $__env->make('admin/scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\Users\zhang\web\resources\views\admin\view-photos.blade.php ENDPATH**/ ?>