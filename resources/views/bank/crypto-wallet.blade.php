@extends('layouts.master')

@section('title') @lang('translation.Wallet') @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        @media (max-width: 575px) {
            .wallet div.card-body.mt-5 {
                margin-top: 2rem !important;
            }
        }

    </style>
@endsection

@section('content')

    <div class="tab-select nav nav-pills crypto-wallet" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 nav-responsive">
                    <a href="#personal-account" class="active" id="personal-account" data-toggle="pill" role="tab"
                        aria-controls="all" aria-selected="true"> Personal Account</a>
                    <a href="#artist" class="unclicked" id="artist" data-toggle="pill" role="tab"
                        aria-controls="expression_of_interest" aria-selected="false"> Artist </a>
                    <a class="unclicked" href="#investment" id="investment" data-toggle="pill" role="tab"
                        aria-controls="upcoming" aria-selected="false"> Investments </a>
                    <a href="#business" class="unclicked" id="business" data-toggle="pill" role="tab"
                        aria-controls="professional" aria-selected="false"> Business </a>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>


    <div class="card mini-stats-wid wallet">
        <div class="card-body mt-5">
            <div class="media-body text-center">
                <h2 id="vxd-price" class="mb-0">$ {{ auth()->user()->wallet }} VXD</h2>
                <p class="v-pink mt-2">Send this account number or QR code to receive payments</p>
                <p class="text-muted">This is your wallet address account number - 0x35b543362348765723487657</p>
            </div>
        </div>
    </div>

    <div class="wallet-button">
        <div class="bank_btns_wrap">
            <button class="btn btn-pink send_money">Send Money VXD</button>
            <button class="btn btn-green req_money">Request Money VXD</button>
            <button class="btn btn-dark-pink exchange">Exchange VXD</button>
        </div>
        <div class="deposit_box">
            <form id="depositForm">
                <div class="deposit">
                    <select id="user_id" name="user_id" required>
                        <option value="">Select User ID</option>
                        @foreach ($users as $id => $value)
                            <option value="{{ $id }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    <input id="wallet" name="wallet" placeholder="Minimum Deposit $10" required>
                    <button type="submit" class="deposit_btn">Deposit</button>
                </div>
            </form>
            <br>
            <select name="" id="">
                <option value="VXD Currency Exchange Rate in USDT">VXD Currency Exchange Rate in USDT</option>
            </select>
        </div>
    </div>
    <br>
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">View Transaction & Earning History</h4>
                    <h5>Income | Expenditure</h5>
                    <div class="mt-4">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-hover dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Transaction ID Hash</th>
                                        <th>Transaction Date</th>
                                        <th>Time</th>
                                        <th>Amount</th>
                                        <th>BTC</th>
                                        <th><i class="bx bxs-down-arrow"></i></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>12345679</td>
                                        <td>03 Mar, 2020</td>
                                        <td>00:00</td>
                                        <td>50 VXD</td>
                                        <td>Pending</td>
                                        <td>--</td>
                                    </tr>
                                    <tr>
                                        <td>12345679</td>
                                        <td>03 Mar, 2020</td>
                                        <td>00:00</td>
                                        <td>50 VXD</td>
                                        <td>Pending</td>
                                        <td>--</td>
                                    </tr>
                                    <tr>
                                        <td>12345679</td>
                                        <td>03 Mar, 2020</td>
                                        <td>00:00</td>
                                        <td>50 VXD</td>
                                        <td>Pending</td>
                                        <td>--</td>
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

    <script src="{{ URL::asset('assets/libs/axios/axios.min.js') }}"></script>
@endsection
@section('script-bottom')

<script type="text/javascript">
    $('#personal-account').click(function() {
        $('#v-pills-tab>div>div>div>a.active').removeClass('active');
        $('#vxd-price').text('$ 0.00000002 VXD');
    });
    $('#artist').click(function() {
        $('#v-pills-tab>div>div>div>a.active').removeClass('active');
        $('#vxd-price').text('$ 20.00000004 VXD');
    });
    $('#investment').click(function() {
        $('#v-pills-tab>div>div>div>a.active').removeClass('active');
        $('#vxd-price').text('$ 5.00000002 VXD');
    });
    $('#business').click(function() {
        $('#v-pills-tab>div>div>div>a.active').removeClass('active');
        $('#vxd-price').text('$ 50.0000003 VXD');
    });

    let myForm = document.getElementById('depositForm')
    myForm.addEventListener('submit', (e) => {
        e.preventDefault();
        let formData = new FormData(myForm);
        axios({
                method: 'post',
                url: `{{ route('admin.deposit') }}`,
                data: formData,
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
            .then((r) => {
                if (r.data.status === "success") {
                    window.location.reload();
                } else {
                    js_error(r.data.message)
                }
            })
            .catch(e => console.error(e));
    })
</script>
@endsection
