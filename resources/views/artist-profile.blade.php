@extends('layouts.master')

@section('title') @lang('translation.Kanban_Board') @endsection

@section('css')
@endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Artist Profile @endslot
        @slot('li_1') Tasks @endslot
        @slot('li_2') Connect and collaborate @endslot
    @endcomponent
    
    <style>
        .breadcrumb{
            display: none;
        }
        .ctc-single-profile {
          border: 1px solid #d4d4d4;
          padding: 30px 20px;
          display: flex;
          align-items: center;
          border-radius: 5px;
        }
        .ctc-single-profile img {
          max-width: 130px;
          margin-right: 30px;
        }
        .ctc-single-profile .sph-text {
          flex: 1;
        }
        .ctc-single-profile .sph-text h4 {
          margin: 0;
          font-size: 24px;
          font-weight: 600;
          color: #000;
          margin-bottom: 8px;
        }
        .ctc-single-profile .sph-text h6 {
          margin: 0;
          font-size: 16px;
          margin-bottom: 5px;
        }
        .ctc-single-profile .rating-wrap {
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }
        .ctc-single-profile .sph-text .rating-wrap i {
          color: #ffb600;
          font-size: 14px;
          margin-right: 2px;
        }
        
        .ctc-single-profile .sph-text .rating-wrap span {
          margin: 0;
          font-size: 14px;
          margin-left: 10px;
        }
        .ctc-single-profile .sph-button {
            display: inline-block;
            border: none;
            background: linear-gradient(257deg, #00b8ba 0%, #00ffc2 100%);
            padding: 8px 25px;
            color: #fff;
            font-weight: 600;
            font-size: 14px;
            letter-spacing: 1px;
            border-radius: 4px;
        }
        .ap-link{
            display: inline-block;
            font-size: 14px;
            padding: 14px 0 12px;
            border-bottom: 2px solid transparent;
            margin-right: 25px;
            transition: all 0.3s ease-in-out;
        }
        .ap-link.active{
            color: #FF0093;
            border-bottom: 2px solid #FF0093;
        }
        .tab-content p{
            font-size: 14px;
            margin: 10px 0;
        }
        
        
        /*comment css */
        .single-comment {
            display: flex;
            align-items: flex-start;
        }

        .sc-img {
            margin-right: 15px;
            margin-bottom: 20px;
            height: 60px;
            width: 60px;
        }

        .sc-inner {
            display: flex;
            align-items: baseline;
            width: 100%;
            background: #ededed;
            padding: 15px;
            border-radius: 10px;
            height: 100%;
        }

        .sc-name {
            white-space: nowrap;
            width: 90%;
            /*margin-top: 25px;*/
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 600;
            color: #F9508A;
            max-width: 170px;
            min-width: 170px;
        }

        .sc-comment {
            margin-bottom: 0;
            font-size: 12px;
        }
        .sc-inner-head{
            
        }
        .sc-inner-head .rating-wrap {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin: 5px 0;
        }
        .sc-inner-head .rating-wrap i {
          color: #ffb600;
          font-size: 14px;
          margin-right: 2px;
        }
        
        .sc-inner-head .rating-wrap span {
          margin: 0;
          font-size: 14px;
          margin-left: 10px;
        }

        .sidebar-enable.vertical-collpsed .sc-img {
            margin-right: 35px;
        }

        .sidebar-enable.vertical-collpsed .sc-name {
            width: 70%;
        }

        
        @media (max-width: 575px){
            .page-title-box {
                padding-bottom: 15px;
            }
            .connect-nav{
                justify-content: center;
            }
            .connect-nav .cn-item {
                width: 100%;
                margin-right: 0;
            }
            .connect-nav .cn-link{
                width: 100%;
            }
            .ap-link {
                font-size: 12px;
                padding: 5px 0 10px;
                margin-right: 14px;
            }
            
            .ctc-single-profile {
                padding: 10px;
            }

            .ctc-single-profile img {
                max-width: 50px;
                margin-right: 10px;
            }
            .ctc-single-profile .sph-button{
                margin-left: 0;
                margin-top: 5px;
                padding: 4px 10px;
                font-weight: 500;
                letter-spacing: 0;
                font-size: 12px;
            }
            .ctc-single-profile .sph-text h4 {
                font-size: 16px;
                margin-bottom: 5px;
            }
            .ctc-single-profile .sph-text h6 {
                font-size: 13px;
                margin-bottom: 3px;
            }
            .ctc-single-profile .sph-text .rating-wrap i {
                font-size: 12px;
            }
            .ctc-single-profile .sph-text .rating-wrap span {
                font-size: 12px;
                margin-left: 6px;
            }
            
            .avatar-md {
                height: auto;
                width: 25px;
            }

            .pad-left-0 {
                padding-left: 0px;
            }

            .artist-comment-desc {
                margin-top: 0;
                margin-right: 0;
                margin-bottom: 0;
                margin-left: 16.6666666667%;
            }

            .sc-inner {
                flex-wrap: wrap;
                background: #ededed;
                padding: 10px;
                border-radius: 10px;
            }

            .sc-name {
                width: 100%;
                margin: 0 !important;
            }

            .sc-comment {
                margin: 0 !important;
                width: 100%;
            }
            
            .sc-inner-head .rating-wrap i {
                font-size: 12px;
            }
            .sc-inner-head .rating-wrap span {
                font-size: 12px;
                margin-left: 6px;
            }

            .sc-img {
                margin-bottom: 0;
                margin-top: 2px;
            }

            .post-section {
                padding: 10px;
            }

            .sm-right-wrap {
                margin-right: 7px;
            }


            .width-40 {
                max-width: 24px;
                margin-right: 10px;
            }
        }
        
        .plan-box .plan-btn:before{
            display: none;
        }
    </style>
    <div class="artist-profile-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="ctc-single-profile">
                    <img src="https://valyouxmusic.appprojectsavvy.com/assets/uploads/user/69619967.png" alt="">
                    <div class="sph-text">
                      <h4>Bobby k.9</h4>
                      <h6>Singer - Major Artist</h6>
                      <div class="rating-wrap">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <span>30 Reviews</span>
                      </div>
                    </div>
                    <a href="#" class="sph-button">Follow</a>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                
                <ul class="nav nav-tabs artist-profile-tabs" id="artistProfileTab" role="tablist">
                  <li class="ap-item" role="presentation">
                    <a class="ap-link active" id="company-tab" data-toggle="tab" href="#company" role="tab" aria-controls="company" aria-selected="true">Company Profile</a>
                  </li>
                  <li class="ap-item" role="presentation">
                    <a class="ap-link" id="portfolio-tab" data-toggle="tab" href="#portfolio" role="tab" aria-controls="portfolio" aria-selected="false">Portfolio</a>
                  </li>
                  <li class="ap-item" role="presentation">
                    <a class="ap-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Review & Rating</a>
                  </li>
                  <li class="ap-item" role="presentation">
                    <a class="ap-link" id="services-tab" data-toggle="tab" href="#services" role="tab" aria-controls="services" aria-selected="false">Services</a>
                  </li>
                </ul>
                
                <div class="tab-content" id="artistProfileTabContent">
                  <div class="tab-pane fade show active" id="company" role="tabpanel" aria-labelledby="company-tab">
                      <p>I am a Director Of Music Group</p>
                  </div>
                  <div class="tab-pane fade" id="portfolio" role="tabpanel" aria-labelledby="portfolio-tab">
                      <p>Recorded a track with glasses malone</p>
                  </div>
                  <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                      <div class="w-100 user-chat">
                        <div class="card">
                            <div class="col-md-12 container">
                                <ul class="list-unstyled mt-3" data-simplebaar style="max-height: 470px;">
                                    <li>
                                        <!--new working -->
                                        <div class="row">
                                            <div class="col-12 single-comment">
                                                <img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}"
                                                    alt="" class="avatar-md rounded-circle sc-img img-fluid">
                                                <div class="sc-inner">
                                                    <div class="sc-inner-head">
                                                        <p class="sc-name artist-comment-name">Kanye West </p>
                                                        <div class="rating-wrap">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <span>5 Star</span>
                                                          </div>
                                                    </div>
                                                    <p class="sc-comment">dope artist i had invest dope artist i had
                                                        invest dope artist i had invest. dope artist i had invest
                                                        dope artist i had invest dope artist i had invest dope
                                                        artist i had invest dope artist i had invest dope artist i
                                                        had invest dope artist i had invest dope artist i had invest
                                                        dope artist i had invest dope artist i had invest dope
                                                        artist i had invest </p>
                                                </div>
                                            </div>
                                        </div>


                                        <hr class="mb-2">
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-12 single-comment">
                                                <img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}"
                                                    alt="" class="avatar-md rounded-circle sc-img img-fluid">
                                                <div class="sc-inner">
                                                    <div class="sc-inner-head">
                                                        <p class="sc-name artist-comment-name">Kanye West </p>
                                                        <div class="rating-wrap">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <span>5 Star</span>
                                                          </div>
                                                    </div>
                                                    <p class="sc-comment">Awesome artist I would like to invest now!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-2">
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-12 single-comment">
                                                <img src="{{ URL::asset('assets/images/valyoux/Kanye_west_valyou_x_music@2x.png') }}"
                                                    alt="" class="avatar-md rounded-circle sc-img img-fluid">
                                                <div class="sc-inner">
                                                    <div class="sc-inner-head">
                                                        <p class="sc-name artist-comment-name">Kanye West </p>
                                                        <div class="rating-wrap">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <span>5 Star</span>
                                                          </div>
                                                    </div>
                                                    <p class="sc-comment">Stocks going up</p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-2">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  </div>
                  
                  <div class="tab-pane fade" id="services" role="tabpanel" aria-labelledby="services-tab">
                      <div class="services_inner">
                          
                          <div class="card plan-box _1JscEqX4 mt-2">
                            <div class="card-body p-4">
                                <div class="media">
                                    <div class="media-body">
                                        <h5>Vocal</h5>
                                        <p>I will collaborate with you and record a rap verse on your song</p>
                                    </div>
                                </div>
                                <div class="py-1">
                                    <h2><sup><small>$</small></sup> 250</h2>
                                </div>
            
                                <div class="plan-features mt-0">
                                    <p><i class="bx bx-checkbox-square text-black mr-2"></i> Completed in 3 days</p>
                                </div>
                                <div class="text-center plan-btn">
                                    <a href="#" class="btn btn-black waves-effect waves-light px-4">Book</a>
                                </div>
                            </div>
                        </div>
                          
                      </div>
                  </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection

@section('script')

    <!-- Custom js-->
    <script src="{{ URL::asset('assets/js/custom.min.js') }}"></script>

@endsection
