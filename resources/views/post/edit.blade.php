<h2>Edit Post</h2>
<hr>
<form action="{{ route('index.post.edit', ['id' => $edit->id ])}}" method="post">{{ csrf_field() }}
        <table class="table">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Create_at</td>
            </tr>
            <tr>
                <td>{{ $edit->id }}</td>
                <td><input name="posts" value="{{ $edit->posts }}"></td>
                <td>{{ $edit->updated_at }}</td>
            </tr>
        </table>
        <input type="submit" name="submit">
</form>
