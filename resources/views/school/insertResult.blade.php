@extends('school/base')

@section('content')
    <div class="container">
        <div class="row mt-2">
           <div class="col-9 mx-auto">
               <div class="card">
                   <div class="card-body">
                       <h5>Insert Results</h5>
                       <form action="" method="POST">
                           @csrf
                           <div class="mb-3">
                               <label for="">Name</label>
                               <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                               @error('name')
                               <p class="text-danger small">{{$message}}</p>
                               @enderror
                           </div>
                           <div class="mb-3">
                               <label for="">rollNo</label>
                               <input type="text" name="rollNo" class="form-control @error('rollNo') is-invalid @enderror" value="{{ old('rollNo') }}">
                               @error('rollNo')
                               <p class="text-danger small">{{$message}}</p>
                               @enderror
                           </div>
                           <div class="mb-3">
                               <label for="">reg_no</label>
                               <input type="text" name="reg_no" class="form-control @error('reg_no') is-invalid @enderror" value="{{ old('reg_no') }}">
                               @error('reg_no')
                               <p class="text-danger small">{{$message}}</p>
                               @enderror
                           </div>
                           <div class="mb-3">
                               <label for="">Father Name</label>
                               <input type="text" name="fatherName" class="form-control @error('fatherName') is-invalid @enderror" value="{{ old('fatherName') }}">
                               @error('fatherName')
                               <p class="text-danger small">{{$message}}</p>
                               @enderror
                           </div>
                           <div class="mb-3">
                               <label for="">motherName</label>
                               <input type="text" name="motherName" class="form-control @error('motherName') is-invalid @enderror" value="{{ old('motherName') }}">
                               @error('motherName')
                               <p class="text-danger small">{{$message}}</p>
                               @enderror
                           </div>
                          @php
                              $subjects=["maths","sci","sst","hindi","eng"];
                          @endphp
                          <div class="row">
                              @foreach ($subjects as $subject)
                                 <div class="mb-3 col">
                                     <label for=""><?= $subject ?></label>
                                     <input type="text" name="<?= $subject ?>" class="form-control @error($subject) is-invalid @enderror" value="{{ old($subject) }}">
                                     @error($subject)
                                     <p class="text-danger small">{{$message}}</p>
                                     
                                     @enderror
                                </div> 
                              @endforeach
                          </div>
                          <div class="mb-3">
                              <input type="submit" name="send"  class="btn btn-success w-100">
                          </div>
                       </form>
                   </div>
               </div>
            </div>
            
        </div>
    </div>
@endsection