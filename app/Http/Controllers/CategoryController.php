<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function addCategory()
    {
        return view('admin.addCategory');
    }

    public function saveCategory(Request $request)
    {
        $category = new Category();
        $category->categoryname = $request->categoryname;
        $category->categorydescription = $request->categorydescription;
        $category->save();
        return redirect()->route('showCategory');
    }

    public function showCategory()
    {
        $category = Category::all();
        return view('admin.showCategory', ['category' => $category]);
    }

    public function editCategory($id)
    {
        $category = Category::find($id);
        return view('admin.editCategory', ['category' => $category]);
    }

    public function updateCategory(Request $request, $id)
    {
        $category = Category::find($id);
        $category->categoryname = $request->categoryname;
        $category->categorydescription = $request->categorydescription;
        $category->save();
        return redirect()->route('showCategory');
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('showCategory');
    }
}
