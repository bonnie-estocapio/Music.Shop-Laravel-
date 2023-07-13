@extends('layouts.master')

@section('page')
    <title>Register</title>
@endsection

@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-md-4">
            <h2 class="mb-4">Login</h2>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif

            <div class="card">
                <div class="card-body">
                    <form class="form" action="{{ route('register.submit') }}" method="post" enctype="multipart/form-data">
                        
                        @csrf
                        <div class="mb-2"><label for="username">
                            Username<input type="text" name="username" class="form-control"></label>
                            <h6>* Must have 3-20 Characters</h6>
                        </div>

                        <div class="mb-2"><label for="password">
                            Password<input type="password" name="password" class="form-control"></label>
                            <h6>* Must have atleast 1 of each: uppercase letter, lowercase letter, number, and symbol</h6>
                        </div>

                        <div class="mb-2"><label for="fullName">
                            Full Name<input type="text" name="fullName" class="form-control"></label>
                            <h6>* Must contain letters only</h6>
                        </div>

                        <div class="mb-2"><label for="address">
                            Address<input type="text" name="address" class="form-control"></label>
                            <h6>* Must follow the format: Number(if availables) Street/Sitio, Barangay, City/Municipality, Province </h6>
                        </div>

                        <div class="mb-2"><label for="email">
                            Email<input type="text" name="email" class="form-control"></label>
                            <h6>* Must follow the usual email format </h6>
                        </div>

                        <div class="mb-2">
                            <input type="submit" name="submit" value="Register" class="btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection