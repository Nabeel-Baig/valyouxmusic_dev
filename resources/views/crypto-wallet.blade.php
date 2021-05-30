@extends('layouts.master')

@section('title') @lang('translation.Wallet') @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Wallet @endslot
        @slot('li_1') Crypto @endslot
        @slot('li_2') Wallet @endslot
    @endcomponent
    
    <div class="row">
        <div class="col-12">
            
            @include('layouts.inner-navigation')
            
        </div>
    </div>

    <div class="card mini-stats-wid">
        <div class="card-body">
            <div class="media">
                <div class="mr-3 align-self-center">
                    <i class="mdi mdi-bitcoin h2 text-warning mb-0"></i>
                </div>
                <div class="media-body">
                    <p class="text-muted mb-2">Bitcoin Wallet</p>
                    <h5 class="mb-0">1.02356 BTC <span class="font-size-14 text-muted">= $ 9148.00</span>
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-xl-12">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="mr-3 align-self-center">
                                    <i class="mdi mdi-bitcoin h2 text-warning mb-0"></i>
                                </div>
                                <div class="media-body">
                                    <p class="text-muted mb-2">Bitcoin Wallet</p>
                                    <h5 class="mb-0">1.02356 BTC <span class="font-size-14 text-muted">= $ 9148.00</span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="mr-3 align-self-center">
                                    <i class="mdi mdi-ethereum h2 text-primary mb-0"></i>
                                </div>
                                <div class="media-body">
                                    <p class="text-muted mb-2">Ethereum Wallet</p>
                                    <h5 class="mb-0">0.04121 ETH <span class="font-size-14 text-muted">= $ 8235.00</span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="mr-3 align-self-center">
                                    <i class="mdi mdi-litecoin h2 text-info mb-0"></i>
                                </div>
                                <div class="media-body">
                                    <p class="text-muted mb-2">litecoin Wallet</p>
                                    <h5 class="mb-0">0.00356 BTC <span class="font-size-14 text-muted">= $ 4721.00</span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Activities</h4>

                    <ul class="nav nav-tabs nav-tabs-custom">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Buy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sell</a>
                        </li>
                    </ul>

                    <div class="mt-4">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-hover dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID No</th>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Currency</th>
                                        <th>Amount</th>
                                        <th>Amount in USD</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3215</a>
                                        </td>

                                        <td>03 Mar, 2020</td>
                                        <td>Buy</td>
                                        <td>Bitcoin</td>
                                        <td>1.00952 BTC</td>
                                        <td>$ 9067.62</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3216</a>
                                        </td>

                                        <td>04 Mar, 2020</td>
                                        <td>Sell</td>
                                        <td>Ethereum</td>
                                        <td>0.00413 ETH</td>
                                        <td>$ 2123.01</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3217</a>
                                        </td>

                                        <td>04 Mar, 2020</td>
                                        <td>Buy</td>
                                        <td>Bitcoin</td>
                                        <td>0.00321 BTC</td>
                                        <td>$ 1802.62</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3218</a>
                                        </td>

                                        <td>05 Mar, 2020</td>
                                        <td>Buy</td>
                                        <td>Litecoin</td>
                                        <td>0.00224 LTC</td>
                                        <td>$ 1773.01</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3219</a>
                                        </td>

                                        <td>06 Mar, 2020</td>
                                        <td>Buy</td>
                                        <td>Ethereum</td>
                                        <td>1.04321 ETH</td>
                                        <td>$ 9423.73</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3220</a>
                                        </td>

                                        <td>07 Mar, 2020</td>
                                        <td>Sell</td>
                                        <td>Bitcoin</td>
                                        <td>0.00413 ETH</td>
                                        <td>$ 2123.01</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3221</a>
                                        </td>

                                        <td>07 Mar, 2020</td>
                                        <td>Buy</td>
                                        <td>Bitcoin</td>
                                        <td>1.00952 BTC</td>
                                        <td>$ 9067.62</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3222</a>
                                        </td>

                                        <td>08 Mar, 2020</td>
                                        <td>Sell</td>
                                        <td>Ethereum</td>
                                        <td>0.00413 ETH</td>
                                        <td>$ 2123.01</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3223</a>
                                        </td>

                                        <td>09 Mar, 2020</td>
                                        <td>Sell</td>
                                        <td>Litecoin</td>
                                        <td>1.00952 LTC</td>
                                        <td>$ 9067.62</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3224</a>
                                        </td>

                                        <td>10 Mar, 2020</td>
                                        <td>Buy</td>
                                        <td>Ethereum</td>
                                        <td>0.00413 ETH</td>
                                        <td>$ 2123.01</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3225</a>
                                        </td>

                                        <td>11 Mar, 2020</td>
                                        <td>Buy</td>
                                        <td>Bitcoin</td>
                                        <td>1.00952 BTC</td>
                                        <td>$ 9067.62</td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK3226</a>
                                        </td>

                                        <td>12 Mar, 2020</td>
                                        <td>Sell</td>
                                        <td>Ethereum</td>
                                        <td>0.00413 ETH</td>
                                        <td>$ 2123.01</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection

@section('script')

    <!-- apexcharts -->
    <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js') }}"></script>

    <!-- crypto-wallet init -->
    <script src="{{ URL::asset('assets/js/pages/crypto-wallet.init.js') }}"></script>
@endsection
