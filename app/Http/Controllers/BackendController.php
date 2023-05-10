<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Contact;
use App\Models\ProjectImage;
use App\Models\ProjectDetails;
use App\Models\masterPlan;
use App\Models\Application;
use App\Models\Project;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
class BackendController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function editPoject($type)
    { 
        $projectDetails  = Project::where('project_type',$type)->with(['image','details','master'])->first();
        // $projects  = Project::with(['image','details','master'])->get();
        // echo "<pre>";
        // print_r($projectDetails);
        // die;
        $features_menities =  explode(",", $projectDetails['features_menities']);        
        return view('admin.edit-project',compact('projectDetails','features_menities'));
    }
    public function viewOngoingProject($type)
    { 
      $projectDetails  = Project::where('project_type',$type)->with(['image','details','master'])->get();

        return view('admin.view-ongoing-project',compact('projectDetails','type'));
    }
    public function application()
    { 
        $applications = Application::get();
        return view('admin.application',compact('applications'));
    }
    public function booking()
    { 
        $bookings = Booking::get();
        return view('admin.booking',compact('bookings'));
    }

    public function login(Request  $request)
    { 
        return view('admin.login');
    }

    public function loginPage(Request  $request)
    { 
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard');
        }else{
            return back()->withInput();
        }
       
    }

    

    public function Inquerys()
    {
        $inqueys = Information::orderBy('id', 'DESC')->get();

        return view('admin.inquery',compact('inqueys'));
    }

    public function Contacts()
    {
        $contacts = Contact::orderBy('id', 'DESC')->get();

        return view('admin.contact',compact('contacts'));
    }

    public function Projects()
    {
        return view('admin.projects');
    }

    public function projectSubmit(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die;
        $project = new Project();
        if ($request->hasFile('cover_photo')) {
            $file = $request->file('cover_photo');
            $destinationPath = 'cover_photos';
            $file->move($destinationPath,$file->getClientOriginalName());
        }
        $project->project_type = $request->project_type;
        $project->site_name = $request->site_name;
        $project->site_details = $request->site_details;
        $project->location = $request->location;
        $project->one_bhk = $request->one_bhk;
        $project->two_bhk = $request->two_bhk;
        $project->three_bhk = $request->three_bhk;
        $project->location_url = $request->location_url;
        $project->features_menities = $request->features_menities ? implode(",",$request->features_menities) : '';
        $project->cover_photo = $destinationPath."/".$file->getClientOriginalName();
        $project->status = 1;
        $project->save();

        $projectDetails = new ProjectDetails();

        $projectDetailsArr = [];
        if ($request->one_bhk == "yes") {
            $projectDetailsArr[0] = [
                "projects_id"=> $project->id,
                "type_of_bhk"=> "1 BHK",
                "bhk_type"=> $request->one_bhk_type,
                "bhk_bedroom"=> $request->one_bhk_bedroom,
                "bhk_bathroom"=> $request->one_bhk_bathroom,
                "bhk_sqft"=> $request->one_bhk_sqft,
                "status"=> 1,
            ];
        }

        if ($request->two_bhk == "yes") {
            $projectDetailsArr[1] = [
                "projects_id"=> $project->id,
                "type_of_bhk"=> "2 BHK",
                "bhk_type"=> $request->two_bhk_type,
                "bhk_bedroom"=> $request->two_bhk_bedroom,
                "bhk_bathroom"=> $request->two_bhk_bathroom,
                "bhk_sqft"=> $request->two_bhk_sqft,
                "status"=> 1,
            ];
        }

        if ($request->three_bhk == "yes") {
            $projectDetailsArr[2] = [
                "projects_id"=> $project->id,
                "type_of_bhk"=> "3 BHK",
                "bhk_type"=> $request->three_bhk_type,
                "bhk_bedroom"=> $request->three_bhk_bedroom,
                "bhk_bathroom"=> $request->three_bhk_bathroom,
                "bhk_sqft"=> $request->three_bhk_sqft,
                "status"=> 1,
            ];
        }
        $applocatin = ProjectDetails::insert($projectDetailsArr);

        if ($request->hasFile('bakgroung_image')) {
            $coverPhotoArr = [];

            for ($j=0; $j <count($request->bakgroung_image) ; $j++) { 

                //////////////////////// pan card uploads //////////////////////
                $fileback = $request->file('bakgroung_image');
                $destinationPathback = 'bakgroung_images';
                $fileback[$j]->move($destinationPathback,$fileback[$j]->getClientOriginalName());
                ////////////////  AAdher card uploads //////////////////////

                $coverPhotoArr [$j] = [
                    "projects_id"=> $project->id,
                    "bakgroung_image" => $destinationPathback."/".$fileback[$j]->getClientOriginalName(),
                    "status" => 1,
                ];
            }
            $applocatin = ProjectImage::insert($coverPhotoArr);

        }

        if ($request->hasFile('master_plan_image')) {
            $coverPhotoArr = [];

            for ($k=0; $k <count($request->master_plan_image) ; $k++) { 

                //////////////////////// pan card uploads //////////////////////
                $fileback = $request->file('master_plan_image');
                $destinationmaster_plan_image= 'master_plan_image';
                $fileback[$k]->move($destinationmaster_plan_image,$fileback[$k]->getClientOriginalName());
                ////////////////  AAdher card uploads //////////////////////

                $coverPhotoArr [$k] = [
                    "projects_id"=> $project->id,
                    "master_plan_image" => $destinationmaster_plan_image."/".$fileback[$k]->getClientOriginalName(),
                    "status" => 1,
                ];
            }
            $applocatin = masterPlan::insert($coverPhotoArr);

        }
        return redirect()->back()->with('success', 'Your Application save successfully !!');
    }

    public function projectEdit(Request $request)
    {

        $projectArr  = array(
        'project_type' => $request->project_type,
        'site_name' => $request->site_name,
        'site_details' => $request->site_details,
        'location' => $request->location,
        'one_bhk' => $request->one_bhk,
        'two_bhk' => $request->two_bhk,
        'three_bhk' => $request->three_bhk,
        'location_url' => $request->location_url,
        'features_menities' => implode(",",$request->features_menities)
        );

        $projectUpdate = Project::where('id',$request->project_id)->update($projectArr);

        if ($request->one_bhk == "yes") {
            $oneBhkDetails = array(
                "projects_id"=> $request->project_id,
                "type_of_bhk"=> "1 BHK",
                "bhk_type"=> $request->one_bhk_type,
                "bhk_bedroom"=> $request->one_bhk_bedroom,
                "bhk_bathroom"=> $request->one_bhk_bathroom,
                "bhk_sqft"=> $request->one_bhk_sqft,
                "status"=> 1,
                
            );

            if ($request->details_id != "") {
                ProjectDetails::where('id',$request->details_id)->update($oneBhkDetails);
            } else {
                ProjectDetails::create($oneBhkDetails);
            }
            
        }

        if ($request->two_bhk == "yes") {
            $projectDetailsArrTwo= [
                "projects_id"=> $request->project_id,
                "type_of_bhk"=> "2 BHK",
                "bhk_type"=> $request->two_bhk_type,
                "bhk_bedroom"=> $request->two_bhk_bedroom,
                "bhk_bathroom"=> $request->two_bhk_bathroom,
                "bhk_sqft"=> $request->two_bhk_sqft,
                "status"=> 1,

            ];

            if ($request->details_id_two != "") {
                ProjectDetails::where('id',$request->details_id_two)->update($projectDetailsArrTwo);
            } else {
                ProjectDetails::create($projectDetailsArrTwo);
            }
        }

        if ($request->three_bhk == "yes") {
            $projectDetailsArrThree = [
                "projects_id"=> $request->project_id,
                "type_of_bhk"=> "3 BHK",
                "bhk_type"=> $request->three_bhk_type,
                "bhk_bedroom"=> $request->three_bhk_bedroom,
                "bhk_bathroom"=> $request->three_bhk_bathroom,
                "bhk_sqft"=> $request->three_bhk_sqft,
                "status"=> 1,
            ];

            if ($request->details_id_three > 0  && isset($request->details_id_three)) {
                ProjectDetails::where('id',$request->details_id_three)->update($projectDetailsArrThree);
            } else {
                ProjectDetails::create($projectDetailsArrThree);
            }
        }

        if ($request->hasFile('master_plan_image')) {
            $coverPhotoArr = [];

            for ($k=0; $k <count($request->master_plan_image) ; $k++) { 

                //////////////////////// pan card uploads //////////////////////
                $fileback = $request->file('master_plan_image');
                $destinationmaster_plan_image= 'master_plan_image';
                $fileback[$k]->move($destinationmaster_plan_image,$fileback[$k]->getClientOriginalName());
                ////////////////  AAdher card uploads //////////////////////

                $coverPhotoArr [$k] = [
                    "projects_id"=> $request->project_id,
                    "master_plan_image" => $destinationmaster_plan_image."/".$fileback[$k]->getClientOriginalName(),
                    "status" => 1,
                ];
            }
            $applocatin = masterPlan::insert($coverPhotoArr);
        }
        return redirect()->route('admin.dashboard')->with('success', 'Your Application save successfully !!');
    }
}
