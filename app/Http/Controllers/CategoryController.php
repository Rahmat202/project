<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id','desc')->get();
        return  view('backend.category.index',compact('categories'));
    }

    public function create()
    {
        return view('backend.category.create');
    }

   
    public function store(Request $request){
      
     
            $categry = Category::create([
            'name'          => $request->name,
           
        ]);
        if($category){
               return redirect()->route('category.index')->with("success","Record added successfully");
        }
       
    }


    public function edit($id)
    {
        $category = Category::find($id);
       return view('backend.category.edit',compact('category'));
    }
    public function update(Request $request, Category $category)
    {
       
        $category = Category::where('id',$request->id)->update([
            'name'  => $request->name,
            
           
        ]);
        if($category){
             return redirect()->route('category.index')->with('success','Record Updated successfully');
        }
       
    }
  
    public function delete($id)
    {
        DB::table("category")->where('id',$id)->delete();
        return back()->with('success','Category deleted successfully');
    }

}
