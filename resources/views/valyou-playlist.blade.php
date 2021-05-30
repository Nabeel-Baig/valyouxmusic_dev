
@section('pageCSS')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages/promote-music.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
     <!-- Stylesheet for the Gear Player, keep this one. -->
    <link rel="stylesheet" href="{{ URL::asset('assets/gear_app/css/gear.css') }}">
    
    <style>
        a.activee{
            color: #FF0093 !important;
            border-bottom: 2px solid #FF0093;
        }
        .tab-select .active{
            text-decoration: none !important;
                color: #FF0093 !important;
    border-bottom: 2px solid #FF0093;
        }
        .tab-select input {
            border-bottom: none; 
        }
        .invest-new img.rounded-circle.avatar-xm.m-1 {
            width: auto !important;
            max-width: 60px;
        }
        .logo img{
                max-width: 101px;
        }
        .tab-input{
            
        }
        .tab-input input{
                margin-top: -4px;
        }
        .footer {
        position: fixed;
    }
    .tab-content{
        padding-top: 25px;
    }
    .tab-select{
        padding-bottom: 30px;
    }
    @media (max-width: 575px){
        
    .font-12{
        font-size: 12px;
    }
    .pad_right-0{
        padding-right: 0px;
    }
    }
    </style>
@endsection


@extends('layouts.master')

