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
              <h3 class="box-title">Category</h3>
            </div>
            @include('includes.messages')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route ('category.update',$category->id)}}">
               @csrf
               {{ method_field('PUT') }}
              <div class="box-body">
                <div class=" col-lg-offset-3 col-lg-6">

                  <div class="form-group">
                  <label for="name">Category Title</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}">
                </div> 
                <div class="form-group">
                  <label for="slug">Category Slug</label>
                  <input type="text" class="form-control" name="slug" id="slug" value="{{$category->slug}}">
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route ('category.index')}}" class="btn btn-danger">Cancel</a>
              </div>
                </div> 
              <!-- /. tools -->

            </div> 
            
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