@extends('admin/base')

@section('content')
    <div class="container">
       <table class="table">
           <tr>
               <th>Id</th>
               <th>Roll No</th>
               <th>School Name</th>
               <th>Reg_No</th>
               <th>FatherName</th>
               <th>MotherName</th>
               <th>maths</th>
               <th>Science</th>
               <th>SSt</th>
               <th>hindi</th>
               <th>Engilish</th>
               <th>Action</th>
           </tr>
           @foreach ($results as $school)
               <tr>
                   <td>{{$school->id}}</td>
                   <td>{{$school->rollNo}}</td>
                   <td>{{$school->schoolName}}</td>
                   <td>{{$school->reg_no}}</td>
                   <td>{{$school->fatherName}}</td>
                   <td>{{$school->motherName}}</td>
                   <td>{{$school->maths}}</td>
                   <td>{{$school->sci}}</td>
                   <td>{{$school->sst}}</td>
                   <td>{{$school->hindi}}</td>
                   <td>{{$school->eng}}</td>
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