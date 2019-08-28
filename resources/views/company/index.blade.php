<html5>
    <body>
    <h2>Company Index</h2>
    <hr>
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Address</td>
            <td>Phone</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        @foreach($data as $value)
        <tr>
            <td>{{$value->id }}</td>
            <td>{{$value->name_company }}</td>
            <td>{{$value->address }}</td>
            <td>{{$value->phone }}</td>
            <td><a href="{{route('index.company.show', ['id' => $value->id])}}">Show</a></td>
            <td><a href="{{route('index.company', ['id' => $value->id])}}">Edit</a></td>
            <td><a href="{{route('index.company.delete', ['id' => $value->id])}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
    @if($companyEdit)
        @includeIf('company.edit')
    @else
        @includeIf('company.add')
    @endif
    </body>
</html5>
