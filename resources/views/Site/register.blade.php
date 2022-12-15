@extends('Site.layouts.app')
@section('content')
		<!-- site preloader start -->
		<div class="page-loader">
			<div class="loader-in"></div>
		</div>
		<!-- site preloader end -->

		<div class="pageWrapper">
			{{-- <div class="login-box">
				<a class="close-login" href="#"><i class="fa fa-times"></i></a>
				<form >
					<div class="container">
						<p>Hello our valued visitor, We present you the best web solutions and high quality graphic designs with a lot of features. just login to your account and enjoy ...</p>
						<div class="login-controls">
							<div class="skew-25 input-box left">
								<input type="email" class="txt-box skew25" name="email" placeholder="User name Or Email" />
							</div>
							<div class="skew-25 input-box left">
								<input type="password" class="txt-box skew25" name="password" placeholder="Password" />
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
			</div> --}}
			
			<!-- login box End -->

			<!-- Header Start -->
			<div id="headWrapper" class="clearfix">

				<!-- top bar start -->
				@include('Site.layouts.tobbar')
				<!-- top bar end -->
                @include('Site.layouts.header')
			</div>
			<!-- Header End -->

			<!-- Content Start -->
			<div id="contentWrapper">
				<div class="page-title title-1">
					<div class="container">
						<div class="row">
							<div class="cell-12">
								<h1 class="fx" data-animate="fadeInLeft">Create <span>Account</span></h1>
								<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="#">Home</a><span class="line-separate">/</span><a href="#">Pages </a><span class="line-separate">/</span><span>Create account</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
				<div class="sectionWrapper">
					<div class="container">
						<div class="row">
							<div class="cell-7 contact-form fx" data-animate="fadeInLeft">
			    				<h3 class="block-head">Registration Form</h3>
			    				<form action="{{ route('registration') }}" id="reg_form" method="POST">
                                    @csrf
			    					<div class="form-input">
			    						<label>First name<span class="red">*</span></label><input type="text" name="fname" required class="form-control">
			    					</div>
			    					<div class="form-input">
			    						<label>Last name<span class="red">*</span></label><input type="text" name="lname" required class="form-control">
			    					</div>
                                    <div class="form-input">
			    						<label>Phone<span class="red">*</span></label><input type="text" name="phone" required class="form-control">
			    					</div>
                                    <div class="form-input">
			    						<label>CNIC<span class="red">*</span></label><input type="text" name="cnic" required class="form-control">
			    					</div>


			    					<div class="form-input">
			    						<label>Country<span class="red">*</span></label>
			    						<select required name="country">
			    							<option selected="" value="">Please select a country</option>
											<option value="AF">Pakistan</option>
											<option value="AF">Afghanistan</option>
											<option value="AF">China</option>

											<option value="AF">Australia</option>
											<option value="AL">Canada</option>
											<option value="EG">Egypt</option>
											<option value="AS">Russia</option>
											<option value="AD">USA</option>
			    						</select>
			    					</div>
                                    <div class="form-input">
			    						<label>City<span class="red">*</span></label>
			    						<select required name="city">
			    							<option selected="" value="">Please select a city</option>
											<option value="AF">Islamabad</option>
											<option value="AF">Kabul</option>
											<option value="AF">Karachi</option>

											<option value="AF">Lahore</option>

			    						</select>
			    					</div>
                                    <div class="form-input">
			    						<label>Gender</label>
			    						<div class="form-box">
				    						<input type="radio" name="gender" value="Male" /> <span>Male</span>
											<input type="radio" name="gender" value="Female" /> <span>Female</span>
										</div>
			    					</div>
                                    <div class="form-input">
			    						<label>Email<span class="red">*</span></label><input type="email" name="email" required class="form-control">
			    					</div>
			    					<div class="form-input">
			    						<label>Birth date<span class="red">*</span></label>
			    						<select name="DOB" required class="small-select">
											<option value="-1">Day</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
											</select>

											<select id="DOB" required class="small-select">
											<option value="-1">Month</option>
											<option value="January">Jan</option>
											<option value="February">Feb</option>
											<option value="March">Mar</option>
											<option value="April">Apr</option>
											<option value="May">May</option>
											<option value="June">Jun</option>
											<option value="July">Jul</option>
											<option value="August">Aug</option>
											<option value="September">Sep</option>
											<option value="October">Oct</option>
											<option value="November">Nov</option>
											<option value="December">Dec</option>
											</select>

											<select name="DOB" required class="small-select">
											<option value="-1">Year</option>
											<option value="2012">2012</option>
											<option value="2011">2011</option>
											<option value="2010">2010</option>
											<option value="2009">2009</option>
											<option value="2008">2008</option>
											<option value="2007">2007</option>
											<option value="2006">2006</option>
											<option value="2005">2005</option>
											<option value="2004">2004</option>
											<option value="2003">2003</option>
											<option value="2002">2002</option>
											<option value="2001">2001</option>
											<option value="2000">2000</option>
											<option value="1999">1999</option>
											<option value="1998">1998</option>
											<option value="1997">1997</option>
											<option value="1996">1996</option>
											<option value="1995">1995</option>
											<option value="1994">1994</option>
											<option value="1993">1993</option>
											<option value="1992">1992</option>
											<option value="1991">1991</option>
											<option value="1990">1990</option>
											<option value="1989">1989</option>
											<option value="1988">1988</option>
											<option value="1987">1987</option>
											<option value="1986">1986</option>
											<option value="1985">1985</option>
											<option value="1984">1984</option>
											<option value="1983">1983</option>
											<option value="1982">1982</option>
											<option value="1981">1981</option>
											<option value="1980">1980</option>
										</select>
			    					</div>

                                    <div class="form-input">
			    						<label>Description</label><textarea name="Description"></textarea>
			    					</div>
                                    <div class="form-input">
			    						<label>Password<span class="red">*</span></label><input type="password" required class="form-control" name="password">
			    					</div>
			    					<div class="form-input">
			    						<label>Confirm Password<span class="red">*</span></label><input type="password" required class="form-control" name="password_confirmation">
			    					</div>



			    					<div class="form-input">
			    						<input type="checkbox"> I have read and accept the terms of use!
			    					</div>
			    					<div class="form-input">
			    						<input type="submit" class="btn btn-large main-bg" value="Submit">&nbsp;&nbsp;<input type="reset" class="btn btn-large" value="Reset">
			    					</div>
			    				</form>
			    			</div>

				    		<div class="cell-5 fx padd-top-35" data-animate="fadeInRight">
				    			<div class="notices">
									<div class="box warning-box fx" data-animate="fadeInRight">
										<h3>You need to know:</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet purus quis metus imperdiet fermentum. Suspendisse hendrerit id lacus id lobortis. Vestibulum quam elit Pellentesque imperdiet purus quis metus imperdiet fermentum. Suspendisse hendrerit id lacus id lobortis. Vestibulum quam elit, dapibus ac augue ut, porttitor viverra dui.</p>
									</div>
									<p class="fx" data-animate="fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet purus quis metus imperdiet fermentum. Suspendisse hendrerit id lacus id lobortis. Vestibulum quam elit Pellentesque imperdiet purus quis metus imperdiet fermentum. Suspendisse hendrerit id lacus id lobortis. Vestibulum quam elit, dapibus ac augue ut, porttitor viverra dui.</p>
									<p class="fx" data-animate="fadeInRight">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet purus quis metus imperdiet fermentum. Suspendisse hendrerit id lacus id lobortis. Vestibulum quam elit Pellentesque imperdiet purus quis metus imperdiet fermentum. Suspendisse hendrerit id lacus id lobortis. Vestibulum quam elit, dapibus ac augue ut, porttitor viverra dui.</p>
								</div>
				    			<ul id="accordion" class="accordion">
									<li>
										<h3 class="skew-25"><a href="#"><span class="skew25">How Can i register in the site ?</span></a></h3>
										<div class="accordion-panel active">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget lacus sit amet neque posuere aliquet. In interdum nisl sapien, vel dignissim nulla porta at. Sed accumsan nunc vitae mollis consequat. Morbi velit risus, ultrices vitae sodales ac, aliquam id eros.
											Vivamus sit amet odio pellentesque odio faucibus tristique. Morbi amet dapibus dolor diam viverra mi. Aenean porttitor.
											Vivamus sit amet odio pellentesque odio faucibus tristique. Morbi amet dapibus dolor diam viverra mi. Aenean porttitor, lectus at dapibus egestas.
										</div>
									</li>
									<li>
										<h3 class="skew-25"><a href="#"><span class="skew25">Can i change my profile ?</span></a></h3>
										<div class="accordion-panel">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet purus quis metus imperdiet fermentum. Suspendisse hendrerit id lacus id lobortis. Vestibulum quam elit, dapibus ac augue ut, porttitor viverra dui.
									Pellentesque imperdiet purus quis metus imperdiet fermentum. Suspendisse hendrerit id lacus id lobortis. Vestibulum quam elit, apibus ac augue ut, porttitor viverra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										</div>
									</li>
									<li>
										<h3 class="skew-25"><a href="#"><span class="skew25">How can i change my details ?</span></a></h3>
										<div class="accordion-panel">
											 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet purus quis metus imperdiet fermentum. Suspendisse hendrerit id lacus id lobortis. Vestibulum quam elit, dapibus ac augue ut, porttitor viverra dui.
									Pellentesque imperdiet purus quis metus imperdiet fermentum. Suspendisse hendrerit id lacus id lobortis. Vestibulum quam elit, apibus ac augue ut, porttitor viverra dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										</div>
									</li>
									<li>
										<h3 class="skew-25"><a href="#"><span class="skew25">What is Exception policy ?</span></a></h3>
										<div class="accordion-panel">
											 Pellentesque imperdiet purus quis metus imperdiet dui. Lorem ipsum dolor sit amet, consectetur adipiscing Pellentesque imperdiet purus quis metus imperdiet dui. Lorem ipsum dolor sit amet, consectetur adipiscing Pellentesque imperdiet purus quis metus imperdiet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										</div>
									</li>
									<li>
										<h3 class="skew-25"><a href="#"><span class="skew25">What are the paymeny methods can i use ?</span></a></h3>
										<div class="accordion-panel">
											 Pellentesque imperdiet purus quis metus imperdiet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										</div>
									</li>
								</ul>
			    			</div>

						</div>
					</div>
				</div>

			</div>
@endsection
