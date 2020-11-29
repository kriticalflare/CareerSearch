@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Job Listings</h1>
        @if ($jobs->count())
            @foreach ($jobs as $job)
            <div class="card mb-2">
                <div class="card-body ">
                  <div class="row no-gutters">
                    <div class="col-lg-10 col-12 order-lg-1 order-2">
                        <h5><b>{{ $job->category}}</b></h5>
                        <small class="text-muted">{{ $job->company_name}}</small>
                    </div>
                    <div class="col-lg-2 col-12 order-lg-2 order-1">
                        <img src="{{ $job->company_logo }}" alt="" srcset="" height="64px">
                    </div>
                  </div>
                  <div class="row no-gutters ">
                        <img src="{{ URL::asset('images/location.png') }}" class="mr-1"  style="margin-top: 2.5px" alt="location image" height="16px">
                        <p>{{ $job->location }}</p>
                  </div>
                  <div class="row no-gutters">
                        <div class="col-lg-3  col-6">
                            <div class="row no-gutters">
                                <img src="{{ URL::asset('images/play-button.png') }}" class="mr-1" style="margin-top: 2.5px" alt="location image" height="16px">
                                <p style="color:grey">START DATE</p>
                            </div>
                            <p> {{ \Carbon\Carbon::parse($job->apply_by)->format('j F, Y')}}</p>
                        </div>
                        <div class="col-lg-3  col-6">
                            <div class="row no-gutters">
                                <img src="{{ URL::asset('images/calendar.png') }}" class="mr-1" style="margin-top: 2.5px" alt="calendar image" height="16px">
                                <p style="color:grey">DURATION</p>
                            </div>
                            <p> {{ $job->duration}}</p>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="row no-gutters">
                                <img src="{{ URL::asset('images/play-button.png') }}" class="mr-1" style="margin-top: 2.5px" alt="location image" height="16px">
                                <p style="color:grey">STIPEND</p>
                            </div>
                            <p> ₹ {{ $job->stipend}}</p>
                        </div>
                        <div class="col-lg-3  col-6">
                            <div class="row no-gutters">
                                <img src="{{ URL::asset('images/play-button.png') }}" class="mr-1" style="margin-top: 2.5px" alt="location image" height="16px">
                                <p style="color:grey">APPLY BY</p>
                            </div>
                            <p> {{  \Carbon\Carbon::parse($job->apply_by)->format('j F, Y') }}</p>
                        </div>
                  </div>
                  <div class="row no-gutters justify-content-end">
                     <b><p class="btn font-weight-bold text-primary mb-0">View Details</p></b>
                  </div>
                </div>
              </div>
        @endforeach
              {{ $jobs->links()}}
    @else 
        <p> No jobs </p>
    @endif
    </div>
@endsection