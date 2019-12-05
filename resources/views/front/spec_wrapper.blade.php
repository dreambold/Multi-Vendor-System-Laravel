<div class="titDiv">Required</div>
<div class="subTxt">Buyers need these item specifics about your item</div>
@if($action == 'insert')
    <?php $no = 0;?>
    @foreach($requireAttrList as $attr)
    <input type="text" class="hidden" name="attr_id[{{$no}}]" value="{{$attr['id']}}">
    <div class="eisi-padBtm">
        <div>
            <div>
                <label>
                    <div class="eib-selTgLbl reqd">{{$attr['title']}}</div>
                </label>
            </div>

            @if($attr['attr_type'] == 2)
                <table class="eib-bndlTbl attr-variant-value-wrapper " data-attr-id = "{{$attr['id']}}" data-attr-name = "{{$attr['title']}}">
                    <tbody>
                    @for($i = 0; $i < count($attr['val']); $i = $i + 3)
                        <tr>
                            @if(isset($attr['val'][$i]) && count($attr['val'][$i]) > 0)
                                <td>
                                    <input type="checkbox" pv="false" value1 = "{{$attr['val'][$i]['val']}}" value="{{$attr['val'][$i]['id']}}" name="val_ids[{{$attr['id']}}][{{$i}}]">
                                    <label>{{$attr['val'][$i]['val']}}</label>
                                </td>
                            @endif
                            @if(isset($attr['val'][$i+1]) && count($attr['val'][$i + 1]) > 0)
                                <td>
                                    <input type="checkbox" pv="false" value1 = "{{$attr['val'][$i]['val']}}" value="{{$attr['val'][$i + 1]['id']}}" name="val_ids[{{$attr['id']}}][{{$i + 1}}]">
                                    <label>{{$attr['val'][$i+1]['val']}}</label>
                                </td>
                            @endif
                            @if(isset($attr['val'][$i+2]) && count($attr['val'][$i + 2]) > 0)
                                <td>
                                    <input type="checkbox" pv="false" value1 = "{{$attr['val'][$i]['val']}}" value="{{$attr['val'][$i + 2]['id']}}" name="val_ids[{{$attr['id']}}][{{$i + 2}}]">
                                    <label>{{$attr['val'][$i+2]['val']}}</label>
                                </td>
                            @endif
                        </tr>
                    @endfor
                    </tbody>
                </table>
            @elseif($attr['attr_type'] == 3)
                <table class="eib-bndlTbl">
                    <tbody>
                        @for($i = 0; $i < count($attr['val']); $i = $i + 3)
                        <tr>
                            @if(isset($attr['val'][$i]) && count($attr['val'][$i]) > 0)
                            <td>
                                <input type="radio" pv="false" value="{{$attr['val'][$i]['id']}}" name="val_ids[{{$attr['id']}}]" class="require" msg="{{$attr['title']}}">
                                <label>{{$attr['val'][$i]['val']}}</label>
                            </td>
                            @endif
                            @if(isset($attr['val'][$i+1]) && count($attr['val'][$i + 1]) > 0)
                            <td>
                                <input type="radio" pv="false" value="{{$attr['val'][$i + 1]['id']}}" name="val_ids[{{$attr['id']}}]" class="require" msg="{{$attr['title']}}">
                                <label>{{$attr['val'][$i+1]['val']}}</label>
                            </td>
                            @endif
                            @if(isset($attr['val'][$i+2]) && count($attr['val'][$i + 2]) > 0)
                            <td>
                                <input type="radio" pv="false" value="{{$attr['val'][$i + 2]['id']}}" name="val_ids[{{$attr['id']}}]" class="require" msg="{{$attr['title']}}">
                                <label>{{$attr['val'][$i+2]['val']}}</label>
                            </td>
                            @endif
                        </tr>
                        @endfor
                    </tbody>
                </table>
            @endif
            @if($attr['attr_type'] == 0)
                <div class="cell-lblTopFldDiv">
                    <div>
                        <span class="opnd-Span">
                            <input type="text" class="opnd-vl require" size="21" maxlength="50" gname="Brand" aria-required="true" vld="1" value="" name="text_val[{{$attr['id']}}]" msg="{{$attr['title']}}">
                            <div class="clr"></div>
                        </span>
                    </div>
                </div>
            @elseif($attr['attr_type'] == 1)
                <div class="eist-slt115 combo">
                    <div class="cell-lblLftFldDiv" style="width:90%;">
                        <select name="val_ids[{{$attr['id']}}]" class="require" msg="{{$attr['title']}}">
                            @foreach($attr['val'] as $val)
                                @if(count($val) > 0)
                                    <option value="{{$val['id']}}">{{$val['val']}}</option>
                                @endif
                            @endforeach
                        </select>
                        <div class="clr"></div>
                    </div>
                </div>
            @endif
        </div>
        <div class="eib-clr"></div>

        <div class="eib-pd" id="p_st_Brand">Frequent:
            <span id="pv_st_Brand" addp="1">
                <a href="javascript:;">Unbranded</a>,
                <a href="javascript:;">Casio</a>,
                <a href="javascript:;">Seiko</a>
            </span>
        </div>
        <div class="eisi-clr"></div>
    </div>
    <?php $no++;?>
    @endforeach


    <div class="hrLine"></div>
    <div class="titDiv">Additional</div>
    <div class="subTxt">Buyers may also be interested in these item specifics</div>
    <?php $no = count($requireAttrList); ?>
    @foreach($additionalAttrList as $attr)
    <input type="text" class="hidden" name="attr_id[{{$no}}]" value="{{$attr['id']}}">
    <div class="eisi-padBtm">
        <div>
            <div>
                <label>
                    <div class="eib-selTgLbl">{{$attr['title']}}</div>
                </label>
            </div>

            @if($attr['attr_type'] == 2)
                <table class="eib-bndlTbl " >
                    <tbody>
                        @for($i = 0; $i < count($attr['val']); $i = $i + 3)
                        <tr>
                            @if(isset($attr['val'][$i]) && count($attr['val'][$i]) > 0)
                            <td>
                                <input type="checkbox" pv="false" value1 = "{{$attr['val'][$i]['val']}}" value="{{$attr['val'][$i]['id']}}" name="val_ids[{{$attr['id']}}][{{$i}}]">
                                <label>{{$attr['val'][$i]['val']}}</label>
                            </td>
                            @endif
                            @if(isset($attr['val'][$i + 1]) && count($attr['val'][$i + 1]) > 0)
                            <td>
                                <input type="checkbox" pv="false" value1 = "{{$attr['val'][$i]['val']}}" value="{{$attr['val'][$i + 1]['id']}}" name="val_ids[{{$attr['id']}}][{{$i + 1}}]">
                                <label>{{$attr['val'][$i+1]['val']}}</label>
                            </td>
                            @endif
                            @if(isset($attr['val'][$i + 2]) && count($attr['val'][$i + 2]) > 0)
                            <td>
                                <input type="checkbox" pv="false" value1 = "{{$attr['val'][$i]['val']}}" value="{{$attr['val'][$i + 2]['id']}}" name="val_ids[{{$attr['id']}}][{{$i + 2}}]">
                                <label>{{$attr['val'][$i+2]['val']}}</label>
                            </td>
                            @endif
                        </tr>
                        @endfor
                    </tbody>
                </table>
            @elseif($attr['attr_type'] == 3)
                <table class="eib-bndlTbl">
                    <tbody>
                        @for($i = 0; $i < count($attr['val']); $i = $i + 3)
                        <tr>
                            @if(isset($attr['val'][$i]) && count($attr['val'][$i]) > 0)
                            <td>
                                <input type="radio" pv="false" value="{{$attr['val'][$i]['id']}}" name="val_ids[{{$attr['id']}}]">
                                <label>{{$attr['val'][$i]['val']}}</label>
                            </td>
                            @endif
                            @if(isset($attr['val'][$i + 1]) && count($attr['val'][$i + 1]) > 0)
                            <td>
                                <input type="radio" pv="false" value="{{$attr['val'][$i + 1]['id']}}" name="val_ids[{{$attr['id']}}]">
                                <label>{{$attr['val'][$i+1]['val']}}</label>
                            </td>
                            @endif
                            @if(isset($attr['val'][$i + 2]) && count($attr['val'][$i + 2]) > 0)
                            <td>
                                <input type="radio" pv="false" value="{{$attr['val'][$i + 2]['id']}}" name="val_ids[{{$attr['id']}}]">
                                <label>{{$attr['val'][$i+2]['val']}}</label>
                            </td>
                            @endif
                        </tr>
                        @endfor
                    </tbody>
                </table>
            @endif
            @if($attr['attr_type'] == 0)
                <div class="cell-lblTopFldDiv">
                    <div>
                        <span class="opnd-Span">
                            <input type="text" class="opnd-vl" size="21" maxlength="50" gname="Brand" aria-required="true" vld="1" value="" name="text_val[{{$attr['id']}}]">
                            <div class="clr"></div>
                        </span>
                    </div>
                </div>
            @elseif($attr['attr_type'] == 1)
                <div class="eist-slt115 combo">
                    <div class="cell-lblLftFldDiv" style="width:90%;">
                        <select name="val_ids[{{$attr['id']}}]">
                            @if(isset($attr['val']))
                                @foreach($attr['val'] as $val)
                                    @if(count($val) > 0)
                                        <option value="{{$val['id']}}">{{$val['val']}}</option>
                                    @endif
                                @endforeach
                            @endif
                        </select>
                        <div class="clr"></div>
                    </div>
                </div>
            @endif
        </div>
        <div class="eib-clr"></div>

        <div class="eib-pd" id="p_st_Brand">Frequent:
            <span id="pv_st_Brand" addp="1">
                <a href="javascript:;">Unbranded</a>,
                <a href="javascript:;">Casio</a>,
                <a href="javascript:;">Seiko</a>
            </span>
        </div>
        <div class="eisi-clr"></div>
    </div>
    <?php $no++;?>
