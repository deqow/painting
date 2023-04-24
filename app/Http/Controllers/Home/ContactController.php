<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    public function ContactSetup(){

        $contact = Contact::find(1);
        return view('admin.contact.contact_all',compact('contact'));

    } // end method


    public function UpdateContact(Request $request){

        $contact_id = $request->id;

         Contact::findOrFail($contact_id)->update([
                'footer_id' => $request->footer_id,
                'map' => $request->map,
                'message' => $request->message,

            ]);
            $notification = array(
            'message' => 'Contact Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method

    public function HomeContact(){

        $contact = Contact::find(1);

        return view('frontend.contact',compact('contact'));
    
     } // End Method



    // public function StoreMessage(Request $request){

    //     Contact::insert([

    //         'footer_id' => $request->footer,
    //         'map' => $request->map,
    //         'message' => $request->message,
    //         'created_at' => Carbon::now(),

    //     ]);

    //      $notification = array(
    //         'message' => 'Your Message Submited Successfully', 
    //         'alert-type' => 'success'
    //     );

    //     return redirect()->back()->with($notification);


    // } // end mehtod 

    // public function ContactMessage(){

    //     $contacts = Contact::latest()->get();
    //     return view('admin.contact.allcontact',compact('contacts'));

    // } // end mehtod 


    // public function DeleteMessage($id){

    //  Contact::findOrFail($id)->delete();

    //  $notification = array(
    //         'message' => 'Your Message Deleted Successfully', 
    //         'alert-type' => 'success'
    //     );

    //     return redirect()->back()->with($notification);

    // } // end mehtod 





















    // public function FooterSetup(){

    //     $allfooter = Footer::find(1);
    //     return view('admin.footer.footer_all',compact('allfooter'));

    // } // end method

  
}
