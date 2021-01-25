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
            <form role="form" action="{{ route( 'user.store' ) }}" method="post">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="name">User name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="User name">
                </div>

                 <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="email">
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="phone">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="password">
                </div>

                  <div class="form-group">
                    <label for="status">Status</label>
                    <div class="checkbox">
                    <label><input type="checkbox" name="status" value="1">Status</label>
                  </div>
                  </div>

                <div class="form-group">
                  <label for="role">Assign Role</label>
                  <div class="row">
                  @foreach($roles as $role)
                  <div class="col-lg-3">
                    <div class="checkbox">
                      <label><input type="checkbox" value="{{$role->id}}" name="role[]">{{$role->name}}</label>
                    </div>
                    
                  </div>
                  @endforeach
                </div>
                </div>
              <div class="box-footer">
                <button type="submit"  class="btn btn-primary">Submit</button>
                <a href="{{ route('user.index') }}" class="btn btn-warning">Back</a>
              </div>
            </form>
          </div>
          <!-- /.box -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection