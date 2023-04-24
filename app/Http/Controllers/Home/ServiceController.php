<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Footer;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Contact;

use App\Models\Testimonial;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
     //
     public function AllService(){

        $services = Service::latest()->get();
        return view('admin.services.services_all',compact('services'));
    } // End Method

    public function AddService(){
        $categories = ServiceCategory::orderBy('service_category','ASC')->get();

        return view('admin.services.services_add', compact('categories'));
    }// End Method

    public function StoreService(Request $request){

        if ($request->file('service_image')) {
        $image = $request->file('service_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

           Image::make($image)->resize(800,500)->save('upload/service/'.$name_gen);
           $save_url = 'upload/service/'.$name_gen;

           Service::insert([
               'serviceCategory_id' => $request->serviceCategory_id,
               'service_title' => $request->service_title,
               'date' => $request->date,
               'service_description' => $request->service_description,
               'service_image' => $save_url,
               'created_at' => Carbon::now(),

           ]);
           $notification = array(
           'message' => 'Service Inserted with image Successfully',
           'alert-type' => 'success'
       );

       return redirect()->route('all.service')->with($notification);
    } else{

        Service::insert([
            'serviceCategory_id' => $request->serviceCategory_id,
            'service_title' => $request->service_title,
            'date' => $request->date,
            'service_description' => $request->service_description,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
        'message' => 'Service without image Inserted Successfully',
        'alert-type' => 'success'
    );

  return redirect()->route('all.service')->with($notification);

   } // end Else

   }// End Method

   public function EditService($id){

    $services = Service::findOrFail($id);
    $categories = ServiceCategory::orderBy('service_category','ASC')->get();
   return view('admin.services.services_edit',compact('services','categories'));

} // End Method

public function UpdateService(Request $request){

    $service_id = $request->id;

   if ($request->file('service_image')) {
       $image = $request->file('service_image');
       $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(800,500)->save('upload/service/'.$name_gen);
       $save_url = 'upload/service/'.$name_gen;

       Service::findOrFail($service_id)->update([
           'serviceCategory_id' => $request->serviceCategory_id,
           'service_title' => $request->service_title,
           'date' => $request->date,
           'service_description' => $request->service_description,
           'service_image' => $save_url,


       ]);
       $notification = array(
       'message' => 'Service Updated with Image Successfully',
       'alert-type' => 'success'
   );

   return redirect()->route('all.service')->with($notification);

   } else{

        Service::findOrFail($service_id)->update([
        'serviceCategory_id' => $request->serviceCategory_id,
        'service_title' => $request->service_title,
        'date' => $request->date,
        'service_description' => $request->service_description,

       ]);

       $notification = array(
       'message' => 'Service Updated without Image Successfully',
       'alert-type' => 'success'
   );

  return redirect()->route('all.service')->with($notification);

   } // end Else

} // End Method



public function DeleteService($id){

   $services = Service::findOrFail($id);
   $img = $services->service_image;
   if($img != null)
    {
   unlink($img);
    }

   Service::findOrFail($id)->delete();

    $notification = array(
       'message' => 'Service Deleted Successfully',
       'alert-type' => 'success'
   );

   return redirect()->back()->with($notification);

}// End Method


public function ServiceDetails($id){

    $allservices = Service::latest()->limit(5)->get();
    $services = Service::findOrFail($id);
    $testimonials = Testimonial::latest()->limit(3)->get();
    $contact = Contact::find(1);
    $categories = ServiceCategory::orderBy('service_category','ASC')->get();
    return view('frontend.service_details',compact('services','contact','allservices','categories','testimonials'));

 } // End Method

 public function CategoryService($id){

    $servicepost = Service::where('serviceCategory_id',$id)->orderBy('id','DESC')->get();
    $allservices = Service::latest()->limit(5)->get();
    $testimonials = Testimonial::latest()->limit(3)->get();
    $contact = Contact::find(1);
    $categories = serviceCategory::orderBy('service_category','ASC')->get();
    $categoryname = serviceCategory::findOrFail($id);
    return view('frontend.cat_service_details',compact('servicepost','contact','allservices','testimonials','categories','categoryname'));

 } // End Method
 public function HomeService(){

    // $categories = BlogCategory::orderBy('blog_category','ASC')->get();
    $allservices = Service::latest()->paginate(6);
    $testimonials = Testimonial::latest()->limit(3)->get();
    $contact = Contact::find(1);

    return view('frontend.service',compact('allservices','testimonials','contact'));

 } // End Method
}
