<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Faq;
use App\Http\Requests\FaqFormrequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class FaqController extends Controller
{

  public function store(FaqFormrequest $request){

        $faq_question = $request->old('faq_question');
         $faq_answer = $request->old('faq_answer');

         Faq::create([
         'faq_question' => $request ->faq_question,
         'faq_answer'=> $request ->faq_answer

          ]);

        return redirect()->back()->with('demo','created successfully');
  }


  public function editfaq($id){
    $faq=Faq::find($id);
    return view('faq.editfaq',compact('faq'));

  }
  public function updatefaq(Request $request, $id){

        $faq=Faq::find($id);
        $faq->update([
        'faq_question'=>request('faq_question'),
        'faq_answer'=>request('faq_answer'),
        ]);

   return redirect()->back()->with('update','update successfully');
  }

  public function allfaq(){

    $logged_user_id = Auth::id();
    $faqs = Faq::where('id','!=', $logged_user_id)->orderBy('id','desc')->paginate(6);
    return view('faq.allfaq',compact('faqs', 'logged_user_id'));
  }

  public function viewfaq(){
    return view("faq.viewfaq");
  }
  public function trashfaq(){

    $faqs = Faq::onlyTrashed()->orderBy('id','desc')->paginate(6);
    return view('faq.trashfaq',compact('faqs'));
  }

  public function destroy($id)
 {

   $faq=Faq::find($id);
   $faq->delete();
   return redirect()->back()->with('deletete','delete successfully');
 }


  public function restore($id)
 {

   $faq=Faq::withTrashed()->find($id);
   $faq->restore();
   return redirect()->back()->with('restore','restore successfully');
 }

  public function forcedelete($id)
 {

   $faq=Faq::withTrashed()->find($id);
   $faq->forcedelete();
   return redirect()->back()->with('forcedelete','delete successfully');
 }


 }
