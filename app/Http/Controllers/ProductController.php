<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $categoryId = Input::get('categoryId');
        if ($categoryId == null || $categoryId == 0) {
            $product = Product::orderBy('created_at', 'desc')->paginate(5);
            return view('admin.product.list')
                ->with('products_in_view', $product)
                ->with('categories', $categories)
                ->with('categoryId', $categoryId);

        } else {
            $product = Product::where('categoryId', Input::get('categoryId'))
                ->orderBy('created_at', 'desc')->paginate(1);
            return view('admin.product.list')
                ->with('products_in_view', $product)
                ->with('categories', $categories)
                ->with('categoryId', $categoryId);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.product.form')->with('category', $category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $obj = new Product();
        $obj->name = Input::get('name');
        $obj->price = Input::get('price');
        $obj->description = Input::get('description');
        $obj->categoryId = Input::get('categoryId');
        $obj->image = Input::get('image');
        $obj->save();
        return redirect('/admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return view('404');
        }
        $categoryId = Category::all();
        return view('admin.product.edit')
            ->with('product_in_view', $product)
            ->with('categories', $categoryId);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return view('404');
        }
        $product->name = Input::get('name');
        $product->price = Input::get('price');
        $product->description = Input::get('description');
        $product->categoryId = Input::get('categoryId');
        $product->image = Input::get('image');
        $product->save();
        return redirect('/admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Product::find($id);
        if ($obj == null) {
            return response()->json(['error' => 'not found'], 404);
        }
        $obj->delete();
        return response()->json(['message' => 'Delete'], 200);
    }
}
