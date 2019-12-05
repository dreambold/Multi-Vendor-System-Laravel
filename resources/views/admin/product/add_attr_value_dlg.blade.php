<div id="add-attr-value-dialog" class="modal fade in"  tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-xs">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Attribute Value</h4>
            </div>
            <form class="form-horizontal" id = "addAttrValueForm" method = "post" action="javascript:void(0)">
            <div class="modal-body" id = "content">
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Value</label>
                    <div class="col-md-9">
                        <input name="value" type="text" placeholder="Value" class="form-control" value = "">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default mb-0">Close</button>
                <button type="submit" class="btn btn-primary" >Save changes</button>
            </div>
            </form>
        </div>

    </div>
</div>

<script>
    $("#addAttrValueForm").validate({
        rules: {
            value: "required",
        },
        messages: {

        },
        errorPlacement: function (error, element) {
            if($(element).closest('div').children().filter("div.error-div").length < 1)
                $(element).closest('div').append("<div class='error-div'></div>");
            $(element).closest('div').children().filter("div.error-div").append(error);
        },
        submitHandler: function(form){
            var title = $(form).find("input[name='value']").val();
            if(!checkAttrValue(title)){
                errorMsg("Value is doubled!");
                return;
            }
            onAddAttrValue();
            return false;
        }
    });

    function checkAttrValue(title){
        var ret = true;
        var wrapperObj = $(curAttrValObj).parent().parent();
        var attrType = wrapperObj.find(".attr-value-wrapper").attr("data-attr-type");
        var title0;
        switch(attrType){
            case "1" :
                wrapperObj.find(".attr-value-wrapper select option").each(function(){
                    title0= $(this).text();
                    if(title0.toLowerCase()==title.toLowerCase()){
                        ret = false;
                        return true;
                    }
                })
                break;
            case "2" :
                wrapperObj.find("span").each(function(){
                    title0 = $(this).text();
                    if(title0.toLowerCase()==title.toLowerCase()){
                        ret = false;
                        return true;
                    }
                })
            case "3" :
                wrapperObj.find("span").each(function(){
                    title0 = $(this).text();
                    if(title0.toLowerCase()==title.toLowerCase()){
                        ret = false;
                        return true;
                    }
                })
        }


        return ret;
    }
</script>