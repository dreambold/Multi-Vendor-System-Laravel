<div class="table-scrollable ">
<table class="table table-bordered table-hover table-last-bottom">
    <thead>
    <tr>
        <th>#</th>
        <th>Image </th>
        <th>Title</th>
        <th>SubTitle</th>
        <th>Price</th>
        <th>Quantity</th>
        <th width="200px;"></th>
    </tr>
    </thead>
    <tbody >
        @if(isset($productList))
        @foreach($productList as $key=>$item)
            <tr>
                <td>{{$key+1+$pageParam['startNumber']}}</td>
                <td>
                    <img src = "{{correctImgPath($item['img'])}}" style = "width:80px;" onerror = "noExitImg(obj)"/>
                </td>
                <td>{{$item['title']}}</td>
                <td>{{$item['subtitle']}}</td>
                <td><?php echo number_format($item['price'],2);?></td>
                <td><?php echo number_format($item['quantity'],0);?></td>
                <td>
                    <a href="javascript:editProduct('{{$item['id']}}', '{{$item['category_id']}}')" class="btn default btn-xs purple">
                        <i class="livicon" data-name="pen" data-loop="true" data-color="#000" data-hovercolor="black" data-size="14"></i>
                        Edit
                    </a>
                    <a href="javascript:deleteProduct('{{$item['id']}}')" class="btn default btn-xs black">
                        <i class="livicon" data-name="trash" data-loop="true" data-color="#000" data-hovercolor="black" data-size="14"></i>
                        Delete
                    </a>
                </td>
                </td>
            </tr>
        @endforeach
        @if(count($productList) == 0)
            <tr>
                <td colspan = "9">There is not data</td>
            </tr>
        @endif
        @else
            <tr>
                <td colspan = "9">There is not data</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<?php $searchFun = 'initProduct' ?>
<div class = "text-center">
@include("admin.layouts.pagination")
</div>