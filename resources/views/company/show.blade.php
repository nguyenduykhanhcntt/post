<html5>
<body>
    <table>
        <h2>Show Post ID</h2>
        <hr>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Address</td>
            <td>Phone</td>
        </tr>
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name_company}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->phone}}</td>
            <td><a href="{{route('index.company')}}">Quay Lại</a></td>
        </tr>
    </table>
</body>
</html5>
