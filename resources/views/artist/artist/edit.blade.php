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

                    <form method="POST" action="{{ route('artist.'.request()->segment(1).'.update', [$artist->id]) }}" class="custom-validation" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <p class="card-title-desc">What artist category do you think that are you applying for please note you may not yet currently be eligible</p>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="artist1" {{ ($artist->category === "EOI Profile") ? 'checked' : '' }} value="EOI Profile">
                                <label class="form-check-label" for="artist1">EOI Profile</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="artist2" {{ ($artist->category === "Upcoming") ? 'checked' : '' }} value="Upcoming">
                                <label class="form-check-label" for="artist2">Upcoming</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="artist3" {{ ($artist->category === "Independent") ? 'checked' : '' }} value="Independent">
                                <label class="form-check-label" for="artist3">Independent</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="artist4" {{ ($artist->category === "Major Artist") ? 'checked' : '' }} value="Major Artist">
                                <label class="form-check-label" for="artist4">Major Artist</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>What is your brand, music artist, influencer or stage name. What do fans call you? This will be your company brand business name that is or will be registered.</label>
                            <input type="text" class="form-control" name="brand" value="{{ $artist->brand ?? '' }}" required/>
                        </div>
                        <div class="form-group">
                            <label>Artist Bio - Your journey as a music artist in words 250 words.</label>
                            <textarea required="" class="form-control" name="about" rows="5" data-parsley-maxlength="250">{{ $artist->about ?? '' }}</textarea>
                        </div>
                        <p class="card-title-desc">What artist category do you think that are you applying for please note you may not yet currently be eligible</p>
                        <div class="form-group">
                            <label>Website link</label>
                            <input type="url" class="form-control" name="website" value="{{ $artist->website ?? '' }}" required/>
                        </div>
                        <div class="form-group">
                            <label>Spotify</label>
                            <input type="text" class="form-control" name="spotify" value="{{ $artist->spotify ?? '' }}" required/>
                        </div>
                        <div class="form-group">
                            <label>Soundcloud</label>
                            <input type="text" class="form-control" name="soundcloud" value="{{ $artist->soundcloud ?? '' }}" required/>
                        </div>
                        <div class="form-group">
                            <label>Apple Music</label>
                            <input type="text" class="form-control" name="applemusic" value="{{ $artist->applemusic ?? '' }}" required/>
                        </div>
                        <div class="form-group">
                            <label>Youtube</label>
                            <input type="url" class="form-control" name="youtube" value="{{ $artist->youtube ?? '' }}" required/>
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="url" class="form-control" name="facebook" value="{{ $artist->facebook ?? '' }}" required/>
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="url" class="form-control" name="instagram" value="{{ $artist->instagram ?? '' }}" required/>
                        </div>

                        <p class="card-title-desc">Upload your photo. Please name the file with your name. Make sure there is nothing in the background picture we want the spot light to be on you.</p>
                        <div class="card">
                            <div class="body">
                                <input type="file" id="photo" class="dropify" name="photo" required>
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
            let imagenUrl = `{{asset($artist->photo ?? 'assets/images/users/avator.png')}}`;
            $('#photo').dropify(
                {
                    defaultFile: imagenUrl
                });
        })
    </script>
@endsection
