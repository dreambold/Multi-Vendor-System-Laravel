<script src="{{ asset('assets/jquery.validate.js') }}" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/common.css') }}">
<form class="form-horizontal" id = "editUserReceiveAddressForm" method = "post" action="{{url("front/user_receive_address/ajaxSaveInfo")}}">
    <input type = "hidden" name = "id" value = "{{$id}}"/>
    <input type = "hidden" name = "_token" value = "{{csrf_token()}}"/>
    <div class="modal-body">
        <div class="form-group">
            <label class="col-md-3 control-label" for="name">User Name</label>
            <div class="col-md-9">
                <input name="user_name" type="text" placeholder="User Name" class="form-control" value = "{{$info['user_name']}}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Region</label>
            <div class="col-md-9">
                <select name="region_id"   class="form-control" >
                    @foreach($countries as $key => $val)
                        <option value = "{{$key}}" @if($info['region_id'] == $key) selected @endif>{{$val}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group" id = "default_value_wrapper">
            <label class="col-md-3 control-label" for="name">Address</label>
            <div class="col-md-9">
                <input name="address"  placeholder="Address" class="form-control" value = "{{$info['address']}}">
            </div>
        </div>
        <div class="form-group" id = "default_value_wrapper">
            <label class="col-md-3 control-label" for="name">Phone Number</label>
            <div class="col-md-9">
                <input name="phone_num"  placeholder="Phone Number" class="form-control" value = "{{$info['phone_num']}}">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-default mb-0">Close</button>
        <button type="submit" class="btn btn-primary" >Save changes</button>
    </div>
</form>

<script>
    $("#editUserReceiveAddressForm").validate({
        rules: {
            user_name: "required",
            region_id: "required",
            address: "required",
            phone_num: "required",
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
                    refreshUserReceiveAddressList();
                }
            }, "json")
            return false;
        }
    });
</script>