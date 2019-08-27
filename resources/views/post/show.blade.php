<html5>
<body>
    <table>
        <h2>Show Post ID</h2>
        <hr>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Update_at</td>
        </tr>
        <tr>
            <td>{{$data['id']}}</td>
            <td>{{$data['posts']}}</td>
            <td>{{$data['updated_at']}}</td>
            <td><a href="{{route('index.post')}}">Quay Lại</a></td>
        </tr>
    </table>
</body>
</html5>
