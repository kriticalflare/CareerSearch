@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create A Job Listing') }}</div>

                <div class="card-body">
                    <form action="{{ route('create') }}" method="POST" >
                        @csrf
                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">Category</label>

                            <div class="col-md-6">
                                <input id="category"  class="form-control @error('category') is-invalid @enderror" name="category" placeholder="Mobile App Development" required  value="{{ old('category') }}">

                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">Company Name</label>

                            <div class="col-md-6">
                                <input id="company_name" class="form-control @error('company_name') is-invalid @enderror" name="company_name"  placeholder="Google Inc" required value="{{ old('company_name') }}" >

                                @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="company_logo" class="col-md-4 col-form-label text-md-right">Company Logo URL</label>

                            <div class="col-md-6">
                                <input id="company_logo" type="text" class="form-control @error('name') is-invalid @enderror" name="company_logo" placeholder="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1920px-Google_2015_logo.svg.png" required value="{{ old('company_logo') }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" rows="5"
                                placeholder=" We use state-of-the-art technologies like artificial intelligence, machine learning, big data analytics, and NSDT to make smarter and affordable solutions for all our clients. We enable clients to improve their decision-making capability by providing them access to a wide range of data analytics solutions, services, and resources. Our team spans experienced members from leading technology sectors such as artificial intelligence, machine learning, big data analytics, software development, information security, computer networks, etc., keen on building intelligent and affordable solutions for your businesses or startups.
About the work from home job/internship
Selected intern's day-to-day responsibilities include:
                                
1. Developing a website and fixing bugs on our existing website
2. Working on Axios, Redux, Hooks, and other popular React libraries" required >{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="requirements" class="col-md-4 col-form-label text-md-right">Requirements</label>

                            <div class="col-md-6">
                                <textarea id="requirements"  class="form-control @error('requirements') is-invalid @enderror" name="requirements" 
                                rows="5"
                                placeholder="Only those candidates can apply who:
1. are available for the work from home job/internship                                     
2. can start the work from home job/internship between 30th Nov'20 and 4th Jan'21
3. are available for duration of 2 months                                      
4. have relevant skills and interests                                        
* Women wanting to start/restart their career can also apply." required >{{ old('requirements') }}</textarea>

                                @error('requirements')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="start_date" class="col-md-4 col-form-label text-md-right">Start Date</label>

                            <div class="col-md-6">
                                <input id="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ old('start_date') }}" required >

                                @error('start_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apply_by" class="col-md-4 col-form-label text-md-right">Apply By</label>

                            <div class="col-md-6">
                                <input id="apply_by" type="date" class="form-control @error('apply_by') is-invalid @enderror" name="apply_by" value="{{ old('apply_by') }}" required >

                                @error('apply_by')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="duration" class="col-md-4 col-form-label text-md-right">Duration</label>

                            <div class="col-md-6">
                                <input id="duration" type="text" class="form-control @error('duration') is-invalid @enderror" name="duration" placeholder="2 Months" required value="{{ old('duration') }}" >

                                @error('duration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">Location</label>

                            <div class="col-md-6">
                                <input id="location" type="location" class="form-control @error('location') is-invalid @enderror" name="location" placeholder="Mumbai"  required value="{{ old('location') }}"  >

                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stipend" class="col-md-4 col-form-label text-md-right">Stipend</label>

                            <div class="col-md-6">
                                <input id="stipend" type="number" class="form-control @error('stipend') is-invalid @enderror" name="stipend" placeholder="10000" required value="{{ old('stipend') }}">

                                @error('stipend')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="apply_link" class="col-md-4 col-form-label text-md-right">Apply Link</label>

                            <div class="col-md-6">
                                <input id="apply_link" type="url" class="form-control @error('apply_link') is-invalid @enderror" name="apply_link" placeholder="https://forms.gle/mNd9eHf6dVpRasFH8"  required value="{{ old('apply_link') }}">

                                @error('apply-link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection