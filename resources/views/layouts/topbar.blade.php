<style>
    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 7px;
        padding-left: 24px;
        font-weight: 300;
        font-size: 13px;
        color: #050F2F;
        font-family: 'Roboto', sans-serif;
    }
    .topbar-new {
        display: flex;
        align-items: center;
    }

    .topbar-new-desktop {
        display: flex;
    }

    .topbar-new-mob {
        display: none;
    }

    .header-topbar {
        width: 100%;
        justify-content: space-between;
    }

    .flex-centerr-end {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .mdi-chevron-down {
        display: none !important;
    }
    .navbar-header .dropdown .dropdown-menu.dropnewstuff{
        right: 53px !important;
        top: -9px !important;
    } 
    @media (max-width: 670px) {
        .topbar-new-desktop {
            display: none;
        }

        .topbar-new-mob {
            display: flex;
        }
        .inner-flex-end{
            width: 100%;
            display: flex;
            justify-content: flex-end;
        }
    }

    @media (max-width: 575px) {
        .header-topbar{
            align-items: center;
        }
        .navbar-brand-box.mv {
            padding: 0 0 0 15px;
            margin-right: 10px;
        }

        .navbar-header {
            padding-right: 0;
        }

        .btn-neg-m {
            margin-right: -5px;
        }

        .topbar-new-desktop {
            display: none;
        }

        .topbar-new-mob {
            display: flex;
        }
        .topbar-new-mob button{
            padding: .47rem 6px;
        }
        .navbar-header .dropdown .dropdown-menu.switch-dropdownmenu{
            left: 15%!important;
            top: 25%!important;
        }
        .btnbar.mv{
            padding: 0 !important;
        }
        .inner-flex-end {
    padding-right: 20px;
}
    }
    button.swal2-confirm.swal2-styled{
            background: #71ea31 !important;
        }
        .nav-right-margin{
            margin-right: 200px;
        }
</style>

<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex header-topbar">
            <!-- LOGO -->
            <div class="navbar-brand-box dv">
                <a href="https://valyou-x-music-au.questai.app/Valyou-X/" class="logo">
                    <span class="float-left logo-lg ml-4">
                        <img src="{{ URL::asset('/assets/images/valyou_x_black_logo.svg')}}" alt="" height="45">
                    </span>
                </a>
            </div>
            <div class="navbar-brand-box mv">
                <a href="https://valyou-x-music-au.questai.app/Valyou-X/" class="logo">
                     <span class="logo-xs">
                        <img src="{{ URL::asset('/assets/images/valyou_x_black_logo.svg')}}" alt="" height="27">
                    </span>
                </a>
            </div>
            
            <div class="inner-flex-end">
            <div class=" mr-2 topbar-new topbar-new-mob">
                <div class="dropdown">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="dropdown" id="totalbalance">
                        <!--<i class="mdi mdi-wallet"></i>-->
                        <img src="{{ asset('assets/images/valyoux/wallet-1.svg') }}" width="20">
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <p>Total Balance: $ 0.00000006 VXD</p>
                    </div>
                </div>
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect">
                        <a class="nav-link msg-link" href="{{ url('chat') }}">
                            <img src="{{ asset('assets/images/valyoux/message icon.svg') }}" width="20">
                            <span class="badge badge-danger badge-pill">3</span>
                        </a>
                    </button>
                </div>
                
                @php
                if ($user->roles->contains(2)) {
                    $image = asset('assets/images/valyoux/artist.svg');
                    $title = 'Artist';
                } elseif ($user->roles->contains(3)) {
                    $image = asset('assets/images/valyoux/investor.svg');
                    $title = 'Investor';
                } elseif ($user->roles->contains(4)) {
                    $image = asset('assets/images/valyoux/business.svg');
                    $title = 'Business';
                } else {
                    $image = asset('assets/images/valyoux/accountSwitch.svg');
                    $title = 'Admin';
                }
            @endphp
                <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img src="{{ asset($image) }}" alt="{{ asset($image) }}" title="{{$title}}" width="25" />
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0 switch-dropdownmenu" aria-labelledby="page-header-notifications-dropdown" style="position: absolute; transform: translate3d(-274px, 70px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-end">
                            <div data-simplebar="init" style="max-height: 230px;">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: -17px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <a href="{{ route('admin.role.switch',['role_id' => 2]) }}" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="{{ asset('assets/images/valyoux/artist.svg') }}" alt="{{ asset('assets/images/valyoux/artist.svg') }}" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Artist</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="{{ route('admin.role.switch',['role_id' => 4]) }}" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="{{ asset('assets/images/valyoux/business.svg') }}" alt="{{ asset('assets/images/valyoux/business.svg') }}" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Business</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="{{ route('admin.role.switch',['role_id' => 3]) }}" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="{{ asset('assets/images/valyoux/investor.svg') }}" alt="{{ asset('assets/images/valyoux/investor.svg') }}" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Investor</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 386px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: block; height: 137px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <div class="dropdown d-inline-block">
                    <a href="{{ url('contacts-profile') }}" class="btn header-item waves-effect">
                        <img class="rounded-circle header-profile-user" src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg') }}"
                             alt="Header Avatar">
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </a>
                </div>
            </div>


            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect btnbar mv vertical-menu-btn btn-neg-m">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            </div>
            
            <nav class="navbar navbar-expand-lg navbar-light nav-right-margin">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://valyou-x-music-au.questai.app/Valyou-X/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('crypto-ico-landing') }}">Buy VXD Currency</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('projects-list') }}">Market</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.social-media') }}">Social Media</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('tasks-kanban') }}" class="nav-link">Connect</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">Live</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.social-media') }}" class="nav-link">News</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('ecommerce-products') }}" class="nav-link">Store</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="flex-centerr-end">
                <div class="mr-2 topbar-new topbar-new-desktop">
                    <div class="dropdown">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="dropdown" id="totalbalance">
                            <img src="{{ asset('assets/images/valyoux/wallet-1.svg') }}" width="20">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropnewstuff">
                            <p class="m-0 py-2">Total Balance: $ {{ auth()->user()->wallet }} VXD</p>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect">
                            <a class="nav-link msg-link" href="{{ url('chat') }}">
                                <img src="{{ asset('assets/images/valyoux/message icon.svg') }}" width="20">
                                <span class="badge badge-danger badge-pill">3</span>
                            </a>
                        </button>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img src="{{ $image }}" width="25" title="{{$title}}" alt="" />
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown" style="position: absolute; transform: translate3d(-274px, 70px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-end">
                            <div data-simplebar="init" style="max-height: 230px;">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: -17px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <a href="{{ route('admin.role.switch',['role_id' => 2]) }}" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="{{ asset('assets/images/valyoux/artist.svg') }}" alt="{{ asset('assets/images/valyoux/artist.svg') }}" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Artist</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="{{ route('admin.role.switch',['role_id' => 4]) }}" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="{{ asset('assets/images/valyoux/business.svg') }}" alt="{{ asset('assets/images/valyoux/business.svg') }}" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Business</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="{{ route('admin.role.switch',['role_id' => 3]) }}" class="text-reset notification-item">
                                                        <div class="media">
                                                            <div class="avatar-xs mr-3">
                                                                <span class="avatar-title rounded-circle font-size-16">
                                                                    <img src="{{ asset('assets/images/valyoux/investor.svg') }}" alt="{{ asset('assets/images/valyoux/investor.svg') }}" width="16" />
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Investor</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 386px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: block; height: 137px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <a href="{{ url('contacts-profile') }}" class="btn header-item waves-effect">
                            <img class="rounded-circle header-profile-user" src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg') }}"
                                 alt="Header Avatar">
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </a>
                    </div>
                </div>
                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect btnbar dv vertical-menu-btn mr-3">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
    @yield('bottom-navbar')
</header>