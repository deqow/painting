<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Carbon;
use App\Models\Team;
use App\Models\Contact;
use App\Models\Testimonial;
use App\Models\BlogCategory;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
     //
     public function AllBlog(){

        $blogs = Blog::latest()->get();
        return view('admin.blogs.blogs_all',compact('blogs'));
    } // End Method

    public function AddBlog(){
        $categories = BlogCategory::orderBy('blog_category','ASC')->get();
        $teams = Team::orderBy('name','ASC')->get();

        return view('admin.blogs.blogs_add', compact('categories','teams'));
    }// End Method

    public function StoreBlog(Request $request){

        $image = $request->file('blog_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

           Image::make($image)->resize(800,500)->save('upload/blog/'.$name_gen);
           $save_url = 'upload/blog/'.$name_gen;

           Blog::insert([
               'blog_category_id' => $request->blog_category_id,
               'team_id' => $request->team_id,
               'blog_title' => $request->blog_title,
               'date' => $request->date,
               'blog_description' => $request->blog_description,
               'blog_image' => $save_url,
               'created_at' => Carbon::now(),

           ]);
           $notification = array(
           'message' => 'Blog Inserted Successfully',
           'alert-type' => 'success'
       );

       return redirect()->route('all.blog')->with($notification);

   }// End Method

   public function EditBlog($id){

    $blogs = Blog::findOrFail($id);
    $categories = BlogCategory::orderBy('blog_category','ASC')->get();
    $teams = Team::orderBy('name','ASC')->get();
   return view('admin.blogs.blogs_edit',compact('blogs','categories','teams'));

} // End Method

public function UpdateBlog(Request $request){

    $blog_id = $request->id;

   if ($request->file('blog_image')) {
       $image = $request->file('blog_image');
       $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(800,500)->save('upload/blog/'.$name_gen);
       $save_url = 'upload/blog/'.$name_gen;

       Blog::findOrFail($blog_id)->update([
           'blog_category_id' => $request->blog_category_id,
           'team_id' => $request->team_id,
           'blog_title' => $request->blog_title,
           'date' => $request->date,
           'blog_description' => $request->blog_description,
           'blog_image' => $save_url,


       ]);
       $notification = array(
       'message' => 'Blog Updated with Image Successfully',
       'alert-type' => 'success'
   );

   return redirect()->route('all.blog')->with($notification);

   } else{

       Blog::findOrFail($blog_id)->update([
        'blog_category_id' => $request->blog_category_id,
        'team_id' => $request->team_id,
        'blog_title' => $request->blog_title,
        'date' => $request->date,
        'blog_description' => $request->blog_description,

       ]);

       $notification = array(
       'message' => 'Blog Updated without Image Successfully',
       'alert-type' => 'success'
   );

  return redirect()->route('all.blog')->with($notification);

   } // end Else

} // End Method



public function DeleteBlog($id){

   $blogs = Blog::findOrFail($id);
   $img = $blogs->blog_image;
   unlink($img);

   Blog::findOrFail($id)->delete();

    $notification = array(
       'message' => 'Blog Deleted Successfully',
       'alert-type' => 'success'
   );

   return redirect()->back()->with($notification);

}// End Method


public function BlogDetails($id){

    $allblogs = Blog::latest()->limit(5)->get();
    $testimonials = Testimonial::latest()->limit(3)->get();
    $blogs = Blog::findOrFail($id);
    $categories = BlogCategory::orderBy('blog_category','ASC')->get();
    return view('frontend.blog_details',compact('blogs','allblogs','categories','testimonials'));

 } // End Method

 public function CategoryBlog($id){

    $blogpost = Blog::where('blog_category_id',$id)->orderBy('id','DESC')->get();
    $testimonials = Testimonial::latest()->limit(3)->get();
    $contact = Contact::find(1);

    $allblogs = Blog::latest()->limit(5)->get();
    $categories = BlogCategory::orderBy('blog_category','ASC')->get();
    $categoryname = BlogCategory::findOrFail($id);
    return view('frontend.cat_blog_details',compact('blogpost','contact','testimonials','allblogs','categories','categoryname'));

 } // End Method
 public function HomeBlog(){

    // $categories = BlogCategory::orderBy('blog_category','ASC')->get();
    $allblogs = Blog::latest()->paginate(2);
    return view('frontend.blog',compact('allblogs'));

 } // End Method
}
