<html5>
<body>
<h2>Post Index</h2>
<hr>
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Create_at</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        @foreach($data as $value)
        <tr>
            <td>{{$value->id }}</td>
            <td>{{$value->posts }}</td>
            <td>{{$value->updated_at }}</td>
            <td><a href="{{route('index.post.show', ['id' => $value->id])}}">Show</a></td>
            <td><a href="{{route('index.post', ['id' => $value->id])}}">Edit</a></td>
            <td><a href="{{route('index.post.delete', ['id' => $value->id])}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
    @if($edit)
        @includeIf('post.edit')
    @else
        @includeIf('post.add')
    @endif
</body>
</html5><?php //post/show/{{$value->id }}?>