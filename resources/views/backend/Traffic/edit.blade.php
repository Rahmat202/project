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
                                    <h3 class="block-head">Add Traffic</h3>
                                    <mark id="message"></mark>
                                    <form class="form-signin cform" 
                                    method="POST" action="{{ route('update.traffic') }}" id="cform" autocomplete="on">
                            
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $traffic->id }}">
                                        <div class="form-input">
                                            <label>System Date<span class="red">*</span></label>
                                            <input type="date" class="form-control" required="required" name="system_date" value="{{ $traffic->system_date }}">
                                        </div>
                                        <div class="form-input">
                                            <label>Page<span class="red">*</span></label>
                                            <input type="text" required="required" name="page" value="{{ $traffic->page }}">
                                        </div>
                                        <div class="form-input">
                                            <label>City<span class="red">*</span></label>
                                            <input type="text" required="required" name="city" value="{{ $traffic->city }}">
                                        </div>
                                        <div class="form-input">
                                            <label>Country<span class="red">*</span></label>
                                            <input type="text" required="required" name="country" value="{{ $traffic->country }}">
                                        </div>
                                    <div class="form-input">
                                            <label class="form-label">Category</label>
                                        <select name="category_id" id="" class="form-control">
                                            <option value="">Please Select</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                
                                            @endforeach
                                        </select>
                                        </div> 
                                       
                                        <div class="form-input">
                                            <label>Sub Category<span class="red">*</span></label>
                                            <input type="text" required="required" name="sub_category" value="{{ $traffic->sub_category }}">
                                        </div>
                                        <div class="form-input">
                                            <label>Search Text<span class="red">*</span></label>
                                            <input type="text" required="required" name="serch_text" value="{{ $traffic->serch_text }}">
                                        </div>
                                        <div class="form-input">
                                            <label>Customer Name<span class="red">*</span></label>
                                            <input type="text" required="required" name="customer_name" value="{{ $traffic->customer_name }}">
                                        </div>
                                        
                                        <div class="form-input">
                                            <label>IP Address<span class="red">*</span></label>
                                            <input type="text" id="webUrl" name="ip_address" required="required" value="{{ $traffic->ip_address }}">
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
