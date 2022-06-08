@extends('layouts.app')

@section('cssImports')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
   <div class="container">
      <div class="row loginForm">
      <h1>Register</h1>
         <form action="./register"  method="POST">
            @csrf
            <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Name</label>
               <input type="text" class="form-control" id="name" name="name" required>
            </div>
            @error('name')
               <p class="error"> {{$message}}</p>
            @enderror
            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Email address</label>
               <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
            </div>
            @error('email')
               <p class="error"> {{$message}}</p>
            @enderror
            <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Password</label>
               <input type="password" class="form-control" id="password" name="password" required>
            </div>
            @error('password')
               <p class="error"> {{$message}}</p>
            @enderror
            <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Repit password</label>
               <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
         </form>
      </div>
      
   </div>
   
@endsection 