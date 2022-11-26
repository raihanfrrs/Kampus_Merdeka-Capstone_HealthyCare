@extends('layouts.main')

@section('section')
    @auth
        @if (auth()->user()->level === 'administrator')
            @include('administrator.dashboard')
        @elseif (auth()->user()->level === 'patient')
            @include('patient.dashboard')
        @endif
    @else
        @include('patient.dashboard')
    @endauth
@endsection