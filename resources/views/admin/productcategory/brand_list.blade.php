@foreach($list as $item)
<li data-id = "{{$item['id']}}">{{$item['title']}}<i class="js-remove">✖</i></li>
@endforeach

