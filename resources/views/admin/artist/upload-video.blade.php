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

                    <form method="POST" action="{{ route('admin.upload') }}" class="custom-validation" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>{{ ucwords(str_replace('_',' ','description')) }}</label>
                            <textarea class="form-control @error('description') parsley-error @enderror" required name="description" id="description" placeholder="{{ ucwords(str_replace('_',' ','description')) }}">{{ old('description') }}</textarea>
                            @error('description')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="card">
                            <div class="body">
                                <input type="file" id="name" class="dropify" name="name" required>
                                @error('name')
                                <span class="text-red">{{ $message }}</span>
                                @enderror
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
