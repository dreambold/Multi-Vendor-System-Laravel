@if(isset($categoryList))
@foreach($categoryList as $item)
    <li data-category-id = "{{$item['id']}}" >{{$item['path']}}</li>
@endforeach
<script>
    $("#category-wrapper li").click(function(){
        $("#category-wrapper li").removeClass("active");
        $(this).addClass("active");
        initAttr();
    })
</script>
@endif

