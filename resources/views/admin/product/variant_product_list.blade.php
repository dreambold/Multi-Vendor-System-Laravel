@if(count($variantList) > 0)
    <div class = "row">
        <div class = "col-md-10 col-md-offset-1">
            <div class="table-scrollable ">
                <table class="table table-bordered table-hover table-last-bottom">
                <thead>

                    <tr>
                        <th>#</th>
                        @foreach($variantFieldList as $item)
                            <th data-id = "{{$item['id']}}">{{$item['title']}}</th>
                        @endforeach
                        <th>Sku</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th width="200px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($variantList as $key=>$item)
                        <tr>
                            <td>{{$key+1}}</td>
                            <?php
                            $varient_val_ids = $item['varient_val_ids'];
                            if($varient_val_ids == null) $varient_val_ids_a = array();
                            $varient_val_ids_a = explode(",", $varient_val_ids);
                            ?>
                            @foreach($varient_val_ids_a as $key1 => $item1)
                                <?php $item1_a =explode("_", $item1); ?>
                                <td class = "val-ids" data-attr-id = "{{$item1_a[0]}}" data-attr-val = "{{$item1_a[1]}}" >{{$variantValKeyArray[$item1_a[1]]}}</td>
                            @endforeach
                            <td><input name = "sku" value = "{{$item['sku']}}"/></td>
                            <td><input name = "variant_quantity" value = "{{number_format($item['quantity'],0)}}"/> </td>
                            <td><input name = "variant_price" value = "{{number_format($item['price'],2)}}"/> </td>
                            <td>
                                <a href="javascript:deleteProductSku(this)" class="btn default btn-xs black">
                                    <i class="livicon" data-name="trash" data-loop="true" data-color="#000" data-hovercolor="black" data-size="14"></i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endif
<script>
    function deleteProductSku(obj){
        var parentObj = $(obj).parent().parent().remove();
    }
</script>
