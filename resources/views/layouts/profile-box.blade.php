<style>
.for-web-profile {
    display: block;
}
.for-mob-profile {
    display: none;
}
@media (max-width: 525px) {
    .new-card-ce img {
        max-width: 50px;
    }
    img.rounded-circle.avatar-xm.m-1.play-button {
        max-width: 60px;
        width: 30px;
    }
    .mkt-newbtn button {
        margin-top: -18px !important;
    }
    .for-web-profile {
        display: none;
    }
    .for-mob-profile {
        display: block;
        font-family: Roboto, sans-serif;
    }
    .for-mob-profile {
        position: fixed !important;
        top: 70px;
        left: 0px;
        width: 100%;
        padding: 0 20px;
        z-index: 9;
    }
    .for-mob-profile .bg-black {
        border-radius: 5px !important;
    }
}
</style>
<!--for web-->
<div class="col-lg-12 for-web-profile">
    <div class="card">
        <div class="card-body bg-black">
            <div class="row">
                <div class="col-3 col-md-1 col-lg-1 col-sm-1">
                    <img src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg') }}" alt="" class="rounded-circle" width="100%">
                </div>
                <div class="col-5 col-md-3 col-lg-3 col-sm-3">
                    <div class="text-muted">
                        <h4>{{ auth()->user()->first_name.' '.auth()->user()->last_name }}</h4>
                        <p class="mb-1">Singer</p>
                        <p class="mb-0">Major Artist Signed</p>
                    </div>
                </div>
                <br>
                <div class="col-7 col-md-5">
                    <p>Market Value</p>
                    <h2>$2,455,578.60</h2>
                </div>
                <div class="col-5 col-md-2">
                    <button class="btn btn-light waves-effect bottom mt-4">Follow</button>
                </div>
            </div>
        </div>
    </div>
</div>
        
<!--for mob-->
<div class="col-lg-12 for-mob-profile">
    <div class="card name-card-margin">
        <div class="card-body bg-black new-card-ce">
            <div class="row">
                <div class="col-3 col-md-1 col-lg-1 col-sm-1 pr-0 ">
                    <img src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg') }}" alt="" class="rounded-circle" width="100%">
                </div>
                <div class="col-5 col-md-3 col-lg-3 col-sm-3 pl-0-new">
                    <div class="text-muted">
                        <h4>{{ auth()->user()->first_name.' '.auth()->user()->last_name }}</h4>
                        <p class="mb-1">Singer</p>
                        <p class="mb-0">Major Artist Signed</p>
                    </div>
                </div>
                <br>
                <div class="col-4 col-md-4 pl-0 mkt-new">
                    <p class="mb-6">Market Value</p>
                    <h2>$20,300,567.76</h2>
                </div>
                <style>
                    @media (max-width: 525px){
                        .mkt-newbtn button {
                            margin-top: -18px!important;
                        }
                    }
                </style>
                <div class="col-12 col-md-2 mkt-newbtn">
                    <button class="btn btn-light waves-effect bottom mt-4">Follow</button>
                </div>
            </div>
        </div>
    </div>
</div>