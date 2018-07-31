@extends('layout.main_content')
@section('main-content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list_obj as $obj)
            <tr>
                <th scope="row">{{$obj->id}}</th>
                <td>
                    <div class="card" style="background-image: url('{{$obj->image}}'); background-size: cover; width: 77px; height: 60px">
                    </div>
                </td>
                <td>{{$obj -> title}}</td>
                <td>{{$obj -> description}}</td>
                <td>
                    <a href="/admin/category/{{$obj -> id}}/edit">Edit</a>
                    <a href="/admin/category/{{$obj -> id}}" id="{{$obj -> id}}" class="delete-link btn-sm btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    <script>
        $('.delete-link').click(function () {
            var cateId = this.id;
            // return false;
            var confirm_user = confirm('Are you sure ?');
            if (confirm_user) {
                $.ajax({
                    url: '/admin/category/' + cateId,
                    type: 'DELETE',
                    data: {
                        '_token': "{{csrf_token()}}"
                    },
                    success: function (data) {
                        console.log(data);
                        // alert('Xoa thanh cong');
                        window.location.reload()
                    },
                    error: function () {
                        alert('error');
                    }
                });
            } else {
                alert('!Okie');
                return false;
            }
        });
    </script>
@endsection