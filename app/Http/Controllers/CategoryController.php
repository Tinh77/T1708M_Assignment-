<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = Category::all();
        return view('admin.category.list')->with(['list_obj' => $list_obj]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Category();
        $obj->title = Input::get('name');
        $obj->description = Input::get('description');
        $obj->image = Input::get('image');
        $obj->save();
        return redirect('/admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Category::find($id);
        if ($obj == null) {
            return view('error.404');
        }
        return view('admin.category.edit')->with(['obj' => $obj]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $obj = Category::find($id);
        $obj->title = Input::get('name');
        $obj->description = Input::get('description');
        $obj->image = Input::get('image');
        $obj->save();
        return redirect('/admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Category::find($id);
        if ($obj == null) {
            return response()->json(['error' => 'not found'], 404);
        }
        $obj->delete();
        return response()->json(['message' => 'Delete'], 200);
    }
}
