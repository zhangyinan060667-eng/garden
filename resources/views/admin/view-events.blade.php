@include('admin/header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View / Manage Events</h1>
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
                <h3 class="card-title">View / Manage Events</h3>
                <a href="/admin/add-events" class="btn btn-primary float-right">Add Event</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Event Date</th>
                    <th>Title of Event</th>
                    <th>Details of Event</th>
                    <th>Edit Data</th>
                    <th>Delete Data</th>
                  </tr>
                  </thead>
                  
                  @foreach($arr as $event)
                   <tr>
                    <td>@if($event->event_date){{ \Carbon\Carbon::parse($event->event_date)->format('jS F Y') }}@endif</td>
                    <td>{{$event->title}}</td>
                    <td>{{$event->details}}</td>
                    <td><a href="/admin/edit-events/{{$event->id}}" class="btn btn-primary">Edit</a></td>
                    <td><a href="/admin/view-events/{{$event->id}}" class="btn btn-primary">Delete</a></td>
                  </tr>
                  @endforeach

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

@include('admin/footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin/scripts')
