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
              <h3 class="box-title">Add User</h3>
            </div>
            @include('includes.messages')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('user.store')}}"> 
              @csrf
              <div class="box-body">
                <div class=" col-lg-offset-3 col-lg-6">

                  <div class="form-group">
                  <label for="name">User Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter User Name">
                </div> 
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" name="email" id="email" placeholder="Enter User Email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" class="form-control" name="password" id="password" placeholder="Enter Password">
                </div>
                <div class="form-group">
                  <label for="conf_password">Confirm Password</label>
                  <input type="text" class="form-control" name="conf_password" id="conf_password" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                  <label for="role">Assign Role</label>
                  <select class="form-control" name="role">
                    <option value="">Select Role</option>
                    <option value="">Editor</option>
                    <option value="">Publisher</option>
                    <option value="">Writer</option>
                  </select>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route ('user.index')}}" class="btn btn-danger">Cancel</a>
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