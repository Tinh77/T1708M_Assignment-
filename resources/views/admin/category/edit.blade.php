@extends('layout.main_content')
@section('main-content')
    <form action="/admin/category/{{$obj -> id}}" method="post">
        @method('PUT')
        {{csrf_field()}}
        <div class="form-group">
            <lable>Name :</lable>
            <input type="text" name="name" class="form-control" value="{{$obj -> title}}">
        </div>
        <div class="form-group">
            <lable>Description :</lable>
            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$obj -> description}}</textarea>
        </div>
        <div class="form-group">
            <lable>Image:</lable>
            <input type="text" name="image" class="form-control" value="{{$obj -> image}}">
            <img src="{{$obj -> image}}" alt="" width="150px">
        </div>
        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-dark">
        </div>
    </form>
@endsection