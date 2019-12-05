<table class = "table table-bordered table-striped">
    <thead>
        <tr>
            <td>No</td>
            <td>Receive User Name</td>
            <td>Region</td>
            <td>Address</td>
            <td>Phone Number</td>
            <td>Active</td>
            <td width ="20%"></td>
        </tr>
    </thead>
    <tbody>
    @foreach($addressList as $key => $item)
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$item['user_name']}}</td>
        <td>{{$countries[$item['region_id']]}}</td>
        <td>{{$item['address']}}</td>
        <td>{{$item['phone_num']}}</td>
        <td>@if($item['is_active']*1 == 1) Active @endif</td>
        <td>
            <button type="button" onclick = "editUserRecieveAddress('{{$item['id']}}')" class="btn btn-primary btn-xs" >edit</button>
            @if($item['is_active']*1 == 0)
            <button type="button" onclick = "onDelUserReceiveAddress('{{$item['id']}}')" class="btn btn-danger btn-xs" >del</button>
            <button type="button" onclick = "onUserReceiveAddressSetActive('{{$item['id']}}')" class="btn btn-success btn-xs" >Active</button>
            @endif
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

