@extends('layout.main_content')
@section('main-content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title float-left">List of pigs for sale</h5>
            <form action="/admin/product/{{$product_in_view -> id}}" method="post">
                @method('PUT')
                {{csrf_field()}}
                <div class="form-group">
                    <lable>Name :</lable>
                    <input type="text" name="name" class="form-control" value="{{$product_in_view -> name}}">
                </div>
                <div class="form-group">
                    <lable>Price :</lable>
                    <input type="text" name="price" class="form-control" value="{{$product_in_view -> price}}">
                </div>
                <div class="form-group">
                    <lable>Category :</lable>
                    <select name="categoryId" id="">
                        @foreach($categories as $item)
                            <option value="{{$item->id}}" {{$product_in_view -> categoryId == $item->id ? 'selected' : ''}} >{{$item->title}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <lable>Description :</lable>
                    <input type="text" name="description" class="form-control"
                           value="{{$product_in_view -> description}}">
                </div>
                <div class="form-group">
                    <lable>Image:</lable>
                    <input type="text" name="image" class="form-control" value="{{$product_in_view -> image}}">
                    <img src="{{$product_in_view -> image}}" alt="" width="150px">
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit" class="btn btn-primary">
                    <input type="reset" value="Reset" class="btn btn-dark">
                </div>
            </form>
        </div>
    </div>
@endsection