@if(isset($attrInfo))

    {{ csrf_field() }}
    <input type = "hidden" name = "id" value = "{{$attrInfo['id']}}" />
    <input type = "hidden" name = "product_id" value = "0" />
    <input type = "hidden" name = "category_id" value = "0" />
    <input type = "hidden" name = "is_variant" value = "0" />
    <div class="form-group">
        <label class="col-md-3 control-label" for="name">Title</label>
        <div class="col-md-9">
            <input name="title" type="text" placeholder="Title" class="form-control" value = "{{$attrInfo['title']}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="name">Attr Type</label>
        <div class="col-md-9">
            <select name = "attr_type" class = "form-control">
                <option value = "" selected>Attr Type</option>
                <option value = "0" @if($attrInfo['attr_type']*1 == 0) selected @endif>Text</option>
                <option value = "1" @if($attrInfo['attr_type']*1 == 1) selected @endif>Select</option>
                <option value = "2" @if($attrInfo['attr_type']*1 == 2) selected @endif>Checkbox</option>
                <option value = "3" @if($attrInfo['attr_type']*1 == 3) selected @endif>Radio</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="name">Variant</label>
        <div class="col-md-9">
            <div class="checkbox">
                <label>
                    <input type="checkbox" class="custom-checkbox" id = "is_variant" @if($attrInfo['is_variant']*1 == 1) checked @endif>&nbsp; IS VARIANT
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="name">Order Number</label>
        <div class="col-md-9">
            <input name="order_num" type="text" placeholder="Sort Order Number" class="form-control" value = "{{$attrInfo['order_num']}}">
        </div>
    </div>
<script>
    $("#editAttrForm").validate({
        rules: {
            title: "required",
            attr_type: "required",
            order_num: {"required":true, "digits":true},
        },
        messages: {

        },
        errorPlacement: function (error, element) {
            if($(element).closest('div').children().filter("div.error-div").length < 1)
                $(element).closest('div').append("<div class='error-div'></div>");
            $(element).closest('div').children().filter("div.error-div").append(error);
        },
        submitHandler: function(form){
            $("#editAttrForm input[name='category_id']").val(currentCategoryId);
            var is_variant = 0;
            if($("#is_variant").prop("checked")){
                is_variant = 1;
            }
            $("#editAttrForm input[name='is_variant']").val(is_variant);
            $.post($(form).attr("action"),$(form).serialize(),function(data){
                if(data.status==1 ){
                    successMsg(data.msg, function(){
                        initAttr();
                        $("#attr-edit-dialog").modal("hide");
                    });
                }else{
                    errorMsg(data.msg);
                }
            }, "json");
            return false;
        }
    });
</script>
@endif