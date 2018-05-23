<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreCategoryPost;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $validated = $request->validated();

        $category = new Category();
        $category->name = $request['name'];
        $category->description = $request['description'];
        $category->genre_id = $request['genre_id'];
        $category->save();

        $category = Category::all();
        return redirect()->action('CategoriesController@index')->with('correct', 'Category Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoryPost $request, Category $category)
    {
//        $validated = $request->validated();

        $category->name = $request['name'];
        $category->description = $request['description'];
        $category->genre_id = $request['genre_id'];
        $category->save();

        return redirect()->action('CategoriesController@index')->with('correct', 'Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->action('CategoriesController@index')->with('correct', 'Category Removed');
    }
}