@section('title') Market @endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">

            <div class="card mb-0">
                <div class="card-body promoteCover">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="media">
                                <div class="mr-3">
                                    <img src="{{ URL::asset('assets/images/valyoux/kanyewest.svg') }}" alt="" class="avatar-md rounded-circle ">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="text-muted">
                                        <h2 class="mb-1 ml-4" style="font-family: 'Roboto', sans-serif; color: #050F2F; font-weight:600;  ">Monique</h2>
                                        <p class="mb-2 ml-4" style="font-family: 'Roboto', sans-serif; color: #ffffff; font-weight:300; ">Music Fan</p>
                                        <p class="mb-2 ml-4" style="font-family: 'Roboto', sans-serif; color: #ffffff; font-weight:400; ">Investor</p>

                                    </div>
                                </div>
                            </div>
                        </div>

              <div class="col-lg-5 align-self-center col-md-5 col-9">
                <div class="text-lg-center mt-4 mt-lg-0">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-lg-12">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-lg-6">
                                    <p class="text-muted text-truncate mb-2 font-12" style="color:#ffffff !important; font-family: 'Roboto', sans-serif; font-weight:400; ">Artist Investments</p>
                                    <p class="mb-0" style="color:#ffffff !important; font-family: 'Roboto', sans-serif; font-weight:600; font-size: 25px ">60</p>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-6 pad_right-0">
                                    <p class="text-muted text-truncate mb-2 font-12" style="color:#ffffff !important; font-family: 'Roboto', sans-serif; font-weight:400; ">Song Valyou's</p>
                                    <p class="mb-0" style="color:#ffffff !important; font-family: 'Roboto', sans-serif; font-weight:600;  font-size: 25px">100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>


                        <div class="col-lg-2 d-lg-block col-md-2 col-3 pad_right-0">
                            <div class="clearfix  mt-4 mt-lg-0">
                                <div class="dropdown float-right">
                                    <button class="btn btn-follow dropdown-toggle " type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Follow
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>


    <!--<div class="tab-select">-->
        <!--<a class="unclicked"> Market </a>-->
        <!--<a class="clicked"> Stock price </a>-->
    <!--    <a class="unclicked" href="#"> Songs</a>-->
    <!--    <a id="test" class="unclicked activee"> Videos </a>-->
        <!--<a class="unclicked"> Photos </a>-->
    <!--    <div class="search_bar">-->
    <!--        <input placeholder="Search">-->
    <!--    </div>-->
    <!--</div>-->
    
    
    <div class="nav nav-tabs tab-select" id="nav-tab" role="tablist">
        <a class="" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Songs</a>
        <a class="active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Videos</a>
        <a class="" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Investments</a>
        <a class="tab-input" id="nav-se-tab" data-toggle="tab" href="#nav-se" role="tab" aria-controls="nav-se" aria-selected="false" style="    padding-top: 3px;">
            <input placeholder="Search">
        </a>
      </div>
    
    
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table project-list-table table-nowrap table-centered table-borderless">
                    <tbody>
                        <tr>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <a href="javascript: void(0);" class="team-member d-inline-block"
                                       data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button"
                                             alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <h3 class="text-truncate font-size-20"><a href="#" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                                </div>
                            </td>
                            <!--<td>-->
                            <!--    <a href="javascript: void(0);" class="w-25">-->
                            <!--        <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--    <a href="javascript: void(0);">-->
                            <!--        <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--    <a href="javascript: void(0);" class=" w-25">-->
                            <!--        <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--</td>-->
                            <td class="w-25">
                                <div class="row">
                                    <!--<div class="col-md-8 p-2">-->
                                    <!--    <div class="progress">-->
                                    <!--        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">-->
                                    <!--            <span class="sr-only">70% Complete</span>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <div class="col-md-4">
                                        <p class="m-0">04:00</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{route('promote-music')}}">
                                    <button type="button" class="btn valyou-o-btn"> Promote</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <a href="javascript: void(0);" class="team-member d-inline-block"
                                       data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button"
                                             alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <h3 class="text-truncate font-size-20"><a href="#" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                                </div>
                            </td>
                            <!--<td>-->
                            <!--    <a href="javascript: void(0);" class="w-25">-->
                            <!--        <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--    <a href="javascript: void(0);">-->
                            <!--        <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--    <a href="javascript: void(0);" class=" w-25">-->
                            <!--        <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--</td>-->
                            <td class="w-25">
                                <div class="row">
                                    <!--<div class="col-md-8 p-2">-->
                                    <!--    <div class="progress">-->
                                    <!--        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">-->
                                    <!--            <span class="sr-only">70% Complete</span>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <div class="col-md-4">
                                        <p class="m-0">04:00</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{route('promote-music')}}">
                                    <button type="button" class="btn valyou-o-btn"> Promote</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <a href="javascript: void(0);" class="team-member d-inline-block"
                                       data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button"
                                             alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <h3 class="text-truncate font-size-20"><a href="#" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                                </div>
                            </td>
                            <!--<td>-->
                            <!--    <a href="javascript: void(0);" class="w-25">-->
                            <!--        <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--    <a href="javascript: void(0);">-->
                            <!--        <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--    <a href="javascript: void(0);" class=" w-25">-->
                            <!--        <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--</td>-->
                            <td class="w-25">
                                <div class="row">
                                    <!--<div class="col-md-8 p-2">-->
                                    <!--    <div class="progress">-->
                                    <!--        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">-->
                                    <!--            <span class="sr-only">70% Complete</span>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <div class="col-md-4">
                                        <p class="m-0">04:00</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{route('promote-music')}}">
                                    <button type="button" class="btn valyou-o-btn"> Promote</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <a href="javascript: void(0);" class="team-member d-inline-block"
                                       data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button"
                                             alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <h3 class="text-truncate font-size-20"><a href="#" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                                </div>
                            </td>
                            <!--<td>-->
                            <!--    <a href="javascript: void(0);" class="w-25">-->
                            <!--        <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--    <a href="javascript: void(0);">-->
                            <!--        <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--    <a href="javascript: void(0);" class=" w-25">-->
                            <!--        <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--</td>-->
                            <td class="w-25">
                                <div class="row">
                                    <!--<div class="col-md-8 p-2">-->
                                    <!--    <div class="progress">-->
                                    <!--        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">-->
                                    <!--            <span class="sr-only">70% Complete</span>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <div class="col-md-4">
                                        <p class="m-0">04:00</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{route('promote-music')}}">
                                    <button type="button" class="btn valyou-o-btn"> Promote</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <a href="javascript: void(0);" class="team-member d-inline-block"
                                       data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button"
                                             alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <h3 class="text-truncate font-size-20"><a href="#" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                                </div>
                            </td>
                            <!--<td>-->
                            <!--    <a href="javascript: void(0);" class="w-25">-->
                            <!--        <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--    <a href="javascript: void(0);">-->
                            <!--        <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--    <a href="javascript: void(0);" class=" w-25">-->
                            <!--        <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--</td>-->
                            <td class="w-25">
                                <div class="row">
                                    <!--<div class="col-md-8 p-2">-->
                                    <!--    <div class="progress">-->
                                    <!--        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">-->
                                    <!--            <span class="sr-only">70% Complete</span>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <div class="col-md-4">
                                        <p class="m-0">04:00</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{route('promote-music')}}">
                                    <button type="button" class="btn valyou-o-btn"> Promote</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <a href="javascript: void(0);" class="team-member d-inline-block"
                                       data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button"
                                             alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <h3 class="text-truncate font-size-20"><a href="#" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                                </div>
                            </td>
                            <!--<td>-->
                            <!--    <a href="javascript: void(0);" class="w-25">-->
                            <!--        <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--    <a href="javascript: void(0);">-->
                            <!--        <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--    <a href="javascript: void(0);" class=" w-25">-->
                            <!--        <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--</td>-->
                            <td class="w-25">
                                <div class="row">
                                    <!--<div class="col-md-8 p-2">-->
                                    <!--    <div class="progress">-->
                                    <!--        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">-->
                                    <!--            <span class="sr-only">70% Complete</span>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <div class="col-md-4">
                                        <p class="m-0">04:00</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{route('promote-music')}}">
                                    <button type="button" class="btn valyou-o-btn"> Promote</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <a href="javascript: void(0);" class="team-member d-inline-block"
                                       data-toggle="tooltip" data-placement="top" title=""
                                       data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button"
                                             alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <h3 class="text-truncate font-size-20"><a href="#" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
                                </div>
                            </td>
                            <!--<td>-->
                            <!--    <a href="javascript: void(0);" class="w-25">-->
                            <!--        <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--    <a href="javascript: void(0);">-->
                            <!--        <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--    <a href="javascript: void(0);" class=" w-25">-->
                            <!--        <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"-->
                            <!--             alt="">-->
                            <!--    </a>-->
                            <!--</td>-->
                            <td class="w-25">
                                <div class="row">
                                    <!--<div class="col-md-8 p-2">-->
                                    <!--    <div class="progress">-->
                                    <!--        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">-->
                                    <!--            <span class="sr-only">70% Complete</span>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <div class="col-md-4">
                                        <p class="m-0">04:00</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{route('promote-music')}}">
                                    <button type="button" class="btn valyou-o-btn"> Promote</button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!--    <div class="row">-->
    <!--    <div class="col-lg-12">-->
    <!--        <div class="card">-->
    <!--          <div class="card-body bg-black">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-3 col-md-2 col-lg-1 col-sm-12 text-center padding-none">-->
    <!--                        <img src="http://localhost/valyouxmusic/valyouxmusic/public/assets/images/valyoux/kanyewest.svg" alt="" class="rounded-circle" width="80%">-->
    <!--                    </div>-->
    <!--                    <div class="col-5 col-md-6 col-lg-6 col-sm-12">-->
    <!--                        <div class="text-muted promote-page-little-banner">-->

    <!--                            <p id="para1"> Artist share price</p>-->
    <!--                            <p id="para2">PIA MIA $2.33VXD</p>-->
    <!--                            <p id="para3"><i class="fa fa-clock-o" aria-hidden="true"></i> Upcoming</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <br>-->
                        
    <!--                    <div class="col-4 col-md-4 col-lg-4 text-center">-->
    <!--                       <button type="button" class="btn valyou-o-btn-invest"> Invest in Artist</button>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->


    <!--<div class="container mb-3">-->

    <!--    <div class="row">-->

    <!--        <div class="col-4 col-md-4 text-center padding-r ">-->
    <!--        <div class="card shadow-none" id="share-valyou-music" >-->
    <!--            <div class="card-body body-p">-->
    <!--                <img class="mb-2 share-box-image" src="{{ asset('assets/images/valyou_button_nh.svg') }}">-->
    <!--                <p class="card-text mobile-v" >Valyou Song</p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        </div>-->


    <!--        <div class="col-4 col-md-4 text-center padding-r ">-->
    <!--        <div class="card shadow-none" id="share-comments" >-->
    <!--            <div class="card-body body-p">-->
    <!--                <img class="mb-2 share-box-image" src="{{ asset('assets/images/comments.svg') }}">-->
    <!--                <p class="card-text mobile-v">Comments</p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        </div>-->
    <!--        <div class="col-4 col-md-4 text-center padding-r ">-->
    <!--        <div class="card shadow-none" id="share-promote-song"  >-->
    <!--            <div class="card-body body-p">-->
    <!--                <img class="mb-2 share-box-image" src="{{ asset('assets/images/promote.svg') }}">-->
    <!--                <p class="card-text mobile-v">Promote Song</p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        </div>-->


    <!--    </div>-->
    <!--</div>-->
    
      </div>
      <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
      <div class="card p-3 player">
        <video id="video" src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/bobby-videox.mp4" class="video"  autoplay playsinline></video>
        <div class="row">
            <div class="col-lg-10">
                <div class='progress'>
                    <div class='progress-filled'></div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="time"><span class="time-current"></span><span class="time-total"></span></div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-1 text-center">
                <div class="team">
                    <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Play">
                        <img src="{{ asset('assets/images/play-button.svg') }}" id="play-button" class="rounded-circle avatar-xm m-1 play-btn play-button" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-2 text-center">
                <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>
            </div>
            <div class="col-lg-3 text-center mt-3">
                <a data-skip="-10" href="javascript: void(0);" class="w-25 player__button">
                    <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25" alt="">
                </a>
                <a href="javascript: void(0);">
                    <img src="{{ asset('assets/images/pause-button.svg') }}" id="pause-button" class="rounded-circle avatar-xm m-1 w-75  pause-button" alt="">
                </a>
                <a data-skip="10" href="javascript: void(0);" class="w-25 player__button">
                    <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25" alt="">
                </a>
            </div>
            <div class="col-lg-2 text-center">
                <div class="row">

                    <div class='controls-left controls-left mt-4 p-2' style="margin: auto;">
                        <div class='volume'>
                            <div class='volume-btn loud'>
                                <i class="fas fa-volume-up"></i>
                            </div>
                            <div  class='volume-slider'>
                                <div class='volume-filled'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center mt-4">
                <button type="button" class="btn valyou-o-btn"> Promote</button>
            </div>
        </div>
    </div>
    
    
    <!--    <div class="row">-->
    <!--    <div class="col-lg-12">-->
    <!--        <div class="card">-->
    <!--          <div class="card-body bg-black">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-3 col-md-2 col-lg-1 col-sm-12 text-center padding-none">-->
    <!--                        <img src="http://localhost/valyouxmusic/valyouxmusic/public/assets/images/valyoux/kanyewest.svg" alt="" class="rounded-circle" width="80%">-->
    <!--                    </div>-->
    <!--                    <div class="col-5 col-md-6 col-lg-6 col-sm-12">-->
    <!--                        <div class="text-muted promote-page-little-banner">-->

    <!--                            <p id="para1"> Artist share price</p>-->
    <!--                            <p id="para2">PIA MIA $2.33VXD</p>-->
    <!--                            <p id="para3"><i class="fa fa-clock-o" aria-hidden="true"></i> Upcoming</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <br>-->
                        
    <!--                    <div class="col-4 col-md-4 col-lg-4 text-center">-->
    <!--                       <button type="button" class="btn valyou-o-btn-invest"> Invest in Artist</button>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->


    <!--<div class="container mb-3">-->

    <!--    <div class="row">-->

    <!--        <div class="col-4 col-md-4 text-center padding-r ">-->
    <!--        <div class="card shadow-none" id="share-valyou-music" >-->
    <!--            <div class="card-body body-p">-->
    <!--                <img class="mb-2 share-box-image" src="{{ asset('assets/images/valyou_button_nh.svg') }}">-->
    <!--                <p class="card-text mobile-v" >Valyou Song</p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        </div>-->


    <!--        <div class="col-4 col-md-4 text-center padding-r ">-->
    <!--        <div class="card shadow-none" id="share-comments" >-->
    <!--            <div class="card-body body-p">-->
    <!--                <img class="mb-2 share-box-image" src="{{ asset('assets/images/comments.svg') }}">-->
    <!--                <p class="card-text mobile-v">Comments</p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        </div>-->
    <!--        <div class="col-4 col-md-4 text-center padding-r ">-->
    <!--        <div class="card shadow-none" id="share-promote-song"  >-->
    <!--            <div class="card-body body-p">-->
    <!--                <img class="mb-2 share-box-image" src="{{ asset('assets/images/promote.svg') }}">-->
    <!--                <p class="card-text mobile-v">Promote Song</p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        </div>-->


    <!--    </div>-->
    <!--</div>-->
    
      </div>
      
      <div class="tab-pane fade invest-new" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
          <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-nowrap table-centered mb-0">
                            <thead>
                            <tr>
                                <th scope="col">Token</th>
                                <th scope="col">Price</th>
                                <th scope="col">Invested</th>
                                <th scope="col">Dividends</th>
                                <th scope="col" colspan="2">Value</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="team">
                                        <a href="javascript: void(0);" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Bobby K.9.">
                                            <img src="{{ asset('assets/images/valyoux/bobby_k9_valyou_x_music250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                        <span>Bobby K.9.</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-muted">
                                        $ 7525.47
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">1.2601</h5>
                                    <div class="text-muted">$6225.74</div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">0.1512</h5>
                                    <div class="text-muted">$742.32</div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">4.2562</h5>
                                    <div class="text-muted">$6425.42</div>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-black btn-sm w-xs">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="team">
                                        <a href="javascript: void(0);" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Drake">
                                            <img src="{{ asset('assets/images/valyoux/drake-valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                        <span>Drake</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-muted">
                                        $ 7525.47
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">1.2601</h5>
                                    <div class="text-muted">$6225.74</div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">0.1512</h5>
                                    <div class="text-muted">$742.32</div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">4.2562</h5>
                                    <div class="text-muted">$6425.42</div>
                                </td>
                                <td style="width: 120px;">
                                    <a href="#" class="btn btn-black btn-sm w-xs">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="team">
                                        <a href="javascript: void(0);" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Beyonce">
                                            <img src="{{ asset('assets/images/valyoux/beyonce250@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                        <span>Beyonce</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-muted">
                                        $ 4235.78
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">0.0814</h5>
                                    <div class="text-muted">$3256.29</div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">0.0253</h5>
                                    <div class="text-muted">$675.04</div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">0.0921</h5>
                                    <div class="text-muted">$4536.24</div>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-black btn-sm w-xs">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="team">
                                        <a href="javascript: void(0);" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Kanye West">
                                            <img src="{{ asset('assets/images/valyoux/kanye_west_valyou_x_music.svg') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                        <span>Kanye West</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-muted">
                                        $ 3726.06
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">0.0682</h5>
                                    <div class="text-muted">$2936.14</div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">0.0234</h5>
                                    <div class="text-muted">$523.17</div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">0.0823</h5>
                                    <div class="text-muted">$3254.23</div>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-black btn-sm w-xs">View</a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="team">
                                        <a href="javascript: void(0);" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Nicky Minaj">
                                            <img src="{{ asset('assets/images/valyoux/nicky_minaj_valyou_x@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                        <span>Nicky Minaj</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-muted">
                                        $ 7525.47
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">1.2601</h5>
                                    <div class="text-muted">$6225.74</div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">0.1512</h5>
                                    <div class="text-muted">$742.32</div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">4.2562</h5>
                                    <div class="text-muted">$6425.42</div>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-black btn-sm w-xs">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="team">
                                        <a href="javascript: void(0);" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Independent artist">
                                            <img src="{{ asset('assets/images/valyoux/pro_artist@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                        <span>Independent artist</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-muted">
                                        $ 7525.47
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">1.2601</h5>
                                    <div class="text-muted">$6225.74</div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">0.1512</h5>
                                    <div class="text-muted">$742.32</div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">4.2562</h5>
                                    <div class="text-muted">$6425.42</div>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-black btn-sm w-xs">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="team">
                                        <a href="javascript: void(0);" class="team-member d-inline-block"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Justin Beiber">
                                            <img src="{{ asset('assets/images/valyoux/justin_beiber_valyou_x_music@2x.png') }}" width="60" height="60" class="rounded-circle avatar-xm m-1"
                                                 alt="">
                                        </a>
                                        <span>Justin Beiber</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-muted">
                                        $ 7525.47
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">1.2601</h5>
                                    <div class="text-muted">$6225.74</div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">0.1512</h5>
                                    <div class="text-muted">$742.32</div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">4.2562</h5>
                                    <div class="text-muted">$6425.42</div>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-black btn-sm w-xs">View</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
      </div>
    </div>
    
    

    <!--/images/bobby_k9image.png-->

    <!--<img class="card-img-top" src="{{ asset('assets/videos/bobby-videox.mp4') }} " alt="Card image cap">-->

    <!--<div class="card p-3 player">-->
    <!--    <video id="video" src="https://myprojectstaging.com/valyouxmusic/public/assets/videos/bobby-videox.mp4" class="video"  autoplay playsinline></video>-->
    <!--    <div class="row">-->
    <!--        <div class="col-lg-10">-->
    <!--            <div class='progress'>-->
    <!--                <div class='progress-filled'></div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2">-->
    <!--            <div class="time"><span class="time-current"></span><span class="time-total"></span></div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="row mt-5">-->
    <!--        <div class="col-lg-1 text-center">-->
    <!--            <div class="team">-->
    <!--                <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Play">-->
    <!--                    <img src="{{ asset('assets/images/play-button.svg') }}" id="play-button" class="rounded-circle avatar-xm m-1 play-btn play-button" alt="">-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 text-center">-->
    <!--            <h3 class="text-truncate font-size-20"><a href="crypto-exchange" class="text-dark"><b>1.Dark Fantasy</b></a></h3>-->
    <!--        </div>-->
    <!--        <div class="col-lg-3 text-center mt-3">-->
    <!--            <a data-skip="-10" href="javascript: void(0);" class="w-25 player__button">-->
    <!--                <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25" alt="">-->
    <!--            </a>-->
    <!--            <a href="javascript: void(0);">-->
    <!--                <img src="{{ asset('assets/images/pause-button.svg') }}" id="pause-button" class="rounded-circle avatar-xm m-1 w-75  pause-button" alt="">-->
    <!--            </a>-->
    <!--            <a data-skip="10" href="javascript: void(0);" class="w-25 player__button">-->
    <!--                <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25" alt="">-->
    <!--            </a>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 text-center">-->
    <!--            <div class="row">-->

    <!--                <div class='controls-left controls-left mt-4 p-2' style="margin: auto;">-->
    <!--                    <div class='volume'>-->
    <!--                        <div class='volume-btn loud'>-->
    <!--                            <i class="fas fa-volume-up"></i>-->
    <!--                        </div>-->
    <!--                        <div  class='volume-slider'>-->
    <!--                            <div class='volume-filled'></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-4 text-center mt-4">-->
    <!--            <button type="button" class="btn valyou-o-btn"> Promote</button>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->




