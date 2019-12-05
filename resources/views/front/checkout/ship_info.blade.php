@if(isset($shipInfo['id']))
    <ul class = "ship_ul">
        <li>{{$shipInfo['user_name']}}</li>
        <li>{{$shipInfo['address']}}</li>
        <li>{{$countries[$shipInfo['region_id']]}}</li>
        <li>{{encryptShipAddress($shipInfo['phone_num'])}}</li>
    </ul>
@endif