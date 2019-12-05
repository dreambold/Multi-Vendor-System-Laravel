<div id="add-attr-dialog" class="modal fade in"  tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Item Specific</h4>
            </div>
            <form class="form-horizontal" id = "addAttrForm" method = "post" action="javascript:void(0)">
            <input type = "hidden" name = "is_require" value = "0"/>
            <div class="modal-body" id = "content">
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Attribute Name</label>
                    <div class="col-md-9">
                        <input name="title" type="text" placeholder="Name" class="form-control" value = "">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Attribute Type</label>
                    <div class="col-md-9">
                        <select name="attr_type"   class="form-control" onchange = "changeAttrTypeOnAddAttrDlg()" >
                            <?php $attr_a = array("text", "select", "checkbox", "radio"); ?>
                            @for($ii=0; $ii<=3; $ii++)
                            <option value = "{{$ii}}">{{$attr_a[$ii]}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="form-group" id = "default_value_wrapper">
                    <label class="col-md-3 control-label" for="name">Default Value</label>
                    <div class="col-md-9">
                        <input name="attr_value"  placeholder="Default Value" class="form-control" value = "">
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
    function changeAttrTypeOnAddAttrDlg(){
        var attr_type = $("#addAttrForm select[name='attr_type']").val();
        if(attr_type == "0"){
            $("#addAttrForm #default_value_wrapper").addClass("hidden");
        }else{
            $("#addAttrForm #default_value_wrapper").removeClass("hidden");
        }
    }
    $("#addAttrForm").validate({
        rules: {
            title: "required",
        },
        messages: {

        },
        errorPlacement: function (error, element) {
            if($(element).closest('div').children().filter("div.error-div").length < 1)
                $(element).closest('div').append("<div class='error-div'></div>");
            $(element).closest('div').children().filter("div.error-div").append(error);
        },
        submitHandler: function(form){
            var is_require = $(form).find("input[name='is_require']").val();
            var find_class = "attr_require";
            var title = $(form).find("input[name='title']").val();
            if(is_require=="0"){
                find_class = "attr_additional";
            }
            if(!checkAttrName(title)){
                errorMsg("Attribute name is doubled!");
                return;
            }
            var attr_value = $(form).find("input[name='attr_value']").val();
            if(!$(form).find("#default_value_wrapper").hasClass("hidden") && attr_value == ""){
                errorMsg("Default value is required!");
                return;
            }
            onAddAttr();
            return false;
        }
    });

    function checkAttrName(title){
        var ret = true;
        $(".productInfoForm .product-attribute").each(function(){
             if($(this).attr("name").toLowerCase() == title.toLowerCase()){
                 ret = false;
                 return false;
             }
        });

        return ret;
    }
</script>