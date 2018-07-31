@extends('layout.main_content')
@section('main-content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title float-left">Enter the information of pigs</h5>
            <form action="/admin/category" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <lable>Name :</lable>
                    <input type="text" name="name" class="form-control w-50">
                </div>
                <div class="form-group">
                    <lable>Description :</lable>
                    <input type="text" name="description" class="form-control">
                </div>
                <div class="form-group">
                    <lable>Image:</lable>
                    <input type="text" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit" class="btn btn-primary">
                    <input type="reset" value="Reset" class="btn btn-dark">
                </div>
            </form>
        </div>
    </div>
@endsection