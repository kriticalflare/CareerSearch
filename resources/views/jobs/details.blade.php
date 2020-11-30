@extends('layouts.app')

@section('content')
    <div class="container">
    <h1> {{ $job->category }} in {{ $job->location}} at {{ $job->company_name}} </h1>
        <div class="card mb-4">
            <div class="card-body">
                    <div class="row no-gutters">
                        <div class="col-lg-10 col-12 order-lg-1 order-2">
                            <h4>{{ $job->category }}</h4>
                            <h6 style= "color: grey;"><b>{{ $job->company_name }}</b></h6>
                        </div>
                        <div class="col-lg-2 col-12 order-lg-2 order-1">
                            <img src="{{ $job->company_logo }}" alt="" height="50px" >
                        </div>
                    </div>
                    <div class="row no-gutters">
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
                                <img src="{{ URL::asset('images/money.png') }}" class="mr-1" style="margin-top: 2.5px" alt="location image" height="16px">
                                <p style="color:grey">STIPEND</p>
                            </div>
                            <p> ₹ {{ $job->stipend}}</p>
                        </div>
                        <div class="col-lg-3  col-6">
                            <div class="row no-gutters">
                                <img src="{{ URL::asset('images/sand-clock.png') }}" class="mr-1" style="margin-top: 2.5px" alt="location image" height="16px">
                                <p style="color:grey">APPLY BY</p>
                            </div>
                            <p> {{  \Carbon\Carbon::parse($job->apply_by)->format('j F, Y') }}</p>
                        </div>
                    </div>
                    
                    <div class="dropdown-divider"></div>
                    
                    <div>
                        <h5><b>About internship/job at {{ $job->company_name}}</b></h5>
                    </div>
                    <div>
                        <p>{{ $job->description }}</p>
                    </div>
                    <div>
                        <h5><b>Who can apply</b></h5>
                    </div>
                    <div>
                        <p>{{ $job->description }}</p>
                    </div>
                    <div class="row no-gutters justify-content-center">
                        <button class="btn btn-primary">Apply Now</button>
                    </div>
            </div>
        </div>
    </div>
@endsection