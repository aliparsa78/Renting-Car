
@extends('Frontend.layout.main')
@section('content')->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Profile <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Your Profile</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
        	<div class="col-md-4">
        		<div class="row mb-5">
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-user-o"></span>
			          	</div>
			            <p><span>Full Name:</span> {{$user->firstname}}  {{$user->lastname}} </p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-mobile-phone"></span>
			          	</div>
			            <p><span>Phone:</span> <a href="tel://1234567920">{{$user->mobile}}</a></p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-envelope-o"></span>
			          	</div>
			            <p><span>Email:</span> <a href="mailto:info@yoursite.com">{{$user->email}}</a></p>
			          </div>
		          </div>
		        </div>
          </div>
          <div class="col-md-4">
        		<div class="row mb-5">
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-id-card-o"></span>
			          	</div>
			            <p><span>Id Number:</span> {{$user->id_number}} </p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-picture-o"></span>
			          	</div>
			            <p><span>Profile Picture:</span> <a href="tel://1234567920">
                            <img src="{{asset('profile/'.$user->profile_path)}}" width="80px" height="80px" style="border-radius: 20px;" alt="Not Profile">
                        </a></p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-user-o"></span>
			          	</div>
			            <p><span>Job: </span> <a href="mailto:info@yoursite.com">{{$user->job}}</a></p>
			          </div>
		          </div>
		        </div>
                <a href="update_user"><b>Change Information</b></a>
          </div>
          <div class="col-md-4">
        		<div class="row mb-5">
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-user-o"></span>
			          	</div>
			            <p><span>Password:</span> <a href="" class="text-info">Change Password</a> </p>
			          </div>
		          </div>
		         
		        </div>
          </div>
        </div>
        
      </div>
    </section>
	
@endsection