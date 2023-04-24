<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;


class TeamController extends Controller
{
//
public function AllTeam()
{
$team = Team::latest()->get();
return view('admin.team.team_all', compact('team'));
 } // End Method

 public function AddTeam(){
    return view('admin.team.team_add');
} // End Method


public function StoreTeam(Request $request){

    if ($request->file('team_image'))
    {
        $image = $request->file('team_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(500,500)->save('upload/team/'.$name_gen);
        $save_url = 'upload/team/'.$name_gen;

        Team::insert([
            'name' => $request->name,
            'facebook' => $request->facebook,
            'whatsapp' => $request->whatsapp,
            'designation' => $request->designation,
            'team_image' => $save_url,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
        'message' => 'team Inserted Successfully',
        'alert-type' => 'success'
    );
    return redirect()->route('all.team')->with($notification);

    }
    else{
        Team::insert([
            'name' => $request->name,
            'facebook' => $request->facebook,
            'whatsapp' => $request->whatsapp,
            'designation' => $request->designation,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
        'message' => 'Team inserted without Image Successfully',
        'alert-type' => 'success'
    );

   return redirect()->route('all.team')->with($notification);

    } // end Else




}// End Method


public function EditTeam($id){

    $team = Team::findOrFail($id);
    return view('admin.team.team_edit',compact('team'));
}// End Method


public function UpdateTeam(Request $request){

    $team_id = $request->id;

    if ($request->file('team_image')) {
        $image = $request->file('team_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(150,150)->save('upload/team/'.$name_gen);
        $save_url = 'upload/team/'.$name_gen;

        Team::findOrFail($team_id)->update([
            'name' => $request->name,
            'facebook' => $request->facebook,
            'whatsapp' => $request->whatsapp,
            'designation' => $request->designation,
            'team_image' => $save_url,

        ]);
        $notification = array(
        'message' => 'Team Updated with Image Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.team')->with($notification);

    } else{

        Team::findOrFail($team_id)->update([
            'name' => $request->name,
            'facebook' => $request->facebook,
            'whatsapp' => $request->whatsapp,
            'designation' => $request->designation,

        ]);
        $notification = array(
        'message' => 'Team Updated without Image Successfully',
        'alert-type' => 'success'
    );

   return redirect()->route('all.team')->with($notification);

    } // end Else

 } // End Method


      public function DeleteTeam($id){

    $team = Team::findOrFail($id);

    $img = $team->team_image;
    if($img != null)
    {
    unlink($img);
    }

    Team::findOrFail($id)->delete();

     $notification = array(
        'message' => 'team Image Deleted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

 }// End Method




 public function HomeTeam(){

    $teams = Team::latest()->get();
    return view('frontend.about_page',compact('teams'));
   } // End Method
}
