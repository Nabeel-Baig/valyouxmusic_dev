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

                    <form method="POST" action="{{ route(request()->segment(1).'.'.request()->segment(2).'.store') }}" class="custom-validation" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>What type of business account would you like to create?</label>
                            <select class="form-control" name="business_type" id="business_type" required>
                                <option value="">Select your Business Type</option>
                                <option value="A&R Administrator">A&R Administrator</option>
                                <option value="A&R Coordinator">A&R Coordinator</option>
                                <option value="Accompanist">Accompanist</option>
                                <option value="Advance Person">Advance Person</option>
                                <option value="Album Cover Designer">Album Cover Designer</option>
                                <option value="Arranger">Arranger</option>
                                <option value="Artist Relations and Development Representative">Artist Relations and Development Representative</option>
                                <option value="Assistant Engineer">Assistant Engineer</option>
                                <option value="Audio Engineer">Audio Engineer</option>
                                <option value="Background Singer">Background Singer</option>
                                <option value="Band Director">Band Director</option>
                                <option value="Booking Agent">Booking Agent</option>
                                <option value="Business Manager">Business Manager</option>
                                <option value="Campus Representative">Campus Representative</option>
                                <option value="Cantor">Cantor</option>
                                <option value="Celebrity Bodyguard">Celebrity Bodyguard</option>
                                <option value="Choir Director">Choir Director</option>
                                <option value="Choreographer">Choreographer</option>
                                <option value="Church Organist">Church Organist</option>
                                <option value="College, Conservatory, or University Music Teacher">College, Conservatory, or University Music Teacher</option>
                                <option value="Composer">Composer</option>
                                <option value="Concert Hall Manager">Concert Hall Manager</option>
                                <option value="Concert Hall Marketing Director">Concert Hall Marketing Director</option>
                                <option value="Concert Promoter">Concert Promoter</option>
                                <option value="Concertmaster">Concertmaster</option>
                                <option value="Conductor">Conductor</option>
                                <option value="Consumer Researcher">Consumer Researcher</option>
                                <option value="Copyist">Copyist</option>
                                <option value="Cruise Ship Musician">Cruise Ship Musician</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>What is your brand, music artist, influencer or stage name. What do fans call you? This will be your company brand business name that is or will be registered .</label>
                            <input type="text" class="form-control" name="brand" required/>
                        </div>
                        <div class="form-group">
                            <label>What is you occupation, business role, example Music manager, tour promoter, photographer, video director, designer, songwriter, model, actor</label>
                            <input type="text" class="form-control" name="occupation" required/>
                        </div>
                        <div class="form-group">
                            <label>About your business - What is the purpose of your business or services you provide words 250 words</label>
                            <textarea required="" class="form-control" name="about" rows="5" data-parsley-maxlength="250"></textarea>
                        </div>
                        <p class="card-title-desc">How do we find your business</p>
                        <div class="form-group">
                            <label>Website link</label>
                            <input type="url" class="form-control" name="website" required/>
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="url" class="form-control" name="instagram" required/>
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="url" class="form-control" name="facebook" required/>
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" class="form-control" name="twitter" required/>
                        </div>
                        <div class="form-group">
                            <label>Youtube</label>
                            <input type="url" class="form-control" name="youtube" required/>
                        </div>
                        <div class="form-group">
                            <label>Other Link</label>
                            <input type="text" class="form-control" name="otherlink" required/>
                        </div>

                        <p class="card-title-desc">Upload your photo. Please name the file with your name. Make sure there is nothing in the background picture we want the spot light to be on you.</p>
                        <div class="card">
                            <div class="body">
                                <input type="file" id="avatar" class="dropify" name="photo" required>
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
            $('.dropify').dropify();
        })
    </script>
@endsection
