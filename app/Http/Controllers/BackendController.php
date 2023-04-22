<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Contact;
use App\Models\ProjectImage;
use App\Models\ProjectDetails;
use App\Models\masterPlan;
use App\Models\Project;

class BackendController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function editPoject()
    { 
        return view('admin.edit-project');
    }
    public function viewOngoingProject()
    { 
        return view('admin.view-ongoing-project');
    }
    public function application()
    { 
        return view('admin.application');
    }
    public function booking()
    { 
        return view('admin.booking');
    }

    public function login()
    { 
        return view('admin.login');
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
        $project->features_menities = implode(",",$request->features_menities);
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
}
