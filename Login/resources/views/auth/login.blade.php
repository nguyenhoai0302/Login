@extends('layouts.app')

@section('content')
<style>
    .card {
        position: relative !important;
    }
    .card::after {
        content: '';
        margin: 0 !important;
        padding: 0 !important;
        position: absolute !important;
        right: 0 !important;
        top: 0 !important;
        bottom: 0 !important;
        width: 20px !important;
        background-color: #007bff !important;
    }
</style>

<body style=" background: rgb(52,170,232);background: linear-gradient(90deg, rgba(52,170,232,1) 0%, rgba(73,215,223,1) 43%, rgba(128,234,255,1) 100%);">
    <section class="bg-light py-3 py-md-5" style=" background: rgb(52,170,232);background: linear-gradient(90deg, rgba(52,170,232,1) 0%, rgba(73,215,223,1) 43%, rgba(128,234,255,1) 100%);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card border border-light-subtle rounded-3 shadow-sm">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <h2 class=" fw-normal text-center text-primary mb-4 me-5 pe-5"><b>Account Login</b></h2>
                            <form action="/api/auth/login" method="POST" cfrs>
                                <div class="row gy-2 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control bg-secondary-subtle" name="email" id="email" placeholder="Enter Email" required>
                                            <label for="email" class="form-label ">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control bg-secondary-subtle" name="password" id="password" value="" placeholder="Enter Password" required>
                                            <label for="password" class="form-label">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex gap-2 justify-content-between">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" name="rememberMe" id="rememberMe">
                                                <label class="form-check-label text-secondary" for="rememberMe">
                                                    Remember Me
                                                </label>
                                            </div>
                                            <a href="/" class="link-primary text-decoration-none">Forgot password?</a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid my-3">
                                            <button class="btn btn-primary btn-lg" type="submit">Log in</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="/" class="text-white" style="text-decoration: none;">
                            <-View on Behance </a>
                        <a href="/" class="text-white" style="text-decoration: none;">
                            View on Github->
                        </a>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
</body>
@endsection
