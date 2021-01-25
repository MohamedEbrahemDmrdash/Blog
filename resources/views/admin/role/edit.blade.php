@extends('admin.layouts.app')

@section('main-content')

 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">


<!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            @if(count($errors)>0)
              @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
              @endforeach
            @endif
            <!-- form start -->
            <form role="form" action="{{ route( 'role.update',$role->id ) }}" method="post">
              {{csrf_field()}}
              {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Role name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="role name" value="{{$role->name}}">
                </div>

                <div class="row">
                <div class="col-lg-4">
                  <label for="name">Posts permission</label>
                  @foreach ($permissions as $permission)
                  @if ($permission->for=='post')
                    <div class="checkbox">  
                      <label><input type="checkbox" name='permission[]' value="{{$permission->id}}"
                        @foreach ($role->permissions as $permit)
                          @if ($permit->id==$permission->id)
                            checked
                          @endif
                        @endforeach

                        >{{$permission->name}}</label>
                    </div>
                  @endif 
                  @endforeach
                </div>

                <div class="col-lg-4">
                  <label for="name">users permission</label>
                  @foreach ($permissions as $permission)
                  @if ($permission->for=='user')
                    <div class="checkbox">  
                      <label><input type="checkbox" name='permission[]' value="{{$permission->id}}"
                        @foreach ($role->permissions as $permit)
                          @if ($permit->id==$permission->id)
                            checked
                          @endif
                        @endforeach
                        >{{$permission->name}}</label>
                    </div>
                  @endif 
                  @endforeach
                </div>

                <div class="col-lg-4">
                  <label for="name">others permission</label>
                  @foreach ($permissions as $permission)
                  @if ($permission->for=='other')
                    <div class="checkbox">  
                      <label><input type="checkbox" name='permission[]' value="{{$permission->id}}"
                        @foreach ($role->permissions as $permit)
                          @if ($permit->id==$permission->id)
                            checked
                          @endif
                        @endforeach
                        >{{$permission->name}}</label>
                    </div>
                  @endif 
                  @endforeach
                </div>
                </div>

              <div class="box-footer">
                <button type="submit"  class="btn btn-primary">Submit</button>
                <a href="{{ route('role.index') }}" class="btn btn-warning">Back</a>
              </div>
            </form>
          </div>
          <!-- /.box -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection