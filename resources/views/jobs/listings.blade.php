@extends('layouts.app')

@section('content')
<p>listings</p>
    @if ($jobs->count())
        @foreach ($jobs as $job)
            <p> {{ $job->category }}</p>            
        @endforeach
    @else 
        <p> No jobs </p>
    @endif
@endsection