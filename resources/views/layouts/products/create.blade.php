@extends('layouts.master')
@section('title','Add Interior Design')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>Add Design</h1>
          <small>Add Interior Design</small>
       </div>
    </section>
    @if(Session::has('flash_message_error'))
   <div class="alert alert-sm alert-danger alert-block" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      <strong>{!! session('flash_message_error') !!}</strong>
   </div>
   @endif

   @if(Session::has('flash_message_success'))
   <div class="alert alert-sm alert-success alert-block" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      <strong>{!! session('flash_message_success') !!}</strong>
   </div>
   @endif
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <!-- Form controls -->
          <div class="col-sm-12">
             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   <div class="btn-group" id="buttonlist">
                      <a class="btn btn-add " href="{{url('admin/view-products')}}">
                      <i class="fa fa-eye"></i>  View Designs </a>
                   </div>
                </div>
                <div class="panel-body">
                <form class="col-sm-6" enctype="multipart/form-data" action="{{url('/admin/add-product')}}" method="post"> {{csrf_field()}}
                     <div class="form-group">
                        <label>Under Category</label>
                        <select name="category_id" id="category_id" class="form-control" required>
                            <option value="">Select One</option>
                            @forelse($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @forelse($cat->children as $cl)
                                <option value="{{$cl->id}}">&nbsp;&nbsp;&nbsp;&nbsp;-{{$cl->name}}</option>
                                @empty
                                @endforelse
                            @empty
                            @endforelse
                        </select>
                     </div>

                      <div class="form-group">
                         <label>Design Name</label>
                         <input type="text" class="form-control" placeholder="Enter Design Name" name="name" id="name" required>
                      </div>
                      <div class="form-group">
                        <label>Design Slug</label>
                        <input type="text" class="form-control" placeholder="Enter Design Slug" name="slug" id="slug" required>
                     </div>
                      <div class="form-group">
                         <label>Design Code</label>
                         <input type="text" class="form-control" placeholder="Enter Design Code" name="code" id="code" required>
                      </div>
                      <div class="form-group">
                         <label>Description</label>
                         <textarea name="description" id="description" class="form-control" required>
                         </textarea>
                      </div>
                      <div class="form-group">
                        <label>Picture upload</label>
                        <input type="file" name="image">
                     </div>
                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="Add Design">
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

@endsection
