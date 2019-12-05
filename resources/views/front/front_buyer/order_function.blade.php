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
                        refreshPaidPage();
                    }else{
                        errorMsg(data.msg);
                    }
                },"json");
            }, 1000);
        })
    }


</script>