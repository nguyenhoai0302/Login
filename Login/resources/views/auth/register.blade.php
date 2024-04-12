@extends('layouts.app')

@section('content')
<div class="form-panel two">
    <div class="form-header">
        <h1>
            Register Account
        </h1>
    </div>
    <div class="form-content">
        <form>
            <div class="form-group">
                <label for="username">Username</label><input id="username" name="username" required="" type="text"
                    fdprocessedid="2hokj">
            </div>
            <div class="form-group">
                <label for="password">Password</label><input id="password" name="password" required=""
                    type="password" fdprocessedid="bhnws">
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password</label><input id="cpassword" name="cpassword" required=""
                    type="password" fdprocessedid="bf88q4e">
            </div>
            <div class="form-group">
                <label for="email">Email Address</label><input id="email" name="email" required="" type="email"
                    fdprocessedid="zau41">
            </div>
            <div class="form-group">
                <button type="submit" fdprocessedid="ox848x">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection
