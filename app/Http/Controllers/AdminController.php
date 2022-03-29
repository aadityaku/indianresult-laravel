<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

   public function index(Request $req){
       return view("admin/dashboard");
   }
   public function manageSchools(){
       
   }
   public function addSchools(Request $req){
       $req->validate([
           "name"=>"required",
           "schoolCode"=>"required",
           "schoolName"=>"required",
           "address"=>"required",
           "city"=>"required",
           "state"=>"required",
           "schoolRegNo"=>"required",
           "est_year"=>"required",
           "est_year"=>"required",
       ]);

   }
}
