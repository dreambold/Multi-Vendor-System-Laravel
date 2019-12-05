<script src="{{ asset('assets/jquery.validate.js') }}" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/common.css') }}">
<form class="form-horizontal" id = "editDiscountDlgBuyerContentForm" method = "post" action="{{url("front/my/order/ajax_buy_discount_proposal")}}">
    <input type = "hidden" name = "id" value = "{{$id}}"/>
    <input type = "hidden" name = "_token" value = "{{csrf_token()}}"/>
    <div class="modal-body">
        <div class="form-group">
            <label class="col-md-3 control-label" for="name">DiscountMsg:</label>
            <div class="col-md-9">
                <textarea name = "discount_user_msg" class = "form-control" cols = "2" >{{$info['discount_user_msg']}}</textarea>
            </div>
        </div>
        <div class="form-group" id = "default_value_wrapper">
            <label class="col-md-3 control-label" for="name">ProposalPrice</label>
            <div class="col-md-9">
                <input name="discount_price_req"  placeholder="Proposal Price" class="form-control" value = "{{$info['discount_price_req']}}">
            </div>
        </div>
        @if($info['discount_seller_msg'] != '')
        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Seller Response:</label>
            <div class="col-md-9">
                <label class = "form-control border-none">{{$info['discount_seller_msg']}}</label>
            </div>
        </div>
        @endif
        @if($info['discount_price_response']*1 != 0)
        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Seller Proposal:</label>
            <div class="col-md-9">
                <label class = "form-control border-none">{{$info['discount_price_response']}}</label>
            </div>
        </div>
        @endif
    </div>
    <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-default mb-0">Close</button>
        <button type="button" class="btn btn-primary" onclick = "userDiscountProposal(1)" >Proposal</button>
        @if($info['discount_state']*1 == 3)
        <button type="button" class="btn btn-success" onclick = "userDiscountProposal(2)">Ok</button>
        @endif
    </div>
</form>

<script>
    function userDiscountProposal(state){
        var url = "{{url("front/my/order/ajax_buy_discount_proposal")}}";
        var param = new Object();
        param._token = _token;
        param.id = $("#editDiscountDlgBuyerContentForm input[name='id']").val();
        param.discount_state = state;
        if(state == "2"){
            param.pass_price = "{{$info['discount_price_response']}}";
        }else{
            param.discount_user_msg = $("#editDiscountDlgBuyerContentForm textarea[name='discount_user_msg']").val();
            var discount_price_req = $("#editDiscountDlgBuyerContentForm input[name='discount_price_req']").val();
            if(discount_price_req == "" || isNaN(discount_price_req) ){
                errorMsg("ProposalPrice input Error");
                return;
            }

            if(parseFloat(discount_price_req) == 0){
                errorMsg("please input the ProposalPrice");
                return;
            }

            if(!checkProposalPrice(discount_price_req)){
                errorMsg("The ProposalPrice is over up 25% of Order price");
                return;
            }
            param.discount_price_req = discount_price_req;
        }

        $.post(url, param,  function(data){
            if(data.status == "1"){
                successMsg();
                refreshUnpaidPage();
                $("#discount_dlg").modal("hide");
            }else{
                errorMsg(data.msg);
            }
        }, "json");
    }

    function checkProposalPrice(discount_price_req){
        var orderPrice = "{{$info['total_price']}}";
        orderPrice = parseFloat(orderPrice);
        if(parseFloat(discount_price_req) < orderPrice*0.25 ){
            return false;
        }
        return true;
    }

</script>