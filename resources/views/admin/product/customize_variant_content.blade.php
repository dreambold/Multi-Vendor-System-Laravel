<div class="form-group">
    <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Attribute</label>
            <div class="col-md-9">
                <select class = "form-control" name = "attributes" onchange = "customize_attr_change()">
                    @foreach($data as $item)
                    <option value = "{{$item['id']}}">{{$item['name']}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @foreach($data as $item)
        <div class="form-group customize-attr-value-wrapper" data-attr-id = "{{$item['id']}}" data-attr-name = "{{$item['name']}}" id = "customize-attr-value-wrapper{{$item['id']}}">
            <label class="col-md-3 control-label" for="name">Values</label>
            <div class="col-md-9 control-label text-left" >
                @foreach($item['list'] as $item1)
                    <button type="button" class="btn btn-labeled btn-default btn-icon-right right_lable btn_padding"  onclick = "customize_add_variant(this)">
                        <span class="label-text label-right" data-id = "{{$item1['id']}}">{{$item1['name']}}</span>
                        <span class="btn-label pull-right">
                            <i class="fa fa-arrow-right"></i>
                        </span>
                    </button>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
    <div class="col-md-6" id = "customize-variant-select-wrapper">
        @if(isset($data1))
        @for($i=0; $i<=2; $i++)
            <div class="form-group">
                <label class="col-md-3 control-label" for="name">Test</label>
                <div class="col-md-9">
                    @for($j=0; $j<=10; $j++)
                        <button type="button" class="btn btn-labeled btn-default btn-icon-right right_lable btn_padding">
                            <span class="label-text label-right">Cancel</span>
                            <span class="btn-label pull-right">
                                            <i class="fa fa-close" ></i>
                                        </span>

                        </button>
                    @endfor
                </div>
            </div>
        @endfor
        @endif
    </div>
</div>
<script>
    function customize_del_variant(obj){
        $(obj).remove();
    }

    function customize_add_variant(obj){
        var divObj = $(obj).parent().parent();
        var spanObj = $(obj).find("span:eq(0)");
        var attr_id = divObj.attr("data-attr-id");
        var attr_name = divObj.attr("data-attr-name");
        var val_id = spanObj.attr("data-id");
        var val_name = spanObj.text();
        var valueWrapper = null;
        var attr_id1, val_id1 ;
        $("#customize-variant-dialog #customize-variant-select-wrapper .customize-variant-attr-value-wrapper").each(function(){
            attr_id1 = $(this).attr("data-attr-id");
            if(attr_id == attr_id1){
                valueWrapper = $(this);
                return true;
            }
        });
        if(valueWrapper == null){
            $(".customize-variant-attr-value-wrapper-model .customize-variant-attr-value-wrapper").attr("data-attr-id", attr_id);
            $(".customize-variant-attr-value-wrapper-model .customize-variant-attr-value-wrapper").attr("data-attr-name", attr_name);
            $(".customize-variant-attr-value-wrapper-model .customize-variant-attr-value-wrapper label:eq(0)").text(attr_name);
            $(".customize-variant-attr-value-wrapper-model .customize-variant-attr-value-wrapper button").attr("data-id", val_id);
            $(".customize-variant-attr-value-wrapper-model .customize-variant-attr-value-wrapper button").attr("data-name", val_name);
            $(".customize-variant-attr-value-wrapper-model .customize-variant-attr-value-wrapper button span:eq(0)").html(val_name);
            var html  = $(".customize-variant-attr-value-wrapper-model").html();
            $("#customize-variant-dialog #customize-variant-select-wrapper").append(html);

        }else{
            var valueWrapper1 = null
            $("#customize-variant-dialog .customize-variant-value-wrapper-model button").each(function(){
                val_id1 = $(this).attr("data-id");
                if(val_id == val_id1){
                    valueWrapper1 = $(this);
                    return true;
                }
            });
            if(valueWrapper1 != null) return;
            $(".customize-variant-attr-value-wrapper-model .customize-variant-value-wrapper-model  button").attr("data-id", val_id);
            $(".customize-variant-attr-value-wrapper-model .customize-variant-value-wrapper-model  button").attr("data-name", val_name);
            $(".customize-variant-attr-value-wrapper-model .customize-variant-value-wrapper-model button span:eq(0)").html(val_name);
            var html = $(".customize-variant-attr-value-wrapper-model .customize-variant-value-wrapper-model").html();
            valueWrapper.find(".customize-variant-value-wrapper-model").append(html);
        }

    }

    function customize_attr_change(){
        var attr_id = $("#customize-variant-dialog select[name='attributes']").val();
        $(".customize-attr-value-wrapper").addClass("hidden");
        $("#customize-attr-value-wrapper"+attr_id).removeClass("hidden");
    }

    $(function(){
        customize_attr_change();
    })
</script>