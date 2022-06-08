@extends('layouts.app')

@section('cssImports')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
   <div class="container">
      <div class="row loginForm">
      <h1>Login</h1>
         <form action="./login"  method="POST">
            @csrf
            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Email address</label>
               <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Password</label>
               <input type="password" class="form-control" id="password" name="password" require>
            </div>
            @error('error')
               <p class="error"> Error</p>
            @enderror
            <button type="submit" class="btn btn-primary bt-100">Login</button>
         </form>
      </div>
      
   </div>
   
@endsection 