@extends('school/base')

@section('content')
    <div class="container">
        <div class="row">
           <div class="col-9">
               <div class="row mt-3">
                   <div class="col-4 mb-2">
                       <a href="" class="btn btn-danger w-100 btn-lg py-4 shadow">View Students</a>
                   </div>
                   <div class="col-4 mb-2">
                       <a href="{{ route('school.insertResult') }}" class="btn btn-warning w-100 btn-lg py-4 shadow">Insert Results</a>
                   </div>
                   <div class="col-4 mb-2">
                       <a href="" class="btn btn-success w-100 btn-lg py-4 shadow">Download Results</a>
                   </div>
                   <div class="col-4 mb-2">
                       <a href="" class="btn btn-info w-100 btn-lg py-4"> Manage Results</a>
                   </div>
                   <div class="col-4 mb-2">
                       <a href="" class="btn btn-primary w-100 btn-lg py-4"> Manage Results</a>
                   </div>
                   <div class="col-4 mb-2">
                       <a href="" class="btn btn-dark w-100 btn-lg py-4"> Manage Results</a>
                   </div>
                   <div class="col-4 mb-2">
                       <a href="" class="btn btn-secondary w-100 btn-lg py-4"> Manage Results</a>
                   </div>
               </div>
            </div>
            <div class="col-3">
                <table class="table">
                    <tr>
                        <th>School Name</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>School Code</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Reg No</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Est Year</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td></td>
                    </tr>
                </table>
            </div> 
        </div>
    </div>
@endsection