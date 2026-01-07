<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats = Category::all();

        // dd($cats);

        return view('backend.category.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $request->validate(
            [
                'cat_name' => 'required|max:90|min:3|unique:categories,name' 
            ],
            [
                'required' => 'Category Name Must be Requiered',
                'min' => 'Category Name Must be minimum 3 Charecter Required',
                'max' => 'Category Name Must within 90 Charecter',
                'unique' => 'Category Name has already exist',
            ]
        );
        $c_name =  $request->cat_name;
        $catergory = [
            'name' => $c_name,
        ];
        Category::create($catergory);
        return redirect()->route('category.index')->with('success', 'Category Added');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // dd($category);
        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate(
            [
                'cat_name' => 'required|max:90|min:3|unique:categories,name' 
            ],
            [
                'required' => 'Category Name Must be Requiered',
                'min' => 'Category Name Must be minimum 3 Charecter Required',
                'max' => 'Category Name Must within 90 Charecter',
                'unique' => 'Category Name has already exist',
            ]
        );
        $data = [
            'name' => $request->cat_name
        ];
        $category->update($data);
        return redirect()->route('category.index')->with('success', 'Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
       $category->delete();
        return redirect()->route('category.index')->with('success', 'Category Deleted');
    }
}
