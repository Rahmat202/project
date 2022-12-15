@extends('backend.layouts.app')
@section('content')
		<!-- site preloader start -->
		<div class="page-loader">
			<div class="loader-in"></div>
		</div>
		<!-- site preloader end -->

		<div class="pageWrapper">

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
                    <div class="page-title title-1">
                        <div class="container">
                            <div class="row">
                                <div class="cell-12">
                                    <h1 class="fx" data-animate="fadeInLeft">Traffics</h1>
                                   
                                    <div class="cart-icon fx" data-animate="fadeInRight">
                                        <div>
                                            <a href="{{ route('create.traffic') }}"  class ="btn btn-success btn-lg">+ Add New</a>
                                        </div>
                                        <div class="cart-popup">
                                            <div class="empty">Your shopping cart is empty!</div>
                                            <div class="mini-cart">
                                                <ul class="mini-cart-list">
                                                    <li>
                                                        <a class="cart-mini-lft" href="product.html"><img src="images/shop/pro-1.jpg" alt=""></a>
                                                        <div class="cart-body">
                                                            <a href="product.html">Ultimate Fashion Wear White</a>
                                                            <div class="price">$150</div>
                                                        </div>
                                                        <a class="remove" href="#"><i class="fa fa-times" title="Remove"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="cart-mini-lft" href="product.html"><img src="images/shop/pro-2.jpg" alt=""></a>
                                                        <div class="cart-body">
                                                            <a href="product.html">Fashion Wear White</a>
                                                            <div class="price">$50</div>
                                                        </div>
                                                        <a class="remove" href="#"><i class="fa fa-times" title="Remove"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="cart-mini-lft" href="product.html"><img src="images/shop/pro-3.jpg" alt=""></a>
                                                        <div class="cart-body">
                                                            <a href="product.html">Ultimate Fashion</a>
                                                            <div class="price">$220</div>
                                                        </div>
                                                        <a class="remove" href="#"><i class="fa fa-times" title="Remove"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="mini-cart-total">
                                                    <div class="clearfix">
                                                        <div class="left">Sub-Total:</div>
                                                        <div class="right">$230.00</div>
                                                    </div>
                                                    <div class="clearfix">
                                                        <div class="left">Tax (-10.00):</div>
                                                        <div class="right">$12.05</div>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                    <div class="clearfix">
                                                        <div class="left">Total:</div>
                                                        <div class="right">$200.20</div>
                                                    </div>
                                                </div>
                                                <div class="checkout">
                                                    <a class="btn" href="cart.html">View Cart</a><a class="btn" href="check-out.html">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="sectionWrapper">
                        <div class="container">
                            <table class="table-style2">
                                <thead>
                                      <tr>
                                    <th>#</th>
                                    <th class="width-5">System Date</th>
                                    <th class="width-10">Page</th>
                                    <th class="width-5">City</th>
                                    <th class="width-5">Country</th>
                                    <th class="width-5">Category</th>
                                    <th class="width-5">Action</th>
                                </tr>
                                </thead>
                               <tbody>
                                @php
                                $no = 1;
                                 @endphp
                                 @foreach ($traffics as $traffic)
                             <tr>
                                <td>{{ $no++ }}</td>
                              
                                <td>{{ $traffic->system_date }}</td>
                                <td>{{ $traffic->page }}</td>
                                <td>{{ $traffic->city }}</td>
                                <td>{{ $traffic->country }}</td>
                                <td>{{ \App\Models\Category::where('id',$traffic->category_id)->value('name') }}</td>

                                <td>
                                    <a href="{{ route('edit.traffic',$traffic->id) }}" class="btn btn-warning btn-sm"><span class="fa fa-edit"></span></a>
                                 <a href="{{ route('delete.traffic',$traffic->id) }}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a>
                                </td>
                                   
                                </tr>
                                 @endforeach
                               
                             

                               </tbody>
                               
                              
                            </table>
                          
                        </div>
                    </div>
                    
                </div>
				

			</div>
@endsection
