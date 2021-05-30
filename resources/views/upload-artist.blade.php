@section('pageCSS')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css') }}">
@endsection

@extends('layouts.master')
@section('title') @lang('translation.File_Upload') @endsection
@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Upload Song @endslot
        @slot('li_1') Artist @endslot
        @slot('li_2') Uploads @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="form-group col-lg-12">
                        <h4 class="card-title">Upload Name</h4>
                        <input type="text" id="name" name="untyped-input" class="form-control">
                    </div>

                    <div class="form-group col-lg-12">
                        <h4 class="card-title">Is this an Audio Track or Music Video?</h4>   <select class="form-control select2">
                            <option>Select </option>
                            <option value="Audio Track">Audio Track</option>
                            <option value="Music Video">Music Video</option>
                        </select>
                    </div>



                    <div class="form-group col-lg-12">

                    <h4 class="card-title">Upload File</h4>

                    <div>
                        <form action="#" class="dropzone">



                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                </div>

                                <h4>Drop here or click to upload.</h4>
                            </div>
                        </form>
                    </div>

                    </div>


                    <br>

                    <div class="form-group col-lg-12">
                    <h4 class="card-title">Upload Album / Single Cover</h4>
                    <div class="row">
                    <div class="col-md-4">

                        <form action="#" class="dropzone">



                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                </div>

                                <h4>Drop here or click to upload.</h4>
                            </div>
                        </form>

                    </div>
                    <div class="col-md-3">

                    </div>

                    <div class="col-md-4">
                    </div>
                </div>
                    </div>


                <br>
                <div>
                    <p class="card-title-desc">Which one of your songs do you want investors to listen to and Valyou?. You must own full rights or master to the song or it will be taken down.</p>
                        <div class="card">
                            <div class="body">
                                <!--<input type="file" class="dropify">-->
                                
                                
                                <form action="#" class="dropzone">



                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                </div>

                                <h4>Drop here or click to upload.</h4>
                            </div>
                        </form>
                        
                            </div>
                        </div>

                        <p class="card-title-desc">We take copyright seriously.</p>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="copyright" id="copyright1" value="Yes">
                                <label class="form-check-label" for="copyright1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="copyright" id="copyright2" value="No">
                                <label class="form-check-label" for="copyright2">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="copyright" id="copyright3" value="Co-owner">
                                <label class="form-check-label" for="copyright3">Co-owner</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>If you are a co owner the song, how many percent of the revenue are you entitled to?</label>
                            <input type="text" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label>Who else is entitled to royalties or earnings from the song ? e.g Songwriter, Producer, Band member</label>
                            <input type="text" class="form-control" placeholder="Please input their name" required/>
                        </div>
                        <div class="form-group">
                            <label>Please input their email address. Please invite them to Valyou X to claim their earnings</label>
                            <input type="text" class="form-control" placeholder="Please input their email address. Please invite them to Valyou X to claim their earnings" required/>
                        </div>
                </div>
                    <div class="form-group col-lg-12">

                    <button style="background-color: #000000; color: #FF4680" type="button" class="btn btn-primary waves-effect waves-light">Submit</button>

                </div>

{{--
                    <div class="text-center mt-4">
                    </div>--}}
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection

@section('script')

    <!-- Plugins js -->
    <script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js') }}"></script>

@endsection
