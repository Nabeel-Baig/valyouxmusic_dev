<style>
    .margin-icon-bf {
        margin-left: 6px;
        margin-right: 8px !important;
    }

    .mr-9 {
        margin-right: 9px !important;
    }

    .ml-10 {
        margin-left: 10px !important;
    }

    .vertical-collpsed .logo span.logo-lg {
        display: block;
        margin-left: 15px !important;
    }

    .vertical-collpsed .logo span.logo-lg img {
        max-width: 110px;
    }

    .side-nav-follo {
        display: none;
    }

    .m-business-icon {
        margin-right: 9px;
        margin-left: 6px;
    }

    .navbar-header .dropdown .dropdown-menu {
        left: auto !important;
        right: 13px !important;
        text-align: center;
        width: 50%;
        top: 17px !important;
    }

    .marquee {
        overflow: hidden !important;
    }

</style>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- end row -->
    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <div class="row m-0 side-nav-follo" id="side-nav-follower">
                <div class="col-sm-12 p-0">
                    <div class="card mb-1">
                        <div class="card-body bg-black">
                            <div class="media">
                                <div class="mr-2">
                                    <img src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg') }}"
                                        alt="" class="avatar-md rounded-circle img-thumbnail">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="text-muted ml-3">
                                        <h4>{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}</h4>
                                        <p class="mb-2">{{ auth()->user()->email }}</p>
                                        <a href="crypto-kyc-application"><span class="mb-0">Verify Account ID</span></a>
                                        <img src="{{ asset('assets/images/valyoux/verify_valyouxaccount_id_card.svg') }}"
                                            alt="" height="15">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="nav-followers">
                                <h6>Followers</h6>
                                <div class="row text-center nav">
                                    <div class="col-4">
                                        <span><b>0</b></span>
                                        <p class="text-muted mb-2">Artist</p>
                                    </div>
                                    <div class="col-4">
                                        <span><b>0</b></span>
                                        <p class="text-muted mb-2">Investor</p>
                                    </div>
                                    <div class="col-4">
                                        <span><b>0</b></span>
                                        <p class="text-muted mb-2">Business</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                @can('artist_access')
                    <li class="menu-title">Artist Dashboard</li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect mr-1">
                            <img class="mr-1" width="25" src="{{ asset('assets/images/valyoux/artist_icon.svg') }}">
                            <span>Artist</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="artist-pricing">Investment Deal</a></li>
                            <li><a href="javascript:void(0)">Funds Management</a></li>
                            <li><a href="javascript:void(0)">Academy</a></li>
                            <li><a href="{{ route('upload-artist') }}">Uploads</a></li>
                            <li><a href="songs">My Songs</a></li>
                            <li><a href="videos">My Videos</a></li>
                            <li><a href="{{ route('admin.upload-video') }}">Upload Videos</a></li>

                            <li><a href="followers">Followers</a></li>
                            <li><a href="{{route('promote-music')}}">Promote Your Music</a></li>

                            <li><a href="revenue-streams">Revenue Streams</a></li>
                            <li><a href="tasks-kanban">Connect & Collaborate</a></li>
                            <li><a href="{{ url('chat') }}">Messages</a></li>

                            <li><a href="javascript:void(0)">Invite Friends / Fans</a></li>
                        </ul>
                    </li>
                @endcan
                @can('music_fan_access')
                    <li class="menu-title">Music Fan Dashboard</li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect mr-1">
                            <img class="mr-1" width="25"
                                src="{{ asset('assets/images/valyoux/musicfan_investor_icon.svg') }}">
                            <span>Investor / Music Fan</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="followers">Following</a></li>
                            <li><a href="crypto-lending">Investment Portfolio</a></li>
                            <li><a href="{{ url('valyou-playlist') }}">Valyou Playlist</a></li>
                            <li><a href="javascript:void(0)">Earnings</a></li>
                            <li><a href="javascript:void(0)">Invite an Artist</a></li>
                            <li><a href="pages-pricing">Sign an Artist</a></li>
                            <li><a href="{{ url('chat') }}">Messages</a></li>
                            <li><a href="javascript:void(0)">Listen & Earn</a></li>
                        </ul>
                    </li>
                @endcan
                @can('business_access')
                    <li class="menu-title">Business Dashboard</li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <img class="m-business-icon" width="15"
                                src="{{ asset('assets/images/valyoux/businessicon.svg') }}">
                            <span>Business & Freelancer</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="followers">Following</a></li>
                            <li><a href="{{ url('chat') }}">Messages</a></li>
                            <li><a href="javascript:void(0)">Services You Provide</a></li>
                            <li><a href="tasks-kanban">Connect & Collaborate</a></li>
                            <li><a href="javascript:void(0)">Order in Progress</a></li>
                            <li><a href="javascript:void(0)">Reviews</a></li>
                            <li><a href="javascript:void(0)">Earnings</a></li>
                        </ul>
                    </li>
                @endcan

                <li class="menu-title">General Menu</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <img class="mr-1" width="25" src="{{ asset('assets/images/valyoux/stockmarket_icon.svg') }}">
                        <span>Music Artist Stock Market</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('projects-list') }}">All - Music Artists</a></li>
                        <li><a href="{{ url('projects-list') }}">America (North)</a></li>
                        <li><a href="{{ url('projects-list') }}">Africa</a></li>
                        <li><a href="{{ url('projects-list') }}">South America</a></li>
                        <li><a href="{{ url('projects-list') }}">Asia</a></li>
                        <li><a href="{{ url('projects-list') }}">Australia</a></li>
                        <li><a href="{{ url('projects-list') }}">Europe</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-bitcoin"></i>
                        <span>Bank</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('crypto-wallet') }}">Account Balance</a></li>
                        <li><a href="{{ url('crypto-buy-sell') }}">Deposit</a></li>
                        <li><a href="{{ url('crypto-buy-sell') }}">Currency Exchange</a></li>
                        <li><a href="{{ url('crypto-ico-landing') }}">Buy VXD Currency</a></li>
                        <li><a href="{{ url('crypto-lending') }}">Investment Portfolio</a></li>
                        <li><a href="{{ url('crypto-orders') }}">VXD Orders</a></li>
                        <li><a href="{{ url('crypto-kyc-application') }}">@lang('translation.KYC_Application')</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin.social-media') }}">
                        <img class="mr-9" width="16"
                            src="{{ asset('assets/images/valyoux/social_media_valyoux_new.svg') }}">
                        <span>Social Media</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="bx bx-news"></i>
                        <span>News</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-map"></i>
                        <span>Search Radar</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-vector">Artists</a></li>
                        <li><a href="investor-maps-vector">Investors / Music Fans</a></li>
                        <li><a href="business-maps-vector">Businesses</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span>Store</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-products">@lang('translation.Products')</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span>@lang('translation.Authentication')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="crypto-kyc-application">ID Verification</a></li>
                        <li><a href="auth-login">2 Factor Authentication</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <svg width="16" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="user-headset"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                            class="svg-inline--fa fa-user-headset fa-w-14 fa-3x">
                            <path fill="currentColor"
                                d="M320 352h-4.7c-12.16 0-24 2.9-35.5 6.8a173.76 173.76 0 0 1-111.64 0c-11.48-3.9-23.29-6.78-35.42-6.78H128A128 128 0 0 0 0 480a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32 128 128 0 0 0-128-128zM32 480a96.1 96.1 0 0 1 96-96h4.74c6.92 0 14.92 1.62 25.16 5.09a205.75 205.75 0 0 0 132.16 0c10.31-3.49 18.33-5.11 25.24-5.11h4.7a96.1 96.1 0 0 1 96 96zm16-256a16 16 0 0 0 16-16v-16c0-88.22 71.78-160 160-160s160 71.78 160 160v16a80.09 80.09 0 0 1-80 80h-32a32 32 0 0 0-32-32h-32a32 32 0 0 0 0 64h96a112.14 112.14 0 0 0 112-112v-16C416 86.12 329.88 0 224 0S32 86.12 32 192v16a16 16 0 0 0 16 16zM224 96a95.57 95.57 0 0 1 71.23 159.76c0 .09.13.15.18.24H304a47.89 47.89 0 0 0 40.55-22.58C349 220.36 352 206.58 352 192a128 128 0 0 0-256 0c0 40.42 19.1 76 48.35 99.47-.06-1.17-.35-2.28-.35-3.47a63.25 63.25 0 0 1 8.93-32A95.58 95.58 0 0 1 224 96z"
                                class=""></path>
                        </svg>
                        {{-- <i class="svg-inline--fa fa-user-headset fa-w-14 fa-3x"></i> --}}
                        <span class="ml-10">Support</span>
                    </a>
                </li>
                <li>
                    <a href="crypto-ico-landing">
                        <i class="bx bx-home-alt"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-user"></i>
                        <span>Add Account</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @can('artist_create')
                            <li><a href="{{ route('artist.artist.create') }}">Create Artist</a></li>
                        @endcan
                        @can('business_create')
                            <li><a href="{{ route('business.business.create') }}">Create Business</a></li>
                        @endcan
                    </ul>
                </li>

                @can('admin_access')
                    <li class="menu-title">Admin Menu</li>
                    @can('user_management_access')
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fas fa-user-lock"></i>
                                <span>User Management</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                @can('permission_access')
                                    <li><a href="{{ route('admin.permission') }}">Permissions</a></li>
                                @endcan
                                @can('role_access')
                                    <li><a href="{{ route('admin.role') }}">Roles</a></li>
                                @endcan
                                @can('user_access')
                                    <li><a href="{{ route('admin.user.index') }}">Users</a></li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bxs-user-detail"></i>
                            <span>Subscriptions</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="javascript:void(0)">Active</a></li>

                            <li><a href="javascript:void(0)">Inactive</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="calendar" class="waves-effect">
                            <i class="bx bx-calendar"></i>
                            <span>@lang('translation.Calendar')</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-store"></i>
                            <span>@lang('translation.Ecommerce')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="ecommerce-products">@lang('translation.Products')</a></li>
                            <li><a href="ecommerce-product-detail">@lang('translation.Product_Detail')</a></li>
                            <li><a href="ecommerce-orders">@lang('translation.Orders')</a></li>
                            <li><a href="ecommerce-customers">@lang('translation.Customers')</a></li>
                            <li><a href="ecommerce-cart">@lang('translation.Cart')</a></li>
                            <li><a href="ecommerce-checkout">@lang('translation.Checkout')</a></li>
                            <li><a href="ecommerce-shops">@lang('translation.Shops')</a></li>
                            <li><a href="ecommerce-add-product">@lang('translation.Add_Product')</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">03</span>
                            <span>@lang('translation.Dashboard')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="index">@lang('translation.Default')</a></li>
                            <li><a href="dashboard-saas">@lang('translation.Saas')</a></li>
                            <li><a href="dashboard-crypto">@lang('translation.Crypto')</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-file"></i>
                            <span>Pricing Plan</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="pages-starter">@lang('translation.Starter_Page')</a></li>
                            <li><a href="pages-maintenance">@lang('translation.Maintenance')</a></li>
                            <li><a href="pages-timeline">@lang('translation.Timeline')</a></li>
                            <li><a href="pages-faqs">@lang('translation.FAQs')</a></li>
                            <li><a href="pages-pricing">@lang('translation.Pricing')</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-layout"></i>
                            <span>List an Artist / Brand</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="form-validation">Expression of Interest</a></li>
                            <li><a href="form-validation">Get Signed</a></li>
                            <li><a href="form-validation">Upcoming Artist</a></li>
                            <li><a href="{{ route('admin.user.profile', auth()->user()->id) }}">Professional Artist</a>
                            </li>
                            <li><a href="form-validation">Independent Major Artist</a></li>
                            <li><a href="form-validation">Major Label Artist</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="chat" class=" waves-effect">
                            <i class="bx bx-chat"></i>
                            <span class="badge badge-pill badge-success float-right">@lang('translation.New')</span>
                            <span>Chat / Message</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-envelope"></i>
                            <span>Managed Investment</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="email-inbox">Actively Managed</a></li>
                            <li><a href="email-read">Passively Managed</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-envelope"></i>
                            <span>@lang('translation.Email')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="email-inbox">@lang('translation.Inbox')</a></li>
                            <li><a href="email-read">@lang('translation.Read_Email')</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-receipt"></i>
                            <span>@lang('translation.Invoices')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="invoices-list">@lang('translation.Invoice_List')</a></li>
                            <li><a href="invoices-detail">@lang('translation.Invoice_Detail')</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-task"></i>
                            <span>@lang('translation.Tasks')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="tasks-list">@lang('translation.Task_List')</a></li>
                            <li><a href="tasks-kanban">@lang('translation.Kanban_Board')</a></li>
                            <li><a href="tasks-create">@lang('translation.Create_Task')</a></li>
                        </ul>
                    </li>
                @endcan
                <li>
                    <a href="javascript: void(0);"
                        onclick="event.preventDefault(); document.getElementById('logoutform').submit();"
                        class="waves-effect">
                        <i class="bx bx-power-off"></i>
                        <span>@lang('translation.Logout')</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<form id="logoutform" action="{{ route('logout') }}" style="display: none" method="POST">@csrf</form>
