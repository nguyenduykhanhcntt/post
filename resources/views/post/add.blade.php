<h2>Insert Post</h2>
<hr>
<form action="{{ route('index.post.add')}}" method="post">{{ csrf_field() }}
    <table class="table">
        <tr>
            <td>Name</td>
        </tr>
        <tr>
            <td><input type="text" value="" name="posts"></td>
        </tr>
    </table>
    <input type="submit" name="submit">
    <?php
    if ($errors->all()){
        foreach($errors->all() as $value){
            print_r($value.'<br>');
        }
    }
    ?>
</form>
