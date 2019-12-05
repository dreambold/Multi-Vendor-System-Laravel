<div class="col-md-2 hidden-xs pl-0" style="padding-right:2px;">
    <ul class="left-side-menu pl-0">
        <li class="hidden @if($left_menu == 'summary')active @endif" ><a href = "{{url("front/my/activity_summary")}}" class = "color-black">Summary</a></li>
        <li class="@if($left_menu == 'recent_view')active @endif"><a  href = "{{url("front/my/activity_recent_view")}}" class = "color-black">Recently viewed</a></li>
        <li class="@if($left_menu == 'history')active @endif"><a href = "{{url("front/my/activity_purchase_history")}}" class = "color-black">Purchase history</a></li>
        <li class="hidden @if($left_menu == 'watching')active @endif"><a href = "{{url("front/my/activity_watching")}}" class = "color-black">Watching</a></li>
        <li class="@if($left_menu == 'searches')active @endif"><a href = "{{url("front/my/activity_saved_searches")}}" class = "color-black">Saved searches</a></li>
        <li class="@if($left_menu == 'sellers')active @endif"><a href = "{{url("front/my/activity_saved_sellers")}}"  class = "color-black">Saved sellers</a></li>
        <li class="hidden @if($left_menu == 'sell')active @endif"><a  href = "{{url("front/my/activity_sell")}}" class = "color-black">Sell</a></li>
    </ul>
    @if(isset($browserHistoryList))
    <h3 class="border-bottom pb-10 ">Recently viewed items</h3>
    <div class="col-md-offset-3 ">

        @foreach($browserHistoryList as $item)
            <div class="left-side-recently-item" data-id = "{{$item['product_id']}}" onclick = "goProductPage(this);">
                <img src="{{correctImgPath($item['product']['img'])}}">
                <p class="color-blue font-10 mb-0">{{$item['product']['title']}}</p>
                <p class="font-14 bold color-black mb-0">$ {{$item['product']['price']}}</p>
                <p class="font-10 mb-0">{{$item['product']['quantity']}} products</p>
            </div>
        @endforeach

    </div>
    @endif
    <p class="mb-0 font-12 bold color-black mt-20 hidden">Announcements</p>
    <a href="javascript:void(0);" class="color-blue font-12 hidden">See all eBay announcements</a>
</div>

<script>
    function goProductPage(obj){
        var id = $(obj).attr("data-id");
        window.location.href = "http://192.168.99.110:9032/front/product/"+id;
    }
</script>