<div  style="display: none" id="sharing-section-1"> 
        <div class="w-100 user-chat">
            <div class="card">
                    <div class="col-md-10 container">
                        <ul class="list-unstyled" data-simplebar style="max-height: 470px;">
                            

                            <li>
                                  <div class="row">
                                      <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-4  artist-comment-image-div">
                                            <img src="http://localhost/valyouxmusic/valyouxmusic/public/assets/images/valyoux/kanyewest.svg" alt="" class="avatar-md rounded-circle ">
                                              </div>
                                            <div class="col-md-8 mt-4">
                                                <p class="text-dark font-size-16 artist-comment-name">Bobby k9</p>
                                                    </div>
                                      </div>    
                                      </div>
                                      <div class="col-md-8 mt-5 artist-comment-desc">                                    
                                        <p>Awesome artist I would like to invest now!</p>  
                                    </div>
                                  </div>     

                                  <p style="color: #ccc!important" class="float-right">2 Hours ago </p>
                                  <hr class="mb-2">                                    
                            </li>

                            <li>
                                  <div class="row">
                                      <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-4 artist-comment-image-div">
                                            <img src="http://localhost/valyouxmusic/valyouxmusic/public/assets/images/valyoux/kanyewest.svg" alt="" class="avatar-md rounded-circle ">
                                              </div>
                                            <div class="col-md-8 mt-4 ">
                                                <p class="text-dark font-size-16 artist-comment-name">Bobby k9</p>
                                                    </div>
                                      </div>    
                                      </div>
                                      <div class="col-md-8 mt-5 artist-comment-desc">                                    
                                        <p>Awesome artist I would like to invest now!</p>  
                                    </div>
                                  </div>     

                                  <p style="color: #ccc!important" class="float-right">2 Hours ago </p>
                                  <hr class="mb-2">                                    
                            </li>



                        </ul>
                    </div>
                    <div class="p-3 chat-input-section">
                        <div class="row text-center">
                            <div class="col-md-2">
                             <div class="mr-3">
                                    <img src="http://localhost/valyouxmusic/valyouxmusic/public/assets/images/valyoux/kanyewest.svg" alt="" class="avatar-md rounded-circle ">
                                </div>
                            </div>
                            <div class="col-md-8 mt-3">

                                <div class="position-relative">
                                    <input type="text" class="form-control chat-input" placeholder="Enter Comment...">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <img style="transform: rotate(270deg);" class="mr-3"style="height:30px; width:30px" src="{{ asset('assets/images/valyoux/pink_arrow_circle_down.svg') }}"> 
                            </div>
                        </div>
                    </div>
            </div>
        </div>

 </div>


