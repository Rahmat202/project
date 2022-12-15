@extends('Site.layouts.app')
@section('content')
		<!-- site preloader start -->
		<div class="page-loader">
			<div class="loader-in"></div>
		</div>
		<!-- site preloader end -->

		<div class="pageWrapper">
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
			<!-- login box start -->
			<div class="login-box">
				<a class="close-login" href="#"><i class="fa fa-times"></i></a>
				<form action="{{ route('auth.login') }}" method="POST">
					@csrf
					<div class="container">
						<p>Hello our valued visitor, We present you the best web solutions and high quality graphic designs with a lot of features. just login to your account and enjoy ...</p>
						<div class="login-controls">
							<div class="skew-25 input-box left">
								<input type="text" class="txt-box skew25" name="email" placeholder="User name Or Email" />
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
			</div>
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
								<h1 class="fx" data-animate="fadeInLeft">Image <span>Gallery</span></h1>
								<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="#">Home</a><span class="line-separate">/</span><a href="#">Images </a><span class="line-separate">/</span><span>Image Gallery</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="sectionWrapper">
					<div class="container">
						<div class="row">
							<div class="box success-box center hidden">Your item was added succesfully.</div>
							<div class="clearfix"></div>
							<div class="cell-12">
								<div class="toolsBar">
									<div class="cell-10 left products-filter-top">
										<div class="left">

											<span>Sort by:City </span>
											<select>
												<option selected="selected">All</option>
												<option>Lahore</option>
												<option>Karachi</option>
												<option>Islamabad</option>
												<option>Rawalpindi</option>
												
											</select>
										</div>
										<div class="left">
											<span>Category: </span>

											<select>
												<option selected="selected" class="skew25 filter" data-filter="*">All</option>
												<li><option class="skew25 filter" data-filter=".design" value=".design">Flower</option></li>
												<option><li><a href="#" class="skew25 filter" data-filter=".design">Flowers</a></li></option>
												<option>Beach</option>
												<option>Spring</option>
											</select>
											<!-- Default unchecked -->
											<input type="checkbox" id="defaultUnchecked">
											<label class="custom-control-label" for="defaultUnchecked">Islamabad</label>
											<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
											<label class="custom-control-label" for="defaultUnchecked">Lahor</label>
											<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
											<label class="custom-control-label" for="defaultUnchecked">Karachi</label>
											<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
											<label class="custom-control-label" for="defaultUnchecked">Rawalpindi</label>
											<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
											<label class="custom-control-label" for="defaultUnchecked">Other</label>

										</div>
										
										<div class="left order-asc">
											<a href="#"><i class="fa fa-sort-amount-asc"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sectionWrapper">
					<div class="container">
						<div class="portfolio-filterable">
							<div class="row">
								<div class="gry-bg skew-25">
									<span class="skew25 left filter-by">Filter by:Category</span>
									<ul id="filters">
										<li class="active"><a href="#" class="skew25 filter" data-filter="*">All</a></li>
										<li><a href="#" class="skew25 filter" data-filter=".design">Flowers</a></li>
										<li><a href="#" class="skew25 filter" data-filter=".develop">Beach</a></li>
										<li><a href="#" class="skew25 filter" data-filter=".seo">Spring</a></li>
									</ul>
								</div>
								<div class="portfolio-items" id="container">
									<div class="cell-3 develop" data-category="develop">
										<div class="portfolio-item">
											<div class="img-holder">
												<div class="img-over">
													<a href="portfolio-single.html" class="fx link"><b class="fa fa-link"></b></a>
													<a href="images/portfolio/1.jpg" class="fx zoom" data-gal="prettyPhoto[pp_gal]" title="Beautiful Box|Islamabad"><b class="fa fa-search-plus"></b></a>

												</div>
												<img alt="" src="images/portfolio/1.jpg">
											</div>
											<div class="name-holder">
												<a href="#" class="project-name">Editorial, Nature</a>
												<span class="project-options">Cat:Flower</span>
												<span class="project-options"></span>
												<span><span>5 view(s)</span><span><span class="separator"> | </span><span>2 days Ago</span><span class="separator"> | </span><a href="feedback.html">Feedback</a></span>
											</div>
											<div>
												

											</div>
										</div>
									</div>
									<div class="cell-3 develop seo" data-category="develop">
										<div class="portfolio-item">
											<div class="img-holder">
												<div class="gallery portfolio-img-slick">
													<div>
														<a href="images/portfolio/1.jpg" class="fx zoom" data-gal="prettyPhoto[pp_gal]" title="Project Title">
															<img src="images/portfolio/2.jpg" alt=""></a>
														</div>
														<div>
															<a href="images/portfolio/1.jpg" class="fx zoom" data-gal="prettyPhoto[pp_gal]" title="Project Title">
																<img src="images/portfolio/2.jpg" alt=""></a>
															</div>
															<div>
																<a href="images/portfolio/1.jpg" class="fx zoom" data-gal="prettyPhoto[pp_gal]" title="Project Title">
																	<img src="images/portfolio/3.jpg" alt=""></a>
																</div>
																<div>
																	<a href="images/portfolio/1.jpg" class="fx zoom" data-gal="prettyPhoto[pp_gal]" title="Project Title">
																		<img src="images/portfolio/3.jpg" alt=""></a>
																	</div>
																	<div>
																		<a href="images/portfolio/4.jpg" class="fx zoom" data-gal="prettyPhoto[pp_gal]" title="Project Title">
																			<img src="images/portfolio/4.jpg" alt=""></a>
																		</div>
																	</div>
																</div>
																<div class="name-holder">
																	<a href="#" class="project-name">Editorial, Nature</a>
																	<span class="project-options">Cat:Flower</span>
																	<span class="project-options"></span>
																	<span><span>5 view(s)</span><span><span class="separator"> | </span><span>2 days Ago</span><span class="separator"> | </span><a href="feedback.html">Feedback</a></span>
																</div>
															</div>
														</div>
														<div class="cell-3 design" data-category="design">
															<div class="portfolio-item">
																<div class="img-holder">
																	<div class="img-over">
																		<a href="portfolio-single.html" class="fx link"><b class="fa fa-link"></b></a>
																		<a href="images/portfolio/1.jpg" class="fx zoom" data-gal="prettyPhoto[pp_gal]" title="Project Title"><b class="fa fa-search-plus"></b></a>
																	</div>
																	<img alt="" src="images/portfolio/1.jpg">
																</div>
																<div class="name-holder">
																	<a href="#" class="project-name">Editorial, Nature</a>
																	<span class="project-options">Cat:Flower</span>
																	<span class="project-options"></span>
																	<span><span>5 view(s)</span><span><span class="separator"> | </span><span>2 days Ago</span><span class="separator"> | </span><a href="feedback.html">Feedback</a></span>
																</div>
															</div>
														</div>
														<div class="cell-3 seo" data-category="seo">
															<div class="portfolio-item">
																<div class="img-holder">
																	<div class="img-over">
																		<a href="portfolio-single.html" class="fx link"><b class="fa fa-link"></b></a>
																		<a href="images/portfolio/5.jpg" class="fx zoom" data-gal="prettyPhoto[pp_gal]" title="Project Title"><b class="fa fa-search-plus"></b></a>
																	</div>
																	<img alt="" src="images/portfolio/5.jpg">
																</div>
																<div class="name-holder">
																	<a href="#" class="project-name">Editorial, Nature</a>
																	<span class="project-options">Cat:Flower</span>
																	<span class="project-options"></span>
																	<span><span>5 view(s)</span><span><span class="separator"> | </span><span>2 days Ago</span><span class="separator"> | </span><a href="feedback.html">Feedback</a></span>
																</div>
															</div>
														</div>
														<div class="cell-3 design" data-category="design">
															<div class="portfolio-item">
																<div class="img-holder">
																	<div class="img-over">
																		<a href="portfolio-single.html" class="fx link"><b class="fa fa-link"></b></a>
																		<a href="#videoDiv" class="fx zoom" title="Project Title" data-gal="prettyPhoto[pp_gal]"><b class="fa fa-search-plus"></b></a>
																	</div>
																	<iframe src='http://player.vimeo.com/video/94502406?title=0&byline=0&portrait=0;api=1' width='100%' height='173'></iframe>
																	<div id="videoDiv" style="display:none">
																		<iframe src='http://player.vimeo.com/video/94502406?title=0&byline=0&portrait=0;api=1' width='100%' height='300'></iframe>
																	</div>
																</div>
																<div class="name-holder">
																	<a href="#" class="project-name">Editorial, Nature</a>
																	<span class="project-options">Cat:Flower</span>
																	<span class="project-options"></span>
																	<span><span>5 view(s)</span><span><span class="separator"> | </span><span>2 days Ago</span><span class="separator"> | </span><a href="feedback.html">Feedback</a></span>
																</div>
															</div>
														</div>
														<div class="cell-3 develop" data-category="develop">
															<div class="portfolio-item">
																<div class="img-holder">
																	<div class="img-over">
																		<a href="portfolio-single.html" class="fx link"><b class="fa fa-link"></b></a>
																		<a href="images/portfolio/6.jpg" class="fx zoom" data-gal="prettyPhoto[pp_gal]" title="Project Title"><b class="fa fa-search-plus"></b></a>
																	</div>
																	<img alt="" src="images/portfolio/6.jpg">
																</div>
																<div class="name-holder">
																	<a href="#" class="project-name">Editorial, Nature</a>
																	<span class="project-options">Cat:Flower</span>
																	<span class="project-options"></span>
																	<span><span>5 view(s)</span><span><span class="separator"> | </span><span>2 days Ago</span><span class="separator"> | </span><a href="feedback.html">Feedback</a></span>
																</div>
															</div>
														</div>
														<div class="cell-3 design" data-category="design">
															<div class="portfolio-item">
																<div class="img-holder">
																	<div class="img-over">
																		<a href="portfolio-single.html" class="fx link"><b class="fa fa-link"></b></a>
																		<a href="images/portfolio/1.jpg" class="fx zoom" data-gal="prettyPhoto[pp_gal]" title="Project Title"><b class="fa fa-search-plus"></b></a>
																	</div>
																	<img alt="" src="images/portfolio/1.jpg">
																</div>
																<div class="name-holder">
																	<a href="#" class="project-name">Editorial, Nature</a>
																	<span class="project-options">Cat:Flower</span>
																	<span class="project-options"></span>
																	<span><span>5 view(s)</span><span><span class="separator"> | </span><span>2 days Ago</span><span class="separator"> | </span><a href="feedback.html">Feedback</a></span>
																</div>
															</div>
														</div>
														<div class="cell-3 develop" data-category="develop">
															<div class="portfolio-item">
																<div class="img-holder">
																	<div class="img-over full-hover">
																		<a href="images/portfolio/2.jpg" class="fx zoom" title="Project Title" data-gal="prettyPhoto[pp_gal]"><b class="fa fa-search-plus"></b></a>
																	</div>
																	<img alt="" src="images/portfolio/2.jpg">
																</div>
																<div class="name-holder">
																	<a href="#" class="project-name">Editorial, Nature</a>
																	<span class="project-options">Cat:Flower</span>
																	<span class="project-options"></span>
																	<span><span>5 view(s)</span><span><span class="separator"> | </span><span>2 days Ago</span><span class="separator"> | </span><a href="feedback.html">Feedback</a></span>
																</div>
															</div>
														</div>
														<div class="cell-3 design" data-category="design">
															<div class="portfolio-item">
																<div class="img-holder">
																	<div class="img-over">
																		<a href="portfolio-single.html" class="fx link"><b class="fa fa-link"></b></a>
																		<a href="images/portfolio/3.jpg" class="fx zoom" data-gal="prettyPhoto[pp_gal]" title="Project Title"><b class="fa fa-search-plus"></b></a>
																	</div>
																	<img alt="" src="images/portfolio/3.jpg">
																</div>
																<div class="name-holder">
																	<a href="#" class="project-name">Editorial, Nature</a>
																	<span class="project-options">Cat:Flower</span>
																	<span class="project-options"></span>
																	<span><span>5 view(s)</span><span><span class="separator"> | </span><span>2 days Ago</span><span class="separator"> | </span><a href="feedback.html">Feedback</a></span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Content End -->

		
		    <!-- Footer end -->
		    
			<!-- Back to top Link -->
			<div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>

							</div>
@endsection