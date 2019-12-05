<?php if(!isset($attr_id)) $attr_id =0;?>
<div class = "row">
    <div class = "col-sm-12 text-right">
        <button type="button" class="btn btn-responsive button-alignment btn-success" onclick = "editAttrVal(0,'{{$attr_id}}')" style="margin-bottom:7px;" data-toggle="button">Add</button>
    </div>
</div>
<div class="table-scrollable ">
<table class="table table-bordered table-hover table-last-bottom">
    <thead>
    <tr>
        <th>#</th>
        <th>Value </th>
        <th width="200px;"></th>
    </tr>
    </thead>
    <tbody id = "attr-wrapper">
    @if(isset($attrValList))
        @foreach($attrValList as $key=>$item)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$item['val']}}</td>
                <td>
                    <a href="javascript:editAttrVal('{{$item['id']}}','{{$attr_id}}')" class="btn default btn-xs purple">
                        <i class="livicon" data-name="pen" data-loop="true" data-color="#000" data-hovercolor="black" data-size="14"></i>
                        Edit
                    </a>
                    <a href="javascript:deleteAttrVal('{{$item['id']}}','{{$attr_id}}')" class="btn default btn-xs black">
                        <i class="livicon" data-name="trash" data-loop="true" data-color="#000" data-hovercolor="black" data-size="14"></i>
                        Delete
                    </a>
                </td>
                </td>
            </tr>
        @endforeach
        @if(count($attrValList) == 0)
            <tr>
                <td colspan = "3">There is not data</td>
            </tr>
        @endif
    @else
        <tr>
            <td colspan = "3">There is not data</td>
        </tr>
    @endif
    </tbody>
</table>
</div>