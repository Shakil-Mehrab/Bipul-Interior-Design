@extends('layouts.master')
@section('title','Edit Design')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>Edit Design</h1>
          <small>Edit Design</small>
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
                      <i class="fa fa-eye"></i>  View Design </a>
                   </div>
                </div>
                <div class="panel-body">
                <form enctype="multipart/form-data" action="{{url('/admin/edit-product/'.$productDetails->id)}}" method="post"> {{csrf_field()}}
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Under Category</label>
                        <select name="category_id" id="category_id" class="form-control" required>
                            <option value="">Select One</option>
                            @forelse($categories as $cat)
                              <option value="{{$cat->id}}"{{$cat->id==$productDetails->category_id?'selected':''}}>{{$cat->name}}</option>
                                @forelse($cat->children as $cl)
                                 <option value="{{$cat->id}}"{{$cl->id==$productDetails->category_id?'selected':''}}>{{$cl->name}}</option>
                                @empty
                                @endforelse

                            @empty
                            @endforelse
                        </select>
                     </div>
                      <div class="form-group">
                         <label>Design Name</label>
                      <input type="text" class="form-control" value="{{$productDetails->name}}" name="name" id="name" required>
                      </div>
                      <div class="form-group">
                        <label>Slug</label>
                        <input type="text" class="form-control" placeholder="Enter Design Slug"  value="{{$productDetails->slug}}" name="slug" id="slug" required>
                     </div>
                      <div class="form-group">
                         <label>Design Code</label>
                         <input type="text" class="form-control" value="{{$productDetails->code}}" name="code" id="code" required>
                      </div>
                      <div class="form-group">
                         <label>Design Description</label>
                         <textarea name="description" id="description" class="form-control" required>
                              {{$productDetails->description}}
                         </textarea>
                      </div>
                      <div class="form-group">
                        <label>Picture upload</label>
                        <input type="file" name="image">
                        <input type="hidden" name="current_image" value="{{$productDetails->image}}">
                        @if(!empty($productDetails->image))
                        <img style="width:100px;margin-top:10px;" src="{{asset('/uploads/products/'.$productDetails->image)}}">
                        @endif
                     </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="Update Design">
                      </div>
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
