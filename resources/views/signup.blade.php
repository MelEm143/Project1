@extends('layout')
@section('title')
Register
@endsection
@section('content')
    <div class="container py-6 my-5 border col-md-3">
        <form action="{{ route('saveRegistration') }}" method="POST" accept-charset = "UTF-8">
        @csrf
        <h1 class="text-success">User Registration</h1>
        <label class="col-md-12 text-muted" >First Name</label>
        <input type="text"class="col-md-12 form-control" name="txtfirstName">
        <label class="col-md-12 text-muted">Middle Name</label>
        <input type="text" class="col-md-12 form-control" name="txtmiddleName">
        <label class="col-md-12 text-muted" >Last Name</label>
        <input type="text"class="col-md-12 form-control" name="txtlastName">
        <label class="col-md-12 text-muted">Email Address</label>
        <input type="text" class="col-md-12 form-control" name="txtemail">
        <label class="col-md-12 text-muted" >Password</label>
        <input type="password" class="col-md-12 form-control" name="txtpassword">
        <button type="submit" class="col-md-12 mt-3 btn btn-danger">Register</button>
        </form>
    </div>
@endsection