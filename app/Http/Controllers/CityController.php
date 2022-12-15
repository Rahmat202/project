<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::orderBy('id','desc')->get();
        return  view('backend.city.index',compact('cities'));
    }

    public function create()
    {
        $countries = Country::orderBy('id','desc')->get();
        return view('backend.city.create',compact('countries'));
    }

   
    public function store(Request $request){
      
     
        $city = City::create([
            'country_id'          => $request->country_id,
            'name'          => $request->name,
           
        ]);
        if($city){
             return redirect()->route('city.index')->with("success","Record added successfully");
        }
       
    }


    public function edit($id)
    {
        $city = City::find($id);
        $countries = Country::orderBy('id','desc')->get();
       return view('backend.city.edit',compact('city','countries'));
    }
    public function update(Request $request, City $city)
    {
       
        $city = City::where('id',$request->id)->update([
            'country_id'  => $request->country_id,
            'name'  => $request->name,
            
           
        ]);
        if($city){
             return redirect()->route('city.index')->with('success','Record Updated successfully');
        }
       
    }
  
    public function delete($id)
    {
        DB::table("city")->where('id',$id)->delete();
        return back()->with('success','Category deleted successfully');
    }

}
