<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::orderBy('id','desc')->get();
        return view('backend.country.index',compact('countries'));
    }

    public function create()
    {
        return view('backend.country.create');
    }

    public function store(Request $request)
    {
        
       $country = Country::create([
            'name'  => $request->name,
                         
            
        ]);
        if ($country) {
            // return back()->with('success', 'Success! customer created');
            return redirect()->route('country.index')->with('Record Added Successfully');
        }
        else {
            return back()->with('failed', 'Failed! customer not created');
        }
       
    }

    public function edit($id)
    {
        $country = Country::find($id);
       return view('backend.country.edit',compact('country'));
    }
    public function update(Request $request, Country $country)
    {
       
        $country = Country::where('id',$request->id)->update([
            'name'  => $request->name,
            
           
        ]);
        if ($country) {
            // return back()->with('success', 'Success! customer created');
            return redirect()->route('country.index')->with('Success','Record Updated successfully');
        }
        else {
            return back()->with('failed', 'Failed! customer not created');
        }
      
    }
  
    public function delete($id)
    {
        DB::table("country")->where('id',$id)->delete();
        return back()->with('Success','country deleted successfully');
    }

}
