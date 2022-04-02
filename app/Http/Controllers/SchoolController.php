<?php

namespace App\Http\Controllers;

use App\Http\Middleware\SchoolAuth;

use App\Models\{School,User,Student};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=["schools"=>School::all()];
       return view("admin/manageSchools",$data);
    }

    public function home(Request $request){
       $user=User::where("email",session("user"))->first();
        
        $data["school"]=School::with("username")->where("user_id",$user->id)->first();
        
       return view("school/home",$data);
    }

    public function login(Request $req){
        
        return view("school/login");
    }
    public function create()
    {
        return view("admin/insertSchool");
    }


    public function insertResult(Request $request){
        $user=User::where("email",session("user"))->first();
        $school=School::where("user_id",$user->id)->first();
        if($request->method() == "POST"){
           $request->validate([
               "name"=>"required",
               "rollNo"=>"required",
               "reg_no"=>"required",
               "fatherName"=>"required",
               "motherName"=>"required",
               "maths"=>"required",
               "sci"=>"required",
               "sst"=>"required",
               "hindi"=>"required",
               "eng"=>"required",
           ]);
           $result=new Student();
           $result->name=$request->name;
           $result->rollNo=$request->rollNo;
           $result->reg_no=$request->reg_no;
           $result->fatherName=$request->fatherName;
           $result->motherName=$request->motherName;
           $result->maths=$request->maths;
           $result->sci=$request->sci;
           $result->sst=$request->sst;
           $result->hindi=$request->hindi;
           $result->eng=$request->eng;
           $result->school_id=$school->id;
           $result->save();

           return redirect()->route("school.dashboard");
        }
        return view("school/insertResult");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            "password"=>"required",
            "schoolName"=>"required",
            "schoolCode"=>"required",
            "address"=>"required",
            "city"=>"required",
            "state"=>"required",
            "schoolRegNo"=>"required",
            "est_year"=>"required",
            
        ]);
        $account= new User();
        $account->name=$request->name;
        $account->email=$request->email;
        $account->password=Hash::make($request->password);
        $account->userType=1;
        $account->save();
        $userId=$account->id;
        
        $school=new School();
        $school->schoolName=$request->schoolName;
        $school->schoolCode=$request->schoolCode;
        $school->schoolRegNo=$request->schoolRegNo;
        $school->address=$request->address;
        $school->city=$request->city;
        $school->state=$request->state;
        $school->est_year=$request->est_year;
        $school->user_id=$userId;
        $school->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
        
    }
}
