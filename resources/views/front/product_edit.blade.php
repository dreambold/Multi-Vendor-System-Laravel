@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Sell
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sell.css') }}">
    <link href="{{ asset('assets/vendors/summernote/summernote.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/pages/editor.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/pages/buttons.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/pages/advbuttons.css') }}" rel="stylesheet" type="text/css"/>
@stop
{{-- breadcrumb --}}
@section('top')
@stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container sngl ds3 edp-crnew" id="sell-page-wrapper" >
        <div class="edp ">
            <div class="crnew-hd">
                <h1 class="fl-none">Create your listing</h1>
                <div class="cpef-div">
                    <a role="button" aria-label="Customize" href="javascript:;"  class ="hidden" id="cust_link">Customize</a>
                </div>
            </div>
            <div id="editpane_cnta">
                <form id="editpane_form" method="post" enctype="multipart/form-data">
                    <input type="text" class="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" class="hidden" name="action" value="{{$action}}" id="action">
                    @if($action == "update")
                        <input type="text" class="hidden" name="id" value="{{$product['id']}}">
                    @else
                        <input type="text" class="hidden" name="id" value = "0">
                    @endif
                    <div class="inner-cnt">
                        <div class="fp-lw" id="editpaneSect_FindProduct" sec="1">
                            <div id="fp_link_wrap" class = "hidden">
                                <a href="javascript:void(0);" class="fp-new">
                                    <i fn="findProd"></i>Find product</a>
                            </div>
                            <div style="clear: both"></div>
                        </div>
                        <div style="clear: both"></div>
                        <div class="hgh">
                            <h2 class="fl-none sec-t">Listing details</h2>
                            <div>
                                <div class="def min" id="editpaneSect_Title" sec="1">
                                    <h2 class="reqd pad-t8"><label for="editpane_title">Title</label></h2>
                                    <div id="editpane_titlewrap">
                                        @if($action=='update')
                                            <input type="text"  value="{{$product['title']}}" name="title" class="require" msg="title">
                                        @else
                                            <input type="text"  name="title" class="require" msg="title">
                                        @endif
                                        <div class="bear-clear ar">
                                            <div class="fl">
                                                <div>
                                                    @if($action == 'update')
                                                        @if($product['is_search'] == 1)
                                                        <input type="checkbox" id="bold" name="is_search" checked>
                                                        @else
                                                            <input type="checkbox" id="bold" name="is_search" onclick="onCheckSearch(this)">
                                                        @endif
                                                    @else
                                                        <input type="checkbox" id="bold" name="is_search" onclick="onCheckSearch(this)">
                                                    @endif
                                                    <label for="bold">Stand out with a bold title in search results
                                                        <span id="editpane_boldFee" class="fee-amt">
                                                            <span class="fee-amt">($3.00)</span>
                                                            <span class="app-fee infoLnk">(fees may apply)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <span id="titCount" class="cc"><b>75</b>character(s) left</span>
                                        </div>
                                        <div id="autofillMsg" class="aex-tt"></div>
                                    </div>
                                </div>
                                <div class="def min" id="editpaneSect_Subtitle" sec="1">
                                    <h2 class="pad-t8"><label for="editpane_subtitle">Subtitle</label>
                                        <span id="editpane_sttFee" class="fee-amt">
                                            <span class="fee-amt">($1.00)</span>
                                            <span class="app-fee infoLnk">(fees may apply)</span>
                                        </span>
                                    </h2>
                                    <div>
                                        @if($action=='update')
                                            <input type="text" name="subtitle" value="{{$product['subtitle']}}" class="require" msg="subtitle">
                                        @else
                                            <input type="text" value="" name="subtitle" class="require" msg="subtitle">
                                        @endif
                                        <div class="bear-clear ar"><span id="subtitCount" class="cc"><b>55</b>character(s) left</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="def min" id="editpaneSect_condition" sec="1">
                                    <h2 class="pad-t8">
                                        <label>Condition</label>
                                    </h2>
                                    <div>
                                        @if($action=='update')
                                        <select name="condition">
                                            <option value="0"
                                                    @if($product['condition'] == 0)
                                                        selected
                                                    @endif></option>
                                            <option value="1"
                                                    @if($product['condition'] == 1)
                                                    selected
                                                    @endif>new</option>
                                            <option value="2"
                                                    @if($product['condition'] == 2)
                                                    selected
                                                    @endif>unused</option>
                                        </select>
                                        @else
                                            <select name="condition">
                                                <option value="0"></option>
                                                <option value="1">new</option>
                                                <option value="2">unused</option>
                                            </select>
                                        @endif
                                        <div class="bear-clear ar"><span id="subtitCount" class="cc"><b>55</b>character(s) left</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="def min" id="editpaneSect_price" sec="1">
                                    <h2 class="pad-t8">
                                        <label>Price</label>
                                    </h2>
                                    <div>
                                        @if($action=='update')
                                            <input type="text" value="{{$product['price']}}" name="price" class="require checkfield" msg="price" chkField="number">
                                        @else
                                            <input type="text" value="" name="price" class="require checkfield" msg="price" chkField="number">
                                        @endif
                                        <div class="bear-clear ar"><span id="subtitCount" class="cc"><b>55</b>character(s) left</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="def min" id="editpaneSect_retail_price" sec="1">
                                    <h2 class="pad-t8">
                                        <label>Retail Price</label>
                                    </h2>
                                    <div>
                                        @if($action=='update')
                                            <input type="text" value="{{$product['retail_price']}}" name="retail_price" class="require checkfield" msg="retail_price" chkField="number">
                                        @else
                                            <input type="text" value="" name="retail_price" class="require checkfield" msg="retail_price" chkField="number">
                                        @endif
                                        <div class="bear-clear ar"><span id="subtitCount" class="cc"><b>55</b>character(s) left</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="def min" id="editpaneSect_quantity" sec="1">
                                    <h2 class="pad-t8">
                                        <label>Quantity</label>
                                    </h2>
                                    <div>
                                        @if($action == 'update')
                                            <input type="text" value="{{$product['quantity']}}" name="quantity" class="require" msg="quantity" chkField ="number">
                                        @else
                                            <input type="text" value="" name="quantity" class="require checkfield" msg="quantity" chkField ="number">
                                        @endif
                                        <div class="bear-clear ar"><span id="subtitCount" class="cc"><b>55</b>character(s) left</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="def min" id="editpaneSect_quantity" sec="1">
                                    <h2 class="pad-t8">
                                        <label>Description</label>
                                    </h2>
                                    <div>
                                        <div id = "description">{!! $description !!}</div>
                                    </div>
                                </div>
                                <div id="editpaneSect_Variation" sec="1" class="edv def hidden">
                                    <div id="editpane_msku" target="1" class="sec-msk msk-var" style="padding-bottom:20px;">
                                        <div>
                                            <h2><strong>Variations</strong></h2>
                                            <div>
                                                <div class="info-small">
                                                    <b class="icn"></b>
                                                    <div class="icn-mrg-sm">We don't support variations for
                                                        auction-style listings. To use variations, change the <a
                                                                href="javascript:void(0);">Format</a>
                                                        to fixed price.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="def" id="editpaneSect_Photo" sec="1">
                                    <div id="editpane_photos">
                                        <h2 class="reqd"><strong>Photos</strong><span id="uploader_counter">(0)</span></h2>
                                        <div id="editpane_pictureUrl">
                                            <div class="row ml-0 mr-0">
                                                <span>We recommend adding 2 more photos</span>
                                                <span><a role="button" tabindex="0" kp="1" class="deleteAll" title="Delete all" onclick = "allDelImg()">Delete all</a></span>
                                            </div>
                                            <div class="row ml-0 mr-0">
                                                <div class="border-rect sell-photo-wrapper" id="sell-photo-wrapper-0">
                                                    <i class="ph" style = "@if($imgList[0] != '') display:none @endif"></i>
                                                    <span class="img-over-layer" style = "@if($imgList[0] != '') display:none @endif">
                                                        <input type="button" class="btn btn-default color-blue" value="Add Photos" onclick = "onClickFilgDlg('#mainProductImg0');">
                                                        <div class="font-12 color-black">Add up 12 photos. We don't allow photos with extra borders,text or artwork</div>
                                                    </span>
                                                    <img id = "mainProductImg0_img" data-index-id = "0" class = "productImg subProductImg sell-photo-img" style = "width:100%;@if($imgList[0] != '') display:inline-block @endif" @if($imgList[0] != '') src = "{{correctImgPath1($imgList[0])}}" @endif/>
                                                    <input type = "hidden" class = "productImgData" id = "mainProductImg0_val" name ="mainProductImg0_val" value = "@if($imgList[0] != ''){{$imgList[0]}}  @endif" />
                                                </div>
                                                <div class="sell-photo-wrapper sub-photo-wrapper">
                                                    <?php $k =0; ?>
                                                    @for($i = 1; $i < 13; $i++)
                                                        <div class="col-xs-4 thumnail-wrapper" id="sell-photo-wrapper-{{$i}}">
                                                            <i class="ph" style = "@if($imgList[$i] != '') display:none @endif"></i>

                                                            <div class="img-over-layer" style = "@if($imgList[$i] != '') display:none @elseif($imgList[$i] == '' && $k ==0)  display:inline-block; @endif">
                                                                <a class="color-blue font-12" href="javascript:void(0);" onclick = "onClickFilgDlg('#mainProductImg{{$i}}');">Add photos</a>
                                                            </div>
                                                            <?php if($imgList[$i] == '' && $k == 0 ){?>
                                                            <?php $k = 1;}?>
                                                            <img id = "mainProductImg{{$i}}_img" data-index-id = "{{$i}}" class = "productImg subProductImg sell-photo-img" style = "width:100%;@if($imgList[$i] != '') display:inline-block @endif" @if($imgList[$i] != '') src = "{{correctImgPath1($imgList[$i])}}" @endif/>
                                                            <input type = "hidden" class = "productImgData" id = "mainProductImg{{$i}}_val" name ="mainProductImg{{$i}}_val" value = "@if($imgList[$i] != ''){{$imgList[$i]}}  @endif" />
                                                        </div>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="editpaneSect_Category" sec="1" class="def">
                                    @if($action == 'update')
                                        <input type="text" class="hidden" name="parent_ids" id="parent_categories" value="{{$parentCategory}}">
                                    @else
                                        <input type="text" class="hidden" name="parent_ids" id="parent_categories" value="">
                                    @endif
                                    @if($action == 'update')
                                        <input type="text" class="hidden require" name="category_id" id="product-cateogry-id" value="{{$product['category_id']}}" msg="category">
                                    @else
                                        <input type="text" class="hidden require" name="category_id" id="product-cateogry-id" value="" msg="category">
                                    @endif
                                    <div id="editpane_category" target="1" class="sec-msk msk-cat">
                                        <div class="eic-wrap">
                                            <div>
                                                <h2 class="reqd eic-head02"><strong>Category</strong></h2>
                                                <div class="mr255 browse">
                                                    <div id="labelcat1_par" class="eic-sel eic-chg">
                                                        <div class="clbl"><span id="category-path-1" tabindex="0"
                                                                                aria-selected="true" class="pcat-label"></span>
                                                            <span class="eic-change">
                                                                <a id="category-link-1" href="javascript:void(0);" onclick="onChangeCategory(1);" start="1">
                                                                    <span class="add">Add category</span><span class="chg" fn="chgcat">Change category</span>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="category-box mt-20" id="category-box-1">
                                                <div class="row ml-0 mr-0">
                                                    <label class="font-12" id="category-path"></label>
                                                    <span class="pull-right font-24 cursor" onclick="closeCategoryWrapper(1)" style="font-weight:100;">×</span>
                                                </div>
                                                <div class="row ml-0 mr-0" id="category-wrapper-1">
                                                </div>
                                            </div>

                                            <div class="mr-t25" style="display: none;">
                                                <h2 class="eic-head02">
                                                    <strong>Second category</strong><span class="ml2"><span class="app-fee">(fees may apply)</span></span>
                                                </h2>
                                                <div class="mr255">
                                                    <div>
                                                        <div id="l_cat2"></div>
                                                        <div class="cell-lblLftFldDiv"><span id="category-path-2"></span><span class="eic-inbl">
                                                            <ul>
                                                                <li>
                                                                    <span id="v4-4cat2" initialtext="Select second category" tabindex="0" class="eic-dsp-none"></span>
                                                                    <label class="font-12" id="category-path-2"></label>
                                                                    <a id="category-link-2" href="javascript:void(0);" onclick="onChangeCategory(2);" start="1">Add a second category</a>
                                                                </li>
                                                            </ul></span>
                                                        </div>
                                                    </div>
                                                    <div class="clr"></div>
                                                </div>
                                                <div class="clr"></div>
                                            </div>
                                            <div class="category-box mt-20" id="category-box-2">
                                                <div class="row ml-0 mr-0">
                                                    <span class="pull-right font-24 cursor" onclick="closeCategoryWrapper(2)" style="font-weight:100;">×</span>
                                                </div>
                                                <div class="row ml-0 mr-0" id="category-wrapper-2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="def" id="editpaneSect_ItemSpecific" sec="1">
                                    <h2><strong>Item specifics</strong></h2>
                                    <div>
                                        <div>
                                            <div id="editpane_itmspc" is="1" target="1" class="sec-msk msk-is">
                                                <fieldset>
                                                    <legend class="hdn">Item specifics</legend>
                                                    <div>
                                                        <div id="v4-7itmSpcMain"
                                                             class="eib-wrap eisi-wrap2 eib-mul-col"><input
                                                                    type="hidden" id="editpane_itmspc_hidden"
                                                                    value="true">
                                                            <div id="item-spec-wrapper" class="itmspc-cntDiv is-gh">
                                                                @if($action=="update")
                                                                    @include("front/spec_wrapper")
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clr"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="act-bar al hidden" id="actionbar">
                        <div class="tof">
                            <h2 class="bhw"><strong>Fees</strong></h2>
                            <div>
                                <a href="javascript:void(0);">$0.00</a>
                            </div>
                        </div>
                    </div>
                    <div class="act-bar al" style = "background:white; padding:10px;">
                        <div class="tof" style = "padding-left:10px;">
                            <h2 class="bhw"><strong>Variants</strong></h2>
                            <button class="btn btn-responsive btn-default" onclick="customizeVariant()" type="button">Customize</button>
                        </div>
                        <div class="table-scrollable" id = "variant-wrapper">
                        </div>
                    </div>
                    <div class="act-dis hidden">
                        <span>If your item sells, we charge a final value fee based on a percentage of the total cost to the buyer, less any sales tax.</span>
                        <span>Your listing may not be immediately searchable by keyword or category for several hours (up to 24 hours in some circumstances), so eBay can't guarantee exact listing durations.
                            <a href="javascript:void(0);" target="_blank">Learn more</a>
                        </span>
                        <span>By clicking the <b>List item</b> button, you agree to pay fees above, accept the listing conditions above, and assume full responsibility for the content of the listing and item offered.</span>
                    </div>
                    <div class = "mt-20">
                        <div class="large-btn btn-m-r20 btn-wr" id="actionbar">
                            <input type="button" value="List item" class="pbtn" onclick = "goDraft();"/>
                            <button type="button"  class="sbtn hidden" style = "display:none !important;">Preview</button>
                            <input type="button" value="Save as draft" class="sbtn" onclick="saveProduct();"/>
                            <a href="javascript:void(0);" class = "hidden">Cancel</a>
                            <input type = "hidden" id = "product_state" value = "@if(isset($product['state'])){{ $product['state']}}@else 0 @endif"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include("front/product/customize_variant_dlg")
    @include("front/product/attr_model")
    @include("dlg/crop_dlg")
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script  src="{{ asset('assets/vendors/summernote/summernote.min.js') }}"  type="text/javascript"></script>
<script>
    var isCategoryDisplayed = false;
    var descriptionObj ;

    $(document).ready(function(){
        var action = $("#action").val();
        var parent_categories = $("#parent_categories").val();
        descriptionObj = $("#description").summernote({
            fontNames: ['Lato', 'Arial', 'Courier New']
        });
        if(action == 'update' && parent_categories != ""){ // display category tree
            var categories = parent_categories.split(",");
            var param = new Object();
            param._token = _token;
            param.no = 1; // first category, you can add second category
            param.parent = 0;
            $.post("{{url("front/sell/ajaxCategoryTree")}}", param, function(detail_wrapper){
                $("#category-wrapper-1").append(detail_wrapper);
                $("#category-link-1").attr("start", "0");
                displayCategoryTree(categories, 0);
            }, "html");
        }

        getVariantList();
    });

    function saveProduct(){
        if(checkData("#editpane_form") == false){
            return false;
        }
        var param = $("#editpane_form").serialize();

        var variantList = getProductVariantArr();
        if(!variantList.checked){
            errorMsg("The product variant is not proper");
            return;
        }






        /*datas.append('_token', _token);
        param = convertSerializeStrToObj(param);
        datas.append('param', param);
        console.log(param);
        datas.append('variantList', JSON.stringify(variantList));*/


        var param = $("#editpane_form").serialize();
        param+="&"+"variantList="+JSON.stringify(variantList.list);
        param+="&"+"description="+$("#description").summernote("code");
        $.post("{{url("front/sell/ajaxSaveSellDetail")}}", param, function(data){
            if(data.status == "1"){
                successMsg("The product is saved successfully.", function(){
                    goDraft();
                });
            }
        }, "json");


        return;
        var url = "{{url("/front/sell/ajaxSaveSellDetail")}}";
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
                        goDraft();
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
    }

    function getProductVariantArr(){
        var checked = true;
        var variantArr = new Array();
        var variant ;
        var sku, quantity, price, varient_val_ids, val_ids_first, val_ids_second;
        $("#variant-wrapper tbody tr").each(function(){
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

    function allDelImg(){
        $(".sell-photo-wrapper .sell-photo-img").css("display", "none");
        $(".sell-photo-wrapper .img-over-layer").css("display", "none");
        $(".sell-photo-wrapper .ph").css("display", "inline-block");
        $("#sell-photo-wrapper-0 .img-over-layer").css("display", "inline-block");
        $(".productImgData").each(function(){
            $(this).val("");
        })


    }
    function nextShowInsertImgBtn(obj){
        var parent = $(obj).parent();
        parent.find(".img-over-layer").css("display", "none");
        parent.find(".ph").css("display", "none");
        $(obj).show();
        var id = $(obj).attr("data-index-id");
        var next_id = id * 1 + 1;
        $("#sell-photo-wrapper-" + next_id + " .img-over-layer").css("display", "inline-block");
    }

    $(".img-file").on('change', function(e){
        var id = $(this).attr("target");
        var next_id = id * 1 + 1;
        var src = $(this)[0].files[0];
        var FR= new FileReader();
        FR.onload = function(e) {
            $("#thumnail-img-" + id).attr("src", e.target.result);
            $("#sell-photo-wrapper-" + id + " .img-over-layer").css("display", "none");
            $("#sell-photo-wrapper-" + id + " .ph").css("display", "none");
            $("#thumnail-img-" + id).show();
            $("#sell-photo-wrapper-" + next_id + " .img-over-layer").css("display", "inline-block");
        };
        if(src != undefined)
            FR.readAsDataURL(src);
    });

    function customizeVariant(){
        getVariantAttrs();
        if(curVariantAttrs.length ==0 || curVariantAttrs.length > 3 ){
            errorMsg("Do you can not Variant , Because Attribute is not property");
            return;
        }
        var param = new Object();
        param._token = _token;
        param.data = JSON.stringify(curVariantAttrs);
        $.post("{{url("front/product/customize_variant_content")}}", param , function(html){
            $("#customize-variant-dialog #content").html(html);
            $("#customize-variant-dialog").modal("show");
        })

    }

    var curVariantAttrs = null;
    function getVariantAttrs(){
        curVariantAttrs = new Array();
        var eleItem, eleValList, eleValItem;
        $(".attr-variant-value-wrapper").each(function(){
            eleItem = new Object();
            eleItem.id = $(this).attr("data-attr-id");
            eleItem.name = $(this).attr("data-attr-name");
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

        });
        return curVariantAttrs;
    }

    function getVariantList(){
        var url = "{{url("front/product/ajaxGetProductVariantList")}}";
        var param = new Object();
        param._token = _token;
        var id = $("input[name='id']").val();
        param.id = id;
        $.post(url, param, function(html){
            $("#variant-wrapper").html(html);
        })

    }

    function deleteProductSku(obj){
        $(obj).parent().parent().remove();
    }

    function goDraft(){
        var url = "{{url("front/my/seller/activity_selling_drafts")}}";
        var state = $("#product_state").val();
        state = state.trim();
        if(state == "1"){
            url = "{{url("front/my/seller/activity_selling_product")}}";
        }
        window.location.href = url;
    }

    function onChangeCategory(no){
        var param = new Object();
        param._token = _token;
        param.no = no;
        param.parent = 0;
        var isStart = $("#category-link-" + no).attr("start");
        if(isStart == "1"){
            $.post("{{url("front/sell/ajaxCategoryTree")}}", param, function(detail_wrapper){
                $("#category-wrapper-" + no).append(detail_wrapper);
                $("#category-link-" + no).attr("start", "0");
                $("#category-box-" + no).slideDown("slow");
            }, "html");
        }else{
            $("#category-box-" + no).slideDown("slow");
        }
    }

    function closeCategoryWrapper(no){
        $("#category-box-" + no).slideUp();   
    }

    function displayCategoryTree(categories, no){
        if(categories.length > no){
            $("#category-1-" + categories[no]).trigger("click");
        }else if(categories.length == no){
            var last_id = $("#product-cateogry-id").val();
            $("#category-1-" + last_id).trigger('click');
        }
    }

    function onSelectCategory(obj){
        var param = new Object();
        var no = $(obj).attr("no");

        var path = "<span>" + $(obj).html() + "&nbsp" + "</span>";
        param.no = no;
        param._token = _token;
        param.parent = $(obj).attr("parent");
        param.depth = $(obj).attr("depth");
        $(".category-detail-wrapper-" + no).each(function(){
            if($(this).attr("depth") * 1 > param.depth){
                $(this).remove();
            }
        });
        if($(obj).attr("leaved") != "1"){
            $.post("{{url("front/sell/ajaxCategoryTree")}}", param, function(detail_wrapper){
                $("#category-wrapper-" + no).append(detail_wrapper);
                var action = $("#action").val();
                if(action == "update" && isCategoryDisplayed == false){
                    var parent_categories = $("#parent_categories").val();
                    var categories = parent_categories.split(",");
                    displayCategoryTree(categories, param.depth);
                }
            }, "html");
        }else{
            var action = $("#action").val();
            if(action == "update" && isCategoryDisplayed == false){
                isCategoryDisplayed = true;
            }else{
                param.category_id = $(obj).attr("category_id");
                $("#product-cateogry-id").attr("value", param.category_id);
                $.post("{{url("front/sell/ajaxCategoryAttr")}}", param, function(spec_wrapper){
                    $("#item-spec-wrapper").html(spec_wrapper);
                }, "html");
            }
        }

        $("#category-detail-wrapper-" + no + "-" + param.depth + " .category-wrapper >li").removeClass("active");
        $(obj).addClass("active");

        // add path
        var path = "";
        for(var i = 1; i <= param.depth; i++){
            path += $("#category-detail-wrapper-" + no + "-" + i + " .category-wrapper >li.active").html() + "&nbsp";
        }
        path = "<span>" + path + "</span>";
        $("#category-path-" + no).html(path);
    }




    function onCheckSearch(obj){
        if($(obj).prop("checked")){
            $(obj).val(1);
        }else{
            $(obj).val(0);
        }
    }





</script>

@stop