@endforeach
@else
    <?php $no = 0;?>
    @foreach($requireAttrList as $attr)
        <?php foreach($productAttrValList as $productAttr){
            if($attr['id'] == $productAttr['attr_id']){
                $requireProductAttr = $productAttr;
                $requireProductAttr['check_values'] = @explode(",", $requireProductAttr['val_ids']);
                break;
            }
        }?>
        <input type="text" class="hidden" name="attr_id[{{$no}}]" value="{{$attr['id']}}">
        <div class="eisi-padBtm">
            <div>
                <div>
                    <label>
                        <div class="eib-selTgLbl reqd">{{$attr['title']}}</div>
                    </label>
                </div>

                @if($attr['attr_type'] == 2)
                    <table class="eib-bndlTbl attr-variant-value-wrapper" data-attr-id = "{{$attr['id']}}" data-attr-name = "{{$attr['title']}}">
                        <tbody>
                        @for($i = 0; $i < count($attr['val']); $i = $i + 3)
                            <tr>
                                @if(isset($attr['val'][$i]) && count($attr['val'][$i]) > 0)
                                    <td>
                                        @if(isset($requireProductAttr))
                                        <input type="checkbox" pv="false" value1 = "{{$attr['val'][$i]['val']}}" value="{{$attr['val'][$i]['id']}}" name="val_ids[{{$attr['id']}}][{{$i}}]"
                                                @foreach($requireProductAttr['check_values'] as $checked_value)
                                                    @if($checked_value == $attr['val'][$i]['id'])
                                                        checked
                                                    @endif
                                                @endforeach>
                                        @else
                                            <input type="checkbox" pv="false" value1 = "{{$attr['val'][$i]['val']}}" value="{{$attr['val'][$i]['id']}}" name="val_ids[{{$attr['id']}}][{{$i}}]">
                                        @endif
                                        <label>{{$attr['val'][$i]['val']}}</label>
                                    </td>
                                @endif
                                @if(isset($attr['val'][$i+1]) && count($attr['val'][$i + 1]) > 0)
                                    <td>
