@extends('admin/layouts/app')

@section('head')

<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">

@endsection

@section('main-content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Permission</h3>
        </div>
        <div class="card-body">
          



          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Permission Name</th>
                  <th>Permission For</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($permissions as $permission)

                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{$permission->name}}</td>
                  <td>{{$permission->for}}</td>
                  <td><a href="{{ route('permission.edit',$permission->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td>
                    
                    <form action="{{ route('permission.destroy',$permission->id) }}" method="post" id="delete-form{{$permission->id}}" style="display: none;">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                    </form>

                    <a 
                    href="" 
                    onclick="if(confirm('Are you sure you want delete that!!?')){

                    event.preventDefault();
                    document.getElementById('delete-form{{$permission->id}}').submit();
                    }else
                    {
                      event.preventDefault();
                    }" 

                    ><span class="glyphicon glyphicon-trash"></span></a>

                  </td>
                </tr>

                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>S.NO</th>
                  <th>Permission Name</th>
                  <th>Permission For</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Click Button To Add New Tag</h3>
            <a class="col-lg-offset-2 btn btn-success" href="{{ route('permission.create') }}">Add New</a>
            </div>

          </div>
        </div>
      
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection

  @section('footer')
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

  @endsection