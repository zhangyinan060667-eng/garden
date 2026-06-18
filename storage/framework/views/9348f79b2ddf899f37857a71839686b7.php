<?php echo $__env->make('admin/header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Event</h1>
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
                <h3 class="card-title">Add New Event</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="eventDate">Event Date</label>
                    <input type="date" class="form-control" id="eventDate" name="event_date" required>
                  </div>
                  <div class="form-group">
                    <label for="eventTitle">Title of New Event</label>
                    <input type="text" class="form-control" id="eventTitle" placeholder="Enter Title of New Event" name="title" maxlength="40" required>
                  </div>
                  <div class="form-group">
                    <label for="eventDetails">Details of New Event</label>
                    <textarea rows="6" type="text" class="form-control" id="eventDetails" placeholder="Enter Details of New Event" name="details" maxlength="250"></textarea>
                  </div>
 
                </div>
                <!-- /.card-body -->
           
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="submit_events" value="Submit">
                </div>
              </form>
            </div>
            <!-- /.card -->
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

<?php echo $__env->make('admin/scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\Users\zhang\web\resources\views\admin\add-events.blade.php ENDPATH**/ ?>