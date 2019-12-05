<link href="{{ asset('assets/vendors/starability/starability-all.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/vendors/bootstrapStarRating/css/star-rating.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/pages/custom_rating.css') }}" rel="stylesheet" type="text/css"/>
<script src="{{ asset('assets/vendors/bootstrapStarRating/js/star-rating.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/pages/custom_rating.js') }}" type="text/javascript"></script>
<div class="modal fade" id="order_evaluate_show_dlg" tabindex="-1" role="dialog" aria-labelledby="addDlg1" aria-hidden="true" >
    <div class="modal-dialog modal-lg " role="document" style = "width:700px;">
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Order Evaluate View Dialog</h4>
            </div>
            <div class="modal-body"   style = "padding-top:20px; padding-bottom:20px;">
                <input type = "hidden" name = "id" value = ""/>
                <input type = "hidden" name = "_token" value = "{{csrf_token()}}"/>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Mark:</label>
                        <label class="col-md-9  border-none">
                            @for($i=1; $i<=5;$i++)
                                <i class = "fa fa-star star-ele"  style = "color:orange;font-size:30px;"></i>
                            @endfor
                        </label>
                        <div class = "clearfix"></div>
                    </div>
                    <div class="form-group" style = "overflow: auto;">
                        <label class="col-md-3 control-label" for="name">Msg:</label>
                        <div class="col-md-9">
                            <label id = "msg" class = "form-control border-none"></label>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer mt-10" >
                <button type="button" data-dismiss="modal" class="btn btn-default mb-0">Close</button>
                <button type="button" class="btn btn-success hidden">Save</button>
            </div>
        </div>

    </div>
</div>



