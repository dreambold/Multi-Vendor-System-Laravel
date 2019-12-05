@foreach($list as $order)
    <div class = "order-wrapper border-bottom">
        <div class="row ml-0 mr-0 mt-20">
            <div class="col-md-6 pl-0 display-flex">
                <div class="display-inline top-align">
                    <input type="checkbox" class="checkbox-inline mt-0 hidden">
                </div>
                <div class="display-inline top-align ml-20">
                    <p class="color-blue font-12 mb-0">{{$order['order_number']}}</p>
                    <span class="color-blue font-10">{{$countries[$order['receive_region_id']]}}</span>
                    <span class="font-10 mlr-5">|</span>
                    <span class="color-blue font-10">{{$order['receive_address']}}</span>
                    <span class="font-10"></span>
                    <p class="font-10 mb-0">
                        {{$order['receive_user_name']}}: {{$order['receive_phone_num']}}
                    </p>
                </div>
            </div>
            <div class="col-md-6 text-right">
                <div class="display-inline ml-10 top-align">
                    <p class="bold color-black font-12 mb-0 text-right">Order time:{{$order['order_time']}} </p>
                    <?php $transLog = $order->transLog();?>
                    <p class="font-12 mb-0 text-right">Pay Time:{{$transLog['pay_time']}}</p>
                    @if($order['state']*1 >=2 )
                    <p class="font-12 mb-0 text-right">Delivery Time: {{$order['delivery_time']}}</p>
                    @endif
                    @if($order['state']*1 >=3 )
                    <p class="font-12 mb-0 text-right">Check Time : {{$order['receive_time']}}</p>
                    @endif
                    @if($order['state']*1 >=4 )
                        <p class="font-12 mb-0 text-right">Complete Time : {{$order['complete_time']}}</p>
                    @endif
                </div>
                <div class="display-inline ml-20 top-align">
                    <p class="font-14 bold color-green mb-0 text-right">
                        @if($order['org_price']*1 !=0)
                            <del>$  {{$order['org_price']}}</del>
                        @endif
                        $ {{$order['total_price']}}
                    </p>

                    <p class="font-10 color-blue mb-0 text-right">Products : {{$order['quantity']}}</p>
                    @if($order['discount_price_req']*1 != 0)
                    <p class="font-10 color-blue mb-0 text-right">User Proposal : {{$order['discount_price_req']}}</p>
                    @endif
                    @if($order['discount_price_response']*1 != 0)
                    <p class="font-10 color-blue mb-0 text-right">Seller Proposal : {{$order['discount_price_response']}}</p>
                    @endif
                    <p class="font-10 color-blue mb-0 text-right">{{getOrderState($order['state'])}}</p>
                    @if($order['state']*1==4)
                        <p>
                            @for($i=1; $i<=5; $i++)
                                @if($order['eval_mark']*1 >= $i)
                                    <i class = "fa fa-star" style = "color:orange"></i>
                                @else
                                    <i class = "fa fa-star-o"></i>
                                @endif
                            @endfor
                        </p>
                        <a href = "javascript:void(0)" class = "color-blue" data-eval-mark = "{{$order['eval_mark']}}" data-eval-msg = "{{$order['eval_msg']}}" onclick = "onEvaluateOrderView(this)">View</a>
                    @endif
                </div>
                <div class="display-inline ml-20 top-align">
                    <div class="row ml-0 mr-0">
                        @if($order['state']*1 == 1)
                            <button class="visit-btn" data-order-id = "{{$order['id']}}" data-order-state = "2" onclick = "updateOrderState(this)" >Deliver</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <p class="font-10 mt-10">&nbsp;</p>
        @foreach($order['orderDetailList'] as $order_detail)
        <div class="row ml-0 mr-0">
            <div class="col-md-3 border-rect pt-10 pb-10">
                <div class="row ml-0 mr-0 text-center mt-10"><img src="{{correctImgPath($order_detail['product']['img'])}}" class="size-150"></div>
                <p class="font-12 color-black bold mt-10">{{$order_detail['product']['title']}}</p>
            </div>
            <div class="col-md-9 border-rect similar-item pt-10 pb-10" style="height:219px; overflow: hidden;">
                <p class="font-12 color-black bold"> count: &nbsp; &nbsp; {{$order_detail['product_count']}} &nbsp; &nbsp; unit price: ${{$order_detail['product_price']}} &nbsp; &nbsp; total price : $ {{$order_detail['product_total_price']}}</p>
                <p class="font-12 bold">Common</p>
                <p class="font-12 bold" style = "word-break: break-all;">
                    {{$order_detail['product']->getCommonPropertierStr()}}
                </p>
                @if($order_detail['sku_id']*1 != 0)
                <p class="font-12 bold">Variant</p>
                <p class="font-12 bold" style = "word-break: break-all;">
                    {{$order_detail->getVariantAttrStr()}}
                </p>
                @endif
            </div>
        </div>
        @endforeach
    </div>
@endforeach
<div class = "text-right" style = "margin-top:10px;">
    <?php $searchFun = "searchOrderList";?>
    @include("layouts/pagination")
</div>