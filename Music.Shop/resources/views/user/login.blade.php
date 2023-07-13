@extends('layouts.master')

@section('page')
    <title>Login</title>
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
                    <form class="form" action="{{ route('login.submit') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2"><label for="username">
                            Username<input type="text" name="username" class="form-control"></label>
                        </div>
                        <div class="mb-2"><label for="password">
                            Password<input type="password" name="password" class="form-control"></label>
                        </div>
                        <div class="mb-2">
                            <input type="submit" name="submit" value="submit" class="btn btn-primary">
                            <h6>No account yet? Sign up here:</h6>
                            <a href="{{ route('register') }}">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection