<script>
    function updateOrderState(obj){
        var state = $(obj).attr("data-order-state");
        var id = $(obj).attr("data-order-id");
        var param = new Object();
        param._token = _token;
        param.id = id;
        param.state = state;
        confirmMsg("Do you sure this operation", function(){
            setTimeout(function(){
                $.post("{{url("front/my/sell_order/ajax_sell_update_order")}}", param, function(data){
                    if(data.status == "1"){
                        successMsg();
                        refreshOrderList();
                    }else{
                        errorMsg(data.msg);
                    }
                },"json");
            }, 1000);
        })
    }
    function payOrder(orderIds, payType){
        var param = new Object();
        param._token = _token;
        param.order_ids = orderIds;
        param.trans_type = payType;
        sweetAlert.close();
        setTimeout(function(){
            $.post("{{url("front/checkout/createTransLog")}}", param, function(data){
                if(data.status == "1"){
                    var trans_id = data.transId;
                    var trans_money = data.transMoney;
                    // pay module
                    alert("call pay module trans_id:" + trans_id + "  money:" + trans_money);

                    alert("call pay success callback");
                    // really call back url;
                    param = new Object();
                    param._token = _token;
                    param.transId = trans_id;
                    $.post("{{url("/pay/success/callback")}}", param, function(){
                        window.location.href = "{{url("front/my/activity_purchase_history")}}";
                    })
                }
            },"json");
        }, 1000);

    }
</script>