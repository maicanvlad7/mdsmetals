

<!-- shop-details -->
<section class="shop-details">
	<div class="auto-container">
		<div class="product-details-content">
			<div class="row clearfix">
				<div class="col-lg-6">
					<div class="products-carousel">
						<div class="single-product-view">
							<div class="swiper-container product-content wow fadeInUp" data-wow-delay="300ms">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="image"><img src="<?= $product->image; ?>" alt=""></div>
									</div>
									<div class="swiper-slide">
										<div class="image"><img src="<?= $product->image; ?>" alt=""></div>
									</div>
									<div class="swiper-slide">
										<div class="image"><img src="<?= $product->image; ?>" alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="product-thumbs-wrapper">
							<!-- Swiper -->
							<div class="swiper-container product-thumbs">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="author-thumb"><img src="<?= $product->image; ?>" alt=""></div>
									</div>
									<div class="swiper-slide">
										<div class="author-thumb"><img src="<?= $product->image; ?>" alt=""></div>
									</div>
									<div class="swiper-slide">
										<div class="author-thumb"><img src="<?= $product->image; ?>" alt=""></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 content-column">
					<div class="product-details">
						<div class="title-box">
							<h3><?= $product->title; ?></h3>
							<div class="customer-review clearfix">
								<ul class="rating-box clearfix">
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
								</ul>
								<a href="product-details.html">Av. on inquiry</a>
							</div>
							<h4>$3,400</h4>
						</div>
						<div class="text">
							<ul class="category clearfix">
								<li>Category:</li>
								<li><a href="<?= base_url('category/'. $category->short); ?>"><?=  $category->title; ?></a></li>
							</ul>
							<p><?= $category->excerpt; ?></p>
						</div>
						<ul class="product-info clearfix">
							<li>Certified Product</li>
							<li>Just in time Delivery</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="product-discription">
			<div class="tabs-box">
				<div class="tab-btn-box">
					<ul class="tab-btns tab-buttons centred clearfix">
						<li class="tab-btn active-btn" data-tab="#tab-1">Description</li>
					</ul>
				</div>
				<div class="tabs-content">
					<div class="tab active-tab" id="tab-1">
						<div class="text">
							<?= $product->description == "-" ? 'No product description available. Please contact sales!' : $product->description; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- shop-details end -->

<!-- Related Products -->
<?php if(isset($relProducts) && count($relProducts) - 1 > 0) { ?>
	<section class="related-product">
		<div class="auto-container">
			<div class="sec-title mb-30">
				<h3>Related Products</h3>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 shop-block">
					<div class="inner-box">
						<div class="image"><a href="product-details.html"><img src="assets/images/shop/image-1.jpg" alt=""></a></div>
						<div class="content-upper">
							<h4><a href="product-details.html">Engine Water Pump</a></h4>
							<div class="price">$3,400</div>
						</div>
						<div class="bottom-content">
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="cart"><i class="flaticon-shopping-cart"></i> Add to Cart</div>
							<div class="link"><a href="cart.html"><i class="flaticon-arrow-1"></i></a></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 shop-block">
					<div class="inner-box">
						<div class="image"><a href="product-details.html"><img src="assets/images/shop/image-2.jpg" alt=""></a></div>
						<div class="content-upper">
							<h4><a href="product-details.html">Roller Bearings</a></h4>
							<div class="price">$2,999</div>
						</div>
						<div class="bottom-content">
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="cart"><i class="flaticon-shopping-cart"></i> Add to Cart</div>
							<div class="link"><a href="cart.html"><i class="flaticon-arrow-1"></i></a></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 shop-block">
					<div class="inner-box">
						<div class="image"><a href="product-details.html"><img src="assets/images/shop/image-3.jpg" alt=""></a></div>
						<div class="content-upper">
							<h4><a href="product-details.html">Engine Pitons</a></h4>
							<div class="price">$2,499</div>
						</div>
						<div class="bottom-content">
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="cart"><i class="flaticon-shopping-cart"></i> Add to Cart</div>
							<div class="link"><a href="cart.html"><i class="flaticon-arrow-1"></i></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php }?>















