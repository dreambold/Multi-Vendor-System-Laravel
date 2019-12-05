<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
<style>
    .show{
        display:block !important;
    }
</style>
<div class="col-md-2 hidden-xs pl-0" style="padding-right:2px;">
    <ul class="left-selling-menu">
        <li class = "hidden @if($left_menu == "summary") active @endif"><a class = "color-black" href = "{{url("front/my/seller/activity_summary")}}">Summary</a></li>
        <li class = "@if($left_menu == "recent_view") active @endif"><a class = "color-black" href = "{{url("front/my/seller/activity_recent_view")}}">Recently viewed</a></li>
        <li class = "@if($left_menu == "buying") active @endif"><a class = "color-black" href = "{{url("front/my/seller/activity_buying")}}">Buying</a></li>
        <li class = "hidden @if($left_menu == "watching") active @endif" ><a class = "color-black" href = "{{url("front/my/seller/activity_watching")}}">Watch list</a></li>
        <li class = "@if($left_menu == "searches") active @endif" ><a class = "color-black" href = "{{url("front/my/seller/activity_saved_searches")}}">Saved</a></li>
        <li class="@if($left_menu == "selling") chevron-menu-down @else chevron-menu-up @endif " target-menu="selling-menu">Selling<i class="fa @if(!isset($left_menu2)) fa-chevron-down @else fa-chevron-up  @endif "></i>

        </li>
        <ul id="selling-menu" class = " @if(isset($left_menu2)) show @endif">
            <li class = "hidden @if(isset($left_menu2) && $left_menu2 == 'overview') active @endif"><a class = "color-black" href = "{{url("front/my/seller/activity_selling_overview")}}">Overview</a></li>
            <li class = "@if(isset($left_menu2) && $left_menu2 == 'item') active @endif"><a class = "color-black" href = "{{url("front/sell")}}">Sell an item</a></li>
            <li class = "@if(isset($left_menu2) && $left_menu2 == 'drafts') active @endif"><a class = "color-black" href = "{{url("front/my/seller/activity_selling_drafts")}}">Drafts</a></li>
            <li class = "@if(isset($left_menu2) && $left_menu2 == 'sell_product') active @endif"><a class = "color-black" href = "{{url("front/my/seller/activity_selling_product")}}">Products on sale</a></li>
            <li class = "@if(isset($left_menu2) && $left_menu2 == 'discount') active @endif"><a class = "color-black" href = "{{url("front/my/seller/activity_selling_discount")}}">Discount</a></li>
            <li class = "@if(isset($left_menu2) && $left_menu2 == 'deliver') active @endif"><a class = "color-black" href = "{{url("front/my/seller/activity_selling_deliver")}}">Deliver</a></li>
            <li class = "@if(isset($left_menu2) && $left_menu2 == 'complete') active @endif"><a class = "color-black" href = "{{url("front/my/seller/activity_selling_complete")}}">Complete</a></li>
        </ul>

    </ul>
</div>
<script>
    $(".left-selling-menu>li").on('click', function(e){
        var target = $(this).attr("target");
        if(target != undefined){
            return;
        }else if($(this).hasClass("chevron-menu-down")){
            var menu_target = $(this).attr("target-menu");
            $("#" + menu_target).slideDown();
            $(this).removeClass("chevron-menu-down");
            $(this).addClass("chevron-menu-up");
            $(this).find("i").removeClass("fa-chevron-down");
            $(this).find("i").addClass("fa-chevron-up");
        }else if($(this).hasClass("chevron-menu-up")){
            var menu_target = $(this).attr("target-menu");
            $("#" + menu_target).slideUp();
            $(this).removeClass("chevron-menu-up");
            $(this).addClass("chevron-menu-down");
            $(this).find("i").removeClass("fa-chevron-up");
            $(this).find("i").addClass("fa-chevron-down");
            $(".left-selling-menu>ul>li").removeClass("active");
        }
    });

</script>