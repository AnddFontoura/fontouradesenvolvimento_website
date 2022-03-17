@extends('layouts.website')

@section('content')

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

    <div class="alert alert-success" role="alert">
        You are logged in!
    </div>
@endsection
