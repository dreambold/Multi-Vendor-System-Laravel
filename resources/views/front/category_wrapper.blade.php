<div class="col-md-3 pl-0 pr-0 mt-10 category-detail-wrapper-{{$no}}" depth = "{{$depth + 1}}" id="category-detail-wrapper-{{$no}}-{{$depth + 1}}">
    @if($parent > 0)
    <span class="next-wrapper font-20 bold">></span>
    @endif
    <ul class="category-wrapper">
        @foreach($categoryList as $category)
        <li parent="{{$category['id']}}" no = "{{$no}}" onclick="onSelectCategory(this)" depth="{{$depth + 1}}" leaved="{{$category['is_leaved']}}" category_id="{{$category['id']}}" id="category-{{$no}}-{{$category['id']}}">
            {{$category['title']}}
            @if($category['is_leaved'] != 1)
                > 
            @endif
        </li>
        @endforeach
    </ul>
</div>