@extends('admin/base')

@section('content')
    <div class="container mt-3">
       <div class="row">
        <h1>Insert School</h1>
        <form action="{{ route('school.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="mb-3 col">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
                    @error('name')
                    <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3 col">
                    <label for="">email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                    @error('email')
                    <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3 col">
                    <label for="">Password</label>
                    <input type="text" name="password" class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                    <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>
              
            </div>
           <div class="row">
            <div class="mb-3 col-8">
                <label for="">SchoolName</label>
                <input type="text" name="schoolName" class="form-control @error('schoolName') is-invalid @enderror" value="{{old('schoolName')}}">
                @error('schoolName')
                <p class="text-danger small">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3 col">
                <label for="">SchoolCode</label>
                <input type="text" name="schoolCode" class="form-control @error('schoolCode') is-invalid @enderror" value="{{old('schoolCode')}}">
                @error('schoolCode')
                <p class="text-danger small">{{$message}}</p>
                @enderror
            </div>
           </div>
           <div class="row">
            <div class="mb-3 col-8">
                <label for="">Address</label>
                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{old('address')}}">
                @error('address')
                <p class="text-danger small">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3 col-4">
                <label for="">city</label>
                <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" value="{{old('city')}}">
                @error('city')
                <p class="text-danger small">{{$message}}</p>
                @enderror
            </div>
           </div>
           
            <div class="row">
                <div class="mb-3 col">
                    <label for="">state</label>
                    <input type="text" name="state" class="form-control @error('state') is-invalid @enderror" value="{{old('state')}}">
                    @error('state')
                    <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3 col">
                    <label for="">schoolRegNo</label>
                    <input type="text" name="schoolRegNo" class="form-control @error('schoolRegNo') is-invalid @enderror" value="{{old('schoolRegNo')}}">
                    @error('schoolRegNo')
                    <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3 col">
                    <label for="">est_year</label>
                    <input type="text" name="est_year" class="form-control @error('est_year') is-invalid @enderror" value="{{old('est_year')}}">
                    @error('est_year')
                    <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>
            </div>
            
            <div class="mb-3">
                <input type="submit" name="send" class="btn btn-success w-100" value="Add school">
            </div>
        </form>
       </div>
    </div>
@endsection