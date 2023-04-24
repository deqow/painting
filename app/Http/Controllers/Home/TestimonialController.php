<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\MultiImage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;

class TestimonialController extends Controller
{
    //
    public function AllTestimonial()
    {
    $testimonial = Testimonial::latest()->get();
    return view('admin.testimonial.testimonial_all', compact('testimonial'));
     } // End Method

     public function AddTestimonial(){
        return view('admin.testimonial.testimonial_add');
    } // End Method


    public function StoreTestimonial(Request $request){

        $request->validate([
            'title' => 'required',

        ],[

            'title.required' => 'Testimonial title is Required',
        ]);

        $image = $request->file('client_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(150,150)->save('upload/testimonial/'.$name_gen);
            $save_url = 'upload/testimonial/'.$name_gen;

            Testimonial::insert([
                'title' => $request->title,
                'client_name' => $request->client_name,
                'description' => $request->description,
                'client_image' => $save_url,
                'created_at' => Carbon::now(),

            ]);
            $notification = array(
            'message' => 'testimonial Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.testimonial')->with($notification);

    }// End Method


    public function EditTestimonial($id){

        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.testimonial_edit',compact('testimonial'));
    }// End Method


   public function UpdateTestimonial(Request $request){

        $testimonial_id = $request->id;

        if ($request->file('client_image')) {
            $image = $request->file('client_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(150,150)->save('upload/testimonial/'.$name_gen);
            $save_url = 'upload/testimonial/'.$name_gen;

            Testimonial::findOrFail($testimonial_id)->update([
                'client_name' => $request->client_name,
                'title' => $request->title,
                'description' => $request->description,
                'client_image' => $save_url,

            ]);
            $notification = array(
            'message' => 'Testimonial Updated with Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.testimonial')->with($notification);

        } else{

            Testimonial::findOrFail($testimonial_id)->update([
                'client_name' => $request->client_name,
                'title' => $request->title,
                'description' => $request->description,

            ]);
            $notification = array(
            'message' => 'Testimonial Updated without Image Successfully',
            'alert-type' => 'success'
        );

       return redirect()->route('all.testimonial')->with($notification);

        } // end Else

     } // End Method


          public function DeleteTestimonial($id){

        $testimonial = Testimonial::findOrFail($id);
        $img = $testimonial->client_image;
        unlink($img);

        Testimonial::findOrFail($id)->delete();

         $notification = array(
            'message' => 'testimonial Image Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

     }// End Method

    //  public function PortfolioDetails($id){

    //     $portfolio = Testimonial::findOrFail($id);
    //     return view('frontend.portfolio_details',compact('portfolio'));
    //  }// End Method

     
     public function HomeTestimonial(){

        $testimonials = Testimonial::latest()->get();
        return view('frontend.home_all.testimonial',compact('testimonials'));
       } // End Method
}
