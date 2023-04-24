<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;


class ServiceCategoryController extends Controller
{
    public function AllServiceCategory(){

        $servicecategory = ServiceCategory::latest()->get();
        return view('admin.service_category.service_category_all',compact('servicecategory'));

    } // End Method

    public function AddServiceCategory(){

        return view('admin.service_category.service_category_add');
    } // End Method


    public function StoreServiceCategory(Request $request){

        ServiceCategory::insert([
                'service_category' => $request->service_category,
            ]);

            $notification = array(
            'message' => 'Service Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.service.category')->with($notification);


    } // End Method


    public function EditServiceCategory($id){

        $servicecategory = ServiceCategory::findOrFail($id);
        return view('admin.service_category.service_category_edit',compact('servicecategory'));

    } // End Method


    public function UpdateserviceCategory(Request $request,$id){

        ServiceCategory::findOrFail($id)->update([
                'service_category' => $request->service_category,

            ]);

            $notification = array(
            'message' => 'Service Category Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.service.category')->with($notification);

    } // End Method

    public function DeleteServiceCategory($id){

        ServiceCategory::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Service Category Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // End Method

}
