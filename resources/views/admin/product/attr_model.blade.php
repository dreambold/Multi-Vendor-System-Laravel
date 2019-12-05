<div class = "hidden hidden attr-model-text">
    <div class="form-group " data-attr-id = "-1">
        <label class="col-md-3 control-label" for="message" id = "title"></label>
        <div class="col-md-6" data-attr-type = "" data-attr-is-require = "0">
            <input class = "form-control product-attribute" name = "" value = ""/>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-responsive btn-default" onclick = "addAttrValue(this)">Add</button>
            <button type="button" class="btn btn-responsive btn-default" onclick = "delAttrValue(this)">Delete</button>
            <button type="button" class="btn btn-responsive btn-default" onclick = "delAttr(this)">Del Attr</button>
        </div>
    </div>
</div>
<div class = "hidden attr-model-select">
    <div class="form-group " data-attr-id = "-1">
        <label class="col-md-3 control-label" for="message" id = "title"></label>
        <div class="col-md-6 attr-value-wrapper" data-attr-type = "" data-attr-is-require = "0">
            <select class = "form-control product-attribute" name = "">
                <option value = "-1"></option>
            </select>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-responsive btn-default" onclick = "addAttrValue(this)">Add</button>
            <button type="button" class="btn btn-responsive btn-default" onclick = "delAttrValue(this)">Delete</button>
            <button type="button" class="btn btn-responsive btn-default" onclick = "delAttr(this)">Del Attr</button>
        </div>
    </div>
</div>
<div class = "hidden attr-model-checkbox">
    <div class="form-group " data-attr-id = "-1">
        <label class="col-md-3 control-label" for="message" id = "title"></label>
        <div class="col-md-6 attr-value-wrapper" data-attr-type = "" data-attr-is-require = "0">
            <label class=" checkbox-inline">
                <input type="checkbox"  class = "product-attribute" name = "" value = "-1"  class="" >&nbsp;<span></span></label>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-responsive btn-default" onclick = "addAttrValue(this)">Add</button>
            <button type="button" class="btn btn-responsive btn-default" onclick = "delAttrValue(this)">Delete</button>
            <button type="button" class="btn btn-responsive btn-default" onclick = "delAttr(this)">Del Attr</button>
        </div>
    </div>
</div>
<div class = "hidden attr-model-radio">
    <div class="form-group" data-attr-id = "-1">
        <label class="col-md-3 control-label" for="message" id = "title"></label>
        <div class="col-md-6 attr-value-wrapper" data-attr-type = "" data-attr-is-require = "0">
            <label class=" radio-inline">
                <input type="radio" class = "product-attribute" name = "" value = "-1" class="" >&nbsp; <span></span></label>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-responsive btn-default" onclick = "addAttrValue(this)">Add</button>
            <button type="button" class="btn btn-responsive btn-default" onclick = "delAttrValue(this)">Delete</button>
            <button type="button" class="btn btn-responsive btn-default" onclick = "delAttr(this)">Del Attr</button>
        </div>
    </div>
</div>

<div class = "hidden attr-value-model-checkbox">
    <label class=" checkbox-inline">
        <input type="checkbox" class="product-attribute  " name="" value="-1">&nbsp;<span></span></label>
</div>

<div class = "hidden attr-value-model-radio">
    <label class=" radio-inline">
        <input type="radio" name = "" value = "-1" class=" product-attribute" >&nbsp; <span></span></label>
</div>
<div class = "hidden customize-variant-attr-value-wrapper-model">
<div class="form-group customize-variant-attr-value-wrapper" data-attr-id = "" data-attr-name = "">
    <label class="col-md-3 control-label" for="name">Test</label>
    <div class="col-md-9 customize-variant-value-wrapper-model" >
            <button type="button" class="btn btn-labeled btn-default btn-icon-right right_lable btn_padding" data-id = "" data-name="" onclick = "customize_del_variant(this);">
                <span class="label-text label-right">Cancel</span>
                <span class="btn-label pull-right">
                    <i class="fa fa-close" ></i>
                </span>
            </button>
    </div>
</div>
</div>