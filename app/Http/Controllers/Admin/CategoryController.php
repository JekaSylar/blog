<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\EditCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Resources\Admin\Category\CategoryResource;
use App\Http\Requests\Admin\Category\StoreCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $search = $request->search;
            $categories = Category::orderBy('title')->where('title', 'LIKE', '%' . $search . '%')->paginate(15);
        }
        else {
            $categories = Category::orderBy('title')->paginate(15);
        }


        return Inertia::render('Admin/Category/Show', [
            'categories' => CategoryResource::collection($categories)
        ]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return Inertia::render('Admin/Category/EditCategory', [
            'category' => new  CategoryResource($category)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditCategoryRequest $request, Category $category)
    {

        $category->update($request->all());

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back();
    }
}
