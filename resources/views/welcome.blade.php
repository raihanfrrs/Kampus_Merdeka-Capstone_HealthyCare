@extends('layouts.main')

@auth
    @if (auth()->user()->level === 'administrator')
        @section('admin-section')
            @include('administrator.dashboard')
        @endsection
    @elseif (auth()->user()->level === 'patient')
        @section('section')
            @include('patient.dashboard')
        @endsection
    @endif
@else
    @section('section')
        @include('patient.dashboard')
    @endsection
@endauth