@extends('layouts.master')

@section('title') @lang('translation.Lending') @endsection
@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Portfolio / Dividends @endslot
        @slot('li_1') Crypto @endslot
        @slot('li_2') Lending @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body border-bottom">
                    <div class="float-right dropdown ml-2">
                        <a class="text-muted dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>

                    <div>
                        <div class="mb-4 mr-3">
                            <img src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg') }}" alt=""
                                 class="avatar-md rounded-circle img-thumbnail">
                        </div>

                        <div>
                            <h5 class="">{{ auth()->user()->first_name.' '.auth()->user()->last_name }}</h5>
                            <p class="text-muted mb-1">{{ auth()->user()->email }}</p>
                            <p class="text-muted mb-0">Id no: #SK0234</p>
                        </div>
                    </div>
                </div>
                <div class="card-body border-bottom">
                    <div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div>
                                    <p class="text-muted mb-2">Total Investment Portfolio Value</p>
                                    <h2 class="roboto-bold">$ 9148.00 VXD</h2>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right mt-4 mt-sm-0">
                                    <p class="text-muted mb-2">Since last month</p>
                                    <h5>+ $ 215.53 <span class="badge badge-green ml-1 align-bottom">+ 1.3 %</span></h5>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">My Artists Investments</h4>

                    <div class="table-responsive">
                        <table class="table table-nowrap table-centered mb-0">
                            <thead>
                            <tr>
                                <th scope="col">Token</th>
                                <th scope="col">Price</th>
                                <th scope="col">Stock/Investment</th>
                                <th scope="col">Revenue/Artist Share</th>
                                <th scope="col">Dividends/Investor Share</th>
                                <th scope="col">Total Supply</th>
                                <th scope="col">Circulating Supply</th>
                                <th scope="col">Outstanding Share</th>
                                <th scope="col">Market Cap</th>
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
                                        $ 1
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">100</h5>
                                    <div class="text-muted">$125</div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">$50,000,000</h5>
                                    <div class="text-muted">$35,000,000</div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">0.001%</h5>
                                    <div class="text-muted">$1,000</div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">10,000,000</h5>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">100</h5>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">9,999,900</h5>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1">4.256</h5>
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
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Trading & Investment Funds Under Management</h4>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border p-3 rounded mt-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-xs mr-3">
                                        <span class="avatar-title rounded-circle bg-soft-warning text-warning font-size-18">
                                            <i class="mdi mdi-bitcoin"></i>
                                        </span>
                                    </div>
                                    <h5 class="font-size-14 mb-0">Crypto</h5>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="text-muted mt-3">
                                            <p>Annual Yield</p>
                                            <h4>4.05 %</h4>
                                            <p class="mb-0">0.00745 VXD</p>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 align-self-end">
                                        <div class="float-right mt-3">
                                            <a href="#" class="btn btn-black">Select</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="border p-3 rounded mt-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-xs mr-3">
                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                                            <i class="mdi mdi-equalizer"></i>
                                        </span>
                                    </div>
                                    <h5 class="font-size-14 mb-0">Forex</h5>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="text-muted mt-3">
                                            <p>Annual Yield</p>
                                            <h4>5.08 %</h4>
                                            <p class="mb-0">0.0056 VXD</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 align-self-end">
                                        <div class="float-right mt-3">
                                            <a href="#" class="btn btn-black">Select</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="border p-3 rounded mt-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-xs mr-3">
                                        <span class="avatar-title rounded-circle bg-soft-info text-info font-size-18">
                                            <img src="{{ asset('assets/images/valyoux/valyoux_mascot_white.svg') }}" width="20" height="20">
                                        </span>
                                    </div>
                                    <h5 class="font-size-14 mb-0">Property</h5>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="text-muted mt-3">
                                            <p>Annual Yield</p>
                                            <h4>4.12 %</h4>
                                            <p class="mb-0">0.00245 VXD</p>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 align-self-end">
                                        <div class="float-right mt-3">
                                            <a href="#" class="btn btn-black">Select</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
