<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Contact;
use App\Models\Application;
use App\Models\Booking;
use App\Models\Project;
use App\Models\ProjectDetails;
use App\Models\ProjectImage;

class FrontendController extends Controller
{
    public function index()
    {
      $projectDetails  = Project::where('project_type','complete')->with(['image','details','master'])->get();
    //   echo "<pre>";
    //   print_r($projectDetails);
        return view('index',compact('projectDetails'));
    }

    public function ongoingPage()
    {
      $projectDetails  = Project::where('project_type','ongoing')->with(['image','details','master'])->get();
    //   echo "<pre>";
    //   print_r($projectDetails);
        return view('ongoing',compact('projectDetails'));
    }

    public function completePage()
    {
      $projectDetails  = Project::where('project_type','complete')->with(['image','details','master'])->get();
    //   echo "<pre>";
    //   print_r($projectDetails);
        return view('complete',compact('projectDetails'));
    }

    public function upcomingPage()
    {
      $projectDetails  = Project::where('project_type','upcoming')->with(['image','details','master'])->get();
    //   echo "<pre>";
    //   print_r($projectDetails);
        return view('upcoming',compact('projectDetails'));
    }

    public function addInformation(Request $request)
    {
        $indormation = new  Information();
        $indormation->name = $request->name;
        $indormation->email = $request->email;
        $indormation->phone = $request->phone;
        $indormation->save();
        return redirect()->back()->with('success', 'Your Information send successfully !!');   

    }

    public function contactPage()
    {
        return view('contact');
    }

    public function contactAdd(Request $request)
    {
        $contact = new  Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->with('success', 'Your Information send successfully !!');   

    }

    public function bookingAdd(Request $request)
    {
        $booking = new  Booking();
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->subject = 'Booking';
        $booking->message = $request->message;
        $booking->save();
        return redirect()->back()->with('success', 'Your Booking send successfully !!');   

    }

    

    public function aboutPage()
    {
        return view('about');
    }

    public function emiCal()
    {
        return view('emical');
    }

    public function applicationForm()
    {
        return view('application-page');
    }
    
    public function applicationAddForm(Request $request)
    {
    
        $applicationArr =[];

        if ($request->hasFile('upload_pan') && $request->hasFile('upload_aadher')) {

            for ($j=0; $j <count($request->upload_pan) ; $j++) { 

                //////////////////////// pan card uploads //////////////////////
                $file = $request->file('upload_pan');
                $destinationPath = 'pans';
                $file[$j]->move($destinationPath,$file[$j]->getClientOriginalName());
                ////////////////  AAdher card uploads //////////////////////

                $aadher = $request->file('upload_aadher');
                $destinationPathAadher = 'aadhers';
                $aadher[$j]->move($destinationPathAadher,$aadher[$j]->getClientOriginalName());

                $applicationArr [$j] = [
                    "application_name"=> $request->applicany_name[$j],
                    "phone_number" => $request->phone_number[$j],
                    "upload_pan" => $destinationPath."/".$file[$j]->getClientOriginalName(),
                    "upload_aadher" => $destinationPathAadher."/".$aadher[$j]->getClientOriginalName(),
                    "flat_number" => $request->flat_number,
                    "flat_area" => $request->flat_area,
                    "cover_car_parking_price" => $request->cover_car_parking_price,
                    "open_car_parking_price" => $request->open_car_parking_price,
                    "additional_cost" => $request->additional_cost,
                    "status" => 1,
                ];
            }
            $applocatin = Application::insert($applicationArr);
            return redirect()->back()->with('success', 'Your Application save successfully !!');   
        }
    }

    public function detailsView(Request $request , $id)
    {
        $projectDetails  = Project::where('id',$id)->with(['image','details','master'])->first();
        //   echo "<pre>";
          $features_menities =  explode(",", $projectDetails['features_menities']);
        return view('details',compact('projectDetails'));
    }
}
