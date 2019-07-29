<!DOCTYPE html>
<html>

<head>
	<?php require_once 'common/head.php'; ?>
</head>

<body>
	<?php require_once 'common/header.php'; ?>
    
	<main id="productDetail">
		<?php require_once 'common/breadcrumb.php'; ?>
		<div class="uk-container uk-container-center">
			<div class="uk-grid">
				<div class="uk-width-large-3-4">
				<div class="detail uk-grid uk-grid-width-large-1-2 ">
					
						<section class="detail-img">
							<div class="main__img">
								<a href="resources/img/upload/detail-img-1.jpg" title="" class="image img-cover">
									<img src="resources/img/upload/detail-img-1.jpg" alt="product detail">
								</a>

							</div>
							<div class="sub__img">
								<ul class="uk-list uk-clearfix uk-flex sub__img--list owl-carousel">
									<?php for($i = 1; $i <= 5; $i++) { ?>
										<li class="item">
											<a href="" title="" class="image img-scaledown">
												<img src="resources/img/upload/detail-img-<?= $i ?>.jpg" alt="product-detail-<?= $i ?>">
											</a>
										</li>
									<?php } ?>
								</ul>
							</div>

						</section>
	
						<section class="detail-infor">
							<div class="panel__header">
								<h3 class="panel__header--title"><a href="" title="">Sint Turkey</a></h3>
								<div class="rating-review">
									<span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</span>
									<span class="review"> 2 Review(s)</span>
								</div>
								<div class="price-num">
									<span class="price">$100.00</span>
								</div>
							</div>

							<div class="panel__body">
								<div class="stock">
									<span class="stock__icon"><i class="fa fa-check-square-o" aria-hidden="true"></i></span>
									<span class="stock__text">in stock</span>
								</div>
								<div class="description">
									<p>Proin nunc nibh, adipiscing eu nisi id, ultrices suscipit augue. Sed rhoncus hendrerit lacus, et venenatis felis. Donec ut fringilla magna ultrices suscipit augue. Proin nunc nibh, adipiscing eu nisi id, ultrices suscipit augue. Sed rhoncus hendrerit lacus, et venenatis felis. Donec ut fringilla magna ultrices suscipit augue.</p>

								</div>
								<form class="block-choose uk-flex">
									<div class="block-quantity uk-flex">
										<span class="minus"><i class="fa fa-minus" ></i></span>
                                        <input type="number" name="quantity" min="1" class="rangeQty" value="1">
                                        <span class="plus"><i class="fa fa-plus" ></i></span>
									</div>
									<div class="block-btn">
										<ul class="uk-list uk-clearfix uk-flex uk-flex-middle list-choose">
											<li class="icon addToCart">
												<a href="" title="" >
													<i class="fa fa-shopping-cart"></i>
													<span class="addCart">Add to cart</span>
												</a>
											</li>
											<li class="icon">
												<a href="" title="" >
													<i class="fa fa-heart-o"></i>
												</a>
											</li>
											<li class="icon">
												<a href="" title="" >
													<i class="fa fa-exchange"></i>
												</a>
											</li>															
										</ul>
									</div>
								</form>
								<div class="social-share">
									<ul class="uk-list clearfix social-list">
										<li class="item"><span class="text">Share</span></li>
										<li class="item">
											<a href="#" title="" class="icon"><i class="fa fa-facebook" ></i></a>
										</li>
										<li class="item">
											<a href="#" title="" class="icon"><i class="fa fa-twitter"></i></a>
										</li>
										<li class="item">
											<a href="#" title="" class="icon"><i class="fa fa-google-plus"></i></a>
										</li>
									</ul>
								</div>
							</div>

						</section>
					
				</div>
				<div class="tabs">
					<header class="panel__head">
						<ul class="uk-list uk-clearfix uk-flex panel__head--list">
							<li class="item active" data-toggle-tab="description"><a href="#description" title="" ><span class="text">description</span></a></li>
							<li class="item" data-toggle-tab="reviews"><a href="#reviews" title="" ><span class="text">reviews</span><span class="qty">(0)</span></a></li>
						</ul>
					</header>
					<section class="panel__body">
						<div id="description" class="tab-content active">
						    <p class="paragrahp">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretiumLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p><a class="btn-viewMore" href="" title="">View more</a>
							
						</div>
						<div id="reviews" class="tab-content">
							There are no reviews yet.
						</div>
					</section>
				</div>
				<div class="relatedProduct">
					<header class="panel__head">
						<h2 class="panel__head--title"><span>Related Product</span></h2>
					</header>
					<section class="panel__body">
						<div class="panel__body--list owl-carousel">
							<?php for($i = 1; $i <= 4; $i++) { ?>
								<div class="item">

								<div class="product">
									<div class="product-img">
										<a href="" title="" class="image img-scaledown">
											<img src="resources/img/upload/related-pro<?= $i ?>.jpg" alt="related-pro-<?= $i ?>">
										</a>
										<div class="overlay-btn">
											<ul class="uk-list uk-clearfix uk-flex uk-flex-middle list-choose">
												<li class="icon">
													<a href="" title="" >
														<i class="fa fa-shopping-cart"></i>
													</a>
												</li>
												<li class="icon">
													<a href="" title="" >
														<i class="fa fa-exchange"></i>
													</a>
												</li>
												<li class="icon">
													<a href="" title="" >
														<i class="fa fa-heart-o"></i>
													</a>
												</li>
												<li class="icon">
													<a href="" title="" >
														<i class="fa fa-search" ></i>
													</a>
												</li>

											</ul>
										</div>
									</div>	
									<div class="product-info">
										
										<div class="rating-review">
											<span class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											</span>
											<span class="review"> 2 Review(s)</span>
										</div>
										<div class="name-product">
											<a href="" title="" class="name">Fatback Enim Velit</a>
										</div>
										<div class="price">
											<span class="price-num">$100.00</span>
										</div>

									</div>						
								</div>
								</div>
							<?php } ?>
						</div>
					</section>
				</div>
			</div>

			<div class="uk-width-large-1-4">
				<aside class="aside-bar">
					<!-- panel -->
					<div class="panel">
						<header class="panel__head">
							<h3 class="panel__head--title"><span>Categories</span></h3>
						</header>
						<section class="panel__body">
							<ul class="uk-list uk-clearfix panel__body--list">
								<?php for($j = 1; $j <= 12; $j++) { ?>
									<li class="item">
										<a href="" title="" class="uk-flex uk-flex-space-between">
											<span class="name">Accessories</span>
											<span class="quantity">(1)</span>
										</a>
									</li>
								<?php } ?> 
								<li class="item">
									<a href="" title="" class="uk-flex uk-flex-space-between">
										<span class="name">See more +</span>
									</a>
								</li>
							</ul>
						</section>
					</div>
					<div class="banner">
						<div class="banner__img">
							<a href="" title="" class="image img-cover">
								<img src="resources/img/upload/banner-detail.jpg" alt="banner-detail">
							</a>
						</div>
					</div>
					<!-- panel -->
					<div class="panel">
						<header class="panel__head">
							<h3 class="panel__head--title"><span>best sellers</span></h3>
						</header>
						<section class="panel__body">
							<ul class="uk-list uk-clearfix panel__body--list">
								<?php for($j = 1; $j <= 4; $j++) { ?>
									<li class="item">
										<div class="product clearfix">
											<div class="product__infor">
												<div class="rating-review">
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<span class="review"> 2 Review(s)</span>
												</div>
												<div class="name-product">
													<a href="" title="" class="name">Fatback Enim Velit</a>
												</div>
												<div class="price-num">
													<span class="price">$100.00</span>
												</div>
											</div>
											<div class="product__img">
												<a href="" title="" class="image img-scaledown">
													<img src="resources/img/upload/aside-pro-<?= $j ?>.jpg" alt="product hot">
												</a>
											</div>
										</div>
									</li>
								<?php } ?> 
							</ul>
						</section>
					</div>

				</aside>
			</div>
			</div>
		</div>
	
	</main>
<!-- 	<div class="product">
		<header class="product__img">
			<a href="" title="" class="image img-cover">
				<img src="resources/img/upload/related-pro<?= $i ?>.jpg" alt="related-pro<?= $i ?>">
			</a>
		</header>
		<section class="product__infor">
			<div class="rating-review">
				<span class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</span>
				<span class="review"> 2 Review(s)</span>
			</div>
			<div class="name-product">
				<a href="" title="" class="name">Fatback Enim Velit</a>
			</div>
			<div class="price">
				<span class="price-root">$150.00</span>
				<span class="price-sale">$100.00</span>
			</div>
		</section>
	</div> -->

	<?php require_once 'common/footer.php'; ?>
	<?php require_once 'common/offcanvas.php'; ?>
	<?php require_once 'common/script.php'; ?>
</body>

</html>