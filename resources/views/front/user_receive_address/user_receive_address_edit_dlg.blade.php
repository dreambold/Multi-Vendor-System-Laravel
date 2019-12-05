<div class="modal fade" id="user_receive_address_edit_dlg" tabindex="-1" role="dialog" aria-labelledby="addDlg" aria-hidden="true" >
    <div class="modal-dialog modal-md " role="document" style = "width:700px;">
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Receive address</h4>
            </div>
            <div class="modal-body" id = "content" style = "padding-top:20px; padding-bottom:20px;">
            </div>
        </div>
    </div>
</div>

<script>
    function editUserRecieveAddress(id){
        var param = new Object();
        param._token = _token;
        param.id = id;
        $.post("{{url("front/user_receive_address/ajaxInfo")}}", param, function(html){
            $("#user_receive_address_edit_dlg #content").html(html);
            $("#user_receive_address_edit_dlg").modal("show");
        });
    }
</script>


