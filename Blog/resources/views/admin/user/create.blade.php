@extends('admin/layouts/app')

@section('main-content')

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
        	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Titles</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="col-lg-6">

                  <div class="form-group">
                  <label for="title">Post Title</label>
                  <input type="text" class="form-control" name="title" id="title" placeholder="Enter Post Title">
                </div>
                <div class="form-group">
                  <label for="subtitle">Post Sub Title</label>
                  <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Enter Post Sub Title">
                </div>
                <div class="form-group">
                  <label for="slug">Post Slug</label>
                  <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter Post Slug">
                </div>

                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                  <label for="image">File input</label>
                  <input type="file" id="image" name="image">

                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status"> Publish
                  </label>
                </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Enter Post Body
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                    <textarea id="editor1" name="body" rows="10" cols="80" placeholder="Write Post body here">
                      
                    </textarea>
            </div>
          </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

           
          <!-- /.box -->

          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

  @endsection