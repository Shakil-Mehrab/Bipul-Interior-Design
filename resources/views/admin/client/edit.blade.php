@extends('layouts.master')
@section('title','Edit Client')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-pencil"></i>
       </div>
       <div class="header-title">
          <h1>Edit Client</h1>
          <small>Edit Client</small>
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
                      <a class="btn btn-add " href="{{url('admin/view-client')}}">
                      <i class="fa fa-eye"></i>  View Client </a>
                   </div>
                </div>
                <div class="panel-body">
                <form class="col-sm-6" action="{{url('/admin/edit-client/'.$categoryDetails->id)}}" method="post" enctype="multipart/form-data"> {{csrf_field()}}
                      <div class="form-group">
                         <label>Name</label>
                         <input type="text" class="form-control" value="{{$categoryDetails->name}}" name="name" id="name" required>
                      </div>
                      <div class="form-group">
                        <label>Designation</label>
                        <input type="text" class="form-control" value="{{$categoryDetails->designation}}" name="designation" id="designation" required>
                     </div>
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" value="{{$categoryDetails->address}}" name="address" id="address" required>
                     </div>
                      <div class="form-group">
                         <label>Description</label>
                         <textarea name="description" id="description" class="form-control">
                            {{$categoryDetails->description}}
                         </textarea>
                      </div>
                      <div class="form-group">
                        <label>Picture upload</label>
                        <input type="file" name="image">
                           <input type="hidden" name="current_image" value="{{$categoryDetails->image}}">
                        @if(!empty($categoryDetails->image))
                        <img style="width:100px;margin-top:10px;" src="{{asset('/uploads/client/'.$categoryDetails->image)}}">
                        @endif
                     </div>
                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="Edit Client">
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
