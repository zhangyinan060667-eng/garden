<?php echo $__env->make('admin/header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit This Gallery</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit This Gallery</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <form method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Edit Title of Gallery</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title of Gallery" name="title" maxlength="70" value="<?php echo e($blog->title); ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Edit Short Details of Gallery</label>
                    <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Short Details of Gallery" name="s_details" maxlength="250" required><?php echo e($blog->short_details); ?></textarea>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Edit Full Details of Gallery</label>
                    <textarea rows="10" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Full Details of Gallery" name="f_details" maxlength="1500" required><?php echo e($blog->full_details); ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Add New Image of This Gallery</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                    </div> 
                  </div>

                  <label for="exampleInputFile">Current Image of This Gallery</label>
                   <div style="width: 250px; height: 200px;">
                      <img src="<?php echo e(asset('images/'.$blog->image)); ?>" style="height: 100%; width: 100%; object-fit: cover;">
                  </div>
    
                </div>
                <!-- /.card-body -->
           
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="edit_blog" value="Submit">
                </div>
              </form>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- /.card -->
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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

<?php echo $__env->make('admin/scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zhang\web\resources\views\admin\edit-blog.blade.php ENDPATH**/ ?>