<div style="display: none" id="sharing-section-2"> 
<div class="container">
       <div class="btn-margin">
        <div class="row">
            <div class="col-1 col-md-1">
            </div>
                <div class="col-2 col-md-2"> 
                <button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for $1." class="btn btn-light radio" >$1</button>
            </div>
            <div class="col-2 col-md-2" >
                <button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for $2." class="btn btn-light radio" >$2</button>
            </div>
            <div class="col-2 col-md-2 ">
                <button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for $3." class="btn btn-light radio" >$3</button>
            </div>
            <div class="col-2 col-md-2 ">
                <button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for $4." class="btn btn-light radio" >$4</button>
            </div>
            <div class="col-2 col-md-2 ">
                <button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for $5." class="btn btn-light radio" >$5</button>
            </div>
           </div>
    </div>
<div style="display: none;" class="container col-md-12 text-center mb-5 proceed-valyou-song-div" >
<button type="button" class="btn valyou-g-btn"> Proceed to Valyou Song</button>
</div>
</div>
  </div>


<div  style="display: none" id="sharing-section-3" > 
    <div class="card text-center">
        <h2 style="color: #000000;font-size: 13px; margin: 15px auto ; text-align: center;padding: 7px 12px;">Invite a friend, new fans & potential investors to listen to your song</h2>
        <br>
        <div class="card-body price-card" >
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="input-price-div"> <p >How much do you want to spend?</p></div>
                </div>
                <div class="col-md-3"></div>
            </div>

            <div class="quantity">
                <input type='button' value='-' id="minus"  class='minus' field='quantity' />
                <span class="input-qty pt-3"></span><input type='text' name='quantity' value='25' class='qty input-qty dollar' />
                <input type='button' value='+' id="plus"  class='plus ' field='quantity' />
            </div>

        </div>
        <br><br><br>
        <h2 style="font-size: 13px; margin: auto 0 0; text-align: center; padding: 0 20px 20px; color: #000000;">Who would you like to pay to listen to your song so they may invest in you.</h2>
    </div>



    <div class="col-md-4 mb-2">
        <img class="mr-3"style="height:30px; width:30px" src="{{ asset('assets/images/Headphone investor.svg') }}">
    </div>
    <div class="row mb-5">
        <div class="col-md-4">
            <h2 class="fw-600">Investors on Valyou X </h2>
            <select class="select2-ajax select2-multiple"  multiple="multiple"></select>
        </div>
        <!--<div class="col-md-4  ">    -->
        <!--    <h2 class="fw-600">Investors on Valyou X </h2>-->

        <!--</div>-->

        <div class="col-md-4 ">
            <h2 class="fw-600">Email ID</h2>
            <input type="text"  data-role="tagsinput" placeholder="Add Emails" class="form-control" />
        </div>

        <div class="col-md-4 ">
            <h2 class="fw-600">Phone number</h2>
            <input class="form-control number-input-music" placeholder="Enter Number" type="number">
        </div>

    </div>
    <br>
    <div class="row mb-5">
        <div class="col-md-6 text-center mb-3">
            <div class="card client-input shadow-lg">
                <img src="{{ asset('assets/images/PReward per listen .svg') }}">
                <div class="card-body">
                    <p class="card-text">Reward each listener. Amount you would like to pay each listener. <br> Min $0.10 VXD - Max $1.00 VXD</p>
                    <input type='button' value='-' class='minus' id="minus2" field='quantity2' />
                    <span class="input-qty pt-3"></span> <input type='text' name='quantity2' value='25' class='qty input-qty pt-3' />
                    <input type='button' value='+' class='plus ' id="plus2" field='quantity2' />
                </div>
            </div>
        </div>

        <div class="col-md-6 text-center mb-3">
            <div class="card client-input">
                <img src="{{ asset('assets/images/send-_promote_start.svg') }}">
                <div class="card-body">
                    <p class="card-text">How much of your budget would you like to spend per day ? </p>
                    <input type='button' value='-' class='minus' id="minus3" field='quantity3' />
                    <span class="input-qty pt-3"></span> <input type='text' name='quantity3' value='25' class='qty input-qty pt-3' />
                    <input type='button' value='+' class='plus '  id="plus3" field='quantity3' />
                </div>
            </div>
        </div>
    </div>
    <br>



    <div class="row col-md-12">
    </div>
    <br> <br>
    <div class="col-md-12 text-center ">
        <img class="mr-2 mb-2"  src="{{ asset('assets/images/send-_promote_start.svg') }}">
        <h2>Send / Start</h2>

        <h5 class="font-size-14 mb-3 text-center">Share it on</h5>
        <div class="mt-4 text-center row">
            <div class="col-lg-12">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#" class="social-list-item bg-primary text-white border-primary">
                            <i class="mdi mdi-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="social-list-item bg-info text-white border-info">
                            <i class="mdi mdi-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="social-list-item bg-danger text-white border-danger">
                            <i class="mdi mdi-google"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="#" class="social-list-item  text-white ">
                            <img src="{{ asset('assets/images/valyou_xemblem.svg') }}" alt="" height="30">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    </div>
    </div>

    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="text-center my-3">
                <a href="javascript:void(0);" class="text-success"><i
                        class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Load more </a>
            </div>
        </div> <!-- end col-->
    </div>
    <!-- end row -->

@endsection



@section('script')


    <script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-advanced.init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/multiselect/2.2.9/js/multiselect.js"></script>
    <script src="{{ URL::asset('assets/js/pages/promote-music.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/custom-player.js') }}"></script>
  <!-- All dependencies concatenated and packed for you! -->
    <script src="{{ URL::asset('assets/gear_app/js/jquery.gearplayer.libs.min.js') }}"></script>
    <!-- The main app script for Gear Player. -->
    <script src="{{ URL::asset('assets/gear_app/js/jquery.gearplayer.js') }}"></script>
    <script src="{{ URL::asset('assets/gear_app/js/app.js') }}"></script>
@endsection


