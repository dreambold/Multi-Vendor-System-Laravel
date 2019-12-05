@if(isset($attrValInfo))

    {{ csrf_field() }}
    <input type = "hidden" name = "id" value = "{{$attrValInfo['id']}}" />
    <input type = "hidden" name = "attr_id" value = "{{$attrValInfo['attr_id']}}" />
    <div class="form-group">
        <label class="col-md-3 control-label" for="name">Value</label>
        <div class="col-md-9">
            <input name="val" type="text" placeholder="Value" class="form-control" value = "{{$attrValInfo['val']}}">
        </div>
    </div>
<script>
    $("#editAttrValForm").validate({
        rules: {
            val: "required",
        },
        messages: {

        },
        errorPlacement: function (error, element) {
            if($(element).closest('div').children().filter("div.error-div").length < 1)
                $(element).closest('div').append("<div class='error-div'></div>");
            $(element).closest('div').children().filter("div.error-div").append(error);
        },
        submitHandler: function(form){
            var attrId = $(form).find("input[name='attr_id']").val();
            $.post($(form).attr("action"),$(form).serialize(),function(data){
                if(data.status==1 ){
                    successMsg(data.msg, function(){
                        initAttrValList(attrId);
                        $("#attr-val-edit-dialog").modal("hide");
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