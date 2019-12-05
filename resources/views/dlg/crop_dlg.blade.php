<link rel="stylesheet" href="{{ asset('assets/crop/cropper.css') }}" type="text/css" />
<script src="{{ asset('assets/crop/cropper.js') }}" ></script>
<style>
    .cropper-container{
        margin:0px auto;
        min-height:400px;
        min-width:400px;
    }
</style>
<div id="crop-dialog" class="modal fade in"  tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Image crop</h4>
            </div>
            <form class="form-horizontal" id = "" method = "post" action="javascript:void(0)">
            <div class="modal-body" >
                <div id = "content_div" style="width:100%; padding-top:30px;">
                    <div style="clear: both;"></div>
                    <img src = "{{ asset('assets/img/cropping-image.jpg') }}" style = "width:100%;">
                    <span id="data"></span>
                    <span id="cropBoxData"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" onClick="onCropClick();"  class="btn btn-primary" >Save changes</button>
            </div>
            </form>
        </div>

    </div>
</div>

<script>
    function onCropClick(){
        callBackFnc($("#crop-dialog img").eq(0).cropper('getCroppedCanvas').toDataURL());
    }

    var imgHeight, imgWidth;
    var callBackFnc;
    function createCropperBox(data, ratio, callBack){
        var image = new Image();
        image.src = data;
        image.onload = function () {
            imgHeight = this.height;
            imgWidth = this.width;
            var options = {
                viewMode: 2,
                checkOrientation: true,
                autoCropArea: 1,
                responsive: false,
            };
            $("#crop-dialog img").eq(0).cropper(options).cropper('ratio',ratio).cropper("reset", true).cropper("replace", data);
        };

        callBackFnc = callBack;
    }
</script>