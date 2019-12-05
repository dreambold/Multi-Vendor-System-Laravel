@if(isset($attrList))
@foreach($attrList as $key=>$item)
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$item['title']}}</td>
        <td>{{getAttrTypeName($item['attr_type'])}}</td>
        <td>@if($item['is_variant']) is variant @endif</td>
        <td>{{$item['order_num']}}</td>
        <td>
            <a href="javascript:editAttr('{{$item['id']}}')" class="btn default btn-xs purple">
                <i class="livicon" data-name="pen" data-loop="true" data-color="#000" data-hovercolor="black" data-size="14"></i>
                Edit
            </a>
            <a href="javascript:editAttrValList('{{$item['id']}}')" class="btn default btn-xs purple">
                <i class="livicon" data-name="pen" data-loop="true" data-color="#000" data-hovercolor="black" data-size="14"></i>
                Value
            </a>
            <a href="javascript:deleteAttr('{{$item['id']}}')" class="btn default btn-xs black">
                <i class="livicon" data-name="trash" data-loop="true" data-color="#000" data-hovercolor="black" data-size="14"></i>
                Delete
            </a>
        </td>
        </td>
    </tr>
@endforeach
@if(count($attrList) == 0)
    <tr>
        <td colspan = "6">There is not data</td>
    </tr>
@endif
@else
    <tr>
        <td colspan = "6">There is not data</td>
    </tr>
@endif
