<h2>Edit Company</h2>
<hr>
<form action="{{ route('index.company.edit', ['id' => $companyEdit->id ])}}" method="post">{{ csrf_field() }}
        <table class="table">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Address</td>
                <td>Phone</td>
            </tr>
            <tr>
                <td>{{ $companyEdit->id }}</td>
                <td><input name="name_company" value="{{ $companyEdit->name_company }}"></td>
                <td><input name="address" value="{{ $companyEdit->address }}"></td>
                <td><input name="phone" value="{{ $companyEdit->phone }}"></td>
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
