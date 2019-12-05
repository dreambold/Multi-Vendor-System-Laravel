<div id="customize-variant-dialog" class="modal fade in"  tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Customize Product Variant</h4>
            </div>
            <form class="form-horizontal">
            <div class="modal-body" id = "content">

            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default" style = "margin-bottom:0px;">Close</button>
                <button type="button" class="btn btn-primary" onclick = "customizeVariantContent()" >Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script>
    function customizeVariantContent(){
        var attrList = getCustomizeVariantAttrConfig();
        var param = new Object();
        param._token = _token;
        param.attrList = JSON.stringify(attrList);
        param.product_id = 1;
        $.post("{{url("admin/product/ajaxVariantTableList")}}", param, function(html){
            $("#variantTableWrapper").html(html);
            $("#customize-variant-dialog").modal("hide");
        })
    }

    function getCustomizeVariantAttrConfig(){
        var ret = new Array();
        var item , itemList;
        $("#customize-variant-dialog .customize-variant-attr-value-wrapper").each(function(){
            item = new Object();
            item.attr_id = $(this).attr("data-attr-id");
            itemList = new Array();
            $(this).find("button").each(function(){
                 itemList[itemList.length] = $(this).attr("data-id");
            });
            if(itemList.length > 0){
                item.list = itemList;
                ret[ret.length] = item;
            }
        });
        return sortVariantArr(ret);
    }

    function sortVariantArr(arr){
        var temp;
        for(var i = 0 ; i < arr.length-1; i++){
            for(var j = i+1 ; j < arr.length; j++){
                if(parseInt(arr[i].attr_id) > parseInt(arr[j].attr_id)){
                   temp = arr[i];
                   arr[i] = arr[j];
                   arr[j] = temp;
                }
            }
        }
        return  arr;
    }
</script>

