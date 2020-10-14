@extends('layouts.master')
@section('title','Edit Slide')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>Edit Slide</h1>
          <small>Edit Slide</small>
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
                      <a class="btn btn-add " href="{{url('admin/view-slide')}}">
                      <i class="fa fa-eye"></i>  View Slide </a>
                   </div>
                </div>
                <div class="panel-body">
                <form class="col-sm-6" enctype="multipart/form-data" action="{{url('/admin/edit-slide/'.$productDetails->id)}}" method="post"> {{csrf_field()}}
                  <div class="form-group">
                     <label>Slide Part One</label>
                     <input type="text" class="form-control" placeholder="Enter Part ONe" value="{{$productDetails->part_1}}" name="part_1" id="part_1" required>
                  </div>
                  <div class="form-group">
                    <label>Slide Part Two</label>
                    <input type="text" class="form-control" placeholder="Enter Part Two" value="{{$productDetails->part_2}}" name="part_2" id="part_2" required>
                 </div>
                 <div class="form-group">
                    <label>Slide Part Three</label>
                    <input type="text" class="form-control" placeholder="Enter Part Three" value="{{$productDetails->part_3}}" name="part_3" id="part_3" required>
                 </div>
                 <div class="form-group">
                    <label>Slide Slug</label>
                    <input type="text" class="form-control" placeholder="Enter Slug" value="{{$productDetails->slug}}" name="slug" id="slug" required>
                 </div>
                 <div class="form-group">
                  <label>Picture upload</label>
                     <input type="file" name="image">
                     <input type="hidden" name="current_image" value="{{$productDetails->image}}">
                     @if(!empty($productDetails->image))
                     <img style="width:100px;margin-top:10px;" src="{{asset('/uploads/slider/'.$productDetails->image)}}">
                     @endif
                  </div>
                     <div class="reset-button">
                        <input type="submit" class="btn btn-success" value="Edit Slide">
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
