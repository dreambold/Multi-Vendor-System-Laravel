@foreach($list as $item)
<div class="media">
    <div class="media-left">
        <a href="javascript:void(0)">
            <img class="media-object" style = "width:80px; height:80px;border-radius:40px;" style = "" src="{!! url('/').'/uploads/users/'.$item['buyer']->pic !!}" alt="image">
        </a>
    </div>
    <div class="media-body">
        <a href="javascript:void(0)">
            <h5 class="media-heading text-primary">{{$item['eval_msg']}}</h5>
        </a>
        <span class="text-danger">{{$item['complete_time']}}</span>
        @if($item['state']*1==4)
        <p>
            @for($i=1; $i<=5; $i++)
                @if($item['eval_mark']*1 >= $i)
                    <i class = "fa fa-star" style = "color:orange"></i>
                @else
                    <i class = "fa fa-star-o"></i>
                @endif
            @endfor
        </p>
        @endif
    </div>
</div>

@endforeach

<div class = "text-right" style = "margin-top:10px;">
    <?php $searchFun = "searchOrderReviewList";?>
    @include("layouts/pagination")
</div>