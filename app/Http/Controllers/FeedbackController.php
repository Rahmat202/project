<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::orderBy('id','desc')->get();
        return  view('backend.Feedback.index',compact('feedbacks'));
    }

    public function create()
    {
       
        return view('backend.Feedback.create');
    }

    public function store(Request $request){
      
     
        $feedback = Feedback::create([
            'system_date'     => $request->system_date,
           
            'ip_address'          => $request->ip_address,
           
        ]);
        if ($feedback) {
            // return back()->with('success', 'Success! customer created');
            return redirect()->route('feedback.index')->with("success","Record added successfully");
        }
       
        
    }


    public function edit($id)
    {
        $feedback = Feedback::find($id);
      
       return view('backend.Feedback.edit',compact('feedback'));
    }
    public function update(Request $request, Feedback $feedback)
    {
       
       $feedback = Feedback::where('id',$request->id)->update([
            'system_date'     => $request->system_date,
            
            'ip_address'          => $request->ip_address,
            
           
        ]);
        if ($feedback) {
        return redirect()->route('feedback.index')->with('success','Record Updated successfully');
    }
}
    public function delete($id)
    {
        DB::table("feedback")->where('id',$id)->delete();
        return back()->with('success','feedback deleted successfully');
    }
}
