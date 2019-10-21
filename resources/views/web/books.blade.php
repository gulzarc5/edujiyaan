		@extends('web.template.master')
		<!-- Head & Header Section -->
		@section('content') 
				<!-- breadcrumbs-area-start -->
		<div class="breadcrumbs-area breadcrumbs-area-mobile mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#" class="active">shop</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->
		<!-- shop-main-area-start -->
		<div class="shop-main-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mobile-side">
						<div class="shop-left">
							<div class="section-title-5 mb-30">
								<h2>Shopping Options</h2>
							</div>
							<div class="left-menu mb-30">
								<ul>
									<li><a href="shop.php"><i class="fas fa-book"></i>&nbsp;&nbsp;Books<span>(29)</span></a></li>									
									<li><a href="project.php"><i class="fa fa-line-chart"></i>&nbsp;&nbsp;Projects<span>(14)</span></a></li>
									<li><a href="megazine.php"><i class="far fa-newspaper"></i>Magazines<span>(2)</span></a></li>
									<li><a href="ebook.php"><i class="far fa-file"></i>&nbsp;&nbsp;Documents<span>(14))</span></a></li>
								</ul>
							</div>
							
							<div class="left-title mb-20">
								<h4>Categories</h4>
							</div>
							<div class="random-area mb-30">
								<div class="product-active-2 owl-carousel">
									<div class="product-total-2">
										
										<div class="single-most-product bd mb-18">
											
											<div class="most-product-content">
												
												<h4><a href="#">ACADEMIC</a></h4>
											</div>
										</div>
										<div class="single-most-product bd mb-18">
											
											<div class="most-product-content">
												
												<h4><a href="#">NON-ACADEMIC</a></h4>
											</div>
										</div>
										<div class="single-most-product bd mb-18">
											
											<div class="most-product-content">
												
												<h4><a href="#">NOVELS</a></h4>
											</div>
										</div>
										<div class="single-most-product bd mb-18">
											
											<div class="most-product-content">
												
												<h4><a href="#">FAIRY TALE</a></h4>
											</div>
										</div>
										<div class="single-most-product bd mb-18">
											
											<div class="most-product-content">
												
												<h4><a href="#">POEMS</a></h4>
											</div>
										</div>
									</div>										
								</div>
							</div>
							<div class="banner-area mb-30">
								<div class="banner-img-2">
									<a href="#"><img src="{{asset('web/img/banner/31.jpg')}}" alt="banner" /></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
						<div class="category-image mb-30">
							<a href="#"><img src="{{asset('web/img/banner/32.jpg')}}" alt="banner" /></a>
						</div>
						<div class="section-title-5 mb-30">
							<h2>Books&nbsp; (42)</h2>
						</div>
						<div class="toolbar mb-30">
							<div class="toolbar-sorter">
								<span>Language</span>
								<select name="language" id="language" class="sorter-options" style="width:186px">
									<option value="" selected>All Languages</option>
									<option value="Assamese">Assamese</option>
									<option value="Bengali">Bengali</option>
									<option value="Bodo">Bodo</option>
									<option value="Dogri">Dogri</option>
									<option value="English">English</option>
									<option value="Gujarati">Gujarati</option>
								</select>
								<a href="#"><i class="fa fa-arrow-up"></i></a>
							</div>
							<div class="toolbar-sorter">
								<span>Book Title</span>
								<input type="text" name="book_title" id="book_title" class="sorter-options" style="width:165px">
								<a href="#"><i class="fa fa-arrow-up"></i></a>
							</div>
							<div class="toolbar-sorter">
								<span>Publisher</span>
								<input type="text" name="publisher" id="publisher" class="sorter-options" style="width:165px">
								<a href="#"><i class="fa fa-arrow-up"></i></a>
							</div>
						</div>
						<!-- tab-area-start -->
						<div class="tab-content book-list">
							<div class="tab-pane active" id="th">
							    <div class="row">
							        <div class="col-lg-3 col-md-4 col-sm-6 book-mobile">
							            <!-- single-product-start -->
			                            <div class="product-wrapper new-books mb-40">
			                                <div class="product-img">
			                                    <a href="#">
			                                        <img src="{{asset('web/img/product/1.jpg')}}" alt="book" class="primary" />
			                                    </a>
			                                    <div class="product-flag">
			                                        <ul>
			                                            <li><span class="sale">new</span></li>
			                                        </ul>
			                                    </div>
			                                </div>
			                                <div class="product-details text-center">
                                                <h4><a class="semi-name" href="product-details.php?product_id=192">BHOOK</a></h4>
                                                <h6>Book ID: CH146YT</h6>
                                                <h6 class="semi-name">By JURI BORAH BORGOHAIN</h6>
                                                <div class="product-price">
                                                    <ul>
                                                        <li>Rs.180</li>
                                                        <li class="old-price">₹200</li>
                                                    </ul>
                                                </div>
                                            </div>
			                                <div class="product-link">
			                                    <div class="product-button">
			                                        <a href="#" class="btn btn-primary margin-mobile">View</a>
			                                    </div>                              
			                                </div>	
			                            </div>
                                        <!-- single-product-end -->
							        </div>
							        <div class="col-lg-3 col-md-4 col-sm-6 book-mobile">
							            <!-- single-product-start -->
			                            <div class="product-wrapper new-books mb-40">
			                                <div class="product-img">
			                                    <a href="#">
			                                        <img src="{{asset('web/img/product/29.jpg')}}" alt="book" class="primary" />
			                                    </a>
			                                    <div class="product-flag">
			                                        <ul>
			                                            <li><span class="sale">new</span></li>
			                                        </ul>
			                                    </div>
			                                </div>
			                                <div class="product-details text-center">
                                                <h4><a class="semi-name" href="product-details.php?product_id=192">BHOOK</a></h4>
                                                <h6>Book ID: CH146YT</h6>
                                                <h6 class="semi-name">By JURI BORAH BORGOHAIN</h6>
                                                <div class="product-price">
                                                    <ul>
                                                        <li>Rs.180</li>
                                                        <li class="old-price">₹200</li>
                                                    </ul>
                                                </div>
                                            </div>
			                                <div class="product-link">
			                                    <div class="product-button">
			                                        <a href="#" class="btn btn-primary margin-mobile">View</a>
			                                    </div>                              
			                                </div>	
			                            </div>
                                        <!-- single-product-end -->
							        </div>
							        <div class="col-lg-3 col-md-4 col-sm-6 book-mobile">
							            <!-- single-product-start -->
			                            <div class="product-wrapper new-books mb-40">
			                                <div class="product-img">
			                                    <a href="#">
			                                        <img src="{{asset('web/img/product/5.jpg')}}" alt="book" class="primary" />
			                                    </a>
			                                    <div class="product-flag">
			                                        <ul>
			                                            <li><span class="sale">new</span></li>
			                                        </ul>
			                                    </div>
			                                </div>
			                                <div class="product-details text-center">
                                                <h4><a class="semi-name" href="product-details.php?product_id=192">BHOOK</a></h4>
                                                <h6>Book ID: CH146YT</h6>
                                                <h6 class="semi-name">By JURI BORAH BORGOHAIN</h6>
                                                <div class="product-price">
                                                    <ul>
                                                        <li>Rs.180</li>
                                                        <li class="old-price">₹200</li>
                                                    </ul>
                                                </div>
                                            </div>
			                                <div class="product-link">
			                                    <div class="product-button">
			                                        <a href="#" class="btn btn-primary margin-mobile">View</a>
			                                    </div>                              
			                                </div>	
			                            </div>
                                        <!-- single-product-end -->
							        </div>
							        <div class="col-lg-3 col-md-4 col-sm-6 book-mobile">
							            <!-- single-product-start -->
			                            <div class="product-wrapper new-books mb-40">
			                                <div class="product-img">
			                                    <a href="#">
			                                        <img src="{{asset('web/img/product/9.jpg')}}" alt="book" class="primary" />
			                                    </a>
			                                    <div class="product-flag">
			                                        <ul>
			                                            <li><span class="sale">new</span></li>
			                                        </ul>
			                                    </div>
			                                </div>
			                                <div class="product-details text-center">
                                                <h4><a class="semi-name" href="product-details.php?product_id=192">BHOOK</a></h4>
                                                <h6>Book ID: CH146YT</h6>
                                                <h6 class="semi-name">By JURI BORAH BORGOHAIN</h6>
                                                <div class="product-price">
                                                    <ul>
                                                        <li>Rs.180</li>
                                                        <li class="old-price">₹200</li>
                                                    </ul>
                                                </div>
                                            </div>
			                                <div class="product-link">
			                                    <div class="product-button">
			                                        <a href="#" class="btn btn-primary margin-mobile">View</a>
			                                    </div>                              
			                                </div>	
			                            </div>
                                        <!-- single-product-end -->
							        </div>
							        <div class="col-lg-3 col-md-4 col-sm-6 book-mobile">
							            <!-- single-product-start -->
			                            <div class="product-wrapper new-books mb-40">
			                                <div class="product-img">
			                                    <a href="#">
			                                        <img src="{{asset('web/img/product/11.jpg')}}" alt="book" class="primary" />
			                                    </a>
			                                    <div class="product-flag">
			                                        <ul>
			                                            <li><span class="sale">new</span></li>
			                                        </ul>
			                                    </div>
			                                </div>
			                                <div class="product-details text-center">
                                                <h4><a class="semi-name" href="product-details.php?product_id=192">BHOOK</a></h4>
                                                <h6>Book ID: CH146YT</h6>
                                                <h6 class="semi-name">By JURI BORAH BORGOHAIN</h6>
                                                <div class="product-price">
                                                    <ul>
                                                        <li>Rs.180</li>
                                                        <li class="old-price">₹200</li>
                                                    </ul>
                                                </div>
                                            </div>
			                                <div class="product-link">
			                                    <div class="product-button">
			                                        <a href="#" class="btn btn-primary margin-mobile">View</a>
			                                    </div>                              
			                                </div>	
			                            </div>
                                        <!-- single-product-end -->
							        </div>
							        <div class="col-lg-3 col-md-4 col-sm-6 book-mobile">
							            <!-- single-product-start -->
			                            <div class="product-wrapper new-books mb-40">
			                                <div class="product-img">
			                                    <a href="#">
			                                        <img src="{{asset('web/img/product/13.jpg')}}" alt="book" class="primary" />
			                                    </a>
			                                    <div class="product-flag">
			                                        <ul>
			                                            <li><span class="sale">new</span></li>
			                                        </ul>
			                                    </div>
			                                </div>
			                                <div class="product-details text-center">
                                                <h4><a class="semi-name" href="product-details.php?product_id=192">BHOOK</a></h4>
                                                <h6>Book ID: CH146YT</h6>
                                                <h6 class="semi-name">By JURI BORAH BORGOHAIN</h6>
                                                <div class="product-price">
                                                    <ul>
                                                        <li>Rs.180</li>
                                                        <li class="old-price">₹200</li>
                                                    </ul>
                                                </div>
                                            </div>
			                                <div class="product-link">
			                                    <div class="product-button">
			                                        <a href="#" class="btn btn-primary margin-mobile">View</a>
			                                    </div>                              
			                                </div>	
			                            </div>
                                        <!-- single-product-end -->
							        </div>
							        <div class="col-lg-3 col-md-4 col-sm-6 book-mobile">
							            <!-- single-product-start -->
			                            <div class="product-wrapper new-books mb-40">
			                                <div class="product-img">
			                                    <a href="#">
			                                        <img src="{{asset('web/img/product/15.jpg')}}" alt="book" class="primary" />
			                                    </a>
			                                    <div class="product-flag">
			                                        <ul>
			                                            <li><span class="sale">new</span></li>
			                                        </ul>
			                                    </div>
			                                </div>
			                                <div class="product-details text-center">
                                                <h4><a class="semi-name" href="product-details.php?product_id=192">BHOOK</a></h4>
                                                <h6>Book ID: CH146YT</h6>
                                                <h6 class="semi-name">By JURI BORAH BORGOHAIN</h6>
                                                <div class="product-price">
                                                    <ul>
                                                        <li>Rs.180</li>
                                                        <li class="old-price">₹200</li>
                                                    </ul>
                                                </div>
                                            </div>
			                                <div class="product-link">
			                                    <div class="product-button">
			                                        <a href="#" class="btn btn-primary margin-mobile">View</a>
			                                    </div>                              
			                                </div>	
			                            </div>
                                        <!-- single-product-end -->
							        </div>
							        <div class="col-lg-3 col-md-4 col-sm-6 book-mobile">
							            <!-- single-product-start -->
			                            <div class="product-wrapper new-books mb-40">
			                                <div class="product-img">
			                                    <a href="#">
			                                        <img src="{{asset('web/img/product/17.jpg')}}" alt="book" class="primary" />
			                                    </a>
			                                    <div class="product-flag">
			                                        <ul>
			                                            <li><span class="sale">new</span></li>
			                                        </ul>
			                                    </div>
			                                </div>
			                                <div class="product-details text-center">
                                                <h4><a class="semi-name" href="product-details.php?product_id=192">BHOOK</a></h4>
                                                <h6>Book ID: CH146YT</h6>
                                                <h6 class="semi-name">By JURI BORAH BORGOHAIN</h6>
                                                <div class="product-price">
                                                    <ul>
                                                        <li>Rs.180</li>
                                                        <li class="old-price">₹200</li>
                                                    </ul>
                                                </div>
                                            </div>
			                                <div class="product-link">
			                                    <div class="product-button">
			                                        <a href="#" class="btn btn-primary margin-mobile">View</a>
			                                    </div>                              
			                                </div>	
			                            </div>
                                        <!-- single-product-end -->
							        </div>
							    </div>
							</div>
							<div class="tab-pane fade" id="list">
								<!-- single-shop-start -->
								<div class="single-shop mb-30">
									<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="product-wrapper-2">
												<div class="product-img">
													<a href="#">
														<img src="img/product/3.jpg" alt="book" class="primary" />
													</a>
												</div>	
											</div>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="product-wrapper-content">
												<div class="product-details">
													<div class="product-rating">
														<ul>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
														</ul>
													</div>
													<h4><a href="#">Crown Summit</a></h4>
													<div class="product-price">
														<ul>
															<li>$36.00</li>
															<li class="old-price">$38.00</li>
														</ul>
													</div>
													<p>The sporty Joust Duffle Bag can't be beat - not in the gym, not on the luggage carousel, not anywhere. Big enough to haul a basketball or soccer ball and some sneakers with plenty of room to spare,...											</p>
												</div>
												<div class="product-link">
													<div class="product-button">
														<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
													</div>
													<div class="add-to-link">
                                                        <ul>
                                                            <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                                        </ul>
                                                    </div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- single-shop-end -->
								<!-- single-shop-start -->
								<div class="single-shop mb-30">
									<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="product-wrapper-2">
												<div class="product-img">
													<a href="#">
														<img src="img/product/18.jpg" alt="book" class="primary" />
													</a>
												</div>	
											</div>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="product-wrapper-content">
												<div class="product-details">
													<div class="product-rating">
														<ul>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
														</ul>
													</div>
													<h4><a href="#">Driven Backpack</a></h4>
													<div class="product-price">
														<ul>
															<li>$34.00</li>
															<li class="old-price">$36.00</li>
														</ul>
													</div>
													<p>The sporty Joust Duffle Bag can't be beat - not in the gym, not on the luggage carousel, not anywhere. Big enough to haul a basketball or soccer ball and some sneakers with plenty of room to spare,...											</p>
												</div>
												<div class="product-link">
													<div class="product-button">
														<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
													</div>
													<div class="add-to-link">
                                                        <ul>
                                                            <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                                        </ul>
                                                    </div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- single-shop-end -->
								<!-- single-shop-start -->
								<div class="single-shop mb-30">
									<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="product-wrapper-2">
												<div class="product-img">
													<a href="#">
														<img src="img/product/10.jpg" alt="book" class="primary" />
													</a>
												</div>	
											</div>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="product-wrapper-content">
												<div class="product-details">
													<div class="product-rating">
														<ul>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
														</ul>
													</div>
													<h4><a href="#">Fusion Backpack</a></h4>
													<div class="product-price">
														<ul>
															<li>$59.00</li>
														</ul>
													</div>
													<p>The sporty Joust Duffle Bag can't be beat - not in the gym, not on the luggage carousel, not anywhere. Big enough to haul a basketball or soccer ball and some sneakers with plenty of room to spare,...											</p>
												</div>
												<div class="product-link">
													<div class="product-button">
														<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
													</div>
													<div class="add-to-link">
                                                        <ul>
                                                            <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                                        </ul>
                                                    </div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- single-shop-end -->
								<!-- single-shop-start -->
								<div class="single-shop mb-30">
									<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="product-wrapper-2">
												<div class="product-img">
													<a href="#">
														<img src="img/product/5.jpg" alt="book" class="primary" />
													</a>
												</div>	
											</div>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="product-wrapper-content">
												<div class="product-details">
													<div class="product-rating">
														<ul>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
														</ul>
													</div>
													<h4><a href="#">Set of Sprite Yoga Straps</a></h4>
													<div class="product-price">
														<ul>
															<li> <span>Starting at</span>$34.00</li>
														</ul>
													</div>
													<p>The sporty Joust Duffle Bag can't be beat - not in the gym, not on the luggage carousel, not anywhere. Big enough to haul a basketball or soccer ball and some sneakers with plenty of room to spare,...											</p>
												</div>
												<div class="product-link">
													<div class="product-button">
														<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
													</div>
													<div class="add-to-link">
                                                        <ul>
                                                            <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                                        </ul>
                                                    </div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- single-shop-end -->
								<!-- single-shop-start -->
								<div class="single-shop">
									<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="product-wrapper-2">
												<div class="product-img">
													<a href="#">
														<img src="img/product/19.jpg" alt="book" class="primary" />
													</a>
												</div>	
											</div>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="product-wrapper-content">
												<div class="product-details">
													<div class="product-rating">
														<ul>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
															<li><a href="#"><i class="fa fa-star"></i></a></li>
														</ul>
													</div>
													<h4><a href="#">Compete Track Tote</a></h4>
													<div class="product-price">
														<ul>
															<li>$32.00</li>
														</ul>
													</div>
													<p>The sporty Joust Duffle Bag can't be beat - not in the gym, not on the luggage carousel, not anywhere. Big enough to haul a basketball or soccer ball and some sneakers with plenty of room to spare,...											</p>
												</div>
												<div class="product-link">
													<div class="product-button">
														<a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
													</div>
													<div class="add-to-link">
                                                        <ul>
                                                            <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                                        </ul>
                                                    </div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- single-shop-end -->
							</div>
						</div>
						<!-- tab-area-end -->
					</div>
				</div>
			</div>
		</div>
		<!-- shop-main-area-end -->
		<!-- footer-area-start -->
		@endsection