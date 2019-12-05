<div id="add-brand-dialog" class="modal fade in"  tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Brand</h4>
            </div>
            <form class="form-horizontal" id = "addBrandForm" method = "post" action="javascript:void(0)">
            <div class="modal-body" id = "content">
                <input type = "hidden" id = "type"/>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Brand</label>
                    <div class="col-md-9">
                        <select name="brandId"   class="form-control" onchange = "changeAttrTypeOnAddAttrDlg()" >
                            @foreach($brandList as $item)
                            <option value = "{{$item['id']}}">{{$item['title']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default mb-0">Close</button>
                <button type="button" onclick="onAddBrand()" class="btn btn-primary" >Save changes</button>
            </div>
            </form>
        </div>

    </div>
</div>

<script>


    function onAddBrand(){
        var id = $("#add-brand-dialog select[name='brandId']").val();
        var text = $("#add-brand-dialog select[name='brandId'] option:selected").text();
        var type = $("#add-brand-dialog #type").val();
        if(!checkBrand(id, type)){
            var html = "<li data-id = '"+id+"'>" + text + "<i class='js-remove'>✖</i></li>";
            if(type == '0'){
                $("#editable").append(html);
            }else{
                $("#editable1").append(html);
            }
        }
        $("#add-brand-dialog").modal("hide");
    }
    function checkBrand(id,type){
        var ret = false;
        if(type == '0'){
            $("#editable li").each(function(){
                if($(this).attr("data-id") == id){
                    ret = true;
                    return true;
                }
            });
        }else{
            $("#editable1 li").each(function(){
                if($(this).attr("data-id") == id){
                    ret = true;
                    return true;
                }
            });
        }

        return ret;
    }
</script>