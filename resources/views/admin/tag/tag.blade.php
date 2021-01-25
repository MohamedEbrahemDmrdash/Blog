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
            <form role="form" action="{{ route( 'tag.store' ) }}" method="post">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="name">tag name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="tag name">
                </div>

                 <div class="form-group">
                  <label for="slug">tag slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
                </div>


              <div class="box-footer">
                <button type="submit"  class="btn btn-primary">Submit</button>
                <a href="{{ route('tag.index') }}" class="btn btn-warning">Back</a>
              </div>
            </form>
          </div>
          <!-- /.box -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection