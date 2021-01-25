@extends('admin.layouts.app')

@section('head')

<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">

@endsection

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
                <p class="alert alert-danger">{{ $error }}</p>
              @endforeach
            @endif

            <!-- form start -->
            <form role="form" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <div class="col-lg-6">
                <div class="form-group">
                  <label for="title">Post title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="title">
                </div>

                 <div class="form-group">
                  <label for="subtitle">Post Subtitle</label>
                  <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="subtitle">
                </div>

                 <div class="form-group">
                  <label for="slug">Post slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
                </div>
                
                <div class="form-group">
                  <label for="image">File input</label>
                  <input type="file" id="exampleInputFile" name="image">
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status" value="1"> Publish
                  </label>
                </div>
              <!-- /.box-body -->

              <div class="form-group">
                <label>Select Tag</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" name="tags[]">
                  @foreach ($tags as $tag)
                  <option value="{{$tag->id}}">{{$tag->name}}</option>
                  @endforeach
                </select>
              </div>


              <div class="form-group">
                <label>Select Category</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" name="categories[]">
                  @foreach ($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
              </div>

            </div>
            </div>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bootstrap WYSIHTML5
                <small>Simple and fast</small>
              </h3>
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">


                <textarea name="body" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1"></textarea>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->

              <div class="box-footer">
                <button type="submit"  class="btn btn-primary">Submit</button>
                <a href="{{ route('post.index') }}" class="btn btn-warning">Back</a>
              </div>
            </form>
          </div>
          <!-- /.box -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection


  @section('footer')
<script src="{{asset('admin/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{asset('admin/ckeditor/ckeditor/ckeditor.js')}}"></script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
  });
</script>
@endsection