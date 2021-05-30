@extends('layouts.master')
@section('pageCSS')

@endsection
@section('title') Artist @endsection

@section('content')

<style>
    .follow-profile {
      border: 1px solid #d4d4d4;
      padding: 30px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-radius: 5px;
      margin-bottom: 15px;
    }
    
    .follow-profile img {
      max-width: 130px;
      margin-right: 30px;
    }
    
    .follow-profile .sph-text {
      flex: 1;
    }
    .follow-profile-link {
        display: flex;
        align-items: center;
    }
    .follow-profile .sph-text h4 {
      margin: 0;
      font-size: 24px;
      font-weight: 600;
      color: #e84e89;
      margin-bottom: 8px;
    }
    
    .follow-profile .sph-text h6 {
      margin: 0;
      font-size: 16px;
      margin-bottom: 5px;
      color: #999;
    }
    .follow-profile .rating-wrap {
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }
    .follow-profile .sph-text .rating-wrap i {
      color: #ffb600;
      font-size: 14px;
      margin-right: 2px;
    }
    
    .follow-profile .sph-text .rating-wrap span {
      margin: 0;
      font-size: 14px;
      margin-left: 10px;
    }
    
    .follow-profile .sph-button {
        display: inline-block;
        border: none;
        background: linear-gradient(77deg, #FF4182, #FFA85B 100%);
        padding: 8px 25px;
        color: #fff;
        font-weight: 600;
        font-size: 14px;
        letter-spacing: 1px;
        border-radius: 4px;
        transition: all 0.3s ease-in-out;
    }
    .follow-profile .sph-button:hover{
        background: linear-gradient(77deg, #FFA85B 0%, #FF4182 100%);
        color: #fff !important;
    }
    .foll-heading{
        font-size: 22px;
        color: #050F2F;
        font-weight: 600;
        display: inline-block;
        position: relative;
        margin-bottom: 20px;
    }
    .foll-heading::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        background: #050F2F;
        bottom: -4px;
        left: 0;
    }
    @media (max-width: 575px){
        .follow-profile {
            padding: 10px;
            margin-bottom: 15px;
        }

        .follow-profile img {
            max-width: 60px;
            margin-right: 20px;
        }
        .follow-profile .sph-button{
            margin-left: 0;
            margin-top: 5px;
            padding: 4px 10px;
            font-weight: 500;
            letter-spacing: 0;
            font-size: 12px;
        }
        .follow-profile .sph-text h4 {
            font-size: 16px;
            margin-bottom: 5px;
        }
        .follow-profile .sph-text h6 {
            font-size: 13px;
            margin-bottom: 3px;
        }
        .follow-profile .sph-text .rating-wrap i {
            font-size: 12px;
        }
        .follow-profile .sph-text .rating-wrap span {
            font-size: 12px;
            margin-left: 6px;
        }
        .followers-wrapper-main .container{
            padding: 0;
        }
        .foll-heading{
            font-size: 20px;
            color: #050F2F;
            font-weight: 600;
        }
    }
</style>

<div class="row">
    <div class="col-12">
        
        <!--@include('layouts.inner-navigation')-->
        
        <div class="nav nav-tabs tab-select" role="tablist">
            <a class="" href="valyou-playlist#nav-home">Songs</a>
            <a class="" href="valyou-playlist#nav-profile">Videos</a>
            <a class="" href="valyou-playlist#nav-contact">Investments</a>
            <a class="tab-input" href="valyou-playlist#nav-se" style="padding-top: 3px;">
                <input placeholder="Search">
            </a>
        </div>
        
    </div>
</div>
<div class="followers-wrapper-main">
    <div class="container mb-3 mt-3">
    <h2 class="foll-heading">Followers List</h2>
		<div class="row">
            <div class="col-12">
                <div class="follow-profile">
                    <a href="#" class="follow-profile-link">
                        <img src="https://valyouxmusic.appprojectsavvy.com/assets/images/valyoux/drake-valyou_x_music@2x.png" alt="">
                        <div class="sph-text">
                          <h4>Drake</h4>
                          <h6>Music Artist</h6>
                        </div>
                    </a>
                    <a href="artist-profile" class="sph-button">Follow Back</a>
                </div>
            </div>
            <div class="col-12">
                <div class="follow-profile">
                    <a href="#" class="follow-profile-link">
                        <img src="https://valyouxmusic.appprojectsavvy.com/assets/images/valyoux/nicky_minaj_valyou_x@2x.png" alt="">
                        <div class="sph-text">
                          <h4>Nicki Minaj</h4>
                          <h6>Music Artist</h6>
                        </div>
                    </a>
                    <a href="artist-profile" class="sph-button">Following</a>
                </div>
            </div>
            <div class="col-12">
                <div class="follow-profile">
                    <a href="#" class="follow-profile-link">
                        <img src="http://myprojectstaging.com/valyouxmusic/public/assets/images/valyoux/justin_beiber_valyou_x_music@2x.png" alt="">
                        <div class="sph-text">
                          <h4>Justin Bieber</h4>
                          <h6>Music Artist</h6>
                        </div>
                    </a>
                    <a href="artist-profile" class="sph-button">Unfollow</a>
                </div>
            </div>
        </div>
	</div>
</div>


@endsection

@section('script') 

@endsection