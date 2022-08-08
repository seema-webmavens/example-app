<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();

        return view('products.index', compact('products'));
    }
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function home()
    {
        $products = Products::all();
        //$Categories= Category::all();

        return view('home', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category= Category::all();


        return view('products.create', compact('category'));
        //return view('categories.index', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name'=> 'required',
            'price' => 'required',
        ]);

        $path = $request->file('photo')->store('photos', 'public');
        // dd($path);


        Products::create([

            'name' => $request->name,
            'discription' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'photo' => $path



        ]);


        return redirect()->route('products.index');
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
        $products = Products::findOrFail($id);
        $category = Category::all();


        return view('products.edit', compact('products', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = Products::findOrFail($id);
        $path = $request->file('photo')->store('photos', 'public');
        $products->update([

            'name' => $request->name,
            'discription' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'photo' => $path


       ]);

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Products::findOrFail($id);
        $products->delete();

        return redirect()->route('products.index');
    }
}
