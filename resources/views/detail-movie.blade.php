@extends('layouts.master')
@section('title')
    Index Page
@endsection
@section('content')
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="E Shop Product Details Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Android Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->

<!-- Web-Fonts -->
	<link href='//fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<!-- //Web-Fonts -->

<!-- Custom-Theme-Files -->
	<link rel="stylesheet" href="css/detail-movie.css" type="text/css" media="all" />
<div class="content">
		<div class="container">

			<h2>Name</h2>

			<div class="product">
				<div class="product-image">
					<img src="images/product-1.jpg" alt="Name-movie">
				</div>
				<div class="product-info">
					<p><span>Đạo Diễn</span>$60.00</p>
					<p><span>Diễn Viên</span>$60.00</p>
					<p><span>Thể Loại</span>Free</p>
					<p><span>Thời Lượng</span>Free</p>
					<p><span>Ngôn Ngữ</span>Free</p>
					<p><span>Rating</span>
						<div class="rating">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked>
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					  </span>
				</div>
						<div class="clear"></div>
					</p>
					<p><span>Quantity</span>
						<select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"flat"}'>
							<option value="">-</option>
							<option value="1">50 ml</option>
							<option value="2">100 ml</option>
							<option value="3">125 ml</option>
							<option value="4">150 ml</option>
						</select>
					</p>
					<div class="cart"><a href="#">Add to Cart</a></div>
				</div>
				<div class="clear"></div>
			</div>

			<div class="accordion">
				<section class="ac-container">
					<div>
						<input id="ac-1" name="accordion-1" type="checkbox" />
						<label for="ac-1">Mô Tả Phim</label>
						<article class="ac-small">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
						</article>
					</div>
					<div>
						<input id="ac-2" name="accordion-1" type="checkbox" />
						<label for="ac-2">Trailer</label>
						<article class="ac-large ac-image">
							<div class="accordion-image">
								<div class="ac-img">
									<img src="images/product-2.jpg" alt="Ferrari">
								</div>
								<div class="ac-img">
									<img src="images/product-3.jpg" alt="Ferrari">
								</div>
								<div class="clear"></div>
							</div>
						</article>
					</div>
					<div>
						<input id="ac-3" name="accordion-1" type="checkbox" />
						<label for="ac-3">Rating & Reviews (40+)</label>
						<article class="ac-large ac-review">
							<h3>"Excellent Fragrance!"</h3>
							<h4>Reno Jean, Certified Buyer.</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							<span>5 Stars</span>
							<a href="#" class="next">Next Review &rarr;</a>
						</article>
					</div>
					<div>
						<input id="ac-4" name="accordion-1" type="checkbox" />
						<label for="ac-4">Shipping Info</label>
						<article class="ac-medium">
							<h3>Shipping</h3>
							<ul class="ship">
								<li class="day">4-10 Business Days</li>
								<li class="home">Free Home Delivery</li>
								<li class="cod">Cash On Delivery Available*</li>
							</ul>
						</article>
					</div>
				</section>
			</div>
		</div>
	</div>
@stop
