<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Porto - Sample E-Commerce Website</title>

	<meta name="keywords" content="Mosaddik Ali Maruf, Ecommerce Website, Porto" />
	<meta name="description" content="Porto - Sample E-Commerce Website">
	<meta name="author" content="Mosaddik Ali Maruf, Maruf, Mosaddik, Ali">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="{{ asset('public/all/website') }}/assets/images/icons/favicon.ico">


	<script type="text/javascript">
		WebFontConfig = {
			google: { families: [ 'Open+Sans:300,400,600,700,800','Poppins:300,400,500,600,700,800' ] }
		};
		(function(d) {
			var wf = d.createElement('script'), s = d.scripts[0];
			wf.src = '{{ asset('public/all/website') }}/assets/js/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore(wf, s);
		})(document);
	</script>

	<!-- Plugins CSS File -->
	<link rel="stylesheet" href="{{ asset('public/all/website') }}/assets/css/bootstrap.min.css">

	<!-- Main CSS File -->
	<link rel="stylesheet" href="{{ asset('public/all/website') }}/assets/css/style.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/all/website') }}/assets/vendor/fontawesome-free/css/all.min.css">
</head>
<body>
	<div class="page-wrapper">
		<div class="top-notice bg-primary text-white">
			<div class="container text-center">
				<h5 class="d-inline-block mb-0 mr-2">Get Up to <b>40% OFF</b> New-Season Styles</h5>
				<a href="javascript:void(0)" class="category">MEN</a>
				<a href="javascript:void(0)" class="category ml-2 mr-3">WOMEN</a>
				<small>* Limited time only</small>
				<button title="Close (Esc)" type="button" class="mfp-close">×</button>
			</div><!-- End .container -->
		</div><!-- End .top-notice -->

		<header class="header">
			<div class="header-top">
				<div class="container">
					<div class="header-left d-none d-sm-block">
						<p class="top-message text-uppercase">FREE Returns. Standard Shipping Orders $99+</p>
					</div><!-- End .header-left -->

					<div class="header-right header-dropdowns ml-0 ml-sm-auto w-sm-100">
						<div class="header-dropdown dropdown-expanded d-none d-lg-block">
							<a href="javascript:void(0)">Links</a>
							<div class="header-menu">
								<ul>
									<li><a href="javascript:void(0)">Track Order </a></li>
									<li><a href="javascript:void(0)">About</a></li>
									<li><a href="javascript:void(0)">Our Stores</a></li>
									<li><a href="javascript:void(0)">Blog</a></li>
									<li><a href="javascript:void(0)">Contact</a></li>
									<li><a href="javascript:void(0)">Help &amp; FAQs</a></li>
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->

						<span class="separator"></span>

						{{-- 
							<div class="header-dropdown ">
							<a href="javascript:void(0)">USD</a>
							<div class="header-menu">
								<ul>
									<li><a href="javascript:void(0)">EUR</a></li>
									<li><a href="javascript:void(0)">USD</a></li>
								</ul>
							</div>
						</div> 
						
						<div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
							<a href="javascript:void(0)"><img src="{{ asset('public/all/website') }}/assets/images/flags/en.png" alt="England flag">ENG</a>
							<div class="header-menu">
								<ul>
									<li><a href="javascript:void(0)"><img src="{{ asset('public/all/website') }}/assets/images/flags/en.png" alt="England flag">ENG</a></li>
									<li><a href="javascript:void(0)"><img src="{{ asset('public/all/website') }}/assets/images/flags/fr.png" alt="France flag">FRA</a></li>
								</ul>
							</div>
						</div>
						--}}

						<span class="separator"></span>

						<div class="social-icons">
							<a href="javascript:void(0)" class="social-icon social-instagram icon-instagram" target="_blank"></a>
							<a href="javascript:void(0)" class="social-icon social-twitter icon-twitter" target="_blank"></a>
							<a href="javascript:void(0)" class="social-icon social-facebook icon-facebook" target="_blank"></a>
						</div><!-- End .social-icons -->
					</div><!-- End .header-right -->
				</div><!-- End .container -->
			</div><!-- End .header-top -->

			<div class="header-middle">
				<div class="container">
					<div class="header-left col-lg-2 w-auto pl-0">
						<button class="mobile-menu-toggler text-primary mr-2" type="button">
							<i class="icon-menu"></i>
						</button>
						<a href="javascript:void(0)" class="logo">
							<img src="{{ asset('public/all/website') }}/assets/images/logo.png" alt="Porto Logo">
						</a>
					</div><!-- End .header-left -->

					<div class="header-right w-lg-max">
						<div class="header-icon header-icon header-search header-search-inline header-search-category w-lg-max text-right">
							<a href="javascript:void(0)" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
							<form action="javascript:void(0)" method="get">
								<div class="header-search-wrapper">
									<input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
									<div class="select-custom">
										<select id="cat" name="cat">
											<option value="">All Categories</option>
											<option value="4">Fashion</option>
											<option value="12">- Women</option>
											<option value="13">- Men</option>
											<option value="66">- Jewellery</option>
											<option value="67">- Kids Fashion</option>
											<option value="5">Electronics</option>
											<option value="21">- Smart TVs</option>
											<option value="22">- Cameras</option>
											<option value="63">- Games</option>
											<option value="7">Home &amp; Garden</option>
											<option value="11">Motors</option>
											<option value="31">- Cars and Trucks</option>
											<option value="32">- Motorcycles &amp; Powersports</option>
											<option value="33">- Parts &amp; Accessories</option>
											<option value="34">- Boats</option>
											<option value="57">- Auto Tools &amp; Supplies</option>
										</select>
									</div><!-- End .select-custom -->
									<button class="btn icon-search-3 p-0" type="submit"></button>
								</div><!-- End .header-search-wrapper -->
							</form>
						</div><!-- End .header-search -->

						<div class="header-contact d-none d-lg-flex pl-4 ml-3 mr-xl-5 pr-4">
							<img alt="phone" src="{{ asset('public/all/website') }}/assets/images/phone.png" width="30" height="30" class="pb-1">
							<h6>Call us now<a href="tel:#" class="text-dark font1">+123 5678 890</a></h6>
						</div>

						<a href="javascript:void(0)" class="header-icon login-link"><i class="icon-user-2"></i></a>

						<a href="javascript:void(0)" class="header-icon"><i class="icon-wishlist-2"></i></a>

						<div class="dropdown cart-dropdown">
							<a href="javascript:void(0)" class="dropdown-toggle dropdown-arrow" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
								<i class="icon-shopping-cart"></i>
								<span class="cart-count badge-circle">2</span>
							</a>

							<div class="dropdown-menu">
								<div class="dropdownmenu-wrapper">
									<div class="dropdown-cart-header">
										<span>2 Items</span>

										<a href="javascript:void(0)" class="float-right">View Cart</a>
									</div><!-- End .dropdown-cart-header -->

									<div class="dropdown-cart-products">
										<div class="product">
											<div class="product-details">
												<h4 class="product-title">
													<a href="javascript:void(0)">Woman Ring</a>
												</h4>

												<span class="cart-product-info">
													<span class="cart-product-qty">1</span>
													x $99.00
												</span>
											</div><!-- End .product-details -->

											<figure class="product-image-container">
												<a href="javascript:void(0)" class="product-image">
													<img src="{{ asset('public/all/website') }}/assets/images/products/cart/product-1.jpg" alt="product" width="80" height="80">
												</a>
												<a href="javascript:void(0)" class="btn-remove icon-cancel" title="Remove Product"></a>
											</figure>
										</div><!-- End .product -->

										<div class="product">
											<div class="product-details">
												<h4 class="product-title">
													<a href="javascript:void(0)">Woman Necklace</a>
												</h4>

												<span class="cart-product-info">
													<span class="cart-product-qty">1</span>
													x $35.00
												</span>
											</div><!-- End .product-details -->

											<figure class="product-image-container">
												<a href="javascript:void(0)" class="product-image">
													<img src="{{ asset('public/all/website') }}/assets/images/products/cart/product-2.jpg" alt="product" width="80" height="80">
												</a>
												<a href="javascript:void(0)" class="btn-remove icon-cancel" title="Remove Product"></a>
											</figure>
										</div><!-- End .product -->
									</div><!-- End .cart-product -->

									<div class="dropdown-cart-total">
										<span>Total</span>

										<span class="cart-total-price float-right">$134.00</span>
									</div><!-- End .dropdown-cart-total -->

									<div class="dropdown-cart-action">
										<a href="javascript:void(0)" class="btn btn-dark btn-block">Checkout</a>
									</div><!-- End .dropdown-cart-total -->
								</div><!-- End .dropdownmenu-wrapper -->
							</div><!-- End .dropdown-menu -->
						</div><!-- End .dropdown -->
					</div><!-- End .header-right -->
				</div><!-- End .container -->
			</div><!-- End .header-middle -->

			<div class="header-bottom sticky-header d-none d-lg-block">
				<div class="container">
					<nav class="main-nav w-100">
						<ul class="menu">
							<li class="active">
								<a href="javascript:void(0)">Home</a>
							</li>
							<li>
								<a href="javascript:void(0)">Categories</a>
								<div class="megamenu megamenu-fixed-width megamenu-3cols">
									<div class="row">
										<div class="col-lg-4">
											<a href="javascript:void(0)" class="nolink">VARIATION 1</a>
											<ul class="submenu">
												<li><a href="javascript:void(0)">Fullwidth Banner</a></li>
												<li><a href="ljavascript:void(0)">Boxed Slider Banner</a></li>
												<li><a href="javascript:void(0)">Boxed Image Banner</a></li>
												<li><a href="javascript:void(0)">Left Sidebar</a></li>
												<li><a href="javascript:void(0)">Right Sidebar</a></li>
												<li><a href="javascript:void(0)">Product Flex Grid</a></li>
												<li><a href="javascript:void(0)">Horizontal Filter1</a></li>
												<li><a href="javascript:void(0)">Horizontal Filter2</a></li>
											</ul>
										</div>
										<div class="col-lg-4">
											<a href="javascript:void(0)" class="nolink">VARIATION 2</a>
											<ul class="submenu">
												<li><a href="javascript:void(0)">List Types</a></li>
												<li><a href="javascript:void(0)">Ajax Infinite Scroll</a></li>
												<li><a href="javascript:void(0)">3 Columns Products</a></li>
												<li><a href="javascript:void(0)">4 Columns Products</a></li>
												<li><a href="javascript:void(0)">5 Columns Products</a></li>
												<li><a href="javascript:void(0)">6 Columns Products</a></li>
												<li><a href="javascript:void(0)">7 Columns Products</a></li>
												<li><a href="javascript:void(0)">8 Columns Products</a></li>
											</ul>
										</div>
										<div class="col-lg-4 p-0">
											<img src="{{ asset('public/all/website') }}/assets/images/menu-banner.jpg" alt="Menu banner">
										</div>
									</div>
								</div><!-- End .megamenu -->
							</li>
							<li>
								<a href="javascript:void(0)">Products</a>
								<div class="megamenu megamenu-fixed-width">
									<div class="row">
										<div class="col-lg-3">
											<a href="javascript:void(0)" class="nolink">Variations 1</a>
											<ul class="submenu">
												<li><a href="javascript:void(0)">Horizontal Thumbs</a></li>
												<li><a href="javascript:void(0)">Vertical Thumbnails</a></li>
												<li><a href="javascript:void(0)">Inner Zoom</a></li>
												<li><a href="javascript:void(0)">Addtocart Sticky</a></li>
												<li><a href="javascript:void(0)">Accordion Tabs</a></li>
											</ul>
										</div><!-- End .col-lg-4 -->
										<div class="col-lg-3">
											<a href="javascript:void(0)" class="nolink">Variations 2</a>
											<ul class="submenu">
												<li><a href="javascript:void(0)">Sticky Tabs</a></li>
												<li><a href="javascript:void(0)">Simple Product</a></li>
												<li><a href="javascript:void(0)">With Left Sidebar</a></li>
											</ul>
										</div><!-- End .col-lg-4 -->
										<div class="col-lg-3">
											<a href="javascript:void(0)" class="nolink">Product Layout Types</a>
											<ul class="submenu">
												<li><a href="javascript:void(0)">Default Layout</a></li>
												<li><a href="javascript:void(0)">Extended Layout</a></li>
												<li><a href="javascript:void(0)">Full Width Layout</a></li>
												<li><a href="javascript:void(0)">Grid Images Layout</a></li>
												<li><a href="javascript:void(0)">Sticky Both Side Info</a></li>
												<li><a href="javascript:void(0)">Sticky Right Side Info</a></li>
											</ul>
										</div><!-- End .col-lg-4 -->

										<div class="col-lg-3 p-0">
											<img src="{{ asset('public/all/website') }}/assets/images/menu-bg.png" alt="Menu banner" class="product-promo">
										</div><!-- End .col-lg-4 -->
									</div><!-- End .row -->
								</div><!-- End .megamenu -->
							</li>
							<li><a href="javascript:void(0)">Blog</a></li>
							<li><a href="javascript:void(0)">About Us</a></li>
							<li><a href="javascript:void(0)">Contact Us</a></li>
							<li class="float-right"><a href="{{ route('admin') }}" class="px-4" target="_blank">Dashboard{{-- <span class="tip tip-new tip-top">New</span> --}}</a></li>
							<li class="float-right mr-0"><a href="javascript:void(0)" class="px-4">Special Offer!</a></li>
						</ul>
					</nav>
				</div><!-- End .container -->
			</div><!-- End .header-bottom -->
		</header><!-- End .header -->

		<main class="main">
			<div class="home-slider owl-carousel owl-theme owl-carousel-lazy show-nav-hover nav-big mb-2 text-uppercase" data-owl-options="{
				'loop': false
			}">
				<div class="home-slide home-slide1 banner">
					<img class="owl-lazy slide-bg" src="{{ asset('public/all/website') }}/assets/images/lazy.png" data-src="{{ asset('public/all/website') }}/assets/images/slider/slide-1.jpg" alt="slider image">
					<div class="container">
						<div class="banner-layer banner-layer-middle">
							<h4 class="text-transform-none m-b-3">Find the Boundaries. Push Through!</h4>
							<h2 class="text-transform-none mb-0">Summer Sale</h2>
							<h3 class="m-b-3">70% Off</h3>
							<h5 class="d-inline-block mb-0">
								Starting At
								<b class="coupon-sale-text ml-4 mr-1 text-white bg-secondary align-middle">$<em class="align-text-top">199</em>99</b>
							</h5>
							<a href="javascript:void(0)" class="btn btn-dark btn-lg ls-10">Shop Now!</a>
						</div><!-- End .banner-layer -->
					</div>
				</div><!-- End .home-slide -->

				<div class="home-slide home-slide2 banner banner-md-vw">
					<img class="owl-lazy slide-bg" src="{{ asset('public/all/website') }}/assets/images/lazy.png" data-src="{{ asset('public/all/website') }}/assets/images/slider/slide-2.jpg" alt="slider image">
					<div class="container">
						<div class="banner-layer banner-layer-middle d-flex justify-content-center">
							<div class="mx-auto">
								<h4 class="m-b-1">Extra</h4>
								<h3 class="m-b-2">20% off</h3>
								<h3 class="mb-2 heading-border">Accessories</h3>
								<h2 class="text-transform-none m-b-4">Summer Sale</h2>
								<a href="javascript:void(0)" class="btn btn-block btn-dark">Shop All Sale</a>
							</div>
						</div><!-- End .banner-layer -->
					</div>
				</div><!-- End .home-slide -->
			</div><!-- End .home-slider -->

			<div class="container">
				<div class="info-boxes-slider owl-carousel owl-theme mb-2" data-owl-options="{
					'dots': false,
					'loop': false,
					'responsive': {
						'576': {
							'items': 2
						},
						'992': {
							'items': 3
						}
					}
				}">
					<div class="info-box info-box-icon-left">
						<i class="icon-shipping"></i>

						<div class="info-box-content">
							<h4>FREE SHIPPING &amp; RETURN</h4>
							<p class="text-body">Free shipping on all orders over $99.</p>
						</div><!-- End .info-box-content -->
					</div><!-- End .info-box -->

					<div class="info-box info-box-icon-left">
						<i class="icon-money"></i>

						<div class="info-box-content">
							<h4>MONEY BACK GUARANTEE</h4>
							<p class="text-body">100% money back guarantee</p>
						</div><!-- End .info-box-content -->
					</div><!-- End .info-box -->

					<div class="info-box info-box-icon-left">
						<i class="icon-support"></i>

						<div class="info-box-content">
							<h4>ONLINE SUPPORT 24/7</h4>
							<p class="text-body">Lorem ipsum dolor sit amet.</p>
						</div><!-- End .info-box-content -->
					</div><!-- End .info-box -->
				</div><!-- End .info-boxes-slider -->

				<div class="banners-container">
					<div class="banners-slider owl-carousel owl-theme">
						<div class="banner banner1 banner-sm-vw">
							<figure>
								<img src="{{ asset('public/all/website') }}/assets/images/banners/banner-1.jpg" alt="banner">
							</figure>
							<div class="banner-layer banner-layer-middle">
								<h3 class="m-b-2">Porto Watches</h3>
								<h4 class="m-b-3 ls-10 text-primary"><sup class="text-dark"><del>20%</del></sup>30%<sup>OFF</sup></h4>
								<a href="javascript:void(0)" class="btn btn-sm btn-dark ls-10">Shop Now</a>
							</div>
						</div><!-- End .banner -->

						<div class="banner banner2 banner-sm-vw text-uppercase">
							<figure>
								<img src="{{ asset('public/all/website') }}/assets/images/banners/banner-2.jpg" alt="banner">
							</figure>
							<div class="banner-layer banner-layer-middle text-center">
								<div class="row align-items-lg-center">
									<div class="col-lg-7 text-lg-right">
										<h3 class="m-b-1">Deal Promos</h3>
										<h4 class="pb-4 pb-lg-0 mb-0 text-body">Starting at $99</h4>
									</div>
									<div class="col-lg-5 text-lg-left px-0 px-xl-3">
										<a href="javascript:void(0)" class="btn btn-sm btn-dark ls-10">Shop Now</a>
									</div>
								</div>
							</div>
						</div><!-- End .banner -->

						<div class="banner banner3 banner-sm-vw">
							<figure>
								<img src="{{ asset('public/all/website') }}/assets/images/banners/banner-3.jpg" alt="banner">
							</figure>
							<div class="banner-layer banner-layer-middle text-right">
								<h3 class="m-b-2">Handbags</h3>
								<h4 class="m-b-2 text-secondary text-uppercase">Starting at $99</h4>
								<a href="javascript:void(0)" class="btn btn-sm btn-dark ls-10">Shop Now</a>
							</div>
						</div><!-- End .banner -->
					</div>
				</div>
			</div><!-- End .container -->

			<section class="featured-products-section">
				<div class="container">
					<h2 class="section-title heading-border ls-20 border-0">Featured Products</h2>

					<div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center" data-owl-options="{
						'dots': false,
						'nav': true
					}">
						<div class="product-default">
							<figure>
								<a href="javascript:void(0)">
									<img src="{{ asset('public/all/website') }}/assets/images/products/product-10.jpg" alt="product">
								</a>
								<div class="label-group">
									<div class="product-label label-hot">HOT</div>
									<div class="product-label label-sale">20% Off</div>
								</div>
							</figure>
							<div class="product-details">
								<div class="category-list">
									<a href="javascript:void(0)" class="product-category">Category</a>
								</div>
								<h3 class="product-title">
									<a href="javascript:void(0)">Product Short Name</a>
								</h3>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:80%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<del class="old-price">$59.00</del>
									<span class="product-price">$49.00</span>
								</div><!-- End .price-box -->
								<div class="product-action">
									<a href="javascript:void(0)" class="btn-icon-wish"><i class="icon-heart"></i></a>
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal">ADD TO CART</button>
									<a href="javascript:void(0)" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
								</div>
							</div><!-- End .product-details -->
						</div>
						<div class="product-default">
							<figure>
								<a href="javascript:void(0)">
									<img src="{{ asset('public/all/website') }}/assets/images/products/product-3.jpg" alt="product">
								</a>
								<div class="label-group">
									<div class="product-label label-hot">HOT</div>
									<div class="product-label label-sale">30% Off</div>
								</div>
							</figure>
							<div class="product-details">
								<div class="category-list">
									<a href="javascript:void(0)" class="product-category">Category</a>
								</div>
								<h3 class="product-title">
									<a href="javascript:void(0)">Product Short Name</a>
								</h3>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:80%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<del class="old-price">$59.00</del>
									<span class="product-price">$49.00</span>
								</div><!-- End .price-box -->
								<div class="product-action">
									<a href="javascript:void(0)" class="btn-icon-wish"><i class="icon-heart"></i></a>
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal">ADD TO CART</button>
									<a href="javascript:void(0)" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
								</div>
							</div><!-- End .product-details -->
						</div>
						<div class="product-default">
							<figure>
								<a href="javascript:void(0)">
									<img src="{{ asset('public/all/website') }}/assets/images/products/product-13.jpg" alt="product">
								</a>
							</figure>
							<div class="product-details">
								<div class="category-list">
									<a href="javascript:void(0)" class="product-category">Category</a>
								</div>
								<h3 class="product-title">
									<a href="javascript:void(0)">Product Short Name</a>
								</h3>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:80%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<del class="old-price">$59.00</del>
									<span class="product-price">$49.00</span>
								</div><!-- End .price-box -->
								<div class="product-action">
									<a href="javascript:void(0)" class="btn-icon-wish"><i class="icon-heart"></i></a>
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal">ADD TO CART</button>
									<a href="javascript:void(0)" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
								</div>
							</div><!-- End .product-details -->
						</div>
						<div class="product-default">
							<figure>
								<a href="javascript:void(0)">
									<img src="{{ asset('public/all/website') }}/assets/images/products/product-2.jpg" alt="product">
								</a>
								<div class="label-group">
									<div class="product-label label-hot">HOT</div>
									<div class="product-label label-sale">40% Off</div>
								</div>
							</figure>
							<div class="product-details">
								<div class="category-list">
									<a href="javascript:void(0)" class="product-category">Category</a>
								</div>
								<h3 class="product-title">
									<a href="javascript:void(0)">Product Short Name</a>
								</h3>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:80%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<del class="old-price">$59.00</del>
									<span class="product-price">$49.00</span>
								</div><!-- End .price-box -->
								<div class="product-action">
									<a href="javascript:void(0)" class="btn-icon-wish"><i class="icon-heart"></i></a>
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal">ADD TO CART</button>
									<a href="javascript:void(0)" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
								</div>
							</div><!-- End .product-details -->
						</div>
						<div class="product-default">
							<figure>
								<a href="javascript:void(0)">
									<img src="{{ asset('public/all/website') }}/assets/images/products/product-8.jpg" alt="product">
								</a>
								<div class="label-group">
									<div class="product-label label-hot">HOT</div>
									<div class="product-label label-sale">15% Off</div>
								</div>
								<div class="label-group">
									<div class="product-label label-hot">HOT</div>
								</div>
							</figure>
							<div class="product-details">
								<div class="category-list">
									<a href="javascript:void(0)" class="product-category">Category</a>
								</div>
								<h3 class="product-title">
									<a href="javascript:void(0)">Product Short Name</a>
								</h3>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:80%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<del class="old-price">$59.00</del>
									<span class="product-price">$49.00</span>
								</div><!-- End .price-box -->
								<div class="product-action">
									<a href="javascript:void(0)" class="btn-icon-wish"><i class="icon-heart"></i></a>
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal">ADD TO CART</button>
									<a href="javascript:void(0)" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
								</div>
							</div><!-- End .product-details -->
						</div>
						<div class="product-default">
							<figure>
								<a href="javascript:void(0)">
									<img src="{{ asset('public/all/website') }}/assets/images/products/product-1.jpg" alt="product">
								</a>
								<div class="label-group">
									<div class="product-label label-hot">HOT</div>
								</div>
							</figure>
							<div class="product-details">
								<div class="category-list">
									<a href="javascript:void(0)" class="product-category">Category</a>
								</div>
								<h3 class="product-title">
									<a href="javascript:void(0)">Product Short Name</a>
								</h3>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:80%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<del class="old-price">$59.00</del>
									<span class="product-price">$49.00</span>
								</div><!-- End .price-box -->
								<div class="product-action">
									<a href="javascript:void(0)" class="btn-icon-wish"><i class="icon-heart"></i></a>
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal">ADD TO CART</button>
									<a href="javascript:void(0)" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
								</div>
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .featured-proucts -->
				</div>
			</section>

			<section class="new-products-section">
				<div class="container">
					<h2 class="section-title heading-border ls-20 border-0">New Arrivals</h2>

					<div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center" data-owl-options="{
						'dots': false,
						'nav': true,
						'responsive': {
							'992': {
								'items': 5
							}
						}
					}">
						<div class="product-default">
							<figure>
								<a href="javascript:void(0)">
									<img src="{{ asset('public/all/website') }}/assets/images/products/product-10.jpg" alt="product">
								</a>
								<div class="label-group">
									<div class="product-label label-hot">HOT</div>
								</div>
							</figure>
							<div class="product-details">
								<div class="category-list">
									<a href="javascript:void(0)" class="product-category">Category</a>
								</div>
								<h3 class="product-title">
									<a href="javascript:void(0)">Product Short Name</a>
								</h3>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:80%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<del class="old-price">$59.00</del>
									<span class="product-price">$49.00</span>
								</div><!-- End .price-box -->
								<div class="product-action">
									<a href="javascript:void(0)" class="btn-icon-wish"><i class="icon-heart"></i></a>
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal">ADD TO CART</button>
									<a href="javascript:void(0)" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
								</div>
							</div><!-- End .product-details -->
						</div>
						<div class="product-default">
							<figure>
								<a href="javascript:void(0)">
									<img src="{{ asset('public/all/website') }}/assets/images/products/product-3.jpg" alt="product">
								</a>
								<div class="label-group">
									<div class="product-label label-hot">HOT</div>
								</div>
							</figure>
							<div class="product-details">
								<div class="category-list">
									<a href="javascript:void(0)" class="product-category">Category</a>
								</div>
								<h3 class="product-title">
									<a href="javascript:void(0)">Product Short Name</a>
								</h3>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:80%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<del class="old-price">$59.00</del>
									<span class="product-price">$49.00</span>
								</div><!-- End .price-box -->
								<div class="product-action">
									<a href="javascript:void(0)" class="btn-icon-wish"><i class="icon-heart"></i></a>
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal">ADD TO CART</button>
									<a href="javascript:void(0)" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
								</div>
							</div><!-- End .product-details -->
						</div>
						<div class="product-default">
							<figure>
								<a href="javascript:void(0)">
									<img src="{{ asset('public/all/website') }}/assets/images/products/product-13.jpg" alt="product">
								</a>
								<div class="label-group">
									<div class="product-label label-sale">20% Off</div>
								</div>
							</figure>
							<div class="product-details">
								<div class="category-list">
									<a href="javascript:void(0)" class="product-category">Category</a>
								</div>
								<h3 class="product-title">
									<a href="javascript:void(0)">Product Short Name</a>
								</h3>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:80%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<del class="old-price">$59.00</del>
									<span class="product-price">$49.00</span>
								</div><!-- End .price-box -->
								<div class="product-action">
									<a href="javascript:void(0)" class="btn-icon-wish"><i class="icon-heart"></i></a>
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal">ADD TO CART</button>
									<a href="javascript:void(0)" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
								</div>
							</div><!-- End .product-details -->
						</div>
						<div class="product-default">
							<figure>
								<a href="javascript:void(0)">
									<img src="{{ asset('public/all/website') }}/assets/images/products/product-2.jpg" alt="product">
								</a>
								<div class="label-group">
									<div class="product-label label-sale">30% Off</div>
								</div>
							</figure>
							<div class="product-details">
								<div class="category-list">
									<a href="javascript:void(0)" class="product-category">Category</a>
								</div>
								<h3 class="product-title">
									<a href="javascript:void(0)">Product Short Name</a>
								</h3>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:80%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<del class="old-price">$59.00</del>
									<span class="product-price">$49.00</span>
								</div><!-- End .price-box -->
								<div class="product-action">
									<a href="javascript:void(0)" class="btn-icon-wish"><i class="icon-heart"></i></a>
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal">ADD TO CART</button>
									<a href="javascript:void(0)" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
								</div>
							</div><!-- End .product-details -->
						</div>
						<div class="product-default">
							<figure>
								<a href="javascript:void(0)">
									<img src="{{ asset('public/all/website') }}/assets/images/products/product-8.jpg" alt="product">
								</a>
								<div class="label-group">
									<div class="product-label label-hot">HOT</div>
								</div>
							</figure>
							<div class="product-details">
								<div class="category-list">
									<a href="javascript:void(0)" class="product-category">Category</a>
								</div>
								<h3 class="product-title">
									<a href="javascript:void(0)">Product Short Name</a>
								</h3>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:80%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<del class="old-price">$59.00</del>
									<span class="product-price">$49.00</span>
								</div><!-- End .price-box -->
								<div class="product-action">
									<a href="javascript:void(0)" class="btn-icon-wish"><i class="icon-heart"></i></a>
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal">ADD TO CART</button>
									<a href="javascript:void(0)" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
								</div>
							</div><!-- End .product-details -->
						</div>
						<div class="product-default">
							<figure>
								<a href="javascript:void(0)">
									<img src="{{ asset('public/all/website') }}/assets/images/products/product-1.jpg" alt="product">
								</a>
								<div class="label-group">
									<div class="product-label label-sale">20% Off</div>
								</div>
							</figure>
							<div class="product-details">
								<div class="category-list">
									<a href="javascript:void(0)" class="product-category">Category</a>
								</div>
								<h3 class="product-title">
									<a href="javascript:void(0)">Product Short Name</a>
								</h3>
								<div class="ratings-container">
									<div class="product-ratings">
										<span class="ratings" style="width:80%"></span><!-- End .ratings -->
										<span class="tooltiptext tooltip-top"></span>
									</div><!-- End .product-ratings -->
								</div><!-- End .product-container -->
								<div class="price-box">
									<del class="old-price">$59.00</del>
									<span class="product-price">$49.00</span>
								</div><!-- End .price-box -->
								<div class="product-action">
									<a href="javascript:void(0)" class="btn-icon-wish"><i class="icon-heart"></i></a>
									<button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal">ADD TO CART</button>
									<a href="javascript:void(0)" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
								</div>
							</div><!-- End .product-details -->
						</div>
					</div><!-- End .featured-proucts -->

					<div class="banner banner-big-sale mb-5" style="background: #2A95CB center/cover url('{{ asset('public/all/website') }}/assets/images/banners/banner-4.jpg');">
						<div class="banner-content row align-items-center py-4 mx-0">
							<div class="col-md-9">
								<h2 class="text-white text-uppercase ls-n-20 mb-md-0 px-4">
									<b class="d-inline-block mr-4 mb-1 mb-md-0">Big Sale</b>
									All new fashion brands items up to 70% off
									<small class="text-transform-none align-middle">Online Purchases Only</small>
								</h2>
							</div>
							<div class="col-md-3 text-center text-md-right">
								<a class="btn btn-light btn-white btn-lg mr-3" href="javascript:void(0)">View Sale</a>
							</div>
						</div>
					</div>

					<h2 class="section-title heading-border border-0 mb-5">Browse Categories</h2>

					<div class="categories-slider owl-carousel owl-theme show-nav-hover nav-outer">
						<div class="product-category">
							<a href="javascript:void(0)">
								<figure>
									<img src="{{ asset('public/all/website') }}/assets/images/products/categories/category-1.jpg" alt="category">
								</figure>
								<div class="category-content">
									<h3>Dress</h3>
									<span><mark class="count">3</mark> products</span>
								</div>
							</a>
						</div>
						<div class="product-category">
							<a href="javascript:void(0)">
								<figure>
									<img src="{{ asset('public/all/website') }}/assets/images/products/categories/category-2.jpg" alt="category">
								</figure>
								<div class="category-content">
									<h3>Watches</h3>
									<span><mark class="count">3</mark> products</span>
								</div>
							</a>
						</div>
						<div class="product-category">
							<a href="javascript:void(0)">
								<figure>
									<img src="{{ asset('public/all/website') }}/assets/images/products/categories/category-3.jpg" alt="category">
								</figure>
								<div class="category-content">
									<h3>Watches</h3>
									<span><mark class="count">3</mark> products</span>
								</div>
							</a>
						</div>
						<div class="product-category">
							<a href="javascript:void(0)">
								<figure>
									<img src="{{ asset('public/all/website') }}/assets/images/products/categories/category-2.jpg" alt="category">
								</figure>
								<div class="category-content">
									<h3>Watches</h3>
									<span><mark class="count">3</mark> products</span>
								</div>
							</a>
						</div>
						<div class="product-category">
							<a href="javascript:void(0)">
								<figure>
									<img src="{{ asset('public/all/website') }}/assets/images/products/categories/category-2.jpg" alt="category">
								</figure>
								<div class="category-content">
									<h3>Watches</h3>
									<span><mark class="count">3</mark> products</span>
								</div>
							</a>
						</div>
						<div class="product-category">
							<a href="javascript:void(0)">
								<figure>
									<img src="{{ asset('public/all/website') }}/assets/images/products/categories/category-2.jpg" alt="category">
								</figure>
								<div class="category-content">
									<h3>Watches</h3>
									<span><mark class="count">3</mark> products</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>

			<section class="feature-boxes-container">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="feature-box px-sm-5 feature-box-simple text-center">
								<i class="icon-earphones-alt"></i>

								<div class="feature-box-content">
									<h3 class="m-b-1">Customer Support</h3>
									<h5 class="m-b-3">You Won't Be Alone</h5>

									<p>We really care about you and your website as much as you do. Purchasing Porto or any other theme from us you get 100% free support.</p>
								</div><!-- End .feature-box-content -->
							</div><!-- End .feature-box -->
						</div><!-- End .col-md-4 -->

						<div class="col-md-4">
							<div class="feature-box px-sm-5 feature-box-simple text-center">
								<i class="icon-credit-card"></i>

								<div class="feature-box-content">
									<h3 class="m-b-1">Fully Customizable</h3>
									<h5 class="m-b-3">Tons Of Options</h5>

									<p>With Porto you can customize the layout, colors and styles within only a few minutes. Start creating an amazing website right now!</p>
								</div><!-- End .feature-box-content -->
							</div><!-- End .feature-box -->
						</div><!-- End .col-md-4 -->

						<div class="col-md-4">
							<div class="feature-box px-sm-5 feature-box-simple text-center">
								<i class="icon-action-undo"></i>

								<div class="feature-box-content">
									<h3 class="m-b-1">Powerful Admin</h3>
									<h5 class="m-b-3">Made To Help You</h5>

									<p>Porto has very powerful admin features to help customer to build their own shop in minutes without any special skills in web development.</p>
								</div><!-- End .feature-box-content -->
							</div><!-- End .feature-box -->
						</div><!-- End .col-md-4 -->
					</div><!-- End .row -->
				</div><!-- End .container-->
			</section><!-- End .feature-boxes-container -->

			<section class="promo-section bg-dark" data-parallax="{'speed': 1.8, 'enableOnMobile': true}" data-image-src="{{ asset('public/all/website') }}/assets/images/banners/banner-5.jpg">
				<div class="promo-banner banner container text-uppercase">
					<div class="banner-content row align-items-center text-center">
						<div class="col-md-4 ml-xl-auto text-md-right">
							<h2 class="mb-md-0 text-white">Top Fashion<br>Deals</h2>
						</div>
						<div class="col-md-4 col-xl-3 pb-4 pb-md-0">
							<a href="javascript:void(0)" class="btn btn-dark btn-black ls-10">View Sale</a>
						</div>
						<div class="col-md-4 mr-xl-auto text-md-left">
							<h4 class="mb-1 coupon-sale-text p-0 d-block ls-10 text-transform-none"><b>Exclusive COUPON</b></h4>
							<h5 class="mb-2 coupon-sale-text text-white ls-10 p-0"><i class="ls-0">UP TO</i><b class="text-white bg-secondary">$100</b> OFF</h5>
						</div>
					</div>
				</div>
			</section>

			<section class="blog-section">
				<div class="container">
					<h2 class="section-title heading-border border-0 mb-2">Latest News</h2>

					<div class="owl-carousel owl-theme" data-owl-options="{
						'loop': false,
						'margin': 20,
						'autoHeight': true,
						'autoplay': false,
						'dots': false,
						'items': 2,
						'responsive': {
							'576': {
								'items': 3
							},
							'768': {
								'items': 4
							}
						}
					}">
						<article class="post">
							<div class="post-media">
								<a href="javascript:void(0)">
									<img src="{{ asset('public/all/website') }}/assets/images/blog/home/post-1.jpg" alt="Post" width="225" height="280">
								</a>
								<div class="post-date">
									<span class="day">26</span>
									<span class="month">Feb</span>
								</div>
							</div><!-- End .post-media -->

							<div class="post-body">
								<h2 class="post-title">
									<a href="javascript:void(0)">Top New Collection</a>
								</h2>
								<div class="post-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
								</div><!-- End .post-content -->
								<a href="javascript:void(0)" class="post-comment">0 Comments</a>
							</div><!-- End .post-body -->
						</article><!-- End .post -->

						<article class="post">
							<div class="post-media">
								<a href="javascript:void(0)">
									<img src="{{ asset('public/all/website') }}/assets/images/blog/home/post-2.jpg" alt="Post" width="225" height="280">
								</a>
								<div class="post-date">
									<span class="day">26</span>
									<span class="month">Feb</span>
								</div>
							</div><!-- End .post-media -->

							<div class="post-body">
								<h2 class="post-title">
									<a href="javascript:void(0)">Fashion Trends</a>
								</h2>
								<div class="post-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
								</div><!-- End .post-content -->
								<a href="javascript:void(0)" class="post-comment">0 Comments</a>
							</div><!-- End .post-body -->
						</article><!-- End .post -->

						<article class="post">
							<div class="post-media">
								<a href="javascript:void(0)">
									<img src="{{ asset('public/all/website') }}/assets/images/blog/home/post-3.jpg" alt="Post" width="225" height="280">
								</a>
								<div class="post-date">
									<span class="day">26</span>
									<span class="month">Feb</span>
								</div>
							</div><!-- End .post-media -->

							<div class="post-body">
								<h2 class="post-title">
									<a href="javascript:void(0)">Right Choices</a>
								</h2>
								<div class="post-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
								</div><!-- End .post-content -->
								<a href="javascript:void(0)" class="post-comment">0 Comments</a>
							</div><!-- End .post-body -->
						</article><!-- End .post -->

						<article class="post">
							<div class="post-media">
								<a href="javascript:void(0)">
									<img src="{{ asset('public/all/website') }}/assets/images/blog/home/post-4.jpg" alt="Post" width="225" height="280">
								</a>
								<div class="post-date">
									<span class="day">26</span>
									<span class="month">Feb</span>
								</div>
							</div><!-- End .post-media -->

							<div class="post-body">
								<h2 class="post-title">
									<a href="javascript:void(0)">Perfect Accessories</a>
								</h2>
								<div class="post-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
								</div><!-- End .post-content -->
								<a href="javascript:void(0)" class="post-comment">0 Comments</a>
							</div><!-- End .post-body -->
						</article><!-- End .post -->
					</div>

					<hr class="mt-0 m-b-5">

					<div class="brands-slider owl-carousel owl-theme images-center pb-2">
						<img src="{{ asset('public/all/website') }}/assets/images/brands/brand1.png" width="140" height="60" alt="brand">
						<img src="{{ asset('public/all/website') }}/assets/images/brands/brand2.png" width="140" height="60" alt="brand">
						<img src="{{ asset('public/all/website') }}/assets/images/brands/brand3.png" width="140" height="60" alt="brand">
						<img src="{{ asset('public/all/website') }}/assets/images/brands/brand4.png" width="140" height="60" alt="brand">
						<img src="{{ asset('public/all/website') }}/assets/images/brands/brand5.png" width="140" height="60" alt="brand">
						<img src="{{ asset('public/all/website') }}/assets/images/brands/brand6.png" width="140" height="60" alt="brand">
					</div><!-- End .brands-slider -->

					<hr class="mt-4 m-b-5">

					<div class="product-widgets-container row mb-2 pb-2">
						<div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
							<h4 class="section-sub-title mb-2">Featured Products</h4>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="javascript:void(0)">
										<img src="{{ asset('public/all/website') }}/assets/images/products/small/product-1.jpg">
									</a>
								</figure>
								<div class="product-details">
									<h2 class="product-title">
										<a href="javascript:void(0)">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top"></span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="javascript:void(0)">
										<img src="{{ asset('public/all/website') }}/assets/images/products/small/product-2.jpg">
									</a>
								</figure>
								<div class="product-details">
									<h2 class="product-title">
										<a href="javascript:void(0)">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top">5.00</span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="javascript:void(0)">
										<img src="{{ asset('public/all/website') }}/assets/images/products/small/product-3.jpg">
									</a>
								</figure>
								<div class="product-details">
									<h2 class="product-title">
										<a href="javascript:void(0)">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top"></span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
							<h4 class="section-sub-title mb-2">Best Selling Products</h4>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="javascript:void(0)">
										<img src="{{ asset('public/all/website') }}/assets/images/products/small/product-4.jpg">
									</a>
								</figure>
								<div class="product-details">
									<h2 class="product-title">
										<a href="javascript:void(0)">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top">5.00</span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="javascript:void(0)">
										<img src="{{ asset('public/all/website') }}/assets/images/products/small/product-5.jpg">
									</a>
								</figure>
								<div class="product-details">
									<h2 class="product-title">
										<a href="javascript:void(0)">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top"></span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="javascript:void(0)">
										<img src="{{ asset('public/all/website') }}/assets/images/products/small/product-6.jpg">
									</a>
								</figure>
								<div class="product-details">
									<h2 class="product-title">
										<a href="javascript:void(0)">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top">5.00</span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
							<h4 class="section-sub-title mb-2">Latest Products</h4>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="javascript:void(0)">
										<img src="{{ asset('public/all/website') }}/assets/images/products/small/product-7.jpg">
									</a>
								</figure>
								<div class="product-details">
									<h2 class="product-title">
										<a href="javascript:void(0)">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top"></span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="javascript:void(0)">
										<img src="{{ asset('public/all/website') }}/assets/images/products/small/product-8.jpg">
									</a>
								</figure>
								<div class="product-details">
									<h2 class="product-title">
										<a href="javascript:void(0)">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top">5.00</span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="javascript:void(0)">
										<img src="{{ asset('public/all/website') }}/assets/images/products/small/product-9.jpg">
									</a>
								</figure>
								<div class="product-details">
									<h2 class="product-title">
										<a href="javascript:void(0)">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top"></span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
							<h4 class="section-sub-title mb-2">Top Rated Products</h4>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="javascript:void(0)">
										<img src="{{ asset('public/all/website') }}/assets/images/products/small/product-10.jpg">
									</a>
								</figure>
								<div class="product-details">
									<h2 class="product-title">
										<a href="javascript:void(0)">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top"></span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="javascript:void(0)">
										<img src="{{ asset('public/all/website') }}/assets/images/products/small/product-1.jpg">
									</a>
								</figure>
								<div class="product-details">
									<h2 class="product-title">
										<a href="javascript:void(0)">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top">5.00</span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
							<div class="product-default left-details product-widget">
								<figure>
									<a href="javascript:void(0)">
										<img src="{{ asset('public/all/website') }}/assets/images/products/small/product-2.jpg">
									</a>
								</figure>
								<div class="product-details">
									<h2 class="product-title">
										<a href="javascript:void(0)">Product Short Name</a>
									</h2>
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:100%"></span><!-- End .ratings -->
											<span class="tooltiptext tooltip-top"></span>
										</div><!-- End .product-ratings -->
									</div><!-- End .product-container -->
									<div class="price-box">
										<span class="product-price">$49.00</span>
									</div><!-- End .price-box -->
								</div><!-- End .product-details -->
							</div>
						</div>
					</div><!-- End .row -->
				</div>
			</section>
		</main><!-- End .main -->

		<footer class="footer bg-dark">
			<div class="footer-middle">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-sm-6">
							<div class="widget">
								<h4 class="widget-title">Contact Info</h4>
								<ul class="contact-info">
									<li>
										<span class="contact-info-label">Address</span>123 Street Name, City, England
									</li>
									<li>
										<span class="contact-info-label">Phone</span>Toll Free <a href="tel:">(123) 456-7890</a>
									</li>
									<li>
										<span class="contact-info-label">Email</span> <a href="mailto:mail@example.com">mail@example.com</a>
									</li>
									<li>
										<span class="contact-info-label">Working Days/Hours</span>
										Mon - Sun / 9:00AM - 8:00 PM
									</li>
								</ul>
								<div class="social-icons">
									<a href="javascript:void(0)" class="social-icon social-instagram icon-instagram" target="_blank" title="Instagram"></a>
									<a href="javascript:void(0)" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
									<a href="javascript:void(0)" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
								</div><!-- End .social-icons -->
							</div><!-- End .widget -->
						</div><!-- End .col-lg-3 -->

						<div class="col-lg-3 col-sm-6">
							<div class="widget">
								<h4 class="widget-title">Customer Service</h4>

								<ul class="links">
									<li><a href="javascript:void(0)">Help & FAQs</a></li>
									<li><a href="javascript:void(0)">Order Tracking</a></li>
									<li><a href="javascript:void(0)">Shipping & Delivery</a></li>
									<li><a href="javascript:void(0)">Orders History</a></li>
									<li><a href="javascript:void(0)">Advanced Search</a></li>
									<li><a href="javascript:void(0)">My Account</a></li>
									<li><a href="javascript:void(0)">About Us</a></li>
									<li><a href="javascript:void(0)">Careers</a></li>
									<li><a href="javascript:void(0)">Corporate Sales</a></li>
									<li><a href="javascript:void(0)">Privacy</a></li>
								</ul>
							</div><!-- End .widget -->
						</div><!-- End .col-lg-3 -->

						<div class="col-lg-3 col-sm-6">
							<div class="widget">
								<h4 class="widget-title">Popular Tags</h4>

								<div class="tagcloud">
									<a href="javascript:void(0)">Bag</a>
									<a href="javascript:void(0)">Black</a>
									<a href="javascript:void(0)">Blue</a>
									<a href="javascript:void(0)">Clothes</a>
									<a href="javascript:void(0)">Hub</a>
									<a href="javascript:void(0)">Shirt</a>
									<a href="javascript:void(0)">Shoes</a>
									<a href="javascript:void(0)">Skirt</a>
									<a href="javascript:void(0)">Sports</a>
									<a href="javascript:void(0)">Sweater</a>
								</div>
							</div><!-- End .widget -->
						</div><!-- End .col-lg-3 -->

						<div class="col-lg-3 col-sm-6">
							<div class="widget widget-newsletter">
								<h4 class="widget-title">Subscribe newsletter</h4>
								<p>Get all the latest information on events, sales and offers. Sign up for newsletter:</p>
								<form action="javascript:void(0)" class="mb-0">
									<input type="email" class="form-control m-b-3" placeholder="Email address" required>

									<input type="submit" class="btn btn-primary shadow-none" value="Subscribe">
								</form>
							</div><!-- End .widget -->
						</div><!-- End .col-lg-3 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</div><!-- End .footer-middle -->

			<div class="container">
				<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
					<p class="footer-copyright py-3 pr-4 mb-0">&copy; Porto eCommerce. 2020. All Rights Reserved</p>

					<img src="{{ asset('public/all/website') }}/assets/images/payments.png" alt="payment methods" class="footer-payments py-3">
				</div><!-- End .footer-bottom -->
			</div><!-- End .container -->
		</footer><!-- End .footer -->
	</div><!-- End .page-wrapper -->

	<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

	<div class="mobile-menu-container">
		<div class="mobile-menu-wrapper">
			<span class="mobile-menu-close"><i class="icon-cancel"></i></span>
			<nav class="mobile-nav">
				<ul class="mobile-menu mb-3">
					<li class="active"><a href="javascript:void(0)">Home</a></li>
					<li>
						<a href="javascript:void(0)">Categories</a>
						<ul>
							<li><a href="javascript:void(0)">Full Width Banner</a></li>
							<li><a href="javascript:void(0)">Boxed Slider Banner</a></li>
							<li><a href="javascript:void(0)">Boxed Image Banner</a></li>
							<li><a href="javascript:void(0)">Left Sidebar</a></li>
							<li><a href="javascript:void(0)">Right Sidebar</a></li>
							<li><a href="javascript:void(0)">Product Flex Grid</a></li>
							<li><a href="javascript:void(0)">Horizontal Filter 1</a></li>
							<li><a href="javascript:void(0)">Horizontal Filter 2</a></li>
							<li><a href="javascript:void(0)">List Types</a></li>
							<li><a href="javascript:void(0)">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
							<li><a href="javascript:void(0)">3 Columns Products</a></li>
							<li><a href="javascript:void(0)">4 Columns Products</a></li>
							<li><a href="javascript:void(0)">5 Columns Products</a></li>
							<li><a href="javascript:void(0)">6 Columns Products</a></li>
							<li><a href="javascript:void(0)">7 Columns Products</a></li>
							<li><a href="javascript:void(0)">8 Columns Products</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0)">Products</a>
						<ul>
							<li>
								<a href="javascript:void(0)">Variations</a>
								<ul>
									<li><a href="javascript:void(0)">Horizontal Thumbs</a></li>
									<li><a href="javascript:void(0)">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
									<li><a href="javascript:void(0)">Inner Zoom</a></li>
									<li><a href="javascript:void(0)">Addtocart Sticky</a></li>
									<li><a href="javascript:void(0)">Accordion Tabs</a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0)">Variations</a>
								<ul>
									<li><a href="javascript:void(0)">Sticky Tabs</a></li>
									<li><a href="javascript:void(0)">Simple Product</a></li>
									<li><a href="javascript:void(0)">With Left Sidebar</a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0)">Product Layout Types</a>
								<ul>
									<li><a href="javascript:void(0)">Default Layout</a></li>
									<li><a href="javascript:void(0)">Extended Layout</a></li>
									<li><a href="javascript:void(0)">Full Width Layout</a></li>
									<li><a href="javascript:void(0)">Grid Images Layout</a></li>
									<li><a href="javascript:void(0)">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
									<li><a href="javascript:void(0)">Sticky Right Side Info</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0)">Pages<span class="tip tip-hot">Hot!</span></a>
						<ul>
							<li><a href="javascript:void(0)">Shopping Cart</a></li>
							<li>
								<a href="javascript:void(0)">Checkout</a>
								<ul>
									<li><a href="javascript:void(0)">Checkout Shipping</a></li>
									<li><a href="javascript:void(0)">Checkout Shipping 2</a></li>
									<li><a href="javascript:void(0)">Checkout Review</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0)">About</a></li>
							<li><a href="javascript:void(0)" class="login-link">Login</a></li>
							<li><a href="javascript:void(0)">Forgot Password</a></li>
						</ul>
					</li>
					<li><a href="javascript:void(0)">Blog</a>
						<ul>
							<li><a href="javascript:void(0)">Blog Post</a></li>
						</ul>
					</li>
					<li><a href="javascript:void(0)">Contact Us</a></li>
					<li><a href="javascript:void(0)">Special Offer!<span class="tip tip-hot">Hot!</span></a></li>
					<li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!<span class="tip tip-new">New</span></a></li>
				</ul>

				<ul class="mobile-menu">
					<li><a href="javascript:void(0)">Track Order </a></li>
					<li><a href="javascript:void(0)">About</a></li>
					<li><a href="javascript:void(0)">Our Stores</a></li>
					<li><a href="javascript:void(0)">Blog</a></li>
					<li><a href="javascript:void(0)">Contact</a></li>
					<li><a href="javascript:void(0)">Help &amp; FAQs</a></li>
				</ul>
			</nav><!-- End .mobile-nav -->

			<div class="social-icons">
				<a href="javascript:void(0)" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
				<a href="javascript:void(0)" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
				<a href="javascript:void(0)" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
			</div><!-- End .social-icons -->
		</div><!-- End .mobile-menu-wrapper -->
	</div><!-- End .mobile-menu-container -->

	<div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form" style="background: #f1f1f1 no-repeat center/cover url({{ asset('public/all/website') }}/assets/images/newsletter_popup_bg.jpg)">
		<div class="newsletter-popup-content">
			<img src="{{ asset('public/all/website') }}/assets/images/logo-black.png" alt="Logo" class="logo-newsletter">
			<h2>BE THE FIRST TO KNOW</h2>
			<p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
			<form action="javascript:void(0)">
				<div class="input-group">
					<input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
					<input type="submit" class="btn" value="Go!">
				</div><!-- End .from-group -->
			</form>
			<div class="newsletter-subscribe">
				<div class="checkbox">
					<label>
						<input type="checkbox" value="1">
						Don't show this popup again
					</label>
				</div>
			</div>
		</div><!-- End .newsletter-popup-content -->
	</div><!-- End .newsletter-popup -->

	<!-- Add Cart Modal -->
	<div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-body add-cart-box text-center">
			<p>You've just added this product to the<br>cart:</p>
			<h4 id="productTitle"></h4>
			<img src="javascript:void(0)" id="productImage" width="100" height="100" alt="adding cart image">
			<div class="btn-actions">
				<a href="javascript:void(0)"><button class="btn-primary">Go to cart page</button></a>
				<a href="javascript:void(0)"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
			</div>
		  </div>
		</div>
	  </div>
	</div>

	<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

	<!-- Plugins JS File -->
	<script src="{{ asset('public/all/website') }}/assets/js/jquery.min.js"></script>
	<script src="{{ asset('public/all/website') }}/assets/js/bootstrap.bundle.min.js"></script>
	<script src="{{ asset('public/all/website') }}/assets/js/optional/isotope.pkgd.min.js"></script>
	<script src="{{ asset('public/all/website') }}/assets/js/plugins.min.js"></script>

	<!-- Main JS File -->
	<script src="{{ asset('public/all/website') }}/assets/js/main.min.js"></script>
</body>
</html>