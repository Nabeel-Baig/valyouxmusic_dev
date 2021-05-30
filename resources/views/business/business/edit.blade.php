@extends('layouts.master')
@section('title') {{ trans('global.edit') }} {{ $title }} @endsection
@section('css')
    <!-- Dropify css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/dropify/css/dropify.min.css') }}">
@endsection
@section('content')
    @component('common-components.breadcrumb')
        @slot('title') {{ request()->segment(3)." ".$title }} @endslot
        @slot('li_1') {{ $title }} @endslot
        @slot('li_2') {{ trans('global.edit') }} {{ $title }} @endslot
    @endcomponent

    <!-- end row -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route(request()->segment(1).'.'.request()->segment(2).'.update', [$business->id]) }}" class="custom-validation" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>What type of business account would you like to create?</label>
                            <select class="form-control" name="business_type" id="business_type" required>
                                <option value="">Select your Business Type</option>
                                <option value="A&R Administrator" {{ ($business->business_type === "A&R Administrator")?'selected':'' }}>A&R Administrator</option>
                                <option value="A&R Coordinator" {{ ($business->business_type === "A&R Coordinator")?'selected':'' }}>A&R Coordinator</option>
                                <option value="Accompanist" {{ ($business->business_type === "Accompanist")?'selected':'' }}>Accompanist</option>
                                <option value="Advance Person" {{ ($business->business_type === "Advance Person")?'selected':'' }}>Advance Person</option>
                                <option value="Album Cover Designer" {{ ($business->business_type === "Album Cover Designer")?'selected':'' }}>Album Cover Designer</option>
                                <option value="Arranger" {{ ($business->business_type === "Arranger")?'selected':'' }}>Arranger</option>
                                <option value="Artist Relations and Development Representative" {{ ($business->business_type === "Artist Relations and Development Representative")?'selected':'' }}>Artist Relations and Development Representative</option>
                                <option value="Assistant Engineer" {{ ($business->business_type === "Assistant Engineer")?'selected':'' }}>Assistant Engineer</option>
                                <option value="Audio Engineer" {{ ($business->business_type === "Audio Engineer")?'selected':'' }}>Audio Engineer</option>
                                <option value="Background Singer" {{ ($business->business_type === "Background Singer")?'selected':'' }}>Background Singer</option>
                                <option value="Band Director" {{ ($business->business_type === "Band Director")?'selected':'' }}>Band Director</option>
                                <option value="Booking Agent" {{ ($business->business_type === "Booking Agent")?'selected':'' }}>Booking Agent</option>
                                <option value="Business Manager" {{ ($business->business_type === "Business Manager")?'selected':'' }}>Business Manager</option>
                                <option value="Campus Representative" {{ ($business->business_type === "Campus Representative")?'selected':'' }}>Campus Representative</option>
                                <option value="Cantor" {{ ($business->business_type === "Cantor")?'selected':'' }}>Cantor</option>
                                <option value="Celebrity Bodyguard" {{ ($business->business_type === "Celebrity Bodyguard")?'selected':'' }}>Celebrity Bodyguard</option>
                                <option value="Choir Director" {{ ($business->business_type === "Choir Director")?'selected':'' }}>Choir Director</option>
                                <option value="Choreographer" {{ ($business->business_type === "Choreographer")?'selected':'' }}>Choreographer</option>
                                <option value="Church Organist" {{ ($business->business_type === "Church Organist")?'selected':'' }}>Church Organist</option>
                                <option value="College, Conservatory, or University Music Teacher" {{ ($business->business_type === "College, Conservatory, or University Music Teacher")?'selected':'' }}>College, Conservatory, or University Music Teacher</option>
                                <option value="Composer" {{ ($business->business_type === "Composer")?'selected':'' }}>Composer</option>
                                <option value="Concert Hall Manager" {{ ($business->business_type === "Concert Hall Manager")?'selected':'' }}>Concert Hall Manager</option>
                                <option value="Concert Hall Marketing Director" {{ ($business->business_type === "Concert Hall Marketing Director")?'selected':'' }}>Concert Hall Marketing Director</option>
                                <option value="Concert Promoter" {{ ($business->business_type === "Concert Promoter")?'selected':'' }}>Concert Promoter</option>
                                <option value="Concertmaster" {{ ($business->business_type === "Concertmaster")?'selected':'' }}>Concertmaster</option>
                                <option value="Conductor" {{ ($business->business_type === "Conductor")?'selected':'' }}>Conductor</option>
                                <option value="Consumer Researcher" {{ ($business->business_type === "Consumer Researcher")?'selected':'' }}>Consumer Researcher</option>
                                <option value="Copyist" {{ ($business->business_type === "Copyist")?'selected':'' }}>Copyist</option>
                                <option value="Cruise Ship Musician" {{ ($business->business_type === "Cruise Ship Musician")?'selected':'' }}>Cruise Ship Musician</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>What is your brand, music artist, influencer or stage name. What do fans call you? This will be your company brand business name that is or will be registered .</label>
                            <input type="text" class="form-control" name="brand" value="{{ $business->brand ?? '' }}" required/>
                        </div>
                        <div class="form-group">
                            <label>What is you occupation, business role, example Music manager, tour promoter, photographer, video director, designer, songwriter, model, actor</label>
                            <input type="text" class="form-control" name="occupation" value="{{ $business->occupation ?? '' }}" required/>
                        </div>
                        <div class="form-group">
                            <label>About your business - What is the purpose of your business or services you provide words 250 words</label>
                            <textarea required="" class="form-control" name="about" rows="5" data-parsley-maxlength="250">{{ $business->about ?? '' }}</textarea>
                        </div>
                        <p class="card-title-desc">How do we find your business</p>
                        <div class="form-group">
                            <label>Website link</label>
                            <input type="url" class="form-control" name="website" value="{{ $business->website ?? '' }}" required/>
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="url" class="form-control" name="instagram" value="{{ $business->instagram ?? '' }}" required/>
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="url" class="form-control" name="facebook" value="{{ $business->facebook ?? '' }}" required/>
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" class="form-control" name="twitter" value="{{ $business->twitter ?? '' }}" required/>
                        </div>
                        <div class="form-group">
                            <label>Youtube</label>
                            <input type="url" class="form-control" name="youtube" value="{{ $business->youtube ?? '' }}" required/>
                        </div>
                        <div class="form-group">
                            <label>Other Link</label>
                            <input type="text" class="form-control" name="otherlink" value="{{ $business->otherlink ?? '' }}" required/>
                        </div>

                        <p class="card-title-desc">Upload your photo. Please name the file with your name. Make sure there is nothing in the background picture we want the spot light to be on you.</p>
                        <div class="card">
                            <div class="body">
                                <input type="file" id="photo" class="dropify" name="photo">
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/dropify/js/dropify.js') }}"></script>
@endsection
@section('script-bottom')
    <script>
        $(function () {
            let imagenUrl = `{{asset($business->photo ?? 'assets/images/users/avator.png')}}`;
            $('#photo').dropify(
                {
                    defaultFile: imagenUrl
                });
        })
    </script>
@endsection
