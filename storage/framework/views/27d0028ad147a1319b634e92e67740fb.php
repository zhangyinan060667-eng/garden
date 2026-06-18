<?php echo $__env->make('admin/header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View / Manage Your Clients </h1>
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
                <h3 class="card-title">View / Manage Clients</h3>
                <a href="/admin/add-client" class="btn btn-primary float-right">Add Client</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead valign="center">
                  <tr>
                    <th align="center">Client Name</th>
                    <th align="center">Logo</th>
                    <th align="center">Edit Client</th>
                    <th align="center">Delete Client</th>
                  </tr>
                  </thead>
                  
                  <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr>
                    <td><?php echo e($client->name); ?></td>              
                    <td align="center">
                      <div style="width: 250px; height: 90px;"><img src="<?php echo e(asset('images/'.$client->image)); ?>" style="height: 100%; width: 100%; "></div></td>
                    <td><a href="/admin/edit-client/<?php echo e($client->id); ?>" class="btn btn-primary">Edit</button></td>
                    <td><a href="/admin/view-client/<?php echo e($client->id); ?>" class="btn btn-primary">Delete</button></td>
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
<?php /**PATH C:\Users\zhang\web\resources\views\admin\view-client.blade.php ENDPATH**/ ?>