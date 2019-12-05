<?php if(!isset($search))  $search = ''; ?>
@if($search == '')
<li data-category-id = "0" >All</li>
@endif
@if(isset($categoryList))
    @foreach($categoryList as $item)
        <li data-category-id = "{{$item['id']}}" >{{$item['path']}}</li>
    @endforeach
    <script>
        $("#category-wrapper li").click(function(){
            $("#category-wrapper li").removeClass("active");
            $(this).addClass("active");
            initProduct();
        })
    </script>
@endif

