@extends('backend.layouts.app')
@section('content')
		<!-- site preloader start -->
		<div class="page-loader">
			<div class="loader-in"></div>
		</div>
		<!-- site preloader end -->


			<!-- login box start -->
			<div class="login-box">
				<a class="close-login" href="#"><i class="fa fa-times"></i></a>
				<form>
					<div class="container">
						<p>Hello our valued visitor, We present you the best web solutions and high quality graphic designs with a lot of features. just login to your account and enjoy ...</p>
						<div class="login-controls">
							<div class="skew-25 input-box left">
								<input type="text" class="txt-box skew25" placeholder="User name Or Email" />
							</div>
							<div class="skew-25 input-box left">
								<input type="password" class="txt-box skew25" placeholder="Password" />
							</div>
							<div class="left skew-25 main-bg">
								<input type="submit" class="btn skew25" value="Login" />
							</div>
							<div class="check-box-box">
								<input type="checkbox" class="check-box" /><label>Remember me !</label>
								<a href="#">Forgot your password ?</a>
							</div>
						</div>
					</div>
				</form>
			</div>
			<!-- login box End -->

			<!-- Header Start -->
			<div id="headWrapper" class="clearfix">

				<!-- top bar start -->
				@include('backend.layouts.topbar')
				<!-- top bar end -->
                @include('backend.layouts.top_header')
			</div>
			<!-- Header End -->

			<!-- Content Start -->
			
				
                <div id="contentWrapper">
                   
                    <div class="padd-top-50">
                        <div class="container">
                            <div class="row">
                                <div class="cell-7 contact-form fx" data-animate="fadeInLeft" id="contact">
                                    <h3 class="block-head">Update</h3>
                                    <mark id="message"></mark>
                                    <form class="form-signin cform" method="POST" action="{{ route('store.category') }}" id="cform" autocomplete="on">
                                        @csrf
										{{-- <input type="hidden" name="id" value="{{ $category->id }}"> --}}
                                        <div class="form-input">
                                            <label>Category Name<span class="red">*</span></label>
                                            <input type="text" required="required" name="name">
                                        </div>
                                      
                                        <div class="form-input">
                                            <input type="submit" class="btn btn-large main-bg" value="Submit">&nbsp;&nbsp;<input type="reset" class="btn btn-large" value="Reset" id="reset">
                                        </div>
                                    </form>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    
                </div>
				

			</div>
@endsection
