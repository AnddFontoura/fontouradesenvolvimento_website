@extends('layouts.website')

@section('content')

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

    <div class="alert alert-success" role="alert">
        Seja bem vindo de volta, <b> {{ Auth::user()->name }} </b> !
    </div>
@endsection
