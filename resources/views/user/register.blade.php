@extends('layouts/app')

@section('content')
    <div class="register">
        <h1>Register</h1>
        <h3>So you can keep track what you're buying</h3>
        <form action="/saveuser" method="post" name="register_form">
            <div class="form-controll">
                <label for="first_name">First name:</label>
                <input type="text" name="first_name">
            </div>
            <div class="form-controll">
                <label for="Last_name">Last name:</label>
                <input type="text" name="Last_name">
            </div>
            <div class="form-controll">
                <label for="email">Email:</label>
                <input type="email" name="email">
            </div>
            <h2>Your Password</h2>
            <div class="form-controll">
                <label for="password">Password:</label>
                <input type="password" name="password">
            </div>
            <div class="form-controll">
                <label for="re_password">Retype Password:</label>
                <input type="password" name="re_password">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection