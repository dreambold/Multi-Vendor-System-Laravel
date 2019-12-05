<div class="modal fade" id="save_seller_dlg" tabindex="-1" role="dialog" aria-labelledby="addDlg1" aria-hidden="true" >
    <form id = "saveSellerForm" action = "{{url("front/my/ajaxSaveSeller")}}" method = "post">
    <div class="modal-dialog modal-lg " role="document" style = "width:700px;">
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Save Seller Dialog</h4>
            </div>
            <div class="modal-body"   style = "padding-top:20px; padding-bottom:20px;">
                <input type = "hidden" name = "user_id" value = ""/>
                <input type = "hidden" name = "seller_id" value = ""/>
                <input type = "hidden" name = "_token" value = "{{csrf_token()}}"/>
                <div class="modal-body">
                    <div class="form-group" style = "overflow: auto;">
                        <label class="col-md-3 control-label" for="name">Msg:</label>
                        <div class="col-md-9">
                            <input class = "form-control" name = "msg" style = "width:200px;"/>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer mt-10" >
                <button type="button" data-dismiss="modal" class="btn btn-default mb-0">Close</button>
                <button class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
    </form>
</div>
<script>
    $("#saveSellerForm").validate({
        rules: {
            msg: "required",
        },
        messages: {

        },
        errorPlacement: function (error, element) {
            if($(element).closest('div').children().filter("div.error-div").length < 1)
                $(element).closest('div').append("<div class='error-div'></div>");
            $(element).closest('div').children().filter("div.error-div").append(error);
        },
        submitHandler: function(form){
            $.post($(form).attr("action"), $(form).serialize(), function(data){
                if(data.status == "1"){
                    successMsg(data.msg, function(){
                        $("#save_seller_dlg").modal("hide");
                        window.location.reload();
                    });

                }else{
                    errorMsg(data.msg);
                }
            }, "json");
            return false;
        }
    });
</script>



