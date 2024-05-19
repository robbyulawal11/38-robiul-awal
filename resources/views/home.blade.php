@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-between align-items-center mt-5">
        <div>
            <h1 class="mb-3">Welcome to Mafaza Staff</h1>
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        </div>
        <div>
            <img src={{ asset('/image/hero/hero.png') }} alt="hero">
        </div>
    </div>
@endsection
