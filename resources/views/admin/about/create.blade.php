@extends('layouts.master')
@section('title','Add About')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>Add About</h1>
          <small>Add About</small>
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
                      <a class="btn btn-add " href="{{url('admin/view-about')}}">
                      <i class="fa fa-eye"></i>  View About </a>
                   </div>
                </div>
                <div class="panel-body">
                <form class="col-sm-6" action="{{url('/admin/add-about')}}" method="post" enctype="multipart/form-data"> {{csrf_field()}}
                      <div class="form-group">
                         <label>Heading</label>
                         <input type="text" class="form-control" placeholder="Enter Heading" name="heading" id="heading" required>
                      </div>
                      <div class="form-group">
                        <label>Year of Experience</label>
                        <input type="text" class="form-control" placeholder="Enter Year of Experience" name="experience" id="experience" required>
                     </div>
                     <div class="form-group">
                        <label>Number</label>
                        <input type="text" class="form-control" placeholder="Enter Integer Number" name="number" id="number" required>
                     </div>
                     <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="Enter Address" name="address" id="address" required>
                     </div>
                     <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" placeholder="Enter Phone" name="phone" id="phone" required>
                     </div>
                     <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email" name="email" id="email" required>
                     </div>
                     <div class="form-group">
                        <label>Location</label>
                        <input type="text" class="form-control" placeholder="Enter Location" name="location" id="location" required>
                     </div>
                     <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" id="description" class="form-control" required></textarea>
                     </div>
                      <div class="form-group">
                        <label>Flag upload</label>
                        <input type="file" name="image">
                     </div>
                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="Add About">
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
