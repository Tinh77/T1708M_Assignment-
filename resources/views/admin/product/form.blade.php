@extends('layout.main_content')
@section('main-content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title float-left">Thêm mới thông sản phẩm</h5>
            <a href="/admin/product" class="float-right"><i class="fas fa-list-ul"></i> Danh sách sản phẩm</a>
            <div class="clearfix"></div>
            <form action="/admin/product" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <lable>Name :</lable>
                    <input type="text" name="name" class="form-control w-50">
                </div>
                <div class="form-group">
                    <lable>Price :</lable>
                    <input type="number" name="price" class="form-control w-25">
                </div>
                <div class="form-group">
                    <lable>Category :</lable>
                    <select name="categoryId" id="" class="w-25">
                        @foreach($category as $item)
                            <option value={{$item->id}}>{{$item->title}}</option>
                        @endforeach()
                    </select>
                </div>
                <div class="form-group">
                    <lable>Description :</lable>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <lable>Image:</lable>
                    <input type="text" name="image" class="form-control w-50">
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit" class="btn btn-primary">
                    <input type="reset" value="Reset" class="btn btn-dark">
                </div>
            </form>
        </div>
    </div>
@endsection