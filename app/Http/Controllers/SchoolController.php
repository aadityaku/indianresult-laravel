<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\School;
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

    public function home(){
        $data=["schools"=>School::all()];
       return view("school/home",$data);
    }

    public function login(Request $req){
        
        return view("school/login");
    }
    public function create()
    {
        return view("admin/insertSchool");
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
        $userId=$account->save();
        
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
