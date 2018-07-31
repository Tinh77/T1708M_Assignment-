@extends('layout.main_content')
@section('main-content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title float-left">List of pigs for sale</h5>
            <a href="/admin/product/create " class="float-right"><i class="far fa-plus-square"></i>Create new</a>
            <div class="clearfix"></div>
            <div class="row mt-3 mb-3 ml-1">
                <form action="" class="form-inline">
                    <div class="form-group">
                        <label class="mr-3">Category</label>
                        <select name="categoryId" class="form-control mr-3">
                            <option value="0">All category</option>
                            @foreach($categories as $item)
                                <option value="{{$item->id}}" {{$categoryId == $item->id ? 'selected' : ''}}>{{$item->title}}</option>
                            @endforeach
                        </select>
                        <input type="submit" value="Filtered" class="btn btn-outline-success">
                    </div>
                </form>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">CategoryId</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products_in_view as $obj)
                    <tr>
                        <th scope="row">{{$obj->id}}</th>
                        <td>
                            <div class="card"
                                 style="background-image: url('{{$obj->image}}'); background-size: cover; width: 77px; height: 60px">
                            </div>
                        </td>
                        <td>{{$obj -> name}}</td>
                        <td>
                            @if(isset($obj->category))
                                {{$obj->category->title}}
                            @else
                                NULLw
                            @endif
                        </td>
                        <td>{{$obj -> description}}</td>
                        <td>
                            <a href="/admin/product/{{$obj -> id}}/edit">Edit</a>
                            <a href="/admin/product/{{$obj -> id}}" id="{{$obj -> id}}"
                               class="delete-link btn-sm btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="float-right">
                {{$products_in_view->links()}}
            </div>
        </div>
    </div>
    <script>
        $('.delete-link').click(function () {
            var cateId = this.id;
            console.log(cateId);
            // return false;
            var confirm_user = confirm('Are you sure ?');
            if (confirm_user) {
                $.ajax({
                    url: 'http://localhost:8000/admin/product/' + cateId,
                    method: 'DELETE',
                    data: {
                        '_token': "{{csrf_token()}}"
                    },
                    success: function () {
                        alert('Xoa thanh cong');
                        window.location.reload()
                    },
                    error: function () {
                        alert('error');
                    }
                });
            } else {
                alert('!Okie');
            }
        });
    </script>
@endsection