@if(isset($requireProductAttr))
                                        <input type="checkbox" pv="false" value1 = "{{$attr['val'][$i+1]['val']}}"  value="{{$attr['val'][$i + 1]['id']}}" name="val_ids[{{$attr['id']}}][{{$i + 1}}]"
                                               @foreach($requireProductAttr['check_values'] as $checked_value)
                                                   @if($checked_value == $attr['val'][$i + 1]['id'])
                                                        checked
                                                    @endif
                                                @endforeach>
                                        @else
                                            <input type="checkbox" pv="false" value1 = "{{$attr['val'][$i+1]['val']}}" value="{{$attr['val'][$i + 1]['id']}}" name="val_ids[{{$attr['id']}}][{{$i + 1}}]">
                                        @endif
                                        <label>{{$attr['val'][$i+1]['val']}}</label>
                                    </td>
                                @endif
                                @if(isset($attr['val'][$i+2]) && count($attr['val'][$i + 2]) > 0)
                                    <td>
                                        @if(isset($requireProductAttr))
                                        <input type="checkbox" pv="false" value1 = "{{$attr['val'][$i+2]['val']}}"  value="{{$attr['val'][$i + 2]['id']}}" name="val_ids[{{$attr['id']}}][{{$i + 2}}]"
                                               @foreach($requireProductAttr['check_values'] as $checked_value)
                                                   @if($checked_value == $attr['val'][$i + 2]['id'])
                                                        checked
                                                    @endif
                                                @endforeach>
                                        @else
                                            <input type="checkbox" pv="false" value1 = "{{$attr['val'][$i+2]['val']}}"  value="{{$attr['val'][$i + 2]['id']}}" name="val_ids[{{$attr['id']}}][{{$i + 2}}]">
                                        @endif
                                        <label>{{$attr['val'][$i+2]['val']}}</label>
                                    </td>
                                @endif
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                @elseif($attr['attr_type'] == 3)
                    <table class="eib-bndlTbl">
                        <tbody>
                        @for($i = 0; $i < count($attr['val']); $i = $i + 3)
                            <tr>
                                @if(isset($attr['val'][$i]) && count($attr['val'][$i]) > 0)
                                    <td>
                                        @if(isset($requireProductAttr))
                                        <input type="radio" pv="false" value="{{$attr['val'][$i]['id']}}" name="val_ids[{{$attr['id']}}]"
                                                @if($requireProductAttr['val_ids'] == $attr['val'][$i]['id'])
                                                    checked
                                                @endif class="require" msg="{{$attr['title']}}">
                                        @else
                                            <input type="radio" pv="false" value="{{$attr['val'][$i]['id']}}" name="val_ids[{{$attr['id']}}]">
                                        @endif
                                        <label>{{$attr['val'][$i]['val']}}</label>
                                    </td>
                                @endif
                                @if(isset($attr['val'][$i+1]) && count($attr['val'][$i + 1]) > 0)
                                    <td>
                                        @if(isset($requireProductAttr))
                                        <input type="radio" pv="false" value="{{$attr['val'][$i + 1]['id']}}" name="val_ids[{{$attr['id']}}]"
                                               @if($requireProductAttr['val_ids'] == $attr['val'][$i + 1]['id'])
                                                    checked
                                               @endif class="require" msg="{{$attr['title']}}">
                                        @else
                                            <input type="radio" pv="false" value="{{$attr['val'][$i + 1]['id']}}" name="val_ids[{{$attr['id']}}]">
                                        @endif
                                        <label>{{$attr['val'][$i+1]['val']}}</label>
                                    </td>
                                @endif
                                @if(isset($attr['val'][$i+2]) && count($attr['val'][$i + 2]) > 0)
                                    <td>
                                        @if(isset($requireProductAttr))
                                        <input type="radio" pv="false" value="{{$attr['val'][$i + 2]['id']}}" name="val_ids[{{$attr['id']}}]"
                                               @if($requireProductAttr['val_ids'] == $attr['val'][$i + 2]['id'])
                                                    checked
                                               @endif class="require" msg="{{$attr['title']}}">
                                        @else
                                            <input type="radio" pv="false" value="{{$attr['val'][$i + 2]['id']}}" name="val_ids[{{$attr['id']}}]">
                                        @endif
                                        <label>{{$attr['val'][$i+2]['val']}}</label>
                                    </td>
                                @endif
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                @endif
                @if($attr['attr_type'] == 0)
                    <div class="cell-lblTopFldDiv">
                        <div>
                    <span class="opnd-Span">
                        @if(isset($requireProductAttr))
                        <input type="text" class="opnd-vl require" size="21" maxlength="50" gname="Brand" aria-required="true" vld="1" name="text_val[{{$attr['id']}}]" value="{{$requireProductAttr['text_val']}}" msg="{{$attr['title']}}">
                        @else
                            <input type="text" class="opnd-vl require" size="21" maxlength="50" gname="Brand" aria-required="true" vld="1" name="text_val[{{$attr['id']}}]" msg="{{$attr['title']}}">
                        @endif
                        <div class="clr"></div>
                    </span>
                        </div>
                    </div>
                @elseif($attr['attr_type'] == 1)
                    <div class="eist-slt115 combo">
                        <div class="cell-lblLftFldDiv" style="width:90%;">
                            <select name="val_ids[{{$attr['id']}}]" class="require" msg="{{$attr['title']}}">
                                @foreach($attr['val'] as $val)
                                    @if(count($val) > 0)
                                        @if(isset($requireProductAttr))
                                        <option value="{{$val['id']}}"
                                            @if($requireProductAttr['val_ids'] == $val['id'])
                                                selected
                                            @endif>{{$val['val']}}</option>
                                        @else
                                            <option value="{{$val['id']}}">{{$val['val']}}</option>
                                        @endif
                                    @endif
                                @endforeach
                            </select>
                            <div class="clr"></div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="eib-clr"></div>

            <div class="eib-pd" id="p_st_Brand">Frequent:
                <span id="pv_st_Brand" addp="1">
            <a href="javascript:;">Unbranded</a>,
            <a href="javascript:;">Casio</a>,
            <a href="javascript:;">Seiko</a>
        </span>
            </div>
            <div class="eisi-clr"></div>
        </div>
        <?php $no++;?>
    @endforeach


    <div class="hrLine"></div>
    <div class="titDiv">Additional</div>
    <div class="subTxt">Buyers may also be interested in these item specifics</div>
    <?php $no = count($requireAttrList); ?>
    @foreach($additionalAttrList as $attr)
        <?php foreach($productAttrValList as $productAttr){
            if($attr['id'] == $productAttr['attr_id']){
                $additionalProductAttr = $productAttr;
                $additionalProductAttr['check_values'] = @explode(",", $additionalProductAttr['val_ids']);
                break;
            }
        }?>
        <input type="text" class="hidden" name="attr_id[{{$no}}]" value="{{$attr['id']}}">
        <div class="eisi-padBtm">
            <div>
                <div>
                    <label>
                        <div class="eib-selTgLbl">{{$attr['title']}}</div>
                    </label>
                </div>

                @if($attr['attr_type'] == 2)
                    <table class="eib-bndlTbl">
                        <tbody>
                        @for($i = 0; $i < count($attr['val']); $i = $i + 3)
                            <tr>
                                @if(isset($attr['val'][$i]) && count($attr['val'][$i]) > 0)
                                    <td>
                                        @if(isset($additionalProductAttr))
                                        <input type="checkbox" pv="false" value="{{$attr['val'][$i]['id']}}" name="val_ids[{{$attr['id']}}][{{$i}}]"
                                               @foreach($additionalProductAttr['check_values'] as $checked_value)
                                               @if($checked_value == $attr['val'][$i]['id'])
                                               checked
                                                @endif
                                                @endforeach>
                                        @else
                                            <input type="checkbox" pv="false" value="{{$attr['val'][$i]['id']}}" name="val_ids[{{$attr['id']}}][{{$i}}]">
                                        @endif
                                        <label>{{$attr['val'][$i]['val']}}</label>
                                    </td>
                                @endif
                                @if(isset($attr['val'][$i+1]) && count($attr['val'][$i + 1]) > 0)
                                    <td>
                                        @if(isset($additionalProductAttr))
                                        <input type="checkbox" pv="false" value="{{$attr['val'][$i + 1]['id']}}" name="val_ids[{{$attr['id']}}][{{$i + 1}}]"
                                               @foreach($additionalProductAttr['check_values'] as $checked_value)
                                               @if($checked_value == $attr['val'][$i + 1]['id'])
                                               checked
                                                @endif
                                                @endforeach>
                                        @else
                                            <input type="checkbox" pv="false" value="{{$attr['val'][$i + 1]['id']}}" name="val_ids[{{$attr['id']}}][{{$i + 1}}]">
                                        @endif
                                        <label>{{$attr['val'][$i+1]['val']}}</label>
                                    </td>
                                @endif
                                @if(isset($attr['val'][$i+2]) && count($attr['val'][$i + 2]) > 0)
                                    <td>
                                        @if(isset($additionalProductAttr))
                                        <input type="checkbox" pv="false" value="{{$attr['val'][$i + 2]['id']}}" name="val_ids[{{$attr['id']}}][{{$i + 2}}]"
                                               @foreach($additionalProductAttr['check_values'] as $checked_value)
                                               @if($checked_value == $attr['val'][$i + 2]['id'])
                                               checked
                                                @endif
                                                @endforeach>
                                        @else
                                            <input type="checkbox" pv="false" value="{{$attr['val'][$i + 2]['id']}}" name="val_ids[{{$attr['id']}}][{{$i + 2}}]">
                                        @endif
                                        <label>{{$attr['val'][$i+2]['val']}}</label>
                                    </td>
                                @endif
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                @elseif($attr['attr_type'] == 3)
                    <table class="eib-bndlTbl">
                        <tbody>
                        @for($i = 0; $i < count($attr['val']); $i = $i + 3)
                            <tr>
                                @if(isset($attr['val'][$i]) && count($attr['val'][$i]) > 0)
                                    <td>
                                        @if(isset($additionalProductAttr))
                                        <input type="radio" pv="false" value="{{$attr['val'][$i]['id']}}" name="val_ids[{{$attr['id']}}]"
                                               @if($additionalProductAttr['val_ids'] == $attr['val'][$i]['id'])
                                               checked
                                                @endif>
                                        @else
                                            <input type="radio" pv="false" value="{{$attr['val'][$i]['id']}}" name="val_ids[{{$attr['id']}}]">
                                        @endif
                                        <label>{{$attr['val'][$i]['val']}}</label>
                                    </td>
                                @endif
                                @if(isset($attr['val'][$i+1]) && count($attr['val'][$i + 1]) > 0)
                                    <td>
                                        @if(isset($additionalProductAttr))
                                        <input type="radio" pv="false" value="{{$attr['val'][$i + 1]['id']}}" name="val_ids[{{$attr['id']}}]"
                                               @if($additionalProductAttr['val_ids'] == $attr['val'][$i + 1]['id'])
                                               checked
                                                @endif>
                                        @else
                                            <input type="radio" pv="false" value="{{$attr['val'][$i + 1]['id']}}" name="val_ids[{{$attr['id']}}]">
                                        @endif
                                        <label>{{$attr['val'][$i+1]['val']}}</label>
                                    </td>
                                @endif
                                @if(isset($attr['val'][$i+2]) && count($attr['val'][$i + 2]) > 0)
                                    <td>
                                        @if(isset($additionalProductAttr))
                                        <input type="radio" pv="false" value="{{$attr['val'][$i + 2]['id']}}" name="val_ids[{{$attr['id']}}]"
                                               @if($additionalProductAttr['val_ids'] == $attr['val'][$i + 2]['id'])
                                               checked
                                                @endif>
                                        @else
                                            <input type="radio" pv="false" value="{{$attr['val'][$i + 2]['id']}}" name="val_ids[{{$attr['id']}}]">
                                        @endif
                                        <label>{{$attr['val'][$i+2]['val']}}</label>
                                    </td>
                                @endif
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                @endif
                @if($attr['attr_type'] == 0)
                    <div class="cell-lblTopFldDiv">
                        <div>
                    <span class="opnd-Span">
                        @if(isset($additionalProductAttr))
                        <input type="text" class="opnd-vl" size="21" maxlength="50" gname="Brand" aria-required="true" vld="1" name="text_val[{{$attr['id']}}]" value="{{$additionalProductAttr['text_val']}}">
                        @else
                            <input type="text" class="opnd-vl" size="21" maxlength="50" gname="Brand" aria-required="true" vld="1" name="text_val[{{$attr['id']}}]">
                        @endif
                        <div class="clr"></div>
                    </span>
                        </div>
                    </div>
                @elseif($attr['attr_type'] == 1)
                    <div class="eist-slt115 combo">
                        <div class="cell-lblLftFldDiv" style="width:90%;">
                            <select name="val_ids[{{$attr['id']}}]">
                                @foreach($attr['val'] as $val)
                                    @if(count($val) > 0)
                                        @if(isset($additionalProductAttr))
                                            <option value="{{$val['id']}}"
                                                    @if($additionalProductAttr['val_ids'] == $val['id'])
                                                    selected
                                                    @endif>{{$val['val']}}
                                            </option>
                                        @else
                                            <option value="{{$val['id']}}">{{$val['val']}}
                                            </option>
                                        @endif
                                    @endif
                                @endforeach
                            </select>
                            <div class="clr"></div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="eib-clr"></div>

            <div class="eib-pd" id="p_st_Brand">Frequent:
                <span id="pv_st_Brand" addp="1">
            <a href="javascript:;">Unbranded</a>,
            <a href="javascript:;">Casio</a>,
            <a href="javascript:;">Seiko</a>
        </span>
            </div>
            <div class="eisi-clr"></div>
        </div>
        <?php $no++;?>
    @endforeach
@endif