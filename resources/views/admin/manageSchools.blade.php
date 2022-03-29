@extends('admin/base')

@section('content')
    <div class="container">
       <table class="table">
           <tr>
               <th>Id</th>
               <th>SchoolName</th>
               
               <th>SchoolCode</th>
               <th>Address</th>
               <th>City</th>
               <th>State</th>
               <th>Reg No</th>
               <th>Est_yesr</th>
               <th>Date of Creations</th>
               <th>Action</th>
           </tr>
           @foreach ($schools as $school)
               <tr>
                   <td>{{$school->id}}</td>
                   <td>{{$school->schoolName}}</td>
                   <td>{{$school->schoolCode}}</td>
                   
                   <td>{{$school->address}}</td>
                   <td>{{$school->city}}</td>
                   <td>{{$school->state}}</td>
                   <td>{{$school->schoolRegNo}}</td>
                   <td>{{$school->est_year}}</td>
                   <td>{{$school->created_at}}</td>
                   <td>
                       <a href="" class="btn btn-danger">X</a>
                       <a href="" class="btn btn-warning">Edit</a>
                       <a href="" class="btn btn-success">View</a>
                   </td>
               </tr>
           @endforeach
       </table>
    </div>
@endsection