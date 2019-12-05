<link href="{{ asset('assets/vendors/starability/starability-all.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/vendors/bootstrapStarRating/css/star-rating.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/pages/custom_rating.css') }}" rel="stylesheet" type="text/css"/>
<script src="{{ asset('assets/vendors/bootstrapStarRating/js/star-rating.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/pages/custom_rating.js') }}" type="text/javascript"></script>
<div class="modal fade" id="order_evaluate_dlg" tabindex="-1" role="dialog" aria-labelledby="addDlg1" aria-hidden="true" >
    <div class="modal-dialog modal-lg " role="document" style = "width:700px;">
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Order Evaluate Dialog</h4>
            </div>
            <div class="modal-body"   style = "padding-top:20px; padding-bottom:20px;">
                <input type = "hidden" name = "id" value = ""/>
                <input type = "hidden" name = "_token" value = "{{csrf_token()}}"/>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Mark:</label>
                        <div class="col-md-9">
                            <fieldset class="starability-slot">
                                <input type="radio" id="slot-rate5" name="rating" value="5" />
                                <label for="slot-rate5" title="Amazing"></label>
                                <input type="radio" id="slot-rate4" name="rating" value="4" />
                                <label for="slot-rate4" title="Very good"></label>
                                <input type="radio" id="slot-rate3" name="rating" value="3" />
                                <label for="slot-rate3" title="Average"></label>
                                <input type="radio" id="slot-rate2" name="rating" value="2" />
                                <label for="slot-rate2" title="Not good"></label>
                                <input type="radio" id="slot-rate1" name="rating" value="1" />
                                <label for="slot-rate1" title="Terrible"></label>
                            </fieldset>
                        </div>
                        <div class = "clearfix"></div>
                    </div>
                    <div class="form-group" style = "overflow: auto;">
                        <label class="col-md-3 control-label" for="name">Msg:</label>
                        <div class="col-md-9">
                            <textarea class = "form-control" cols = 2 name = "eval_msg"></textarea>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer mt-10" >
                <button type="button" data-dismiss="modal" class="btn btn-default mb-0">Close</button>
                <button type="button" class="btn btn-success" onclick = "evaluateOrder()">Save</button>
            </div>
        </div>

    </div>
</div>
<script>
    function evaluateOrder(){
        var eval_mark = $("#order_evaluate_dlg input[name ='rating']:checked").val();
        if(eval_mark == undefined){
            errorMsg("Please Order Mark!");
            return;
        }
        var eval_msg = $("#order_evaluate_dlg textarea[name='eval_msg']").val();
        if(eval_msg == ""){
            errorMsg("Please Order Evaluate Msg!");
            return;
        }

        var id = $("#order_evaluate_dlg input[name='id']").val();
        var param = new Object();
        param._token = _token;
        param.id = id;
        param.state = 4;
        param.eval_mark = eval_mark;
        param.eval_msg = eval_msg;
        confirmMsg("Do you sure this operation", function(){
            setTimeout(function(){
                $.post("{{url("front/my/sell_order/ajax_sell_update_order")}}", param, function(data){
                    if(data.status == "1"){
                        successMsg();
                        refreshPaidPage();
                        $("#order_evaluate_dlg").modal("hide");
                    }else{
                        errorMsg(data.msg);
                    }
                },"json");
            }, 1000);
        })

    }
</script>


