@extends('layouts.master')
@section('pageCSS')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages/my-songs.css') }}">

    <!-- Stylesheet for the Gear Player, keep this one. -->
    <link rel="stylesheet" href="{{ URL::asset('assets/gear_app/css/gear.css') }}">
    <!-- Meta tags for mobile behavior. Recommended to use! -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <style type="text/css">
        footer {
            display: none;
        }
    @media (max-width: 525px){
        .hide-on-mob{
            display: none;
        }
        img.rounded-circle.avatar-xm.m-1.play-button {
            max-width: 60px;
            width: 25px;
        }
        .tab-margin-top{
            margin-top: 105px !important;
        }
        .bs-float-parent{
            height: 30px !important;    
        }
    }
    @media screen and (max-width: 480px){
        .project-list-table {
            margin-bottom: 100px;
        }
    }
.tab-select .search_bar {
    margin-left: auto;
    margin-right: auto;
}
.project-list-table h3{
    margin: 0;
    font-size: 13px;
}
.valyou-o-btn ,.valyou-g-btn{
    padding: 5px 12px;
}
    </style>
@endsection
@section('title') Artist @endsection

@section('content')
    
    <div class="row tab-margin-top">
        <div class="col-12">
            
            @include('layouts.inner-navigation')
            
        </div>
    </div>
    <div class="row">
        
        @include('layouts.profile-box')
        
    </div>
    <!-- end row -->
    <div class="tab-select">
        <!--<a href="songs" class="active"> Songs</a>-->
        <!--<a href="projects-list" class="unclicked"> Market </a>-->
        <!--<a href="crypto-exchange" class="unclicked"> Stock price </a>-->
        <!--<a href="videos" class="unclicked"> Videos </a>-->
        <!--<a class="unclicked"> Photos </a>-->
        <!--<a class="unclicked"> Links </a>-->
        <div class="search_bar"><input placeholder="Search"></div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table project-list-table table-nowrap table-centered table-borderless">
                    <tbody>
                        <tr>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button" alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h3 class="text-truncate "><a href="crypto-exchange" class="text-dark"><b>1. Taking a holiday </b></a></h3>
                            </td>
                            <td class="hide-on-mob">
                                <a href="javascript: void(0);" class="w-25">
                                    <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);" class=" w-25">
                                    <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                            </td>
                            <td class="w-25 hide-on-mob">
                                <div class="row">
                                    <div class="col-md-8 p-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p> 00:34 / 04:00</p>
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
                                <h3 class="text-truncate "><a href="crypto-exchange" class="text-dark"><b>2. Sunshine </b></a></h3>
                            </td>
                            <td class="hide-on-mob">
                                <a href="javascript: void(0);" class="w-25">
                                    <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);" class=" w-25">
                                    <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                            </td>
                            <td class="w-25 hide-on-mob">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                        <span class="sr-only">70% Complete</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn valyou-g-btn"> Valyou</button>
                            </td>
                        </tr>
                        
                        
                        <tr>
                            <td>
                                <div class="team" data-gearPath="{{ asset('assets/gear_app/json/audiojungle.json') }}">
                                    <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button" alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h3 class="text-truncate "><a href="crypto-exchange" class="text-dark"><b>3. Afterlife</b></a></h3>
                            </td>
                            <td class="hide-on-mob">
                                <a href="javascript: void(0);" class="w-25">
                                    <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);" class=" w-25">
                                    <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                            </td>
                            <td class="w-25 hide-on-mob">
                                <div class="row">
                                    <div class="col-md-8 p-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p> 00:34 / 04:00</p>
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
                                    <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button" alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h3 class="text-truncate "><a href="crypto-exchange" class="text-dark"><b>4. Keep Me high</b></a></h3>
                            </td>
                            <td class="hide-on-mob">
                                <a href="javascript: void(0);" class="w-25">
                                    <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);" class=" w-25">
                                    <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                            </td>
                            <td class="w-25 hide-on-mob">
                                <div class="row">
                                    <div class="col-md-8 p-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p> 00:34 / 04:00</p>
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
                                    <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button" alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h3 class="text-truncate "><a href="crypto-exchange" class="text-dark"><b>5. Billion dollar girl</b></a></h3>
                            </td>
                            <td class="hide-on-mob">
                                <a href="javascript: void(0);" class="w-25">
                                    <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);" class=" w-25">
                                    <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                            </td>
                            <td class="w-25 hide-on-mob">
                                <div class="row">
                                    <div class="col-md-8 p-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p> 00:34 / 04:00</p>
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
                                    <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button" alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h3 class="text-truncate "><a href="crypto-exchange" class="text-dark"><b>6. Take your girl shopping </b></a></h3>
                            </td>
                            <td class="hide-on-mob">
                                <a href="javascript: void(0);" class="w-25">
                                    <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);" class=" w-25">
                                    <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                            </td>
                            <td class="w-25 hide-on-mob">
                                <div class="row">
                                    <div class="col-md-8 p-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p> 00:34 / 04:00</p>
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
                                    <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button" alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h3 class="text-truncate "><a href="crypto-exchange" class="text-dark"><b>7. They Waiting </b></a></h3>
                            </td>
                            <td class="hide-on-mob">
                                <a href="javascript: void(0);" class="w-25">
                                    <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);" class=" w-25">
                                    <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                            </td>
                            <td class="w-25 hide-on-mob">
                                <div class="row">
                                    <div class="col-md-8 p-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p> 00:34 / 04:00</p>
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
                                    <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bobby">
                                        <img src="{{ asset('assets/images/play-button.svg') }}" class="rounded-circle avatar-xm m-1  play-button" alt="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h3 class="text-truncate "><a href="crypto-exchange" class="text-dark"><b>8. Dark Fantasy</b></a></h3>
                            </td>
                            <td class="hide-on-mob">
                                <a href="javascript: void(0);" class="w-25">
                                    <img src="{{ asset('assets/images/rewind.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('assets/images/pause-button.svg') }}" class="rounded-circle avatar-xm m-1 w-75"
                                         alt="">
                                </a>
                                <a href="javascript: void(0);" class=" w-25">
                                    <img src="{{ asset('assets/images/fast-forward.svg') }}" class="rounded-circle avatar-xm m-1 w-25"
                                         alt="">
                                </a>
                            </td>
                            <td class="w-25 hide-on-mob">
                                <div class="row">
                                    <div class="col-md-8 p-2">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p> 00:34 / 04:00</p>
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
    <!-- end row -->

    <div class="row bs-float-parent">
        <div class="col-xl-12">
            <div class="card mb-0 posFixed-sVxd" id="bs-float">
                <div class="card-body">
                    <div class="stock-price text-center">Stock Price</div>
                    <div class="d-flex d-flexBlock-mob justify-content-center bd-highlight align-items-center">
                        <div class="marquee">
                            <div class="track">
                                <div class="vxd d-inline">$58.60 VXD</div>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;+28.57%</div>
                                <div class="vxd d-inline pl-5">0.00320000 BTC</div>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;+28.57%</div>
                                <div class="vxd d-inline pl-5">$59.60 USDT</div>
                                <div class="priceT d-inline pr-5">&nbsp;&nbsp;+28.57%</div>
                                <div class="vxd d-inline pl-5">0.80 ETH</div>
                                <div class="priceT d-inline">&nbsp;&nbsp;+28.57%</div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center d-flex justify-content-center mb-3  mt-2">
                        <div class="col-xl-2 col-sm-3 col-6">
                            <button class="btn btn-pink btn-sm w-md waves-effect waves-light mr-3" data-toggle="modal" data-target="#sellStockModal">Sell Stock</button>
                        </div>
                        <div class="col-xl-2 col-sm-3 col-6">
                            <button class="btn btn-green btn-sm w-md waves-effect waves-light" data-toggle="modal" data-target="#buyStockModal">Buy Stock</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <!--Buy Modal -->
    <div class="modal fade proceed_modal" id="buyStockModal" aria-labelledby="buyStockModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4><b class="color-pinkk">Buy Stock</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <div class="card-body price-card">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-price-div">
                                        <p>How many stocks of this artist would you like to purchase?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="quantity">
                                <input type='button' value='-' id="minus" class='minus' field='quantity'/>
                                <input type='text' name='quantity' value='25' class='qty input-qty dollar'/>
                                <input type='button' value='+' id="plus" class='plus ' field='quantity'/>
                            </div>
                        </div>
                        <br><br>
                        <h2 style="font-size: 24px; text-align: center; padding: 0 0 0; color: #1EDD0E;    font-weight: 700;">Total Cost: $ 1490 VXD</h2>
                        <br>
                        <h2 style="font-size: 16px; text-align: center; padding: 0 0 20px; color: #000;">Amount of Shares X Current Stock Price + Fees % = Total Cost.</h2>
                        <button class="btn btn-green btn-sm waves-effect waves-light">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Sell Modal -->
    <div class="modal fade proceed_modal" id="sellStockModal" aria-labelledby="buyStockModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4><b class="color-pinkk">Sell Bobby K.9. Stocks</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <div class="card-body price-card price-card-pink">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-price-div">
                                        <p>How many stocks of this artist would you like to sell?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="quantity">
                                <input type='button' value='-' id="minus2" class='minus' field='quantityy'/>
                                <input type='text' name='quantityy' value='25' class='qty input-qty dollar'/>
                                <input type='button' value='+' id="plus2" class='plus ' field='quantityy'/>
                            </div>
                        </div>
                        <br><br>
                        <h2 style="font-size: 24px; text-align: center; padding: 0 0 0; color: #ce196c;    font-weight: 700;">Total Cost: $ 1490 VXD</h2>
                        <br>
                        <h2 style="font-size: 16px; text-align: center; padding: 0 0 20px; color: #000;">Amount of Shares X Current Stock Price + Fees % = Total Cost.</h2>
                        <button class="btn btn-pink btn-sm waves-effect waves-light">Sell Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
@endsection
  
@section('script')
    <!-- All dependencies concatenated and packed for you! -->
    <script src="{{ URL::asset('assets/gear_app/js/jquery.gearplayer.libs.min.js') }}"></script>
    <!-- The main app script for Gear Player. -->
    <script src="{{ URL::asset('assets/gear_app/js/jquery.gearplayer.js') }}"></script>
    <script src="{{ URL::asset('assets/gear_app/js/app.js') }}"></script>
    <script type="text/javascript">
    </script>
@endsection
