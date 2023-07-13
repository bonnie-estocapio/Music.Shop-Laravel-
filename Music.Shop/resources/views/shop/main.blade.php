@extends('layouts.master')

@section('page')
    <title>Main</title>
@endsection

@section('content')
<main role="main" class="container">
    <div class="row">
        @foreach ($track as $track)
        <div class="col-sm-3 col-lg-3 col-md-3">
            <div class="card">
            <div class="thumbnail">
                    <img src="../albumArt/{{ $track['album'] }}.jpg" alt="Album" class="albumArt">
                    <h4 class="pull-right">$ {{ $track['price'] }}</h4>
                    <h4>{{ $track['title'] }}</h4>
                    <p>{{ $track['artist'] }}</p>
                    <p>{{ $track['album'] }}</p>
                    <p>{{ $track['year'] }}</p>
                    
                    {{-- @php
                        $ownership = 0;
                    @endphp --}}

                    @switch($track['status'])
                        @case(0)
                            <a class="btn btn-primary" href="">Add to Cart</a>
                            @break
                        @case('cart')
                            <a class="btn btn-primary" href="">Remove from Cart</a>
                            @break
                        @case('owned')
                            <a class="btn btn-primary" href="">Download</a>
                            @break
                        @default
                    @endswitch

                </div>
            </div>
        </div>
        @endforeach
    </div>
</main>
@endsection