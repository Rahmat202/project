<?php

namespace App\Http\Controllers;

use App\Models\Traffic;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrafficController extends Controller
{
    public function index()
    {
        $traffics = Traffic::orderBy('id','desc')->get();
        return  view('backend.Traffic.index',compact('traffics'));
    }

    public function create()
    {
        $categories = Category::orderBy('id','desc')->get();
        return view('backend.Traffic.create',compact('categories'));
    }

    public function store(Request $request){
      
     
       $traffic = Traffic::create([
            'system_date'     => $request->system_date,
            'page'          => $request->page,
            'city'          => $request->city,
            'country'          => $request->country,
            'category_id'          => $request->category_id,
            'sub_category'          => $request->sub_category,
            'serch_text'          => $request->serch_text,
            'customer_name'          => $request->customer_name,
            'ip_address'          => $request->ip_address,
           
        ]);
        if ($traffic) {
            // return back()->with('success', 'Success! customer created');
            return redirect()->route('traffic.index')->with("success","Record added successfully");
        }
        else {
            return back()->with('failed', 'Failed! customer not created');
        }
       
    }


    public function edit($id)
    {
        $traffic = Traffic::find($id);
        $categories = Category::orderBy('id','desc')->get();
       return view('backend.Traffic.edit',compact('traffic','categories'));
    }
    public function update(Request $request, Traffic $traffic)
    {
       
       $traffic = Traffic::where('id',$request->id)->update([
            'system_date'     => $request->system_date,
            'page'          => $request->page,
            'city'          => $request->city,
            'country'          => $request->country,
            'category_id'          => $request->category_id,
            'sub_category'          => $request->sub_category,
            'serch_text'          => $request->serch_text,
            'customer_name'          => $request->customer_name,
            'ip_address'          => $request->ip_address,
            
           
        ]);
        if ($traffic) {
            // return back()->with('success', 'Success! customer created');
            return redirect()->route('traffic.index')->with('success','Record Updated successfully');
        }
       
        
    }
  
    public function delete($id)
    {
        DB::table("traffic")->where('id',$id)->delete();
        return back()->with('success','traffic deleted successfully');
    }
}
