@extends('admin/layouts/app')

@section('headSection')

 <link rel="stylesheet" href="{{asset ('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

@endsection

@section('footerSection')

<script src="{{asset ('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset ('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset ('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    
  })
</script>


@endsection

@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>
          <a class="col-lg-offset-5 btn btn-success" href="{{route ('tag.create')}}">Add Tags</a>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Tag Name</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($tags as $tag)
                <tr>
                  <td>{{ $loop->index + 1}}</td>
                  <td>{{ $tag->name }}</td>
                  <td>{{ $tag->slug }}</td>
                  <td><a href="{{route ('tag.edit',$tag->id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td>
                    <form id="delete-form-{{ $tag->id }}" method="post" style="display: none;" action="{{route ('tag.destroy',$tag->id)}}">
                      @csrf
                      {{ method_field('DELETE') }}
                    </form>
                    <a href="#" onclick="
                      if(confirm('Are you sure you want to delete this?'))
                        {
                          event.preventDefault();
                          document.getElementById('delete-form-{{ $tag->id }}').submit();
                        }
                        else{
                          event.preventDefault();
                        }">
                      <span class="glyphicon glyphicon-trash"></span></a></td>
                </tr> 
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>S.No</th>
                  <th>Tag Name</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

@endsection