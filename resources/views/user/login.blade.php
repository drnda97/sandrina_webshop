@extends('layouts/app')

@section('content')
    <div class="register">
        <h1>Login </h1>
        <h3>You don't have an account</h3>
        <a href="/register" class="button">Register</a>
        <h3>OR</h3>
        <form action="/loginuser" method="post" name="register_form">
            <div class="form-controll">
                <label for="email">Email:</label>
                <input type="email" name="email">
            </div>
            <h2>Your Password</h2>
            <div class="form-controll">
                <label for="password">Password:</label>
                <input type="password" name="password">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection