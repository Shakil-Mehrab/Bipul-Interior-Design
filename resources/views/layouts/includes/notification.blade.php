@if(!empty($notification->data['shopCreated']['id'] && $notification->type=="App\Notifications\HatirpalNotification" ))
<li><a href="{{url('admin/view-shop')}}" class="border-gray"><strong>{{$notification->data['user']['name']}}</strong> has created a shop &nbsp;&nbsp;{{$notification->created_at->diffForHumans()}}</a></li>
{{--      @if($notification->created_at->diffForHumans()<="24 hours ago")
        <a class="dropdown-item" href="{{route('single-product.show',$notification->data['product']['id'])}}">{{$notification->data['user']['name']}} commented on <strong> {{$notification->data['product']['name']}}</strong> {{$notification->created_at->diffForHumans()}}</a>

        @elseif($notification->created_at->diffForHumans()=="1 day ago")
        <a class="dropdown-item" href="{{route('single-product.show',$notification->data['product']['id'])}}">{{$notification->data['user']['name']}} commented on <strong> {{$notification->data['product']['name']}}</strong> {{$notification->created_at->diffForHumans()}}</a>

    @elseif($notification->created_at->diffForHumans()=="2 days ago")
        <a class="dropdown-item" href="{{route('single-product.show',$notification->data['product']['id'])}}">{{$notification->data['user']['name']}} commented on <strong> {{$notification->data['product']['name']}}</strong> {{$notification->created_at->diffForHumans()}}</a>

    @else
        <a class="dropdown-item" href="{{route('single-product.show',$notification->data['product']['id'])}}">{{$notification->data['user']['name']}} commented on <strong> {{$notification->data['product']['name']}}</strong> {{$notification->created_at->diffForHumans()}}</a>
    @endif --}}
@endif
