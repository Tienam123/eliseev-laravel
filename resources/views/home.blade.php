@extends('layouts.app')

@section('breadcrumbs')
<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('login')}}">Login</a></li>
    <li class="breadcrumb-item">Reset</li>
</ul>
@endsection
@section('content')
    <div class="row justify-content-center">
        @guest

        @else
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        @endguest
    </div>
@endsection
