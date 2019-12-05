@extends('admin/layouts/default')

{{-- Web site Title --}}
@section('title')
    @lang('blogcategory/title.management')
    @parent
@stop
@section('header_styles')
    <link href="{{ asset('assets/vendors/summernote/summernote.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset("assets/tree/dtree.css")}}">
    <script src="{{asset("assets/tree/dtree.js")}}"></script>
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages/editor.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/pages/buttons.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/pages/advbuttons.css') }}" rel="stylesheet" type="text/css"/>



@stop

{{-- Montent --}}
@section('content')
    <section class="content-header">
        <h1>Product</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    @lang('general.dashboard')
                </a>
            </li>
            <li><a href="#">Product Manage</a></li>
            <li class="active">Product</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary" id="hidepanel6">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Product Information
                        </h3>
                        <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up clickable"></i>
                    </span>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal productInfoForm" id = "productInfoForm" action="javascript:void(0)">
                            <input type = "hidden" name = "_token" value = "{!! csrf_token() !!}"/>
                            <input type = "hidden" name = "id" value = "{{isset($product['id'])?$product['id']:"0"}}"/>
                            <input type = "hidden" name = "category_id" value = "{{$category_id}}"/>
                            <input type = "hidden" name = "is_hot" value = "{{$product['is_hot']}}"/>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Seller</label>
                                <div class="col-md-9">
                                    <select name = "seller_id" class = "form-control">
                                        <?php foreach($sellerList as $seller){?>
                                        <option value = "<?php echo $seller['user']['id'] ?>" <?php if(isset($product['seller_id']) && ($product['seller_id']==$seller['user']['id'])) echo "selected"; ?>><?php echo $seller['user']->getFullNameAttribute()?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Title</label>
                                <div class="col-md-9">
                                    <input name="title" type="text" placeholder="Product title" class="form-control" value = "{{$product['title']}}"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email">Subtitle</label>
                                <div class="col-md-9">
                                    <input name="subtitle" type="text" placeholder="Subtitle" class="form-control" value = "{{$product['subtitle']}}"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" ></label>
                                <div class="col-md-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id = "is_search" class="custom-checkbox" @if($product['is_search']*1) checked @endif value="">&nbsp; Stand out with a bold title in search results($3.00)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name"></label>
                                <div class="col-md-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id = "is_hot" class="custom-checkbox" @if($product['is_hot']*1) checked @endif value="">&nbsp; Is Hot</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">Brand</label>
                                <div class="col-md-9">
                                    <select class = "form-control" name = "brand_id">
                                        <option value = "0" @if($product['brand_id']*1 ==0) selected @endif> </option>
                                        @foreach($brandList as $item)
                                        <option value = "0" @if($product['brand_id']*1 == $item['id'])  selected @endif>{{$item['title']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">Condition</label>
                                <div class="col-md-9">
                                    <select class = "form-control" name = "condition">
                                        <option value = "0" @if($product['condition']*1 ==0) selected @endif></option>
                                        <option value = "1" @if($product['condition']*1 ==1) selected @endif>new</option>
                                        <option value = "2" @if($product['condition']*1 ==2) selected @endif>unused</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">Price</label>
                                <div class="col-md-9">
                                    <input class = "form-control" name = "price" value = "{{$product['price']}}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">Retail Price</label>
                                <div class="col-md-9">
                                    <input class = "form-control" name = "retail_price" value = "{{$product['retail_price']}}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">Quantity</label>
                                <div class="col-md-9">
                                    <input class = "form-control" name = "quantity" value = "{{number_format($product['quantity'],2)}}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">Item specific</label>
                            </div>
                            <?php $prop_a = array("* Require", "Additional")?>
                            @for($i=0; $i<2 ;$i++)
                            <div class="form-group">
                                <label class="col-md-12 control-label" style = "text-align:center !important;" for="message">{{$prop_a[$i]}}</label>
                            </div>
                            @foreach($attrList[$i] as $attr)
                                <div class="form-group <?php if($attr['is_require']*1 ==0) echo "attr_additional"; else echo "attr_require"; ?>" data-attr-name = "{{$attr['title']}}"  data-attr-id = "{{$attr['id']}}">
                                    <label class="col-md-3 control-label" for="message">{{$attr['title']}}</label>
                                    <div class="col-md-6 attr-value-wrapper" data-attr-type = "{{$attr['attr_type']}}" data-attr-is-require = "{{$attr['is_require']}}">
                                        @if($attr['attr_type']*1 == 0)
                                        <input class = "form-control product-attribute" name = "{{$attr['title']}}" value = "{{$attr['textVal']}}"   />
                                        @elseif($attr['attr_type']*1 ==1)
                                            <select class = "form-control product-attribute" name = "{{$attr['title']}}">
                                                @foreach($attr['valList'] as $val)
                                                    <option data-product-id = "{{$val['product_id']}}" value = "{{$val['id']}}" @if($val['checked']*1 ==1) checked @endif>{{$val['val']}}</option>
                                                @endforeach
                                            </select>

                                        @elseif($attr['attr_type']*1 ==2)
                                            @foreach($attr['valList'] as $val)
                                                    <label class=" checkbox-inline">
                                                    <input type="checkbox"  data-product-id = "{{$val['product_id']}}"  class = " custom-checkbox product-attribute" name = "{{$attr['title']}}" value1 = "{{$val['val']}}" value = "{{$val['id']}}" <?php if($val['checked']*1==1) echo "checked";  ?>  >&nbsp;<span>{{$val['val']}}</span></label>
                                            @endforeach
                                        @elseif($attr['attr_type']*1 ==3)
                                            @foreach($attr['valList'] as $val)
                                                <label class=" radio-inline">
                                                    <input type="radio" data-product-id = "{{$val['product_id']}}" class = " custom-checkbox product-attribute"  name = "{{$attr['title']}}" value = "{{$val['id']}}" <?php if($val['checked']*1==1) echo "checked";  ?> >&nbsp;<span>{{$val['val']}}</span></label>
                                            @endforeach
                                        @endif
                                    </div>
                                    @if($attr['attr_type']*1 != 0)
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-responsive btn-default" onclick = "addAttrValue(this)">Add</button>
                                        <button type="button" class="btn btn-responsive btn-default" onclick = "delAttrValue(this)">Delete</button>
                                        @if($attr['product_id']*1 > 0)
                                        <button type="button" class="btn btn-responsive btn-default" onclick = "delAttr(this)">Del Attr</button>
                                        @endif
                                    </div>
                                    @endif
                                </div>
                            @endforeach
                            @include("admin/product/attr_model")
                            <div class = "append-wrapper">

                            </div>
                            <div class="form-group <?php if(isset($attr) && ($attr['is_require']*1 ==0)) echo "attr_additional"; else echo "attr_require"; ?>" data-attr-id = "-1">
                                <label class="col-md-3 control-label" for="message"></label>
                                <div class="col-md-9">
                                    <button type="button" class="btn btn-responsive btn-default" data-is-require = "{{$i}}" onclick = "addAttr(this)" >Customize</button>
                                </div>
                            </div>
                            @endfor
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">Variant</label>
                                <div class="col-md-9">
                                    <button type="button" class="btn btn-responsive btn-default" onclick = "customizeVariant()">Customize</button>
                                </div>
                            </div>
                            <div class="form-group" id = "variantTableWrapper" >
                                @include("admin/product/variant_product_list")
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">Description</label>
                                <div class="col-md-9">
                                    <div id = "description">{!! $description !!}</div>
                                </div>
                            </div>
                            <div class = "form-group">
                                <label class="col-md-3 control-label" for="name">Photos</label>
                                <div class="col-md-9" >
                                    <div class = "one-pic-wrapper" style = "position:relative;">
                                       <span class = "wrp" style = "padding-top:180px;">
                                           <span class="upl-selBtnWr" onclick = "onClickFilgDlg('#mainProductImg');">
                                               <label for="upl-fileInp" class="mb-0" style = "padding:10px 20px;">Add photos</label>
                                           </span>
                                           <div class="addPhotosMsgPnl" id="up-addPicMsgPanel">
                                            <p class="addUptoMsg" style="display: inline;">
                                                Add up to 12 photos
                                                We don't allow photos with extra borders, text or artwork.</p>
                                            </div>
                                       </span>
                                        <div class = "@if($product['img'] == '') hidden @endif" style = "position:absolute; left:0; right:0;top:0; bottom:0">
                                            <img id = "mainProductImg_img" class = "productImg" style = "width:100%;" @if($product['img'] != '') src = "{{correctImgPath1($product['img'])}}" @endif/>
                                            <input type = "hidden" id = "mainProductImg_val" class = "productImgData" name ="mainProductImg_val" value = "{{correctImgPath1($product['img'])}}" />
                                        </div>
                                        <div class = "@if($product['img'] == '') hidden @endif delBtnWrapper" style = "position:absolute; width:30px; right:0;height: 30px; bottom:0" onclick = "delImage(this)">
                                            <i class = "fa fa-close cursor" ></i>
                                        </div>
                                    </div>

                                    <div class = "thumbsWrap">
                                       <ul id = "tg-thumbs" style = "margin-top:0px;">
                                        @for($i=0; $i<12; $i++)
                                           <li data-i = "{{$i}}">
                                               <span class = "tg-li">
                                                   <a class = "addPicBtn @if($i>($imgListMax+1)) hidden @endif" href = "javascript:void(0)" onclick = "onClickFilgDlg('#mainProductImg{{$i}}');">
                                                       <b>Add photos</b>
                                                   </a>
                                                   <div class = "@if($imgList[$i] == '') hidden @endif " style = "position:absolute; left:0; right:0;top:0; bottom:0">
                                                       <img id = "mainProductImg{{$i}}_img" class = "productImg subProductImg" style = "width:100%;" @if($imgList[$i] != '') src = "{{correctImgPath1($imgList[$i])}}" @endif/>
                                                       <input type = "hidden" class = "productImgData" id = "mainProductImg{{$i}}_val" name ="mainProductImg{{$i}}_val" value = "@if($imgList[$i] == ''){{$imgList[$i]}}  @endif" />
                                                   </div>
                                                   <div class = "@if($imgList[$i] == '') hidden @endif delBtnWrapper" style = "position:absolute; width:30px; right:0;height: 30px; bottom:0" onclick = "delImage(this,1)">
                                                       <i class = "fa fa-close cursor" ></i>
                                                   </div>
                                               </span>

                                           </li>
                                        @endfor
                                       </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-position">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-responsive btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include("admin/product/add_attr_value_dlg")
        @include("admin/product/customize_variant_dlg")
        @include("admin/product/add_attr_dlg")
        @include("dlg/crop_dlg")
    </section>

@stop
{{-- Body Bottom confirm modal --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" ></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script  src="{{ asset('assets/vendors/summernote/summernote.min.js') }}"  type="text/javascript"></script>
    <script>
        var curAttrValObj = null;
        var curAttrObj = null;
        var descriptionObj ;
        $(document).ready(function() {
            initInterface();
            descriptionObj = $("#description").summernote({
                fontNames: ['Lato', 'Arial', 'Courier New']
            });

            $(".productImg").hover(function(){
                $(this).parent().next().removeClass("hidden");
            }, function(e){
                if(!$(e.relatedTarget).hasClass("delBtnWrapper")){
                    $(this).parent().next().addClass("hidden");
                }

            })

        });



        $("#productInfoForm").validate({
            rules: {
                title: "required",
                subtitle: "required",
                is_search: "required",
                price: {"required":true, "number":true},
                retail_price: {"required":true, "number":true},
                quantity: {"required":true, "number":true},
            },
            messages: {

            },
            errorPlacement: function (error, element) {
                if($(element).closest('div').children().filter("div.error-div").length < 1)
                    $(element).closest('div').append("<div class='error-div'></div>");
                $(element).closest('div').children().filter("div.error-div").append(error);
            },
            submitHandler: function(form){
                var datas = new FormData();
                datas.append('_token', _token);
                datas.append('description', $("#description").summernote("code"));

                var param = new Object();

                var product = new Object();
                product.id = $("input[name='id']").val();
                product.title = $("input[name='title']").val();
                product.subtitle = $("input[name='subtitle']").val();
                product.is_search = $("input[name='is_search']").val();
                product.is_search = $("is_search").prop("checked")?1:0;
                product.category_id = $("input[name='category_id']").val();
                product.price = $("input[name='price']").val();
                product.retail_price = $("input[name='retail_price']").val();
                product.quantity = $("input[name='quantity']").val();
                product.condition = $("select[name='condition']").val();


                var is_hot = "0";
                if($("#is_hot").prop("checked")){
                    is_hot = "1";
                }
                product.is_hot = is_hot;
                product.brand_id = $("select[name='brand_id']").val();
                product.seller_id = $("select[name='seller_id']").val();
                param.product=product;

                var attrVal = getProductAttrVal();

                if(!attrVal.checked){
                    errorMsg("The product attribute is not proper");
                    return;
                }
                param.product_attr_val_arr = attrVal.list;
                var variantList = getProductVariantArr();
                if(!variantList.checked){
                    errorMsg("The product variant is not proper");
                    return;
                }

                param.product_variant_arr = variantList.list;

                datas.append('param', JSON.stringify(param));
                $(".productImgData").each(function(){
                    datas.append($(this).attr("name"), $(this).val());
                });

                var url = "{{url("admin/product/ajaxSaveProductInfo")}}";
                $.ajax({
                    url: url,
                    data: datas,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    type: 'POST',
                    beforeSend: function (data, status) {
                    },
                    success: function (data) {
                        if (data.status == 1) {
                            successMsg(data.msg, function(){
                                window.location.href = "{{url("admin/product")}}";
                            });
                        } else {
                            errorMsg(data.msg);
                            return false
                        }
                    },
                    error: function (data, status, e) {
                        errorMsg("errors happens");
                        return false;
                    }
                });
                return false;
            }
        });

        function getProductVariantArr(){
            var checked = true;
            var variantArr = new Array();
            var variant ;
            var sku, quantity, price, varient_val_ids, val_ids_first, val_ids_second;
            $("#variantTableWrapper tbody tr").each(function(){
                sku = $(this).find("input[name='sku']").val();
                quantity = $(this).find("input[name='variant_quantity']").val();
                price = $(this).find("input[name='variant_price']").val();
                quantity = parseInt(quantity);
                price = parseFloat(price);
                if(isNaN(quantity) || isNaN(price) || sku == ""){
                    checked = false;
                    return true;
                }

                price = price.toFixed(0);
                quantity = quantity.toFixed(2);
                varient_val_ids = "";
                $(this).find(".val-ids").each(function(){
                    val_ids_first =  $(this).attr("data-attr-id");
                    val_ids_second =  $(this).attr("data-attr-val");
                    varient_val_ids += ("" == varient_val_ids ? "": ",") + val_ids_first+"_" + val_ids_second;
                });
                variant = new Object();
                variant.price = price;
                variant.quantity = quantity;
                variant.varient_val_ids = varient_val_ids;
                variant.sku = sku;
                variantArr[variantArr.length] = variant;
            });

            var ret = new Object();
            ret.checked = checked;
            ret.list = variantArr;
            return ret;
        }

        function getProductAttrVal(){
            var checked = true;
            var attrValArr = new Array();
            var attrVal ;
            var attr_id , val_ids, text_val,valWrapper,attr_type, valEleWrapper ;
            $(".attr_require").each(function(){
                attr_id = $(this).attr("data-attr-id");
                valWrapper = $(this).find(".attr-value-wrapper");
                attr_type = valWrapper.attr("data-attr-type");
                valEleWrapper = $(this).find(".product-attribute");
                switch(attr_type){
                    case "0":
                        val_ids = '';
                        text_val = valEleWrapper.val();
                        if(text_val == "") {
                            checked = false;
                            return true;
                        }
                        break;
                    case "1":
                        val_ids = valEleWrapper.val();
                        text_val = '';
                        if(val_ids == "") {
                            checked = false;
                            return true;
                        }

                        break;
                    case "2":
                        val_ids = '';
                        text_val = '';
                        $(this).find("input[type='checkbox']").each(function(){
                            if($(this).prop("checked")){
                                val_ids += (val_ids == ""? "":",") + $(this).val();
                            }
                        });
                        if(val_ids == "") {
                            checked = false;
                            return true;
                        }

                        break;
                    case "3":
                        val_ids = '';
                        text_val = '';
                        $(this).find("input[type='radio']").each(function(){
                            if($(this).prop("checked")){
                                val_ids += (val_ids == ""? "":",") + $(this).val();
                            }
                        });
                        if(val_ids == ""){
                            checked = false;
                            return true;
                        }
                        break;
                }
                attrVal = new Object();
                attrVal.attr_id = attr_id;
                attrVal.val_ids = val_ids;
                attrVal.text_val = text_val;
                attrValArr[attrValArr.length] = attrVal;
            });
            var ret = new Object()
            if(!checked){
                ret.checked = checked;
                ret.list = attrValArr;
                return ret;
            }
            $(".attr_additional").each(function(){
                attr_id = $(this).attr("data-attr-id");
                valWrapper = $(this).find(".attr-value-wrapper");
                attr_type = valWrapper.attr("data-attr-type");
                valEleWrapper = $(this).find(".product-attribute");
                switch(attr_type){
                    case "0":
                        val_ids = '';
                        text_val = valEleWrapper.val();
                        break;
                    case "1":
                        val_ids = valEleWrapper.val();
                        text_val = '';
                        break;
                    case "2":
                        val_ids = '';
                        text_val = '';
                        $(this).find("input[type='checkbox']").each(function(){
                            if($(this).prop("checked")){
                                val_ids += (val_ids == ""? "":",") + $(this).val();
                            }
                        });
                        break;
                    case "3":
                        val_ids = '';
                        text_val = '';
                        $(this).find("input[type='radio']").each(function(){
                            if($(this).prop("checked")){
                                val_ids += (val_ids == ""? "":",") + $(this).val();
                            }
                        });
                        break;
                }
                attrVal = new Object();
                attrVal.attr_id = attr_id;
                attrVal.val_ids = val_ids;
                attrVal.text_val = text_val;
                if(val_ids != '' || text_val != ''){
                    attrValArr[attrValArr.length] = attrVal;
                }
            });

            ret.checked = checked;
            ret.list = attrValArr;
            return ret;

        }

        function customizeVariant(){
            getVariantAttrs();
            if(curVariantAttrs.length ==0 || curVariantAttrs.length > 3 ){
                errorMsg("Do you can not Variant , Because Attribute is not property");
                return;
            }
            var param = new Object();
            param._token = _token;
            param.data = JSON.stringify(curVariantAttrs);
            $.post("{{url("admin/product/customize_variant_content")}}", param , function(html){
                $("#customize-variant-dialog #content").html(html);
                $("#customize-variant-dialog").modal("show");
            })

        }

        var curVariantAttrs = null;
        function getVariantAttrs(){
            curVariantAttrs = new Array();
            var eleItem, eleValList, eleValItem;
            $(".attr-value-wrapper").each(function(){
                if($(this).attr("data-attr-type") == "2" && $(this).attr("data-attr-is-require") == "1"){
                    eleItem = new Object();
                    eleItem.id = $(this).parent().attr("data-attr-id");
                    eleItem.name = $(this).parent().attr("data-attr-name");
                    eleValList  = new Array();
                    $(this).find("input[type='checkbox']").each(function(){
                        if($(this).prop("checked")){
                            eleValItem = new Object();
                            eleValItem.name = $(this).attr("value1");
                            eleValItem.id = $(this).val();
                            eleValList[eleValList.length] = eleValItem;
                        }
                    });

                    if(eleValList.length > 0){
                        eleItem.list = eleValList;
                        curVariantAttrs[curVariantAttrs.length] = eleItem;
                    }
                }
            });
            return curVariantAttrs;
        }

        function nextShowInsertImgBtn(obj){
            var liObj = $(obj).parent().parent().parent();
            var i = liObj.attr("data-i");
            if(i != '11'){
                var nextLiObj = liObj.next();
                nextLiObj.find(".addPicBtn").removeClass("hidden");
            }

        }

        function initInterface(){
            $('input[type="checkbox"].custom-checkbox, input[type="radio"].custom-radio').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue',
                increaseArea: '20%'
            });
        }

        function delImage(obj, isSubImg){
            $(obj).prev().find("img").attr("src", "");
            $(obj).prev().find("img").next().val("");
            $(obj).prev().addClass("hidden");
            $(obj).addClass("hidden");

        }

        function addAttrValue(obj){
            curAttrValObj = obj;
            $("#add-attr-value-dialog input[name='value']").val("");
            $("#add-attr-value-dialog").modal("show");
        }



        function onAddAttrValue(){
            var value = $("#add-attr-value-dialog input[name='value']").val();
            $("#add-attr-value-dialog").modal("hide");
            if(curAttrValObj == null) return;
            var parentObj = $(curAttrValObj).parent().prev();
            var dataAttrType = parentObj.attr("data-attr-type");
            var html = "";
            switch(dataAttrType){
                case "1":
                    html = "<option value ='-1'>"+value+"</option>"
                    parentObj.find("select").append(html)
                    break;
                case "2":
                    var prevInfoObj = parentObj.find("input[type='checkbox']:eq(0)");
                    var name = prevInfoObj.attr("name");
                    $(".attr-value-model-checkbox input[type='checkbox']:eq(0)").attr("name", name);
                    $(".attr-value-model-checkbox input[type='checkbox']:eq(0)").addClass("custom-checkbox");
                    $(".attr-value-model-checkbox span").text(value);
                    html  = $(".attr-value-model-checkbox").html();
                    parentObj.append(html);
                    $(".attr-value-model-checkbox input[type='checkbox']:eq(0)").removeClass("custom-checkbox");
                    break;
                case "3":
                    var prevInfoObj = parentObj.find("input[type='radio']:eq(0)");
                    var name = prevInfoObj.attr("name");
                    $(".attr-value-model-checkbox input[type='radio']:eq(0)").attr("name", name);
                    $(".attr-value-model-checkbox input[type='radio']:eq(0)").addClass("custom-radio");
                    $(".attr-value-model-checkbox span").text(value);
                    html  = $(".attr-value-model-radio").html();
                    parentObj.append(html);
                    $(".attr-value-model-checkbox input[type='radio']:eq(0)").removeClass("custom-radio");
                    break;
            }

            initInterface();

        }

        function delAttrValue(obj){
            confirmMsg("do you sure delete!", function(){
                var parentObj = $(obj).parent().prev();
                var dataAttrType = parentObj.attr("data-attr-type");
                switch(dataAttrType){
                    case "1":
                        var valueObj = parentObj.find("select option:selected");
                        if(valueObj.attr("value") == "1" || valueObj.attr("data-product-id") != "0"){
                            valueObj.remove();
                        }else{
                            setTimeout(function(){
                                errorMsg("the value is not delete!");
                                return;
                            }, 500);

                        }
                        break;
                    case "2":
                        parentObj.find("input[type='checkbox']").each(function(){
                            if($(this).prop("checked")){
                                if($(this).val()=="-1" || $(this).attr("data-product-id") != "0"){
                                    $(this).parent().parent().remove();
                                }
                            }
                        })
                        break;
                    case "3" :
                        parentObj.find("input[type='radio']").each(function(){
                            if($(this).prop("checked")){
                                if($(this).val()=="-1" || $(this).attr("data-product-id") != "0"){
                                    $(this).parent().parent().remove();
                                }
                            }
                        })
                        break;
                }
            })

        }



        function addAttr(obj){
            curAttrObj = obj;
            $("#add-attr-dialog input[name='title']").val("");
            $("#add-attr-dialog select[name='attr_type']").val("0");
            $("#add-attr-dialog input[name='attr_value']").val("");
            $("#addAttrForm input[name='is_require']").val($(obj).attr("data-is-require"))
            $("#add-attr-dialog #default_value_wrapper").addClass("hidden");
            $("#add-attr-dialog").modal("show");
        }

        function onAddAttr(){
            var title = $("#add-attr-dialog input[name='title']").val();
            var attr_type = $("#add-attr-dialog select[name='attr_type']").val();
            var attr_value = $("#add-attr-dialog input[name='attr_value']").val();
            var is_require = $("#add-attr-dialog input[name='is_require']").val();
            var className = "attr_require";
            if(is_require == "0"){
                className ="attr_additional";
            }
            $("#add-attr-dialog").modal("hide");
            if(curAttrObj == null) return;
            var modelClassName = "";
            switch(attr_type){
                case "0":
                    modelClassName = ".attr-model-text";
                break;
                case "1":
                    modelClassName = ".attr-model-select";
                    $(modelClassName + " .product-attribute option").eq(0).text(attr_value);
                    break;
                case "2":
                    modelClassName = ".attr-model-checkbox";
                    $(modelClassName + "  span").text(attr_value);
                    break;
                case "3":
                    modelClassName = ".attr-model-radio";
                    $(modelClassName + "  span").text(attr_value);
                    break;
            }
            $(modelClassName + " .form-group").addClass(className);
            $(modelClassName + " .form-group").attr("data-attr-name", title);
            $(modelClassName + " #title").text(title);
            $(modelClassName + " .product-attribute").attr("name", title);
            $(modelClassName + " .product-attribute").parent().attr("data-attr-type", attr_type);
            $(modelClassName + " .product-attribute").parent().attr("data-attr-is-require", is_require);
            $(modelClassName + " input[type='checkbox']").addClass("custom-checkbox");
            $(modelClassName + " input[type='radio']").addClass("custom-radio");
            var html = $(modelClassName).html();
            $(curAttrObj).parent().parent().prev().append(html);
            $(modelClassName + " input[type='checkbox']").removeClass("custom-checkbox");
            $(modelClassName + " input[type='radio']").removeClass("custom-radio");
            initInterface();

        }

        function delAttr(obj){
            confirmMsg("do you sure delete!", function(){
                $(obj).parent().parent().remove();
            });
        }





    </script>
    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="blogcategory_delete_confirm_title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>
    <div class="modal fade" id="blogcategory_exists" tabindex="-2" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    @lang('blogcategory/message.blogcategory_have_blog')
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});
        $(document).on("click", ".blogcategory_exists", function () {

            var group_name = $(this).data('name');
            $(".modal-header h4").text( group_name+" blog category" );
        });
    </script>
@stop

