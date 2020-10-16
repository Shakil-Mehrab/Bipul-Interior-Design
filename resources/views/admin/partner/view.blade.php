@extends('layouts.master')
@section('title','Partners Logo')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>Partners Logo</h1>
          <small>Add Partners Logo</small>
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
                {{-- <div class="panel-heading">
                   <div class="btn-group" id="buttonlist">
                      <a class="btn btn-add " href="{{url('admin/view-products')}}">
                      <i class="fa fa-eye"></i>  View Products </a>
                   </div>
                </div> --}}
                <div class="panel-body">
                <form class="col-sm-6" enctype="multipart/form-data" action="{{url('/admin/add-partner-images')}}" method="post"> {{csrf_field()}}
                    <div class="form-group">
                        <label>name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="image[]" id="image" multiple="multiple">
                     </div>
                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="Add Image">
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </section>

    <section class="content">
      <div class="row">
         <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
               <div class="panel-heading">
                  <div class="btn-group" id="buttonexport">
                     <a href="#">
                        <h4>View Logos</h4>
                     </a>
                  </div>
               </div>
               <div class="panel-body">
               <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                  {{-- <div class="btn-group">
                     <div class="buttonexport" id="buttonlist">
                     <a class="btn btn-add" href="{{url('admin/add-product')}}"> <i class="fa fa-plus"></i> Add Product
                        </a>
                     </div>

                  </div> --}}
                  <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                  <div class="table-responsive">
                     <table id="table_id" class="table table-bordered table-striped table-hover">
                     <form enctype="multipart/form-data" action="{{url('/admin/edit-partner-images')}}" method="post"> {{csrf_field()}}
                        <thead>
                           <tr class="info">
                              <th>ID</th>
                              <th>Name</th>
                              <th>Image</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($productImages as $productImage)
                           <tr>
                           <td>{{$productImage->id}}</td>
                           <td>{{$productImage->name}}</td>

                           <td>
                           <img src="{{url('uploads/partner/'.$productImage->image)}}" alt="" style="width:80px;">
                           </td>
                              <td class="center">
                                 <div class="btn-group">
                                       <a href="{{url('/admin/delete-alt-partner-image/'.$productImage->id)}}" class="btn btn-danger btn-sm partnerDelete"><i class="fa fa-trash-o"></i> </a>
                                 </div>
                              </td>
                           </tr>
                            @endforeach
                        </tbody>
                     </table>
                  </form>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
 </div>
 <!-- /.content-wrapper -->

@endsection
@section('js')
<script>
 // delete
   $(document).ready( function () {
    $(".partnerDelete").click(function(e){
        e.preventDefault();
        var link=$(this).attr("href");
        bootbox.confirm("Are you sure to delete",function(confirmed){
        if(confirmed){
            // alert(link)
        window.location.href=link;
        };
        });
    });
   });
</script>
@endsection
