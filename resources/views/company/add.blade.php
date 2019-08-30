<h2>Insert Company</h2>
<hr>
<form action="{{ route('index.company.add')}}" method="post">{{ csrf_field() }}
    <table class="table">
        <tr>
            <td>Name</td>
            <td>Address</td>
            <td>Phone</td>
        </tr>
        <tr>
            <td><input type="text" value="" name="name_company"></td>
            <td><input type="text" value="" name="address"></td>
            <td><input type="text" value="" name="phone"></td>
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
