<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Country;
// use Spatie\Image\Image;
use App\Models\Category;
use App\Models\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    
    public function customer()
    {
        $customers = Customer::orderBy('id','desc')->get();
        return view('backend.Customer.index',compact('customers'));
    }

    public function create()
    {

        $categories = Category::orderBy('id','desc')->get();
        $countries = Country::orderBy('id','desc')->get();
        $users = User::orderBy('id','desc')->get();
        return view('backend.Customer.create',compact('categories','countries','users'));
    }

    public function store(Request $request){
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image = $request->image->move(public_path().'/uploads/Customer' , $filename ) ;
            $file = $filename;
        }else{
            $file = null;
        }
        // width * height = resolution
        // $imageResolution = Image::load($file)->getWidth() * Image::load($file)->getHeight();

           $customer = Customer::create([
            'category_id'   => $request->category_id,
            'country_id'   => $request->country_id,
            'city'   => $request->city,
            'P_name'   => $request->P_name,
            'P_address'   => $request->P_address,
            'webUrl'  => $request->webUrl,
            'remark'  => $request->remark,
            'img_resolution'  => $request->img_resolution,
            'keyword'  => $request->keyword,
            'imgstatus'  => 1,
            'user_id'  => $request->user_id,
            'addedBy'  => $request->addedBy,
            'addedOn'  => $request->addedOn,
            'updatedBy'  => $request->updatedBy,
            'updatedOn'  => $request->updatedOn, 
            'image'       => $file,
        ]);
        
        if ($customer) {
            // return back()->with('success', 'Success! customer created');
            return redirect()->route('customer.index')->with("success","Record Added successfully");
        }
        else {
            return back()->with('failed', 'Failed! customer not created');
        }

    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        $countries = Country::orderBy('id','desc')->get();
        $categories = Category::orderBy('id','desc')->get();
       return view('backend.Customer.edit',compact('customer','countries','categories'));
    }

    public function update(Request $request, Customer $customer)
    {
        $present = Customer::where('id',$request->id)->value('image');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image = $request->image->move(public_path().'/uploads/customer' , $filename ) ;
            $file = $filename;
        }else{
            $file = $present;
        }
        Customer::where("id",$request->id)
        ->update([
            'category_id'   => $request->category_id,
            'country_id'   => $request->country_id,
            'city'   => $request->city,
            'P_name'   => $request->P_name,
            'P_address'   => $request->P_address,
            'webUrl'  => $request->webUrl,
            'remark'  => $request->remark,
            'img_resolution'  => $request->img_resolution,
            'keyword'  => $request->keyword,
            'imgstatus'  => $request->imgstatus,
            'user_id'  => $request->user_id,
            'addedBy'  => $request->addedBy,
            'addedOn'  => $request->addedOn,
            'updatedBy'  => $request->updatedBy,
            'updatedOn'  => $request->updatedOn, 
            'image'       => $file,

        ]);
        if($customer){
              return redirect()->route('customer.index')->with("success","Record Updated successfully");
        }
      
    }
   
    public function delete($id)
    {
        DB::table("customers")->where('id',$id)->delete();
        return back()->with('success','customer deleted successfully');
    }


}
