@extends('layout')
@section('title')
Login
@endsection
@section('content')
    <div class="container p-5 my-5 border col-md-3">
        <form action=" {{ route('userAuth') }}" method="POST" accept-charset="UTF-8">
            @csrf
            <h1 class="text-success">User Login</h1>
            <div>
                <label class="text-muted">Email Address</label>
                <input type="email" class="col-md-12 mt-3 form-control" name="txtemail" required = "">
                <label class="text-muted">Password</label>
                <input type="password" class="col-md-12 mt-3 form-control" name="txtpassword" required = "">
                <input type="submit" class="btn btn-danger col-md-12 mt-3" name="btnLogin" value="login">
            </div>
        </form>

    </div>
@endsection