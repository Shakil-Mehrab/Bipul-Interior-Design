@extends('layouts.master')
@section('title','View Slides')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>View Slides</h1>
          <small>Slides List</small>
       </div>
    </section>
    @if(Session::has('flash_message_error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    <strong>{{ session('flash_message_error') }}</strong>
    </div>
    @endif
    @if(Session::has('flash_message_success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    <strong>{{ session('flash_message_success') }}</strong>
    </div>
    @endif

    <div id="message_success" style="display:none;" class="alert alert-sm alert-success">Status Enabled</div>
    <div id="message_error" style="display:none;" class="alert alert-sm alert-danger">Status Disabled</div>
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <div class="col-sm-12">
             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   <div class="btn-group" id="buttonexport">
                      <a href="#">
                         <h4>View Slides</h4>
                      </a>
                   </div>
                </div>
                <div class="panel-body">
                <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="btn-group">
                      <div class="buttonexport" id="buttonlist">
                      <a class="btn btn-add" href="{{url('admin/add-slide')}}"> <i class="fa fa-plus"></i> Add Slide
                         </a>
                      </div>

                   </div>
                   <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="table-responsive">
                      <table id="table_id" class="table table-bordered table-striped table-hover">
                         <thead>
                            <tr class="info">
                               <th>ID</th>
                               <th>Part One</th>
                               <th>Part Two</th>
                               <th>Part Three</th>
                               <th>Slide Slug</th>
                               <th>Image</th>
                               <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                             @forelse($products as $product)
                            <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->part_1}}</td>
                            <td>{{$product->part_2}}</td>
                            <td>{{$product->part_3}}</td>
                            <td>{{$product->slug}}</td>
                               <td>
                                @if(!empty($product->image))
                                    <img src="{{asset('/uploads/slider/'.$product->image)}}" alt="" style="width:100px;">
                                @endif
                                </td>
                               <td>
                               <a href="{{url('/admin/edit-slide/'.$product->id)}}" class="btn btn-add btn-sm" title="Edit Product"><i class="fa fa-pencil"></i></button>
                               <a href="{{url('/admin/delete-slide/'.$product->id)}}" class="btn btn-danger btn-sm slideDelete" title="Delete Product"><i class="fa fa-trash-o"></i> </button>
                               </td>
                            </tr>
                            @empty
                            @endforelse
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
@endsection
@section('js')

<script>
$(document).ready( function () {
   //Update Product Status
    $(".DiscountStatus").change(function(){
    var id = $(this).attr('rel');
    if($(this).prop("checked")==true){
        $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type : 'post',
        url : '/admin/update-discount-status',
        data : {status:'1',id:id},
        success:function(data){
            $("#message_success").show();
            setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
        },error:function(){
            alert("Error");
        }
        });

    }else{
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type : 'post',
        url : '/admin/update-discount-status',
        data : {status:'0',id:id},
        success:function(resp){
            $("#message_error").show();
            setTimeout(function() { $("#message_error").fadeOut('slow'); }, 2000);
        },error:function(){
            alert("Error");
        }
        });
    }
    });
});
 // delete
 $(document).ready( function () {
    $(".slideDelete").click(function(e){
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
